<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    use HasFactory;
    protected $fillable = [
        'name',
        'description', 
        'video',
        'categories',
        'tag',
    ];

    protected $casts = [
        'categories' => 'array', 
        'tag' => 'array',
    ];
    

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories', 'id', 'id')
            ->whereIn('id', $this->categories);
    }
    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'tag', 'id', 'id')
            ->whereIn('id', $this->tag);
    }
    public function author()
    {
        return $this->belongsTo(AdminUser::class, 'author_id');
    }
}
