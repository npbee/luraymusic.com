![logo](http://luraymusic.com/assets/images/logo.svg)

#LURAYMUSIC.com

__Enivronment__:

* PHP 5.5.2
* Laravel 4.0
* SASS
* jQuery 1.8.3
* MAMP

## Development

- Install Dependencies with Composer

```bash
$ php composer.phar install
```

- Setup local database

```php
// In app/config/local/database.php
'mysql' => array(
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => '...',
    'username'  => 'root',
    'password'  => 'root',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
),
```

- Run the migrations

```bash
$ php artisan migrate
$ php artisan migrate --package=cartalyst/sentry
```

- Seed the database

```bash
$ php artisan db:seed
```


** TODO **

- Clean up javascript
    - Do the markdown preview better
- Style cleanup
- Setup staging database

** CHANGES **

- Make sure to set the environment in .htaccess

```bash
SetEnv LARAVEL_ENV staging
```

- Set up staging database
- Run migrations
- Update previous quotes with new album_id
- Add album
- Clean up JS
    - vendor bundle
    - per page bundle with codekit prepends

**Local Alias:**  luray



__Build:__

* Commit to master
* git push origin master
* git push origin github
* sshluray
* cd staging.v3
* git pull origin master
* cd public_html
* git pull origin masterc
