<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserManagement extends Component
{
    public $user_count,$users;
    protected $listeners = ['incrementUserCount' => 'incrementUserCount'];

    public function __construct()
    {
        $this->user_count = 0;
        $this->users = [];
    }

    public function mount()
    {
        $this->user_count = count(\App\Models\User::get());
        $this->users = User::all();
        $this->dispatchBrowserEvent('mounted');
    }

    public function render()
    {
        return view('livewire.user-management');
    }
    public function home()
    {
        return view('home');
    }

    public function incrementUserCount()
    {
        $this->user_count++;
    }
}
