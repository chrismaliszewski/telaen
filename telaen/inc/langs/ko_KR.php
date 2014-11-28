<?php
/*
 * US English (canonical list and phrasing)
 */

$lang = array();

// User-friendly names to system folders
$lang['inbox_extended'] = '����������';
$lang['sent_extended'] = '����������';
$lang['trash_extended'] = '������';
$lang['spam_extended'] = '����������';

// Navigation texts
$lang['pages_text'] = '������';
$lang['first_text'] = 'ó��';
$lang['previous_text'] = '����';
$lang['next_text'] = '����';
$lang['last_text'] = '������';
$lang['total_text'] = '��ü';

// Mail Server Errors
$lang['err_login_msg'] = 'Login error'; // FIXME: need translation
$lang['err_system_msg'] = 'System error'; // FIXME: need translation
$lang['error_login'] = 'Please check your username or password and try again'; // FIXME: need translation
$lang['error_connect'] = '������ �����Ҽ� �����ϴ�';
$lang['error_retrieving'] = '���������� �����ü� �����ϴ�.';
$lang['error_session_expired'] = 'Your session is expired, please login again'; // FIXME: need translation
$lang['error_other'] = '�ý�������Դϴ�. �����ڿ��� �����ϼ���';

// Invalid name of mailbox
$lang['error_invalid_name'] = '�����̸��� ����,���� �׸��� - (����) �� ����Ͻ� �� �ֽ��ϴ�.';

// Validations when sending mails
$lang['error_no_recipients'] = '����: �޴»���� �ּҸ� �ּ� 1���̻� �Է��� �ּ���!';
$lang['error_compose_invalid_mail1_s'] = '����: �̸��� �ּҰ� �������Դϴ�';
$lang['error_compose_invalid_mail1_p'] = '����: �̸��� �ּҵ��� �������Դϴ�';
$lang['error_compose_invalid_mail2_s'] = '�� �̸����� �ٽ� ���������� �޴����� �ּҸ� Ȯ�����ּ���.';
$lang['error_compose_invalid_mail2_p'] = '�� �̸����� �ٽ� ���������� ������ �ּҸ� Ȯ�����ּ���.';

// Confirmation of delete
$lang['confirm_delete'] = '���� ���õ� �̸���(��)�� ���� �Ͻðڽ��ϱ�?';

// If the message no have a subject or sender
$lang['no_subject_text'] = '[�������]';
$lang['no_sender_text'] = '[������ �˼�����]';
$lang['no_recipient_text'] = '[�޴��� �˼�����]';

// If the quota limit was exceeded
$lang['quota_exceeded'] = '��������� ������� �ʽ��ϴ�. ������ �̸��� �Ǵ� �����̸����� ���� ���ּ���.';
$lang['quota_usage_info'] = '�뷮����';
$lang['quota_usage_used'] = '����� = ';
$lang['quota_usage_of'] = ',��ü';
$lang['quota_usage_avail'] = '��밡��';

//
// Date Format
// %d = day, %m = month, %y = year, %H = hour, %M = minutes
// for a complete list, see http://www.php.net/strftime
//
$lang['date_format'] = '%Y-%m-%d %H:%M';

// CharSet
$lang['default_char_set'] = 'euc-kr';

// Menu
$lang['messages_mnu'] = '����������';
$lang['read_menu'] = '�����б�';
$lang['compose_mnu'] = '��������';
$lang['refresh_mnu'] = '���ΰ�ħ';
$lang['folders_mnu'] = '������';
$lang['search_mnu'] = '�˻�';
$lang['address_mnu'] = '�ּҷ�';
$lang['empty_trash_mnu'] = '���������';
$lang['prefs_mnu'] = 'ȯ�漳��';
$lang['logoff_mnu'] = '�α׾ƿ�';

// Reply
$lang['reply_prefix'] = 'Re:';
$lang['forward_prefix'] = 'Fw:';
$lang['reply_delimiter'] = '--------- Original Message --------';
$lang['reply_from_hea'] = 'From:';
$lang['reply_to_hea'] = 'To:';
$lang['reply_cc_hea'] = 'Cc:';
$lang['reply_date_hea'] = 'Date:';
$lang['reply_subject_hea'] = 'Subject:';
// done


// page-specific vars

// [Headers]
$lang['key_hea'] = 'Key';
$lang['value_hea'] = 'Value';

// [Folders]
$lang['fld_name_hea'] = '����';
$lang['fld_messages_hea'] = '�̸���';
$lang['fld_size_hea'] = 'ũ��';
$lang['fld_empty_hea'] = '����';
$lang['fld_delete_hea'] = '����';
$lang['fld_total'] = '��ü:';
$lang['fld_make_new'] = '������ �����';
$lang['folders_to'] = '������ �̵�';

// [MessageList]
$lang['messages_to'] = '�̸��� �̵� ';
$lang['no_messages'] = '���ο� �̸����� �����ϴ� -> ';
$lang['delete_selected_mnu'] = '���� ';
$lang['move_selected_mnu'] = '�̵�';
$lang['mark_selected_mnu'] = '���� ǥ��';
$lang['unmark_selected_mnu'] = '������ ǥ��';
$lang['move_selected_to_trash_mnu'] = '����������';


