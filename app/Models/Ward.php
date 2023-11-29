<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ward
 * 
 * @property string $wardid
 * @property string $name
 * @property string $districtid
 *
 * @package App\Models
 */
class Ward extends Model
{
	protected $table = 'ward';
	protected $primaryKey = 'wardid';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'name',
		'districtid'
	];
	public function building(){
        return $this->hasOne(Building::class);
    }
}
