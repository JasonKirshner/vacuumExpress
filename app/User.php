<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $password_salt
 * @property string $name
 * @property string $created_at
 * @property Cart[] $carts
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['email', 'password', 'password_salt', 'name', 'created_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carts()
    {
        return $this->hasOne('App\Cart');
    }
}
