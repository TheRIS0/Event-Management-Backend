# Event Management App (Part: Backend) 

This is the backend part of the Event Management application. It is built with Laravel and MySQL, providing a robust API for managing events and user interactions.
For the frontend part of this project, visit the [Event Management Frontend Repository](https://github.com/TheRIS0/Event-Management-Frontend).

## Features
* ***Event Management:*** Create, read, update, and delete events.
* ***User Management:*** Manage users and their roles.
* ***Comment System:*** Users can add comments to events and engage in discussions.
* ***Attendance Tracking:*** Track user attendance for events.
* ***API:*** Provides a comprehensive API for frontend interaction.

## Technologies Used
* Laravel: A PHP framework for web artisans.
* MySQL: A relational database management system.
* Composer: Dependency management for PHP.
* PHP: The scripting language for backend development.

## Installation
***Prerequisites:*** 
*PHP installed on your machine.
*Composer installed on your machine.
*MySQL installed and running.

## Steps
1. Clone the repository:

```bash
git clone https://github.com/TheRIS0/Event-Management-Backend.git
cd Event-Management-Backend
```

2. Install dependencies:

```bash
composer install
```

3. Set up the environment:
a) Copy the .env.example file to .env:

```bash
cp .env.example .env
```
b) Generate the application key:

```bash
php artisan key:generate
```

c) Configure your database settings in the .env file:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
d) Run migrations:

```bash
php artisan migrate
```

e) Start the development server:

```bash
php artisan serve
```
The application will be available at `http://localhost:8000`.

## Key Components

* Controllers: Handle incoming HTTP requests and return responses.
* Models: Represent the data and business logic.
* Migrations: Manage the database schema.
* Seeders: Seed the database with initial data.

## API Endpoints

The backend provides the following API endpoints:
*GET /api/events: Fetch all events.
*POST /api/events: Create a new event.
*GET /api/events/{id}: Fetch details of a single event.
*PUT /api/events/{id}: Update an event.
*DELETE /api/events/{id}: Delete an event.
*POST /api/events/{id}/comments: Post a comment to an event.
*GET /api/events/{id}/comments: Fetch all comments for an event.
*DELETE /api/events/{id}/comments/{commentId}: Delete a comment.
*POST /api/events/{id}/attendance: Confirm attendance for an event.
*DELETE /api/events/{id}/attendance: Decline attendance for an event.

## Usage 

1. Creating an Event: Use the `/api/events` endpoint to create a new event.
2. Managing Attendance: Use the `/api/events/{id}/attendance` endpoint to confirm or decline attendance.
3. Engaging in Discussion: Use the `/api/events/{id}/comments` endpoint to post and fetch comments.

## License

This project is licensed under the MIT License. See the [license](license) file for details.
