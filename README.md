# highpoints.us

This web application is meant to be used as a companion to track your progress as you complete the US highpoints challenge, which involves summiting the tallest natural point in each of the 50 unites states.

## Project Overview

Highpoints.us is a Laravel-based web application that helps adventurers track their progress in completing the US highpoints challenge. The application provides features for:

- Tracking completed highpoints
- Viewing highpoint details and difficulty levels
- Managing user profiles and achievements
- Planning future highpoint expeditions
- Community features for sharing experiences

## Tech Stack

- **Backend**: Laravel 11.0+
- **Frontend**: 
  - SCSS for styling
  - Livewire 3.5+ for dynamic components
- **Database**: MySQL
- **Development**: Docker & Laravel Sail
- **Node.js**: >= 20 (for asset compilation)

## Local Development Instructions

### Prerequisites
- Docker
- Node.js (>= 20)
  - Recommended version manager is nvm
- Composer (for local development)

### Setup
1. Clone the repository
2. Copy the .env.example file to .env (`cp .env.example .env`) and fill in the required environment variables
3. Run `sail up` to start the application and database
4. Run `sail composer install` to install the required dependencies
5. Generate an app key by running `sail artisan key:generate`
6. Run `sail artisan migrate:fresh` to migrate the database
7. Run `sail artisan db:seed` to seed the database (recommended for localhost environment)
8. Outside of the container, run `npm install` to install the required frontend dependencies
9. Then run `npm run dev` to start the vite dev server for assets
10. Visit `http://localhost` in your browser to view the application

### Development Workflow

#### Running Tests
```bash
sail artisan test
```

#### Code Style
The project follows PSR-12 coding standards. To check your code style:
```bash
sail composer run-script phpcs
```

To automatically fix code style issues:
```bash
sail composer run-script phpcbf
```

#### Database Management
- Create a new migration: `sail artisan make:migration migration_name`
- Run migrations: `sail artisan migrate`
- Rollback migrations: `sail artisan migrate:rollback`
- Refresh migrations: `sail artisan migrate:refresh`

#### Asset Compilation
- Development: `npm run dev`
- Production build: `npm run build`
- Watch for changes: `npm run watch`

## Project Structure

```
├── app/
│   ├── Http/
│   │   ├── Controllers/    # Application controllers
│   │   ├── Livewire/      # Livewire components
│   │   ├── Requests/      # Form request validation
│   │   └── Middleware/    # Custom middleware
│   ├── Models/            # Eloquent models
│   ├── Services/          # Business logic services
│   └── Repositories/      # Data access layer
├── resources/
│   ├── css/              # SCSS files
│   │   ├── base/         # Base styles and variables
│   │   ├── components/   # Component-specific styles
│   │   └── layouts/      # Layout styles
│   ├── js/              # JavaScript files
│   └── views/           # Blade templates
└── tests/               # PHPUnit tests
```

## Contributing

1. Create a new branch for your feature/fix
2. Make your changes
3. Write/update tests as needed
4. Ensure all tests pass
5. Submit a pull request

## License

This project is proprietary and confidential. Unauthorized copying, distribution, or use is strictly prohibited.

## Support

For support, please contact the development team or create an issue in the project repository.
