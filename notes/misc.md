## Misc.

- [x] Logging
	- [x] Use different drivers
	- [x] `logger()`
		- [x] `logger()->emergency($message);`
		- [x] `logger()->alert($message);`
		- [x] `logger()->critical($message);`
		- [x] `logger()->error($message);`
		- [x] `logger()->warning($message);`
		- [x] `logger()->notice($message);`
		- [x] `logger()->info($message);`
		- [x] `logger()->debug($message);`
	- [x] Level: emergency, alert, critical, error, warning, notice, info and debug

- [x] Localization
	- [x] Setup - `config/app.php` -> `locale`
	- [x] By Keyed String OR Using Strings As Keys
		- [x] Using Strings as Keys save as JSON file
		- [x] Key String, save as PHP file
	- [x] Blade Directive `@lang('something')`
	- [x] Enable on runtime - `app()->setLocale('ms');`

- [x] Helper
	- [x] use tinker 
	- [x] `snake_case()`, `str_plural()`, `view()`, `response()`, `request()`, `redirect()`
	- [x] custom helpers? hell yeahhhhh!

- [x] Session
	- [x] `session()->get('key');`
	- [x] `session()->put('key', 'value');`

- [x] Response
	- [x] json()
	- [x] redirect()
	- [x] view()
	- [x] macros
		- [x] response()->api($data, $message, $http_status_code)

- [x] Collections
	- [x] each
	- [x] sum
	- [x] higher order

- [x] Mutators & Accessors
	- [x] Show accessor benefits, especially involved nested queries
