<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Building
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $address
 * @property string|null $description
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Building extends Model
{
	protected $table = 'building';

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'address',
		'description',
		'status'
	];
}
