@echo off
SETLOCAL

START "laravel php_host" /Min php artisan serve
START "laravel asset_host" /Min npm run dev

:start_laravel
CALL :compile_php
CALL :compile_assets
EXIT \B 0

:start_doceditor
cd doceditor
npm run dev
cd ..
EXIT \B 0

:compile_php
START "laravel php_host" /Min php artisan serve
EXIT \B 0

:compile_assets
START "laravel asset_host" /Min npm run dev
EXIT \B 0