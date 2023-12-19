<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contract
 * 
 * @property int $id
 * @property string $code_contract
 * @property int|null $id_deal
 * @property int|null $duration
 * @property int|null $id_unit
 * @property Carbon|null $commenc
 * @property Carbon|null $expiry
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Deal|null $deal
 * @property Unit|null $unit
 * @property Collection|ContractInterior[] $contract_interiors
 * @property Collection|ContractSale[] $contract_sales
 * @property Collection|DealService[] $deal_services
 *
 * @package App\Models
 */
class Contract extends Model
{
	protected $table = 'contract';

	protected $casts = [
		'id_deal' => 'int',
		'duration' => 'int',
		'id_unit' => 'int',
		'commenc' => 'datetime',
		'expiry' => 'datetime',
		'status' => 'int'
	];

	protected $fillable = [
		'code_contract',
		'id_deal',
		'duration',
		'id_unit',
		'commenc',
		'expiry',
		'status'
	];

	public function deal()
	{
		return $this->belongsTo(Deal::class, 'id_deal');
	}

	public function unit()
	{
		return $this->belongsTo(Unit::class, 'id_unit');
	}

	public function contract_interiors()
	{
		return $this->hasMany(ContractInterior::class, 'id_contract');
	}

	public function contract_sales()
	{
		return $this->hasMany(ContractSale::class, 'id_contract');
	}

	public function deal_services()
	{
		return $this->hasMany(DealService::class, 'id_contract');
	}
}
