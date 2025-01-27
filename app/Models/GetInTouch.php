<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetInTouch extends Model
{
    use HasFactory;
    protected $table = 'getintouch';
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'services',
        'phone',
        'message',
    ];
}
