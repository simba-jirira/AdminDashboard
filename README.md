# Laravel Real-Time Analytics Dashboard

This is a feature-rich analytics dashboard powered by Laravel 10, Livewire 3, and TailwindCSS. The dashboard provides real-time analytics, error logging, and uptime monitoring of multiple websites. It also incorporates a roles and permissions system for enhanced security and user management.

## Table of Contents

1. [Features](#features)
2. [Tech Stack](#tech-stack)
3. [Prerequisites](#prerequisites)
4. [Installation](#installation)
5. [Configuration](#configuration)
6. [Database Setup](#database-setup)
7. [Real-Time Analytics](#real-time-analytics)
8. [Error Logging](#error-logging)
9. [Uptime Monitoring](#uptime-monitoring)
10. [Roles and Permissions](#roles-and-permissions)
11. [API Integration](#api-integration)
12. [Testing](#testing)
13. [Deployment](#deployment)
14. [License](#license)

## Features

- **Real-Time Analytics:** Track user behavior, page views, and other key metrics.
- **Error Logging:** Monitor and log errors as they occur in real-time.
- **Uptime Monitoring:** Monitor the availability of multiple websites and their pages.
- **Roles and Permissions:** Built-in system for user roles and permissions.

## Tech Stack

- Backend: Laravel 10
- Frontend: Livewire 3 + TailwindCSS
- Real-time: Laravel Websockets
- Database: MySQL
- Testing: PHPUnit

## Prerequisites

- PHP >= 7.4
- Composer
- Node.js and NPM
- MySQL

## Installation

```bash
# Clone the repository
git clone https://github.com/simba-jirira/AdminDashboard.git

# Navigate to project directory
cd AdminDashboard

# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install

# Build assets
npm run dev
```

## Configuration

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

## Database Setup

Configure your database credentials in `.env`. Then, run the following commands:

```bash
# Run migrations
php artisan migrate

# Seed database with roles and permissions
php artisan db:seed --class=UserRolePermissionSeeder
```

## Real-Time Analytics

This feature utilizes Laravel Websockets. To start the Websockets server:

```bash
php artisan websockets:serve
```

## Error Logging

Errors are captured and displayed in real-time on the dashboard. You can set the level of errors to log in the `.env` file.

## Uptime Monitoring

The system performs regular checks to monitor the uptime of websites. You can configure the check intervals and alert mechanisms.

## Roles and Permissions

### Role Definitions

- **Admin:** Full access to the dashboard, including analytics, error logs, and uptime monitoring.
- **Editor:** Can view analytics and error logs but can't manage users or uptime settings.
- **Viewer:** Read-only access to analytics.

### Usage

Use the `UserRolePermissionSeeder` to seed the roles and permissions into the database.

```bash
php artisan db:seed --class=UserRolePermissionSeeder
```

## API Integration

You can also access analytics and logs via RESTful APIs. API documentation is available at `/api/docs`.

## Testing

We use PHPUnit for testing.

```bash
# Run tests
php artisan test
```

## Deployment

Instructions for deploying to various environments can be found in the `DEPLOYMENT.md` file.

## License

This project is licensed under the MIT License.
