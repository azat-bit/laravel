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
        return $instance->orderBy('name', 'asc')->get();
    }
}