// Installation

// 1. Clone the repository and cd into it

// 2. Install the dependencies

-   composer install

// 3. Copy the .env.example file to .env

-   cp .env.example .env

// 4. Generate the application key

-   php artisan key:generate

// 5. Use docker or sql app

-   docker-compose up -d

// 6. Run the migrations

-   php artisan migrate

// 7. Run the database seeder

-   php artisan db:seed

// 8. Run the application with

-   php artisan serve
