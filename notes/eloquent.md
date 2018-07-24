## Eloquent

- [x] Database: Seeding
	- [x] DevelopmentSeeder
	- [x] added `php artisan seed:dev` in `routes/console.php`
- [x] Eloquent
- [x] Pagination 
	- [x] Use when query: `\App\Invoice::paginate(config('pagination.length'))`
	- [x] Use in view: `$invoices->links()`
- [ ] Relationships
	- [ ] 1-to-1
	- [x] 1-to-many
	- [x] many-to-1
	- [ ] many-to-many
	- [ ] Polymorph
- [x] Lazy & Eager Loading (Use Model Or Relationship)

A user has many invoices
An invoice has many items

User > invoices >> items

### Lazy Loading

No joins involved when first query

```php
$user = \App\User::first();
$user->invoices;
```

### Eager Loading

Include joining tables

```php
$user = \App\User::with('invoices', 'invoices.items')->first();
```

