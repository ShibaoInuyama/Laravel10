<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminReservationController extends Controller
{
    private $heures = [
        // créneaux du midi
        '12:00',
        '12:30',
        '13:00',
        '13:30',
    
        // créneaux du soir
        '20:00',
        '20:30',
        '21:00',
        '21:30',
    ];
    // admin/reservation
    public function Index()
    {
        //recup liste résa
        //affiche un template
    }
       // admin/reservation/{id}
    public function Show(){

        //recup UNE resa
        //affiche un template
    }
    public function edit($id){
        $reservation = Reservation::find($id);
        return view('admin.reservation.edit', ['reservation'=>$reservation , 'heures' => $this->heures,
    ]);

    }
    
}
