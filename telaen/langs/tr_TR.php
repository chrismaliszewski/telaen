<?php
/*
 * US English (canonical list and phrasing)
 */

$lang = array();

// User-friendly names to system folders
$lang['inbox_extended'] = 'Gelen Kutusu';
$lang['sent_extended'] = 'G�nderilmi� ��eler';
$lang['trash_extended'] = '��p Kutusu';
$lang['spam_extended'] = 'Spam folder';

// Navigation texts
$lang['pages_text'] = 'Pages';
$lang['first_text'] = 'First';
$lang['previous_text'] = '�nceki';
$lang['next_text'] = 'Sonraki';
$lang['last_text'] = 'Last';
$lang['total_text'] = 'Total';

// Mail Server Errors
$lang['err_login_msg'] = 'Login error';
$lang['err_system_msg'] = 'System error';
$lang['error_login'] = 'Please check your username or password and try again';
$lang['error_connect'] = 'Sunucuya ba�lanamad�.';
$lang['error_retrieving'] = 'Mesajlar�n�z� al�rken bir hata olu�tu. Gelen Kutusunun yeri de�i�mi�.';
$lang['error_session_expired'] = 'Your session is expired, please login again';
$lang['error_other'] = 'Sistem hatas�! Sistem y�neticisiyle irtibata ge�in.';

// Invalid name of mailbox
$lang['error_invalid_name'] = 'Ge�ersiz klas�r ad� - L�tfen sadece A-Z, 0-9, .- ve bo�luk karakterini kullan�n.';

// Validations when sending mails
$lang['error_no_recipients'] = 'L�tfen ge�erli bir e-posta adresleri girin';
$lang['error_compose_invalid_mail1_s'] = 'E-posta adresi ge�ersiz g�z�k�yor';
$lang['error_compose_invalid_mail1_p'] = 'Belirtilen e-posta adresleri ge�ersiz g�z�k�yor';
$lang['error_compose_invalid_mail2_s'] = 'G�nderilmeden �nce kontrol edilecek';
$lang['error_compose_invalid_mail2_p'] = 'G�nderilmeden �nce kontrol edilecekler';

// Confirmation of delete
$lang['confirm_delete'] = 'Bu mesaj� silmek istedi�inize emin misiniz?';

// If the message no have a subject or sender
$lang['no_subject_text'] = '[konusuz]';
$lang['no_sender_text'] = '[g�nderen bilinmiyor]';
$lang['no_recipient_text'] = '[al�c� bilinmiyor]';

// If the quota limit was exceeded
$lang['quota_exceeded'] = 'Bu i�lemi tamamlayabilmeniz i�in gerekli yer mevcut de�il\L�tfen baz� devam etmek i�in baz� mesajlar�n�z� silin';
$lang['quota_usage_info'] = 'Limit';
$lang['quota_usage_used'] = 'quota_usage_of					= /';
$lang['quota_usage_of'] = 'of';
$lang['quota_usage_avail'] = 'kullan�mda.';

//
// Date Format
// %d = day, %m = month, %y = year, %H = hour, %M = minutes
// for a complete list, see http://www.php.net/strftime
//
$lang['date_format'] = '%d-%m-%y %H:%M';

// CharSet
$lang['default_char_set'] = 'iso-8859-9';

// Menu
$lang['messages_mnu'] = 'Gelen Kutusu';
$lang['read_menu'] = 'Read E-Mail(s)';
$lang['compose_mnu'] = 'Yaz';
$lang['refresh_mnu'] = 'Yenile';
$lang['folders_mnu'] = 'Klas�rler';
$lang['search_mnu'] = 'Arama';
$lang['address_mnu'] = 'Adres defteri';
$lang['empty_trash_mnu'] = '��p� bo�alt';
$lang['prefs_mnu'] = 'Ayarlar';
$lang['logoff_mnu'] = '��k��';

// Reply
$lang['reply_prefix'] = 'Rv:';
$lang['forward_prefix'] = 'Fw:';
$lang['reply_delimiter'] = '---------  Orjinal mesaj --------';
$lang['reply_from_hea'] = 'Kimden:';
$lang['reply_to_hea'] = 'Kime:';
$lang['reply_cc_hea'] = 'CC:';
$lang['reply_date_hea'] = 'Tarih:';
$lang['reply_subject_hea'] = 'Konu:';
// done


// page-specific vars

// [Headers]
$lang['key_hea'] = 'Anahtar';
$lang['value_hea'] = 'De�er';

