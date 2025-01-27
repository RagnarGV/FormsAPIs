# 🛠️ Form Builder API

This API is designed to handle form data from a React.js frontend, enabling seamless storage in MongoDB.

---

## 🚀 Features

-   Save forms to MongoDB effortlessly.
-   Fetch, update, delete, and list forms with ease.
-   Secure communication with CSRF token integration.

---

## 📚 Tech Stack

-   **Backend**: Laravel
-   **Database**: MongoDB
-   **Library**: [mongodb/laravel-mongodb](https://github.com/jenssegers/laravel-mongodb)

---

## 📖 API Endpoints

| **Endpoint**           | **Method** | **Description**                                                 |
| ---------------------- | ---------- | --------------------------------------------------------------- |
| `/list`                | `GET`      | Lists all the saved forms.                                      |
| `/forms/{id}`          | `GET`      | Fetches a specific form by its ID.                              |
| `/save`                | `POST`     | Saves a new form to the database.                               |
| `/update/{id}`         | `PUT`      | Updates a specific form by its ID.                              |
| `/delete/{id}`         | `DELETE`   | Deletes a specific form by its ID.                              |
| `/sanctum/csrf-cookie` | `GET`      | Fetches the CSRF token for secure requests.                     |
| `/submitForm`          | `POST`     | Optional endpoint to save the data entered by user in database. |

---

## 🔧 Installation

1. Clone the repository:
    ```bash
    git clone <repository-url>
    ```
2. composer install:

````bash
 composer install

   ```
````

3. Add your MongoDB URI to .env before the first start.

4. `php artisan serve`
