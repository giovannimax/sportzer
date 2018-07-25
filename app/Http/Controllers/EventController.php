<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;
class EventController extends Controller
{
    //
    public function create(Request $request){
        $event = new Event();
        if($request->filled(['startDate', 'endDate'])){
            $request->merge([
                'startDate' => Carbon::parse($request->startDate)->format('Y-m-d'),
                'endDate' => Carbon::parse($request->endDate)->format('Y-m-d'),
                ]);
        }
        $event->addEvent($request->except('_token'));
        return redirect()->route('event.view')->with('success', 'Event added');
    }

    public function retrieve(){
        $event = new Event();
        $eventList = $event->getEvent();
        return view('organizer.events.events', compact('eventList'));
    }

    public function get($id, Request $request){
        $event = new Event();
        $eventData = $event->findEvent($id);
        if($request->is('*/edit')){
            return view('organizer.events.edit', compact('eventData'));
        }
        else {
            return view('organizer.events.get', compact('eventData'));
        }
    }

    public function update(Request $request, $id){
        $event = new Event();
        if($request->filled(['startDate', 'endDate'])){
            $request->merge([
                'startDate' => Carbon::parse($request->startDate)->format('Y-m-d'),
                'endDate' => Carbon::parse($request->endDate)->format('Y-m-d'),
                ]);
        }
        $request->id = $id;
        $event->updateEvent($request);
        return redirect()->route('event.view')->with('success', 'Event Updated');
    }

    public function delete($id){
        $event = new Event();
        $event->deleteEvent($id);
        return redirect()->route('event.view')->with('success', 'Event Deleted');
    }
}
