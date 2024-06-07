<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    //
    public function login()
    {
        return view("navbar.login");
    }
    public function turlar()
    {
        return view("navbar.turlar");
    }
    public function oteller()
    {
        return view("navbar.oteller");
    }
    public function galeri()
    {
        return view("navbar.galeri");
    }
    public function iletisim()
    {
        return view("navbar.iletisim");
    }


}
