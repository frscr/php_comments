config.php содержит константы для установки соединения с СУБД.
Для создания таблицы tbl_comments откройте в браузере файл install.php, убедившись в создании таблицы удалите его.
Для создание таблицы tbl_comments через консоль запросов в IDE или СУБД, используйте следующий запрос
 create table tbl_comments
(
    id int not null auto_increment,
    guest_name varchar(255) not null,
    date_publication datetime not null,
    comment text not null,
    primary key (id));