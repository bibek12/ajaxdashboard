<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function register(){
        $user=User::all();
        return view('admin.registeredrole',compact('user'));
    }

    public function registerEdit(Request $request,$id){
        $user=User::find($id);
        return view('admin.edit-role',compact('user'));
    }

    public function updaterole(Request $request,$id){
        $user=User::find($id);
        $user->name=$request->username;
        $user->usertype=$request->usertype;
        $user->update();
        return redirect('/register-role')->with('status','User Role Is Updated Successfully');
    }

    public function deleterole($id){
        $user=User::findorfail($id);
        $user->delete();
        return redirect('/register-role')->with('status','User Role Is Deleted Successfully');

    }
}
