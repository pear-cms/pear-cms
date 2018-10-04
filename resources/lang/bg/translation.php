<?php

return [

  // Menu translations below.
  'menu_language_description'               => 'Превключете на един от езиците по-долу.',
  'menu_news_description'                   => 'Новини с един поглед.',
  'menu_game_description'                   => 'Вижте статуса на играта и статистическите данни за играта.',
  'menu_connection_guide'                   => 'Ръководство за Свързване',
  'menu_view_all_news'                      => 'Вижте всичките новини',
  'menu_user_actions'                       => 'Действия на потребителя',
  'menu_game_status'                        => 'Преглед на състоянието на играта',
  'menu_language'                           => 'Език',
  'menu_features'                           => 'Функции',
  'menu_changelog'                          => 'Промени',
  'menu_register'                           => 'Регистриране',
  'menu_log_out'                            => 'Излез',
  'menu_log_in'                             => 'Влез',
  'menu_home'                               => 'Начало',
  'menu_news'                               => 'Новини',
  'menu_game'                               => 'Игра',
  'menu_shop'                               => 'Магазин',

  // Connection guide page translations below.
  'connection_guide_page_description'       => 'Ръководство за свързване към ' . env('APP_NAME') . '.',
  'connection_guide'                        => 'Ръководство за Свързване',

  // Server status page translations below.
  'server_world_small_description'          => 'Засяга текущия статус на сървъра.',
  'server_status_page_description'          => 'Виж важни статистики и друга информация за ' . env('APP_NAME') . '.',
  'server_auth_small_description'           => 'Засяга текущия статус за свързване.',
  'authentication_system'                   => 'Система за свързване',
  'server_status'                           => 'Статус на сървъра',

  // Donate page translations below.
  'donate_page_description'                 => 'Дари на ' . env('APP_NAME') . ' и получи монети като знак за благодарност.',
  'placeholder_donate'                      => 'Въведете сумата, която искате да дарите...',
  'donate_amount'                           => 'Сума в долари ($)',
  'button_donate'                           => 'Дари',

  // Misc translations below.
  'currently_under_maintenance_message'     => 'Уверяваме ви, че ще се върнем възможно най-скоро .. Може би.',
  'currently_under_maintenance'             => 'В момента сменяме маслото...',
  'maintenance_mode'                        => 'Режим на поддръжка',
  'current_password'                        => 'Сегашна парола',
  'confirm_password'                        => 'Потвърди паролата',
  'last_modified_at'                        => 'Последна промяна на',
  'change_password'                         => 'Смени паролата',
  'character_list'                          => 'Списък с герои',
  'has_no_tickets'                          => 'няма въпроси',
  'account_panel'                           => 'Акаунт Панел',
  'online_status'                           => 'Онлайн статус',
  'ticket_status'                           => 'Статус на въпроса',
  'new_password'                            => 'Нова парола',
  'description'                             => 'Описание',
  'assigned_to'                             => 'Разглеждан от',
  'quick_tools'                             => 'Бързи опции',
  'created_by'                              => 'Създаден от',
  'created_at'                              => 'Създаден на',
  'my_tickets'                              => 'Мойте въпроси',
  'learn_more'                              => 'Научи повече',
  'closed_by'                               => 'Затворен от',
  'donate_to'                               => 'Дари на',
  'gm_panel'                                => 'GM Панел',
  'admin_panel'                             => 'Админ Панел',
  'response'                                => 'Отговор',
  'username'                                => 'Никнейм',
  'password'                                => 'Парола',
  'modified'                                => 'Променен',
  'register'                                => 'Регистриране',
  'tickets'                                 => 'въпроси',
  'creator'                                 => 'Създател',
  'created'                                 => 'Създадено',
  'log_in'                                  => 'Влез',
  'status'                                  => 'Статус',
  'money'                                   => 'Пари',
  'title'                                   => 'Заглавие',
  'image'                                   => 'Снимка',
  'email'                                   => 'Имейл',
  'news'                                    => 'Новини',


  // Error translations below.
  'error_current_password_no_match'         => 'Текущата ви парола не съответства на паролата от нашите записи. Опитай пак.',
  'error_new_password_not_same'             => 'Новата парола не може да бъде същата като текущата ви парола. Моля, изберете друга парола.',
  'error_no_characters'                     => 'Нямате никакви герои.',
  'error_no_tickets_2'                      => 'Все още няма въпроси.',
  'error_no_tickets'                        => 'Нямаш въпроси.',
  'error_not_found'                         => 'Няма такава страница. Опитай отново?',
  'error_unknown'                           => 'Появи се непозната грешка.',

  // Success translations below.
  'success_password_change'                 => 'Паролата е сменена успешно!',


  // News translations below and their appropriate functions.
  'news_page_description'                   => 'Това са всички новини, които ' . env('APP_NAME') . ' има в момента.',
  'displaying_all_news'                     => 'Показване на всичките новини.',
  'share_your_thoughts'                     => 'Сподели твоето мнение',
  'placeholder_comment'                     => 'Напиши як коментар...',
  'button_comment'                          => 'Коментирай',
  'latest_news'                             => 'Последни новини',
  'no_articles'                             => 'Няма никакви новини за показване.',
  'posted_on'                               => 'Публикувано на',
  'badge_new'                               => 'Ново',
  'read_more'                               => 'Прочети още',

  // Account Panel page translations below.
  'account_panel_page_description'          => 'От акаунт панела можеш да променяш настройки за акаунта си.',
  'button_change_password'                  => 'Смяна на парола',
  'button_change_avatar'                    => 'Смяна на снимка',
  'button_my_tickets'                       => 'Моите въпроси',
  'button_gm_panel'                         => 'GM Панел',
  'button_admin_panel'                      => 'Админ Панел',
  'button_log_out'                          => 'Излез',


  // Change Password page translations below.
  'change_password_page_description'        => 'Уморен ли си от старата си парола? Промени я днес!',
  'placeholder_current_password'            => 'Въведи сегашната си парола...',
  'placeholder_confirm_password'            => 'Потвърди новата парола...',
  'placeholder_new_password'                => 'Въведи нова парола...',
  'button_change_password'                  => 'Смени паролата',

  // View characters tickets translations below.
  'view_character_tickets'                  => 'въпроси',
  'viewing_character'                       => 'Гледане на герой',

  // View tickets translations below.
  'pick_character_see_tickets'              => 'Избери герой, за да видиш неговите въпроси.',
  'select_a_character'                      => 'Избери герой отдолу.',

  // View ticket translations below.
  'currently_viewing_ticket'                => 'Понастоящем разглеждащ въпрос ',
  'button_close_ticket'                     => 'Затвори въпроса',
  'viewing_ticket_by'                       => 'Гледане на въпрос от',
  'viewing_ticket'                          => 'Гледане на въпрос',

  // View character page translations below.
  'view_character_page_description'         => 'Вижте актуални статистически данни относно',
  'total_honor_points'                      => 'Общо Honor точки',
  'total_time_played'                       => 'Общо играно време',
  'total_kills'                             => 'Общо убийства',

  // Log in page translations below.
  'remember_me_description'                 => 'Отбелязвайки това, вие ще сте \'онлайн\' докато не излезете от профила си.',
  'login_page_description'                  => 'Влезте в профила си.',
  'placeholder_password'                    => 'Твоята силна парола...',
  'placeholder_username'                    => 'Твоя як никнейм...',
  'button_log_in'                           => 'Влез',

  // Register page translations below.
  'register_page_description'               => 'Регистрирай нов акаунт днес!',
  'placeholder_email'                       => 'Твоя и-мейл...',
  'register_account'                        => 'Регистрирай акаунт',
  'button_register'                         => 'Брой ме!',
  'username_label'                          => 'Не въвеждайте неподходящо име, тъй като акаунта ти може да бъде прекратени.',
  'password_label'                          => 'Силната парола е ключът към запазването на защитата на профила ви!',
  'email_label'                             => 'Обещаваме ти да не ти изпращаме нищо неподходящо или да споделяме имейл адреса ти с трети страни.',

  // GM Panel translations below.
  'gm_panel_page_description'               => 'Това е панела на майсторите на играта. Тук вие можете да правите магични неща.',
  'button_account_list'                     => 'Списък с акаунти',
  'button_ticket_list'                      => 'Списък с въпроси',
  'management_tools'                        => 'Инструменти за управление',
  'news_system'                             => 'Новинарска система',

  // GM Panel: Ticket list translations below.
  'ticket_list_page_description'            => 'Виж всичките въпроси тук.',
  'ticket_list'                             => 'Списък с въпроси',

  // GM Panel: Publish Article translations below.
  'publish_article_page_description'        => 'Публикувайте нова, вълнуваща, излязла от печката новина!',
  'placeholder_article_description'         => env('APP_NAME') . ' желае да отпразнува с...',
  'placeholder_article_content'             => 'Нашата актуализация ви носи ново, огнено съдържание от дълбините на Molten Core...',
  'placeholder_article_title'               => env('APP_NAME') . ' получава голяма актуализация...',
  'button_publish_article'                  => 'Публикувай Статия',
  'publish_article'                         => 'Публикувай Статия',

  //Shop
  'shop_page'                               => 'Магазин',
  'shop_page_description'                   => 'Можете да закупите всички видове стоки в нашия магазин.',
  'quick_options'                           => 'Бързи опций',
  'show_all_items'                          => 'Покажи всички артикули',
  'show_all_categories'                     => 'Покажи всички категории',
  'random_items'                            => 'Случайни артикули',
  'shop_items_page'                         => 'Артикули',
  'shop_items_page_description'             => 'Тук вие виждате всички артикули на '.env('APP_NAME'),
  'showing_all_items'                       => 'Всички Артикули',
  'shop_categories_page'                    => 'Категории',
  'shop_categories_page_description'        => 'Можете да разгледате разнообразието от категории на '.env('APP_NAME'),
  'showing_all_categories'                  => 'Всички Категории',

  //Languages
  'english'                                 => 'Английски',
  'swedish'                                 => 'Шведски',
  'bulgarian'                               => 'Български',

];
