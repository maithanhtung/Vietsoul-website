<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
 	protected $fillable = [
        'message_name','message_email','message_content'
    ];
}
