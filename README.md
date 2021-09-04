# Feature Toggle

## Setup In Local Machine
To pull this application from GitHub repo.
run ```git clone ```
To Setup this application in local.
1. An accessible Mysql Database is required.
2. Installed PHP 7.3 or PHP 8

Do the following steps to setup in local.

### 1. Install Dependencies
run ```composer install```

### 2. Configure environment
run `cp .env.example .env` and set database config inside `.env` file 

### 3. To host in local machine
run `php artisan serve`

## Setup using docker-compose
1. Run `cp .env.example .env` (or use your own `.env`)

2. In `.env`, change `DB_HOST=127.0.0.1` to `DB_HOST=your_mysql_container_name` (`DB_HOST=db` in this example)

3. Build and run project with:
```
docker-compose --env-file .env up --build -d
```
4. Run Migration and seed data
```
docker exec <your_container_name> php artisan migrate
docker exec <your_container_name> php artisan db:seed
```
## Run Test
run `composer test` in command line
