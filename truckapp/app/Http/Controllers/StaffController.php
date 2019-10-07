<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Accounting;
class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function newstaff()
    {
    	return view('extends.newstaff');
    }
    public function staffdel($id){
    	Staff::where('id','=',$id)->delete();
    	return redirect('/staff')->with('move','One Staff Removed'); 
    }
    public function staffedit($id){
    	 $editid=Staff::whereId($id)->firstOrFail();
    	 return view('extends.staffedit',compact('editid'));
    }

    public function staffupd($id,Request $res)
    {
    	$name=$res->sname;
        $contact=$res->scontact;
        $age=$res->sage;
        $type=$res->jtype;
        $address=$res->saddr;
        $salary=$res->salary;
        $degree=$res->degree;

        if($type == "Clerk")
        {
            if($degree == "Graduated")
            {
                Staff::find($id)->update(['name'=>$name,'phone'=>$contact,'age'=>$age,'job'=>$type,'address'=>$address,'salary'=>$salary,'degree'=>$degree]);
                return redirect('/staff')->with('newstaff','Staff Info Updated');
            }
            else
            {
               return redirect('/staff')->with('invdeg','Clerk Need A Degree'); 
            }
        }
        else
        {
           $degree='Not Set';
           Staff::find($id)->update(['name'=>$name,'phone'=>$contact,'age'=>$age,'job'=>$type,'address'=>$address,'salary'=>$salary,'degree'=>$degree]);
            return redirect('/staff')->with('newstaff','Staff Info Updated'); 
        }
    }
    public function pay($id)
    {
        $income=0;
        $salary=0;
        $name="";
        $spay=Staff::select('name','salary')->whereId($id)->get();
        foreach ($spay as $s) {
            $salary=$s->salary;
            $name=$s->name;
        }
        Accounting::create(['income'=>$income,'payment'=>$salary,'description'=>$name]);
        return redirect('/staff')->with('paydone','Payment Have Been Done For A Staff');
    }
}
