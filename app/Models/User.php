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

    protected $hidden = [
        'password',
        'remember_token',
    ];

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
