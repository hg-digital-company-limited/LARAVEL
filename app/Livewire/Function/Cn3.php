<?php

namespace App\Livewire\Function;

use Livewire\Component;

class Cn3 extends Component
{
    public $password;
    public $capcha = false;
    protected $listeners = ['addToCart'];
    public function mount()
    {
    }
    public function create()
    {
        dd([
            'password' => $this->password,
            'capcha' => $this->capcha
        ]);
    }
    public function addToCart()
    {
        $this->capcha = true;
    }
    public function render()
    {
        return view('livewire.function.cn3');
    }
}
