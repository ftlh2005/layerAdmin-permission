<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Client extends Authenticatable
{
    use HasRoles;
    protected $table = 'Clients';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
