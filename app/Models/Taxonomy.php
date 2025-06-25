<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Taxonomy extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class, "taxonomy_id", "id");
    }

    public function subtaxonomies()
    {
        return $this->hasMany(Subtaxonomy::class, "taxonomy_id", "id");
    }
}
