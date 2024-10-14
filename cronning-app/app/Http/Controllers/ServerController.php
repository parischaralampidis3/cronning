<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Server;
class ServerController extends Controller
{
    //
    public function index(){
        $servers = Server::get()->latest();
        return response()->json([$servers => $servers]);
    }

    public function show($id){
        $server = Server::find($id);
        return response()->json([$server => $server],200);
    }

    public function store(Request $request){
        $request -> validate([
            'protocol' => 'required|string|max:255',
            'host' => 'required|string|max:255',
            'port' => 'required|integer',
            'user' => 'required|string|max:255',
            'password' => 'nullable|string',
            'encryption' => 'nullable|string',
            'ssh_key_path' => 'nullable|string',
            'description' => 'nullable|string',
            'active' => 'required|boolean',
            'timeout' => 'integer|min:0'
        ]);
        $server = Server::create($request -> all());
        return response()->json($server,201);
    }

    public function update(Request $request, $id){
        $server = Server::find($id);
        $request -> validate([
            'protocol' => 'required|string|max:255',
            'host' => 'required|string|max:255',
            'port' => 'required|integer',
            'user' => 'required|string|max:255',
            'password' => 'nullable|string',
            'encryption' => 'nullable|string',
            'ssh_key_path' => 'nullable|string',
            'description' => 'nullable|string',
            'active' => 'required|boolean',
            'timeout' => 'integer|min:0'
        ]);

        $server -> update($request -> all());

        return response()->json($server,200);
    }

    public function delete(Request $request, $id){
        $server = Server::find($id);
        $server->delete();
        return response()->json($server,200);
    }
}
