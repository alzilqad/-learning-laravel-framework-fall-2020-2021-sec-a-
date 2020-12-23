<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    protected $primaryKey = 'id';
    public $timestamps = false;

    //const CREATE_AT = 'creation_date';
    //const UPDATED_AT = 'last_update';
}
