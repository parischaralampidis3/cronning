<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Server;

class Cron extends Model
{

    use HasFactory;

    protected $table = 'crons';
    protected $fillable = ['title','script','server_id'];

    public function crons(){
        return $this->belongsTo(Server::class,'server_id');
    }
}
