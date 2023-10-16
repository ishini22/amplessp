<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\User;
class roleController extends Controller
{
    public function index(){

        $role=Auth::user()->role;
    
        if($role=='1'){
            $user = User::get();

            return view('admin',compact('user'));
    
        }elseif($role=='2'){
        
        return view('staff');
        
        }
        
        else{
        
        return view('customer');
        
        }
        
     }
     public function adduser(){
        return view('addusers');
     }


     public function saveuser(Request $request){

        $name = $request->name;

        $email=$request->email;

        $password=bcrypt($request->password);

        $u=new User();

        $u->name=$name;

        $u->email=$email;

        $u->password=$password;

        $u->save();

        return redirect()->back();




   }

     public function edituser($id){

        $user = User::where('id','=',$id)->first();

        return view('editusers',compact('user'));

    }

    public function updateuser(Request $request){

        $id=$request->id;

        $name = $request->name;

        $email=$request->email;

        $password=$request->password;

        User::where('id','=',$id)->update([

        'name'=>$name,

        'email'=>$email,

        'password'=>$password

        ]);

        return redirect()->back()->with('success','user Updated successfully');

    }

    public function deleteuser($id){

        User::where('id','=',$id)->delete();
        
        return redirect()->back()->with('success','user deleted successfully');
        
        }
        
}



