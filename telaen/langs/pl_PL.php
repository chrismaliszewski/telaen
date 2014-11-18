<?php
/*
 * US English (canonical list and phrasing)
 */

$lang = array();

// User-friendly names to system folders
$lang['inbox_extended'] = 'Otrzymane';
$lang['sent_extended'] = 'Wys�ane';
$lang['trash_extended'] = 'Kosz';
$lang['spam_extended'] = 'Spam folder';

// Navigation texts
$lang['pages_text'] = 'Pages';
$lang['first_text'] = 'First';
$lang['previous_text'] = 'Poprzednia';
$lang['next_text'] = 'Nast�pna';
$lang['last_text'] = 'Last';
$lang['total_text'] = 'Total';

// Mail Server Errors
$lang['err_login_msg'] = 'Login error';
$lang['err_system_msg'] = 'System error';
$lang['error_login'] = 'Please check your username or password and try again';
$lang['error_connect'] = 'Nie mog� po��czy� si� z serwerem';
$lang['error_retrieving'] = 'Nie mog� odczyta� wiadomo�ci';
$lang['error_session_expired'] = 'Your session is expired, please login again';
$lang['error_other'] = 'B��d - prosz� skontaktowa� si� z administratorem';

// Invalid name of mailbox
$lang['error_invalid_name'] = 'Z�a nazwa - u�ywaj tylko takich znak�w: A-Z, 0-9, .-';

// Validations when sending mails
$lang['error_no_recipients'] = 'Musisz poda� odbiorc� poczty';
$lang['error_compose_invalid_mail1_s'] = 'Podany adres e-mail jest nieprawid�owy!';
$lang['error_compose_invalid_mail1_p'] = 'Podane adresy e-mail s� nieprawid�owe!';
$lang['error_compose_invalid_mail2_s'] = 'Zanim wyslesz wiadomodc,\rupewnij sie czy wszelkie dane sa prawidlowe. ';
$lang['error_compose_invalid_mail2_p'] = 'Zanim wyslesz wiadomo�ci, \rupewnij sie czy wszelkie dane sa prawidlowe.';

// Confirmation of delete
$lang['confirm_delete'] = 'Czy jeste� pewien �e chcesz skasowa� t� wiadomo��?';

// If the message no have a subject or sender
$lang['no_subject_text'] = '[Bez tytu�u]';
$lang['no_sender_text'] = '[Nadawca nieznany]';
$lang['no_recipient_text'] = '[Odbiorca nieznany]';

// If the quota limit was exceeded
$lang['quota_exceeded'] = 'Tw�j limit dyskowy zosta� przekroczony.\rProsz� skasuj stare wiadomo�ci i spr�buj ponownie';
$lang['quota_usage_info'] = 'Limit dyskowy';
$lang['quota_usage_used'] = 'Zaj�te';
$lang['quota_usage_of'] = 'z';
$lang['quota_usage_avail'] = 'dost�pnych';

//
// Date Format
// %d = day, %m = month, %y = year, %H = hour, %M = minutes
// for a complete list, see http://www.php.net/strftime
//
$lang['date_format'] = '%d/%m/%y %H:%M';

// CharSet
$lang['default_char_set'] = 'iso-8859-2';

// Menu
$lang['messages_mnu'] = 'Wiadomo�ci';
$lang['read_menu'] = 'Read E-Mail(s)'; // need translation
$lang['compose_mnu'] = 'Komponuj';
$lang['refresh_mnu'] = 'Od�wie�';
$lang['folders_mnu'] = 'Foldery';
$lang['search_mnu'] = 'Szukaj';
$lang['address_mnu'] = 'Adresy';
$lang['empty_trash_mnu'] = 'Opr�nij Kosz';
$lang['prefs_mnu'] = 'Preferencje';
$lang['logoff_mnu'] = 'Wyloguj';

// Reply
$lang['reply_prefix'] = 'Odp:';
$lang['forward_prefix'] = 'Fw:';
$lang['reply_delimiter'] = '--------- Wiadomo�� oryginalna --------';
$lang['reply_from_hea'] = 'Od:';
$lang['reply_to_hea'] = 'Do:';
$lang['reply_cc_hea'] = 'Cc:';
$lang['reply_date_hea'] = 'Data:';
$lang['reply_subject_hea'] = 'Temat:';
// done


