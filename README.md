# ERP and Accounting System

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 10">
  <img src="https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.1+">
  <img src="https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="License">
</p>

## 📋 About

A comprehensive **Enterprise Resource Planning (ERP)** and **Accounting System** built with Laravel 10. This powerful system provides complete business management solutions including inventory management, sales, purchases, financial accounting, and comprehensive reporting capabilities. Designed for small to medium-sized businesses seeking an integrated solution to manage their operations efficiently.

## ✨ Key Features

### 📦 Inventory Management
- **Item Management**: Complete product catalog with categories, units of measure (UOM), and barcode generation
- **Multi-Store Support**: Manage multiple warehouses/stores with real-time inventory tracking
- **Stock Transfers**: Transfer inventory between stores with full audit trail
- **Inventory Valuation**: Real-time stock valuation and balance reports
- **Production Management**: Production orders, lines, exchange, and receiving
- **Batch/Lot Tracking**: Track items by batch numbers with expiry dates

### 💰 Sales Management
- **Sales Invoices**: Create and manage sales invoices with multiple payment methods
- **Sales Returns**: Process sales returns with automatic inventory adjustments
- **Customer Management**: Comprehensive customer database with account statements
- **Pricing Management**: Flexible pricing with support for different customer types
- **Sales Reports**: Detailed sales analytics and performance reports
- **Invoice Printing**: Professional invoice templates (A4 and thermal printer support)

### 🛒 Purchase Management
- **Purchase Orders**: Create and track purchase orders from suppliers
- **Purchase Returns**: Process general purchase returns
- **Supplier Management**: Complete supplier database with categories
- **Purchase Analytics**: Track purchase costs and supplier performance
- **Approval Workflow**: Multi-level approval system for purchases

### 💳 Financial Accounting
- **Chart of Accounts**: Flexible account structure with multiple account types
- **Treasury Management**: Multiple cash registers/treasuries with shift management
- **Collect Transactions**: Record customer payments and receipts
- **Exchange Transactions**: Record supplier payments and disbursements
- **Account Statements**: Detailed financial reports for customers, suppliers, and delegates
- **Financial Reports**: Comprehensive financial reporting including mirror accounts

### 👥 User & Access Management
- **Multi-User Support**: Create and manage multiple admin accounts
- **Role-Based Permissions**: Granular permission system with roles
- **Shift Management**: Track user shifts with opening/closing balances
- **Treasury Assignment**: Assign specific treasuries to users
- **Store Assignment**: Assign specific stores to users
- **Audit Trail**: Complete activity logging for accountability

### 📊 Reporting & Analytics
- **Financial Reports**: Balance sheets, profit/loss, and account statements
- **Inventory Reports**: Stock levels, movements, and valuation reports
- **Sales Analytics**: Sales by item, customer, delegate, and time period
- **Purchase Analytics**: Purchase analysis by supplier and item
- **Custom Reports**: Flexible reporting with date range filters

### 🎯 Additional Features
- **Delegate Management**: Sales representative tracking and commission management
- **Services Management**: Service-based invoicing and orders
- **Material Types**: Categorize sales materials for better organization
- **Admin Panel Settings**: Customizable system settings and configurations
- **RTL Support**: Full Arabic language support with RTL interface
- **Responsive Design**: Mobile-friendly interface using AdminLTE
- **Barcode Support**: Generate and print barcodes for inventory items

## 🚀 Technology Stack

- **Framework**: Laravel 10.x
- **PHP**: 8.1 or higher
- **Database**: MySQL 8.0+
- **Frontend**: AdminLTE 3.x (Bootstrap 4)
- **Icons**: Font Awesome, Ionicons
- **Barcode**: Milon Barcode Generator
- **Authentication**: Laravel Sanctum

## 📥 Installation

### Prerequisites

- PHP >= 8.1
- Composer
- MySQL >= 8.0
- Node.js & NPM (for asset compilation)

### Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/basharagb/erp-and-accounting-system-.git
   cd erp-and-accounting-system-
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install && npm run build
   ```

3. **Environment configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure database**
   
   Edit `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=erp
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

5. **Import database**
   ```bash
   mysql -u root -p erp < laravel9_sales.sql
   ```

6. **Clear caches**
   ```bash
   php artisan optimize:clear
   php artisan cache:clear
   composer dump-autoload
   ```

7. **Start the development server**
   ```bash
   php artisan serve
   ```

8. **Access the application**
   
   Open your browser and navigate to: `http://127.0.0.1:8000/admin`

## 🔐 Default Credentials

```
Username: admin
Password: 123456
```

**⚠️ Important**: Change the default password immediately after first login!

## 📚 Documentation

### Project Structure

```
erp-and-accounting-system/
├── app/
│   ├── Http/Controllers/Admin/  # Admin controllers
│   ├── Models/                   # Eloquent models
│   └── Helpers/                  # Helper functions
├── database/
│   ├── migrations/               # Database migrations
│   └── seeders/                  # Database seeders
├── public/
│   ├── assets/                   # Frontend assets
│   └── admin-assets/             # Admin panel assets
├── resources/
│   └── views/admin/              # Blade templates
├── routes/
│   ├── admin.php                 # Admin routes
│   └── web.php                   # Web routes
└── storage/                      # File storage
```

### Key Modules

1. **Dashboard**: Overview of business metrics and quick actions
2. **Inventory**: Product management, categories, and stock control
3. **Sales**: Invoice creation, customer management, and sales reports
4. **Purchases**: Purchase orders, supplier management, and returns
5. **Accounting**: Financial transactions, treasuries, and reports
6. **Users**: Admin accounts, permissions, and shift management
7. **Settings**: System configuration and preferences

## 🔄 Recent Changes & Improvements

### Version 2.0 (Laravel 10 Migration)

- ✅ **Upgraded to Laravel 10**: Migrated from Laravel 9 to Laravel 10.x
- ✅ **PHP 8.1+ Compatibility**: Updated codebase for PHP 8.1+ features
- ✅ **Fixed Route Issues**: Resolved `/admin` route 404 error by renaming conflicting public directory
- ✅ **Route Optimization**: Fixed duplicate route names and added route caching support
- ✅ **Constant Definition**: Wrapped constants in conditional checks to prevent redefinition errors
- ✅ **Middleware Updates**: Updated `$routeMiddleware` to `$middlewareAliases` for Laravel 10
- ✅ **Cache Management**: Implemented comprehensive cache clearing and optimization
- ✅ **Asset Organization**: Reorganized public assets for better structure
- ✅ **Error Handling**: Improved error handling and validation
- ✅ **Code Quality**: Applied PSR-12 coding standards
- ✅ **Performance**: Optimized database queries and caching strategies

### Bug Fixes

- Fixed authentication middleware redirect issues
- Resolved asset loading conflicts
- Fixed barcode generation compatibility
- Corrected RTL layout rendering
- Fixed date localization issues

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the LICENSE file for details.

## 👨‍💻 Developer

**Eng. Bashar Zabadani**
- 📧 Email: basharagb@gmail.com
- 🐙 GitHub: [https://github.com/basharagb](https://github.com/basharagb)
- 💼 LinkedIn: [Connect with me](https://linkedin.com/in/basharagb)

## 🙏 Acknowledgments

- Original concept and foundation by Atef Soft team
- Built with [Laravel](https://laravel.com)
- UI powered by [AdminLTE](https://adminlte.io)
- Icons by [Font Awesome](https://fontawesome.com)

## 📞 Support

For support, email basharagb@gmail.com or open an issue in the GitHub repository.

## ⭐ Star History

If you find this project useful, please consider giving it a star! ⭐

---

**Copyright © 2025 Eng. Bashar Zabadani. All rights reserved.**

Made with ❤️ using Laravel
