##

php artisan make:model Role -m
php artisan make:model Permission -m
php artisan make:migration create_permission_role_pivot_table
php artisan make:migration create_role_user_pivot_table
php artisan make:seeder UserSeeder
php artisan make:seeder RoleSeeder
php artisan make:seeder PermissionSeeder
php artisan make:seeder PermissionRoleSeeder
php artisan make:seeder RoleUserSeeder 
php artisan make:model Post -a
php artisan make:model Comment -a
php artisan make:middleware AuthGates