<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pemecatan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pemecatans';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_lengkap', 'employees_id', 'prodi', 'tanggal', 'alasan_pemecatan'];

    
}
