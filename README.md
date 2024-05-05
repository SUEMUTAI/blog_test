# Laravel Application Setup Guide

This guide provides step-by-step instructions to set up and run a Laravel application locally.

## Prerequisites
- PHP installed on your system
- Composer installed on your system
- MySQL or any other supported database server installed on your system

## Installation Steps

### 1. Install Composer Dependencies
Navigate to the root directory of your Laravel application in the terminal and run the following command to install the Composer dependencies:
```bash
- composer install
- Make a copy of the `.env.example` file and rename it to `.env`
    - `cp .env.example .env`
- Generate application key
  - `php artisan key:generate`
- Set Up Database appropriately
- Run Databse Migrations
  - `php artisan migrate`
- Finally Serve the application
  - `php artisan serve`
- Access it on `http://localhost:8000`
