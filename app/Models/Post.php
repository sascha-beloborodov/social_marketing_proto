<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Post
 * @package App\Models
 * @version March 16, 2018, 1:48 am UTC
 *
 * @property \App\Models\BuyModel buyModel
 * @property \App\Models\ContentType contentType
 * @property \App\Models\Period period
 * @property integer period_id
 * @property string url
 * @property integer content_type_id
 * @property integer reach
 * @property integer impressions
 * @property integer clicks
 * @property integer likes
 * @property integer shares
 * @property integer comments
 * @property integer group_in
 * @property integer site_visits
 * @property integer purchase_intentions
 * @property integer transactions
 * @property integer model_id
 */
class Post extends Model
{

    public $table = 'posts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'period_id',
        'url',
        'content_type_id',
        'reach',
        'impressions',
        'clicks',
        'likes',
        'shares',
        'comments',
        'group_in',
        'site_visits',
        'purchase_intentions',
        'transactions',
        'model_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'period_id' => 'integer',
        'url' => 'string',
        'content_type_id' => 'integer',
        'reach' => 'integer',
        'impressions' => 'integer',
        'clicks' => 'integer',
        'likes' => 'integer',
        'shares' => 'integer',
        'comments' => 'integer',
        'group_in' => 'integer',
        'site_visits' => 'integer',
        'purchase_intentions' => 'integer',
        'transactions' => 'integer',
        'model_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function buyModel()
    {
        return $this->belongsTo(\App\Models\BuyModel::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function contentType()
    {
        return $this->belongsTo(\App\Models\ContentType::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function period()
    {
        return $this->belongsTo(\App\Models\Period::class);
    }
}
