
## Structure Web Laravel
* `app/Models/` : Representasi dari tabel dalam database dan fungisnya untuk berinteraksi dengan data tersebut, termasuk operasi CRUD, hubungan antar tabel, dan memungkinkan untuk insert, update, dan delete pada tabel database.
    * `Employess.php` : Fungsinya untuk endefinisikan model Eloquent yang berhubungan dengan tabel employees di database. Model ini adalah representasi dari entitas Employee dan berfungsi sebagai jembatan antara tabel database dan logika aplikasi.
    * `Locations.php` : Fungsinya untuk endefinisikan model Eloquent yang berhubungan dengan tabel locations di database. Model ini adalah representasi dari entitas Locations dan berfungsi sebagai jembatan antara tabel database dan logika aplikasi.
    * `User.php` : Model Eloquent yang mewakili entitas User, yang digunakan untuk mengelola data pengguna dalam aplikasi. Model ini memiliki peran penting karena terkait dengan autentikasi dan otorisasi pengguna, serta mengelola informasi pengguna seperti nama, email, dan password.



## Structure Web Filament
* `app/Filament/Resources` : Berisi resource files Filament yang mendefinisikan operasi CRUD untuk data Employees.
    * `app/Filament/Resources/EmployeesResources/Pages/`
        * `CreateEmployees.php` : Untuk menangani halaman pembuatan create data Employees
        * `EditEmployees.php` : Untuk mengatur halaman untuk mengedit data Employees yang sudah ada. Fungsionalitasnya mirip dengan CreateEmployees.php, tetapi disesuaikan untuk mengedit data yang sudah ada.
        * `ListEmployees.php` : Untuk menampilkan daftar data Employees dalam format tabel. Disini kita bisa mengatur kolom yang ditampilkan, serta menambahkan fitur filtering dan sorting.
    * `app\Filament\Resources\LocationsResource`: Berisi resource files Filament yang mendefinisikan operasi CRUD untuk data Locations. 
        * `CreateLocations.php` : Untuk menangani halaman pembuatan create data Locations
        * `EditLocations.php` : Untuk mengatur halaman untuk mengedit data Locations yang sudah ada. Fungsionalitasnya mirip dengan CreateLocations.php, tetapi disesuaikan untuk mengedit data yang sudah ada.
        * `ListLocations.php` : Untuk menampilkan daftar data Locations dalam format tabel. Disini kita bisa mengatur kolom yang ditampilkan, serta menambahkan fitur filtering dan sorting.
    * `app\Filament\Resources\EmployeesResource.php` : Untuk mengelola operasi CRUD yang berkaitan dengan data Employees. Seperti kolom yang akan ditampilkan dalam daftar, form yang digunakan untuk membuat dan mengedit data, serta pengaturan lain yang berkaitan dengan resource.
    * `app\Filament\Resources\LocationsResource.php` : Untuk mengelola operasi CRUD yang berkaitan dengan data Locations. Seperti kolom yang akan ditampilkan dalam daftar, form yang digunakan untuk membuat dan mengedit data, serta pengaturan lain yang berkaitan dengan resource.

 
## Installation
1. Clone Repo
    ```console
    git clone https://github.com/zhilanazmi/TesAlita.git
    ```
    ```console
    cd TesAlita
    ```

2. Run
   ```console
   composer install
   ```
   ```console
   cp .env.example .env 
   ```
   ```console
   php artisan key:generate
   ```
   ```console
   php artisan migrate
   ```
   ```console
   php artisan make:filament-user
   ```

3. Run server
   ```console
   php artisan serve
   ```
