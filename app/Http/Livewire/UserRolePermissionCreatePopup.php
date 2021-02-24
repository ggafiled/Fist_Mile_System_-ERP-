<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserRolePermissionCreatePopup extends Component
{

    public $role_count;

    public function mount()
    {
        $this->role_count = 0;
    }

    public function render()
    {
        return view('livewire.user-role-permission-create-popup');
    }

    public function role_count()
    {
        $this->role_count++;
        $this->emit('roleUpdated');
    }
}
