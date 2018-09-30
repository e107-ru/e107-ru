<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Russian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2018/01/02 01:14:00
|        $Author: net1313 $ 
+---------------------------------------------------------------+
*/
setlocale(LC_ALL,  'ru_RU.UTF-8', 'ru_RU.utf8', 'ru');
define("CORE_LC", "ru");
define("CORE_LC2", "Ru");
setlocale(LC_TIME, "ru");
//define("CHARSET", "utf-8");  // for a true multi-language site. :)
define("CORE_LAN1", "Ошибка: тема отсутствует.\\n\\nЗамените используемую тему в ваших настройках (Админцентре) или загрузите на сервер файлы текущей темы.");
define("CORE_LAN4", "Пожалуйста, удалите install.php с вашего сервера");
define("CORE_LAN5", "если вы этого не сделаете, существует потенциальный риск безопасности для вашего веб-сайта");
define("CORE_LAN6", "На сайте активирована защита от флуда. В случaе продолжения зaпросa стрaниц вы будете внесены в список запрещенных пользователей.");
define("CORE_LAN7", "Производится попытка восстановить настройки ядра из автоматической резервной копии.");
define("CORE_LAN8", "Ошибка настроек ядра");
define("CORE_LAN9", "Ядро не может быть восстановлено из резервного архива. Выполнение прервано.");
define("CORE_LAN10", "Обнаружен повреждённый файл cookie - выполнен выход из системы.");
define("CORE_LAN11", "Отдача: ");
define("CORE_LAN12", "сек., (");
define("CORE_LAN13", " % заняли запросы)");
define("CORE_LAN14", "%2.3f cpu в сек (%2.2f%% нагрузка, %2.3f при запуске). Генерация страницы:");                
define("CORE_LAN15", " Запросов к БД:");
define("CORE_LAN16", "Потребление памяти:");

define("CORE_LAN17", "[ изображение отключено ]");
define("CORE_LAN18", "Изображение:");

define("CORE_LAN_B", "Б");
define("CORE_LAN_KB", "КБ");
define("CORE_LAN_MB", "МБ");
define("CORE_LAN_GB", "ГБ");
define("CORE_LAN_TB", "ТБ");

define("EMESSLAN_TITLE_INFO", "Сообщение системы");
define("EMESSLAN_TITLE_ERROR", "Ошибка");
define("EMESSLAN_TITLE_SUCCESS", "Успешно");
define("EMESSLAN_TITLE_WARNING", "Предупреждение");
define("EMESSLAN_TITLE_DEBUG", "Отладка системы");

define("LAN_NO_PERMISSIONS", "У вас недостаточно прав для просмотра страницы");
define("LAN_EDIT", "Редактировать");
define("LAN_DELETE", "Удалить");
define("LAN_DEFAULT", "По умолчанию");
define("LAN_MORE", "Подробнее...");
define("LAN_LESS", "..Меньше");
define("LAN_READ_MORE", "Подробнее...");
define("LAN_GOPAGE", "Перейти на страницу");
define("LAN_GOTOPAGEX", "Перейти на страницу [x]");
define("LAN_GO", "Применить");
define("LAN_SUBMIT", "Отправить");
define("LAN_NONE", "Нет");
define("LAN_WARNING", "Предупреждение!");
define("LAN_ERROR", "Ошибка");
define("LAN_ANONYMOUS", "Анонимный");
define("LAN_EMAIL_SUBS", "-email-");
define("LAN_ACTIVE", "Вкл");
define("LAN_YES", "Да");
define("LAN_NO", "Нет");
define("LAN_OK", "OK");
define("LAN_ACTIONS", "Действия");
define("LAN_THANK_YOU", "Спасибо");
define("LAN_CONTINUE", "Продолжить");
define("LAN_ENTER", "Введите");
define("LAN_ENTER_CODE", "Введите код");
define("LAN_INVALID_CODE", "Введен неверный код");
define("LAN_SEARCH", "Поиск");
define("LAN_VIEW", "Вид");
define("LAN_CLICK_TO_VIEW", "Нажмите для просмотра");
define("LAN_SORT", "Сортировка");
define("LAN_ORDER_BY", "Сортировать по");
define("LAN_ASCENDING", "По возрастанию");
define("LAN_DESCENDING", "По убыванию");
define("LAN_SHARE", "Поделиться");
define("LAN_BACK", "Назад");
define("LAN_NAME", "Название");
define("LAN_DESCRIPTION", "Описание");
define("LAN_CANCEL", "Отмена");
define("LAN_DATE", "Дата");
define("LAN_DATE_POSTED", "Дата публикации");
define("LAN_POSTED_BY", "Опубликовал");
define("LAN_JSCONFIRM", "Вы уверены?");
define("LAN_IP", "IP");
define("LAN_IP_ADDRESS", "IP-адрес");
define("LAN_AUTHOR", "Автор");
define("LAN_CATEGORY", "Категория");
define("LAN_GUEST", "Гость");
define("LAN_NEXT", "Следующая");
define("LAN_PREVIOUS", "Предыдущий");
define("LAN_LOGIN", "Логин");
define("LAN_LOGOUT", "Выход");
define("LAN_SETTINGS", "Параметры");
define("LAN_PASSWORD", "Пароль");
define("LAN_INCORRECT_PASSWORD", "Неверный пароль");
define("LAN_TYPE", "Тип данных");
define("LAN_SCREENSHOT", "Скриншот");
define("LAN_FILE", "Файл");
define("LAN_YOUTUBE_VIDEO", "Видео YouTube");
define("LAN_YOUTUBE_PLAYLIST", "Плейлист YouTube");
define("LAN_FILETYPES", "Типы файлов");
define("LAN_FILE_NOT_FOUND", "Файл не найден");
define("LAN_FILES", "Файлы");
define("LAN_SIZE", "Размер");
define("LAN_VERSION", "Версия");
define("LAN_DOWNLOAD", "Скачать");
define("LAN_DOWNLOAD_NO_PERMISSION", "Файл не найден или недостаточно прав на загрузку этого файла!");
define("LAN_WEBSITE", "Сайт");
define("LAN_COMMENTS", "Комментарии");
define("LAN_LOCATION", "Местоположение");
define("LAN_NO_RECORDS_FOUND", "Записи не найдены");
define("LAN_RATING", "Рейтинг");
define("LAN_IMAGE", "Изображение");
define("LAN_ABOUT", "Информация");
define("LAN_TITLE", "Заголовок");
define("LAN_MESSAGE", "Сообщение");
define("LAN_USER", "Пользователь");
define("LAN_EMAIL", "Адрес эл. почты");
define("LAN_WROTE", "написал");
define("LAN_RE_ORDER", "Изменить порядок");
define("LAN_RELATED", "Похожие темы");
define("LAN_CLOSE", "Закрыть");
define("LAN_EXPAND", "Развернуть");
define("LAN_LIST", "Список");

define("LAN_ENTER_USRNAME_EMAIL", "Введите ваш логин или email");
define("LAN_PWD_REQUIRED", "Требуется пароль");
define("LAN_SHOW", "Показать");
define("LAN_GENERATE", "Применить");
define("LAN_SUMMARY", "Краткое описание");
define("LAN_REQUIRED_BLANK", "Заполнены не все обязательные поля");
define("LAN_PLEASEWAIT", "Подождите пожалуйста");
define("LAN_CHOOSE_FILE", "Выберите файл");