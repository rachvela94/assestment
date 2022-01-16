### Start project
- run the command
$ docker-compose up --build
  
- run this command to execute following commands from container
$ docker exec -it your-container-name /bin/bash

- Install composer packages
$ composer install

- Create and configure you .env file based on env.example

- Run database migrations:
$ php artisan migrate

- Run scheduler:
  $ php artisan scheduler:work
  
-Heroku url for testing
https://stormy-garden-21209.herokuapp.com/
