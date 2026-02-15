# 💆 VelvetCare - Healthcare Services Website

Frontend website for a healthcare/wellness business, built to integrate with the [etvo-manage](https://github.com/ETVO/etvo-manage) CMS backend.

## 🎯 Overview

VelvetCare was a client website for a healthcare services business, featuring service listings, location information, contact forms, and a blog. The site consumed content dynamically from the etvo-manage CMS and included form submission handling with PHPMailer.

**✨ The real highlight here is the custom CMS backend!** Check out [etvo-manage](https://github.com/ETVO/etvo-manage) to see a fully custom content management system I built from scratch with PHP—it's where all the interesting backend magic happened.

**Note:** This project is no longer maintained and the site is no longer live. Versions may be incompatible with current etvo-manage releases.

## 🛠️ Tech Stack

- **PHP** - Template rendering and backend integration
- **Bootstrap 5** - Responsive framework
- **SCSS** - Custom styling
- **Laravel Mix** - Asset compilation
- **PHPMailer** - Contact form email handling

## 🔗 Backend Integration

This frontend connected to the [etvo-manage](https://github.com/ETVO/etvo-manage) CMS to fetch:
- Service descriptions and offerings
- Location and business information
- Blog posts and articles
- Contact information and social media links

The integration happened through `integrate.php`, which included the CMS utilities and loaded shared data like contact info and social links.

## ✨ Features

- **Service Showcase** - Display healthcare services with descriptions
- **Location Section** - Business location and hours
- **About Section** - Company information ("Quem Somos")
- **Contact Form** - Form submission with validation and email notifications
- **Blog** - Content management for articles and updates
- **Privacy Policy** - Dedicated privacy policy page (Portuguese)
- **Cookie Consent** - GDPR-compliant cookie notice

## 🚀 Running This Project

### Prerequisites

- PHP 7.4+
- Node.js and npm
- Composer (for PHPMailer dependencies)
- Access to etvo-manage CMS backend

### Installation

```bash
# Clone the repository
git clone https://github.com/ETVO/velvetcare.git
cd velvetcare

# Install npm dependencies
npm install

# Install PHP dependencies
composer install

# Build assets
npx mix

# For development with watch mode
npx mix watch
```

### Setup

1. Ensure the `etvo-manage` backend is set up in the correct directory
2. Configure PHPMailer settings in `submit.php` for contact form functionality
3. Configure your web server to serve the project
4. The site will pull content dynamically from the CMS

## 📁 Project Structure

```
velvetcare/
├── src/
│   ├── js/          # JavaScript files
│   └── scss/        # SCSS stylesheets
├── assets/          # Compiled assets (generated)
├── partials/        # Page sections
│   ├── hero.php           # Hero section
│   ├── services.php       # Services listing
│   ├── local.php          # Location info
│   ├── quem.php           # About section
│   └── contacto.php       # Contact form
├── index.php        # Homepage
├── blog.php         # Blog listing
├── single.php       # Individual blog post
├── submit.php       # Contact form handler
└── politica-privacidade.php  # Privacy policy
```

## 👤 Author

**Estevão Pereira Rolim** - [@ETVO](https://github.com/ETVO) | [LinkedIn](https://linkedin.com/in/estevao-p-rolim)

---

*Client website built with PHP, Bootstrap, and Laravel Mix. Powered by the custom etvo-manage CMS.*

*README created in collaboration with Claude AI.*
