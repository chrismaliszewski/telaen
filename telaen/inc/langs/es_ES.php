<?php
/*
 * Spanish (Espa�ol) (canonical list and phrasing)
 */

$lang = array();

// User-friendly names to system folders
$lang['inbox_extended'] = 'Bandeja de Entrada';
$lang['sent_extended'] = 'Elementos Enviados';
$lang['trash_extended'] = 'Papelera';
$lang['spam_extended'] = 'Correo Basura';

// Navigation texts
$lang['pages_text'] = 'P�ginas';
$lang['first_text'] = 'Primero';
$lang['previous_text'] = 'Anterior';
$lang['next_text'] = 'Siguiente';
$lang['last_text'] = '�ltimo';
$lang['total_text'] = 'Total';

// Mail Server Errors
$lang['err_login_msg'] = 'Error de entrada';
$lang['err_system_msg'] = 'Error del sistema';
$lang['error_login'] = 'Compruebe su usuario y contrase�a e intente nuevamente';
$lang['error_connect'] = 'No fue posible la conexi�n con el servidor';
$lang['error_retrieving'] = 'No fue posible obtener sus mensajes, hubo modificaciones en su bandeja';
$lang['error_session_expired'] = 'Your session is expired, please login again';
$lang['error_other'] = 'Hubo problemas con el sistema, por favor contacte con el administrador';

// Invalid name of mailbox
$lang['error_invalid_name'] = 'Nombre de directorio no v�lido - Utilice solamente los caracteres  A-Z, 0-9, .- y o espacio';

// Validations when sending mails
$lang['error_no_recipients'] = 'Es necesario especificar al menos un destinatario';
$lang['error_compose_invalid_mail1_s'] = 'El siguiente email aparentemente no es v�lido';
$lang['error_compose_invalid_mail1_p'] = 'Los siguientes emails aparentemente no son v�lidos';
$lang['error_compose_invalid_mail2_s'] = 'Verifique antes de enviar el mensaje';
$lang['error_compose_invalid_mail2_p'] = 'Verifique antes de enviar los mensajes';

// Confirmation of delete
$lang['confirm_delete'] = '�Realmente desea borrar este mensaje?';

// If the message no have a subject or sender
$lang['no_subject_text'] = '[Sin asunto]';
$lang['no_sender_text'] = '[Desconocido]';
$lang['no_recipient_text'] = '[Desconocido]';

// If the quota limit was exceeded
$lang['quota_exceeded'] = 'No hay espacio suficiente en su bandeja de entrada para completar la operaci�n\Es necesario borrar algunos mensajes para continuar';
$lang['quota_usage_info'] = 'L�mite de espacio';
$lang['quota_usage_used'] = 'usados';
$lang['quota_usage_of'] = 'de';
$lang['quota_usage_avail'] = 'disponibles';

//
// Date Format
// %d = day, %m = month, %y = year, %H = hour, %M = minutes
// for a complete list, see http://www.php.net/strftime
//
$lang['date_format'] = '%d/%m/%y %H:%M';

// CharSet
$lang['default_char_set'] = 'iso-8859-1';

// Menu
$lang['messages_mnu'] = 'Mensajes';
$lang['read_menu'] = 'Read E-Mail(s)';
$lang['compose_mnu'] = 'Escribir';
$lang['refresh_mnu'] = 'Actualizar';
$lang['folders_mnu'] = 'Carpetas';
$lang['search_mnu'] = 'Buscar';
$lang['address_mnu'] = 'Libreta de direcciones';
$lang['empty_trash_mnu'] = 'Vaciar papelera';
$lang['prefs_mnu'] = 'Preferencias';
$lang['logoff_mnu'] = 'Salir';

// Reply
$lang['reply_prefix'] = 'Re:';
$lang['forward_prefix'] = 'Enc:';
$lang['reply_delimiter'] = '--------- Mensage Original --------';
$lang['reply_from_hea'] = 'De:';
$lang['reply_to_hea'] = 'Para:';
$lang['reply_cc_hea'] = 'Copia:';
$lang['reply_date_hea'] = 'Fecha:';
$lang['reply_subject_hea'] = 'Asunto:';
// done


// page-specific vars

