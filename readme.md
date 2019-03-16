## CUCIPM

基于Laravel5.6+Laravel-admin

#### 环境

+ PHP >= 7.1.3
+ PHP OpenSSL 扩展
+ PHP PDO 扩展
+ PHP Mbstring 扩展
+ PHP Tokenizer 扩展
+ PHP XML 扩展
+ PHP Ctype 扩展
+ PHP JSON 扩展

#### 部署

+ composer install
+ php artisan migrate
+ php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"
+ php artisan admin:install
+ php artisan key:generate

#### 配置

.env
+ 数据库相关
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

+ 邮件相关
MAIL_DRIVER=smtp
MAIL_HOST=smtp.qq.com
MAIL_PORT=25
MAIL_USERNAME=email@qq.com
MAIL_PASSWORD=****
MAIL_ENCRYPTION=tls

#### 相关文档
https://laravelacademy.org/laravel-docs-5_6
http://laravel-admin.org/docs/zh


