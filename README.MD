# Contactor

## About this project

A Laravel 5 practice project by Martin Grondein.

## Purpose of this project

A really simple open source contact management system built with Laravel 5. Manage your contacts in a simple, custom made system.

---

## Setup Instructions

### Prerequisites

I used [Laravel Homestead](https://github.com/laravel/homestead) for my local development environment - some of the setup files contained within this repository assume Laravel Homestead defaults for username/passwords. (Usually for security reasons, these would not be committed!)

- PHP 7.1+
- Apache / Nginx
- MySQL / MariaDB
- Git

(Note: All the above come installed by default within Laravel Homestead.)

### How to Install

This will download the files to your local machine:

``` bash
cd <to>/<where>/<you>/<store>/<your>/<websites>
git clone git@github.com:<username>/laravel-contact-list.git
cd laravel-contact-list
```

### How to Setup

Assuming your .env file is correctly configured, the below will setup your database tables:

``` php
php artisan migrate
```