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
        
        $cron = Cron::find($id);
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
        $cron = Cron::create($request->all());
        return response()->json(['cron' => $cron]);
    }
    
    public function update(Request $request,$id){
        $cron = Cron::find($id);
        if(!$cron){
            return response()->json(['messae'=>'Student not found'],404);
        }
       $request -> validate([
            'title'=> 'required|max:255',
            'script' => 'required|max:255'
        ]);
        $cron->update($request->all());
        return response()->json(['cron' => $cron]);
    }

    public function destroy($id){
        $cron = Cron::find($id);
        if(!$cron){
            return response()->json(['message' => 'Student not found'],404);
        }  
        $cron->delete();
        return response()->json(['message' => 'Student is deleted']);
    }
}
