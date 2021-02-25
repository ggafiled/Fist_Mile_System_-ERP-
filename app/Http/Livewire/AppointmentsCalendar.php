<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use \Acaronlex\LaravelCalendar\Calendar;

class AppointmentsCalendar extends Component
{
    public $calendar,$events;
    protected $listeners = ['incrementUserCount' => 'incrementUserCount'];

    public function __construct()
    {
        $this->calendar = new Calendar();
        $this->events = [];
    }

    public function mount()
    {
        $this->events[] = \Calendar::event(
            'Event One', //event title
            false, //full day event?
            '2015-02-11T0800', //start time (you can also use Carbon instead of DateTime)
            '2015-02-12T0800', //end time (you can also use Carbon instead of DateTime)
            0 //optionally, you can specify an event ID
        );

        $this->events[] = \Calendar::event(
            "Valentine's Day", //event title
            true, //full day event?
            new \DateTime('2015-02-14'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2015-02-14'), //end time (you can also use Carbon instead of DateTime)
            'stringEventId' //optionally, you can specify an event ID
        );
        $this->calendar->addEvents($this->events)
        ->setOptions([
            'locale' => 'fr',
            'firstDay' => 0,
            'displayEventTime' => true,
            'selectable' => true,
            'initialView' => 'timeGridWeek',
            'headerToolbar' => [
                'end' => 'today prev,next dayGridMonth timeGridWeek timeGridDay'
            ]
        ]);
        $this->calendar->setId('1');
        $this->calendar->setCallbacks([
            'select' => 'function(selectionInfo){}',
            'eventClick' => 'function(event){}'
        ]);
    }

    public function render()
    {
        return view('livewire.appointments-calendar');
    }
}
