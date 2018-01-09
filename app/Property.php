<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    // Table Name
    protected $table = 'properties';
    // Table Seeder Insertion
    protected $fillable = ['imagePath', 'title', 'bed', 'bath', 'description', 'price'];

}
