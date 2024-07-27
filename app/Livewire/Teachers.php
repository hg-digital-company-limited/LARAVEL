<?php

namespace App\Livewire;

use Livewire\Component;

class Teachers extends Component
{
    public function render()
    {
        return view('livewire.teachers')->layout('livewire.layouts.base');
    }
}
