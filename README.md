### Start project
- Create and configure you .env file based on env.example
  
- run the command
$ docker-compose up --build
  
- run this command to execute following commands from container
$ docker exec -it your-container-name /bin/bash

- Install composer packages
$ composer install
  
- Run database migrations:
$ php artisan migrate

- Run scheduler:
  $ php artisan scheduler:work
  
-Heroku url for testing
https://stormy-garden-21209.herokuapp.com/

-Postman collection link
https://www.postman.com/collections/936e00880ec66200ce4e
