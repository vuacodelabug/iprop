<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractInterior
 * 
 * @property int $id
 * @property int|null $id_deal
 * @property int|null $id_contract
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Deal|null $deal
 * @property Contract|null $contract
 *
 * @package App\Models
 */
class ContractInterior extends Model
{
	protected $table = 'contract_interior';

	protected $casts = [
		'id_deal' => 'int',
		'id_contract' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'id_deal',
		'id_contract',
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
}
