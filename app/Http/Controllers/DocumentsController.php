<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Crew;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    //
    //Ensure that Authenticated users can access
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $crews = Crew::with('document')->get();

        return view('document.index',compact('crews'));
    }

    public function create(){
        $crews = Crew::with('document')->get();
        return view('document.create',compact('crews'));
    }

    public function store(){
        $data = request();
            //dd($data['name']);

        $post = new Document;
        $post->crew_id=$data['crew_id'];
        $post->code=$data['code'];
        $post->name=$data['name'];
        $post->document_number=$data['document_number'];
        $post->dateIssued=$data['dateIssued'];
        $post->dateExpiry=$data['dateExpiry'];
        $post->remarks=$data['remarks'];

        $post->save();

        return redirect()->route('document.index')->with('success','Crew Details Sucessfully Save');
    }


}
