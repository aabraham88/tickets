<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //Respuestas a tickets
    protected $guarded = ['id'];

	public function ticket()
	{
		return $this->belongsTo('App\Ticket');
	}

}
