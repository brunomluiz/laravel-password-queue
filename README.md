# Laravel Password Queue

<a href="https://github.com/brunomluiz/laravel-password-queue/stargazers"><img alt="GitHub stars" src="https://img.shields.io/github/stars/brunomluiz/laravel-password-queue"></a>
<img alt="Packagist" src="https://img.shields.io/packagist/dt/brunomluiz/laravel-password-queue">
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/60f42cf3f02c442ea1a741892bf80cd7)](https://www.codacy.com/manual/brunoluiz7/laravel-password-queue?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=brunomluiz/laravel-password-queue&amp;utm_campaign=Badge_Grade)
<a href="https://github.com/brunomluiz/laravel-password-queue/blob/master/LICENSE"><img alt="GitHub license" src="https://img.shields.io/github/license/brunomluiz/laravel-password-queue"></a>

Adicione e-mail do esqueci minha senha na fila de Job do **Laravel 5.1**.

## Instalação

via Composer:

```bash
"brunomluiz/laravel-password-queue": "^1.0"
```

ou execute

```bash
composer require brunomluiz/laravel-password-queue
```

Registre o provider em **config/app.php**.

```php
[
    ...
    Brunomluiz\LaravelPasswordQueue\LaravelPasswordQueueServiceProvider::class,
]
```

## Créditos

- [Bruno Martins](https://github.com/brunomluiz) (Developer)
 
## License
 
The MIT License (MIT). Please see [License File](https://github.com/brunomluiz/laravel-password-queue/blob/master/LICENSE) for more information.
