
#### ИСПРАВЛЕНИЕ НЕПОЛАДОК:
- не работает checkbox "checkbot"
- поиск по рубрикам и меткам вывод на 404


---
#### НОВЫЙ ФУНКЦИОНАЛ:
- обработка ошибок/исключений (по доке Laravel)?
- картинки и аватарки?
- восстановление пароля?
- вывод ошибок от валидации AJAX!!!
- функционал финансовой поддержки "На развитие проекта + пожелания"
- комментарий защита от бота
- добавить лайки к постам и комментариям ??
- copyright (страница?)
- реализовать функционал "Похожие комментарии"
- главная страница: карточки с категориями ??
- реализовать вывод кол-ва статей при поиске
- показ имени аутентифицированного пользователя в админке и в блоге в хедере

- АДМИНКА:
    - удаление сущностей в админке
    - админка: комментарии
    - валидация в админке создание рубрики, меток?
    - пользователи: добавить столбец "роль"


---
#### ОПТИМИЗАЦИЯ И РЕФАКТОРИНГ:
- оптимизировать запросы, убрав из выборки поле "published" ??
- count статей в рубриках и тегах заносить в таблицу в отдельн. колонку
- "$this->middleware('auth')" вместо моей проверки
- заменить findOrFail ??
- прижать футер?
- убрать фильтрацию по "published_at" и другие (вместо них планировщиком выставлять активность)
- убрать дублир.код (вывод рубрик и тегов) на каждой странице
- переписать экшены создания комментариев


---
#### СДЕЛАНО (протестить еще раз):
- разделение ролей
- реализовать подсветку активной рубрики
- комментарии
- страница "О блоге"
- поиск
- убрать пустые теги (для статей с is_published=0)
- верстать страницу "Контакты"
- верстать форму комментария
- верстать блок комментариев
- аутентификация
- оформление пустой страницы
- править даты
- поиск статей по словам
- метки