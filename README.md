composer インストール

```
docker-compose run --rm composer81 composer install
docker-compose run --rm composer72 composer install
```

テスト実行

```
docker-compose run --rm php php ./vendor/bin/phpunit src/test/EventScheduler_Test.php
```

fuelの環境構築

```
docker-compose run --rm fuelcomposer composer install
docker-compose up -d fuel81
docker-compose up -d fuel73
docker exec -it mockery_mysql_1 bash
mysql -u user -ppassword -D db
```

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    full_name VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

fuelのテスト実行

```
docker exec -it mockery_fuel72_1 bash
php oil test --file=fuel/app/tests/service/user_aspectmock.php
```

```
docker exec -it mockery_fuel81_1 bash
php oil test --file=fuel/app/tests/service/user.php
```



```
INSERT INTO users (username, password, email, full_name) VALUES
('testuser1', 'password1', 'testuser1@example.com', 'Test User One'),
('testuser2', 'password2', 'testuser2@example.com', 'Test User Two'),
('testuser3', 'password3', 'testuser3@example.com', 'Test User Three');
```

```
truncate table users;
```
