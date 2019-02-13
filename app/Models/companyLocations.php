<?php

namespace weloveso\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class companyLocations extends Model
{
	
	protected $table = 'company_locations';

	protected $fillable = [
		'name',
		'address_address',
		'address_latitude',
		'address_longitude',
	];

}