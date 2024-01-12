<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quest extends Model
{
    use HasFactory;
    public $table = 'question';
    public $primaryKey = 'questID';
    public $fillable = ['questID','title','body','tab','vote','view','reg_date','userID'];
}
