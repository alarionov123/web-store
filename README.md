## ОБЩЕЕ ОПИСАНИЕ ПРОЕКТА

В данном проекте реализован простой интернет магазин с возможностью управления товарами (CRUD) для зарегестрированных пользователей.

Проект написан с использованием MVC паттерна. Стек:

- PHP 8.0
- MySQL
- Smarty
- LESS
- JS

Демонстрация - http://exikane133.temp.swtest.ru/

## КЛЮЧЕВЫЕ ФАЙЛЫ ПРОЕКТА

- Маршрутизация реализована в файле: `app\common\routes.php` с помощью библиотеки fast-route

- Разработанные контроллеры находятся в папке: `app\controllers`
- Классы модели: `app\src`
- Шаблоны: `templates\`
- Стили: `styles\`
- Конфиг: `config.php`

## Деплой

### Требуемые компоненты

- PHP 8.0, Composer, MySQL, Smarty
### Установка

1. Склонируйте проект в директорию с сервером.

2. Затем, открыв из папки проекта консоль, введите команду для установки пакетов: `composer install`

3. Для создания базы данных выполните следующую команду в консоли:
   `mysql -u username -p < database.sql`. Дамп database.sql лежит в корне проекта и содержит некоторое число демо данных.
4. Настройте подключение к базе данных в файле `config.php`, где в элементе массива `db` укажите данные к подключению.
