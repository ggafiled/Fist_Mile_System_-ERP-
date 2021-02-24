<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Role;

class UserRolePermission extends Component
{
    public $role_count,$roles;

    protected $listeners = ['incrementRoleCount' => 'incrementRoleCount'];

    public function __construct()
    {
        $this->role_count = 0;
        $this->roles = [];
    }

    public function mount()
    {
        $this->role_count = count(\App\Models\Role::get());
        $this->roles = Role::with('permissions', 'permissions')->get();
        $this->dispatchBrowserEvent('mounted');
    }

    public function render()
    {
        return view('livewire.user-role-permission');
    }

    public function incrementRoleCount()
    {
        $this->role_count++;
    }
}