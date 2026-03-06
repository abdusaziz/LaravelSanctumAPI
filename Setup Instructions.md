=============================================================
### Code With Dary                                          |
=============================================================
Laravel API Crash Course With Sanctum                       |
| Laravel Sanctum Full Tutorial                             |
| How to Build Laravel API                                  |
https://www.youtube.com/watch?v=TzAJfjCn7Ks&t=2050s
=============================================================
# php artisan install:api
# copy routes/api.php
# Create app/Traits/HttpResponses.php & copy
# php artisan make:controller AuthController & copy
# add HasApiToken to app/http/model/user.php
# php artisan make:request StoreUserRequest & copy
# php artisan make:request LoginUserRequest & copy
# php artisan make:controller TasksController & copy
# php artisan make:model Task -m & copy migration and model
# php artisan migrate
# php artisan make:factory TaskFactory & copy
# php artisan tinker
        # User::factory()->times(25)->create();
        # Task::factory()->times(250)->create();
        # exit;
# php artisan make:resource TasksResource & Copy
# php artisan make:request StoreTaskRequest & copy
=============================================================