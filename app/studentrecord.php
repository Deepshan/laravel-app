<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentrecord extends Model
{
	protected $fillable = [
		'stuName',
		'stuIndex',
		'stuAddress'
		
		];
		
		protected $table = 'student';
    //
}
