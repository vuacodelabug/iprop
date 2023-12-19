<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cart
 * 
 * @property int $id
 * @property int|null $id_apartment
 * @property int|null $id_user
 * @property int|null $price
 * @property int|null $deposit
 * @property int|null $id_unit
 * @property int|null $commision
 * @property int|null $service
 * @property int|null $utilities
 * @property int|null $interior
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Apartment|null $apartment
 * @property User|null $user
 * @property Unit|null $unit
 *
 * @package App\Models
 */
class Cart extends Model
{
	protected $table = 'cart';

	protected $casts = [
		'id_apartment' => 'int',
		'id_user' => 'int',
		'price' => 'int',
		'deposit' => 'int',
		'id_unit' => 'int',
		'commision' => 'int',
		'service' => 'int',
		'utilities' => 'int',
		'interior' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'id_apartment',
		'id_user',
		'price',
		'deposit',
		'id_unit',
		'commision',
		'service',
		'utilities',
		'interior',
		'status'
	];

	public function apartment()
	{
		return $this->belongsTo(Apartment::class, 'id_apartment');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}

	public function unit()
	{
		return $this->belongsTo(Unit::class, 'id_unit');
	}
}
