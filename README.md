
# Car-Reselling (Car Reselling system).
- An Car Reselling System | Developed with Laravel 


### All Cars for sell
<img src="https://i.imgur.com/NjHhUJ7.png" />

### Create Page for Selling a Car...
<img src="https://i.imgur.com/qemnAol.png" />


### Customer Login page...
<img src="https://i.imgur.com/gi0N8jF.png" />

### Customer Registration Page
<img src="https://i.imgur.com/HXAoKHc.png" />


## Installation process

### Clone the repo.
```
git clone https://github.com/vikas-ukani/Car-Reselling.git
cd Car-Reselling
```

### Create .env file
```
cp .env.example .env
```

### Install pacakges.
- Install php laravel pacakges
```
composer install 
```


- Configure local database connection.
###  Generate key if it's required, Run the command 
```
php artisan key:generate
```

### Database setup
- Find the exported database backup on database directory and import on local system.
- Path `database/car-reselling.sql`

- OR run the migrations, for fresh database setup.
`php artisan migrate`

### Seed the dummy data.
- After done setup with, Run the below command to insert dummy data to database
```
php artisan db:seed
```


### Run the PHP server
```
php artisan serve
```

### Run Vue server
```
npm run dev
```

### Run the test for routes.
```
php artisan test
```

### Visit the site.
```
http://localhost:8000/
```


