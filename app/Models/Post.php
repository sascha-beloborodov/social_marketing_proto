<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Post
 * @package App\Models
 * @version March 18, 2018, 1:31 pm UTC
 *
 * @property \App\Models\ContentType contentType
 * @property \App\Models\Period period
 * @property \App\Models\PurchaseModel purchaseModel
 * @property \App\Models\Social social
 * @property string url
 * @property integer reach
 * @property integer impressions
 * @property integer clicks
 * @property integer comments
 * @property integer likes
 * @property integer shares
 * @property integer group_in
 * @property integer site_visits
 * @property integer purchase_intentions
 * @property integer transactions
 * @property integer content_type_id
 * @property integer period_id
 * @property integer purchase_model_id
 * @property integer social_id
 */
class Post extends Model
{

    public $table = 'posts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'url',
        'reach',
        'impressions',
        'clicks',
        'likes',
        'comments',
        'shares',
        'group_in',
        'site_visits',
        'purchase_intentions',
        'transactions',
        'content_type_id',
        'period_id',
        'purchase_model_id',
        'social_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'url' => 'string',
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
        'content_type_id' => 'integer',
        'period_id' => 'integer',
        'purchase_model_id' => 'integer',
        'social_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    protected $appends = [
        'er_comments', 'er_likes', 'er_shares',

        'calculation_group_in', 'calculation_visits', 'calculation_purchase', 'calculation_transactions'
    ];

    public function getCalculationGroupInAttribute()
    {
        return $this->isImpressionZero() ? 0 : number_format($this->group_in / $this->impressions, 5, '.', ' ');
    }

    public function getCalculationVisitsAttribute()
    {
        return $this->isImpressionZero() ? 0 : number_format($this->site_visits / $this->impressions, 5, '.', ' ');
    }

    public function getCalculationPurchaseAttribute()
    {
        return $this->isImpressionZero() ? 0 : number_format($this->purchase_intentions / $this->impressions, 5, '.', ' ');
    }

    public function getCalculationTransactionsAttribute()
    {
        return $this->isImpressionZero() ? 0 : number_format($this->transactions / $this->impressions, 5, '.', ' ');
    }

    /**
     * @return float|int
     */
    public function getErCommentsAttribute()
    {
        return $this->reachedZero() ? 0 : number_format($this->comments / $this->reach, 5, '.', ' ');
    }

    /**
     * @return float|int
     */
    public function getErLikesAttribute()
    {
        return $this->reachedZero() ? 0 : number_format($this->likes / $this->reach, 5, '.', ' ');
    }

    /**
     * @return float|int
     */
    public function getErSharesAttribute()
    {
        return $this->reachedZero() ? 0 : number_format($this->shares / $this->reach, 5, '.', ' ');
    }

    /**
     * @return bool
     */
    public function reachedZero()
    {
        return $this->reach == 0;
    }

    public function isImpressionZero()
    {

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function purchaseModel()
    {
        return $this->belongsTo(\App\Models\PurchaseModel::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function social()
    {
        return $this->belongsTo(\App\Models\Social::class);
    }
}
