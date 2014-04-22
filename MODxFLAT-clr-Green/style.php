<?php
/**
 * Filename:       media/style/$modx->config['manager_theme']/style.php
 * Function:       Color style for MODxFLAT Theme -  You need MODxFLAT to use it.
 * Encoding:       UTF-8
 * Credit:         icons by Mark James of FamFamFam http://www.famfamfam.com/lab/icons/
 * Date:           22-Apr-2014
 * Version:        1.0
 * MODX version:   1.0.13
*/

// import templates and icon path from MODxFLAT
$modx->config['manager_welcome_tpl'] = '@FILE:media/style/MODxFLAT/welcome.tpl';
$modx->config['manager_login_tpl'] = '@FILE:media/style/MODxFLAT/login.tpl';
$modx->config['manager_lockout_tpl'] = '@FILE:media/style/MODxFLAT/manager.lockout.tpl';
$style_path = 'media/style/MODxFLAT/images/';

// Tree Menu Toolbar
// Tree Menu Toolbar
$_style['add_doc_tree']             = '<i class="fa fa-file fa-lg"></i>';
$_style['add_weblink_tree']         = '<i class="fa fa-link fa-lg"></i>';
$_style['collapse_tree']            = '<i class="fa fa-arrow-circle-up fa-lg"></i>';
$_style['empty_recycle_bin']        = '<i class="fa fa-trash-o fa-lg"></i>';
$_style['empty_recycle_bin_empty']  = '<i class="fa fa-trash-o fa-lg"></i>';
$_style['expand_tree']              = '<i class="fa fa-arrow-circle-down fa-lg"></i>';
$_style['hide_tree']                = '<i class="fa fa-caret-square-o-left fa-lg"></i>';
$_style['refresh_tree']             = '<i class="fa fa-refresh fa-lg"></i>';
$_style['show_tree']                = $style_path.'fontaw/expand.png';
$_style['sort_tree']                = '<i class="fa fa-sort fa-lg"></i>';


// Tree Icons
$_style['tree_deletedpage']         = $style_path.'fontaw/file.png';
$_style['tree_folder']              = $style_path.'fontaw/folder-close-alt.png'; /* folder.png */
$_style['tree_folderopen']          = $style_path.'fontaw/folder-open-alt.png'; /* folder-open.png */
$_style['tree_folder_secure']       = $style_path.'fontaw/folder-close.png';
$_style['tree_folderopen_secure']   = $style_path.'fontaw/folder-open.png';
$_style['tree_globe']               = $style_path.'fontaw/globe.png';
$_style['tree_linkgo']              = $style_path.'fontaw/link.png';
$_style['tree_minusnode']           = $style_path.'fontaw/angle-down.png';
$_style['tree_page']                = $style_path.'fontaw/file-alt.png';
$_style['tree_page_home']           = $style_path.'fontaw/home.png';
$_style['tree_page_404']            = $style_path.'fontaw/warning-sign.png';
$_style['tree_page_hourglass']      = $style_path.'fontaw/time.png';
$_style['tree_page_info']           = $style_path.'fontaw/info.png';
$_style['tree_page_blank']          = $style_path.'tree/application.png';
$_style['tree_page_css']            = $style_path.'fontaw/file-text-alt.png';
$_style['tree_page_html']           = $style_path.'fontaw/file-alt.png';
$_style['tree_page_xml']            = $style_path.'fontaw/file-text-alt.png';
$_style['tree_page_js']             = $style_path.'fontaw/file-text-alt.png';
$_style['tree_page_rss']            = $style_path.'fontaw/file-text-alt.png';
$_style['tree_page_pdf']            = $style_path.'fontaw/file-text-alt.png';
$_style['tree_page_word']           = $style_path.'fontaw/file-alt.png';
$_style['tree_page_excel']          = $style_path.'fontaw/file-text-alt.png';
$_style['tree_plusnode']            = $style_path.'fontaw/angle-right.png';
$_style['tree_showtree']            = '<img src="'.$style_path.'fontaw/sitemap.png" width="16" height="16" align="absmiddle" />';
$_style['tree_weblink']             = $style_path.'fontaw/link.png';