// [Folders]
$lang['fld_name_hea'] = 'Klas�rler';
$lang['fld_messages_hea'] = 'Mesajlar';
$lang['fld_size_hea'] = 'Boyut';
$lang['fld_empty_hea'] = 'Bo�alt';
$lang['fld_delete_hea'] = 'Sil';
$lang['fld_total'] = 'Toplam:';
$lang['fld_make_new'] = 'Yeni klas�r';
$lang['folders_to'] = 'Klas�rler:';

// [MessageList]
$lang['messages_to'] = 'no_messages				= Yeni mesaj�n�z yok. Klas�r:  ';
$lang['no_messages'] = 'No new messages in your '; // FIXME: need translation
$lang['delete_selected_mnu'] = '��aretlileri sil';
$lang['move_selected_mnu'] = '��aretlileri ta��: ';
$lang['mark_selected_mnu'] = 'Mark as read'; // FIXME: need translation
$lang['unmark_selected_mnu'] = 'Mark as unread'; // FIXME: need translation
$lang['move_selected_to_trash_mnu'] = 'Move selected to Trash'; // FIXME: need translation


$lang['delete_mnu'] = 'Sil';
$lang['move_mnu'] = 'Ta��:';
$lang['subject_hea'] = 'Konu:';
$lang['from_hea'] = 'Kimden:';
$lang['to_hea'] = 'Kime:';
$lang['date_hea'] = 'Tarih:';
$lang['size_hea'] = 'Boyut';
$lang['have_spam'] = 'You have Spam (check Spam folder)';

$lang['msg_you_have'] = 'msg_message					= mesaj�n�z var';
$lang['msg_message'] = 'message';
$lang['msg_messages'] = 'mesaj�n�z var';

$lang['msg_more_unread'] = 'tanesi okunmam��.';
$lang['msg_one_unread'] = 'tanesi okunmam��.';
$lang['msg_none_unread'] = 'Hepsi okunmu�.';
$lang['msg_in_the_folder'] = 'Klas�r: ';


// [Login]
$lang['lgn_title'] = 'Giri�';
$lang['lgn_welcome_msg'] = 'Ho� geldiniz, l�tfen hesab�n�za giri� yap�n';
$lang['lng_user_email'] = 'E-posta';
$lang['lng_user_name'] = 'Kullan�c� ad�';
$lang['lng_user_pwd'] = '�ifre';
$lang['lng_server'] = 'Server';
$lang['lng_theme'] = 'Tema';
$lang['lng_language'] = 'Language';
$lang['lng_login_btn'] = 'Giri� &gt;&gt;';
$lang['lng_cookie_not_enabled'] = 'Cookies must be enabled'; // FIXME: need translation
$lang['lng_cookie_not_valid'] = 'Cookie Security Check Failed';

// [Newmessage]

$lang['newmsg_title'] = 'Compose mail'; // FIXME: need translation

$lang['to_hea'] = 'Kime:';
$lang['cc_hea'] = 'Cc:';
$lang['bcc_hea'] = 'Bcc:';
$lang['subject_hea'] = 'Konu:';
$lang['address_tip'] = 'Adres defterinden';

$lang['attach_hea'] = 'Ekler:';
$lang['attch_add_new'] = 'Dosya ekle';
$lang['attch_name_hea'] = 'Ad';
$lang['attch_size'] = 'Boyut';
$lang['attch_type_hea'] = 'T�r';
$lang['attch_dele_hea'] = 'Sil';
$lang['attch_no_hea'] = 'Hi� dosya eklenmemi�!';

$lang['add_signature'] = '�mza ekle';
$lang['send_text'] = 'G�nder';

$lang['result_error'] = 'Hata, e-postan�z g�nderilemedi';
$lang['result_success'] = 'E-posta ba�ar�yla g�nderildi';
$lang['nav_continue'] = 'Devam';
$lang['nav_back'] = 'Geri';

$lang['up_title'] = 'Dosya ekle';
$lang['up_information_text'] = 'Dosya se�';
$lang['up_button_text'] = 'G�nder';

$lang['require_receipt'] = 'Return receipt'; // FIXME: need translation

$lang['priority_text'] = 'Periyot';
$lang['priority_low'] = 'D���k';
$lang['priority_normal'] = 'Normal';
$lang['priority_high'] = 'Y�ksek';

