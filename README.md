# 🕺 Back in the 90s
## 🎬 What is this project?

**Back in the 90s** is a modern blog dedicated to the '90s, built entirely with the **Laravel** framework. Inspired by the aesthetics and atmosphere of BoJack Horseman, this project captures the essence of a decade that defined a generation. A complete blog system with user management, articles, categorization, and a powerful content review system.

I created this blog to explore Laravel's advanced features and build a platform where nostalgia meets modern technology. It's a complete content management system with differentiated user roles, dedicated dashboards, and a professional publishing workflow. 🌈✨

## 📝 Blog Features

- **👥 Advanced User System**: User registration and authentication with three distinct roles: Admin, Revisor, and Writer, each with specific permissions and dashboards.
- **📰 Article Management**: Creation, editing, and deletion of complete articles with title, subtitle, body text, and cover image.
- **🏷️ Categorization System**: Complete management of categories and tags with many-to-many relationships for flexible content classification.
- **🔍 Advanced Search**: Full-text search engine that allows searching articles by title, subtitle, and category.
- **✅ Approval Workflow**: Fact-checking system with dedicated dashboard for reviewers to control content quality before publication.
- **📊 Custom Dashboards**: Administrative interfaces specific to each user role with targeted functionalities.
- **🎯 "Work with Us" System**: Application form to allow users to request access to the editorial team.
- **📖 Advanced Article Details**: URLs with slugs, automatic reading time calculation, and optimized content display.

## 🛠️ Tech Stack

- 💻 **Framework**: Laravel 10.x
- 🗃️ **Database**: MySQL with Eloquent ORM
- 🎨 **Frontend**: Blade Templates + Bootstrap
- 🔐 **Authentication**: Laravel Fortify
- 📧 **Email**: Laravel Mail with SMTP driver
- 🖼️ **Storage**: Laravel Filesystem for image management
- 🔍 **Search**: Laravel Scout (optional)
- 🧪 **Testing**: PHPUnit for automated testing

## 🚀 How to Deploy

### Prerequisites
- PHP 8.1 or higher
- Composer
- MySQL 5.7+
- Node.js and NPM (for asset compilation)

### Local Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/back-in-the-90s.git
   cd back-in-the-90s
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database configuration**
   - Edit the `.env` file with your database credentials
   ```bash
   php artisan migrate --seed
   ```

5. **Compile assets**
   ```bash
   npm run dev
   ```

6. **Start the server**
   ```bash
   php artisan serve
   ```
