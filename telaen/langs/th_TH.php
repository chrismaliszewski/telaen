<?php
/*
 * US English (canonical list and phrasing)
 */

$lang = array();

// User-friendly names to system folders
$lang['inbox_extended'] = '�Ҵ���';
$lang['sent_extended'] = '�Ҵ�͡';
$lang['trash_extended'] = '�ѧ���';
$lang['spam_extended'] = '�����¢��';

// Navigation texts
$lang['pages_text'] = '˹��';
$lang['first_text'] = '˹���á';
$lang['previous_text'] = '��͹˹��';
$lang['next_text'] = '�Ѵ�';
$lang['last_text'] = '˹���ش����';
$lang['total_text'] = '������';

// Mail Server Errors
$lang['err_login_msg'] = '����������к��Դ��Ҵ';
$lang['err_system_msg'] = '�Դ�����Դ��Ҵ�ҡ�к�';
$lang['error_login'] = '��سҵ�Ǩ�礪��ͼ����������ʼ�ҹ���������ͧ�����ա����';
$lang['error_connect'] = '�������ö�Դ��͡Ѻ�к��� �ҧ��ҡ��ѧ��Ѻ��ا �к�';
$lang['error_retrieving'] = '�ջѭ�� ����Ѻ������ ������������ö�Ѻ��������';
$lang['error_session_expired'] = '��������㹡���������к��ͧ�س������� ��س��������к������ա����';
$lang['error_other'] = '�к��ջѭ�� �ҧ��ҡ��ѧ��Ѻ��ا�к�';

// Invalid name of mailbox
$lang['error_invalid_name'] = '��õ�駪������١��ͧ - �س���Ҷ�����ѡ���� �ѧ��� : �-�, A-Z, 0-9, .-';

// Validations when sending mails
$lang['error_no_recipients'] = '�س��ͧ��� mail �ͧ ����Ѻ���ҧ���� 1 ��';
$lang['error_compose_invalid_mail1_s'] = '������͹��� email �������١��ͧ';
$lang['error_compose_invalid_mail1_p'] = '����觨������١���������ö����';
$lang['error_compose_invalid_mail2_s'] = '��Ǩ�ͺ�����¹�����¡�͹��';
$lang['error_compose_invalid_mail2_p'] = '��Ǩ�ͺ�����¹�����¡�͹��';

// Confirmation of delete
$lang['confirm_delete'] = '�س��㨷���ź�����¹�� ?';

// If the message no have a subject or sender
$lang['no_subject_text'] = '������������ͧ';
$lang['no_sender_text'] = '����Һ';
$lang['no_recipient_text'] = '����ա���Ѻ�ͧ';

// If the quota limit was exceeded
$lang['quota_exceeded'] = '���ͷ��ͧ��ҹ������� \r ��س�ź���������� �͡ �����������ͷ����ҧ� �к��ͧ��ҹ';
$lang['quota_usage_info'] = '�ӡѴ���ͷ��';
$lang['quota_usage_used'] = '���';
$lang['quota_usage_of'] = '�ͧ';
$lang['quota_usage_avail'] = '���ͷ�������';

//
// Date Format
// %d = day, %m = month, %y = year, %H = hour, %M = minutes
// for a complete list, see http://www.php.net/strftime
//
$lang['date_format'] = '%d/%m/%y %H:%M';

// CharSet
$lang['default_char_set'] = 'tis-620';

// Menu
$lang['messages_mnu'] = '��ͤ���';
$lang['read_menu'] = 'Read E-Mail(s)';
$lang['compose_mnu'] = '��¹������';
$lang['refresh_mnu'] = '����Ŵ';
$lang['folders_mnu'] = '������';
$lang['search_mnu'] = '����';
$lang['address_mnu'] = '�ش��ª���';
$lang['empty_trash_mnu'] = 'ź���';
$lang['prefs_mnu'] = '��������´��ǹ���';
$lang['logoff_mnu'] = '�͡�ҡ�к�';

