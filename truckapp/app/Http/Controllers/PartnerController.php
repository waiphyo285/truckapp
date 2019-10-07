<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Infotrucks;
use App\Achieve;

class PartnerController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function delete($id){
        $aid=0;
        $query=Infotrucks::whereId($id)->get();
        foreach ($query as $q) {
           $aid=$q->curid; 
        }
        Achieve::whereId($aid)->delete();
        Infotrucks::find($id)->update(['present'=>'0','place'=>'Unknown','booking'=>'0','curid'=>'0']); 
        return redirect('/partnership')->with('delete','One Partner Broken Out');
    }

   public function edit($id){
        $truck=Infotrucks::whereId($id)->firstOrFail();
        return view('extends.partedit',compact('truck'));
    } 
    public function resign($id)
    {
        Infotrucks::find($id)->update(['present'=>'1','place'=>'On your place']);
         return redirect('/home')->with('success','New Truck Info Added');
    }
    public function update(Request $res,$id){

        $pname=$res->pname;
        $addr=$res->addr;
        $contact=$res->contact;
        $truckno=$res->regno;

        $color=$res->color;
        $wheels=$res->wheels;

        $date=$res->date;
        $found=1;
        $count=0;

        $trucks=Infotrucks::all();
        foreach ($trucks as $t) {

            if($t->id != $id)
            {
                if($t->truckno != $truckno && $t->contact != $contact)
                {
                    $found=0;
                }
            }
            $count++;
        }
        if($found == 0 || $count==1)
        {
            Infotrucks::find($id)->update(['pname'=>$pname,'address'=>$addr,'contact'=>$contact,'truckno'=>$truckno,'color'=>$color,'wheels'=>$wheels,'date'=>$date]);
            return redirect('/partnership')->with('change','Partner Info Updated');
        }
        else
        {
            return redirect('/partnership')->with('unchange','Something Wrong');;
        } 

        
    }

    public function detail($id){
        $truck=Infotrucks::whereId($id)->firstOrFail();
        return view('extends.partdetail',compact('truck'));
    }
    public function present(){
         $trucks=Infotrucks::where('present','=','1')->orderBy('created_at','desc')->get();
        return view('extends.partnership',compact('trucks'));
    }
    public function left(){
         $trucks=Infotrucks::where('present','=','0')->orderBy('created_at','desc')->get();
        return view('extends.partnership',compact('trucks'));
    }
}
