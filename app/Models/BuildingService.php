<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BuildingService
 * 
 * @property int $id
 * @property int|null $id_building
 * @property int|null $id_service
 * @property int|null $price
 * @property int|null $id_unit
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Building|null $building
 * @property Service|null $service
 * @property Unit|null $unit
 *
 * @package App\Models
 */
class BuildingService extends Model
{
	protected $table = 'building_service';

	protected $casts = [
		'id_building' => 'int',
		'id_service' => 'int',
		'price' => 'int',
		'id_unit' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'id_building',
		'id_service',
		'price',
		'id_unit',
		'status'
	];

	public function building()
	{
		return $this->belongsTo(Building::class, 'id_building');
	}

	public function service()
	{
		return $this->belongsTo(Service::class, 'id_service');
	}

	public function unit()
	{
		return $this->belongsTo(Unit::class, 'id_unit');
	}
}
