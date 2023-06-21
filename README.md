# Wordpress Sample

## 1. Setup

#### 1.1. Config project
Create ```config.php``` file in root folder. It has the same meaning as the environment file.

```php
<?php

define('DB_NAME', 'your_db_name');
define('DB_USER', 'your_username');
define('DB_PASSWORD', 'your_password');
define('DB_HOST', 'your_host');
define('WP_DEBUG', true); // true or false for debugging
```
#### 1.2. Install packages
Go to Sample theme folder ```wp-content/themes/sample``` and run ```yarn install``` or ```npm install```

The Sample theme uses Webpack to compile & minify js & scss files.

#### 1.3. Config webpack
Go to ```wp-content/themes/sample/webpack.config.js``` and update your local domain

```javascript
const localDomain = 'your_local_domain';
```

## 2. Deployment

```
OS: Ubuntu 20.04
PHP: 7.3
MySQL: 8.0
```
