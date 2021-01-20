## CHIKADMIN
<p><b>
CHIKADMIN adalah simpel starter untuk laravel dengan template sb-admin-2 , keuntungan CHIKADMIN adalah kita tidak perlu memulai integrasi,sistem login dari awal.
</b></p>

## Setup
- buka direktori project di terminal anda.

Lalu ketik command dibawah ini
- composer install
- php artisan optimize:clear 
- php artisan key:generate (generate app key)
- php artisan migrate (migrasi database)
- php artisan db:seed --class=UserClass (mengisi data table users)

## Login , Email : admin@gmail.com | Password : password

## Fitur
- Login
- Yajra DataTable Serverside
- Simple basic jquery ajax crud dengan datatable serverside