# MBTI Insight - Laravel Personality Test Application

Aplikasi web untuk tes kepribadian Myers-Briggs Type Indicator (MBTI) yang dibangun dengan Laravel, menampilkan implementasi lengkap MVC, Migration, Authentication, CRUD operations, dan Responsive Web Design.

## 🚀 Fitur Utama

### ✅ Implementasi MVC (Model-View-Controller)
- **Models**: MbtiTest, MbtiQuestion, MbtiResult, User
- **Views**: Blade templates dengan responsive design
- **Controllers**: MbtiController dengan resource methods

### ✅ Database Migration
- Migration untuk tabel users, mbti_tests, mbti_questions, mbti_results
- Seeder untuk data pertanyaan dan hasil MBTI
- Relasi database yang terstruktur

### ✅ Authentication System
- Laravel Breeze untuk authentication
- Login, Register, Password Reset
- Protected routes untuk fitur user

### ✅ CRUD Operations
- **Create**: Membuat tes MBTI baru
- **Read**: Melihat hasil tes dan riwayat
- **Update**: Mengedit jawaban tes
- **Delete**: Menghapus hasil tes

### ✅ Responsive Web Design
- Framework CSS: Tailwind CSS
- Mobile-first design approach
- Interactive UI dengan smooth transitions
- Progressive enhancement

## 🛠️ Teknologi yang Digunakan

- **Backend**: Laravel 10.x
- **Frontend**: Blade Templates + Tailwind CSS
- **Database**: SQLite (development)
- **Authentication**: Laravel Breeze
- **Version Control**: Git

## 📋 Persyaratan Sistem

- PHP >= 8.1
- Composer
- Node.js & NPM
- SQLite extension

## 🔧 Instalasi

### 1. Clone Repository
```bash
git clone <repository-url>
cd mbti-insight-laravel
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 3. Environment Setup
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Database Setup
```bash
# Create SQLite database
touch database/database.sqlite

# Run migrations and seeders
php artisan migrate --seed
```

### 5. Build Assets
```bash
# Build frontend assets
npm run build
```

### 6. Start Development Server
```bash
php artisan serve
```

Aplikasi akan tersedia di `http://localhost:8000`

## 📁 Struktur Proyek

```
mbti-insight-laravel/
├── app/
│   ├── Http/Controllers/
│   │   └── MbtiController.php
│   └── Models/
│       ├── MbtiTest.php
│       ├── MbtiQuestion.php
│       ├── MbtiResult.php
│       └── User.php
├── database/
│   ├── migrations/
│   │   ├── create_mbti_tests_table.php
│   │   ├── create_mbti_questions_table.php
│   │   └── create_mbti_results_table.php
│   └── seeders/
│       └── MbtiDataSeeder.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   ├── app.blade.php
│       │   └── navigation.blade.php
│       └── mbti/
│           ├── index.blade.php
│           ├── quiz.blade.php
│           ├── result.blade.php
│           └── types.blade.php
└── routes/
    └── web.php
```

## 🎯 Fitur Aplikasi

### 1. Halaman Utama
- Hero section dengan call-to-action
- Feature highlights
- Statistics section
- Responsive design

### 2. Tes MBTI
- 20 pertanyaan komprehensif
- Progress bar interaktif
- Auto-advance setelah menjawab
- Validasi form

### 3. Hasil Tes
- Visualisasi skor kepribadian
- Deskripsi tipe kepribadian
- Kekuatan dan area pengembangan
- Saran karir
- Tips hubungan

### 4. Tipe Kepribadian
- 16 tipe MBTI lengkap
- Kategorisasi: Analysts, Diplomats, Sentinels, Explorers
- Detail setiap tipe kepribadian

### 5. Riwayat Tes (User Login)
- Menyimpan semua hasil tes
- Pagination untuk navigasi
- Edit dan hapus hasil tes

## 🔐 Authentication Features

- **Guest Access**: Dapat mengikuti tes tanpa login
- **User Registration**: Pendaftaran akun baru
- **User Login**: Masuk ke akun existing
- **Password Reset**: Reset password via email
- **Protected Routes**: Riwayat tes hanya untuk user login

## 📱 Responsive Design

### Mobile (< 768px)
- Single column layout
- Touch-friendly buttons
- Collapsible navigation
- Optimized typography

### Tablet (768px - 1024px)
- Two column grid
- Balanced spacing
- Adaptive navigation

### Desktop (> 1024px)
- Multi-column layouts
- Full navigation menu
- Enhanced interactions

## 🎨 UI/UX Features

- **Gradient Backgrounds**: Purple to blue gradients
- **Glass Morphism**: Backdrop blur effects
- **Smooth Animations**: Hover states and transitions
- **Interactive Elements**: Progress bars, radio buttons
- **Color Coding**: Different colors for personality dimensions
- **Typography**: Clear hierarchy and readability

## 🗃️ Database Schema

### mbti_tests
- id, user_id, session_id, answers (JSON)
- result_type, scores untuk setiap dimensi
- timestamps

### mbti_questions
- id, question, dimension, option_a, option_b
- type_a, type_b, order, is_active

### mbti_results
- id, type, name, description
- strengths, weaknesses, career_suggestions
- relationships, color

## 🚦 Routes

```php
// Public routes
GET  /                    # Homepage
GET  /mbti/create         # Quiz page
POST /mbti                # Submit quiz
GET  /mbti/{id}           # View result
GET  /mbti-types          # All MBTI types
GET  /mbti-type/{type}    # Specific type detail

// Protected routes (auth required)
GET  /history             # User test history
PUT  /mbti/{id}           # Update test
DELETE /mbti/{id}         # Delete test
```

## 🧪 Testing

Aplikasi telah diuji untuk:
- ✅ Responsive design di berbagai ukuran layar
- ✅ Fungsionalitas quiz dan navigasi
- ✅ Authentication flow
- ✅ CRUD operations
- ✅ Database relationships

## 📝 Commit History

```bash
git log --oneline
```

Semua perubahan telah di-commit dengan pesan yang deskriptif sesuai dengan tahapan pengembangan.

## 🤝 Kontribusi

Proyek ini dibuat untuk memenuhi tugas pengembangan web dengan Laravel. Implementasi mencakup semua requirement yang diminta:

1. ✅ **MVC Pattern**: Model, View, Controller terpisah dengan jelas
2. ✅ **Migration**: Database schema dengan migration files
3. ✅ **Authentication**: Laravel Breeze implementation
4. ✅ **CRUD Operations**: Create, Read, Update, Delete functionality
5. ✅ **Responsive Design**: Tailwind CSS framework
6. ✅ **Git Integration**: Version control dengan commit history

## 📄 Lisensi

Proyek ini dibuat untuk keperluan edukasi dan pembelajaran Laravel framework.

---

**Dibuat dengan ❤️ menggunakan Laravel & Tailwind CSS**

