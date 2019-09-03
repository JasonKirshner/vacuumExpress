<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

/**
 * @property int $id
 * @property int $role_id
 * @property string $email
 * @property string $password
 * @property string $password_salt
 * @property string $first_name
 * @property string $last_name
 * @property string $created_at
 * @property Role $role
 * @property Cart[] $carts
 */
class User extends Model implements Authenticatable
{

    use \Illuminate\Auth\Authenticatable;

    public $timestamps = true;

    /**
     * @var array
     */
    protected $fillable = ['role_id', 'email', 'first_name', 'last_name'];

    /**
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carts()
    {
        return $this->hasOne(Cart::class);
    }
}
