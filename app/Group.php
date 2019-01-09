<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
   /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'groups';

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
    protected $fillable = ['group_code','group_name','group_desc'];

     public $timestamps = true;
    
    protected $dateFormat ='y-m-d H:i:s';

}
