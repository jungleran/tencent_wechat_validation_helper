# Drupal Tencent WeChat module server validataion helper

## Quick start

For example, your Drupal root is `/var/www/html`

### 1. Clone the repo to `tencent/wechat`

```
$ cd /var/www/html && git clone https://github.com/jungleran/tencent_wechat_validation_helper.git tencent/wechat
```

### 2. Install dependencies

```
$ cd /var/www/html/tencent/wechat
$ composer install -vvv
```
### 3. Make log file writable

```
$ sudo chmod a+w /var/www/html/tencent/wechat/tencent_wechat.log
```

### 4. Temporarily remove `.htaccess`

```
$ mv /var/www/html/.htaccess /var/www/html/.htaccess.bak
```

### 5. Add config.php

Copy the `example.config.php` to `config.php`.

```
$ cp /var/www/html/tencent/wechat/example.config.php /var/www/html/tencent/wechat/config.php
```

Set App ID, Token etc, in the `config.php` file.

### 6. Do validate

Visit [https://mp.weixin.qq.com/](https://mp.weixin.qq.com/)

### 7. Restore `.htaccess`

```
$ mv /var/www/html/.htaccess.bak /var/www/html/.htaccess
```
