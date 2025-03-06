<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    protected $table = 'users_details'; // Ensure this matches your database table

    protected $fillable = [
        'user_id', 'mobile2', 'profile_image', 'image_path'
    ];

    public $timestamps = false; // Disable timestamps if table does NOT have created_at, updated_at
}

