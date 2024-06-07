<?php
namespace App\Http\Service;
use App\Http\Repository\RezarvationsRepository;
use App\Models\Reservation;
class RezarvationService{

    protected $RezarvationRepository;
    public function __construct(RezarvationsRepository $RezarvationRepository){
        $this->RezarvationRepository = $RezarvationRepository;
    }

    // public function getRezarvation(){
    //     return $this->RezarvationRepository->getRezarvation();
    // }

    // public function get($email){
    //     return $this->RezarvationRepository->get($email);
    // }
    public function create(array $data): ?Reservation{
        return $this->RezarvationRepository->storeEntity(Reservation::class, $data);
    }
    
    public function get($id){
        return $this->RezarvationRepository->get($id);
    }
}
