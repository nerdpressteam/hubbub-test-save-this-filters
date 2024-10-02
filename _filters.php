<?php
/**
 * Filters
 */

function hubbub_save_this_filter_post_url( $post_url, $post_id, $is_shortcode ) {
    return 'https://morehubbub.com/?post_url';
}
add_filter( 'hubbub_save_this_filter_post_url', 'hubbub_save_this_filter_post_url', 10, 3 );

function hubbub_save_this_filter_raw_url( $raw_url, $post_id, $is_shortcode ) {
    return 'https://morehubbub.com/?raw_url';
}
add_filter( 'hubbub_save_this_filter_raw_url', 'hubbub_save_this_filter_raw_url', 10, 3 );

function hubbub_save_this_filter_post_title( $post_title, $post_id, $is_shortcode ) {
    return 'An Example Post Title';
}
add_filter( 'hubbub_save_this_filter_post_title', 'hubbub_save_this_filter_post_title', 10, 3 );

function hubbub_save_this_filter_post_title_link( $post_title_link, $post_id, $is_shortcode ) {
    return '<a href="https://morehubbub.com/?post_title_link" class="exampleClass">An Example Post Title</a>';
}
add_filter( 'hubbub_save_this_filter_post_title_link', 'hubbub_save_this_filter_post_title_link', 10, 3 );

function hubbub_save_this_filter_email_fromname( $email_fromName, $post_id, $is_shortcode ) {
    return 'Hubbub Customer Support';
}
add_filter( 'hubbub_save_this_filter_email_fromname', 'hubbub_save_this_filter_email_fromname', 10, 3 );

function hubbub_save_this_filter_email_fromaddress( $email_fromAddress, $post_id, $is_shortcode ) {
    return 'support@morehubbub.com';
}
add_filter( 'hubbub_save_this_filter_email_fromaddress', 'hubbub_save_this_filter_email_fromaddress', 10, 3 );

function hubbub_save_this_filter_email_featuredimageurl( $url, $post_id, $is_shortcode ) {
    return 'https://morehubbub.com/wp-content/uploads/2023/12/hubbub-logo-red-transparent.png';
}
add_filter( 'hubbub_save_this_filter_email_featuredimageurl', 'hubbub_save_this_filter_email_featuredimageurl', 10, 3 );

function hubbub_save_this_filter_email_message( $email_message, $post_id, $is_shortcode ) {
    return '<p>An example message.</p>';
}
add_filter( 'hubbub_save_this_filter_email_message', 'hubbub_save_this_filter_email_message', 10, 3 );

function hubbub_save_this_filter_email_bottomcontent( $email_message, $post_id, $is_shortcode ) {
    return '<h3>Bottom Content Heading</h3><p>An example bottom content area.</p>';
}
add_filter( 'hubbub_save_this_filter_email_bottomcontent', 'hubbub_save_this_filter_email_bottomcontent', 10, 3 );

function hubbub_save_this_filter_email_customlinkcolor( $custom_link_color, $post_id, $is_shortcode ) {
    return '#000';
}
add_filter( 'hubbub_save_this_filter_email_customlinkcolor', 'hubbub_save_this_filter_email_customlinkcolor', 10, 3 );

function hubbub_save_this_filter_email_subject( $email_subject, $post_id, $is_shortcode ) {
    return 'Example Email Subject';
}
add_filter( 'hubbub_save_this_filter_email_subject', 'hubbub_save_this_filter_email_subject', 10, 3 );

function hubbub_save_this_filter_email_heading( $heading, $post_id, $is_shortcode ) {
    return 'Heading Example';
}
add_filter( 'hubbub_save_this_filter_email_heading', 'hubbub_save_this_filter_email_heading', 10, 3 );

function hubbub_save_this_filter_site_title( $site_title, $post_id, $is_shortcode ) {
    return 'Hubbub';
}
add_filter( 'hubbub_save_this_filter_site_title', 'hubbub_save_this_filter_site_title', 10, 3 );

function hubbub_save_this_filter_image_url( $image_url, $post_id, $is_shortcode ) { // AKA site logo
    return 'https://morehubbub.com/wp-content/uploads/2023/12/hubbub-logo-red-transparent.png';
}
add_filter( 'hubbub_save_this_filter_image_url', 'hubbub_save_this_filter_image_url', 10, 3 );

function hubbub_save_this_filter_footer_site_title( $footer_site_title, $post_id, $is_shortcode ) {
    $footer = 'You received this email because you saved a post on ' . $footer_site_title;
    return $footer;
}
add_filter( 'hubbub_save_this_filter_footer_site_title', 'hubbub_save_this_filter_footer_site_title', 10, 3 );


function hubbub_save_this_filter_html_template( $html_template, $post_id, $is_shortcode ) {
    return $html_template; // Purposely not changed to allow for testing
}
add_filter( 'hubbub_save_this_filter_html_template', 'hubbub_save_this_filter_html_template', 10, 3 );

