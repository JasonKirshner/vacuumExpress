<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property float $price
 * @property float $sale_price
 * @property string $img_name
 * @property string $created_at
 * @property CartItem[] $cartItems
 */
class Product extends Model
{

    public $timestamps = true;

    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'price', 'sale_price', 'img_name', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
