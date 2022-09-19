# Movie Watchlist

### Instructions

- composer install
- Copy the .env.example file to .env and update the database credentials
- Run php -S localhost:8000 -t public/

### Requirments: 

In this application,


- A user can register to the system via email and password
- Email must be unique
- Password must need to be stored in hash to database
- A user can log in to the application with his email and password
- If authenticated, he will be redirected to the dashboard

- If a user already registered with the email, then show "User already registered".
- If a user provides wrong credentials, show "User email or password is incorrect. Please try again."

- A user can add new movie to watchlist
- A user can view the watchlist in a different route
- A user can edit the watchlist
- A user can delete the watchlist