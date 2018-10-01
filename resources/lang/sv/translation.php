<?php

return [

  // Menu translations below.
  'menu_language_description'               => 'Ändra språk till något av de följande språken nedan.',
  'menu_news_description'                   => 'Rykande färska nyheter.',
  'menu_game_description'                   => 'Se spelstatus och statistik',
  'menu_connection_guide'                   => 'Anslutningsguide',
  'menu_view_all_news'                      => 'Se alla nyheter',
  'menu_user_actions'                       => 'Användarverktyg',
  'menu_game_status'                        => 'Se server status',
  'menu_language'                           => 'Språk',
  'menu_features'                           => 'Kännemärken',
  'menu_register'                           => 'Registrera',
  'menu_log_out'                            => 'Logga ut',
  'menu_log_in'                             => 'Logga in',
  'menu_home'                               => 'Hem',
  'menu_news'                               => 'Nyheter',
  'menu_game'                               => 'Spel',
  'menu_shop'                               => 'Shop',

  // Connection guide page translations below.
  'connection_guide_page_description'       => 'Anslutningsguide för ' . env('APP_NAME') . '.',
  'connection_guide'                        => 'Anslutningsguide',

  // Server status page translations below.
  'server_world_small_description'          => 'Reflekterar nuvarande worldserverns status.',
  'server_status_page_description'          => 'Se statistik, server status och annan viktig information för ' . env('APP_NAME') . '.',
  'server_auth_small_description'           => 'Reflekterar autentiseringssystemets status.',
  'authentication_system'                   => 'Autentiseringssystem',
  'server_status'                           => 'Server status',

  // Donate page translations below.
  'donate_page_description'                 => 'Donera till ' . env('APP_NAME') . ' och få guld mynt som tack.',
  'placeholder_donate'                      => 'Mängd att donera...',
  'donate_amount'                           => 'Mängd i dollar ($)',
  'button_donate'                           => 'Donera',

  // Misc translations below.
  'currently_under_maintenance_message'     => 'Vi ska försöker lösa detta så snabbt vi kan.',
  'currently_under_maintenance'             => 'Vi justerar just nu oljenivån...',
  'maintenance_mode'                        => 'Maintenance Mode',
  'current_password'                        => 'Nuvarande lösenord',
  'confirm_password'                        => 'Repetera lösenord',
  'last_modified_at'                        => 'Senast ändrat',
  'change_password'                         => 'Byt Lösenord',
  'character_list'                          => 'Karaktär Lista',
  'has_no_tickets'                          => 'har inga frågor.',
  'account_panel'                           => 'Användarpanelen',
  'online_status'                           => 'Online status',
  'ticket_status'                           => 'Fråge status',
  'new_password'                            => 'Nytt lösenord',
  'description'                             => 'Beskrivning',
  'assigned_to'                             => 'Tilldelad till',
  'quick_tools'                             => 'Snabb Länkar',
  'created_by'                              => 'Öppnad av',
  'created_at'                              => 'Öppnad den',
  'my_tickets'                              => 'Mina Frågor',
  'learn_more'                              => 'Utforksa mer',
  'closed_by'                               => 'Stängd av',
  'donate_to'                               => 'Donera till',
  'gm_panel'                                => 'GM Panel',
  'admin_panel'                             => 'Admin Panel',
  'response'                                => 'Respons',
  'username'                                => 'Användarnamn',
  'password'                                => 'Lösenord',
  'modified'                                => 'Ändrad',
  'register'                                => 'Registrera',
  'tickets'                                 => 'frågor',
  'creator'                                 => 'Ägare',
  'created'                                 => 'Öppnad',
  'log_in'                                  => 'Logga in',
  'status'                                  => 'Status',
  'money'                                   => 'Pengar',
  'title'                                   => 'Titel',
  'image'                                   => 'Bild',
  'email'                                   => 'Email address',
  'news'                                    => 'Nyhets',


  // Error translations below.
  'error_current_password_no_match'         => 'Ditt nuvarande lösenord överrensstämmer inte med lösenordet i vår databas. Försök igen.',
  'error_new_password_not_same'             => 'Ditt nya lösenord kan inte vara detsamma som ditt nuvarande lösenord. Försök igen.',
  'error_no_characters'                     => 'Du har inga karaktärer.',
  'error_no_tickets_2'                      => 'Det finns inga frågor, ännu.',
  'error_no_tickets'                        => 'Du har inga frågor.',
  'error_not_found'                         => 'Sidan du försökte nå finns inte. Försök igen?',
  'error_unknown'                           => 'Ett ovanligt fel inträffade.',

  // Success translations below.
  'success_password_change'                 => 'Ditt lösenord har ändrats!',


  // News translations below and their appropriate functions.
  'news_page_description'                   => 'Här är alla nyheter som ' . env('APP_NAME') . ' har just nu.',
  'displaying_all_news'                     => 'Visar alla nyheter',
  'share_your_thoughts'                     => 'Dela med dig av din åsikt',
  'placeholder_comment'                     => 'Skriv en cool kommentar...',
  'button_comment'                          => 'Kommentera',
  'latest_news'                             => 'Senaste nyheterna',
  'no_articles'                             => 'Inga nyhetsartiklar att visa.',
  'posted_on'                               => 'Postad den',
  'badge_new'                               => 'Ny',
  'read_more'                               => 'Läs mer',

  // Account Panel page translations below.
  'account_panel_page_description'          => 'Här är din personliga användarpanel där du kan justera vissa inställningar, se dina karaktärer samt se dina spelfrågor.',
  'button_change_password'                  => 'Byt lösenord',
  'button_change_avatar'                    => 'Byt Avatar',
  'button_my_tickets'                       => 'Mina frågor',
  'button_gm_panel'                         => 'GM Panel',
  'button_admin_panel'                         => 'Admin Panel',
  'button_log_out'                          => 'Logga ut',


  // Change Password page translations below.
  'change_password_page_description'        => 'Trött på ditt gamla lösenord? Ta och byt det - idag!',
  'placeholder_current_password'            => 'Skriv ditt nuvarande lösenord...',
  'placeholder_confirm_password'            => 'Repetera ditt lösenord...',
  'placeholder_new_password'                => 'Skriv ditt nya lösenord...',
  'button_change_password'                  => 'Byt lösenord',

  // View characters tickets translations below.
  'view_character_tickets'                  => 'frågor',
  'viewing_character'                       => 'Visar karaktär',

  // View tickets translations below.
  'pick_character_see_tickets'              => 'Välj en karaktär för att se dess frågor',
  'select_a_character'                      => 'Välj en karaktär nedan',

  // View ticket translations below.
  'currently_viewing_ticket'                => 'Du visar just nu fråga',
  'button_close_ticket'                     => 'Stäng fråga',
  'viewing_ticket_by'                       => 'Visar fråga av',
  'viewing_ticket'                          => 'Visar fråga',

  // View character page translations below.
  'view_character_page_description'         => 'See nuvarande, uppdaterad, information angående',
  'total_honor_points'                      => 'Totalt antal honor poäng',
  'total_time_played'                       => 'Total speltid',
  'total_kills'                             => 'Totalt antal mord',

  // Log in page translations below.
  'remember_me_description'                 => 'Bockar du denna så håller du dig inloggad hela tiden.',
  'login_page_description'                  => 'Logga in med ett nuvarande konto.',
  'placeholder_password'                    => 'Skriv in ditt säkra lösenord...',
  'placeholder_username'                    => 'Skriv in ditt coola användarnamn...',
  'button_log_in'                           => 'Logga in',

  // Register page translations below.
  'register_page_description'               => 'Registrera ett nytt konto idag!!',
  'placeholder_email'                       => 'Skriv in din e-mail...',
  'register_account'                        => 'Registrera konto',
  'button_register'                         => 'Räkna med mig!',
  'username_label'                          => 'Använd inte ett opassande användarnamn då det kan innebära en avstängning.',
  'password_label'                          => 'Ett starkt lösenord är en prioritet för att hålla ditt konto säkert.',
  'email_label'                             => 'Vi lovar att inte skicka något opassande eller att dela ut din e-mail till tredjepart',

  // GM Panel translations below.
  'gm_panel_page_description'               => 'Detta är Gamemaster panelen där du kan utföra massa saker',
  'button_account_list'                     => 'Kontolista',
  'button_ticket_list'                      => 'Frågelista',
  'management_tools'                        => 'Användarverktyg',
  'news_system'                             => 'Nyhetssystem',

  // GM Panel: Ticket list translations below.
  'ticket_list_page_description'            => 'Se alla frågor skapade av spelare här.',
  'ticket_list'                             => 'Frågelista',

  // GM Panel: Publish Article translations below.
  'publish_article_page_description'        => 'Publicera en ny, rykande färsk, nyhet genom detta formulär.',
  'placeholder_article_description'         => env('APP_NAME') . ' skulle vilja fira med att...',
  'placeholder_article_content'             => 'Våran nya uppdatering tar dig genom en rykande Molten Core...',
  'placeholder_article_title'               => env('APP_NAME') . ' får en stor uppdatering...',
  'button_publish_article'                  => 'Publicera Nyhet',
  'publish_article'                         => 'Publicera Nyhet',

  //Shop
  'shop_page'                               => 'Affär',
  'shop_page_description'                   => 'Du kan köpa alla typer av varor i vår butik.',

  //Languages
  'english'                                 => '???',
  'swedish'                                 => '???',
  'bulgarian'                               => '???',

];
