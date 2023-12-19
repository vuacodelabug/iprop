<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Deal
 * 
 * @property int $id
 * @property int|null $id_customer
 * @property int|null $id_apartment
 * @property int|null $id_user
 * @property int|null $price
 * @property int|null $status
 * @property int|null $type
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Customer|null $customer
 * @property Apartment|null $apartment
 * @property User|null $user
 * @property Collection|Contract[] $contracts
 * @property Collection|ContractInterior[] $contract_interiors
 * @property Collection|Service[] $services
 *
 * @package App\Models
 */
class Deal extends Model
{
	protected $table = 'deal';

	protected $casts = [
		'id_customer' => 'int',
		'id_apartment' => 'int',
		'id_user' => 'int',
		'price' => 'int',
		'status' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'id_customer',
		'id_apartment',
		'id_user',
		'price',
		'status',
		'type'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class, 'id_customer');
	}

	public function apartment()
	{
		return $this->belongsTo(Apartment::class, 'id_apartment');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}

	public function contracts()
	{
		return $this->hasMany(Contract::class, 'id_deal');
	}

	public function contract_interiors()
	{
		return $this->hasMany(ContractInterior::class, 'id_deal');
	}

	public function services()
	{
		return $this->belongsToMany(Service::class, 'deal_service', 'id_deal', 'id_service')
					->withPivot('id', 'id_contract', 'price', 'id_unit', 'status')
					->withTimestamps();
	}
}
