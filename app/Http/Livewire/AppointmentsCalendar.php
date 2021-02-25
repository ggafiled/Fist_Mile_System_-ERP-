<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use \Acaronlex\LaravelCalendar\Calendar;

class AppointmentsCalendar extends Component
{
    public $calendar,$events;
    protected $listeners = ['incrementUserCount' => 'incrementUserCount'];

    public function render()
    {
        return view('livewire.appointments-calendar');
    }
}
