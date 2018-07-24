<?php

namespace App;

use App\InvoiceItem as Item;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function items()
    {
    	return $this->hasMany(Item::class);
    }

    // $invoice->total_amount
	public function getTotalAmountAttribute()
	{
		if($this->items()->count() == 0) {
			return 0;
		}
		return $this->items->sum->amount;
	}
}


