## BABIL ORDER TRACKING
A Laravel web application to track order statuses from production to delivery.

### Setting up

-   Install Composer Dependencies

```
composer install
```

-   Install NPM Dependencies

```
npm install
```

-   Create a copy of your .env file
    .env file is not committed to source control for security reasons. But there is a .env.example which is a template of the .env file that the project expects us to have. So we will make a copy of the .env.example file and create a .env file

```
cp .env.example .env
```

-   Generate an app encryption key

```
php artisan key:generate
```

-   Create an empty database for our application

-   In the .env file, add database information to allow Laravel to connect to the database
    In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created.

-   Migrate the database

```
php artisan migrate
```

-   Seed the database

```
php artisan db:seed
```