// page-specific vars

// [Headers]
$lang['key_hea'] = 'Typ';
$lang['value_hea'] = 'Waro��';

// [Folders]
$lang['fld_name_hea'] = 'Folder';
$lang['fld_messages_hea'] = 'Wiadomo�ci';
$lang['fld_size_hea'] = 'Rozmiar';
$lang['fld_empty_hea'] = 'Opr�nij';
$lang['fld_delete_hea'] = 'Usu�';
$lang['fld_total'] = 'Wszystkie:';
$lang['fld_make_new'] = 'Utw�rz nowy folder';
$lang['folders_to'] = 'Foldery dla';

// [MessageList]
$lang['messages_to'] = 'Wiadomo�ci dla ';
$lang['no_messages'] = 'Brak wiadomo�ci w folderze';
$lang['delete_selected_mnu'] = 'Usu� zaznaczone';
$lang['move_selected_mnu'] = 'Przenie� zaznaczone do';
$lang['mark_selected_mnu'] = 'Mark as read';
$lang['unmark_selected_mnu'] = 'Mark as unread';
$lang['move_selected_to_trash_mnu'] = 'Move to Trash'; // need translation


$lang['delete_mnu'] = 'Usu�';
$lang['move_mnu'] = 'Przenie� do';
$lang['subject_hea'] = 'Temat:';
$lang['from_hea'] = 'Od:';
$lang['to_hea'] = 'Do:';
$lang['date_hea'] = 'Data:';
$lang['size_hea'] = 'Rozmiar';
$lang['have_spam'] = 'You have Spam (check Spam folder)';

$lang['msg_you_have'] = 'Masz';
$lang['msg_message'] = 'wiadomo��';
$lang['msg_messages'] = 'wiadomo�ci';

$lang['msg_more_unread'] = 'nieprzeczytane';
$lang['msg_one_unread'] = 'nieprzeczytan�';
$lang['msg_none_unread'] = 'wszystkie przeczytane';
$lang['msg_in_the_folder'] = 'w folderze';


// [Login]
$lang['lgn_title'] = 'Logowanie';
$lang['lgn_welcome_msg'] = 'Informacje Logowania';
$lang['lng_user_email'] = 'E-mail';
$lang['lng_user_name'] = 'Login';
$lang['lng_user_pwd'] = 'Has�o';
$lang['lng_server'] = 'Server'; // need translation
$lang['lng_theme'] = 'Wygl�d';
$lang['lng_language'] = 'J�zyk';
$lang['lng_login_btn'] = 'Zaloguj &gt;&gt;';
$lang['lng_cookie_not_enabled'] = 'Cookies must be enabled';
$lang['lng_cookie_not_valid'] = 'Cookie Security Check Failed';

// [Newmessage]

$lang['newmsg_title'] = 'Compose mail';

$lang['to_hea'] = 'Do:';
$lang['cc_hea'] = 'Cc:';
$lang['bcc_hea'] = 'Bcc:';
$lang['subject_hea'] = 'Temat:';
$lang['address_tip'] = 'Wybierz';

$lang['attach_hea'] = 'Za��czniki:';
$lang['attch_add_new'] = 'Dodaj nowy za��cznik';
$lang['attch_name_hea'] = 'Nazwa';
$lang['attch_size'] = 'Rozmiar';
$lang['attch_type_hea'] = 'Typ';
$lang['attch_dele_hea'] = 'Usu�';
$lang['attch_no_hea'] = 'Nie ma za��cznik�w';

$lang['add_signature'] = 'Dodaj sygnatur�';
$lang['send_text'] = 'Wy�lij';

$lang['result_error'] = 'Wys�anie wiadomo�ci by�o niemo�liwe!';
$lang['result_success'] = 'Wiadomo�� zosta�a wys�ana';
$lang['nav_continue'] = 'Dalej';
$lang['nav_back'] = 'Powr�t';

$lang['up_title'] = 'Dodawanie za��cznik�w';
$lang['up_information_text'] = 'Wybierz plik';
$lang['up_button_text'] = 'Dodaj';

$lang['require_receipt'] = 'Return receipt';

