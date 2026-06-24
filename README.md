# Rishabh Chaurasiya – Developer Portfolio

**PHP Laravel Developer | REST API Specialist | Backend Engineer**

[![Laravel](https://img.shields.io/badge/Laravel-10-red?logo=laravel)](https://laravel.com)
[![Vue.js](https://img.shields.io/badge/Vue.js-3-42b883?logo=vue.js)](https://vuejs.org)
[![PHP](https://img.shields.io/badge/PHP-8.2-8892be?logo=php)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-00758f?logo=mysql)](https://mysql.com)

---

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Backend | Laravel 10, PHP 8.2 |
| Frontend | Vue.js 3 (Composition API), Bootstrap 5 |
| Database | MySQL 8.0, Eloquent ORM |
| Build Tool | Vite 5 |
| HTTP Client | Axios |
| Auth (API) | Laravel Sanctum ready |
| Styling | Custom CSS with CSS variables |

## Features

- ⚡ Single-page portfolio with smooth scroll and section tracking
- 🎨 Dark terminal-aesthetic design with electric blue accent
- ✍️ Typewriter effect in hero section
- 🔍 Filterable skills grid (Backend / Database / Frontend / Tools)
- 📅 Timeline-style experience section
- 🃏 Project cards with live links and feature chips
- 📬 Contact form → Axios → Laravel API → MySQL (stored in DB)
- 📱 Fully responsive, mobile-first
- 🏗️ MVC architecture, clean routes, validation, error handling

## Quick Start

```bash
# 1. Clone
git clone https://github.com/studentrishabh/portfolio.git && cd portfolio

# 2. PHP deps
composer install

# 3. Environment
cp .env.example .env && php artisan key:generate

# 4. Database (after creating DB in MySQL)
php artisan migrate

# 5. Frontend deps
npm install && npm run build

# 6. Serve
php artisan serve
```

Visit `http://127.0.0.1:8000`

## API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/health` | Health check |
| POST | `/api/contact` | Store contact message |

See `DEPLOYMENT_GUIDE.md` for full deployment instructions.

---

**Rishabh Chaurasiya** · rishabh.chaurasiya011@gmail.com · +91 9217659349
