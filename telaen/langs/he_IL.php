<?php
/*
 * US English (canonical list and phrasing)
 */

$lang = array();

// User-friendly names to system folders
$lang['inbox_extended'] = '���� ����';
$lang['sent_extended'] = '���� ����';
$lang['trash_extended'] = '�� ������';
$lang['spam_extended'] = 'Spam folder';

// Navigation texts
$lang['pages_text'] = 'Pages';
$lang['first_text'] = 'First';
$lang['previous_text'] = '�����';
$lang['next_text'] = '���';
$lang['last_text'] = 'Last';
$lang['total_text'] = 'Total';

// Mail Server Errors
$lang['err_login_msg'] = 'Login error';
$lang['err_system_msg'] = 'System error';
$lang['error_login'] = 'Please check your username or password and try again';
$lang['error_connect'] = '����� ������ �� ����';
$lang['error_retrieving'] = '����� ����� ����� ���, ���� ����� ��� ������';
$lang['error_session_expired'] = 'Your session is expired, please login again';
$lang['error_other'] = '���� ������, ��� ��� ���� ������';

// Invalid name of mailbox
$lang['error_invalid_name'] = '�� ����� ����. �� ������ �� � A-Z, 0-9, - �������';

// Validations when sending mails
$lang['error_no_recipients'] = '�����: ���� ����� ����� ����� ���� ���.';
$lang['error_compose_invalid_mail1_s'] = '�����: ����� ��-���� ��� ����� ������';
$lang['error_compose_invalid_mail1_p'] = '�����: ����� ��-���� ��� ����� ������';
$lang['error_compose_invalid_mail2_s'] = '�� ����� �� ����� ���-���� ���� ������ ����� ���� ����� ��.';
$lang['error_compose_invalid_mail2_p'] = '�� ����� �� ������� ���� ������ ����� ���� ����� ��.';

// Confirmation of delete
$lang['confirm_delete'] = '��� ��� ���� ������� ����� �� ������(��) ��"�?';

// If the message no have a subject or sender
$lang['no_subject_text'] = '[��� ����]';
$lang['no_sender_text'] = '[���� �� ����]';
$lang['no_recipient_text'] = '[���� �� ����]';

// If the quota limit was exceeded
$lang['quota_exceeded'] = '��� ����� ���� ����� ����� ����� ��� �� ��� ������ �� ������\�� ����� ��� ������ �� ��� ������';
$lang['quota_usage_info'] = '����� ����';
$lang['quota_usage_used'] = '������';
$lang['quota_usage_of'] = '����';
$lang['quota_usage_avail'] = '������';

//
// Date Format
// %d = day, %m = month, %y = year, %H = hour, %M = minutes
// for a complete list, see http://www.php.net/strftime
//
$lang['date_format'] = '%d/%m/%y %H:%M';

// CharSet
$lang['default_char_set'] = 'iso-8859-8-i';

// Menu
$lang['messages_mnu'] = '���� ����';
$lang['read_menu'] = '��� ��-����(��)';
$lang['compose_mnu'] = '���� ��-����';
$lang['refresh_mnu'] = '����';
$lang['folders_mnu'] = '������';
$lang['search_mnu'] = '�����';
$lang['address_mnu'] = '��� ������';
$lang['empty_trash_mnu'] = '��� �� �����';
$lang['prefs_mnu'] = '��������';
$lang['logoff_mnu'] = '����� �������';

// Reply
$lang['reply_prefix'] = '�����:';
$lang['forward_prefix'] = '�����:';
$lang['reply_delimiter'] = '--------- ����� ������ --------';
$lang['reply_from_hea'] = '�:';
$lang['reply_to_hea'] = '��:';
$lang['reply_cc_hea'] = '����:';
$lang['reply_date_hea'] = '�����:';
$lang['reply_subject_hea'] = '����:';
// done


// page-specific vars

// [Headers]
$lang['key_hea'] = '����';
$lang['value_hea'] = '���';

// [Folders]
$lang['fld_name_hea'] = '�����';
$lang['fld_messages_hea'] = '������';
$lang['fld_size_hea'] = '����';
$lang['fld_empty_hea'] = '���';
$lang['fld_delete_hea'] = '���';
$lang['fld_total'] = '�� ���:';
$lang['fld_make_new'] = '��� ����� ����';
$lang['folders_to'] = '������ ��';

// [MessageList]
$lang['messages_to'] = '������ �� ';
$lang['no_messages'] = '��� �� ������ ����� ���� ';
$lang['delete_selected_mnu'] = '��� �������';
$lang['move_selected_mnu'] = '���� ������� ��';
$lang['mark_selected_mnu'] = 'Mark as read'; // FIXME: need translation
$lang['unmark_selected_mnu'] = 'Mark as unread'; // FIXME: need translation
$lang['move_selected_to_trash_mnu'] = '���� ������� �� �� ������';


