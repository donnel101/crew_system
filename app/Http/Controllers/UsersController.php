<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(){
        return view('user.index');
    }

    public function create(){
        return view('user.create');
    }

    public function destroy($id){

        $crew = Crew::find($id);
        $crew->delete();

        return redirect()->rout('user.index')->with('success','Crew Deleted Sucessfully');
    }
}
