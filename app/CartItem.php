<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $product_id
 * @property int $cart_id
 * @property int $quantity
 * @property string $created_at
 * @property Cart $cart
 * @property Product $product
 */
class CartItem extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['product_id', 'cart_id', 'quantity', 'created_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
