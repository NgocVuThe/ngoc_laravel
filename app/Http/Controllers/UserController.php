<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('crud.index', ['user'=>$user]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/crud');
    }

    public function create()
    {
        return view('crud.insert');
    }

    public function insert(Request $req)
    {
        if(isset($_POST['insert'])){
            $user = new User();
            $user->name = $req->user_name;
            $user->password = $req->user_pass;
            $user->email = $req->user_email;

            $user->save();
            return redirect('crud.add');
        }
    }

    public function testRoute(){
        echo "DAy la Controller";
    }
}
