<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Province
 * 
 * @property string $provinceid
 * @property string $name
 *
 * @package App\Models
 */
class Province extends Model
{
	protected $table = 'province';
	protected $primaryKey = 'provinceid';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
	public function building(){
        return $this->hasOne(Building::class);
    }
	public function district(){
        return $this->hasMany(District::class, 'provinceid');
    }
}
