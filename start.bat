@echo off
SETLOCAL

START "laravel php_host" /Min php artisan serve
START "laravel asset_host" /Min npm run dev