$lang['delete_mnu'] = '���';
$lang['move_mnu'] = '���� �';
$lang['subject_hea'] = '����:';
$lang['from_hea'] = '�:';
$lang['to_hea'] = '��:';
$lang['date_hea'] = '�����:';
$lang['size_hea'] = '����';
$lang['have_spam'] = 'You have Spam (check Spam folder)'; // FIXME: need translation

$lang['msg_you_have'] = '�� ��';
$lang['msg_message'] = '�����';
$lang['msg_messages'] = '������';

$lang['msg_more_unread'] = '�� �����';
$lang['msg_one_unread'] = '�� ����';
$lang['msg_none_unread'] = '��� ����';
$lang['msg_in_the_folder'] = '������';


// [Login]
$lang['lgn_title'] = '�����';
$lang['lgn_welcome_msg'] = '���� ���, ��� ���� �� ���� ������';
$lang['lng_user_email'] = '��-����';
$lang['lng_user_name'] = '�� �����';
$lang['lng_user_pwd'] = '�����';
$lang['lng_server'] = '���';
$lang['lng_theme'] = '����';
$lang['lng_language'] = '���';
$lang['lng_login_btn'] = '����� &gt;&gt;';
$lang['lng_cookie_not_enabled'] = 'Cookies must be enabled'; // FIXME: need translation
$lang['lng_cookie_not_valid'] = 'Cookie Security Check Failed'; // FIXME: need translation

// [Newmessage]

$lang['newmsg_title'] = 'Compose mail'; // FIXME: need translation

$lang['to_hea'] = '��:';
$lang['cc_hea'] = '����:';
$lang['bcc_hea'] = '���� �����:';
$lang['subject_hea'] = '����:';
$lang['address_tip'] = '���� ������';

$lang['attach_hea'] = '����(��) �����(��):';
$lang['attch_add_new'] = '��� ���� ���';
$lang['attch_name_hea'] = '��';
$lang['attch_size'] = '����';
$lang['attch_type_hea'] = '���';
$lang['attch_dele_hea'] = '���';
$lang['attch_no_hea'] = '��� ����� �������';

$lang['add_signature'] = '���� �����';
$lang['send_text'] = '���';

$lang['result_error'] = '�� ����� ������ ����� ��-���� ��';
$lang['result_success'] = '���-���� ����';
$lang['nav_continue'] = '����';
$lang['nav_back'] = '�����';

$lang['up_title'] = '���� ����';
$lang['up_information_text'] = '��� ����';
$lang['up_button_text'] = '���';

$lang['require_receipt'] = 'Return receipt'; // FIXME: need translation

$lang['priority_text'] = '������';
$lang['priority_low'] = '�����';
$lang['priority_normal'] = '�����';
$lang['priority_high'] = '�����';

// [Preferences]
$lang['prf_title'] = '��������';
$lang['prf_general_title'] = '���� ����';
$lang['prf_name'] = '��';
$lang['prf_reply_to'] = '��� �';
$lang['prf_time_zone'] = '���� ���';
$lang['prf_trash_title'] = '�� �����';
$lang['prf_save_to_trash'] = '���� ��� <b>����</b> �����, ���� ���� � ';
$lang['prf_save_only_read'] = '���� �� <b>������ ������</b> ���� � ';
$lang['prf_empty_on_exit'] = '<b>����</b> �� �� ������ ������';
$lang['prf_empty_spam_on_exit'] = '<b>Empty</b> Spam folder when you logout'; // FIXME: need translation
$lang['prf_unmark_read_on_exit'] = 'Reset READ messages as UNREAD when you logout'; // FIXME: need translation
$lang['prf_sent_title'] = '������ ������';
$lang['prf_save_sent'] = '���� <b>������ ������</b> ���� � ';
$lang['prf_messages_title'] = '������';
$lang['prf_page_limit'] = '������� ������ �����';
$lang['prf_signature_title'] = '�����';
$lang['prf_signature'] = '���� �� ������';
$lang['prf_auto_add_sign'] = '���� �� ������ ��� ������� �������';
$lang['prf_save_button'] = '����';
$lang['prf_display_images'] = '��� ������ �������';
$lang['prf_default_editor_mode'] = '��� ����� ������ ����';
$lang['prf_default_editor_mode_text'] = '"���� ����"';
$lang['prf_default_editor_mode_html'] = '"���� HTML �����"';
$lang['prf_time_to_refesh'] = '���� �������� ���� ���� ��� (����)';
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
$lang['filter_type'] = 'Action'; // FIXME: need translation
$lang['filter_folder'] = 'Destination folder'; // FIXME: need translation

