<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DealDetail
 * 
 * @property int $id
 * @property int|null $id_deal
 * @property int|null $deposit
 * @property Carbon|null $datetime
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class DealDetail extends Model
{
	protected $table = 'deal_detail';

	protected $casts = [
		'id_deal' => 'int',
		'deposit' => 'int',
		'datetime' => 'datetime',
		'status' => 'int'
	];

	protected $fillable = [
		'id_deal',
		'deposit',
		'datetime',
		'status'
	];
}
