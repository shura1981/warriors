<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tb_Warriors extends Model
{
    //
    protected $table = 'tb_warriors';
    protected $primaryKey = 'id';
    protected $fillable = [id, 'cliente', 'ciudad', 'email', 'fecha', 'hora', 'enable', 'genero', 'warrior', 'team', 'instagram'];
    protected $casts = [
        'fecha' => 'datetime',
        'hora' => 'datetime'
    ];
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

}