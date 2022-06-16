<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;


    protected $table = 'clientes';

    protected $fillable = [
        'dni',
        'nombre'
    ];

    /**
     * The roles that belong to the Clientes
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cuentas()
    {
        return $this->belongsToMany(Cuenta::class, 'titulares');
    }


    /* cliente_cuenta =titulares */
}
