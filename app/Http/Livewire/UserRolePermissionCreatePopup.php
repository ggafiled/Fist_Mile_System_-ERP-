<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserRolePermissionCreatePopup extends Component
{
    protected $notification, $notifications = [];

    public function mount()
    {
        $this->notification = array('message' => '','alert_type' => 'success');
    }

    public function render()
    {
        return view('livewire.user-role-permission-create-popup');
    }

    public function role_count()
    {
        $this->emit('incrementRoleCount');
    }
}