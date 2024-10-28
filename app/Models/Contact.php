<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'contact';
    protected $fillable =[
        "title",
        "contact",
        "create_at",
        "update_at"
    ];
}
