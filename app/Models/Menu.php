<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

    protected $fillable = [
        'users_id',
        'date',
        'category',
        'staple',
        'main_dish',
        'side_dish1',
        'side_dish2',
        'etc1',
        'etc2',
        'comment',
        'create_at',
        'update_at',
    ];
}
