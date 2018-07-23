## Eloquent

- [ ] Database: Seeding
- [ ] Eloquent
- [ ] Pagination 
- [ ] Relationships
- [ ] Lazy Eager Loading (Use Model Or Relationship)

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

