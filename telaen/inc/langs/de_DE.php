<?php
/*
 * US English (canonical list and phrasing)
 */

$lang = array();

// User-friendly names to system folders
$lang['inbox_extended'] = 'Posteingang';
$lang['sent_extended'] = 'Gesendete Objekte';
$lang['trash_extended'] = 'Gel�schte Objekte';
$lang['spam_extended'] = 'Spam E-Mail';

// Navigation texts
$lang['pages_text'] = 'Seiten';
$lang['first_text'] = 'Erste';
$lang['previous_text'] = 'N�chste Nachricht';
$lang['next_text'] = 'Vorherige Nachricht';
$lang['last_text'] = 'Letzte';
$lang['total_text'] = 'Total';

// Mail Server Errors
$lang['err_login_msg'] = 'Anmeldungsfehler';
$lang['err_system_msg'] = 'Systemfehler';
$lang['error_login'] = 'Bitte pr�fen Sie ihren Benutzernamen und das Kennwort und versuchen Sie es erneut';
$lang['error_connect'] = 'Error connecting to the server';
$lang['error_retrieving'] = 'Konnte Ihre Nachrichten nicht abrufen!';
$lang['error_session_expired'] = 'Ihre Sitzung ist abgelaufen, bitte melden Sie sich erneut an';
$lang['error_other'] = 'Bitte kontaktieren Sie den Administrator';

// Invalid name of mailbox
$lang['error_invalid_name'] = 'Ung�ltiger Ordnername. G�ltige Zeichen sind: A-Z, 0-9, .- und oder Leerzeichen';

// Validations when sending mails
$lang['error_no_recipients'] = 'Bitte mindestens eine Empf�ngeradresse angeben';
$lang['error_compose_invalid_mail1_s'] = 'Diese E-Mail scheint fehlerhaft zu sein';
$lang['error_compose_invalid_mail1_p'] = 'Die folgenden E-Mails scheinen fehlerhaft zu sein';
$lang['error_compose_invalid_mail2_s'] = 'FEHLER!';
$lang['error_compose_invalid_mail2_p'] = 'FEHLER!';

// Confirmation of delete
$lang['confirm_delete'] = 'M�chten Sie diese Nachricht wirklich l�schen?';

// If the message no have a subject or sender
$lang['no_subject_text'] = '[Kein Betreff]';
$lang['no_sender_text'] = '[Absender unbekannt]';
$lang['no_recipient_text'] = '[Empf�nger unbekannt]';

// If the quota limit was exceeded
$lang['quota_exceeded'] = 'Leider ist Ihr Speicherplatz ersch�pft. Bitte l�schen Sie nicht ben�tigte E-Mails, bevor Sie fortfahren.';
$lang['quota_usage_info'] = 'Speicherlimit';
$lang['quota_usage_used'] = 'verwendet';
$lang['quota_usage_of'] = 'von';
$lang['quota_usage_avail'] = 'verf�gbar';

//
// Date Format
// %d = day, %m = month, %y = year, %H = hour, %M = minutes
// for a complete list, see http://www.php.net/strftime
//
$lang['date_format'] = '%d.%m.%Y - %H:%M';

// CharSet
$lang['default_char_set'] = 'iso-8859-1';

// Menu
$lang['messages_mnu'] = 'Posteingang';
$lang['read_menu'] = 'Read E-Mail(s)';
$lang['compose_mnu'] = 'Neu';
$lang['refresh_mnu'] = 'Aktualisieren';
$lang['folders_mnu'] = 'Ordner';
$lang['search_mnu'] = 'Suchen';
$lang['address_mnu'] = 'Kontakte';
$lang['empty_trash_mnu'] = 'Gel�schte Objekte leeren';
$lang['prefs_mnu'] = 'Einstellungen';
$lang['logoff_mnu'] = 'Abmelden';

// Reply
$lang['reply_prefix'] = 'AW:';
$lang['forward_prefix'] = 'WG:';
$lang['reply_delimiter'] = '--------- Original-Nachricht --------';
$lang['reply_from_hea'] = 'Von:';
$lang['reply_to_hea'] = 'An:';
$lang['reply_cc_hea'] = 'Cc:';
$lang['reply_date_hea'] = 'Datum:';
$lang['reply_subject_hea'] = 'Betreff:';
// done


// page-specific vars

// [Headers]
$lang['key_hea'] = 'Schl�ssel';
$lang['value_hea'] = 'Wert';

