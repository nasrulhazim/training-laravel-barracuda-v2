## Eloquent

- [ ] Database: Seeding
- [ ] Eloquent
- [ ] Pagination 
- [ ] Relationships
	- [ ] 1-to-1
	- [ ] 1-to-many
	- [ ] many-to-1
	- [ ] many-to-many
	- [ ] Polymorph
- [ ] Lazy & Eager Loading (Use Model Or Relationship)

A user has many invoices
An invoice has many items

User > invoices >> items

### Lazy Loady

No joins involved when first query

```php
$user = \App\Models\User::first();
$user->invoices...
```

### Eager Loading

Include joining tables

```php
$user = \App\Models\User::with('invoices')->first();
```

