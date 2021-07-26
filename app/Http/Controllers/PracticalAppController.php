<?php

namespace App\Http\Controllers;

use App\Models\Practical_app;
use Illuminate\Http\Request;

class PracticalAppController extends Controller
{
    public function save(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "phone"=>"required",
            "feedback"=>"required"
        ]);
        Practical_app::created([
            "name"=>$request->get("name"),
            "email"=>$request->get("email"),
            "phone"=>$request->get("phone"),
            "feedback"=>$request->get("feedback")
        ]);
    }
}