// [Folders]
$lang['fld_name_hea'] = 'Ordner';
$lang['fld_messages_hea'] = 'Nachrichten';
$lang['fld_size_hea'] = 'Gr��e';
$lang['fld_empty_hea'] = 'Leeren';
$lang['fld_delete_hea'] = 'L�schen';
$lang['fld_total'] = 'Gesamt:';
$lang['fld_make_new'] = 'Neuen Ordner erstellen';
$lang['folders_to'] = 'Ordner von';

// [MessageList]
$lang['messages_to'] = 'Nachrichten von';
$lang['no_messages'] = 'Es sind keine neuen Nachrichten in ihrem Ordner';
$lang['delete_selected_mnu'] = 'Markierte l�schen';
$lang['move_selected_mnu'] = 'Markierte verschieben';
$lang['mark_selected_mnu'] = 'Markiere als gelesen';
$lang['unmark_selected_mnu'] = 'Markiere als ungelesen';
$lang['move_selected_to_trash_mnu'] = 'Move to Trash';


$lang['delete_mnu'] = 'Entfernen';
$lang['move_mnu'] = 'Verschieben';
$lang['subject_hea'] = 'Betreff:';
$lang['from_hea'] = 'Von:';
$lang['to_hea'] = 'An:';
$lang['date_hea'] = 'Datum:';
$lang['size_hea'] = 'Gr��e';
$lang['have_spam'] = 'Sie haben Spam E-Mails (Bitte den Spam E-Mail Ordner kontrollieren)';

$lang['msg_you_have'] = 'Sie haben';
$lang['msg_message'] = 'Nachricht';
$lang['msg_messages'] = 'Nachrichten';

$lang['msg_more_unread'] = 'ungelesen';
$lang['msg_one_unread'] = 'ungelesen';
$lang['msg_none_unread'] = 'keine ungelesenen';
$lang['msg_in_the_folder'] = 'im Ordner';


// [Login]
$lang['lgn_title'] = 'Anmelden';
$lang['lgn_welcome_msg'] = 'Willkommen, bitte melden Sie sich an';
$lang['lng_user_email'] = 'E-Mail';
$lang['lng_user_name'] = 'Benutzername';
$lang['lng_user_pwd'] = 'Kennwort';
$lang['lng_server'] = 'Server';
$lang['lng_theme'] = 'Thema';
$lang['lng_language'] = 'Sprache';
$lang['lng_login_btn'] = 'Anmelden &gt;&gt;';
$lang['lng_cookie_not_enabled'] = 'Cookies m�ssen aktiviert sein';
$lang['lng_cookie_not_valid'] = 'Cookie Sicherheitspr�fung fehlgeschlagen';

// [Newmessage]

$lang['newmsg_title'] = 'Neue Nachricht';

$lang['to_hea'] = 'An:';
$lang['cc_hea'] = 'Cc:';
$lang['bcc_hea'] = 'Bcc:';
$lang['subject_hea'] = 'Betreff:';
$lang['address_tip'] = 'Vom Adressbuch';

$lang['attach_hea'] = 'Dateianhang:';
$lang['attch_add_new'] = 'Datei ausw�hlen';
$lang['attch_name_hea'] = 'Name';
$lang['attch_size'] = 'Gr��e';
$lang['attch_type_hea'] = 'Typ';
$lang['attch_dele_hea'] = 'Entfernen';
$lang['attch_no_hea'] = 'Kein Dateianhang';

$lang['add_signature'] = 'Signatur hinzuf�gen';
$lang['send_text'] = 'Senden';

$lang['result_error'] = 'FEHLER: Diese E-Mail konnte nicht versandt werden.';
$lang['result_success'] = 'Ihre Nachricht wurde erfolgreich verschickt.';
$lang['nav_continue'] = 'HIER KLICKEN!';
$lang['nav_back'] = 'Zur�ck';

$lang['up_title'] = 'Datei hinzuf�gen';
$lang['up_information_text'] = 'Datei ausw�hlen';
$lang['up_button_text'] = 'Senden';

$lang['require_receipt'] = 'Empfangsbest�tigung';

$lang['priority_text'] = 'Dringlichkeit';
$lang['priority_low'] = 'Niedrig';
$lang['priority_normal'] = 'Normal';
$lang['priority_high'] = 'Hoch';