$lang['priority_text'] = 'Priorytet';
$lang['priority_low'] = 'Niski';
$lang['priority_normal'] = '�redni';
$lang['priority_high'] = 'Wysoki';

// [Preferences]
$lang['prf_title'] = 'Preferencje';
$lang['prf_general_title'] = 'Informacje podstawowe';
$lang['prf_name'] = 'Nazwa';
$lang['prf_reply_to'] = 'Adres zwrotny';
$lang['prf_time_zone'] = 'Strefa czasowa';
$lang['prf_trash_title'] = 'Kosz';
$lang['prf_save_to_trash'] = 'Przenie� <b>usuni�te</b> wiadomo�ci do foldera';
$lang['prf_save_only_read'] = 'Zapisuj tylko <b>przeczytane</b> wiadomo�ci w folderze';
$lang['prf_empty_on_exit'] = '<b>Opr�nij</b> kosz przy wyj�ciu';
$lang['prf_empty_spam_on_exit'] = '<b>Empty</b> Spam folder when you logout';
$lang['prf_unmark_read_on_exit'] = 'Reset READ messages as UNREAD when you logout';
$lang['prf_sent_title'] = 'Wys�ane wiadomo�ci';
$lang['prf_save_sent'] = 'Zapisz <b>wys�ane</b> wiadomo�ci w folderze ';
$lang['prf_messages_title'] = 'Wiadomo�ci';
$lang['prf_page_limit'] = 'Liczba wiadomo�ci na stronie';
$lang['prf_signature_title'] = 'Sygnatura';
$lang['prf_signature'] = 'Sygnatura';
$lang['prf_auto_add_sign'] = 'Dodawaj sygnatur� do wszystkich wysy�anych wiadomo�ci ';
$lang['prf_save_button'] = 'Zapisz';
$lang['prf_display_images'] = 'Pokazuj za��czone obrazki';
$lang['prf_default_editor_mode'] = 'Domy�lny tryb edycji';
$lang['prf_default_editor_mode_text'] = '"Tryb tekstowy"';
$lang['prf_default_editor_mode_html'] = '"Edytor HTML (Tylko dla przegl�darek IE5 lub nowszych)"';
$lang['prf_time_to_refesh'] = 'Cz�stotliwo�� od�wierzania wiadomo�ci (w minutach)';
$lang['prf_spam_level'] = 'SPAM sensitivity (0 = Disabled, 1 = Very High, 9 = Very Low)';
$lang['prf_auto_require_receipt'] = 'Require read receipt by default';

$lang['prf_msg_saved'] = 'Preferences saved';

// filters
$lang['filter_title'] = 'Filters';

$lang['filter_new'] = 'Create a filter';
$lang['filter_desc'] = 'Choose the search criteria and the action for the incoming messages';
$lang['filter_list'] = 'Current filters';

$lang['filter_field_from'] = 'From';
$lang['filter_field_to'] = 'To';
$lang['filter_field_subject'] = 'Subject';
$lang['filter_field_header'] = 'Header';
$lang['filter_field_body'] = 'Body';

$lang['filter_type_move'] = 'Move';
$lang['filter_type_delete'] = 'Delete';
$lang['filter_type_mark'] = 'Mark read';

$lang['filter_add'] = 'Add filter';
$lang['filter_delete'] = 'Delete';
$lang['filter_delete_selected'] = 'Delete selected filters';

$lang['filter_field'] = 'Filter on field';
$lang['filter_match'] = 'Search for';
$lang['filter_type'] = 'Action';
$lang['filter_folder'] = 'Destination folder';

$lang['filter_msg_nofilters'] = 'No filters available.';
$lang['filter_msg_added'] = 'Filter added';
$lang['filter_msg_deleted'] = 'Filter deleted';


// [Catch]
$lang['ctc_title'] = 'Dodaj adres';
$lang['ctc_information'] = 'Wy�wietlane s� wy��cznie kontakty, kt�re znajduj� si� w ki��ce adresowej';
$lang['ctc_name'] = 'Nazwa';
$lang['ctc_email'] = 'E-mail';
$lang['ctc_no_address'] = 'Brak kontakt�w w ksi��ce adresowej';
$lang['ctc_close'] = 'Zamknij';
$lang['ctc_save'] = 'Zapisz';

