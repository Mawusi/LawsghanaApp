<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class UserBookmark extends Model
{
    protected $fillable = [
        'user_section','section_id', 'act_title', 'act_section', 'user_name', 'user_id', 'act_id', 'act_group'
    ];
}
