<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 * 
 * @property int $id
 * @property int|null $id_floorchange
 * @property string $name
 * @property string|null $description
 * @property int|null $price
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Floorchange|null $floorchange
 *
 * @package App\Models
 */
class Sale extends Model
{
	protected $table = 'sale';

	protected $casts = [
		'id_floorchange' => 'int',
		'price' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'id_floorchange',
		'name',
		'description',
		'price',
		'status'
	];

	public function floorchange()
	{
		return $this->belongsTo(Floorchange::class, 'id_floorchange');
	}
}