// [Readmsg]
$lang['next_mnu'] = 'Nast�pna';
$lang['previous_mnu'] = 'Poprzednia';
$lang['back_mnu'] = 'Powr�t';
$lang['reply_mnu'] = 'Odpowiedz';
$lang['reply_all_mnu'] = 'Odpowiedz wszystkim';
$lang['forward_mnu'] = 'Prze�lij dalej';
$lang['headers_mnu'] = 'Nag��wki';
$lang['move_mnu'] = 'Przenie� do';
$lang['move_to_trash_mnu'] = 'Move to Trash'; // need translation
$lang['delete_mnu'] = 'Usu�';
$lang['print_mnu'] = 'Drukuj';
$lang['download_mnu'] = 'Download';

$lang['from_hea'] = 'Od:';
$lang['to_hea'] = 'Do:';
$lang['cc_hea'] = 'Cc:';
$lang['date_hea'] = 'Data:';
$lang['subject_hea'] = 'Temat:';
$lang['attach_hea'] = 'Za��czniki:';

$lang['attch_name_hea'] = 'Nazwa';
$lang['attch_force_hea'] = 'Pobierz';
$lang['attch_type_hea'] = 'Typ';
$lang['attch_size_hea'] = 'Rozmiar';
$lang['catch_address'] = 'Dodaj do ksi��ki adresowej';
$lang['block_address'] = 'Block address'; // need translation

// [Search]
$lang['sch_title'] = 'Search';
$lang['sch_information_text'] = 'Podaj fraz� lub s�owo, kt�rego szukasz.<br> Przeszukiwane b�d� wy��cznie przeczytane wiadomo�ci. ';
$lang['sch_button_text'] = 'Szukaj &gt;&gt;';
$lang['sch_subject_hea'] = 'Temat';
$lang['sch_from_hea'] = 'Od';
$lang['sch_date_hea'] = 'Data';
$lang['sch_body_hea'] = 'Tre��';
$lang['sch_folder_hea'] = 'Folder';
$lang['sch_no_results'] = 'Nie znaleziono �adnych wiadomo�ci';

// [QuickAddress]
$lang['qad_title'] = 'Ksi��ka adresowa';
$lang['qad_select_address'] = 'Wybierz adres';
$lang['qad_to'] = 'Do';
$lang['qad_cc'] = 'Cc';
$lang['qad_bcc'] = 'Bcc';

// [AddressBook]
// edit/display
$lang['adr_title'] = 'Ksi��ka adresowa';
$lang['adr_name'] = 'Nazwa';
$lang['adr_email'] = 'E-mail';
$lang['adr_street'] = 'Ulica';
$lang['adr_city'] = 'Miasto';
$lang['adr_state'] = 'Wojew�dztwo';
$lang['adr_work'] = 'Praca';
$lang['adr_back'] = 'Powr�t';
$lang['adr_save'] = 'Zapisz';
$lang['adr_phone'] = 'Phone';
$lang['adr_cell'] = 'Cell';
$lang['adr_note'] = 'Notes';

// list
$lang['adr_name_hea'] = 'Nazwa';
$lang['adr_email_hea'] = 'E-mail';
$lang['adr_edit_hea'] = 'Edytuj';
$lang['adr_expo_hea'] = 'Eksportuj';
$lang['adr_dele_hea'] = 'Usu�';
$lang['adr_new_entry'] = 'Nowy kontakt';

$lang['addr_saved'] = 'Adres zosta� zapisany';
$lang['addr_added'] = 'Adres zosta� dodany';
$lang['addr_deleted'] = 'Adres zosta� usuni�ty';


// [BlockSender]
$lang['blk_title'] = 'Block sender'; // need translation
$lang['blk_information'] = 'Only shows e-mails that are not in the filter yet'; // need translation
$lang['blk_email'] = 'E-mail'; // need translation
$lang['blk_no_address'] = 'No address available'; // need translation
$lang['blk_close'] = 'Close'; // need translation
$lang['blk_save'] = 'Save'; // need translation

// [Event]
$lang['evt_title'] = 'Calendar Event';
$lang['evt_save'] = 'Zapisz';
$lang['evt_delete'] = 'Usu�';
$lang['evt_stop'] = 'Stop time';
$lang['evt_start'] = 'Start time';