function hubbub_save_this_filter_html_email_complete( $html_email_complete, $post_id, $is_shortcode ) {
    return str_replace( 'Jordan', 'Colin', $html_email_complete );
}
add_filter( 'hubbub_save_this_filter_html_email_complete', 'hubbub_save_this_filter_html_email_complete', 10, 3 );

function hubbub_save_this_filter_headers( $headers, $post_id, $is_shortcode ) {
    // Do something with the $headers array
    return $headers;
}
add_filter( 'hubbub_save_this_filter_headers', 'hubbub_save_this_filter_headers', 10, 3);

function hubbub_save_this_filter_custom_after_logo( $content, $post_id, $is_shortcode ) {
    return 'Custom Section: After Logo';
}
add_filter( 'hubbub_save_this_filter_custom_after_logo', 'hubbub_save_this_filter_custom_after_logo', 10, 3 );

function hubbub_save_this_filter_custom_after_message( $content, $post_id, $is_shortcode ) {
    return 'Custom Section: After Message';
}
add_filter( 'hubbub_save_this_filter_custom_after_message', 'hubbub_save_this_filter_custom_after_message', 10, 3 );

function hubbub_save_this_filter_custom_after_post_link( $content, $post_id, $is_shortcode ) {
    return 'Custom Section: After Post Link';
}
add_filter( 'hubbub_save_this_filter_custom_after_post_link', 'hubbub_save_this_filter_custom_after_post_link', 10, 3 );

function hubbub_save_this_filter_custom_before_bottom_content_add_flair( $content, $post_id, $is_shortcode ) {
    return '<div align="center"><a href="' . get_permalink( $post_id, $is_shortcode ) . '"><img src="https://mysite.com/fleur-de-lis.png" alt="" width="25" height="25"></a></div>';
}
add_filter( 'hubbub_save_this_filter_custom_before_bottom_content', 'hubbub_save_this_filter_custom_before_bottom_content_add_flair', 10, 3 );

function hubbub_save_this_filter_custom_after_bottom_content_add_image( $content, $post_id, $is_shortcode ) {
    return '<div align="center"><a href="https://whywatermelon.com"><img width="400" src="https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExNGQ5aGswdHpxMjhsampqeGpxbDgxYjZoY3NvOTk4dGN3cm01bDd0dSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/4z2UsHgV7JkpW/200.webp" alt="Why is there a watermelon there?" title="No matter where you go, there you are."></a></div>';
}
add_filter( 'hubbub_save_this_filter_custom_after_bottom_content', 'hubbub_save_this_filter_custom_after_bottom_content_add_image', 10, 3 );

function hubbub_save_this_filter_should_save_cookie( $should_run, $post_id, $is_shortcode ) {
    // We save a cookie to populate the form with the visitor's email address on subsequent page loads.
    // Default: 'true'
    return 'false'; // must return string
}
add_filter( 'hubbub_save_this_filter_should_save_cookie', 'hubbub_save_this_filter_should_save_cookie', 10, 3 ); // Boolean to determine whether or not to save cookies

/* 2.24.0 and above */
function hubbub_save_this_filter_poweredby_coffee( $poweredby, $post_id, $is_shortcode ) {
    return 'Powered by ☕';
}
add_filter( 'hubbub_save_this_filter_poweredby', 'hubbub_save_this_filter_poweredby_coffee', 10, 3 );

/* $metadata is an array 
Currently only used for Kit (formerly ConvertKit) */
function hubbub_save_this_filter_mailing_list_service_custom_metadata_change( $metadata, $post_id, $is_shortcode ) {
    return array( 'custom' => 'data' );
}
add_filter( 'hubbub_save_this_filter_mailing_list_service_custom_metadata', 'hubbub_save_this_filter_mailing_list_service_custom_metadata_change', 10, 3 );

/* $subscriber is an array 
Used for all mailing lists. Each API accepts different field names. Please see their documentation. */
function hubbub_save_this_filter_subscriber_data_update( $subscriber, $post_id, $is_shortcode ) {
    $subscriber['custom_additional_data'] = 'additional data';
    return $subscriber;
}
add_filter( 'hubbub_save_this_filter_subscriber_data', 'hubbub_save_this_filter_subscriber_data_update', 10, 3 );

/* $zapier_payload is an array
    keys:
    - page_title
    - page_url
    - email_address
    - (optionally) name
*/
function hubbub_save_this_filter_zapier_data_update( $zapier_payload, $post_id, $is_shortcode ) {
    $zapier_payload['custom_additional_data'] = 'additional data';
    return $zapier_payload;
}
add_filter( 'hubbub_save_this_filter_zapier_data', 'hubbub_save_this_filter_zapier_data_update', 10, 3 );
