<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserRolePermission extends Component
{
    public function render()
    {
        return view('livewire.user-role-permission')->layout('adminlte::page');
    }
}