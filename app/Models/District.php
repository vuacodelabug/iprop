<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class District
 * 
 * @property string $districtid
 * @property string $name
 * @property string $provinceid
 *
 * @package App\Models
 */
class District extends Model
{
	protected $table = 'district';
	protected $primaryKey = 'districtid';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'name',
		'provinceid'
	];
}
