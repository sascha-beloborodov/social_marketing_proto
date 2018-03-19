<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class PurchaseModel
 * @package App\Models
 * @version March 18, 2018, 1:34 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Post
 * @property string name
 */
class PurchaseModel extends Model
{

    public $table = 'purchase_models';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function posts()
    {
        return $this->hasMany(\App\Models\Post::class);
    }
}
