<?php

namespace ProyectoCurso;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	 * Establece relación entre esquema
	 * @return [type] [description]
	 */
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