$_style['tree_page_secure']         = $style_path.'tree/application_key.png';
$_style['tree_page_blank_secure']   = $style_path.'tree/application_html_secure.png';
$_style['tree_page_css_secure']     = $style_path.'tree/application_css_secure.png';
$_style['tree_page_html_secure']    = $style_path.'tree/application_html_secure.png';
$_style['tree_page_xml_secure']     = $style_path.'tree/application_xml_secure.png';
$_style['tree_page_js_secure']      = $style_path.'tree/application_js_secure.png';
$_style['tree_page_rss_secure']     = $style_path.'tree/application_rss_secure.png';
$_style['tree_page_pdf_secure']     = $style_path.'tree/application_pdf_secure.png';
$_style['tree_page_word_secure']    = $style_path.'tree/application_word_secure.png';
$_style['tree_page_excel_secure']   = $style_path.'tree/application_excel_secure.png';


// Icons
$_style['icons_add']                = $style_path.'icons/save.png';
$_style['icons_cal']                = $style_path.'icons/cal.gif';
$_style['icons_cal_nodate']         = $style_path.'icons/cal_nodate.gif';
$_style['icons_cancel']             = $style_path.'icons/stop.png';
$_style['icons_close']              = $style_path.'icons/stop.png';
$_style['icons_delete']             = $style_path.'icons/delete.png';
$_style['icons_delete_document']    = $style_path.'icons/delete.png';
$_style['icons_resource_overview']  = $style_path.'icons/information.png';
$_style['icons_resource_duplicate'] = $style_path.'icons/page_white_copy.png';
$_style['icons_edit_document']      = $style_path.'icons/save.png';
$_style['icons_email']              = $style_path.'icons/email.png';
$_style['icons_folder']             = $style_path.'icons/folder.gif';
$_style['icons_home']               = $style_path.'icons/home.gif';
$_style['icons_information']        = $style_path.'icons/information.png';
$_style['icons_loading_doc_tree']   = $style_path.'icons/information.png'; // top bar
$_style['icons_mail']               = $style_path.'icons/email.png'; // top bar
$_style['icons_message_forward']    = $style_path.'icons/forward.gif';
$_style['icons_message_reply']      = $style_path.'icons/reply.gif';
$_style['icons_modules']            = $style_path.'icons/modules.gif';
$_style['icons_move_document']      = $style_path.'icons/page_white_go.png';
$_style['icons_new_document']       = $style_path.'icons/page_white_add.png';
$_style['icons_new_weblink']        = $style_path.'icons/world_link.png';
$_style['icons_preview_resource']   = $style_path.'icons/page_white_magnify.png';
$_style['icons_publish_document']   = $style_path.'icons/clock_play.png';
$_style['icons_refresh']            = $style_path.'icons/refresh.png';
$_style['icons_save']               = $style_path.'icons/save.png';
$_style['icons_set_parent']         = $style_path.'icons/layout_go.png';
$_style['icons_table']              = $style_path.'icons/table.gif';
$_style['icons_undelete_resource']  = $style_path.'icons/b092.gif';
$_style['icons_unpublish_resource'] = $style_path.'icons/clock_stop.png';
$_style['icons_user']               = $style_path.'icons/user.gif';
$_style['icons_weblink']            = $style_path.'icons/world_link.png';
$_style['icons_working']            = $style_path.'icons/exclamation.png'; // top bar
$_style['icons_event1']             = $style_path.'icons/event1.png';
$_style['icons_event2']             = $style_path.'icons/event2.png';
$_style['icons_event3']             = $style_path.'icons/event3.png';
$_style['icons_secured']            = $style_path.'icons/secured.gif';

// Tabs
$_style['icons_tab_preview']        = $style_path.'icons/preview.png';

// Indicators
$_style['icons_tooltip']            = $style_path.'icons/b02.gif';
$_style['icons_tooltip_over']       = $style_path.'icons/b02_trans.gif';

// Large Icons
$_style['icons_backup_large']       = $style_path.'flat/download.png';
$_style['icons_mail_large']         = $style_path.'flat/envelope.png';
$_style['icons_modules_large']      = $style_path.'flat/cogs.png';
$_style['icons_resources_large']    = $style_path.'flat/technical.png';
$_style['icons_security_large']     = $style_path.'flat/lock.png';
$_style['icons_webusers_large']     = $style_path.'flat/group.png';

// Miscellaneous
$_style['ajax_loader']              = '<p>'.$_lang['loading_page'].'</p><p><img src="'.$style_path.'misc/ajax-loader.gif" alt="Please wait" /></p>';
$_style['tx']                       = $style_path.'misc/_tx_.gif';
$_style['icons_right_arrow']        = $style_path.'icons/circlerightarrow.gif';
$_style['fade']                     = $style_path.'misc/fade.gif';
$_style['ed_save']                  = $style_path.'misc/ed_save.gif';

?>