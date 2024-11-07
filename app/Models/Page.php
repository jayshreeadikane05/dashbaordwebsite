<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'pagename',
        'pageurl',
        'author_id',
    ];
    public function author()
    {
        return $this->belongsTo(AdminUser::class, 'author_id');
    }
}
