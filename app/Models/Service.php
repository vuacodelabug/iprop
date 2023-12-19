<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Building[] $buildings
 * @property Collection|Deal[] $deals
 *
 * @package App\Models
 */
class Service extends Model
{
	protected $table = 'service';

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'status'
	];

	public function buildings()
	{
		return $this->belongsToMany(Building::class, 'building_service', 'id_service', 'id_building')
					->withPivot('id', 'price', 'id_unit', 'status')
					->withTimestamps();
	}

	public function deals()
	{
		return $this->belongsToMany(Deal::class, 'deal_service', 'id_service', 'id_deal')
					->withPivot('id', 'id_contract', 'price', 'id_unit', 'status')
					->withTimestamps();
	}
}
