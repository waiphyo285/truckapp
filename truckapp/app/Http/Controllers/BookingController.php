<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infotrucks;
use App\Staff;

class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function booking()
    {
    	$trucks=Infotrucks::where('present','=','1')->where('place','=','On your place')->where('booking','=','0')->get();
        $backtrucks=Infotrucks::where('present','=','1')->where('booking','=','0')->where('place','<>','Unknown')->where('place','<>','On road')->where('place','<>','On your place')->get();
    	return view('extends.booking',compact('trucks'),compact('backtrucks'));
    }
    public function newbooking(Request $res)
    {
    	$truckno=$res->truckno;
    	if($truckno == '')
    	{
    		return redirect('/booking')->with('notruck','No Truck To Add Booking');
    	}
    	Infotrucks::where('truckno','=',$truckno)->update(['booking'=>'1']);
    	return redirect('/achieve')->with('booking','New Booking Added');
    }

    public function addloc($id){
        Infotrucks::find($id)->update(['place'=>'On your place','curdate'=>'0']);
        return redirect('/booking')->with('addloc','This Truck Is In Your Location');
    }
    public function newstaff(Request $res){

        $name=$res->sname;
        $contact=$res->scontact;
        $age=$res->sage;
        $type=$res->jtype;
        $address=$res->saddr;
        $salary=$res->salary;
        $degree=$res->degree;

        $valid=0;
        $scont=Staff::all();
        foreach ($scont as $c) {
            if($contact == $c->phone) 
            {
                $valid=1;
            } 
        }
        $infocont=Infotrucks::all();
        foreach($infocont as $c){
            if($contact == $c->contact)
            {
                $valid=1;
            }
        }
        if($valid == 1)
        {
            return redirect('/newstaff')->with('incon','Contact Number Have Been Existed'); 
        }
        else
        {
            if($type == "Clerk")
            {
                if($degree == "Graduated")
                {
                    Staff::create(['name'=>$name,'phone'=>$contact,'age'=>$age,'job'=>$type,'address'=>$address,'salary'=>$salary,'degree'=>$degree]);
                    return redirect('/newstaff')->with('newstaff','New Staff Added');
                }
                else
                {
                    return redirect('/newstaff')->with('invdeg','Clerk Need A Degree'); 
                }
            }
            else
            {
                $degree='Not Set';
                Staff::create(['name'=>$name,'phone'=>$contact,'age'=>$age,'job'=>$type,'address'=>$address,'salary'=>$salary,'degree'=>$degree]);
                return redirect('/newstaff')->with('newstaff','New Staff Added'); 
            }
        }
       
    }
}