$lang['delete_mnu'] = '����';
$lang['move_mnu'] = '�̵�';
$lang['subject_hea'] = '����:';
$lang['from_hea'] = '������:';
$lang['to_hea'] = '�޴���:';
$lang['date_hea'] = '��¥:';
$lang['size_hea'] = 'ũ��';
$lang['have_spam'] = '���Ը����� �޾ҽ��ϴ�. (���������� Ȯ���ϼ���)';

$lang['msg_you_have'] = '�������� = ';
$lang['msg_message'] = '��';
$lang['msg_messages'] = '��';

$lang['msg_more_unread'] = '������';
$lang['msg_one_unread'] = '������';
$lang['msg_none_unread'] = '��������';
$lang['msg_in_the_folder'] = '������ ����';


// [Login]
$lang['lgn_title'] = '�α���';
$lang['lgn_welcome_msg'] = '�ȳ��ϼ���! �Ʒ��� ��Ȯ�� ������ �Է��� �α��� �ϼ���';
$lang['lng_user_email'] = '�̸��� �ּ�';
$lang['lng_user_name'] = '���̵�';
$lang['lng_user_pwd'] = '��й�ȣ';
$lang['lng_server'] = '����';
$lang['lng_theme'] = '�׸�';
$lang['lng_language'] = '���';
$lang['lng_login_btn'] = '�α��� &gt;&gt;';
$lang['lng_cookie_not_enabled'] = '��Ű����� ���Ǿ�� �մϴ�. (������ ����)';
$lang['lng_cookie_not_valid'] = '��Ű ���Ȱ˻� ����!';

// [Newmessage]

$lang['newmsg_title'] = '�̸��� ����';

$lang['to_hea'] = '�޴���:';
$lang['cc_hea'] = '����:';
$lang['bcc_hea'] = '��������:';
$lang['subject_hea'] = '����:';
$lang['address_tip'] = '�ּҷ�ã��';

$lang['attach_hea'] = '÷��ȭ��:';
$lang['attch_add_new'] = 'ȭ�� ÷���ϱ�';
$lang['attch_name_hea'] = '�̸�';
$lang['attch_size'] = 'ũ��';
$lang['attch_type_hea'] = '����';
$lang['attch_dele_hea'] = '����';
$lang['attch_no_hea'] = '÷��ȭ�� ����';

$lang['add_signature'] = '���� �߰��ϱ�';
$lang['send_text'] = '������';

$lang['result_error'] = '�̸��� �߼� ����!';
$lang['result_success'] = '�̸����� ���������� �߼۵Ǿ����ϴ�.';
$lang['nav_continue'] = '&lt;&lt; ��� &gt;&gt;';
$lang['nav_back'] = '�ڷ�';

$lang['up_title'] = 'ȭ���߰�';
$lang['up_information_text'] = 'ȭ�� ����';
$lang['up_button_text'] = 'ȭ�� ÷��';

$lang['require_receipt'] = '���� Ȯ�θ��� �ޱ�';

$lang['priority_text'] = '�߿䵵';
$lang['priority_low'] = '����';
$lang['priority_normal'] = '����';
$lang['priority_high'] = '����';

// [Preferences]
$lang['prf_title'] = 'ȯ�� ����';
$lang['prf_general_title'] = '�⺻ ����';
$lang['prf_name'] = '�̸�';
$lang['prf_reply_to'] = 'ȸ�Ź��� �ּ�';
$lang['prf_time_zone'] = '���� �ð� ����';
$lang['prf_trash_title'] = '������';
$lang['prf_save_to_trash'] = '������ <b>����</b> �� ���� ������ �̵��մϴ�. ';
$lang['prf_save_only_read'] = '�̹� <b>���� ����</b>�� ���� ������ �̵��մϴ�.';
$lang['prf_empty_on_exit'] = '�α׾ƿ��� �ڵ����� <b>������</b> ����';
$lang['prf_empty_spam_on_exit'] = '�α׾ƿ��� �ڵ����� <b>��������</b> ����';
$lang['prf_unmark_read_on_exit'] = '�α׾ƿ��� �ڵ����� <b>��������</b>�� ���������� �����ϱ�';
$lang['prf_sent_title'] = '���� ����';
$lang['prf_save_sent'] = '<b>����������</b> ���� ������ �����մϴ�. ';
$lang['prf_messages_title'] = '�̸��ϰ���';
$lang['prf_page_limit'] = '���������� ������ �̸��� ����';
$lang['prf_signature_title'] = '����';
$lang['prf_signature'] = '������';
$lang['prf_auto_add_sign'] = '������ ��� ������ �ڵ����� ���� �߰��ϱ� ';
$lang['prf_save_button'] = '�����ϱ�';
$lang['prf_display_images'] = '÷�ε� �̹����� �ڵ����� �̸��� ������ �����ݴϴ�';
$lang['prf_default_editor_mode'] = '�⺻ ���⼳��';
$lang['prf_default_editor_mode_text'] = '"�ؽ�Ʈ�� ���"';
$lang['prf_default_editor_mode_html'] = '"��޿����� ���"';
$lang['prf_time_to_refesh'] = '�ڵ����� ���ο� �̸��� Ȯ���ϱ� (~�а���)';
$lang['prf_spam_level'] = '���� ���� ���� (0 = ���ܾ���, 1 = �ſ����, 9 = �ſ쳷��)';
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
$lang['ctc_title'] = '�ּҷϿ� �߰�';
$lang['ctc_information'] = '�ּҷϿ� ���� �ּҷκ��� �߼۵� �̸��ϸ� ����';
$lang['ctc_name'] = '�̸�';
$lang['ctc_email'] = '�̸���';
$lang['ctc_no_address'] = '�̸��� �ּ� ����';
$lang['ctc_close'] = '�ݱ�';
$lang['ctc_save'] = '����';

