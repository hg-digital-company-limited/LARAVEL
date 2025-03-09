<?php

namespace App\Livewire\Function;

use App\Models\Transaction;
use Livewire\Component;

class Cn1 extends Component
{
    public $transactions;
    public function mount()
    {
        $this->loadTransactions();
    }
    public function deleteAllTransactions()
    {
        // Xóa tất cả giao dịch
        Transaction::truncate(); // Hoặc Transaction::query()->delete();
        $this->loadTransactions(); // Tải lại danh sách giao dịch
        session()->flash('message', 'All transactions have been deleted.'); // Thông báo thành công
    }
    public function loadTransactions()
    {
        // Lấy tất cả giao dịch từ cơ sở dữ liệu
        $this->transactions = Transaction::all();
    }

    public function render()
    {
        return view('livewire.function.cn1');
    }
}
