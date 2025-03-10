<?php

namespace App\Livewire\Function;

use Livewire\Component;

class Cn4 extends Component
{
    public $city;
    public $district;
    public $ward;
    protected $listeners = ['getAddress'];
    public function render()
    {
        return view('livewire.function.cn4');
    }

    public function getAddress()
    {
        dd($this->city, $this->district, $this->ward);
    }
}
