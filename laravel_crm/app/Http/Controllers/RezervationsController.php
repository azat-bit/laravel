<?php

namespace App\Http\Controllers;

use App\Http\Service\RezarvationService;
use App\Http\Service\UserService;
use Illuminate\Http\Request;


class RezervationsController extends Controller
{
    //
    protected $rezarvationService;
    protected $userService;
    public function __construct(RezarvationService $rezarvationService,UserService $userService){
        $this->rezarvationService = $rezarvationService;
        $this->userService = $userService;
    }

    public function save(Request $request, $id) {
        // Fetch the user by ID
        $user = $this->userService->get($id);
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
         }
    
        // Extract start and finish dates from the request
        $startDate = $request->input("startDate");
        $finishDate = $request->input("finishDate");
    
        // Create an array containing reservation data
        $reservationData = [
            'user_id' => $user->id,
            'startDate' => $startDate,
            'finishDate' => $finishDate
        ];
    
        // Pass the reservation data to the service to create the reservation
        $this->rezarvationService->create($reservationData);
    
    return response()->json(['veri ulaştık']);
    }
    
}