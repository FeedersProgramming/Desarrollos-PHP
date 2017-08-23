<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puc extends Model
{
	protected $table = 'puc';

	protected $primaryKey = 'nro_cuenta';

	protected $fillable = ['nro_cuenta', 'nombre_cuenta', 'clase'];

	//protected $hidden = ['password', 'remember_token'];

	public function scopeSearch($query, $busqueda){
		//dd($busqueda);
		return $query->where('nombre_cuenta', 'LIKE', $busqueda);
	}
}
