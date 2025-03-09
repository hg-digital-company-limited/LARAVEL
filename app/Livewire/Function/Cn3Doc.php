<?php

namespace App\Livewire\Function;

use Livewire\Component;

class Cn3Doc extends Component
{
    protected $listeners = ['addToCart' => 'addToCart'];
    public function addToCart()
    {
        dd('addToCart');
    }
    public function render()
    {
        return view('livewire.function.cn3-doc');
    }
}
