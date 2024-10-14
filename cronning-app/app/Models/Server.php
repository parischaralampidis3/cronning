<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cron;

class Server extends Model
{
    protected $table = 'servers';

    protected $fillable = ['protocol', 
                            'host', 
                            'port', 
                            'user', 
                            'password', 
                            'encryption', 
                            'ssh_key_path',
                            'description', 
                            'active',
                            'timeout',
                            'last_connected_at'
                        ];


    public function servers(){
     return $this->hasMany(Cron::class,'server_id');
    }

    use HasFactory;
}