// [Headers]
$lang['key_hea'] = 'Clave';
$lang['value_hea'] = 'Valor';

// [Folders]
$lang['fld_name_hea'] = 'Carpeta';
$lang['fld_messages_hea'] = 'Mensajes';
$lang['fld_size_hea'] = 'Tama�o';
$lang['fld_empty_hea'] = 'Vaciar';
$lang['fld_delete_hea'] = 'Borrar';
$lang['fld_total'] = 'Total:';
$lang['fld_make_new'] = 'Crear nueva carpeta';
$lang['folders_to'] = 'Carpetas a ';

// [MessageList]
$lang['messages_to'] = 'Mensajes para ';
$lang['no_messages'] = 'No hay nuevos mensajes en su ';
$lang['delete_selected_mnu'] = 'Borrar seleccionados';
$lang['move_selected_mnu'] = 'Mover seleccionados a';
$lang['mark_selected_mnu'] = 'Marcar como le�do';
$lang['unmark_selected_mnu'] = 'Marcar como no le�do';
$lang['move_selected_to_trash_mnu'] = 'Move to Trash';


$lang['delete_mnu'] = 'Borrar';
$lang['move_mnu'] = 'Mover a';
$lang['subject_hea'] = 'Asunto:';
$lang['from_hea'] = 'De:';
$lang['to_hea'] = 'Para:';
$lang['date_hea'] = 'Fecha:';
$lang['size_hea'] = 'Tama�o';
$lang['have_spam'] = 'Tiene spam en la carpeta de Correo Basura';

$lang['msg_you_have'] = 'Usted tiene';
$lang['msg_message'] = 'mensaje';
$lang['msg_messages'] = 'mensajes';

$lang['msg_more_unread'] = 'no le�dos';
$lang['msg_one_unread'] = 'no le�do';
$lang['msg_none_unread'] = 'ninguno no le�do';
$lang['msg_in_the_folder'] = 'en la carpeta';


// [Login]
$lang['lgn_title'] = 'Login';
$lang['lgn_welcome_msg'] = 'Bienvenido, por favor introduzca sus datos';
$lang['lng_user_email'] = 'Direcci�n de correo';
$lang['lng_user_name'] = 'Nombre de usuario';
$lang['lng_user_pwd'] = 'Contrase�a';
$lang['lng_server'] = 'Server';
$lang['lng_theme'] = 'Tema';
$lang['lng_language'] = 'Idioma';
$lang['lng_login_btn'] = 'Entrar &gt;&gt;';
$lang['lng_cookie_not_enabled'] = 'Las cookies deben estar habilitadas';
$lang['lng_cookie_not_valid'] = 'Comprobacion de cookies fallida';

// [Newmessage]

$lang['newmsg_title'] = 'Redactar mensaje';

$lang['to_hea'] = 'Para:';
$lang['cc_hea'] = 'Copia:';
$lang['bcc_hea'] = 'Copia Oculta:';
$lang['subject_hea'] = 'Asunto:';
$lang['address_tip'] = 'Desde libreta';

$lang['attach_hea'] = 'Archivos adjuntos:';
$lang['attch_add_new'] = 'Adjuntar nuevo archivo';
$lang['attch_name_hea'] = 'Nombre';
$lang['attch_size'] = 'Tama�o';
$lang['attch_type_hea'] = 'Tipo';
$lang['attch_dele_hea'] = 'Borrar';
$lang['attch_no_hea'] = 'Sin archivos adjuntos';

$lang['add_signature'] = 'Adjuntar Firma';
$lang['send_text'] = 'Enviar';

$lang['result_error'] = 'No ha sido posible enviar su email';
$lang['result_success'] = 'Su email ha sido enviado sin problemas';
$lang['nav_continue'] = 'Continuar';
$lang['nav_back'] = 'Volver';

$lang['up_title'] = 'Adjuntar archivo';
$lang['up_information_text'] = 'Seleccione el archivo deseado';
$lang['up_button_text'] = 'Enviar';

$lang['require_receipt'] = 'Acuse de recibo';

$lang['priority_text'] = 'Prioridad';
$lang['priority_low'] = 'Baja';
$lang['priority_normal'] = 'Normal';
$lang['priority_high'] = 'Alta';