$lang['filter_msg_nofilters'] = 'No filters available.'; // FIXME: need translation
$lang['filter_msg_added'] = 'Filter added'; // FIXME: need translation
$lang['filter_msg_deleted'] = 'Filter deleted'; // FIXME: need translation


// [Catch]
$lang['ctc_title'] = '���� ���� �������';
$lang['ctc_information'] = '���� �� ��-������ ��� ���� �������';
$lang['ctc_name'] = '��';
$lang['ctc_email'] = '��-����';
$lang['ctc_no_address'] = '��� ����� �����';
$lang['ctc_close'] = '����';
$lang['ctc_save'] = '����';

// [Readmsg]
$lang['next_mnu'] = '���';
$lang['previous_mnu'] = '�����';
$lang['back_mnu'] = '�����';
$lang['reply_mnu'] = '���';
$lang['reply_all_mnu'] = '��� �����';
$lang['forward_mnu'] = '����';
$lang['headers_mnu'] = '����';
$lang['move_mnu'] = '���� �';
$lang['move_to_trash_mnu'] = '���� ��� ������';
$lang['delete_mnu'] = '���';
$lang['print_mnu'] = '����';
$lang['download_mnu'] = 'Download';

$lang['from_hea'] = '�:';
$lang['to_hea'] = '��:';
$lang['cc_hea'] = '����:';
$lang['date_hea'] = '�����:';
$lang['subject_hea'] = '����:';
$lang['attach_hea'] = '����(��) �����(��):';

$lang['attch_name_hea'] = '��';
$lang['attch_force_hea'] = '����';
$lang['attch_type_hea'] = '���';
$lang['attch_size_hea'] = '����';
$lang['catch_address'] = '���� ���� �������';
$lang['block_address'] = 'Block address'; // FIXME: need translation

// [Search]
$lang['sch_title'] = 'Search';
$lang['sch_information_text'] = '���� ����� �� ���� ��� ���� ���.<br> ������ ����� �� ������� ������.';
$lang['sch_button_text'] = '��� &gt;&gt;';
$lang['sch_subject_hea'] = '����';
$lang['sch_from_hea'] = '���';
$lang['sch_date_hea'] = '�����';
$lang['sch_body_hea'] = '��� ������';
$lang['sch_folder_hea'] = '�����';
$lang['sch_no_results'] = '�� ����� �� ����� ������ �� ������ ������';

// [QuickAddress]
$lang['qad_title'] = '��� �������';
$lang['qad_select_address'] = '��� ��� ���';
$lang['qad_to'] = '��';
$lang['qad_cc'] = '����';
$lang['qad_bcc'] = '���� �����';

// [AddressBook]
// edit/display
$lang['adr_title'] = '��� ������';
$lang['adr_name'] = '��';
$lang['adr_email'] = '��-����';
$lang['adr_street'] = '����';
$lang['adr_city'] = '���';
$lang['adr_state'] = '�����';
$lang['adr_work'] = '�����';
$lang['adr_back'] = '����';
$lang['adr_save'] = '����';
$lang['adr_phone'] = 'Phone'; // FIXME: need translation
$lang['adr_cell'] = 'Cell'; // FIXME: need translation
$lang['adr_note'] = 'Notes'; // FIXME: need translation

// list
$lang['adr_name_hea'] = '��';
$lang['adr_email_hea'] = '��-����';
$lang['adr_edit_hea'] = '�����';
$lang['adr_expo_hea'] = '����';
$lang['adr_dele_hea'] = '���';
$lang['adr_new_entry'] = '��� ���-��� ���';

$lang['addr_saved'] = '���� ��� ���� �����';
$lang['addr_added'] = '���� ��� ���� �����';
$lang['addr_deleted'] = '��� ���� ����';


// [BlockSender]
$lang['blk_title'] = 'Block sender'; // FIXME: need translation
$lang['blk_information'] = 'Only shows e-mails that are not in the filter yet'; // FIXME: need translation
$lang['blk_email'] = 'E-mail';
$lang['blk_no_address'] = 'No address available'; // FIXME: need translation
$lang['blk_close'] = 'Close'; // FIXME: need translation
$lang['blk_save'] = 'Save'; // FIXME: need translation

// [Event]
$lang['evt_title'] = 'Calendar Event'; // FIXME: need translation
$lang['evt_save'] = '����';
$lang['evt_delete'] = '���';
$lang['evt_stop'] = 'Stop time'; // FIXME: need translation
$lang['evt_start'] = 'Start time'; // FIXME: need translation

