<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Subtaxonomy extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class, "subtaxonomy_id", "id");
    }

    public function taxonomy()
    {
        return $this->belongsTo(Taxonomy::class);
    }
}
