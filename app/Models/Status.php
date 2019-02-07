<?php

namespace weloveso\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Status extends Model
{
	
	protected $table = 'statuses';

	protected $fillable = [
		'body'
	]; 

	public function user(){
		return $this->belongsTo('weloveso\Models\User', 'user_id');
	}
}