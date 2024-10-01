<?php

namespace App\Http\Controllers;
use App\Models\Cron;

use Illuminate\Http\Request;

class CronController extends Controller
{

    public function index(){
        $crons = Cron::latest()->get();
        return response()->json(['crons'=>$crons], 200);
    }

    public function show($id){
        $cron = Cron::findOrFail($id);
         return response()->json(['cron'=>$cron], 200);
    }

    public function store($id){
        $storeCron = Cron::findOrFail($id);

    }
    
}
