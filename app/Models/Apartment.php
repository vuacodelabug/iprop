<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Apartment
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Building[] $buildings
 * @property Collection|Cart[] $carts
 * @property Collection|Deal[] $deals
 *
 * @package App\Models
 */
class Apartment extends Model
{
	protected $table = 'apartment';

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'status'
	];

	public function building()
	{
		return $this->hasMany(Building::class, 'id_apartment');
	}

	public function cart()
	{
		return $this->hasMany(Cart::class, 'id_apartment');
	}

	public function deal()
	{
		return $this->hasMany(Deal::class, 'id_apartment');
	}
}
