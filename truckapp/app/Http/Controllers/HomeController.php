<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Infotrucks;
use App\Partners;
use App\Profits;
use App\Staff;

class HomeController extends Controller
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
    public function index()
    {
        return view('extends.index');
    }

    public function partnership(){
        // $truckno=DB::table('profits')->select('truckno')->distinct()->get();
        $trucks=Infotrucks::where('present','=','1')->orderBy('created_at','desc')->get();
        return view('extends.partnership',compact('trucks'));
    }

    public function location(){
       // $trucks=Infotrucks::where('place','=','On road')->orderBy('created_at','desc')->get();
        $trucks=DB::table('infotrucks')->select('*')->join('achieves','achieves.id','=','infotrucks.curid')->where('place','=','On road')->where('finish','=','0')->get();
        return view('extends.location',compact('trucks'));
    }
    /* Rerturn same multi info at once*/
    // $truckno=DB::table('profits')->select('truckno')->distinct()->get();
    // return view('extends.profit',compact('truckno'));
    public function staff()
    {
        $staff=Staff::all();
        return view('extends.staff',compact('staff'));
    }

}
