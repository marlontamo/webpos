<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pos extends Model
{
  /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'order_header';

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
    protected $fillable = ['order_number','order_client','net_amount','tax_amount','gross_amount','status'];

    public $timestamps = true;
    
    protected $dateFormat ='y-m-d H:i:s';
}
