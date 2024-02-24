<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ["title", "slug", "content", "tags", "description", "published", "img"];

    public function scopeFilter($query, array $filters)
    {
        $tag = $filters['tag'] ?? false;
        $search = $filters['search'] ?? false;
        if ($tag) {
            $query->where("tags", "like", "%$tag%");
        }
        if ($search) {
            $query
                ->where("title", "like", "%$search%")
                ->orWhere("description", "like", "%$search%")
                ->orWhere("tags", "like", "%$search%");
        }
    }
}
