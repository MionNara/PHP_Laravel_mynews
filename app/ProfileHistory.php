<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{
    protected $guarded = array('id');
    
    //PHP17
    public static $rules = array(
        'profile_id' => 'required',
        'edited_at' => 'required',
    );
}
