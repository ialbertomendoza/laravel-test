<?php

namespace ProyectoCurso;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	 * Establece relación entre esquema
	 * @return [type] [description]
	 */
    public function author()
    {
    	return $this->belongsTo(User::class, 'author_id');
    }
}
