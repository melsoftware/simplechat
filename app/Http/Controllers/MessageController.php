<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        return Message::orderBy("id","desc")->limit(10)->get()->reverse();
    }

    public function store($name, $message){
        return Message::create(["name"=>$name, "message"=>$message]);
    }

    public function show($created_at){
        //dd($created_at);
        $fecha = \Carbon\Carbon::createFromFormat("Y-m-d H:i:s",$created_at);
        //dd($fecha);
        return Message::where("created_at",">",$fecha)->get();
    }
}
