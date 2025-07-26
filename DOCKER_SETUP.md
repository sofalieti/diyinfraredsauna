# Настройка Docker для Laravel проекта

## Структура проекта
```
├── docker-compose.yml
├── Dockerfile
├── docker/
│   ├── nginx/
│   │   └── conf.d/
│   │       └── app.conf
│   ├── php/
│   │   └── local.ini
│   └── mysql/
│       └── my.cnf
└── DOCKER_SETUP.md
```

## Сервисы
- **app** - PHP 7.4.3 FPM контейнер с Laravel
- **webserver** - Nginx веб-сервер
- **db** - MySQL 8.0 база данных
- **phpmyadmin** - Веб-интерфейс для управления MySQL

## Порты
- **8000** - Основное приложение (http://localhost:8000)
- **3306** - MySQL база данных
- **8080** - phpMyAdmin (http://localhost:8080)

## Настройка

### 1. Создайте файл .env
Скопируйте содержимое из .env.example и настройте:
```bash
cp .env.example .env
```

### 2. Настройте базу данных в .env
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=secret
```

### 3. Запустите контейнеры
```bash
docker-compose up -d
```

### 4. Установите зависимости
```bash
docker-compose exec app composer install
```

### 5. Сгенерируйте ключ приложения
```bash
docker-compose exec app php artisan key:generate
```

### 6. Запустите миграции
```bash
docker-compose exec app php artisan migrate
```

## Команды для работы

### Запуск контейнеров
```bash
docker-compose up -d
```

### Остановка контейнеров
```bash
docker-compose down
```

### Просмотр логов
```bash
docker-compose logs -f
```

### Выполнение команд в контейнере
```bash
docker-compose exec app php artisan [команда]
docker-compose exec app composer [команда]
```

### Доступ к базе данных
- **Хост:** localhost
- **Порт:** 3306
- **База данных:** laravel
- **Пользователь:** laravel
- **Пароль:** secret

### phpMyAdmin
- **URL:** http://localhost:8080
- **Сервер:** db
- **Пользователь:** laravel
- **Пароль:** secret 