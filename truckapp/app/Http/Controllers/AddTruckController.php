<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infotrucks;
use App\Staff;

class AddTruckController extends Controller
{

     //return login function for overstep login

    public function __construct()
    {
        $this->middleware('auth');
    }

    //return login function for overstep login
    
    public function addinfo(Request $res)
    {
    	$pname=$res->pname;
        $addr=$res->addr;
        $contact=$res->contact;

        $truckno=$res->regno;

        $color=$res->color;
        $wheels=$res->wheels;
        $place="On your place";
        $present=1;
        $found=0;
        $booking=0;
        $curid=0;
        $curdate=0;
        
        $scont=Staff::all();
        foreach ($scont as $c) {
            if($contact == $c->phone) 
            {
                $found=1;
            } 
        }
        $truckif=Infotrucks::all();

        foreach($truckif as $tif) 
        {
            if( $tif->truckno == $truckno || $tif->contact == $contact)
            {
                $found=1;
            }
        }
        if($found==1)
        {
            return redirect('/home')->with('warning','Invalid Truck No. Or Contact No.');
        }
        else
        {
            Infotrucks::create(['pname'=>$pname,'address'=>$addr,'contact'=>$contact,'truckno'=>$truckno,'color'=>$color,'wheels'=>$wheels,'place'=>$place,'booking'=>$booking,'present'=>$present,'curid'=>$curid,'curdate'=>$curdate]);
            
             return redirect('/home')->with('success','New Truck Info Added');
        }

    }
}