// [Preferences]
$lang['prf_title'] = 'Einstellungen';
$lang['prf_general_title'] = 'Allgemeine Einstellungen';
$lang['prf_name'] = 'Name:';
$lang['prf_reply_to'] = 'Antwortadresse:';
$lang['prf_time_zone'] = 'Zeitzone:';
$lang['prf_trash_title'] = 'Gel�schte Objekte';
$lang['prf_save_to_trash'] = 'Wenn Sie eine Nachricht l�schen, dann <b>verschiebe</b> diese Nachricht in den Ordner ';
$lang['prf_save_only_read'] = 'Nur <b>gelesene Nachrichten</b> verschieben nach Ordner';
$lang['prf_empty_on_exit'] = 'Ordner <b>Gel�schte Objekte</b>, nach dem Abmelden leeren.';
$lang['prf_empty_spam_on_exit'] = '<b>Spam E-Mail Ordner</b> nach dem Abmelden leeren.';
$lang['prf_unmark_read_on_exit'] = '<b>Gelesene Nachrichten</b> nach dem Abmelden wieder als ungelesen markieren';
$lang['prf_sent_title'] = 'Gesendete Objekte';
$lang['prf_save_sent'] = '<b>Gesendete Nachrichten</b> verschieben nach Ordner';
$lang['prf_messages_title'] = 'Nachrichten';
$lang['prf_page_limit'] = '<b>Maximal</b> angezeigte Nachrichten pro Seite';
$lang['prf_signature_title'] = 'Signatur';
$lang['prf_signature'] = 'Erstellen Sie ihren <b>Signaturtext</b>';
$lang['prf_auto_add_sign'] = 'Signatur allen ausgehenden Nachrichten einf�gen';
$lang['prf_save_button'] = 'Speichern';
$lang['prf_display_images'] = 'Angeh�ngte <b>Bilder</b> in der E-Mail anzeigen';
$lang['prf_default_editor_mode'] = 'Editiermodus f�r neue E-Mails:';
$lang['prf_default_editor_mode_text'] = '"Reiner Textmodus"';
$lang['prf_default_editor_mode_html'] = '"Erweiterter HTML Editor"';
$lang['prf_time_to_refesh'] = '<b>Posteingang</b> alle x Minuten aktualisieren';
$lang['prf_spam_level'] = '<b>Spam Schwellenwert</b> (0 = Deaktiviert, 1 = sehr hoch, 9 = sehr niedrig)';
$lang['prf_auto_require_receipt'] = '<b>Empfangsbest�tigung</b> anfordern, standardm��ig aktiviert';

$lang['prf_msg_saved'] = 'Einstellungen gespeichert';

// filters
$lang['filter_title'] = 'Nachrichtenfilter';

$lang['filter_new'] = 'Neuen Nachrichtenfilter erstellen';
$lang['filter_desc'] = 'Suchkriterien und Aktion f�r Eingehende Nachrichten w�hlen';
$lang['filter_list'] = 'Angelegte Nachrichtenfilter';

$lang['filter_field_from'] = 'Von';
$lang['filter_field_to'] = 'An';
$lang['filter_field_subject'] = 'Betreff';
$lang['filter_field_header'] = 'Header';
$lang['filter_field_body'] = 'Body';

$lang['filter_type_move'] = 'Verschieben';
$lang['filter_type_delete'] = 'L�schen';
$lang['filter_type_mark'] = 'als gelesen markieren';

$lang['filter_add'] = 'Filter hinzuf�gen';
$lang['filter_delete'] = 'L�schen';
$lang['filter_delete_selected'] = 'Markierte Filter l�schen';

$lang['filter_field'] = 'Filter anwenden auf Feld';
$lang['filter_match'] = 'Suchen nach';
$lang['filter_type'] = 'Aktion';
$lang['filter_folder'] = 'Zielordner';

$lang['filter_msg_nofilters'] = 'keine Filter vorhanden.';
$lang['filter_msg_added'] = 'Filter hinzugef�gt';
$lang['filter_msg_deleted'] = 'Filter gel�scht';


// [Catch]
$lang['ctc_title'] = 'Zum Adressbuch hinzuf�gen';
$lang['ctc_information'] = 'Nur E-Mails anzeigen, die auch im Adressbuch angelegt sind';
$lang['ctc_name'] = 'Name';
$lang['ctc_email'] = 'E-Mail';
$lang['ctc_no_address'] = 'Keine Adresse vorhanden';
$lang['ctc_close'] = 'Schlie�en';
$lang['ctc_save'] = 'Speichern';

