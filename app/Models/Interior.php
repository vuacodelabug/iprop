<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Interior
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $status
 * @property int|null $type
 * @property int|null $price
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Interior extends Model
{
	protected $table = 'interior';

	protected $casts = [
		'status' => 'int',
		'type' => 'int',
		'price' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'status',
		'type',
		'price'
	];
}
