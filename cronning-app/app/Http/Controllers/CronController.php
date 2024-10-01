<?php

namespace App\Http\Controllers;
use App\Models\Cron;

use Illuminate\Http\Request;

class CronController extends Controller
{

    public function index(){
        $crons = Cron::latest()->get();
        if(!$crons){
            return response()->json(['message' => 'Cron records are not found.'],404);
        }
        return response()->json(['crons'=>$crons], 200);
    }

    public function show($id){
        
        $cron = Cron::findOrFail($id);
        if(!$cron){
            return response()->json(['message'=>'Cron record not found'],404);
        }

        return response()->json(['cron'=>$cron], 200);
    }

    public function store(Request $request){
        $request -> validate([
            'title'=> 'required|max:255',
            'script' => 'required|max:255'
        ]);
    }
    
}