// [Readmsg]
$lang['next_mnu'] = 'N�chste';
$lang['previous_mnu'] = 'Vorherige';
$lang['back_mnu'] = 'Zur�ck';
$lang['reply_mnu'] = 'Antworten';
$lang['reply_all_mnu'] = 'Allen antworten';
$lang['forward_mnu'] = 'Weiterleiten';
$lang['headers_mnu'] = 'E-Mail Header';
$lang['move_mnu'] = 'Verschieben';
$lang['move_to_trash_mnu'] = 'Move to Trash';
$lang['delete_mnu'] = 'Entfernen';
$lang['print_mnu'] = 'Drucken';
$lang['download_mnu'] = 'Herunterladen';

$lang['from_hea'] = 'Von:';
$lang['to_hea'] = 'An:';
$lang['cc_hea'] = 'Cc:';
$lang['date_hea'] = 'Datum:';
$lang['subject_hea'] = 'Betreff:';
$lang['attach_hea'] = 'Dateianhang:';

$lang['attch_name_hea'] = 'Name';
$lang['attch_force_hea'] = 'Herunterladen';
$lang['attch_type_hea'] = 'Typ';
$lang['attch_size_hea'] = 'Gr.';
$lang['catch_address'] = 'Zum Adressbuch hinzuf�gen';
$lang['block_address'] = 'Block address';

// [Search]
$lang['sch_title'] = 'Suchen';
$lang['sch_information_text'] = 'Bitte Suchbegriff eingeben.<br>  ';
$lang['sch_button_text'] = 'Suche &gt;&gt;';
$lang['sch_subject_hea'] = 'Betreff';
$lang['sch_from_hea'] = 'Absender';
$lang['sch_date_hea'] = 'Datum';
$lang['sch_body_hea'] = 'Im Text';
$lang['sch_folder_hea'] = 'Ordner';
$lang['sch_no_results'] = 'Es wurden keine Nachrichten gefunden, die den Suchkriterien entsprechen.';

// [QuickAddress]
$lang['qad_title'] = 'Addressbuch';
$lang['qad_select_address'] = 'Kontakt w�hlen';
$lang['qad_to'] = 'An';
$lang['qad_cc'] = 'Cc';
$lang['qad_bcc'] = 'Bcc';

// [AddressBook]
// edit/display
$lang['adr_title'] = 'Addressbuch';
$lang['adr_name'] = 'Name:';
$lang['adr_email'] = 'E-Mail:';
$lang['adr_street'] = 'Stra�e:';
$lang['adr_city'] = 'Stadt:';
$lang['adr_state'] = 'Bundesland:';
$lang['adr_work'] = 'Telefon:';
$lang['adr_back'] = 'Zur�ck';
$lang['adr_save'] = 'Speichern';
$lang['adr_phone'] = 'Telefon';
$lang['adr_cell'] = 'Cell'; // FIXME: need translation
$lang['adr_note'] = 'Anmerkung';

// list
$lang['adr_name_hea'] = 'Name';
$lang['adr_email_hea'] = 'E-Mail';
$lang['adr_edit_hea'] = 'Bearbeiten';
$lang['adr_expo_hea'] = 'Exportieren';
$lang['adr_dele_hea'] = 'Entfernen';
$lang['adr_new_entry'] = 'Neuer Kontakt';

$lang['addr_saved'] = 'Der Kontakt wurde gespeichert.';
$lang['addr_added'] = 'Der Kontakt wurde hinzugef�gt.';
$lang['addr_deleted'] = 'Der Kontakt wurde entfernt.';


// [BlockSender]
$lang['blk_title'] = 'Absender blockieren';
$lang['blk_information'] = 'Nur E-Mails anzeigen die bisher nicht gefiltert werden';
$lang['blk_email'] = 'E-Mail';
$lang['blk_no_address'] = 'Keine Adresse verf�gbar';
$lang['blk_close'] = 'Schlie�en';
$lang['blk_save'] = 'Speichern';

// [Event]
$lang['evt_title'] = 'Calendar Event'; // FIXME: need translation
$lang['evt_save'] = 'Speichern';
$lang['evt_delete'] = 'Entfernen';
$lang['evt_stop'] = 'Stop time'; // FIXME: need translation
$lang['evt_start'] = 'Start time'; // FIXME: need translation

