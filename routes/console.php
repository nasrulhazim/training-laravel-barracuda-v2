<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('seed:dev', function() {
	$this->call('db:seed', [
		'--class' => 'DevelopmentSeeder',
	]);
})->describe('Seed development data.');

Artisan::command('collection', function(){
	// average()
	
	$average = collect(
		[
			['foo' => 10], ['foo' => 10], 
			['foo' => 20], ['foo' => 40]
		]
	)->avg('foo');

	$this->info('Average: ' . $average);

	// contains()
	
	$collection = collect([
	    ['product' => 'Desk', 'price' => 200],
	    ['product' => 'Chair', 'price' => 100],
	]);

	$hasBookcase = $collection->contains('product', 'Bookcase');
	$this->info('Has Bookcase: ' . (($hasBookcase) ? 'Yes' : 'No'));

	$hasDesk = $collection->contains('product', 'Desk');
	$this->info('Has Desk: ' . (($hasDesk) ? 'Yes' : 'No'));

	// map()

	$prices = collect([100.50, 201.20, 304.00, 542.22]);

	$prices->map(function ($item, $key) {
	    return round($item + ($item * 0.06), 2);
	})->each(function($gst_price){
		$this->info('GST Price: RM ' . $gst_price);
	});

	$external_data = range(1,4);
	$data = collect([
		[
			'name' => 'A',
		],
		[
			'name' => 'B',
		],
	])->map(function($item) use ($external_data) {
		$item['data'] = $external_data;
		return $item;
	});
	$this->info('Add External Data into a collection sub-set: ' . $data->toJson());
})->describe('Collection Playground');
