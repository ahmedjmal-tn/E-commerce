<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomscategorie', 'imagescategorie', 'categorieID', 'designation', 'marque', 'reference', 'qtestock', 'prix', 'imageart', 'scategorieID'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, "categorieID");
    }

    public function scategorie()
    {
        return $this->belongsTo(Scategorie::class, "scategorieID");
    }
}