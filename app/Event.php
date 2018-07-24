<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $fillable = [
        'name',
        'category',
        'description',
        'startDate',
        'endDate',
        'venue',
        'expectedParticipants',
    ];
    //
    public function addEvent($data){
        return $this->create($data);
    }
}
