<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Profile
 * 
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string|null $phone
 * @property string|null $email
 * @property string $gender
 * @property string|null $birthday
 * @property string|null $cmnd_cccd
 * @property Carbon|null $cmnd_date
 * @property string|null $place_of_issue
 * @property string|null $permanent_address
 * @property string|null $temporay_address
 * @property int|null $type
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 * @property Collection|ZblockProfile[] $zblock_profiles
 *
 * @package App\Models
 */
class Profile extends Model
{
	protected $table = 'profile';

	protected $casts = [
		'user_id' => 'int',
		'cmnd_date' => 'datetime',
		'type' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'user_id',
		'name',
		'phone',
		'email',
		'gender',
		'birthday',
		'cmnd_cccd',
		'cmnd_date',
		'place_of_issue',
		'permanent_address',
		'temporay_address',
		'type',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function zblock_profiles()
	{
		return $this->hasMany(ZblockProfile::class, 'target_id');
	}
}
