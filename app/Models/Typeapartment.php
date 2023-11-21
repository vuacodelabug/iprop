<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Typeapartment
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Apartment[] $apartments
 *
 * @package App\Models
 */
class Typeapartment extends Model
{
	protected $table = 'typeapartment';

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'status'
	];

	public function apartments()
	{
		return $this->belongsToMany(Apartment::class, 'apartment_typeapartment', 'id_typeapartment', 'id_apartment')
					->withPivot('id', 'id_building', 'status')
					->withTimestamps();
	}
}
