<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersProfile extends Model
{
    protected $fillable = [
        'user_id', 'name', 'surname', 'patronymic', 'birthday', 'status', 'avatar_img',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
