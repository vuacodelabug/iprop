<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BuildingFloor
 * 
 * @property int $id
 * @property int|null $id_building
 * @property string|null $code_floor
 * @property string|null $name_floor
 * @property int|null $status
 * @property int $type
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Building|null $building
 * @property Collection|BuildingUtility[] $building_utilities
 *
 * @package App\Models
 */
class BuildingFloor extends Model
{
	protected $table = 'building_floor';

	protected $casts = [
		'id_building' => 'int',
		'status' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'id_building',
		'code_floor',
		'name_floor',
		'status',
		'type'
	];

	public function building()
	{
		return $this->belongsTo(Building::class, 'id_building');
	}
	public function building_utilities()
	{
		return $this->hasMany(BuildingUtility::class,'id_floor');
	}
	public function building_typeapartment()
	{
		return $this->hasMany(BuildingTypeapartment::class,'id_floor');
	}
	
}
