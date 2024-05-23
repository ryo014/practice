<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'date',
        'staple',
        'main_dish',
        'side_dish1',
        'side_dish2',
        'etc1',
        'etc2',
        'comment',
    ];
}
