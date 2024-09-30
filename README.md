## Instalasi
#### Via Git
```bash
git clone https://github.com/Natsuiii/temudok.git
```

### Setup Aplikasi
Jalankan perintah 

```bash
composer install
```
Copy file .env dari .env.example
```bash
cp .env.example .env
```
Generate key
```bash
php artisan key:generate
```
Migrate database
```bash
php artisan migrate
```

Menjalankan aplikasi
```bash
php artisan serve
```