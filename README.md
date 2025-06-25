# UJIAN SEKOLAH — Sistem Login CBT Web

> Sistem evaluasi login sederhana | by [ctflabs-id](https://github.com/ctflabs-id)

---

## 🎯 Tentang EnCryptID

**UJIAN SEKOLAH** adalah sistem otentikasi berbasis web yang dirancang untuk kebutuhan edukasi dan evaluasi login berbasis role-level. Sistem ini menggunakan kombinasi otentikasi hash dan penyimpanan data sederhana, serta tampilan antarmuka modern yang mendukung berbagai perangkat.

---

## ✨ Fitur Utama

- Login berbasis username dan password SHA1-hashed
- Role multi-level 
- Antarmuka modern dan simple
- Keamanan terhadap SQL Injection, SSTI, dan RCE

---

## 🛠️ Instalasi Lokal

### 🔗 Prasyarat

- PHP ≥ 7.2
- MySQL atau MariaDB
- Apache/Nginx

### 📦 Langkah Instalasi

```bash
git clone https://github.com/ctflabs-id/UJIAN-SEKOLAH-CTF.git
cd UJIAN-SEKOLAH-CTF
# Import database
# → lihat file `database.sql` untuk struktur awal
```

Konfigurasikan db.php agar sesuai dengan pengaturan MySQL lokalmu:
```php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'ujian_ctf_db';
```

🌐 Cara Mengakses

Buka browser dan arahkan ke:
```
http://localhost/UJIAN-SEKOLAH-CTF/
```

🔍 Petunjuk Tambahan

💡 Cobalah membaca kode sumbernya, kadang kamu akan menemukan sesuatu yang tampaknya... sengaja tidak disembunyikan.
💡 Salah satu file menyimpan sesuatu yang terlihat seperti hash acak. Tapi ingat, semua yang terenkripsi bisa saja... dibuka kembali.

📁 Struktur Direktori
```bash
/UJIAN-SEKOLAH-CTF/
├── index.php         # Halaman login
├── dashboard.php     # Halaman dashboard setelah login
├── db.php            # Konfigurasi database
├── auth.php          # Proteksi login
├── logout.php        # Keluar dari sesi
├── assets/
│   └── style.css     # Gaya modern
└── database.sql      # Struktur awal DB
```
🤝 Kontribusi

Pull request dan saran sangat terbuka di:
github.com/ctflabs-id/UJIAN-SEKOLAH-CTF

🧠 Maintained by:
```
GitHub: @ctflabs-id
Website: ctflabsid.my.id
```

“Sistem yang terlihat aman... kadang justru terinstall dengan celah yg sama dengan default nya.”
