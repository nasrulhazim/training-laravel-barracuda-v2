## Eloquent

- [x] Database: Seeding
- [x] Eloquent
- [ ] Pagination 
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

### Lazy Loady

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

