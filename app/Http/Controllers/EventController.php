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
    }
}
