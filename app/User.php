<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }

    // $user->total_invoiced_amount
    public function getTotalInvoicedAmountAttribute()
    {
        if($this->invoices()->count() == 0) {
            return 0;
        }
        
        return $this->invoices->sum->total_amount;
    }
}
