# 📘 Laravel Filament Practice Project

This is a Laravel application built to practice and explore the **Filament admin panel** ecosystem. It includes two distinct **panels**, **multi-tenancy**, **role-based access**, and **custom widgets** for visualizing employee data.

---

## 🚀 Features

- 🧭 **Admin Panel** – Centralized control panel for managing users, tenants, and system-wide settings.
- 🧑‍💼 **App Panel** – Tenant-specific panel focused on employee management and business operations.
- 🌐 **Multi-Tenancy Support** – Isolates data per tenant using Filament’s multi-tenancy tools.
- 👥 **Employee Management** – Employees linked with:
    - 🗺️ Country
    - 🏙️ State
    - 🏘️ City
    - 🏢 Department
- 📊 **Custom Widgets**:
    - 📈 `EmployeeChart`: Visual representation of employee statistics.
    - 🕵️‍♂️ `LatestEmployees`: List of most recently added employees.
- 🔐 **Authentication & Roles** – Secure login system with user roles.

---

## 💡 What is Filament?

**[Filament](https://filamentphp.com/)** is a modern admin panel framework for Laravel. It makes building admin interfaces faster and more enjoyable.

### ✨ Key Features of Filament
- ⚙️ **Admin Panels** – Build feature-rich admin panels with minimal effort.
- 📋 **Resources** – Create and manage CRUD interfaces.
- 📦 **Widgets** – Display analytics and summaries on custom dashboards.
- 🧾 **Forms & Tables** – Clean, powerful UI components for managing data.
- 🧩 **Multi-Tenancy** – Scoped access per tenant with built-in support.
- 🧑‍🎨 **Customizable** – Easily theme and extend panels to fit your app.

---

## 🛠️ Installation Guide

Follow these steps to get the project running locally:

### 1. 📥 Clone the Repository

```bash
git clone <repository-url>
cd <project-directory>
```


### 2. 📦 Install Dependencies

```bash
composer install
npm install
```

### 3. ⚙️ Set Up Environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4. 🧬 Run Migrations & Seeders

```bash
php artisan migrate --seed
```

### 5. ▶️ Start the Development Server

```bash
php artisan serve
```

---

## 🧱 Project Structure

| Folder/File               | Description                            |
| ------------------------- | -------------------------------------- |
| `app/Models`              | Eloquent models (User, Employee, etc.) |
| `app/Filament/AdminPanel` | Resources and pages for Admin Panel    |
| `app/Filament/AppPanel`   | Resources and pages for Tenant Panel   |
| `app/Filament/Widgets`    | Custom dashboard widgets               |

---

## 🧑‍💻 Filament Usage Examples

### 🧰 Install Filament

```bash
composer require filament/filament:"^3.3" -W
php artisan filament:install --panels
```

### 🛡️ Create a New Panel

```bash
php artisan make:filament-panel
```

### 🧾 Create a Resource (e.g., Employee CRUD)

```bash
php artisan make:filament-resource Employee
```

### 📊 Create a Custom Widget

```bash
php artisan make:filament-widget EmployeeChart
```

---

## 🏢 Multi-Tenancy Notes

This project uses **Filament’s built-in multi-tenancy**. Tenant data is scoped using Eloquent relationships, likely via a `Tenant` or `Company` model.

You can define tenant-specific queries using:

```php
Employee::whereBelongsTo(auth()->user()->tenant)->get();
```

---

## 🔐 Roles & Access

* Uses Laravel’s authentication system.
* Role-based access for Admin vs. Tenant users.

---

🔗 For more details, visit the official Filament docs at https://filamentphp.com/docs

---

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

---

## 🤝 Contributing

Pull requests are welcome! For major changes, please open an issue first to discuss what you’d like to change.

---

## 👨‍💻 Author

Built with ❤️ by [Ayman Elh](https://www.github.com/AymanElh)

