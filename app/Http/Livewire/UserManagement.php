<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserManagement extends Component
{
    public $user_count,$users;

    public function __construct()
    {
        $this->user_count = 0;
        $this->users = [];
    }

    public function mount()
    {
        $this->user_count = count(\App\Models\Role::get());
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.user-management')->layout('adminlte::page');
    }
}