## Serialization

### toArray, toJson

```php
$user->toArray();
$user->toJson();
```

### Hide, Visible and Append

```
/**
 * The attributes that should be hidden for arrays.
 *
 * @var array
 */
protected $hidden = ['password'];

/**
 * The attributes that should be visible in arrays.
 *
 * @var array
 */
protected $visible = ['first_name', 'last_name'];

/**
 * The accessors to append to the model's array form.
 *
 * @var array
 */
protected $appends = ['is_admin'];
```

### Temporary Visible / Hide

```
$user->makeVisible('password')->toArray();
$user->makeHidden('password')->toArray();
```