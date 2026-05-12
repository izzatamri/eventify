<h1 align="center">
  <br>
  🎟️ Eventify
  <br>
</h1>

<p align="center">
  <b>A full-stack event management platform built with Symfony 8</b><br>
  Create events · Sell tickets · Manage sponsors · Handle complaints
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Symfony-8.x-black?style=for-the-badge&logo=symfony" />
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-MariaDB-4479A1?style=for-the-badge&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" />
  <img src="https://img.shields.io/badge/Theme-Dark%20%7C%20Light-6366f1?style=for-the-badge" />
</p>

---

## ✨ Features

### 🎪 Event Management
- Create, edit, and publish events with rich details (title, description, location, dates, image)
- Multi-step event creation wizard (Build → Tickets → Publish)
- Event listing with search, sort, and filter
- Organizer dashboard with live event statistics

### 🎫 Ticket System
- Create **Paid**, **Free**, and **Donation** ticket types
- Real-time capacity tracking (sold / available)
- Sale window control (start & end date/time)
- PDF ticket generation with QR code for attendees
- Order management for event organisers

### 👥 User Management
- Registration with email verification (6-digit code)
- JWT-based authentication with password reset flow
- Role system: `USER`, `ORGANIZER`, `ADMIN`
- Profile management

### 💼 Sponsorship
- Sponsor request form embedded on event pages
- Admin approval/rejection workflow
- Gold / Silver / Platinum sponsorship packages

### 📋 Reclamations (Complaints)
- Submit complaints linked to events
- Admin response timeline view
- Status tracking (pending → resolved)

### 🛎️ Service Catalog
- Service provider directory
- AI-assisted service matching score
- Service proposals & booking system

### 🌗 Dark / Light Mode
- Persistent theme preference (localStorage)
- Flash-free theme application on load
- Full CSS variable system — every component adapts

---

## 🛠️ Tech Stack

| Layer | Technology |
|---|---|
| **Backend** | PHP 8.2+, Symfony 8, Doctrine ORM |
| **Frontend** | Twig, Bootstrap 5, Vanilla JS, CSS Variables |
| **Database** | MySQL / MariaDB |
| **Auth** | Symfony Security, CSRF protection |
| **PDF** | QR code ticket generation |
| **Maps** | Leaflet.js |
| **Animations** | AOS, GSAP |

---

## 🚀 Getting Started

### Prerequisites

- PHP 8.2+
- Composer
- MySQL / MariaDB
- Symfony CLI (optional but recommended)

### Installation

```bash
# 1. Clone the repository
git clone https://github.com/izzatamri/eventify.git
cd eventify

# 2. Install PHP dependencies
composer install

# 3. Copy environment file and configure
cp .env .env.local
# Edit .env.local and set your DATABASE_URL:
# DATABASE_URL="mysql://root:@127.0.0.1:3306/eventify"

# 4. Create database and run migrations
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force

# 5. Install frontend assets (if using Webpack Encore)
npm install && npm run dev

# 6. Start the development server
symfony server:start
# or
php -S 127.0.0.1:8000 -t public/
```

Then visit: **http://127.0.0.1:8000**

---

## 📁 Project Structure

```
eventify/
├── src/
│   ├── Controller/          # Symfony controllers
│   │   ├── EventController.php
│   │   ├── OrderController.php
│   │   ├── ReclamationController.php
│   │   ├── SecurityController.php
│   │   └── ...
│   ├── Entity/              # Doctrine entities
│   ├── Form/                # Symfony form types
│   ├── Repository/          # Doctrine repositories
│   └── Security/            # Voters & authenticators
├── templates/
│   ├── base.html.twig       # Master layout (dark/light theme)
│   ├── event_tickets.html.twig
│   ├── order/
│   ├── reclamation/
│   └── security/
├── public/
│   └── assets/
│       ├── css/
│       │   ├── theme.css          # CSS variables (dark/light)
│       │   └── eventify-global.css # Global component styles
│       └── js/
└── config/
```

---

## 🎨 Design System

The UI is built on a **"Dark Premium" glassmorphism** aesthetic with full light/dark mode support.

### Theme Variables (`theme.css`)
```css
/* Dark mode (default) */
--bg-base:    #05050e;
--bg-card:    #0e0e1c;
--accent:     #6366f1;   /* Indigo */
--accent2:    #8b5cf6;   /* Violet */

/* Light mode */
--bg-base:    #f8fafc;
--bg-card:    #ffffff;
```

Theme switching is instant and **flash-free** — the preference is read from `localStorage` before the first paint.

---

## 🔐 Default Roles

| Role | Access |
|---|---|
| `ROLE_USER` | Browse events, buy tickets, submit complaints |
| `ROLE_ORGANIZER` | Create/manage own events and tickets |
| `ROLE_ADMIN` | Full platform access, user management, sponsor approvals |

---

## 📸 Screenshots

> Coming soon — run the project locally to explore the UI!

---

## 🤝 Contributing

1. Fork the project
2. Create your feature branch: `git checkout -b feature/amazing-feature`
3. Commit your changes: `git commit -m 'Add amazing feature'`
4. Push to the branch: `git push origin feature/amazing-feature`
5. Open a Pull Request

---

## 📄 License

This project is part of an academic integration project.  
© 2026 Eventify Team — All rights reserved.

---

<p align="center">
  Made with ❤️ using <b>Symfony 8</b>
</p>
