---

# Author Tracker Website

The **Author Tracker Website** is a user-friendly web application built with Go and the Gin framework. This project provides a platform to manage authors and their books, with a focus on simplicity and efficiency. The system includes a homepage, dedicated pages for authors and books, and a collection page for displaying detailed book information.

---

## Goals

1. Provide a streamlined interface for managing authors and their books.
2. Implement CRUD functionality for authors and books.
3. Establish relationships between authors and books using Go’s models.
4. Utilize Gin controllers for clean and maintainable code.
5. Include dynamic pages for displaying collections of books and authors.

---

## Key Features

### Homepage

- **Get Started Button**: Redirects users to the Authors Page.

### Authors Page

- **index.html**: Displays a list of all authors.
- **create.html**: Allows users to add a new author.
- **edit.html**: Provides functionality to update author details.

### Books Page

- **Collection of Authors and Books**:
  - Header: "Collection of Authors and Books"
  - Description: "View and manage your favorite books here!"
- **create.html**: Enables adding new books.
- **detail.html**: Shows detailed information about a book.
- **edit.html**: Facilitates editing book information.
- **view\.html**: Displays a list of books and their authors.

### Collection Page

- Displays all book titles, author names, descriptions (synopsis), and release dates.

---

## Technical Overview

### Controllers

1. **HomeController**: Manages the homepage and navigation.
2. **AuthorController**: Handles all CRUD operations for authors.
3. **BookController**: Manages CRUD operations for books.
4. **CollectionController**: Displays the collection of books and authors.

### Models

- **AuthorModel**:
  - Represents the author entity.
  - Includes fields for author details.
- **BookModel**:
  - Represents the book entity.
  - Includes fields for book details and associations with authors.

### Entities

- **author.go**: Defines the Author struct and its fields.
- **book.go**: Defines the Book struct and its fields, including the relationship with authors.

---

## Project Structure

```
project-root/
├── main.go
├── controllers/
│   ├── homecontroller.go
│   ├── authorcontroller.go
│   ├── bookcontroller.go
│   └── collectioncontroller.go
├── models/
│   ├── authormodel.go
│   ├── bookmodel.go
├── entities/
│   ├── author.go
│   ├── book.go
├── templates/
│   ├── homepage.html
│   ├── authors/
│   │   ├── index.html
│   │   ├── create.html
│   │   └── edit.html
│   ├── books/
│   │   ├── create.html
│   │   ├── detail.html
│   │   ├── edit.html
│   │   └── view.html
│   └── collection/
│       └── index.html
```

---

## Steps for Development

### 1. Setup Project

- Initialize a Go project.
- Install the Gin framework.

### 2. Database Design

- Create tables for authors and books with the following fields:
  - **Authors**: `id`, `name`, `birthdate`, `bio`.
  - **Books**: `id`, `title`, `author_id`, `synopsis`, `release_date`.

### 3. Model Creation

- Define the `Author` model with fields and relationships.
- Define the `Book` model with fields and relationships.

### 4. Controller Development

- Implement CRUD operations in `authorcontroller.go` and `bookcontroller.go`.
- Create routing for all endpoints.

### 5. Frontend Integration

- Develop dynamic templates using HTML and CSS.
- Use JavaScript for interactivity.

### 6. Testing

- Test all features, including routing, database interactions, and templates.
- Ensure relationships between authors and books work as expected.

---

## Example Routes

- `GET /` – Displays the homepage.
- `GET /authors` – Lists all authors.
- `POST /authors` – Adds a new author.
- `GET /books` – Lists all books.
- `POST /books` – Adds a new book.
- `GET /collection` – Displays the collection of books and authors.

---
