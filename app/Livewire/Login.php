<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Login extends Component
{
    public $name, $password;
    public $register_name, $register_password, $register_password_confirmation;

    public function login()
    {
        $this->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['name' => $this->name, 'password' => $this->password])) {
            session()->regenerate();
            return redirect()->route('home'); // Chuyển hướng sau khi đăng nhập thành công
        }

        session()->flash('error', 'Tên đăng nhập hoặc mật khẩu không đúng!');
    }

    public function register()
    {

        $user = User::create([
            'name' => '2509roblox',
            'email' => '2509roblox@gmail.com',
            'password' => Hash::make('2509roblox'),
        ]);

        Auth::login($user);
        return redirect()->route('home'); // Chuyển hướng sau khi đăng ký thành công
    }

    public function render()
    {
        return view('livewire.login');
    }
}
