<?php
namespace App\Http\Service;
use App\Http\Repository\UserRepository;
class UserService{

    protected $userRepository;
    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function getUser(){
        return $this->userRepository->getUser();
    }
}
