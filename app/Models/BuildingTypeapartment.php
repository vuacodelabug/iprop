<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BuildingTypeapartment
 * 
 * @property int $id
 * @property int|null $id_building
 * @property int|null $id_typeapartment
 * @property int|null $id_apartment
 * @property int $id_floor
 * @property int|null $status
 * @property int|null $delete_type
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Building|null $building
 * @property Apartment|null $apartment
 * @property Typeapartment|null $typeapartment
 *
 * @package App\Models
 */
class BuildingTypeapartment extends Model
{
	protected $table = 'building_typeapartment';

	protected $casts = [
		'id_building' => 'int',
		'id_typeapartment' => 'int',
		'id_apartment' => 'int',
		'id_floor' => 'int',
		'status' => 'int',
		'delete_type' => 'int'
	];

	protected $fillable = [
		'id_building',
		'id_typeapartment',
		'id_apartment',
		'id_floor',
		'status',
		'delete_type'
	];

	public function building()
	{
		return $this->belongsTo(Building::class, 'id_building');
	}

	public function apartment()
	{
		return $this->belongsTo(Apartment::class, 'id_apartment');
	}

	public function typeapartment()
	{
		return $this->belongsTo(Typeapartment::class, 'id_typeapartment');
	}
}
