### Мысли в слух:
Допустим есть обвязка на пользователей, параметры

#### Требуется:
Реализовать систему подтверждения смены конкретной настройки пользователя по коду с возможностью выбора пользователем другого метода

#### Реализация:
оповещение пользователя
```plantuml
participant UserSettingsController as USC
participant UserSettingsModelService as USMS
participant ChangeUserSettingEvent as CUSE
participant NotificationUserChangeSettingsListener as NUCSL
participant NotificationUserService as NUS
participant NotificationFactory as NF
participant IUserNotificationHandler as IUNH
 
USC -> USMS: передача новых\nпараметров
USMS -> CUSE: создание новых параметров,\nпо умолчанию не активны,\nдоступ к базе через репозиторий\nвызов event-а оповещения
CUSE -> NUCSL: вызов слушателя\nсобытия
NUCSL -> NUS: вызов сервиса нотификации
NUS -> NF: Вызов фабрики для\nсоздания класса нотификатора\nв данном случае\nназвание хранится в базе
NF -> NUS: Возврат класса нотификатора
NUS -> IUNH: Вызов нотификации
```
проверка кода
```plantuml
participant VerifySettingsController as VSC
participant VerifyUserParamsService as VUPS
participant UsersModelService as UMS
participant NotificationModelService as NMS
participant UserSettingsModelService as USMS


VSC -> VUPS: передача на верификацию кода\nи ID пользователя
VUPS -> UMS: поиск пользователя по ID
UMS -> VUPS: возвращение пользователя
VUPS -> NMS: поиск нотификации по ID\nпользователя и коду подтверждения
NMS -> VUPS: возвращение нотификации
VUPS -> VUPS: проверка кода
VUPS -> USMS: если все хорошо верифицируем настройки пользователя
```

Подмена реализации возможна через DI контейнер 
