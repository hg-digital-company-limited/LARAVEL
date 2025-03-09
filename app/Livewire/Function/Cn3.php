<?php

namespace App\Livewire\Function;

use Livewire\Component;
use Illuminate\Support\Facades\Cookie;

class Cn3 extends Component
{
    public $password;
    public $capcha;


    public function mount()
    {
        $this->capcha = Cookie::get('capcha') ?? 0;
        Cookie::queue(Cookie::forget('capcha'));
    }

    public function create()
    {
        $this->capcha = Cookie::get('capcha') ?? 0;
        if ($this->capcha) {
            dd('Xác thực thành công', $this->password);
        } else {
            dd('Xác thực thất bại', $this->password);
        }
    }



    public function render()
    {
        return view('livewire.function.cn3');
    }
}