// [Preferences]
$lang['prf_title'] = 'Ayarlar';
$lang['prf_general_title'] = 'Genel bilgiler';
$lang['prf_name'] = 'Ad Soyad';
$lang['prf_reply_to'] = 'Cevapla adresi';
$lang['prf_time_zone'] = 'Zaman ku�a��';
$lang['prf_trash_title'] = '��p';
$lang['prf_save_to_trash'] = 'Bir mesaj <b>silince</b> ta��naca�� klas�r:';
$lang['prf_save_only_read'] = 'Sadece <b>okunmu� mesajlar�n</b> kay�t edilece�i klas�r:';
$lang['prf_empty_on_exit'] = '��k�� yapt���m zaman ��p kutusunuz <b>temizle</b>';
$lang['prf_empty_spam_on_exit'] = '<b>Empty</b> Spam folder when you logout';
$lang['prf_unmark_read_on_exit'] = 'Reset READ messages as UNREAD when you logout';
$lang['prf_sent_title'] = 'G�nderilmi� ��eler';
$lang['prf_save_sent'] = '<b>G�nderilmi� mesajlar�n</b> kay�t edilece�i klas�r: ';
$lang['prf_messages_title'] = 'Mesajlar';
$lang['prf_page_limit'] = 'Bir sayfada g�sterilcek mesaj say�s�';
$lang['prf_signature_title'] = '�mza';
$lang['prf_signature'] = '�mzan�z';
$lang['prf_auto_add_sign'] = 'T�m giden mesajlara imzam� ekle';
$lang['prf_save_button'] = 'Kaydet';
$lang['prf_display_images'] = 'Ekli resimleri g�ster';
$lang['prf_default_editor_mode'] = 'Normal edition mode'; // FIXME: need translation
$lang['prf_default_editor_mode_text'] = '"D�z Metin"';
$lang['prf_default_editor_mode_html'] = '"Geli�mi� HTML edit�r�"';
$lang['prf_time_to_refesh'] = 'Mesajlar�n yenilenme zaman� (dakika)';
$lang['prf_spam_level'] = 'SPAM sensitivity (0 = Disabled, 1 = Very High, 9 = Very Low)'; // FIXME: need translation
$lang['prf_auto_require_receipt'] = 'Require read receipt by default'; // FIXME: need translation

$lang['prf_msg_saved'] = 'Preferences saved'; // FIXME: need translation

// filters
$lang['filter_title'] = 'Filters'; // FIXME: need translation

$lang['filter_new'] = 'Create a filter'; // FIXME: need translation
$lang['filter_desc'] = 'Choose the search criteria and the action for the incoming messages'; // FIXME: need translation
$lang['filter_list'] = 'Current filters'; // FIXME: need translation

$lang['filter_field_from'] = 'From'; // FIXME: need translation
$lang['filter_field_to'] = 'To'; // FIXME: need translation
$lang['filter_field_subject'] = 'Subject'; // FIXME: need translation
$lang['filter_field_header'] = 'Header'; // FIXME: need translation
$lang['filter_field_body'] = 'Body'; // FIXME: need translation

$lang['filter_type_move'] = 'Move'; // FIXME: need translation
$lang['filter_type_delete'] = 'Delete'; // FIXME: need translation
$lang['filter_type_mark'] = 'Mark read'; // FIXME: need translation

$lang['filter_add'] = 'Add filter'; // FIXME: need translation
$lang['filter_delete'] = 'Delete'; // FIXME: need translation
$lang['filter_delete_selected'] = 'Delete selected filters'; // FIXME: need translation

$lang['filter_field'] = 'Filter on field'; // FIXME: need translation
$lang['filter_match'] = 'Search for'; // FIXME: need translation
$lang['filter_type'] = 'Action'; // FIXME: need tra // FIXME: need translationnslation
$lang['filter_folder'] = 'Destination folder';

$lang['filter_msg_nofilters'] = 'No filters available.'; // FIXME: need translation
$lang['filter_msg_added'] = 'Filter added'; // FIXME: need translation
$lang['filter_msg_deleted'] = 'Filter deleted'; // FIXME: need translation


// [Catch]
$lang['ctc_title'] = 'Adresleri yakala';
$lang['ctc_information'] = 'Sadece adres defterinizde kay�tl� olmayan adresler yakalanacak.';
$lang['ctc_name'] = 'Ad Soyad';
$lang['ctc_email'] = 'E-posta';
$lang['ctc_no_address'] = 'Hi�bir adres ge�erli de�il';
$lang['ctc_close'] = 'Kapat';
$lang['ctc_save'] = 'Kaydet';

