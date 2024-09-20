<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'title', 'author', 'body']; //digunakan jika ingin mengisi data ke database

    protected $with = ['author', 'category'];
    
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scoopeFilter( Builder $query, array $filters): void
    {
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%');
        }
    }

}
