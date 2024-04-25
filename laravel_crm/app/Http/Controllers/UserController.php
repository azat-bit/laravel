<?php


namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
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
        $listUser= $this->userService->getUser();
        return view("user.index");
    }
    public function login(LoginRequest $request){
        $data = [
            "email" => $request->input("email"),
            "password" => $request->input("password"),
        ];
        dd($data);
        if(Auth::attempt($data)){ 
            return "Giriş başarılı!";
        }
        return "Giriş başarısız!";
    }
    


}
