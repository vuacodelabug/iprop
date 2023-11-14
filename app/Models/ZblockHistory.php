<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ZblockHistory
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $content
 * @property int $target_id
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class ZblockHistory extends Model
{
	protected $table = 'zblock_history';

	protected $casts = [
		'target_id' => 'int'
	];

	protected $fillable = [
		'name',
		'content',
		'target_id'
	];
	public function service()
	{
		return $this->belongsTo(Service::class, 'target_id');
	}
	public function typeapartment()
	{
		return $this->belongsTo(Typeapartment::class, 'target_id');
	}
	public function unit()
	{
		return $this->belongsTo(Unit::class, 'target_id');
	}
	public function utilities()
	{
		return $this->belongsTo(Utility::class, 'target_id');
	}
	public function users()
	{
		return $this->belongsTo(Utility::class, 'user_id');
	}

}
