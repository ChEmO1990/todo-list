# Todo-List
Live Demo: https://ahb-todolist.herokuapp.com/

I developed the project using PHP and the Laravel framework. I created a simple auth system and each user has his/her owns tasks.


## Which includes

- A simple, fast auth system.
- A simple Task CRUD.
- Database Relationship between users and tasks.
- A simple middleware to avoid that unauthorized users create task without create an account before.
- MySQL Database


## How to build locally
Install [Composer](https://getcomposer.org/) before continue.

- Clone your project
- Go to the folder application using cd command on your cmd or terminal
- Run composer install on your cmd or terminal
- Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command     prompt Windows or cp .env.example .env if using terminal, Ubuntu.( I deleted the .env file from the .gitignore file. Only for testing purpose)
- Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_  PASSWORD) field correspond to your configuration. 

(WARNING- Rigth now the .env file has the MYSQL database parameters(Live Demo). To run the project locally just remove the current parameters.. your configurations should be looks like this:

DB_CONNECTION
DB_HOST
DB_PORT
DB_DATABASE
DB_USERNAME
DB_PASSWORD

After that... go to the app\config\database.php file and change the parameter in the line 16 to "sqlite"
Finally go to the folder application using cd command on your cmd or terminal and enter the following command: "touch database/database.sqlite"

- Run php artisan key:generate
- Run php artisan migrate
- Run php artisan serve
- Go to http://127.0.0.1:8000


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
