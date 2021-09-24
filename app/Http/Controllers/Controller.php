<?php

namespace App\Http\Controllers;

use App\Models\first_laravel_project;
use App\Models\User;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function showuserfrom(){

        return view('userform');
    }
    public function storeuserinfodb(\Illuminate\Http\Request $request){
        $user_data= new first_laravel_project();
        $user_data->name = $request->name;
        $user_data->email = $request->email;
        $user_data->phonenumber = $request->number;
        $user_data->save();
       return redirect()->route('showuserdatadb');
    }
    public function showuserdatadb()
    {
         $user_data_db= first_laravel_project::all();
         return view('showuserdata', compact('user_data_db'));
    }
    public  function updateable_user_data($id)
    {
        $users = first_laravel_project::where('id', $id)->first();
        return view('edituserdata')->with(['users'=>$users]);

    }
     public function  upgradingdata(\Illuminate\Http\Request $req)
     {
       $user=first_laravel_project::find($req->id);
       $user->name=$req->name;
       $user->email=$req->email ;
       $user->phonenumber=$req->number;
       $user->save();
       return redirect()->route('showuserdatadb');
     }
     public function confirm_delete_user($id)
     {
         $users=first_laravel_project::where('id',$id)->first();
          return view('confirm')->with(['users'=>$users]);
     }
      public function user_deleted(\Illuminate\Http\Request $req)
      {

      }


}
