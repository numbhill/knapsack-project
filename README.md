# Knapsack Problem Solver

This project provides a solution for the 0/1 Knapsack problem using dynamic programming, implemented in PHP with the Laravel framework and styled with Tailwind CSS.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Dynamic Programming Explanation](#dynamic-programming-explanation)
- [References](#references)

## Introduction

The 0/1 Knapsack problem is a classic optimization problem where the objective is to maximize the total value of items that can be carried in a knapsack of fixed capacity. This project demonstrates how to solve this problem using dynamic programming.

## Features

- Solve the 0/1 Knapsack problem using dynamic programming.
- Display the maximum value that can be achieved with the given capacity.
- Show the dynamic programming table used to solve the problem.
- User-friendly interface with Tailwind CSS for styling.

## Installation

Follow these steps to set up the project locally.

### Prerequisites

- PHP = 8.3
- Composer
- sqlite or any other supported database

### Steps

1. **Clone the repository:**

    ```bash
    git clone https://github.com/your-username/knapsack-project.git
    cd knapsack-project
    ```

2. **Install dependencies:**

    ```bash
    composer install
    ```

3. **Set up the environment:**

    Copy the `.env.example` file to `.env` and update the database configuration:

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database details:

    ```plaintext
    DB_CONNECTION=sqlite
    ```

4. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run the migrations:**

    ```bash
    php artisan migrate
    ```

6. **Seed the database (optional):**

    ```bash
    php artisan db:seed --class=ItemSeeder
    ```

7. **Serve the application:**

    ```bash
    php artisan serve
    ```

8. **Access the application:**

    Open your web browser and go to `http://localhost:8000/knapsack`.

## Usage

1. Go to `http://localhost:8000/knapsack`.
2. Enter the capacity of the knapsack.
3. Click the "Solve" button to get the maximum value.
4. To view the dynamic programming table, use the appropriate form and submit.

## Project Structure

```plaintext
knapsack-project/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── KnapsackController.php
│   ├── Models/
│   │   └── Item.php
├── resources/
│   ├── views/
│   │   └── knapsack/
│   │       ├── index.blade.php
│   │       └── result.blade.php
│   │   └── welcome.blade.php
├── routes/
│   └── web.php
├── database/
│   ├── migrations/
│   │   └── xxxx_xx_xx_create_items_table.php
│   └── seeders/
│       └── ItemSeeder.php
└── .env.example
```
