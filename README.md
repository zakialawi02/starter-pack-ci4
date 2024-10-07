# starter-pack-ci4

## Installation

1. Run `git clone https://github.com/zakialawi02/starter-pack-ci4.git .`
2. open the `starter-pack-ci4` folder with `cd starter-pack-ci4`
3. Run `composer install` to install the dependencies.
4. Copy the `.env.example` file and rename to `.env` and update the database credentials in that file. The framework will read from that file when the environment is not explicitly set.
5. Run `php spark migrate -all` to run the migrations.
6. Run `php spark db:seed UsersSeeder` to seed the database.
7. Run `php spark db:seed NotesSeeder` to seed the database.
8. Setting email credentials in `.env` file. \*
9. Run `php spark serve` to start the server.
10. Setting `app.baseURL` in `.env` file with the correct `baseUrl` for your development server.

## \*Setting Email Verification

Uncomment `$requireActivation = null` if you want to activate email verification. and comment out the code below it.

## Kredensial Login

url: `/login`

Username / email: `admin / admin@admin.com`
Password: `password`

Username / email: `user / user@user.com`
Password: `password`
