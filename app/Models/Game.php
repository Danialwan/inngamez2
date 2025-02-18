<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = 'game';
    protected $fillable =[
        "title",
        "description",
        "image",
        "link",
        "create_at",
        "update_at"
    ];
}
