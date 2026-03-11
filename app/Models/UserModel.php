<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';
    // fillable
    protected $fillable = ['level_id', 'username', 'nama'];

    // public function level()
    // {
    //     return $this->hasOne(LevelModel::class, 'level_id', 'level_id');
    // }
}
