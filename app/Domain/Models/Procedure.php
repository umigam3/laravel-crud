<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'procedures';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type', 'state', 'dni'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'state' => 'integer',
    ];

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The data type of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'int';
}
