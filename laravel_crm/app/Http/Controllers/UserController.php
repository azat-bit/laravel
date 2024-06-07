<?php


namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Service\UserService;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function index()
    {
       
        return view("user.index");
    }
    public function login(LoginRequest $request)
    {

        $email = $request->input("email");
        $password = $request->input("password");

        $listUser = $this->userService->getUser();
        if ($listUser && Hash::check($password, $listUser->password)) {
            Auth::login($listUser);
            return "Giriş başarılı!";
        }
        return "Giriş başarısız!";
    }



}
