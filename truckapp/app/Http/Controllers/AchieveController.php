<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Infotrucks;
use App\Achieve;
use App\Accounting;

class AchieveController extends Controller
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
    
    public function achieve(){
        $place="On your place";
        $trucks=DB::table('infotrucks')->where('place','=',$place)->where('present','=','1')->where('booking','=','1')->orderBy('created_at','desc')->get();
    	return view('extends.achieve',compact('trucks'),compact('place'));
    }
    public function done(Request $res){
        $date=$res->date;
        $truckno=$res->truckno;
        $start=$res->start;
        $dest=$res->destination;
        $amount=$res->amount;
        $percent=$res->percent;
        $get_amount=0;

        $today=Date("Y-m-d");
        $curY=Date("Y");
        $curM=Date("m");
        $curD=Date("d");
        $explodeDate=explode('-',$date);
       
        if($truckno == '')
        {
           return redirect('/achieve')->with('notruck','No Booking Truck To Transport');    
        } 
        elseif($today==$date || $explodeDate[0]<$curY || ($explodeDate[0]==$curY && $explodeDate[1]<$curM) || ($explodeDate[0]==$curY && $explodeDate[1]==$curM && $explodeDate[2]<$curD))
        {
            return redirect('/achieve')->with('indate','Same Date Or Invalid Estimated Date'); 
        }
        elseif($start == $dest)
        {
            return redirect('/achieve')->with('inplace','Invalid Place, Same Place'); 
        }
        else
        {
            $get_amount=$amount*($percent/100);
            $finish=0;
            $payment=0;
            Achieve::create(['estimate_date'=>$date,'truckno'=>$truckno,'start_place'=>$start,'destinate_place'=>$dest,'t_amount'=>$amount,'g_amount'=>$get_amount,'finish'=>$finish]);
            /* Changing truck location and unsign booking */
            $curid=DB::getPdo()->lastInsertId();
            DB::table('infotrucks')->where('truckno','=',$truckno)->update(['place'=>'On road','booking'=>'0','curid'=>$curid,'curdate'=>$date]);
            Accounting::create(['income'=>$get_amount,'payment'=>$payment,'description'=>$truckno]);
            return redirect('/achieve')->with('okay','Successful Saving for Transport'); 
        } 
    }
    public function account(){
        $trucks=Infotrucks::orderBy('created_at','desc')->get();
        return view('extends.account',compact('trucks'));
    }
    public function detailacc($t){
        $deltruck=Achieve::where('truckno','=',$t)->where('finish','=','1')->get();
        return view('extends.delaccount',compact('deltruck'),compact('t'));
    }
    public function net(){
        $acc=Accounting::all();
        return view('extends.net',compact('acc'));
    }
}
