<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

## เตรียมการก่อนใช้งาน
1. git clone this project.
2. composer install
3. npm install
4. npm run dev
5. php artisan migrate
6. php artisan migrate --seed

## หน้าจอการใช้งาน
![admin](https://github.com/ggafiled/Fist_Mile_System_-ERP-/blob/master/public/image/monitor.PNG)
![user](https://github.com/ggafiled/Fist_Mile_System_-ERP-/blob/master/public/image/monitor-user.PNG)

### Role & Permission  (<img src="https://laratrust.santigarcor.me/logo.svg" height="48px" width="48px"> Laratrust)
ในขั้นต้นของระบบ ได้แยกสิทธิ์การใช้งานออกเป็น 4 ระดับตามนี้
- Superadministrator 
สามารถเข้าถึงเมนูต่างๆได้ตามสิทธิ์การใช้งานดังนี้

ชื่อสิทธิ์|สามารถเข้าถึงได้แบบไหน
------|-------
users | c,r,u,d
manage-users | c,r,u,d
payments | c,r,u,d
profile | r,u
password | c,r,u
building | c,r,u,d
constarution | c,r,u,d
status-operator | c,r,u,d
technician-opertor | c,r,u,d

- Administrator
สามารถเข้าถึงเมนูต่างๆได้ตามสิทธิ์การใช้งานดังนี้

ชื่อสิทธิ์|สามารถเข้าถึงได้แบบไหน
------|-------
users | c,r,u,d
manage-users | c,r
payments | c,r,u
profile | r,u
password | c,r,u
building | c,r,u
constarution | c,r,u,d
status-operator | c,r,u,d
technician-opertor | c,r,u,d

- User
สามารถเข้าถึงเมนูต่างๆได้ตามสิทธิ์การใช้งานดังนี้

ชื่อสิทธิ์|สามารถเข้าถึงได้แบบไหน
------|-------
users | r,u
profile | r,u
password | u
building | c,r,u
constarution | c,r,u
status-operator | c,r,u
technician-opertor | c,r,u

- Guest
สามารถเข้าถึงเมนูต่างๆได้ตามสิทธิ์การใช้งานดังนี้

ชื่อสิทธิ์|สามารถเข้าถึงได้แบบไหน
------|-------
users | r,u
profile | r,u
password | u
building | r


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
