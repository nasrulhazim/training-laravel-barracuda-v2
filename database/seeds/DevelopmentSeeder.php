<?php

use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\InvoiceItem::truncate();
        \App\Invoice::truncate();
        \App\User::truncate();
        factory(\App\User::class, 10)
        	->create()
        	->each(function($user){
	        	factory(\App\Invoice::class, 10)->create([
	        		'user_id' => $user->id,
	        	])->each(function($invoice){
	        		factory(\App\InvoiceItem::class, 10)->create([
	        			'invoice_id' => $invoice->id
	        		]);
	        	});
        	});
    }
}
