<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithNavigation;

class NavigationComponent extends Component
{
    use WithNavigation;

    public function goToPage($page)
    {
        $this->navigate($page);
    }

    public function render()
    {
        return view('livewire.navigation-component');
    }
}
