<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    public $table = 'user';
    public $primaryKey = 'userID';
    public $fillable = ['email','pass','reg_date','roleID'];
}