// [Preferences]
$lang['prf_title'] = 'Preferencias';
$lang['prf_general_title'] = 'Informaciones generales';
$lang['prf_name'] = 'Nombre';
$lang['prf_reply_to'] = 'Responder a';
$lang['prf_time_zone'] = 'Huso horario';
$lang['prf_trash_title'] = 'Papelera';
$lang['prf_save_to_trash'] = 'Cuando <b>borre</b> un mensaje, moverlo a la';
$lang['prf_save_only_read'] = 'Guardar s�lo <b>mensajes leidos</b> en la';
$lang['prf_empty_on_exit'] = '<b>Vaciar</b> la Papelera al salir';
$lang['prf_empty_spam_on_exit'] = '<b>Borrar</b> correo basura cuando cierre sesi�n';
$lang['prf_unmark_read_on_exit'] = 'Marcar mensajes LE�DOS como NO LE�DOS cuando cierre sesi�n';
$lang['prf_sent_title'] = 'Elementos Enviados';
$lang['prf_save_sent'] = 'Guardar mensajes <b>enviados</b> en la carpeta';
$lang['prf_messages_title'] = 'Mensajes';
$lang['prf_page_limit'] = 'L�mite de mensajes por p�gina';
$lang['prf_signature_title'] = 'Firma';
$lang['prf_signature'] = 'Introduzca su firma';
$lang['prf_auto_add_sign'] = 'Adjuntar la firma autom�ticamente a todos sus mensajes salientes ';
$lang['prf_save_button'] = 'Guardar';
$lang['prf_display_images'] = 'Mostrar im�genes adjuntas autom�ticamente';
$lang['prf_default_editor_mode'] = 'Modo de edici�n normal';
$lang['prf_default_editor_mode_text'] = '"Texto puro"';
$lang['prf_default_editor_mode_html'] = '"Editor HTML Avanzado"';
$lang['prf_time_to_refesh'] = 'Tiempo de atualizaci�n de mensajes (minutos)';
$lang['prf_spam_level'] = 'Sensibilidad para SPAM (0=Desactivada, 1=Muy alta, 9=Muy baja)';
$lang['prf_auto_require_receipt'] = 'Require read receipt by default';

$lang['prf_msg_saved'] = 'Se han guardado sus preferencias';

// filters
$lang['filter_title'] = 'Filtros';

$lang['filter_new'] = 'Crear filtro';
$lang['filter_desc'] = 'Escoja el criterio de b�squeda y la acci�n a tomar para el mensaje entrante';
$lang['filter_list'] = 'Filtros actuales';

$lang['filter_field_from'] = 'De';
$lang['filter_field_to'] = 'A';
$lang['filter_field_subject'] = 'Asunto';
$lang['filter_field_header'] = 'Header';
$lang['filter_field_body'] = 'Body';

$lang['filter_type_move'] = 'Mover';
$lang['filter_type_delete'] = 'Eliminar';
$lang['filter_type_mark'] = 'Marcar como le�do';

$lang['filter_add'] = 'Agregar filtro';
$lang['filter_delete'] = 'Eliminar';
$lang['filter_delete_selected'] = 'Eliminar filtros seleccionados';

$lang['filter_field'] = 'Filtrar por campo';
$lang['filter_match'] = 'Texto a buscar';
$lang['filter_type'] = 'Acci�n';
$lang['filter_folder'] = 'Carpeta de destino';

$lang['filter_msg_nofilters'] = 'No hay filtros disponibles';
$lang['filter_msg_added'] = 'Filtro agregado';
$lang['filter_msg_deleted'] = 'Filtro eliminado';


// [Catch]
$lang['ctc_title'] = 'A�adir a la libreta de direcciones';
$lang['ctc_information'] = 'Solamente ser�n mostrados los emails que se encuentren en la libreta de direcciones';
$lang['ctc_name'] = 'Nombre';
$lang['ctc_email'] = 'Email';
$lang['ctc_no_address'] = 'Ninguna direcci�n disponible';
$lang['ctc_close'] = 'Cerrar';
$lang['ctc_save'] = 'Guardar';

