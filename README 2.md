# PreguntaleIA

PreguntaleIA is a chatbot project integrated with WhatsApp, developed in Laravel. This README provides a detailed guide on how to configure and run the project.

## Requirements

- PHP >= 8.1
- Composer
- Node.js >= 12.x
- npm
- Servidor web (Apache, Nginx, etc.)
- Base de datos (MySQL)

## Installation

1. Clone the repository from GitHub:

    ```bash
    git clone https://github.com/tuusuario/PreguntaleIA.git
    ```

2. Install PHP dependencies using Composer:

    ```bash
    composer install
    ```

3. Copy the example environment file and configure it according to your needs:

    ```bash
    cp .env.example .env
    ```

4. Generate an application key:

    ```bash
    php artisan key:generate
    ```

5. Compile front-end assets:

    ```bash
    npm install && npm run dev
    ```

I hope this format is useful to you! If you need any modifications or have further questions, I'm here to help!
