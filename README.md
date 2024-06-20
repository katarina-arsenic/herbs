# Katarina's Herb Webshop

Welcome to Katarina's Herb Webshop, an online store offering a variety of high-quality herbs and natural products.

## Table of Contents
- [Installation](#installation)
- [Usage](#usage)
- [Database](#database)
- [File Structure](#file-structure)
- [Technologies Used](#technologies-used)
- [License](#license)

## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/yourusername/herb-webshop.git
    ```
2. Navigate to the project directory:
    ```sh
    cd herb-webshop
    ```
3. Set up the database:
    - Import the `seed.sql` file into your MySQL database.

4. Update the database configuration in `db.php`:
    ```php
    <?php
    $servername = "your_servername";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_dbname";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    ```

## Usage

- Open `index.php` in your web browser to view the homepage.
- Navigate to `products.php` to see the list of products.
- Visit `about.php` to learn more about the webshop.

## Database

The database schema is defined in `seed.sql`:
- Table: `herbs_products`
    - `id` (INT, Primary Key)
    - `name` (VARCHAR)
    - `price` (DECIMAL)
    - `description` (TEXT)
    - `image` (VARCHAR)

## File Structure

```
herb-webshop/
├── images/
│   ├── background.jpg
│   ├── basil.webp
│   ├── chamomile_tea.avif
│   ├── lavender_oil.jpeg
│   ├── mint.webp
│   ├── peppermint_oil.webp
│   └── rosemary.jpg
├── index.php
├── products.php
├── about.php
├── db.php
├── styles.css
└── seed.sql
```

## Technologies Used

- PHP
- MySQL
- HTML
- CSS
- Bootstrap
- Font Awesome

## License

This project is licensed under the MIT License.
