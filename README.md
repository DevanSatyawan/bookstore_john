Installation Tutorial

1. You must have and install Laravel Framework, If you don't have it, please download it from the following link https://laravel.com/ (my laravel version 8.83.23)
2. After that install laravel with composer with command : composer create-project --prefer-dist laravel/laravel your_folder_name
3. Download/copy this file to your local file computer/github, and then copy and paste in the laravel folder that you have created
4. Make database, im using mysql server database
5. change your database on .env
6. After that run command: php artisan migrate
7. I'm using seeding and faker on this progrma to inject fake ranndom data to database
8. Run seeding with command : php artisan db:seed
9. After that run program with command : php artian serve.
