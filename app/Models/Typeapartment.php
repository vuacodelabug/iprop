<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Typeapartment
 * 
 * @property int $id
 * @property int|null $id_building
 * @property string|null $name
 * @property string|null $description
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Typeapartment extends Model
{
	protected $table = 'typeapartment';

	protected $casts = [
		'id_building' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'id_building',
		'name',
		'description',
		'status'
	];
	public function zblock_history(){
        return $this->hasMany(ZblockHistory::class);
    }
}
