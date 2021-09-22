<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'isAdmin',
        'name',
        'surname',
        'email',
        'password',
        'dni',
        'membership_number',
        'phone1',
        'phone2',
        'address',
        'zipCode',
        'city',
        'region',
        'country',
        'notes',
        'canReserve',

        'deliveryName',
        'deliverySurname',
        'deliveryAddress',
        'deliveryZipCode',
        'deliveryCity',
        'deliveryRegion',
        'deliveryCountry',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isadmin()
    {
        if($this->isAdmin) {
            return true;
        }
        return false;
    }

    public function productsCarts()
    {
        return $this->belongsToMany(Product::class, 'carts', 'user_id', 'product_id');
    }
}
