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
 * @property Collection|ApartmentTypeapartment[] $apartment_typeapartments
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

	public function apartment_typeapartments()
	{
		return $this->hasMany(ApartmentTypeapartment::class, 'id_apartment');
	}
}
