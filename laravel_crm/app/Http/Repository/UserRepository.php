<?php

namespace App\Http\Repository;
use App\Models\User;

class UserRepository extends BaseRepository
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    public function getUser(){
        $instance = $this->getModelInstance(User::class);
        return $instance->orderBy('email', 'asc')->first();
    }

    public function get($id):?User{
        $instance = $this->getModelInstance(User::class);
        return $instance->where('id', $id)->first();
    }
  
}
