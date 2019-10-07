<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Achieve;
use App\Event;
use App\Infotrucks;

class LocationController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function yes($curid)
    {
        $carry=$curid;
        return view('extends.event',compact('carry'));
    }
    public function no($curid)
    {
        $today=Date("Y-m-d");
        $getRow=Achieve::where('id','=',$curid)->get(); 
        foreach ($getRow as $gr) {
            $startDate=explode(" ",$gr->created_at);
        }
        if($startDate[0] != $today)
        {
            $getPlace=Achieve::where('id','=',$curid)->get();
            foreach ($getPlace as $gp){
                $curPlace=$gp->destinate_place;
            }
            Infotrucks::where('curid','=',$curid)->update(['place'=>$curPlace,'curid'=>'0']);
            Achieve::find($curid)->update(['finish'=>'1']);
            return redirect('/location')->with('success','Transport Done'); 
        }
        else
        {
            return redirect('/location')->with('samedate','Something Wrong, This Truck Leaves Today');
        }
    }
    public function event($id,Request $res)
    {
        $event=$res->event;
        Event::create(['jointid'=>$id,'event'=>$event]);
        return redirect('/location')->with('addevent','Adding Case Success');
        
    }
    public function finish(){
        $finish=DB::table('achieves')->where('finish','=','1')->get();
        return view('extends.finish',compact('finish'));
    }
    public function cancel($id)
    {
        Achieve::whereId($id)->delete();
        DB::table('infotrucks')->where('curid','=',$id)->update(['curid'=>'0','place'=>'Unknown']);
        return redirect('/location')->with('cancel','This Truck Can Not Transport');
    }
    /*
    public function yourloc(){
        $yourloc=Infotrucks::where('place','=','On your place')->get();
        return view('extends.yourloc',compact('yourloc'));
        return $yourloc;
    } */
    public function viewcase(){
         $cases=DB::table('events')->select('*')->join('achieves','achieves.id','=','events.jointid')->get();
        return view('extends.viewcase',compact('cases'));
    }
       
}