// [Readmsg]
$lang['next_mnu'] = 'Sonraki';
$lang['previous_mnu'] = '�nceki';
$lang['back_mnu'] = 'Geri';
$lang['reply_mnu'] = 'Cevapla';
$lang['reply_all_mnu'] = 'Hepsini cevapla';
$lang['forward_mnu'] = 'Y�nlendir';
$lang['headers_mnu'] = 'Ba�l�klar';
$lang['move_mnu'] = 'Ta��:';
$lang['move_to_trash_mnu'] = 'Move to Trash'; // FIXME: need translation
$lang['delete_mnu'] = 'Sil';
$lang['print_mnu'] = 'Yazd�r';
$lang['download_mnu'] = 'Download';

$lang['from_hea'] = 'Kimden:';
$lang['to_hea'] = 'Kime:';
$lang['cc_hea'] = 'Cc:';
$lang['date_hea'] = 'Tarih:';
$lang['subject_hea'] = 'Konu:';
$lang['attach_hea'] = 'Ekler:';

$lang['attch_name_hea'] = 'Ad';
$lang['attch_force_hea'] = '�ndir';
$lang['attch_type_hea'] = 'T�r';
$lang['attch_size_hea'] = 'Boyut';
$lang['catch_address'] = 'Adres defterine ekle';
$lang['block_address'] = 'Block address'; // FIXME: need translation

// [Search]
$lang['sch_title'] = 'Search';
$lang['sch_information_text'] = 'L�tfen bir s�zc�k veya s�zc�k grubu girin! <br> Sadece lokal klas�rlerdeki mesajlar ve okunmu� mesajlar taranacak.';
$lang['sch_button_text'] = 'Ara &gt;&gt;';
$lang['sch_subject_hea'] = 'Konu';
$lang['sch_from_hea'] = 'Kimden';
$lang['sch_date_hea'] = 'Tarih';
$lang['sch_body_hea'] = 'Mesaj';
$lang['sch_folder_hea'] = 'Klas�r';
$lang['sch_no_results'] = 'Hi�bir �ey bulunamad�';

// [QuickAddress]
$lang['qad_title'] = 'Adres defteri';
$lang['qad_select_address'] = 'Ba�lant� se�in';
$lang['qad_to'] = 'Kime';
$lang['qad_cc'] = 'Cc';
$lang['qad_bcc'] = 'Bcc';

// [AddressBook]
// edit/display
$lang['adr_title'] = 'Adres defteri';
$lang['adr_name'] = 'Ad Soyad';
$lang['adr_email'] = 'E-posta';
$lang['adr_street'] = 'Sokak';
$lang['adr_city'] = '�ehir';
$lang['adr_state'] = 'Eyalet';
$lang['adr_work'] = '��';
$lang['adr_back'] = 'Geri';
$lang['adr_save'] = 'Kaydet';
$lang['adr_phone'] = 'Phone'; // FIXME: need translation
$lang['adr_cell'] = 'Cell'; // FIXME: need translation
$lang['adr_note'] = 'Notes'; // FIXME: need translation

// list
$lang['adr_name_hea'] = 'Ad Soyad';
$lang['adr_email_hea'] = 'E-posta';
$lang['adr_edit_hea'] = 'D�zenle';
$lang['adr_expo_hea'] = 'Export'; // FIXME: need translation
$lang['adr_dele_hea'] = 'Sil';
$lang['adr_new_entry'] = 'Yeni Giri�';

$lang['addr_saved'] = 'Ba�lant� kay�t edildi';
$lang['addr_added'] = 'Ba�lant� eklendi';
$lang['addr_deleted'] = 'Bu ba�lant� ortadan kald�r�ld�';


// [BlockSender]
$lang['blk_title'] = 'Block sender';
$lang['blk_information'] = 'Only shows e-mails that are not in the filter yet';
$lang['blk_email'] = 'E-mail';
$lang['blk_no_address'] = 'No address available';
$lang['blk_close'] = 'Close';
$lang['blk_save'] = 'Save';

// [Event]
$lang['evt_title'] = 'Calendar Event'; // FIXME: need translation
$lang['evt_save'] = 'Kaydet';
$lang['evt_delete'] = 'Sil';
$lang['evt_stop'] = 'Stop time'; // FIXME: need translation
$lang['evt_start'] = 'Start time'; // FIXME: need translation

