## Cache

- [ ] Cache
	- [ ] Drivers: Redis, MemCached, File, Beanstalkd
	- [ ] Cache::remember, Cache::rememberForever
	- [ ] for couple of minues

Setup `.env`

```
CACHE_DRIVE=redis
```

Install Predis

```
composer require predis/predis
```

### Usage

reference data - countries, currencies, states, postcode - cache for forever

```php

use Illuminate\Support\Facades\Cache;

$value = Cache::remember('users', $minutes, function () {
    return DB::table('users')->get();
});

$value = Cache::rememberForever('users', function() {
    return DB::table('users')->get();
});
```