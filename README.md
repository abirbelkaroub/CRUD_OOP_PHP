# Todo App (PHP MVC)

A simple CRUD To-Do application built with PHP and MySQL using a beginner-friendly MVC structure.

## Features

- Add a new task
- Display all tasks
- Update an existing task
- Delete a task

---

## Installation

1. Clone the repository
2. Create a MySQL database manually and update the database connection settings according to your local environment
3. Run the project on localhost using XAMPP or Laragon

---

## Project Structure

The application follows a simple MVC architecture:

- **Model** → Handles database operations
- **View** → Displays tasks to the user
- **Controller** → Handles application logic and user requests

---

## CRUD Operations Flow

### Create (Insert)

User submits a task  
→ Controller receives the request  
→ Model inserts data into the database  
→ Database stores the task

### Read (Display)

View requests all tasks  
→ Model executes a SELECT query  
→ Database returns tasks  
→ View displays them

### Update

User clicks update on a specific task  
→ Task ID is sent through the URL  
→ Controller retrieves task data  
→ User edits the task  
→ Model updates the database

### Delete

User clicks delete on a task  
→ Task ID is sent to the controller  
→ Model deletes the task from the database

---

## Current Improvements Needed

- Improve the frontend design/UI
- Better MVC separation (less logic inside `index.php`)
- Possibly add automatic deletion of completed tasks after 24 hours

---

