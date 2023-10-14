# Pathfinder

Name-badge printing application for MBLGTACC.

## Installation

1. Clone the directory

```bash
git clone git@github.com:SGDInstitute/pathfinder.git
```

2. Copy `.env.example` to `.env`

```bash
cp .env.example .env
```

3. Install composer dependencies

```bash
composer install
```

4. Generate application key

```bash
php artisan key:generate
```

5. Install NativePHP dependencies

```bash
php artisan native:install
```

6. Run the NativePHP development server

```bash
php artisan native:serve
```
