
# This is a demo task done for the position of full stack laravel developer.



## Requirements

- PHP >= 8.1
- Laravel >= 10.0
- Composer

## Installation

1. Clone the repository:

```bash
git clone https://github.com/zee-web-dev/inhouse-web.git
```

2. Navigate to the project directory:

```bash
cd inhouse-web
git checkout task
```

3. Install the dependencies using Composer:

```bash
composer install
```

4. Create a copy of the `.env.example` file and rename it to `.env`:

```bash
cp .env.example .env
```

5. Generate a new application key:

```bash
php artisan key:generate
```

6. Configure your database connection in the `.env` file:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run the database migrations and seeder:

```bash
php artisan migrate --seed
```

`Note: you can change email and password in DatabaseSeeder.php. However the default mail is admin@admin.com & password is password.`

8. Start the development server:

```bash
php artisan serve
```

The project now up and running at `http://localhost:8000`.

9. Configure your mail setup in the `.env` file:

```dotenv
MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```