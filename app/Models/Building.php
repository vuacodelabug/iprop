<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Building
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $address
 * @property string|null $province_id
 * @property string|null $district_id
 * @property string|null $ward_id
 * @property string|null $logo
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|ApartmentTypeapartment[] $apartment_typeapartments
 * @property Collection|BuildingFloor[] $building_floors
 * @property Collection|Service[] $services
 * @property Collection|BuildingUtility[] $building_utilities
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
		'description',
		'address',
		'province_id',
		'district_id',
		'ward_id',
		'logo',
		'status'
	];

	public function building_typeapartment()
	{
		return $this->hasMany(BuildingTypeapartment::class, 'id_building');
	}

	public function building_floors()
	{
		return $this->hasMany(BuildingFloor::class, 'id_building');
	}

	public function services()
	{
		return $this->belongsToMany(Service::class, 'building_service', 'id_building', 'id_service')
					->withPivot('id', 'price', 'id_unit', 'status')
					->withTimestamps();
	}

	public function building_utilities()
	{
		return $this->hasMany(BuildingUtility::class, 'id_building');
	}

	public function building_service()
	{
		return $this->hasMany(BuildingService::class, 'id_building');
	}
	public function building_floor()
	{
		return $this->hasMany(BuildingFloor::class, 'id_building');
	}

	public function province()
	{
		return $this->belongsTo(Province::class, 'province_id');
	}
	public function district()
	{
		return $this->belongsTo(District::class,'district_id');
	}
	public function ward()
	{
		return $this->belongsTo(Ward::class, 'ward_id');
	}

}
