<?php

namespace App\Http\Controllers;

use App\Models\Practical;
use Illuminate\Http\Request;

class PracticalAppController extends Controller
{
    public function save(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "phone"=>"required",
            "feedback"=>"required"
        ],[
            "name.required"=>"Enter your name!",
            "email.required"=>"Enter your email!",
            "phone.required"=>"Enter your phone number!",
            "feedback.required"=>"Enter your feedback!",
        ]);
        Practical::created([
            "name"=>$request->get("name"),
            "email"=>$request->get("email"),
            "phone"=>$request->get("phone"),
            "feedback"=>$request->get("feedback")
        ]);
        return redirect()->back()->with('success','Send feedback success!');
    }
}
