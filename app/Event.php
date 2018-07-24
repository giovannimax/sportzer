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

    public function findEvent($id){
        return $this->findOrFail($id);
    }

    public function getEvent(){
        return $this->all();
    }
    
    public function deleteEvent($id){
        return $this->find($id)->delete();
    }

    public function updateEvent($data){
        return $this->find($data['id'])->update(array_except($data, ['id']));
    }
}
