<?php

require_once __DIR__ . "/../lib/locale.php";

\Sprint\Migration\Locale::loadLocale([
    "MODULE_NAME" => "Миграции для разработчиков",
    "MODULE_DESCRIPTION" => "Модуль для управления миграциями бд, создание, установка, откат миграций",
    "PARTNER_NAME" => "Андрей Рябин",
    "PARTNER_URI" => "https://packagist.org/packages/andreyryabin/sprint.migration",
    "ACCESS_DENIED" => "Доступ запрещен",
    "MENU_SPRINT" => "Миграции для разработчиков",
    "MENU_SCHEMAS" => "Схемы данных",
    "TITLE" => "Миграции",
    "FORM_DESCR" => "Описание",
    "FORM_PREFIX" => "Заголовок",
    "LIST_EMPTY" => "нет",
    "UP" => "Установить",
    "DOWN" => "Откатить",
    "UP_START" => "Установить новые",
    "DOWN_START" => "Откатить все",
    "UP_CONFIRM" => "Установить новые миграции?",
    "DOWN_CONFIRM" => "Откатить все установленные миграции?",
    "TOGGLE_LIST" => "Все",
    "TOGGLE_NEW" => "Новые",
    "TOGGLE_STATUS" => "Суммарно",
    "TOGGLE_INSTALLED" => "Установленные",

    "LINK_MP" => "Маркетплейс",
    "LINK_DOC" => "Документация",
    "LINK_ARTICLES" => "Статьи",
    "LINK_COMPOSER" => "Composer",
    "LINK_TASKS" => "Задачи",
    "LINK_TELEGRAM" => "Группа в телеграме",
    "NEW" => "Новые миграции",
    "INSTALLED" => "Установленные",
    "UNKNOWN" => "Неизвестные",
    "DESC_NEW" => "(только файл)",
    "DESC_INSTALLED" => "(файл + запись об установке)",
    "DESC_UNKNOWN" => "(только запись об установке)",
    "META_NEW" => "New",
    "META_INSTALLED" => "Installed",
    "META_UNKNOWN" => "Unknown",
    "CREATED_SUCCESS" => "Миграция #VERSION# создана",
    "SEARCH" => "Поиск",
    "ADMIN_INTERFACE_HIDDEN" => "Управление миграциями через админку отключено",

    "CFG_TITLE" => "Миграции",
    "SCH_TITLE" => "Схемы данных",

    "CONFIG" => "Конфигурация",
    "CONFIG_archive" => "Архив",

    "CONFIG_migration_dir" => "Директория для миграций",
    "CONFIG_migration_extend_class" => "Класс, от которого наследуются миграции",
    "CONFIG_migration_table" => "Таблица в бд с миграциями",
    "CONFIG_version_prefix" => "Заголовок класса миграции",
    "CONFIG_version_builders" => "Конструкторы",
    "CONFIG_version_filter" => "Фильтрация списка миграций",
    "CONFIG_stop_on_errors" => "Останавливать выполнение миграций при ошибках",
    "CONFIG_show_admin_interface" => "Показывать сервис миграций в админке",
    "CONFIG_console_user" => "Пользователь, от которого запускаются миграции в консоли",
    "CONFIG_config_file" => "Файл конфигурации",
    "CONFIG_title" => "Название конфигурации",
    "CONFIG_version_schemas" => "Схемы данных",

    "CONFIG_yes" => "да",
    "CONFIG_no" => "нет",

    "BUILDER_ERROR" => "Ошибка",
    "BUILDER_NEXT" => "Далее",
    "BUILDER_RESET" => "Сбросить",
    "SELECT_ALL" => "Выбрать все",
    "SELECT_ONE" => "Выбрать",

    "BUILDER_Transfer1" => "Перенести миграции",
    "BUILDER_TransferTo" => "Перенести в другую конфигурацию",
    "BUILDER_TransferAll" => "Все",
    "BUILDER_TransferNew" => "Новые",
    "BUILDER_TransferInstalled" => "Установленные",
    "BUILDER_TransferUnknown" => "Неизвестные",
    "BUILDER_TransferSelect" => "Выбрать миграции",
    "BUILDER_TransferCnt" => "Перенесено миграций: #CNT#",
    "BUILDER_TransferEmptyDest" => "Укажите конфигурацию для перемещения",
    "BUILDER_TransferBadDest" => "Укажите подходящую конфигурацию",

    "BUILDER_EventExport1" => "Создать миграцию для почтовых событий",
    "BUILDER_EventExport2" => "",
    "BUILDER_EventExport_event_types" => "Выберите типы почтовых событий",

    "BUILDER_AgentExport1" => "Создать миграцию для агентов",
    "BUILDER_AgentExport2" => "",
    "BUILDER_AgentExport_agent_id" => "Выберите агенты",

    "BUILDER_Version1" => "Создать простую миграцию",
    "BUILDER_Version2" => "",

    "BUILDER_UserGroupExport1" => "Создать миграцию для групп пользователей",
    "BUILDER_UserGroupExport2" => "",
    "BUILDER_UserGroupExport_user_group" => "Выберите группы",

    "BUILDER_IblockExport1" => "Создать миграцию для инфоблока",
    "BUILDER_IblockExport2" => "",
    "BUILDER_IblockExport_IblockId" => "Выберите инфоблок",
    "BUILDER_IblockExport_PropertyIds" => "Выберите свойства",
    "BUILDER_IblockExport_What" => "Что переносим",
    "BUILDER_IblockExport_WhatIblock" => "Инфоблок",
    "BUILDER_IblockExport_WhatIblockType" => "Тип инфоблока",
    "BUILDER_IblockExport_WhatIblockFields" => "Поля инфоблока",
    "BUILDER_IblockExport_WhatIblockProperties" => "Свойства инфоблока",
    "BUILDER_IblockExport_WhatIblockUserOptions" => "Настройки формы редактирования и списка",
    "BUILDER_IblockExport_WhatIblockPermissions" => "Доступ к инфоблоку",

    "BUILDER_IblockElementsExport1" => "Перенести элементы инфоблоков",
    "BUILDER_IblockElementsExport2" => "Переносит элементы с полями и свойствами\nПереносит изображения, файлы и списки\nНе переносит категории",
    "BUILDER_IblockElementsExport_IblockId" => "Выберите инфоблок",

    "BUILDER_HlblockElementsExport1" => "Перенести элементы highload-блоков",
    "BUILDER_HlblockElementsExport2" => "Переносит элементы\nПереносит изображения, файлы и списки",
    "BUILDER_HlblockElementsExport_HlblockId" => "Выберите highload-блок",

    "BUILDER_UserOptionsExport_Title" => "Создать миграцию для пользовательских настроек",
    "BUILDER_UserOptionsExport_Desc" => "",
    "BUILDER_UserOptionsExport_What" => "Что переносим",
    "BUILDER_UserOptionsExport_WhatUserForm" => "Настрока формы редактирования пользователей",
    "BUILDER_UserOptionsExport_WhatUserList" => "Настрока списка пользователей",
    "BUILDER_UserOptionsExport_WhatGroupList" => "Настрока списка групп",

    "BUILDER_HlblockExport1" => "Создать миграцию для highload-блока",
    "BUILDER_HlblockExport2" => "",
    "BUILDER_HlblockExport_HlblockId" => "Выберите highload-блоки",

    "BUILDER_UserTypeEntities1" => "Создать миграцию для пользовательских полей",
    "BUILDER_UserTypeEntities2" => "",
    "BUILDER_UserTypeEntities_EntityId" => "Укажите поле для выгрузки",

    "BUILDER_FormExport1" => "Создать миграцию для веб-формы",
    "BUILDER_FormExport2" => "",
    "BUILDER_FormExport_FormId" => "Выберите форму",
    "BUILDER_FormExport_What" => "Что переносим?",
    "BUILDER_FormExport_Form" => "Форму",
    "BUILDER_FormExport_Fields" => "Поля формы",
    "BUILDER_FormExport_Statuses" => "Статусы",

    "BUILDER_OptionExport1" => "Создать миграцию для настроек модулей",
    "BUILDER_OptionExport2" => "",
    "BUILDER_OptionExport_module_id" => "Выберите модули",

    "BUILDER_CacheCleaner1" => "Очистка кеша",
    "BUILDER_CacheCleaner2" => "Выполнить BXClearCache(true)",

    "BUILDER_Configurator" => "Создать конфигурацию",
    "BUILDER_Configurator_config_name" => "Название (лат буквы и цифры)",
    "BUILDER_Configurator_config_created" => "Конфигурация создана",
    "BUILDER_Configurator_error" => "Ошибка создания конфигурации",
    "BUILDER_Configurator_success" => "Конфигурация создана",

    "BUILDER_Cleaner" => "Удалить конфигурацию",
    "BUILDER_Cleaner_desc" => "Удаление файла конфигурации, файлов миграций и записей в таблице миграций",
    "BUILDER_Cleaner_config_name" => "Название (лат буквы и цифры)",
    "BUILDER_Cleaner_error" => "Ошибка удаления конфигурации",
    "BUILDER_Cleaner_success" => "Конфигурация удалена",

    "BUILDER_SchemaImport" => "Установка схемы",
    "BUILDER_SchemaExport" => "Создание схемы",

    "GOTO_MIGRATION" => "Админка миграций",
    "GOTO_OPTIONS" => "Настройки модуля",

    "OPTIONS_REMOVE" => "Сбросить настройки модуля",
    "OPTIONS_REMOVE_success" => "Настройки сброшены",

    "MARK" => "Отметить миграцию",
    "MARK_FIELD1" => "Выбрать миграцию",
    "MARK_FIELD2" => "Отметить как",
    "MARK_VERSION" => "Название|installed|new|unknown",
    "MARK_AS_NEW" => "новую",
    "MARK_AS_INSTALLED" => "установленную",
    "MARK_SUCCESS1" => "Миграция #VERSION# отмечена как новая",
    "MARK_SUCCESS2" => "Миграция #VERSION# отмечена как установленная",
    "MARK_ERROR1" => "Миграция #VERSION# уже является новой",
    "MARK_ERROR2" => "Миграция #VERSION# уже была установлена",
    "MARK_ERROR3" => "Миграция #VERSION# не изменена",
    "MARK_ERROR4" => "Не найдено миграций для изменения",

    "DELETE_OK" => "Миграция #VERSION# удалена",
    "DELETE_ERROR1" => "Миграций для удаления не найдено",
    "DELETE_ERROR2" => "Миграция #VERSION# не найдена",

    "CREATE" => "Создать миграцию",
    "VERSION_NOT_FOUND" => "Миграция не найдена",
    "RIGHT_D" => "Доступ запрещен",
    "RIGHT_W" => "Доступ разрешен",

    "MODIFIED_VERSION" => "Код миграции был изменен после установки",
    "MODIFIED_SCHEMA" => "Содержимое схемы было изменено после установки",
    "MODIFIED_LABEL" => "M",
    "TAG" => "Миграция отмечена тегом",
    "ADDTAG" => "Поставить тег",
    "ADDTAG_TAG" => "Название",
    "ADDTAG_TITLE" => "Поставить тег устанавливаемым миграциям",

    "SCHEMA_DIFF" => "Проверить изменения",
    "SCHEMA_IMPORT" => "Установить схему",
    "SCHEMA_EXPORT" => "Создать схему",

    "GD_INSTALL" => "Установить гаджеты: \"Сводка по миграциям\"",
    "GD_INSTALL_success" => "Гаджеты установлены",
    "GD_SELECT_CONFIGS" => "Конфигурации",
    "GD_CHECK_SCHEMAS" => "Показывать статус для схем",
    "GD_INFO_NAME" => "Сводка по миграциям",
    "GD_INFO_DESC" => "Сводка по миграциям",
    "GD_TYPE" => "Тип",
    "GD_STATE" => "Состояние",
    "GD_SHOW" => "Перейти",
    "GD_SHOW_SCHEMAS" => "Перейти к схемам",
    "GD_SHOW_MIGRATIONS" => "Перейти к миграциям",
    "GD_MIGRATIONS" => "Миграции",
    "GD_MIGRATIONS_RED" => "Есть неустановленные миграции",
    "GD_MIGRATIONS_GREEN" => "Все миграции установлены",
    "GD_SCHEMAS" => "Схемы данных",
    "GD_SCHEMA_RED" => "Не установлена",
    "GD_SCHEMA_GREEN" => "Установлена",
    "GD_SCHEMAS_RED" => "не установлены",
    "GD_SCHEMAS_GREEN" => "Схемы установлены",
]);