// Reply
$lang['reply_prefix'] = 'Rv:';
$lang['forward_prefix'] = 'Fw:';
$lang['reply_delimiter'] = '--------- ��ͤ����ѧ��� --------';
$lang['reply_from_hea'] = '�ҡ :';
$lang['reply_to_hea'] = '�֧ :';
$lang['reply_cc_hea'] = 'Cc :';
$lang['reply_date_hea'] = '�ѹ��� :';
$lang['reply_subject_hea'] = '�������ͧ :';
// done


// page-specific vars

// [Headers]
$lang['key_hea'] = 'Key';
$lang['value_hea'] = 'Value';

// [Folders]
$lang['fld_name_hea'] = '������';
$lang['fld_messages_hea'] = '��ͤ���';
$lang['fld_size_hea'] = '��Ҵ';
$lang['fld_empty_hea'] = '��ҧ';
$lang['fld_delete_hea'] = 'ź';
$lang['fld_total'] = '������ :';
$lang['fld_make_new'] = '��ҧ����������';
$lang['folders_to'] = '������s to';

// [MessageList]
$lang['messages_to'] = '��ͤ����֧ ';
$lang['no_messages'] = '����ը���������֧ �س';
$lang['delete_selected_mnu'] = 'ź������͡';
$lang['move_selected_mnu'] = '����价�����͡';
$lang['mark_selected_mnu'] = '������ͧ���������ҹ����';
$lang['unmark_selected_mnu'] = '������ͧ��������ѧ�����ҹ';
$lang['move_selected_to_trash_mnu'] = '���·�����͡ŧ�ѧ���';


$lang['delete_mnu'] = 'ź';
$lang['move_mnu'] = '�����';
$lang['subject_hea'] = '�������ͧ :';
$lang['from_hea'] = '�ҡ :';
$lang['to_hea'] = '�֧ :';
$lang['date_hea'] = '�ѹ��� :';
$lang['size_hea'] = '��Ҵ';
$lang['have_spam'] = '�س�ը����¢�� (����ͺ��������쨴���¢��)';

$lang['msg_you_have'] = '�س��';
$lang['msg_message'] = '��ͤ���';
$lang['msg_messages'] = '��ͤ���';

$lang['msg_more_unread'] = '�ѧ�������ҹ';
$lang['msg_one_unread'] = '�ѧ������';
$lang['msg_none_unread'] = '����շ���ѧ�������ҹ';
$lang['msg_in_the_folder'] = '�������';


// [Login]
$lang['lgn_title'] = '����к�';
$lang['lgn_welcome_msg'] = '�Թ�յ�͹�Ѻ��� Telaen webmail';
$lang['lng_user_email'] = '����������硷�͹ԡ��';
$lang['lng_user_name'] = '���ͼ����';
$lang['lng_user_pwd'] = '���ʼ�ҹ';
$lang['lng_server'] = 'Server';
$lang['lng_theme'] = '˹�ҵ�';
$lang['lng_language'] = '����';
$lang['lng_login_btn'] = '�������к� &gt;&gt;';
$lang['lng_cookie_not_enabled'] = '�س��ͧ�Դ�����ҹ Cookies';
$lang['lng_cookie_not_valid'] = '��õǨ�ͺ Cookie �������';

// [Newmessage]

$lang['newmsg_title'] = '��¹������';

$lang['to_hea'] = '�֧ :';
$lang['cc_hea'] = 'Cc :';
$lang['bcc_hea'] = 'Bcc :';
$lang['subject_hea'] = '�������ͧ :';
$lang['address_tip'] = '�ҡ��ش��ª���';

$lang['attach_hea'] = 'Ṻ��� :';
$lang['attch_add_new'] = '�����������';
$lang['attch_name_hea'] = '����';
$lang['attch_size'] = '��Ҵ';
$lang['attch_type_hea'] = '��Դ';
$lang['attch_dele_hea'] = 'ź';
$lang['attch_no_hea'] = '����ա��Ṻ���';

$lang['add_signature'] = '��������繵���¨�����';
$lang['send_text'] = '觨�����';

$lang['result_error'] = '�ѹ�������ó� �� �Ҩ���觶֧����Ѻ��';
$lang['result_success'] = '觨��������º��������';
$lang['nav_continue'] = '����';
$lang['nav_back'] = '��Ѻ';

$lang['up_title'] = '�������';
$lang['up_information_text'] = '���͡���';
$lang['up_button_text'] = '�';