// [Readmsg]
$lang['next_mnu'] = 'Siguiente';
$lang['previous_mnu'] = 'Anterior';
$lang['back_mnu'] = 'Volver';
$lang['reply_mnu'] = 'Responder';
$lang['reply_all_mnu'] = 'Responder a todos';
$lang['forward_mnu'] = 'Reenviar';
$lang['headers_mnu'] = 'Encabezado';
$lang['move_mnu'] = 'Mover a';
$lang['move_to_trash_mnu'] = 'Move to Trash';
$lang['delete_mnu'] = 'Borrar';
$lang['print_mnu'] = 'Imprimir';
$lang['download_mnu'] = 'Descargar';

$lang['from_hea'] = 'De:';
$lang['to_hea'] = 'Para:';
$lang['cc_hea'] = 'Copia:';
$lang['date_hea'] = 'Fecha:';
$lang['subject_hea'] = 'Asunto:';
$lang['attach_hea'] = 'Archivos adjuntos:';

$lang['attch_name_hea'] = 'Nombre';
$lang['attch_force_hea'] = 'Descargar';
$lang['attch_type_hea'] = 'Tipo';
$lang['attch_size_hea'] = 'Tama�o';
$lang['catch_address'] = 'A�adir a la libreta de direcciones';
$lang['block_address'] = 'Block address';

// [Search]
$lang['sch_title'] = 'Buscar';
$lang['sch_information_text'] = 'Escriba la frase o palabra que desea buscar.<br> La b�squeda en el cuerpo del mensaje solamente se realizar� en el caso de que el mensaje haya sido enviado ';
$lang['sch_button_text'] = 'Buscar &gt;&gt;';
$lang['sch_subject_hea'] = 'Asunto';
$lang['sch_from_hea'] = 'De';
$lang['sch_date_hea'] = 'Fecha';
$lang['sch_body_hea'] = 'Mensaje';
$lang['sch_folder_hea'] = 'Carpeta';
$lang['sch_no_results'] = 'No se ha encontrado ning�n mensaje';

// [QuickAddress]
$lang['qad_title'] = 'Libreta de direcciones';
$lang['qad_select_address'] = 'Seleccione un contacto';
$lang['qad_to'] = 'Para';
$lang['qad_cc'] = 'Copia';
$lang['qad_bcc'] = 'Copia Oculta';

// [AddressBook]
// edit/display
$lang['adr_title'] = 'Libreta de direcciones';
$lang['adr_name'] = 'Nombre';
$lang['adr_email'] = 'Email';
$lang['adr_street'] = 'Calle';
$lang['adr_city'] = 'Ciudad';
$lang['adr_state'] = 'Regi�n/Provincia';
$lang['adr_work'] = 'Profesi�n';
$lang['adr_back'] = 'Volver';
$lang['adr_save'] = 'Guardar';
$lang['adr_phone'] = 'Tel�fono';
$lang['adr_cell'] = 'Cell';
$lang['adr_note'] = 'Notas';

// list
$lang['adr_name_hea'] = 'Nombre';
$lang['adr_email_hea'] = 'Email';
$lang['adr_edit_hea'] = 'Editar';
$lang['adr_expo_hea'] = 'Exportar';
$lang['adr_dele_hea'] = 'Borrar';
$lang['adr_new_entry'] = 'Nuevo contacto';

$lang['addr_saved'] = 'El contacto ha sido guardado';
$lang['addr_added'] = 'El contacto ha sido a�adido';
$lang['addr_deleted'] = 'El contacto ha sido eliminado';


// [BlockSender]
$lang['blk_title'] = 'Block sender'; // FIXME: need translation
$lang['blk_information'] = 'S�lo  Muestra mensajes de correo electr�nico que no se encuentran en el filtro pero';
$lang['blk_email'] = 'E-mail';
$lang['blk_no_address'] = 'No address available'; // FIXME: need translation
$lang['blk_close'] = 'Cerrar';
$lang['blk_save'] = 'Guardar';

// [Event]
$lang['evt_title'] = 'Evento del Calendario';
$lang['evt_save'] = 'Guardar';
$lang['evt_delete'] = 'Borrar';
$lang['evt_stop'] = 'Stop time'; // FIXME: need translation
$lang['evt_start'] = 'Start time'; // FIXME: need translation

