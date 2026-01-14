<?php

namespace Modules\mbiraHelpupdate\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class APIData extends Model
{
    use HasFactory;

    protected $table = 'envatoapitoken';

    protected $fillable = [
        'envatoapitoken'
    ];
    
    protected static function newFactory()
    {
        return \Modules\mbiraHelpupdate\Database\factories\APIDataFactory::new();
    }
}