$lang['require_receipt'] = 'Return receipt';

$lang['priority_text'] = '�ӴѺ�����Ӥѭ';
$lang['priority_low'] = '����';
$lang['priority_normal'] = '�ҹ��ҧ';
$lang['priority_high'] = '�ҡ';

// [Preferences]
$lang['prf_title'] = '��������´��ǹ���';
$lang['prf_general_title'] = '�����ŷ���仢ͧ�س';
$lang['prf_name'] = '����';
$lang['prf_reply_to'] = '�����ͧ�س';
$lang['prf_time_zone'] = '����';
$lang['prf_trash_title'] = '�ѧ���';
$lang['prf_save_to_trash'] = '��駶ѧ���������˹';
$lang['prf_save_only_read'] = '�Ѵ�纨�����������˹';
$lang['prf_empty_on_exit'] = 'ź�����¨ҡ Folder ��ѧ�ҡ�͡�ҡ�к�';
$lang['prf_empty_spam_on_exit'] = '<b>��ҧ</b>���ͧ�����¢��������͡�ҡ�к�';
$lang['prf_unmark_read_on_exit'] = '������ͧ���¨����·����ҹ������<b>�ѧ�����ҹ</b>������͡�ҡ�к�';
$lang['prf_sent_title'] = '���¡��';
$lang['prf_save_sent'] = '�Ѵ�纨����·��������� :';
$lang['prf_messages_title'] = '��ͤ���';
$lang['prf_page_limit'] = '�ʴ��ӹǹ�����µ��˹��';
$lang['prf_signature_title'] = '����繵�';
$lang['prf_signature'] = '��¹����繵�';
$lang['prf_auto_add_sign'] = '��������繵�ͧ�س�Ѻ�����·����觷ء��Ѻ';
$lang['prf_save_button'] = '�Ѵ��';
$lang['prf_display_images'] = '�ʴ��ٻ�Ҿ���Ṻ';
$lang['prf_default_editor_mode'] = '���������䢢�ͤ�����鹰ҹ';
$lang['prf_default_editor_mode_text'] = '"������Ẻ��ͤ���������"';
$lang['prf_default_editor_mode_html'] = '"�����䢢�ͤ�����ٻẺ HTML"';
$lang['prf_time_to_refesh'] = '����Ŵ�ء� [�ҷ�]';
$lang['prf_spam_level'] = '�дѺ��õ�Ǩ�Ѻ�����¢��(0 = ����Ǩ�Ѻ, 1 = �٧�ҡ, 9 = ����ҡ)';
$lang['prf_auto_require_receipt'] = 'Require read receipt by default';

$lang['prf_msg_saved'] = 'Preferences saved';

// filters
$lang['filter_title'] = '��ǡ�ͧ';

$lang['filter_new'] = '��ҧ��ǡ�ͧ';
$lang['filter_desc'] = '���͡�ٻẺ��ä��Ҩ����¢����С�á�зӢͧ������������Щ�Ѻ';
$lang['filter_list'] = '��ǡ�ͧ�Ѩ�غѹ';

$lang['filter_field_from'] = '�ҡ';
$lang['filter_field_to'] = '�֧';
$lang['filter_field_subject'] = '��Ǣ��';
$lang['filter_field_header'] = 'Header';
$lang['filter_field_body'] = 'Body';

$lang['filter_type_move'] = '����';
$lang['filter_type_delete'] = 'ź';
$lang['filter_type_mark'] = '������ͧ���������ҹ';

$lang['filter_add'] = '������ǡ�ͧ';
$lang['filter_delete'] = 'ź';
$lang['filter_delete_selected'] = 'ź��ǡ�ͧ������͡';

$lang['filter_field'] = '��ǡ�ͧ�';
$lang['filter_match'] = '���Ң�ͤ���';
$lang['filter_type'] = '��á�з�';
$lang['filter_folder'] = '�������������';

$lang['filter_msg_nofilters'] = '�ѧ����յ�ǡ�ͧ';
$lang['filter_msg_added'] = '������ǡ�ͧ����';
$lang['filter_msg_deleted'] = 'ź��ǡ�ͧ����';


