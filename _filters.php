<?php
/**
 * Filters
 */

function hubbub_save_this_filter_post_url( $post_url, $post_id ) {
    return 'https://morehubbub.com/?post_url';
}
add_filter( 'hubbub_save_this_filter_post_url', 'hubbub_save_this_filter_post_url', 10, 2 );

function hubbub_save_this_filter_raw_url( $raw_url, $post_id ) {
    return 'https://morehubbub.com/?raw_url';
}
add_filter( 'hubbub_save_this_filter_raw_url', 'hubbub_save_this_filter_raw_url', 10, 2 );

function hubbub_save_this_filter_post_title( $post_title, $post_id ) {
    return 'An Example Post Title';
}
add_filter( 'hubbub_save_this_filter_post_title', 'hubbub_save_this_filter_post_title', 10, 2 );

function hubbub_save_this_filter_post_title_link( $post_title_link, $post_id ) {
    return '<a href="https://morehubbub.com/?post_title_link" class="exampleClass">An Example Post Title</a>';
}
add_filter( 'hubbub_save_this_filter_post_title_link', 'hubbub_save_this_filter_post_title_link', 10, 2 );

function hubbub_save_this_filter_email_fromname( $email_fromName, $post_id ) {
    return 'Hubbub Customer Support';
}
add_filter( 'hubbub_save_this_filter_email_fromname', 'hubbub_save_this_filter_email_fromname', 10, 2 );

function hubbub_save_this_filter_email_fromaddress( $email_fromAddress, $post_id ) {
    return 'support@morehubbub.com';
}
add_filter( 'hubbub_save_this_filter_email_fromaddress', 'hubbub_save_this_filter_email_fromaddress', 10, 2 );

function hubbub_save_this_filter_email_featuredimageurl( $url, $post_id ) {
    return 'https://morehubbub.com/wp-content/uploads/2023/12/hubbub-logo-red-transparent.png';
}
add_filter( 'hubbub_save_this_filter_email_featuredimageurl', 'hubbub_save_this_filter_email_featuredimageurl', 10, 2 );

function hubbub_save_this_filter_email_message( $email_message, $post_id ) {
    return '<p>An example message.</p>';
}
add_filter( 'hubbub_save_this_filter_email_message', 'hubbub_save_this_filter_email_message', 10, 2 );

function hubbub_save_this_filter_email_bottomcontent( $email_message, $post_id ) {
    return '<h3>Bottom Content Heading</h3><p>An example bottom content area.</p>';
}
add_filter( 'hubbub_save_this_filter_email_bottomcontent', 'hubbub_save_this_filter_email_bottomcontent', 10, 2 );

function hubbub_save_this_filter_email_customlinkcolor( $custom_link_color, $post_id ) {
    return '#000';
}
add_filter( 'hubbub_save_this_filter_email_customlinkcolor', 'hubbub_save_this_filter_email_customlinkcolor', 10, 2 );

function hubbub_save_this_filter_email_subject( $email_subject, $post_id ) {
    return 'Example Email Subject';
}
add_filter( 'hubbub_save_this_filter_email_subject', 'hubbub_save_this_filter_email_subject', 10, 2 );

function hubbub_save_this_filter_email_heading( $heading, $post_id ) {
    return 'Heading Example';
}
add_filter( 'hubbub_save_this_filter_email_heading', 'hubbub_save_this_filter_email_heading', 10, 2 );

function hubbub_save_this_filter_site_title( $site_title, $post_id ) {
    return 'Hubbub';
}
add_filter( 'hubbub_save_this_filter_site_title', 'hubbub_save_this_filter_site_title', 10, 2 );

function hubbub_save_this_filter_image_url( $image_url, $post_id ) { // AKA site logo
    return 'https://morehubbub.com/wp-content/uploads/2023/12/hubbub-logo-red-transparent.png';
}
add_filter( 'hubbub_save_this_filter_image_url', 'hubbub_save_this_filter_image_url', 10, 2 );

function hubbub_save_this_filter_footer_site_title( $footer_site_title, $post_id ) {
    return 'Hubbub (in footer)';
}
add_filter( 'hubbub_save_this_filter_footer_site_title', 'hubbub_save_this_filter_footer_site_title', 10, 2 );


function hubbub_save_this_filter_html_template( $html_template, $post_id ) {
    return $html_template; // Purposely not changed to allow for testing
}
add_filter( 'hubbub_save_this_filter_html_template', 'hubbub_save_this_filter_html_template', 10, 2 );

function hubbub_save_this_filter_html_email_complete( $html_email_complete, $post_id ) {
    return str_replace( 'Jordan', 'Colin', $html_email_complete );
}
add_filter( 'hubbub_save_this_filter_html_email_complete', 'hubbub_save_this_filter_html_email_complete', 10, 2 );


function hubbub_save_this_filter_custom_after_logo( $content, $post_id ) {
    return 'Custom Section: After Logo';
}
add_filter( 'hubbub_save_this_filter_custom_after_logo', 'hubbub_save_this_filter_custom_after_logo', 10, 2 );

function hubbub_save_this_filter_custom_after_message( $content, $post_id ) {
    return 'Custom Section: After Message';
}
add_filter( 'hubbub_save_this_filter_custom_after_message', 'hubbub_save_this_filter_custom_after_message', 10, 2 );

function hubbub_save_this_filter_custom_after_post_link( $content, $post_id ) {
    return 'Custom Section: After Post Link';
}
add_filter( 'hubbub_save_this_filter_custom_after_post_link', 'hubbub_save_this_filter_custom_after_post_link', 10, 2 );

function hubbub_save_this_filter_custom_before_bottom_content_add_image( $content, $post_id ) {
    return '<div align="center"><a href="https://morehubbub.com/wp-content/uploads/2024/07/Download-Button-PNG-Photo1.png"><img width="400" src="https://morehubbub.com/wp-content/uploads/2024/07/Download-Button-PNG-Photo1.png"></a></div>';
}
add_filter( 'hubbub_save_this_filter_custom_before_bottom_content', 'hubbub_save_this_filter_custom_before_bottom_content_add_image', 10, 2 );

function hubbub_save_this_filter_custom_after_bottom_content_add_image( $content, $post_id ) {
    return '<div align="center"><a href="https://morehubbub.com/wp-content/uploads/2024/07/Download-Button-PNG-Photo1.png"><img width="400" src="https://morehubbub.com/wp-content/uploads/2024/07/Download-Button-PNG-Photo1.png"></a></div>';
}
add_filter( 'hubbub_save_this_filter_custom_after_bottom_content', 'hubbub_save_this_filter_custom_after_bottom_content_add_image', 10, 2 );

function hubbub_save_this_filter_should_save_cookie( $should_run ) {
    // Default: 'true'
    return 'false'; // must return string
}
add_filter( 'hubbub_save_this_filter_should_save_cookie', 'hubbub_save_this_filter_should_save_cookie', 10, 1 ); // Boolean to determine whether or not to save cookies