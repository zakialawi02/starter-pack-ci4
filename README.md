# starter-pack-ci4

## Installation

1. Run `git clone https://github.com/zakialawi02/starter-pack-ci4.git .`
2. open the `starter-pack-ci4` folder with `cd starter-pack-ci4`
3. Run `composer install` to install the dependencies.
4. Copy the `.env.example` file to `.env` and update the database credentials in that file. The framework will read from that file when the environment is not explicitly set.
5. Run `php spark migrate -all` to run the migrations.
6. Run `php spark db:seed UseSeeder` to seed the database.
7. Run `php spark db:seed NotesSeeder` to seed the database.
8. Setting email credentials in `.env` file.
9. Run `php spark serve` to start the server.
