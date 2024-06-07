<?php
namespace App\Http\Service;
use App\Http\Repository\UserRepository;
use App\Models\User;
class UserService{

    protected $userRepository;
    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function getUser(){
        return $this->userRepository->getUser();
    }

    public function get($email){
        return $this->userRepository->get($email);
    }
    public function create(array $data): ?User{
        return $this->userRepository->storeEntity(User::class, $data);
    }
}