// [Readmsg]
$lang['next_mnu'] = '����';
$lang['previous_mnu'] = '����';
$lang['back_mnu'] = '�ڷ�';
$lang['reply_mnu'] = '����';
$lang['reply_all_mnu'] = '��ο��� ����';
$lang['forward_mnu'] = '����';
$lang['headers_mnu'] = '�������';
$lang['move_mnu'] = '�̵�';
$lang['move_to_trash_mnu'] = '����������';
$lang['delete_mnu'] = '����';
$lang['print_mnu'] = '�μ�';
$lang['download_mnu'] = 'Download'; // FIXME: need translation

$lang['from_hea'] = '������:';
$lang['to_hea'] = '�޴���:';
$lang['cc_hea'] = '����:';
$lang['date_hea'] = '��¥:';
$lang['subject_hea'] = '����:';
$lang['attach_hea'] = '÷��ȭ��:';

$lang['attch_name_hea'] = '�̸�';
$lang['attch_force_hea'] = '�ٿ�ε�';
$lang['attch_type_hea'] = '����';
$lang['attch_size_hea'] = 'ũ��';
$lang['catch_address'] = '�ּҷϿ� �߰�';
$lang['block_address'] = '�ּ� ����';

// [Search]
$lang['sch_title'] = '�˻�';
$lang['sch_information_text'] = 'ã���� �ܾ ������ �Է��ϼ���<br> �̹� ���� �����鸸�� ������� �˻��մϴ�.';
$lang['sch_button_text'] = '�˻� &gt;&gt;';
$lang['sch_subject_hea'] = '����';
$lang['sch_from_hea'] = '������';
$lang['sch_date_hea'] = '��¥';
$lang['sch_body_hea'] = '��������';
$lang['sch_folder_hea'] = '����';
$lang['sch_no_results'] = 'ã���ô� ���뿡 ���� �˻������ �����ϴ�.';

// [QuickAddress]
$lang['qad_title'] = '�ּҷ�';
$lang['qad_select_address'] = '�ּ� ����';
$lang['qad_to'] = '�޴���';
$lang['qad_cc'] = '����';
$lang['qad_bcc'] = '��������';

// [AddressBook]
// edit/display
$lang['adr_title'] = '�ּҷ�';
$lang['adr_name'] = '�̸�';
$lang['adr_email'] = '�̸���';
$lang['adr_street'] = '�ּ�';
$lang['adr_city'] = '��ȭ��ȣ1';
$lang['adr_state'] = '��ȭ��ȣ2';
$lang['adr_work'] = '��Ÿ����';
$lang['adr_back'] = '�ڷ�';
$lang['adr_save'] = '����';
$lang['adr_phone'] = 'Phone';
$lang['adr_cell'] = 'Cell';
$lang['adr_note'] = 'Notes';

// list
$lang['adr_name_hea'] = '�̸�';
$lang['adr_email_hea'] = '�̸���';
$lang['adr_edit_hea'] = '����';
$lang['adr_expo_hea'] = '��������';
$lang['adr_dele_hea'] = '����';
$lang['adr_new_entry'] = '�� �ּ�';

$lang['addr_saved'] = '���������� ���� �Ǿ����ϴ�.';
$lang['addr_added'] = '���������� �߰� �Ǿ����ϴ�.';
$lang['addr_deleted'] = '���������� ���� �Ǿ����ϴ�.';


// [BlockSender]
$lang['blk_title'] = '������ ����';
$lang['blk_information'] = '���͵��� ���� �̸��ϸ� ����';
$lang['blk_email'] = '�̸���';
$lang['blk_no_address'] = '�ּ� ����';
$lang['blk_close'] = '�ݱ�';
$lang['blk_save'] = '����';

// [Event]
$lang['evt_title'] = 'Calendar Event'; // FIXME: need translation
$lang['evt_save'] = '����';
$lang['evt_delete'] = '����';
$lang['evt_stop'] = 'Stop time'; // FIXME: need translation
$lang['evt_start'] = 'Start time'; // FIXME: need translation

