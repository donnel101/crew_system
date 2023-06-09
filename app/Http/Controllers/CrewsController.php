<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use Illuminate\Http\Request;

class CrewsController extends Controller
{
    //
    //Ensure that Authenticated users can access
    public function __construct(){
        $this->middleware('auth');
    }

    //Display of Crew
    public function index(){
        $data = Crew::all();

        return view('crew.index',compact('data'));
    }

    //Create New Crew
    public function create(){
        return view('crew.create');
    }

    //Save or Update Details
    public function store(){

        $data = request();
            //dd($data['name']);

        $post = new Crew;
        $post->first_name=$data['firstname'];
        $post->last_name=$data['lastname'];
        $post->middle_name=$data['middlename'];
        $post->email=$data['email'];
        $post->address=$data['address'];
        $post->education=$data['education'];
        $post->contactDetails=$data['contactdetails'];

        $post->save();

        return redirect()->route('crew.index')->with('success','Crew Details Sucessfully Save');
    }

    //Prepare update for Crew Details throwing existing data
    public function edit(Crew $crew){
        return view('crew.edit',compact('crew'));
    }

    public function update(Request $request){
        // return $request;
        $crew = Crew::find($request->id);
        // return $crew;
        $crew->first_name=$request->first_name;
        $crew->last_name=$request->last_name;
        $crew->middle_name=$request->middle_name;
        $crew->email=$request->email;
        $crew->address=$request->address;
        $crew->education=$request->education;
        $crew->contactDetails=$request->contactDetails;
        $crew->save();
        return $this->index();
    }

    //Delete Crew Detail
    public function destroy($id){

        $crew = Crew::find($id);
        $crew->delete();

        return redirect()->route('crew.index')->with('success','Crew Deleted Sucessfully');
    }
}
