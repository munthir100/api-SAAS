# SAAS Application

Welcome to the SAAS Application – a Laravel-based project for managing tenants, users, products, and orders.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [API Documentation](#api-documentation)

## Introduction

SAAS Application is a web-based platform that allows you to efficiently manage tenants, users, products, and orders. It provides a robust and scalable solution for SAAS businesses.

## Features

- **Tenant Management:** Create, edit, and delete tenants.
- **User Management:** Manage users within each tenant.
- **Product Catalog:** Maintain a catalog of products for each tenant.
- **Order Processing:** Track and manage orders placed by users.

## Getting Started

### Prerequisites

Make sure you have the following installed on your machine:

- [Git](https://git-scm.com/)
- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/)
- [Laravel](https://laravel.com/docs/8.x/installation)

### Installation

1. **Clone the Repository:**

    ```bash
    git clone https://github.com/munthir100/api-SAAS.git
    ```

2. **Navigate to the Project Directory:**

    ```bash
    cd api-SAAS
    ```

3. **Install Dependencies:**

    ```bash
    composer install
    ```

4. **Copy the Environment File:**

    ```bash
    cp .env.example .env
    ```

5. **Generate Application Key:**

    ```bash
    php artisan key:generate
    ```

6. **Run the Development Server:**

    ```bash
    php artisan serve
    ```

7. **Access the Application:**

    Open your browser and go to [http://localhost:8000](http://localhost:8000)

## Usage

Explore the application and use the features provided for managing tenants, users, products, and orders.

## Contributing

Feel free to contribute to the development of this project by opening issues or submitting pull requests.

## API Documentation

Explore and test the API using the provided OpenAPI Collection in Postman.

1. [Download SAAS Application OpenAPI Collection](SAAS-project-api-collection.json)
2. Import the collection into Postman.
3. Start testing and interacting with the API endpoints.

To get started quickly, download the [SAAS Application OpenAPI Collection](SAAS-project-api-collection.json) file and then import it into Postman. This collection includes pre-configured requests for various API endpoints, making it easy to test and understand the functionality.