// [Catch]
$lang['ctc_title'] = '��������ش��ª���';
$lang['ctc_information'] = '�ʴ�੾�Ш����·�����ҡ�ҡ�����ش��ª���';
$lang['ctc_name'] = '����';
$lang['ctc_email'] = 'E-mail';
$lang['ctc_no_address'] = '��ª������١��ͧ';
$lang['ctc_close'] = '�Դ';
$lang['ctc_save'] = '����';

// [Readmsg]
$lang['next_mnu'] = '����';
$lang['previous_mnu'] = '��͹˹��';
$lang['back_mnu'] = '��Ѻ';
$lang['reply_mnu'] = '�ͺ��Ѻ';
$lang['reply_all_mnu'] = '�ͺ��Ѻ������';
$lang['forward_mnu'] = '觵��';
$lang['headers_mnu'] = '���';
$lang['move_mnu'] = '�����';
$lang['move_to_trash_mnu'] = 'Move to Trash';
$lang['delete_mnu'] = 'ź';
$lang['print_mnu'] = '�����';
$lang['download_mnu'] = '��ǹ���Ŵ';

$lang['from_hea'] = '�ҡ :';
$lang['to_hea'] = '�֧ :';
$lang['cc_hea'] = 'Cc :';
$lang['date_hea'] = '�ѹ��� :';
$lang['subject_hea'] = '�������ͧ :';
$lang['attach_hea'] = 'Ṻ��� :';

$lang['attch_name_hea'] = '����';
$lang['attch_force_hea'] = '�Ѻ���';
$lang['attch_type_hea'] = '��Դ';
$lang['attch_size_hea'] = '��Ҵ';
$lang['catch_address'] = '�����������ش��ª���';
$lang['block_address'] = 'Block address';

// [Search]
$lang['sch_title'] = '����';
$lang['sch_information_text'] = '��¹��ͤ�������ͧ����Ҩҡ �����·����ҹ�����';
$lang['sch_button_text'] = '���� &gt;&gt;';
$lang['sch_subject_hea'] = '�������ͧ';
$lang['sch_from_hea'] = '�ҡ';
$lang['sch_date_hea'] = '�ѹ���';
$lang['sch_body_hea'] = '��ͤ���';
$lang['sch_folder_hea'] = '������';
$lang['sch_no_results'] = '��辺��ͤ���������';

// [QuickAddress]
$lang['qad_title'] = '�ش��ª���';
$lang['qad_select_address'] = '���͡';
$lang['qad_to'] = '�֧';
$lang['qad_cc'] = '���';
$lang['qad_bcc'] = '��ҫ�͹';

// [AddressBook]
// edit/display
$lang['adr_title'] = '�ش��ª���';
$lang['adr_name'] = '����';
$lang['adr_email'] = 'E-mail';
$lang['adr_street'] = '���';
$lang['adr_city'] = '���ͧ';
$lang['adr_state'] = '�����';
$lang['adr_work'] = '�ҹ';
$lang['adr_back'] = '��Ѻ';
$lang['adr_save'] = '�Ѵ��';
$lang['adr_phone'] = 'Phone';
$lang['adr_cell'] = 'Cell';
$lang['adr_note'] = 'Notes';

// list
$lang['adr_name_hea'] = '����';
$lang['adr_email_hea'] = 'E-mail';
$lang['adr_edit_hea'] = '���';
$lang['adr_expo_hea'] = '��͡';
$lang['adr_dele_hea'] = 'ź';
$lang['adr_new_entry'] = '��ª�������';

$lang['addr_saved'] = '�Ѵ�红�������ª�������';
$lang['addr_added'] = '������ª�������';
$lang['addr_deleted'] = 'ź��ª�������';


// [BlockSender]
$lang['blk_title'] = 'Block sender';
$lang['blk_information'] = 'Only shows e-mails that are not in the filter yet';
$lang['blk_email'] = 'E-mail';
$lang['blk_no_address'] = 'No address available';
$lang['blk_close'] = 'Close';
$lang['blk_save'] = 'Save';

// [Event]
$lang['evt_title'] = 'Calendar Event';
$lang['evt_save'] = '�Ѵ��';
$lang['evt_delete'] = 'ź';
$lang['evt_stop'] = 'Stop time';
$lang['evt_start'] = 'Start time';

