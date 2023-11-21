<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BuildingUtility
 * 
 * @property int $id
 * @property int|null $id_building
 * @property int|null $id_utilities
 * @property int|null $id_floor
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Building|null $building
 * @property BuildingFloor|null $building_floor
 * @property Utility|null $utility
 *
 * @package App\Models
 */
class BuildingUtility extends Model
{
	protected $table = 'building_utilities';

	protected $casts = [
		'id_building' => 'int',
		'id_utilities' => 'int',
		'id_floor' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'id_building',
		'id_utilities',
		'id_floor',
		'status'
	];

	public function building()
	{
		return $this->belongsTo(Building::class, 'id_building');
	}

	public function building_floor()
	{
		return $this->belongsTo(BuildingFloor::class, 'id_floor');
	}

	public function utility()
	{
		return $this->belongsTo(Utility::class, 'id_utilities');
	}
}
