<?php

namespace App\Http\Repository;
use App\Models\Reservation;

class RezarvationsRepository extends BaseRepository
{
    protected $reservation;
    public function __construct(Reservation $reservation)
    {
        $this->user = $reservation;
    }
    public function get($id):?Reservation{
        $instance = $this->getModelInstance(Reservation::class);
        return $instance->where('id', $id)->first();
    }
    
    // public function getUser(){
    //     $instance = $this->getModelInstance(User::class);
    //     return $instance->orderBy('email', 'asc')->first();
    // }

    // public function get($id):?User{
    //     $instance = $this->getModelInstance(User::class);
    //     return $instance->where('id', $id)->first();
    // }
  
}
