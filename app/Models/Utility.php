<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Utility
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|BuildingUtility[] $building_utilities
 *
 * @package App\Models
 */
class Utility extends Model
{
	protected $table = 'utilities';

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'status'
	];

	public function building_utilities()
	{
		return $this->hasMany(BuildingUtility::class, 'id_utilities');
	}
}
