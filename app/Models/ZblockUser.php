<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ZblockUser
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $content
 * @property int $target_id
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class ZblockUser extends Model
{
	protected $table = 'zblock_user';

	protected $casts = [
		'target_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'name',
		'content',
		'target_id',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'target_id');
	}
}
