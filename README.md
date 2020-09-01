<img src="https://raw.githubusercontent.com/KevinYobeth/Laravel-LocalhostFileManager/master/public/img/darkLogo.svg" height=100>  

# Localhost File Manager (LFM)
LFM Is a localhost file manager that I build to manage file on my localhost server. The goals is to easily download or delete files from my localhost server across devices.

## Installation
Assuming you already have [Laravel](https://laravel.com/) and [XAMPP](https://www.apachefriends.org/) for hosting the server, just clone this repository and:  
- Run XAMPP and turn Apache and MySQL services on

- Changing Directory  
  ```
  cd Laravel-LocalhostFileManager
  ```  
  
- Migrating Required Database  
  ```
  php artisan migrate
  ```
  
- Running Application  
  ```
  php artisan serve
  ```
## Preview
This is the preview of my current project, it is not 100% done. At this time, the only thing done is the Landing Page menu. All the backend code is finished.
### Landing Page UI - Done
<img src="https://raw.githubusercontent.com/KevinYobeth/Laravel-LocalhostFileManager/master/public/img/screenshots/home.jpg">  

### Storage Page - Design
<img src="https://raw.githubusercontent.com/KevinYobeth/Laravel-LocalhostFileManager/master/public/img/screenshots/dStorage.png">

### Detail Page - Design
<img src="https://raw.githubusercontent.com/KevinYobeth/Laravel-LocalhostFileManager/master/public/img/screenshots/dDetail.png">

## Resources
Localhost File Manager is built using:
- [Laravel](https://laravel.com/) as backend
- Blade from Laravel as frontend
- MySQL as databaes
- [XAMPP](https://www.apachefriends.org/) as server
