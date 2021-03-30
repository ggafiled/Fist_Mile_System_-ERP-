<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserManagementCreatePopup extends Component
{


    protected $notification, $notifications = [];

    public function mount()
    {
        $this->notification = array('message' => '','alert_type' => 'success');
    }

    public function render()
    {
        return view('livewire.user-management-create-popup');
    }

    public function user_count()
    {
        $this->emit('incrementUserCount');
    }
}
