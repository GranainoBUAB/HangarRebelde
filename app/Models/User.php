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

    static function searchUserinList($request){
        $users = User::where('name', 'like', '%' . $request->input('query') . '%')
        ->orWhere('surname', 'like', '%' . $request->input('query') . '%')
        ->orWhere('email', 'like', '%' . $request->input('query') . '%')
        ->orWhere('dni', 'like', '%' . $request->input('query') . '%')
        ->orWhere('phone1', 'like', '%' . $request->input('query') . '%')
        ->orWhere('phone2', 'like', '%' . $request->input('query') . '%')
        ->orWhere('membership_number', 'like', '%' . $request->input('query') . '%')
        ->orWhere('address', 'like', '%' . $request->input('query') . '%')
        ->orWhere('zipCode', 'like', '%' . $request->input('query') . '%')
        ->orWhere('city', 'like', '%' . $request->input('query') . '%')
        ->orWhere('region', 'like', '%' . $request->input('query') . '%')
        ->orWhere('country', 'like', '%' . $request->input('query') . '%')
        ->orWhere('notes', 'like', '%' . $request->input('query') . '%')
        ->get();

        return($users);
    }

    public function productsCarts()
    {
        return $this->belongsToMany(Product::class, 'carts', 'user_id', 'product_id');
    }
}
