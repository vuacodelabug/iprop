<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Unit
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int $type
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|BuildingService[] $building_services
 * @property Collection|Cart[] $carts
 * @property Collection|Contract[] $contracts
 * @property Collection|DealService[] $deal_services
 *
 * @package App\Models
 */
class Unit extends Model
{
	protected $table = 'unit';

	protected $casts = [
		'type' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'type',
		'status'
	];

	public function building_services()
	{
		return $this->hasMany(BuildingService::class, 'id_unit');
	}

	public function carts()
	{
		return $this->hasMany(Cart::class, 'id_unit');
	}

	public function contracts()
	{
		return $this->hasMany(Contract::class, 'id_unit');
	}

	public function deal_services()
	{
		return $this->hasMany(DealService::class, 'id_unit');
	}
}
