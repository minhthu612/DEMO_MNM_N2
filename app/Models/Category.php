<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    //
    use HasFactory;
    protected $table = "dm_the_loai";
    protected $primaryKey = "id";
    protected $fillable = ["id","ten_the_loai"];
    public $timestamps = false;
}
