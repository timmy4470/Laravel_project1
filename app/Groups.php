<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    //
    public function users()
    {
        return $this->blongsToMany(User::class);
    }
}
