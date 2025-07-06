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