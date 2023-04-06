# About The Project
Festick.com is a website that provides various kinds of concert tickets. Users can choose the ticket and the amount they want. This Festick website is the final project at Investree.

## Festick's features include:
### Users
- Landing page -> displays a carousel, several ticket list components, and an information component regarding festick.com facilities
- Register page -> displays the user registration form
- Login page -> displays the user login form
- Ticket List page -> displays the ticket list from festick.com
- Ticket Detail Page -> displays ticket details that have been selected by the user, here the user can enter the number of tickets desired and a total price calculation occurs according to the number of tickets entered
- Final Transaction Ticket page -> displays user order confirmation
- About Us page - displays the developer's profile and a glimpse of festick.com

### Admin
- Admin Dashboard page -> displays a summary of the amount of data in the festick.com database, starting from the list of users, tickets, catalogs, and transactions
- User List page -> displays the user list data, here the admin can read, update, and delete users
- Ticket List page -> displays ticket list data, here the admin can create, read, update, and delete tickets
- Catalog List page -> displays catalog list data, here the admin can create, read, update, and delete catalogs
- Transaction List page -> displays transaction list data, here the admin can create, read, update, and delete transactions
- Transaction Success List page -> displays data list transaction with success status
- Transaction Pending List page -> displays data list transactions with pending status
- Transaction Refund List page -> displays transaction list data with refund status

### Built With
* [![Vue][Vue.js]][Vue-url]
* [![Laravel][Laravel.com]][Laravel-url]
* [![Bootstrap][Bootstrap.com]][Bootstrap-url]


## Getting Started
This section describes how to run a Festick website.

### Prerequisites
* NPM
* Laravel 8
* PHP Version Greater than 8
* Laragon Tools for SQL Server or XAMPP Tools
* Vue 2

### Installation
- Clone the repository
    ```sh
    git clone https://github.com/Leozann/Festick-WebProjectInvestree.git
    ```
- Install NPM packages
   ```sh
   npm install
   ```
- Install Composer packages
   ```sh
   composer install
   ```
- Generate Laravel .env file
   ```sh
   cp .env.example .env
   ```
   and
   ```sh
   php artisan key:generate
   ```
- Run your SQL Server and Create Database
- In .env file inside this project, config this section and relate it to the one on the database server
    DB_DATABASE= your_database_name
    DB_USERNAME= your_username
    DB_PASSWORD= your_password
- After that do the migration with this command
   ```sh
   php artisan migrate
   ```
- Generate seeder for data dummy that you can use to manipulate database using this command
   ```sh
   npm install
   ```
- Split VSCode terminal, in terminal 1. Write this code to run Laravel Backend
   ```sh
   php artisan db:seed
   ```
- In terminal 2, write this code to run Vue Frontend
   ```sh
   npm run watch
   ```
- After Laravel and Vue running. Use https://localhost:8000 and Voilà
