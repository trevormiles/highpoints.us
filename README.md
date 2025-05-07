# highpoints.us

This web application is meant to be used as a companion to track your progress as you complete the US highpoints challenge, which involves summiting the tallest natural point in each of the 50 unites states.

# Local Development Instructions

## Prerequisites
- Docker
- Node.js (>= 20)
  - Recommended version manager is nvm

## Setup
1. Clone the repository
2. Copy the .env.example file to .env (`cp .env.example .env`) and fill in the required environment variables
3. Run `sail up` to start the application and database.
4. Run `sail composer install` to install the required dependencies
5. Generate an app key by running `sail artisan key:generate`
6. Run `sail artisan migrate:fresh` to migrate the database
7. Run `sail artisan db:seed` to seed the database (recommended for localhost environment)
8. Outside of the container, run `npm install` to install the required frontend dependencies
9. Then run `npm run dev` to start the vite dev server for assets
10. Visit `http://localhost` in your browser to view the application
