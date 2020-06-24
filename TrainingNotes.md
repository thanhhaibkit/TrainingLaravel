## DB Migration
```
php artisan migrate:fresh --seed

php artisan make:model Model/Account --migration --seed --factory
php artisan make:migration create_accounts_table --create=accounts
php artisan make:seeder AccountSeeder
php artisan make:factory AccountFactory --model=Models/Account


```

php artisan make:migration create_blocks_table --create=blocks
