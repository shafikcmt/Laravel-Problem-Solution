<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;
    protected $table = "users";
    public static function getUser()
    {
        $records = DB::table('users')->select('id','roll','phone')->get()->toArray();
        return $records;
    }
}
