<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
     protected $table = 'subcategories';  // ðŸ‘ˆ Custom table name
        protected $primaryKey = 'id'; // ðŸ‘ˆ Custom primary key
        
        public $incrementing = true;  // ðŸ‘ˆ If the primary key isn't auto-incrementing
    
    protected $fillable = [
        'cat_id',
      'name',
        'icon',
        'banner',
        'slug'
    ];
}
