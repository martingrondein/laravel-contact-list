# Contactor

by Martin Grondein

A really simple open source contact management system built with Laravel. Manage your contacts in a simple, custom made system.

---

## Setup Instructions

### Prerequisites

I used [Laravel Homestead](https://github.com/laravel/homestead) for my development environment - the setup files contained within this repository assume Laravel Homestead defaults for username/passwords. (Usually, for security reasons these would not be committed!)

- PHP 7.1+
- Apache / Nginx
- Git
- MySQL / MariaDB

All the above are contained within Laravel Homestead.

### How to Install

``` bash
cd <to>/<where>/<you>/<store>/<your>/<websites>
git clone git@github.com:<username>/laravel-contact-list.git
cd laravel-contact-list
```

### How to Setup

``` php
php artisan make:migration
```