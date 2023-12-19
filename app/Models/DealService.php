<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DealService
 * 
 * @property int $id
 * @property int|null $id_deal
 * @property int|null $id_contract
 * @property int|null $id_service
 * @property int|null $price
 * @property int|null $id_unit
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Deal|null $deal
 * @property Contract|null $contract
 * @property Service|null $service
 * @property Unit|null $unit
 *
 * @package App\Models
 */
class DealService extends Model
{
	protected $table = 'deal_service';

	protected $casts = [
		'id_deal' => 'int',
		'id_contract' => 'int',
		'id_service' => 'int',
		'price' => 'int',
		'id_unit' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'id_deal',
		'id_contract',
		'id_service',
		'price',
		'id_unit',
		'status'
	];

	public function deal()
	{
		return $this->belongsTo(Deal::class, 'id_deal');
	}

	public function contract()
	{
		return $this->belongsTo(Contract::class, 'id_contract');
	}

	public function service()
	{
		return $this->belongsTo(Service::class, 'id_service');
	}

	public function unit()
	{
		return $this->belongsTo(Unit::class, 'id_unit');
	}
}
