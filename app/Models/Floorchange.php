<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Floorchange
 * 
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|ContractSale[] $contract_sales
 * @property Collection|Sale[] $sales
 *
 * @package App\Models
 */
class Floorchange extends Model
{
	protected $table = 'floorchange';

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'status'
	];

	public function contract_sales()
	{
		return $this->hasMany(ContractSale::class, 'id_floorchange');
	}

	public function sales()
	{
		return $this->hasMany(Sale::class, 'id_floorchange');
	}
}
