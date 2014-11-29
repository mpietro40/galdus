<?php
$i18n = array(
    'GO' => "Поиск"
  , 'HEADER' => "Результаты Поиска"
  , 'NOT_FOUND' => "Ничего не найдено"
  , 'DATE_LOCALE' => "ru_RU.utf8,ru_RU,ru"
  , 'DATE_FORMAT' => "%d.%m.%Y - %H:%M"
  , 'FIRST_TEXT' => "<<"
  , 'FIRST_TITLE' => "Первая страница"
  , 'PREV_TEXT' => "<"
  , 'PREV_TITLE' => "Предыдущая страница"
  , 'NEXT_TEXT' => ">"
  , 'NEXT_TITLE' => "Следующая страница"
  , 'LAST_TEXT' => ">>"
  , 'LAST_TITLE' => "Последняя страница"
  , 'CONFIGURE' => "Настройка поиска"
  , 'CONFIGURATION' => "I18N Search"
  , 'VIEW_USAGE' => "Использование"
  , 'VIEW_SETTINGS' => "Настройки"
  , 'INDEX_SETTINGS' => "Настройки индексации"
  , 'INDEX_DESCRIPTION' => "Эти параметры описывают важность местоположения искомых слов, то есть важность 1 содержимого и важность 5 заголовка означает, что найти 1 раз слово в заголовке важнее, чем 4 раза в содержимом."
  , 'CONTENT_WEIGHT' => "Относительная важность содержимого"
  , 'TITLE_WEIGHT' => "Относительная важность заголовка"
  , 'TAG_WEIGHT' => "Относительная важность тэга"
  , 'SEARCHFORM_SETTINGS' => "Настройки формы поиска"
  , 'SEARCHFORM_DESCRIPTION' => "Желаете ли Вы отображать вместе с поисковой формой облако тэгов? Если Вы не вводили ключевые слова на страницах, отключите это."
  , 'SHOW_TAGS' => "Отображать облако тэгов"
  , 'MIN_TAG_SIZE' => "Минимальный размер шрифта тэгов"
  , 'MAX_TAG_SIZE' => "Максимальный размер шрифта тэгов"
  , 'SEARCHRESULT_SETTINGS' => "Настройки результатов поиска"
  , 'SEARCHRESULT_DESCRIPTION' => "Эти параметры описывают, как будут выглядеть результаты поиска."
  , 'MAX' => "Максимальное количество результатов, отображаемое на странице."
  , 'NUM_WORDS' => "Количество слов в отрывках (0 = ни одного, -1 = полное содержимое, 1р - 1 абзац)"
  , 'SHOW_LANGUAGE' => "Показывать язык результатов (только для мультиязычных сайтов)"
  , 'SHOW_DATE' => "Показывать дату публикации"
  , 'SHOW_PAGING' => "Показывать навигацию по страницам, если результатов много."
  , 'SAVE_CONFIGURATION' => "Сохранить настройки поиска"
  , 'RESET_CONFIGURATION' => "Сбросить настройки поиска"
  , 'SAVE_FAILURE' => "Ваши изменения настроек поиска не могут быть сохранены."
  , 'SAVE_SUCCESS' => "Ваши изменения настроек поиска успешно сохранены."
  , 'RESET_FAILURE' => "Настройки поиска не могут быть сброшены."
  , 'RESET_SUCCESS' => "Восстановлены стандартные настройки поиска."
  , 'UNDO_FAILURE' => "Конфигурация поиска не может быть восстановлена."
  , 'UNDO_SUCCESS' => "Конфигурация поиска успешно восстановлена."
  
  , 'USAGE_IN_PAGE' => "Для использования этого плагина поиска, создать страницу - скажем, с URL \"search\" и названием \"Поиск\" - и добавьте следующие строки на ней:"
  , 'USAGE_IN_TEMPLATE' => "Чтобы поместить форму поиска на боковой панели или в шаблоне (например, в заголовке страницы), используйте следующий код (\"Поиск\" это страница для отображения результатов):"
  , 'CUSTOMIZE_1' => "Чтобы настроить поиск использовать"
  , 'CUSTOMIZE_2' => "страницы и/или добавить параметры поиска, как называет"
  , 'CUSTOMIZE_3' => "где вы можете использовать следующие параметры:"
  , 'PARAMETER_NAME' => "Имя"
  , 'PARAMETER_DESCRIPTION' => "Описание"
  , 'SLUG_DESCR' => "Slug/URL страницы, на которой отображаются результаты, например, поиска"
  , 'GO_DESCR' => "Текст кнопки поиска"
  , 'TAGS_DESCR' => "Метки (ключевые слова) для поиска или теги"
  , 'WORDS_DESCR' => "Слова для поиска - вместо представленных слов"
  , 'ORDER_DESCR' => "Порядок отображения результатов: <i>url</i> = slug/URL по возрастанию, <i>reverseurl</i> = slug/URL по убыванию, <i>date</i> = по дате публикации по убыванию, <i>created</i> = по дате создания по убыванию (если имеется), по умолчанию по убыванию"
  , 'HEADER_DESCR' => "Заголовок результатов поиска"
  , 'NOT_FOUND_DESCR' => "Сообщение, если ничего не найдено"
  , 'DATE_LOCALE_DESCR' => "Язык для отображения даты или несколько языков, разделенных запятыми, например, \"de_DE.utf8,de_DE,de\""
  , 'DATE_FORMAT_DESCR' => "Формат даты, указанной на STRFTIME функции PHP, например, \"%d.%m.%Y - %H:%M\""
  , 'PAGING_DESCR' => "Пагинатор, например"
  , 'LANGUAGE_FILE_COMMENT' => "Все прописные параметры обычно читаются из языковых файлов плагина. Таким образом, рекомендуется изменить языковой файл (в /plugins/i18n_search/lang/), вместо использования этих параметров."
  , 'LANG_DESCR' => "Если задан язык, то будут возвращены только результаты на этом языке, в противном случае будут возвращены результаты на всех языках пользователей и языке по умолчанию. Например \"ru\""
  , 'ADDTAGS_DESCR' => "Дополнительные теги будут добавлены в поисковый запрос"
  , 'ADDWORDS_DESCR' => "Дополнительные слова будут добавлены в поисковый запрос"
  , 'COMPONENT_DESCR' => "Компонент, который вызывается для каждого результата поиска"
  , 'TRANSLITERATION' => "Транслитерация"
  , 'TRANSLITERATION_DESCRIPTION' => "Здесь вы можете ввести переводы символов, которые будут использоваться во время поиска. Каждая строка содержит один перевод, <em>характер источника(ов) \"=\" целевые характер(ы)</em>, например <em>ö=o</em>."
  , 'TRANSLITERATION_SETTINGS' => "Настройки транслитерации"
  , 'AJAX_DESCR' => "Значение 0 отключит AJAX функциональность формы поиска и облака тегов."
  , 'PLACEHOLDER_DESCR' => "Место для поля ввода поиска"
  , 'LIVE_DESCR' => "Значение 1 сделает поиск прямым, будут отображаться результаты поиска при выборе тегов и ввода слов. Вы должны установить форму поиска и создать страницу для результатов поиска."
  , 'IDPREFIX_DESCR' => "Если вы установите этот параметр, каждый результат поиска будет получать идентификатор с этим префиксом, и все большее число"
  , 'TAGCLASSPREFIX_DESCR' => "Если вы установите этот параметр, ко всем тегам будут добавлены классы CSS - начинается с этого значения - в результатах поиска. Вы можете использовать этот стиль результатов для тегов."
  , 'TAG_MODE' => "Какие теги следует использовать?"
  , 'TAGS_LANG_OR_DEFLANG' => "Использование теги языка по умолчанию, если у тегов нет конкретного языка"
  , 'TAGS_ALWAYS_DEFLANG' => "Всегда использовать теги языка по умолчанию"
  , 'TAGS_ALWAYS_LANG' => "Всегда использовать теги специальных языков"
);