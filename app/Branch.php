<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Branches';

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
    protected $fillable = ['branch_code','branch_name','branch_address'];

    public $timestamps = true;
    
    protected $dateFormat ='y-m-d H:i:s';
}
