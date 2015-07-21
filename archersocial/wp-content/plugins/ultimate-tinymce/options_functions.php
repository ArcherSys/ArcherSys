<?php



// Finally, our custom functions for how we want the options to work.
// Functions for Row 3
function tinymce_add_button_fontselect($buttons) {
$options = get_option('jwl_options_group1');
$jwl_fontselect = isset($options['jwl_fontselect_field_id']); 
if ($jwl_fontselect == "1") $buttons[] = 'fontselect'; return $buttons; }
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_fontselect_dropdown']['row'])) {
$jwl_fontselect_dropdown2 = $options2['jwl_fontselect_dropdown']['row'];
if ($jwl_fontselect_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_fontselect"); } 
if ($jwl_fontselect_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_fontselect"); } 
if ($jwl_fontselect_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_fontselect"); }
if ($jwl_fontselect_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_fontselect"); }
}

function tinymce_add_button_fontsizeselect($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_fontsizeselect = isset($options['jwl_fontsizeselect_field_id']);
if ($jwl_fontsizeselect == "1") $buttons[] = 'fontsizeselect'; return $buttons; }
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_fontsizeselect_dropdown']['row'])) {
$jwl_fontsizeselect_dropdown2 = $options2['jwl_fontsizeselect_dropdown']['row'];
if ($jwl_fontsizeselect_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_fontsizeselect"); } 
if ($jwl_fontsizeselect_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_fontsizeselect"); } 
if ($jwl_fontsizeselect_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_fontsizeselect"); }
if ($jwl_fontsizeselect_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_fontsizeselect"); }
}

function tinymce_add_button_cut($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_cut = isset($options['jwl_cut_field_id']); 
if ($jwl_cut == "1") $buttons[] = 'cut'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_cut_dropdown']['row'])) {
$jwl_cut_dropdown2 = $options2['jwl_cut_dropdown']['row'];
if ($jwl_cut_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_cut"); } 
if ($jwl_cut_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_cut"); } 
if ($jwl_cut_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_cut"); }
if ($jwl_cut_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_cut"); }
}

function tinymce_add_button_copy($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_copy = isset($options['jwl_copy_field_id']); 
if ($jwl_copy == "1") $buttons[] = 'copy'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_copy_dropdown']['row'])) {
$jwl_copy_dropdown2 = $options2['jwl_copy_dropdown']['row'];
if ($jwl_copy_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_copy"); } 
if ($jwl_copy_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_copy"); } 
if ($jwl_copy_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_copy"); }
if ($jwl_copy_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_copy"); }
}

function tinymce_add_button_paste($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_paste = isset($options['jwl_paste_field_id']); 
if ($jwl_paste == "1") $buttons[] = 'paste'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_paste_dropdown']['row'])) {
$jwl_paste_dropdown2 = $options2['jwl_paste_dropdown']['row'];
if ($jwl_paste_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_paste"); } 
if ($jwl_paste_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_paste"); } 
if ($jwl_paste_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_paste"); }
if ($jwl_paste_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_paste"); }
}

function tinymce_add_button_backcolorpicker($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_backcolorpicker = isset($options['jwl_backcolorpicker_field_id']); 
if ($jwl_backcolorpicker == "1") $buttons[] = 'backcolorpicker'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_backcolorpicker_dropdown']['row'])) {
$jwl_backcolorpicker_dropdown2 = $options2['jwl_backcolorpicker_dropdown']['row'];
if ($jwl_backcolorpicker_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_backcolorpicker"); } 
if ($jwl_backcolorpicker_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_backcolorpicker"); } 
if ($jwl_backcolorpicker_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_backcolorpicker"); }
if ($jwl_backcolorpicker_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_backcolorpicker"); }
}

function tinymce_add_button_forecolorpicker($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_forecolorpicker = isset($options['jwl_forecolorpicker_field_id']); 
if ($jwl_forecolorpicker == "1") $buttons[] = 'forecolorpicker'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_forecolorpicker_dropdown']['row'])) {
$jwl_forecolorpicker_dropdown2 = $options2['jwl_forecolorpicker_dropdown']['row'];
if ($jwl_forecolorpicker_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_forecolorpicker"); } 
if ($jwl_forecolorpicker_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_forecolorpicker"); } 
if ($jwl_forecolorpicker_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_forecolorpicker"); }
if ($jwl_forecolorpicker_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_forecolorpicker"); }
}

function tinymce_add_button_advhr($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_advhr = isset($options['jwl_advhr_field_id']); 
if ($jwl_advhr == "1") $buttons[] = 'advhr'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_advhr_dropdown']['row'])) {
$jwl_advhr_dropdown2 = $options2['jwl_advhr_dropdown']['row'];
if ($jwl_advhr_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_advhr"); } 
if ($jwl_advhr_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_advhr"); } 
if ($jwl_advhr_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_advhr"); }
if ($jwl_advhr_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_advhr"); }
}

function tinymce_add_button_visualaid($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_visualaid = isset($options['jwl_visualaid_field_id']); 
if ($jwl_visualaid == "1")
$buttons[] = 'visualaid'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_visualaid_dropdown']['row'])) {
$jwl_visualaid_dropdown2 = $options2['jwl_visualaid_dropdown']['row'];
if ($jwl_visualaid_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_visualaid"); } 
if ($jwl_visualaid_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_visualaid"); } 
if ($jwl_visualaid_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_visualaid"); }
if ($jwl_visualaid_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_visualaid"); }
}

function tinymce_add_button_anchor($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_anchor = isset($options['jwl_anchor_field_id']); 
if ($jwl_anchor == "1")
$buttons[] = 'anchor'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_anchor_dropdown']['row'])) {
$jwl_anchor_dropdown2 = $options2['jwl_anchor_dropdown']['row'];
if ($jwl_anchor_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_anchor"); } 
if ($jwl_anchor_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_anchor"); } 
if ($jwl_anchor_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_anchor"); }
if ($jwl_anchor_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_anchor"); }
}

function tinymce_add_button_sub($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_sub = isset($options['jwl_sub_field_id']); 
if ($jwl_sub == "1") $buttons[] = 'sub'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_sub_dropdown']['row'])) {
$jwl_sub_dropdown2 = $options2['jwl_sub_dropdown']['row'];
if ($jwl_sub_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_sub"); } 
if ($jwl_sub_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_sub"); } 
if ($jwl_sub_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_sub"); }
if ($jwl_sub_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_sub"); }
}

function tinymce_add_button_sup($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_sup = isset($options['jwl_sup_field_id']); 
if ($jwl_sup == "1") $buttons[] = 'sup'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_sup_dropdown']['row'])) {
$jwl_sup_dropdown2 = $options2['jwl_sup_dropdown']['row'];
if ($jwl_sup_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_sup"); } 
if ($jwl_sup_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_sup"); } 
if ($jwl_sup_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_sup"); }
if ($jwl_sup_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_sup"); }
}

function tinymce_add_button_search($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_search = isset($options['jwl_search_field_id']); 
if ($jwl_search == "1") $buttons[] = 'search'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_search_dropdown']['row'])) {
$jwl_search_dropdown2 = $options2['jwl_search_dropdown']['row'];
if ($jwl_search_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_search"); } 
if ($jwl_search_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_search"); } 
if ($jwl_search_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_search"); }
if ($jwl_search_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_search"); }
}

function tinymce_add_button_replace($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_replace = isset($options['jwl_replace_field_id']); 
if ($jwl_replace == "1") $buttons[] = 'replace'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_replace_dropdown']['row'])) {
$jwl_replace_dropdown2 = $options2['jwl_replace_dropdown']['row'];
if ($jwl_replace_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_replace"); } 
if ($jwl_replace_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_replace"); } 
if ($jwl_replace_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_replace"); }
if ($jwl_replace_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_replace"); }
}

function tinymce_add_button_datetime($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_datetime = isset($options['jwl_datetime_field_id']); 
if ($jwl_datetime == "1") $buttons[] = 'insertdate,inserttime'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_datetime_dropdown']['row'])) {
$jwl_datetime_dropdown2 = $options2['jwl_datetime_dropdown']['row'];
if ($jwl_datetime_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_datetime"); } 
if ($jwl_datetime_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_datetime"); } 
if ($jwl_datetime_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_datetime"); }
if ($jwl_datetime_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_datetime"); }
}

function tinymce_add_button_nonbreaking($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_nonbreaking = isset($options['jwl_nonbreaking_field_id']); 
if ($jwl_nonbreaking == "1") $buttons[] = 'nonbreaking'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_nonbreaking_dropdown']['row'])) {
$jwl_nonbreaking_dropdown2 = $options2['jwl_nonbreaking_dropdown']['row'];
if ($jwl_nonbreaking_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_nonbreaking"); } 
if ($jwl_nonbreaking_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_nonbreaking"); } 
if ($jwl_nonbreaking_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_nonbreaking"); }
if ($jwl_nonbreaking_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_nonbreaking"); }
}

function tinymce_add_button_mailto($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_mailto = isset($options['jwl_mailto_field_id']); 
if ($jwl_mailto == "1") $buttons[] = 'mailto'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_mailto_dropdown']['row'])) {
$jwl_mailto_dropdown2 = $options2['jwl_mailto_dropdown']['row'];
if ($jwl_mailto_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_mailto"); } 
if ($jwl_mailto_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_mailto"); } 
if ($jwl_mailto_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_mailto"); }
if ($jwl_mailto_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_mailto"); }
}

function tinymce_add_button_layers($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_layers = isset($options['jwl_layers_field_id']); 
if ($jwl_layers == "1") $buttons[] = 'insertlayer,moveforward,movebackward,absolute'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_layers_dropdown']['row'])) {
$jwl_layers_dropdown2 = $options2['jwl_layers_dropdown']['row'];
if ($jwl_layers_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_layers"); } 
if ($jwl_layers_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_layers"); } 
if ($jwl_layers_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_layers"); }
if ($jwl_layers_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_layers"); }
}

function tinymce_add_button_span($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_span = isset($options['jwl_span_field_id']); 
if ($jwl_span == "1") $buttons[] = 'jwlSpan'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_span_dropdown']['row'])) {
$jwl_span_dropdown2 = $options2['jwl_span_dropdown']['row'];
if ($jwl_span_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_span"); } 
if ($jwl_span_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_span"); } 
if ($jwl_span_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_span"); }
if ($jwl_span_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_span"); }
}

function tinymce_add_button_equation($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_equation = isset($options['jwl_equation_field_id']); 
if ($jwl_equation == "1") $buttons[] = 'equation'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_equation_dropdown']['row'])) {
$jwl_equation_dropdown2 = $options2['jwl_equation_dropdown']['row'];
if ($jwl_equation_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_equation"); } 
if ($jwl_equation_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_equation"); } 
if ($jwl_equation_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_equation"); }
if ($jwl_equation_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_equation"); }
}

function tinymce_add_button_encode($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_encode = isset($options['jwl_encode_field_id']); 
if ($jwl_encode == "1") $buttons[] = 'encode,decode'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_encode_dropdown']['row'])) {
$jwl_encode_dropdown2 = $options2['jwl_encode_dropdown']['row'];
if ($jwl_encode_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_encode"); } 
if ($jwl_encode_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_encode"); } 
if ($jwl_encode_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_encode"); }
if ($jwl_encode_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_encode"); }
}

function tinymce_add_button_directionality($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_directionality = isset($options['jwl_directionality_field_id']); 
if ($jwl_directionality == "1") $buttons[] = 'ltr,rtl'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_directionality_dropdown']['row'])) {
$jwl_directionality_dropdown2 = $options2['jwl_directionality_dropdown']['row'];
if ($jwl_directionality_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_directionality"); } 
if ($jwl_directionality_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_directionality"); } 
if ($jwl_directionality_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_directionality"); }
if ($jwl_directionality_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_directionality"); }
}

function tinymce_add_button_ezimage($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_ezimage = isset($options['jwl_ezimage_field_id']); 
if ($jwl_ezimage == "1") $buttons[] = 'ezimage'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_ezimage_dropdown']['row'])) {
$jwl_ezimage_dropdown2 = $options2['jwl_ezimage_dropdown']['row'];
if ($jwl_ezimage_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_ezimage"); } 
if ($jwl_ezimage_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_ezimage"); } 
if ($jwl_ezimage_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_ezimage"); }
if ($jwl_ezimage_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_ezimage"); }
}

function tinymce_add_button_ptags($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_ptags = isset($options['jwl_ptags_field_id']); 
if ($jwl_ptags == "1") $buttons[] = 'ptags'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_ptags_dropdown']['row'])) {
$jwl_ptags_dropdown2 = $options2['jwl_ptags_dropdown']['row'];
if ($jwl_ptags_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_ptags"); } 
if ($jwl_ptags_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_ptags"); } 
if ($jwl_ptags_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_ptags"); }
if ($jwl_ptags_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_ptags"); }
}

function tinymce_add_button_linebreak($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_linebreak = isset($options['jwl_mcelinebreak_field_id']); 
if ($jwl_linebreak == "1") $buttons[] = 'linebreak'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_mcelinebreak_dropdown']['row'])) {
$jwl_linebreak_dropdown2 = $options2['jwl_mcelinebreak_dropdown']['row'];
if ($jwl_linebreak_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_linebreak"); } 
if ($jwl_linebreak_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_linebreak"); } 
if ($jwl_linebreak_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_linebreak"); }
if ($jwl_linebreak_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_linebreak"); }
}

// ***********************
//
//
//
// Functions for Row 4
function tinymce_add_button_styleselect($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_styleselect = isset($options['jwl_styleselect_field_id']); 
if ($jwl_styleselect == "1") $buttons[] = 'styleselect'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_styleselect_dropdown']['row'])) {
$jwl_styleselect_dropdown2 = $options2['jwl_styleselect_dropdown']['row'];
if ($jwl_styleselect_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_styleselect"); } 
if ($jwl_styleselect_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_styleselect"); } 
if ($jwl_styleselect_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_styleselect"); }
if ($jwl_styleselect_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_styleselect"); }
}

function tinymce_add_button_tableDropdown($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_tableDropdown = isset($options['jwl_tableDropdown_field_id']); 
if ($jwl_tableDropdown == "1") $buttons[] = 'tableDropdown'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_tableDropdown_dropdown']['row'])) {
$jwl_tableDropdown_dropdown2 = $options2['jwl_tableDropdown_dropdown']['row'];
if ($jwl_tableDropdown_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_tableDropdown"); } 
if ($jwl_tableDropdown_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_tableDropdown"); } 
if ($jwl_tableDropdown_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_tableDropdown"); }
if ($jwl_tableDropdown_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_tableDropdown"); }
}

function tinymce_add_button_emotions($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_emotions = isset($options['jwl_emotions_field_id']); 
if ($jwl_emotions == "1") $buttons[] = 'emotions'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_emotions_dropdown']['row'])) {
$jwl_emotions_dropdown2 = $options2['jwl_emotions_dropdown']['row'];
if ($jwl_emotions_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_emotions"); } 
if ($jwl_emotions_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_emotions"); } 
if ($jwl_emotions_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_emotions"); }
if ($jwl_emotions_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_emotions"); }
}

function tinymce_add_button_image($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_image = isset($options['jwl_image_field_id']); 
if ($jwl_image == "1") $buttons[] = 'image'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_image_dropdown']['row'])) {
$jwl_image_dropdown2 = $options2['jwl_image_dropdown']['row'];
if ($jwl_image_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_image"); } 
if ($jwl_image_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_image"); } 
if ($jwl_image_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_image"); }
if ($jwl_image_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_image"); }
}

function tinymce_add_button_preview($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_preview = isset($options['jwl_preview_field_id']); 
if ($jwl_preview == "1") $buttons[] = 'preview'; return $buttons; }
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_preview_dropdown']['row'])) {
$jwl_preview_dropdown2 = $options2['jwl_preview_dropdown']['row'];
if ($jwl_preview_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_preview"); } 
if ($jwl_preview_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_preview"); } 
if ($jwl_preview_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_preview"); }
if ($jwl_preview_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_preview"); }
}

function tinymce_add_button_cite($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_cite = isset($options['jwl_cite_field_id']); 
if ($jwl_cite == "1") $buttons[] = 'cite'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_cite_dropdown']['row'])) {
$jwl_cite_dropdown2 = $options2['jwl_cite_dropdown']['row'];
if ($jwl_cite_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_cite"); } 
if ($jwl_cite_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_cite"); } 
if ($jwl_cite_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_cite"); }
if ($jwl_cite_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_cite"); }
}

function tinymce_add_button_abbr($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_abbr = isset($options['jwl_abbr_field_id']); 
if ($jwl_abbr == "1") $buttons[] = 'abbr'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_abbr_dropdown']['row'])) {
$jwl_abbr_dropdown2 = $options2['jwl_abbr_dropdown']['row'];
if ($jwl_abbr_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_abbr"); } 
if ($jwl_abbr_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_abbr"); } 
if ($jwl_abbr_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_abbr"); }
if ($jwl_abbr_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_abbr"); }
}

function tinymce_add_button_acronym($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_acronym = isset($options['jwl_acronym_field_id']); 
if ($jwl_acronym == "1") $buttons[] = 'acronym'; return $buttons; }
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_acronym_dropdown']['row'])) {
$jwl_acronym_dropdown2 = $options2['jwl_acronym_dropdown']['row'];
if ($jwl_acronym_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_acronym"); } 
if ($jwl_acronym_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_acronym"); } 
if ($jwl_acronym_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_acronym"); }
if ($jwl_acronym_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_acronym"); }
}

function tinymce_add_button_del($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_del = isset($options['jwl_del_field_id']); 
if ($jwl_del == "1") $buttons[] = 'del'; return $buttons; }
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_del_dropdown']['row'])) {
$jwl_del_dropdown2 = $options2['jwl_del_dropdown']['row'];
if ($jwl_del_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_del"); } 
if ($jwl_del_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_del"); } 
if ($jwl_del_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_del"); }
if ($jwl_del_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_del"); }
}

function tinymce_add_button_ins($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_ins = isset($options['jwl_ins_field_id']); 
if ($jwl_ins == "1") $buttons[] = 'ins'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_ins_dropdown']['row'])) {
$jwl_ins_dropdown2 = $options2['jwl_ins_dropdown']['row'];
if ($jwl_ins_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_ins"); } 
if ($jwl_ins_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_ins"); } 
if ($jwl_ins_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_ins"); }
if ($jwl_ins_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_ins"); }
}

function tinymce_add_button_attribs($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_attribs = isset($options['jwl_attribs_field_id']); 
if ($jwl_attribs == "1") $buttons[] = 'attribs'; return $buttons; }
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_attribs_dropdown']['row'])) {
$jwl_attribs_dropdown2 = $options2['jwl_attribs_dropdown']['row'];
if ($jwl_attribs_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_attribs"); } 
if ($jwl_attribs_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_attribs"); } 
if ($jwl_attribs_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_attribs"); }
if ($jwl_attribs_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_attribs"); }
}

function tinymce_add_button_styleprops($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_styleprops = isset($options['jwl_styleprops_field_id']); 
if ($jwl_styleprops == "1") $buttons[] = 'styleprops'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_styleprops_dropdown']['row'])) {
$jwl_styleprops_dropdown2 = $options2['jwl_styleprops_dropdown']['row'];
if ($jwl_styleprops_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_styleprops"); } 
if ($jwl_styleprops_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_styleprops"); } 
if ($jwl_styleprops_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_styleprops"); }
if ($jwl_styleprops_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_styleprops"); }
}

function tinymce_add_button_code($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_code = isset($options['jwl_code_field_id']); 
if ($jwl_code == "1") $buttons[] = 'code'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_code_dropdown']['row'])) {
$jwl_code_dropdown2 = $options2['jwl_code_dropdown']['row'];
if ($jwl_code_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_code"); } 
if ($jwl_code_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_code"); } 
if ($jwl_code_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_code"); }
if ($jwl_code_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_code"); }
}

function tinymce_add_button_codemagic($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_codemagic = isset($options['jwl_codemagic_field_id']); 
if ($jwl_codemagic == "1") $buttons[] = 'codemagic'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_codemagic_dropdown']['row'])) {
$jwl_codemagic_dropdown2 = $options2['jwl_codemagic_dropdown']['row'];
if ($jwl_codemagic_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_codemagic"); } 
if ($jwl_codemagic_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_codemagic"); } 
if ($jwl_codemagic_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_codemagic"); }
if ($jwl_codemagic_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_codemagic"); }
}

function tinymce_add_button_html5($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_html5 = isset($options['jwl_html5_field_id']); 
if ($jwl_html5 == "1") $buttons[] = 'tagwrap'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_html5_dropdown']['row'])) {
$jwl_html5_dropdown2 = $options2['jwl_html5_dropdown']['row'];
if ($jwl_html5_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_html5"); } 
if ($jwl_html5_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_html5"); } 
if ($jwl_html5_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_html5"); }
if ($jwl_html5_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_html5"); }
}

function tinymce_add_button_media($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_media = isset($options['jwl_media_field_id']); 
if ($jwl_media == "1") $buttons[] = 'media'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_media_dropdown']['row'])) {
$jwl_media_dropdown2 = $options2['jwl_media_dropdown']['row'];
if ($jwl_media_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_media"); } 
if ($jwl_media_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_media"); } 
if ($jwl_media_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_media"); }
if ($jwl_media_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_media"); }
}

function tinymce_add_button_youtube($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_youtube = isset($options['jwl_youtube_field_id']); 
if ($jwl_youtube == "1") $buttons[] = 'youtube'; return $buttons; }
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_youtube_dropdown']['row'])) {
$jwl_youtube_dropdown2 = $options2['jwl_youtube_dropdown']['row'];
if ($jwl_youtube_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_youtube"); } 
if ($jwl_youtube_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_youtube"); } 
if ($jwl_youtube_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_youtube"); }
if ($jwl_youtube_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_youtube"); }
}

function tinymce_add_button_youtubeIframe($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_youtubeIframe = isset($options['jwl_youtubeIframe_field_id']); 
if ($jwl_youtubeIframe == "1") $buttons[] = 'youtubeIframe'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_youtubeIframe_dropdown']['row'])) {
$jwl_youtubeIframe_dropdown2 = $options2['jwl_youtubeIframe_dropdown']['row'];
if ($jwl_youtubeIframe_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_youtubeIframe"); } 
if ($jwl_youtubeIframe_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_youtubeIframe"); } 
if ($jwl_youtubeIframe_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_youtubeIframe"); }
if ($jwl_youtubeIframe_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_youtubeIframe"); }
}

function tinymce_add_button_imgmap($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_imgmap = isset($options['jwl_imgmap_field_id']); 
if ($jwl_imgmap == "1") $buttons[] = 'imgmap'; return $buttons; }
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_imgmap_dropdown']['row'])) {
$jwl_imgmap_dropdown2 = $options2['jwl_imgmap_dropdown']['row'];
if ($jwl_imgmap_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_imgmap"); } 
if ($jwl_imgmap_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_imgmap"); } 
if ($jwl_imgmap_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_imgmap"); }
if ($jwl_imgmap_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_imgmap"); }
}

function tinymce_add_button_visualchars($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_visualchars = isset($options['jwl_visualchars_field_id']); 
if ($jwl_visualchars == "1") $buttons[] = 'visualchars'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_visualchars_dropdown']['row'])) {
$jwl_visualchars_dropdown2 = $options2['jwl_visualchars_dropdown']['row'];
if ($jwl_visualchars_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_visualchars"); } 
if ($jwl_visualchars_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_visualchars"); } 
if ($jwl_visualchars_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_visualchars"); }
if ($jwl_visualchars_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_visualchars"); }
}

function tinymce_add_button_print($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_print = isset($options['jwl_print_field_id']); 
if ($jwl_print == "1") $buttons[] = 'print'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_print_dropdown']['row'])) {
$jwl_print_dropdown2 = $options2['jwl_print_dropdown']['row'];
if ($jwl_print_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_print"); } 
if ($jwl_print_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_print"); } 
if ($jwl_print_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_print"); }
if ($jwl_print_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_print"); }
}

function tinymce_add_button_shortcodes($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_shortcodes = isset($options['jwl_shortcodes_field_id']); 
if ($jwl_shortcodes == "1") $buttons[] = 'shortcodes'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_shortcodes_dropdown']['row'])) {
$jwl_shortcodes_dropdown2 = $options2['jwl_shortcodes_dropdown']['row'];
if ($jwl_shortcodes_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_shortcodes"); } 
if ($jwl_shortcodes_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_shortcodes"); } 
if ($jwl_shortcodes_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_shortcodes"); }
if ($jwl_shortcodes_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_shortcodes"); }
}

function tinymce_add_button_loremipsum($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_loremipsum = isset($options['jwl_loremipsum_field_id']); 
if ($jwl_loremipsum == "1") $buttons[] = 'loremipsum'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_loremipsum_dropdown']['row'])) {
$jwl_loremipsum_dropdown2 = $options2['jwl_loremipsum_dropdown']['row'];
if ($jwl_loremipsum_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_loremipsum"); } 
if ($jwl_loremipsum_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_loremipsum"); } 
if ($jwl_loremipsum_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_loremipsum"); }
if ($jwl_loremipsum_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_loremipsum"); }
}

function tinymce_add_button_w3cvalidate($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_w3cvalidate = isset($options['jwl_w3cvalidate_field_id']); 
if ($jwl_w3cvalidate == "1") $buttons[] = 'w3cvalidate'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_w3cvalidate_dropdown']['row'])) {
$jwl_w3cvalidate_dropdown2 = $options2['jwl_w3cvalidate_dropdown']['row'];
if ($jwl_w3cvalidate_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_w3cvalidate"); } 
if ($jwl_w3cvalidate_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_w3cvalidate"); } 
if ($jwl_w3cvalidate_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_w3cvalidate"); }
if ($jwl_w3cvalidate_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_w3cvalidate"); }
}

function tinymce_add_button_clker($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_clker = isset($options['jwl_clker_field_id']); 
if ($jwl_clker == "1") $buttons[] = 'clker'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_clker_dropdown']['row'])) {
$jwl_clker_dropdown2 = $options2['jwl_clker_dropdown']['row'];
if ($jwl_clker_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_clker"); } 
if ($jwl_clker_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_clker"); } 
if ($jwl_clker_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_clker"); }
if ($jwl_clker_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_clker"); }
}

function tinymce_add_button_acheck($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_acheck = isset($options['jwl_acheck_field_id']); 
if ($jwl_acheck == "1") $buttons[] = 'acheck'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_acheck_dropdown']['row'])) {
$jwl_acheck_dropdown2 = $options2['jwl_acheck_dropdown']['row'];
if ($jwl_acheck_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_acheck"); } 
if ($jwl_acheck_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_acheck"); } 
if ($jwl_acheck_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_acheck"); }
if ($jwl_acheck_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_acheck"); }
}

function tinymce_add_button_advlink($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_advlink = isset($options['jwl_advlink_field_id']); 
if ($jwl_advlink == "1") $buttons[] = 'advlink'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_advlink_dropdown']['row'])) {
$jwl_advlink_dropdown2 = $options2['jwl_advlink_dropdown']['row'];
if ($jwl_advlink_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_advlink"); } 
if ($jwl_advlink_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_advlink"); } 
if ($jwl_advlink_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_advlink"); }
if ($jwl_advlink_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_advlink"); }
}

function tinymce_add_button_div($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_div = isset($options['jwl_div_field_id']); 
if ($jwl_div == "1") $buttons[] = 'clearleft,clearright,clearboth'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_div_dropdown']['row'])) {
$jwl_div_dropdown2 = $options2['jwl_div_dropdown']['row'];
if ($jwl_div_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_div"); } 
if ($jwl_div_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_div"); } 
if ($jwl_div_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_div"); }
if ($jwl_div_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_div"); }
}

function tinymce_add_button_nextpage($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_nextpage = isset($options['jwl_nextpage_field_id']); 
if ($jwl_nextpage == "1") $buttons[] = 'wp_page'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_nextpage_dropdown']['row'])) {
$jwl_nextpage_dropdown2 = $options2['jwl_nextpage_dropdown']['row'];
if ($jwl_nextpage_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_nextpage"); } 
if ($jwl_nextpage_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_nextpage"); } 
if ($jwl_nextpage_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_nextpage"); }
if ($jwl_nextpage_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_nextpage"); }
}


// Test button
//function tinymce_add_test_button($buttons) {  $buttons[] = 'spellchecker';  return $buttons;  }
//add_filter("mce_buttons_4", "tinymce_add_test_button");

// Add the plugin array for extra features
function jwl_mce_external_plugins( $jwl_plugin_array ) {
		$jwl_plugin_array['table'] = plugin_dir_url( __FILE__ ) . 'addons/table/editor_plugin.js';
		$jwl_plugin_array['emotions'] = plugin_dir_url(__FILE__) . 'addons/emotions/editor_plugin.js';
		$jwl_plugin_array['advlist'] = plugin_dir_url(__FILE__) . 'addons/advlist/editor_plugin.js';
		$jwl_plugin_array['advimage'] = plugin_dir_url(__FILE__) . 'addons/advimage/editor_plugin.js';
		$jwl_plugin_array['searchreplace'] = plugin_dir_url(__FILE__) . 'addons/searchreplace/editor_plugin.js';
		$jwl_plugin_array['preview'] = plugin_dir_url(__FILE__) . 'addons/preview/editor_plugin.js';
		$jwl_plugin_array['xhtmlxtras'] = plugin_dir_url(__FILE__) . 'addons/xhtmlxtras/editor_plugin.js';
		$jwl_plugin_array['style'] = plugin_dir_url(__FILE__) . 'addons/style/editor_plugin.js';
		$jwl_plugin_array['media'] = plugin_dir_url(__FILE__) . 'addons/media/editor_plugin.js';
		$jwl_plugin_array['advhr'] = plugin_dir_url(__FILE__) . 'addons/advhr/editor_plugin.js';
		$jwl_plugin_array['clear'] = plugin_dir_url( __FILE__ ) . 'addons/clear/editor_plugin.js';
		$jwl_plugin_array['tableDropdown'] = plugin_dir_url( __FILE__ ) . 'addons/tableDropdown/editor_plugin.js';
		$jwl_plugin_array['codemagic'] = plugin_dir_url( __FILE__ ) . 'addons/codemagic/editor_plugin.js';
		$jwl_plugin_array['youtube'] = plugin_dir_url( __FILE__ ) . 'addons/youtube/editor_plugin.js';
		$jwl_plugin_array['imgmap'] = plugin_dir_url( __FILE__ ) . 'addons/imgmap/editor_plugin.js';
		$jwl_plugin_array['visualchars'] = plugin_dir_url( __FILE__ ) . 'addons/visualchars/editor_plugin.js';
		$jwl_plugin_array['print'] = plugin_dir_url( __FILE__ ) . 'addons/print/editor_plugin.js';
		$jwl_plugin_array['insertdatetime'] = plugin_dir_url( __FILE__ ) . 'addons/insertdatetime/editor_plugin.js';
		$jwl_plugin_array['nonbreaking'] = plugin_dir_url( __FILE__ ) . 'addons/nonbreaking/editor_plugin.js';
		$jwl_plugin_array['mailto'] = plugin_dir_url( __FILE__ ) . 'addons/mailto/editor_plugin_src.js';
		$jwl_plugin_array['layer'] = plugin_dir_url( __FILE__ ) . 'addons/layer/editor_plugin_src.js';
		$jwl_plugin_array['jwlspan']  =  plugin_dir_url( __FILE__ ) . 'addons/jwl_span/jwl_span.js';
		$jwl_plugin_array['youtubeIframe']  =  plugin_dir_url( __FILE__ ) . 'addons/youtubeIframe/editor_plugin.js';	
		$jwl_plugin_array['equation']  =  plugin_dir_url( __FILE__ ) . 'addons/equation/editor_plugin.js';
		$jwl_plugin_array['shortcodes'] = plugin_dir_url(__FILE__) . 'addons/shortcodes/editor_plugin_src.js';
		$jwl_plugin_array['loremipsum'] = plugin_dir_url(__FILE__) . 'addons/loremipsum/editor_plugin.js';
		$jwl_plugin_array['w3cvalidate'] = plugin_dir_url(__FILE__) . 'addons/w3cvalidate/editor_plugin_src.js';
		$jwl_plugin_array['tagwrap'] = plugin_dir_url(__FILE__) . 'addons/tagwrap/editor_plugin_src.js';
		$jwl_plugin_array['encode'] = plugin_dir_url(__FILE__) . 'addons/encode/editor_plugin_src.js';
		$jwl_plugin_array['clker'] = plugin_dir_url(__FILE__) . 'addons/clker/editor_plugin.js';
		$jwl_plugin_array['acheck'] = plugin_dir_url(__FILE__) . 'addons/acheck/editor_plugin.js';
		$jwl_plugin_array['directionality'] = plugin_dir_url(__FILE__) . 'addons/directionality/editor_plugin.js';
		$jwl_plugin_array['ezimage'] = plugin_dir_url(__FILE__) . 'addons/ezimage/editor_plugin_src.js';
		$jwl_plugin_array['ptags'] = plugin_dir_url(__FILE__) . 'addons/ptags/editor_plugin.js';
		$jwl_plugin_array['linebreak'] = plugin_dir_url(__FILE__) . 'addons/linebreak/editor_plugin.js';
		$jwl_plugin_array['advlink'] = plugin_dir_url(__FILE__) . 'addons/advlink/editor_plugin.js';
		
		// Test array
		//$jwl_plugin_array['spellchecker'] = plugin_dir_url(__FILE__) . 'addons/spellchecker/editor_plugin_src.js';
		   
		return $jwl_plugin_array;
}
add_filter( 'mce_external_plugins', 'jwl_mce_external_plugins' );
		

// Functions for miscellaneous options and features
// Function to show post/page id in admin column area
$options_postid = get_option('jwl_options_group3');
$jwl_postid = isset($options_postid['jwl_postid_field_id']);
if ($jwl_postid == "1"){
   		function jwl_posts_columns_id($defaults){
			$defaults['wps_post_id'] = __('ID');
			return $defaults;
		}
		add_filter('manage_posts_columns', 'jwl_posts_columns_id', 5);
		add_filter('manage_pages_columns', 'jwl_posts_columns_id', 5);
		function jwl_posts_custom_id_columns($column_name, $id){
			if($column_name === 'wps_post_id'){
					echo $id;
			}
		}
		add_action('manage_posts_custom_column', 'jwl_posts_custom_id_columns', 5, 2);
    	add_action('manage_pages_custom_column', 'jwl_posts_custom_id_columns', 5, 2);
}

// Function to show shortcodes in widget area
$options_short_widget = get_option('jwl_options_group3');
$jwl_shortcode = isset($options_short_widget['jwl_shortcode_field_id']);
if ($jwl_shortcode == "1"){
   	add_filter( 'widget_text', 'shortcode_unautop');
	add_filter( 'widget_text', 'do_shortcode');
}

// Adding PHP text widgets
$options_php_widget = get_option('jwl_options_group3');
$jwl_php_widget = isset($options_php_widget['jwl_php_widget_field_id']);
if ($jwl_php_widget == "1"){

class jwl_PHP_Code_Widget extends WP_Widget {

	function jwl_PHP_Code_Widget() {
		$widget_ops = array('classname' => 'widget_execphp', 'description' => __('Arbitrary text, HTML, or PHP Code'));
		$control_ops = array('width' => 400, 'height' => 350);
		$this->WP_Widget('execphp', __('Ultimate Tinymce PHP Widget'), $widget_ops, $control_ops);
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title', empty($instance['title']) ? '' : $instance['title'], $instance );
		$text = apply_filters( 'widget_execphp', $instance['text'], $instance );
		echo $before_widget;
		if ( !empty( $title ) ) { echo $before_title . $title . $after_title; } 
			ob_start();
			eval('?>'.$text);
			$text = ob_get_contents();
			ob_end_clean();
			?>			
			<div class="execphpwidget"><?php echo $instance['filter'] ? wpautop($text) : $text; ?></div>
		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		if ( current_user_can('unfiltered_html') )
			$instance['text'] =  $new_instance['text'];
		else
			$instance['text'] = stripslashes( wp_filter_post_kses( $new_instance['text'] ) );
		$instance['filter'] = isset($new_instance['filter']);
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '' ) );
		$title = strip_tags($instance['title']);
		$text = format_to_edit($instance['text']);
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

		<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>

		<p><input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox" <?php checked(isset($instance['filter']) ? $instance['filter'] : 0); ?> />&nbsp;<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs.'); ?></label></p>
<?php
	}
}
add_action('widgets_init', create_function('', 'return register_widget("jwl_PHP_Code_Widget");'));
}

// Enable the linebreak shortcode
$options_linebreak = get_option('jwl_options_group3');
$jwl_linebreak = isset($options_linebreak['jwl_linebreak_field_id']);
if ($jwl_linebreak == "1"){
	//[break]
	function jwl_insert_linebreak( $atts ){
 		return '<br clear="none" />';
	}
	add_shortcode( 'break', 'jwl_insert_linebreak' );
}

// Add column shortcodes for tinymce editor
$options_columns = get_option('jwl_options_group3');
$jwl_columns = isset($options_columns['jwl_columns_field_id']);
if ($jwl_columns == "1"){
	
	function jwl_one_third( $atts, $content = null ) { return '<div class="jwl_one_third">' . do_shortcode($content) . '</div>'; }
	add_shortcode('one_third', 'jwl_one_third');
	function jwl_one_third_last( $atts, $content = null ) { return '<div class="jwl_one_third last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('one_third_last', 'jwl_one_third_last');
	function jwl_two_third( $atts, $content = null ) { return '<div class="jwl_two_third">' . do_shortcode($content) . '</div>'; }
	add_shortcode('two_third', 'jwl_two_third');
	function jwl_two_third_last( $atts, $content = null ) { return '<div class="jwl_two_third last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('two_third_last', 'jwl_two_third_last');
	function jwl_one_half( $atts, $content = null ) { return '<div class="jwl_one_half">' . do_shortcode($content) . '</div>'; }
	add_shortcode('one_half', 'jwl_one_half');
	function jwl_one_half_last( $atts, $content = null ) { return '<div class="jwl_one_half last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('one_half_last', 'jwl_one_half_last');
	function jwl_one_fourth( $atts, $content = null ) { return '<div class="jwl_one_fourth">' . do_shortcode($content) . '</div>'; }
	add_shortcode('one_fourth', 'jwl_one_fourth');
	function jwl_one_fourth_last( $atts, $content = null ) { return '<div class="jwl_one_fourth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('one_fourth_last', 'jwl_one_fourth_last');
	function jwl_three_fourth( $atts, $content = null ) { return '<div class="jwl_three_fourth">' . do_shortcode($content) . '</div>'; }
	add_shortcode('three_fourth', 'jwl_three_fourth');
	function jwl_three_fourth_last( $atts, $content = null ) { return '<div class="jwl_three_fourth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('three_fourth_last', 'jwl_three_fourth_last');
	function jwl_one_fifth( $atts, $content = null ) { return '<div class="jwl_one_fifth">' . do_shortcode($content) . '</div>'; }
	add_shortcode('one_fifth', 'jwl_one_fifth');
	function jwl_one_fifth_last( $atts, $content = null ) { return '<div class="jwl_one_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('one_fifth_last', 'jwl_one_fifth_last');
	function jwl_two_fifth( $atts, $content = null ) { return '<div class="jwl_two_fifth">' . do_shortcode($content) . '</div>'; }
	add_shortcode('two_fifth', 'jwl_two_fifth');
	function jwl_two_fifth_last( $atts, $content = null ) { return '<div class="jwl_two_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('two_fifth_last', 'jwl_two_fifth_last');
	function jwl_three_fifth( $atts, $content = null ) { return '<div class="jwl_three_fifth">' . do_shortcode($content) . '</div>'; }
	add_shortcode('three_fifth', 'jwl_three_fifth');
	function jwl_three_fifth_last( $atts, $content = null ) { return '<div class="jwl_three_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('three_fifth_last', 'jwl_three_fifth_last');
	function jwl_four_fifth( $atts, $content = null ) { return '<div class="jwl_four_fifth">' . do_shortcode($content) . '</div>'; }
	add_shortcode('four_fifth', 'jwl_four_fifth');
	function jwl_four_fifth_last( $atts, $content = null ) { return '<div class="jwl_four_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('four_fifth_last', 'jwl_four_fifth_last');
	function jwl_one_sixth( $atts, $content = null ) { return '<div class="jwl_one_sixth">' . do_shortcode($content) . '</div>'; }
	add_shortcode('one_sixth', 'jwl_one_sixth');
	function jwl_one_sixth_last( $atts, $content = null ) { return '<div class="jwl_one_sixth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('one_sixth_last', 'jwl_one_sixth_last');
	function jwl_five_sixth( $atts, $content = null ) { return '<div class="jwl_five_sixth">' . do_shortcode($content) . '</div>'; }
	add_shortcode('five_sixth', 'jwl_five_sixth');
	function jwl_five_sixth_last( $atts, $content = null ) { return '<div class="jwl_five_sixth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('five_sixth_last', 'jwl_five_sixth_last');

	function jwl_column_stylesheet() {
		$my_style_url = WP_PLUGIN_URL . '/ultimate-tinymce/css/column-style.css';
		$my_style_file = WP_PLUGIN_DIR . '/ultimate-tinymce/css/column-style.css';
	
		if ( file_exists($my_style_file) ) {
			wp_register_style('column-styles', $my_style_url);
			wp_enqueue_style('column-styles');
		}
	}
	add_action('wp_print_styles', 'jwl_column_stylesheet');
}

// Function to remove wpautop
$options_autop = get_option('jwl_options_group3');
$jwl_autop = isset($options_autop['jwl_autop_field_id']);
if ($jwl_autop == "1"){
	remove_filter ('the_content', 'wpautop');
	remove_filter ('the_content', 'wptexturize');
	
	function jwl_remove_wpautop_tinymce($remove_Tiny) {
		$remove_Tiny['wpautop'] = false;
		
		return $remove_Tiny;
	}
	add_filter('tiny_mce_before_init','jwl_remove_wpautop_tinymce');
}

// Add p and br buttons to html editor
add_action('admin_print_footer_scripts','jwl_ult_quicktags');
function jwl_ult_quicktags() {
//wp_enqueue_script( 'quicktags' );
	?>
	<script type="text/javascript" charset="utf-8">
	/* Adding Quicktag buttons to the editor Wordpress ver. 3.3 and above
	* - Button HTML ID (required)
	* - Button display, value="" attribute (required)
	* - Opening Tag (required)
	* - Closing Tag (required)
	* - Access key, accesskey="" attribute for the button (optional)
	* - Title, title="" attribute (optional)
	* - Priority/position on bar, 1-9 = first, 11-19 = second, 21-29 = third, etc. (optional)
	*/
	if ( typeof (QTags) != 'undefined' ) {
		QTags.addButton( 'jwl_paragraph', 'p', '<p class="none">', '</p>', 'p', 'Insert paragraph tags', '1' );
		QTags.addButton( 'jwl_linebreak', 'br','<br class="none" />\n', '', 'br', 'Insert a linebreak', '2' );
	}
	</script>
	<?php
}
// Here we will remove the above tags if the user opts to do so
$options_remove_pbr_quicktags = get_option('jwl_options_group3');
$jwl_pbr_quicktags = isset($options_remove_pbr_quicktags['jwl_remove_pbr_field_id']);
if($jwl_pbr_quicktags == '1') {
	remove_action('admin_print_footer_scripts','jwl_ult_quicktags');
}

// Class and Functions for Cursor Position in Editor
$options_cursor = get_option('jwl_options_group3');
$jwl_cursor = isset($options_cursor['jwl_cursor_field_id']);
if ($jwl_cursor == "1") {
	global $pagenow;
	// Make sure we only add to posts, pages, or custom post types
	if( strstr($_SERVER['REQUEST_URI'], 'wp-admin/post-new.php') || strstr($_SERVER['REQUEST_URI'], 'wp-admin/post.php') ) {
		
			final class Preserve_Editor_Scroll_Position {
			
			public static function init() {
				add_filter( 'redirect_post_location', array( __CLASS__, 'add_query_arg' ) );
				add_action( 'edit_form_advanced', array( __CLASS__, 'add_input_field' ) );
				add_action( 'edit_page_form', array( __CLASS__, 'add_input_field' ) );
				add_filter( 'tiny_mce_before_init', array( __CLASS__, 'extend_tiny_mce' ) );
			}
		
			public static function add_input_field() {
				$position = ! empty( $_GET['scrollto'] ) ? $_GET['scrollto'] : 0;
				printf( '<input type="hidden" id="scrollto" name="scrollto" value="%d"/>', esc_attr( $position ) );
				add_action( 'admin_print_footer_scripts', array( __CLASS__, 'print_js' ), 55 ); // Print after Editor JS
			}
		
			public static function extend_tiny_mce( $init ) {
				if ( wp_default_editor() == 'tinymce' )
					$init['setup'] = 'rich_scroll';
		
				return $init;
			}
		
			public static function add_query_arg( $location ) {
				if( ! empty( $_POST['scrollto'] ) )
					$location = add_query_arg( 'scrollto', (int) $_POST['scrollto'], $location );
		
				return $location;
			}
		
			public static function print_js() {
				?>
			<script>
			( function( $ ) {
				$( '#post' ).submit( function() {
					scrollto =
						$('#content' ).is(':hidden') ?
						$('#content_ifr').contents().find( 'body' ).scrollTop() :
						$('#content' ).scrollTop();
					$( '#scrollto' ).val( scrollto );
				} );
				$( '#content' ).scrollTop( $( '#scrollto' ).val() );
			} )( jQuery );
			function rich_scroll( ed ) {
				ed.onInit.add( function() {
					jQuery( '#content_ifr' ).contents().find( 'body' ).scrollTop( jQuery( '#scrollto' ).val() );
				} );
			};
			</script>
			<?php
			}
			}
			add_action( 'admin_init', array( 'Preserve_Editor_Scroll_Position', 'init' ) );
	}
}

// User option for adding a signoff shortcode for tinymce visual editor
function jwl_sign_off_text() {
	$options = get_option('jwl_options_group3');  
	if (isset($options['jwl_signoff_field_id'])) {
		$jwl_signoff = $options['jwl_signoff_field_id'];
	}
    return $jwl_signoff;  
} 
add_shortcode('signoff', 'jwl_sign_off_text');


// Functions for Admin Options
// Function to add dev support link to footer

$options_dev_support = get_option('jwl_options_group4');
$jwl_dev_support = isset($options_dev_support['jwl_dev_support']);
if ($jwl_dev_support == "1") {
	function your_function() {
		echo '<p>This website content was created with the help of <a href="http://utmce.joshlobe.com/">Ultimate Tinymce!</a></p>';
	}
	add_action('get_footer', 'your_function');
}

	
// Functions to load stylesheet from front-end of website into ultimate tinymce content editor.
$options_style = get_option('jwl_options_group4');
$jwl_style = isset($options_style['jwl_tinymce_add_stylesheet']);
if ($jwl_style == "1") {
	
	function jwl_add_stylesheet($jwl_style_init) {	
		$style_uri = get_stylesheet_directory_uri().'/editor-style.css';	
		if (empty($jwl_style_init['content_css'])) {
			$jwl_style_init['content_css'] = $style_uri;
		} else {
			$jwl_style_init['content_css'] = ','.$style_uri;
		}	
		return $jwl_style_init;
	}
	add_filter('tiny_mce_before_init', 'jwl_add_stylesheet');
}

// Functions for adding Ultimate Tinymce to Excerpt Area (Pages)
$options_excerpt_page = get_option('jwl_options_group4');
$jwl_tinymce_excerpt_page = isset($options_excerpt_page['jwl_tinymce_excerpt_page']);
if ($jwl_tinymce_excerpt_page == "1") {
	
	function jwl_page_excerpts_init() {
	  add_post_type_support('page', array('excerpt'));
	}
	add_action('init', 'jwl_page_excerpts_init');
	
	function jwl_change_excerpt_page() {
		remove_meta_box('postexcerpt', 'page', 'normal');
		add_meta_box('postexcerpt', __('Ultimate Tinymce Excerpt', 'jwl-ultimate-tinymce'), 'ultimate_tinymce_excerpt_meta_box_page', 'page', 'normal');
	}
	add_action( 'admin_init', 'jwl_change_excerpt_page' );
	
	function ultimate_tinymce_excerpt_meta_box_page() {
		global $wpdb,$post;
		$tinymce_summary_page = $wpdb->get_row("SELECT post_excerpt FROM $wpdb->posts WHERE id = '$post->ID'");
		$post_tinymce_excerpt_page 	 = $tinymce_summary_page->post_excerpt;
	
		$settings = array(
						'quicktags' 	=> array('buttons' => 'em,strong,link',),
						'text_area_name'=> 'excerpt',
						'quicktags' 	=> true,
						'tinymce' 		=> true,
						'editor_css'	=> '<style>#wp-excerpt-editor-container .wp-editor-area{height:250px; width:100%;}</style>'
						);
		$id = 'excerpt';
		wp_editor($post_tinymce_excerpt_page,$id,$settings);
	}
}

// Functions for adding Ultimate Tinymce to Excerpt Area (Posts)
$options_excerpt = get_option('jwl_options_group4');
$jwl_tinymce_excerpt = isset($options_excerpt['jwl_tinymce_excerpt']);
if ($jwl_tinymce_excerpt == "1") {
	add_action( 'admin_init', 'jwl_change_excerpt' );
	function jwl_change_excerpt() {
		remove_meta_box('postexcerpt', 'post', 'normal');
		add_meta_box('postexcerpt', __('Ultimate Tinymce Excerpt', 'jwl-ultimate-tinymce'), 'ultimate_tinymce_excerpt_meta_box', 'post', 'normal');
	}
	
	function ultimate_tinymce_excerpt_meta_box() {
		global $wpdb,$post;
		$tinymce_summary = $wpdb->get_row("SELECT post_excerpt FROM $wpdb->posts WHERE id = '$post->ID'");
		$post_tinymce_excerpt 	 = $tinymce_summary->post_excerpt;
	
		$settings = array(
						'quicktags' 	=> array('buttons' => 'em,strong,link',),
						'text_area_name'=> 'excerpt',
						'quicktags' 	=> true,
						'tinymce' 		=> true,
						'editor_css'	=> '<style>#wp-excerpt-editor-container .wp-editor-area{height:250px; width:100%;}</style>'
						);
		$id = 'excerpt';
		wp_editor($post_tinymce_excerpt,$id,$settings);
	}
}

// Function to hide the HTML tab from the content editor.
global $pagenow;
if ($pagenow == 'post.php' || $pagenow == 'post-new.php' || ($pagenow == "admin.php" && (isset($_GET['page'])) == 'cleverness-to-do-list') || ($pagenow == "options-general.php" && (isset($_GET['page'])) == 'ultimate-tinymce')) {
	$options_html = get_option('jwl_options_group4');
	$jwl_html = isset($options_html['jwl_hide_html_tab']); 
	if ($jwl_html == "1") {
		function jwl_hide_on_todo() {
			?><style type="text/css"> #excerpt-html { display: none !important; } #content-id-html { display: none !important; }  #content-html { display: none !important; } #clevernesstododescription-html { display: none !important; }</style><?php
		}
		add_filter('admin_head','jwl_hide_on_todo');
	}
}

// Insert a dashboard Ultimate Tinymce Widget for RSS feed.
$options_dashboard = get_option('jwl_options_group4');
$jwl_dashboard = isset($options_dashboard['jwl_dashboard_widget']);
if ($jwl_dashboard == '1') {
	
	add_action('wp_dashboard_setup', 'jwl_custom_dashboard_widgets');
	function jwl_custom_dashboard_widgets() {
	   global $wp_meta_boxes;
	   wp_add_dashboard_widget('jwl_tinymce_dashboard_widget', 'Ultimate Tinymce RSS Feed', 'jwl_tinymce_widget', 'jwl_configure_widget');
	}
	
	function jwl_tinymce_widget() {
		$jwl_widgets = get_option( 'jwl_dashboard_options4' ); // Get the dashboard widget options
		$jwl_widget_id = 'jwl_tinymce_dashboard_widget'; // This must be the same ID we set in wp_add_dashboard_widget
		/* Check whether we have set the post count through the controls. If we didn't, set the default to 5 */
		$jwl_total_items = 	isset( $jwl_widgets[$jwl_widget_id] ) && isset( $jwl_widgets[$jwl_widget_id]['items'] )
							? absint( $jwl_widgets[$jwl_widget_id]['items'] ) : 5;
		// Echo the output of the RSS Feed.
		echo '<p style="border-bottom:#000 1px solid;">'; echo 'Showing ('.$jwl_total_items.') Posts'; echo '</p>';
		echo '<div class="rss-widget">';
		   wp_widget_rss_output(array( 'url' => 'http://www.plugins.joshlobe.com/feed/', 'title' => '', 'items' => $jwl_total_items, 'show_summary' => 0, 'show_author' => 0, 'show_date' => 0 ));
		echo "</div>";
		echo '<p style="text-align:center;border-top: #000 1px solid;padding:5px;"><a href="http://www.plugins.joshlobe.com/">Ultimate Tinymce</a> - Visual Wordpress Editor</p>';
	}
	
	function jwl_configure_widget(){
		$jwl_widget_id = 'jwl_tinymce_dashboard_widget'; // This must be the same ID we set in wp_add_dashboard_widget
		$jwl_form_id = 'jwl-dashboard-control'; // Set this to whatever you want
			
		// Checks whether there are already dashboard widget options in the database
		if ( !$jwl_widget_options = get_option( 'jwl_dashboard_options' ) )
			$jwl_widget_options = array(); // If not, we create a new array
		// Check whether we have information for this form
		if ( !isset($jwl_widget_options[$jwl_widget_id]) )
			$jwl_widget_options[$jwl_widget_id] = array(); // If not, we create a new array
		// Check whether our form was just submitted
		if ( 'POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST[$jwl_form_id]) ) {
			/* Get the value. In this case ['items'] is from the input field with the name of '.$form_id.'[items] */
			$jwl_number = absint( $_POST[$jwl_form_id]['items'] );
			$jwl_widget_options[$jwl_widget_id]['items'] = $jwl_number; // Set the number of items
			update_option( 'jwl_dashboard_options', $jwl_widget_options ); // Update our dashboard widget options so we can access later
		}
		
		/* Check if we have set the number of posts previously. If we didn't, then we just set it as empty. This value is used when we create the input field */
		$jwl_number = isset( $jwl_widget_options[$jwl_widget_id]['items'] ) ? (int) $jwl_widget_options[$jwl_widget_id]['items'] : '';
		
		// Create our form fields. Pay very close attention to the name part of the input field.
		echo '<p><label for="jwl_tinymce_dashboard_widget-number">' . __('Number of posts to show:') . '</label>';
		echo '<input id="jwl_tinymce_dashboard_widget-number" name="'.$jwl_form_id.'[items]" type="text" value="' . $jwl_number . '" size="3" /></p>';
	}
}

// Set an admin bar link to the settings page
$options_admin_links = get_option('jwl_options_group4');
$jwl_admin_links = isset($options_admin_links['jwl_admin_bar_link']);
if ($jwl_admin_links == '1') {
	function jwl_admin_bar_init() {
		// Is the user sufficiently leveled, or has the bar been disabled?
		if (!is_super_admin() || !is_admin_bar_showing() )
			return;
		// Good to go, lets do this!
		add_action('admin_bar_menu', 'jwl_admin_bar_links', 500);
	}
	add_action('admin_bar_init', 'jwl_admin_bar_init');

	function jwl_admin_bar_links() {
		global $wp_admin_bar;
		$path = get_option('siteurl');
		// Links to add, in the form: 'Label' => 'URL'
		$links = array( 'Settings Page' => '' );
		$loc = get_option('jwl_options_group4');
			$get_loc = $loc['jwl_menu_location'];
			
			switch ($get_loc)
			 {
			 case "Main":
			 $act_loc = 'admin.php?page=ultimate-tinymce';
			   break;
			 case "Appearance":
			 $act_loc = 'themes.php?page=ultimate-tinymce';
			   break;
			 case "Tools":
			 $act_loc = 'tools.php?page=ultimate-tinymce';
			   break;
			 case "Settings":
			 $act_loc = 'options-general.php?page=ultimate-tinymce';
			   break;
			 default:
			 $act_loc = 'admin.php?page=ultimate-tinymce';
			   break;
			 } 
		$wp_admin_bar->add_menu( array( 'id' => 'utmce', 'title' => 'Ultimate Tinymce', 'href' => false, 'id' => 'jwl_links', 'href' => $path . '/wp-admin/'.$act_loc ));
		/** * Add the submenu links. */
		foreach ($links as $label => $url) { $wp_admin_bar->add_menu( array( 'id' => 'utmce2', 'title' => $label, 'href' => $path . '/wp-admin/'.$act_loc, 'parent' => 'jwl_links' )); }
	}
}

// Function for removing force reload of tinymce editor
function jwl_tiny_mce_version($version) { // trick tinymce version number to force update and clear cache
	return ++$version;
}
add_filter('tiny_mce_version', 'jwl_tiny_mce_version');
$options_refresh = get_option('jwl_options_group4');
$jwl_tinymce_refresh = isset($options_refresh['jwl_tinymce_refresh']);
if ($jwl_tinymce_refresh == "1"){
	remove_filter('tiny_mce_version', 'jwl_tiny_mce_version');
}

// Functions for QR Code
$options_qr = get_option('jwl_options_group4');
$jwl_qr_code = isset($options_qr['jwl_qr_code']);
if ($jwl_qr_code == "1") {

	function jwl_qr_code( $content ) {
		if( is_single() ) {
			
			$options2 = get_option('jwl_options_group4');
	
			$content .= '<div class="jwl_qr_code" style="border:1px solid #ddd;margin-top:30px;"><div style="height:18px;border:1px solid #ddd;padding:5px;background:#'.$options2['jwl_qr_code_bg'].';color:#'.$options2['jwl_qr_code_text'].';" id="qr_header">';
			$content .= '<span style="font-weight:bold;font-size:18px;margin-left:10px;">QR Code - Take this post Mobile!</span>';
			$content .= '</div><div id="qr_main" style="padding:10px;background:#'.$options2['jwl_qr_code_bg_main'].';color:#'.$options2['jwl_qr_code_text'].';">';
			$content .= '<div style="float:left;margin-right:20px;width:20%;"><script type="text/javascript">var uri=window.location.href;document.write("<img src=\'http://api.qrserver.com/v1/create-qr-code/?data="+encodeURI(uri)+"&size=75x75\'/>");</script></div>';
			$content .= '<div style="float:left;width:75%;">'.$options2['jwl_qr_code_content'].'</div>';
			$content .= '<div style="clear:both;"></div>';
			$content .= '</div></div>';
			
			return wpautop($content);
		}
		else {
			return $content;
		}
	}
	add_filter('the_content', 'jwl_qr_code');
}

$options2_qr = get_option('jwl_options_group4');
$jwl_qr_code_pages = isset($options2_qr['jwl_qr_code_pages']); 
if ($jwl_qr_code_pages == "1") {

	function jwl_qr_code_pages( $content ) {
		if( is_page() ) {
			
			$options3 = get_option('jwl_options_group4');
	
			$content .= '<div class="jwl_qr_code" style="border:1px solid #ddd;margin-top:30px;"><div style="height:18px;border:1px solid #ddd;padding:5px;background:#'.$options3['jwl_qr_code_bg'].';color:#'.$options3['jwl_qr_code_text'].';" id="qr_header">';
			$content .= '<span style="font-weight:bold;font-size:18px;margin-left:10px;">QR Code - Take this post Mobile!</span>';
			$content .= '</div><div id="qr_main" style="padding:10px;background:#'.$options3['jwl_qr_code_bg_main'].';color:#'.$options3['jwl_qr_code_text'].';">';
			$content .= '<div style="float:left;margin-right:20px;width:20%;"><script type="text/javascript">var uri=window.location.href;document.write("<img src=\'http://api.qrserver.com/v1/create-qr-code/?data="+encodeURI(uri)+"&size=75x75\'/>");</script></div>';
			$content .= '<div style="float:left;width:75%;">'.$options3['jwl_qr_code_content'].'</div>';
			$content .= '<div style="clear:both;"></div>';
			$content .= '</div></div>';
			
			return wpautop($content);
		}
		else {
			return $content;
		}
	}
	add_filter('the_content', 'jwl_qr_code_pages');
}

// Functions for Tinymce Overrides Section
// Functions for tinymce overrides
$option_tmce_overrides = get_option('jwl_options_group8');
if (isset($option_tmce_overrides['jwl_tinymce_modifications'])) {
	function jwl_modify_tmce ($jwl_tmce_modifications) {
		
		$my_var = WP_PLUGIN_DIR."/ultimate-tinymce/css/mce_modify.css";
		
		$jwl_mce_background_color = get_option('jwl_options_group8');
		$jwl_mce_background_color2 = $jwl_mce_background_color['jwl_tinymce_background_color_hex'];
		
		$jwl_mce_font_color = get_option('jwl_options_group8');
		$jwl_mce_font_color2 = $jwl_mce_font_color['jwl_tinymce_font_color_hex'];
		
		$jwl_mce_fontsize = get_option('jwl_options_group8');
		$jwl_mce_fontsize2 = $jwl_mce_fontsize['jwl_tinymce_fontsize'];

		$p=".mceContentBody {background-color:".$jwl_mce_background_color2." !important; color:".$jwl_mce_font_color2." !important;}\np {font-size:".$jwl_mce_fontsize2." !important;}\n";
		$a = fopen($my_var, 'w');
		fwrite($a, $p);
		fclose($a);
		chmod($my_var, 0644);
		
		$style_uri = plugin_dir_url(__FILE__) . 'css/mce_modify.css';
		
		if (empty($jwl_tmce_modifications['content_css'])) {
			$jwl_tmce_modifications['content_css'] = $style_uri;
		} else {
			$jwl_tmce_modifications['content_css'] .= ','.$style_uri;
		}
		
		return $jwl_tmce_modifications;
	}
	add_filter('tiny_mce_before_init', 'jwl_modify_tmce');
}

?>