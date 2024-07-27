<?php

namespace App\Livewire;

use App\Models\Students;
use Livewire\Component;

class StudentsComponent extends Component
{
    public $student_id, $name, $email, $phone, $student_edit_id, $student_delete_id;

    public $view_student_id, $view_student_name, $view_student_email, $view_student_phone;

    public $searchTerm;

    // Input fields on update validation
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'student_id' => 'required|unique:students,student_id,' . $this->student_edit_id,
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);
    }

    public function storeStudentData()
    {
        // On form submit validation
        $this->validate([
            'student_id' => 'required|unique:students',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);

        // Add Student Data
        $student = new Students();
        $student->student_id = $this->student_id;
        $student->name = $this->name;
        $student->email = $this->email;
        $student->phone = $this->phone;
        $student->save();

        session()->flash('message', 'New student has been added successfully');

        $this->resetInputs();

        // For hide modal after add student success
        $this->dispatch('close-modal');
    }

    public function resetInputs()
    {
        $this->student_id = '';
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->student_edit_id = '';
    }

    public function close()
    {
        $this->resetInputs();
    }

    public function editStudents($id)
    {
        $student = Students::findOrFail($id);

        $this->student_edit_id = $student->id;
        $this->student_id = $student->student_id;
        $this->name = $student->name;
        $this->email = $student->email;
        $this->phone = $student->phone;

        $this->dispatch('show-edit-student-modal');
    }

    public function editStudentData()
    {
        // On form submit validation
        $this->validate([
            'student_id' => 'required|unique:students,student_id,' . $this->student_edit_id,
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);

        $student = Students::findOrFail($this->student_edit_id);
        $student->student_id = $this->student_id;
        $student->name = $this->name;
        $student->email = $this->email;
        $student->phone = $this->phone;
        $student->save();

        session()->flash('message', 'Student has been updated successfully');

        // For hide modal after add student success
        $this->dispatch('close-modal');
    }

    // Delete Confirmation
    public function deleteConfirmation($id)
    {
        $this->student_delete_id = $id; // student id

        $this->dispatch('show-delete-confirmation-modal');
    }

    public function deleteStudentData()
    {
        $student = Students::findOrFail($this->student_delete_id);
        $student->delete();

        session()->flash('message', 'Student has been deleted successfully');

        $this->dispatch('close-modal');

        $this->student_delete_id = '';
    }

    public function cancel()
    {
        $this->student_delete_id = '';
    }

    public function viewStudentDetails($id)
    {
        $student = Students::findOrFail($id);

        $this->view_student_id = $student->student_id;
        $this->view_student_name = $student->name;
        $this->view_student_email = $student->email;
        $this->view_student_phone = $student->phone;

        $this->dispatch('show-view-student-modal');
    }

    public function closeViewStudentModal()
    {
        $this->resetViewInputs();
    }

    private function resetViewInputs()
    {
        $this->view_student_id = '';
        $this->view_student_name = '';
        $this->view_student_email = '';
        $this->view_student_phone = '';
    }

    public function render()
    {
        // Get all students
        $students = Students::where('name', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('email', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('student_id', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('phone', 'like', '%' . $this->searchTerm . '%')
            ->get();

        return view('livewire.students-component', ['students' => $students])
            ->layout('livewire.layouts.base');
    }
}