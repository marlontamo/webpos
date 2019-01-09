<?php

namespace App;

class Product extends Model
{
   /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Products';

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
    protected $fillable = ['product_code','product_name','product_description','product_price','img'];

    public $timestamps = true;
    
    protected $dateFormat ='y-m-d H:i:s';

  }
