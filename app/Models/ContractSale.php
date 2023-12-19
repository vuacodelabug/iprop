<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractSale
 * 
 * @property int $id
 * @property int|null $id_contract
 * @property int|null $id_floorchange
 * @property int|null $commission
 * @property int|null $duration
 * @property string|null $id_unit
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Contract|null $contract
 * @property Floorchange|null $floorchange
 *
 * @package App\Models
 */
class ContractSale extends Model
{
	protected $table = 'contract_sale';

	protected $casts = [
		'id_contract' => 'int',
		'id_floorchange' => 'int',
		'commission' => 'int',
		'duration' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'id_contract',
		'id_floorchange',
		'commission',
		'duration',
		'id_unit',
		'status'
	];

	public function contract()
	{
		return $this->belongsTo(Contract::class, 'id_contract');
	}

	public function floorchange()
	{
		return $this->belongsTo(Floorchange::class, 'id_floorchange');
	}
}
