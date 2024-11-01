<?php
/**
 * Examples that may be useful
*/


/** 
 * #### Actions Examples 
 * 
*/

// Send an email to your boss letting them know
// how smart you are for choosing Hubbub's Save This feature
function hubbub_save_this_action_sent_notify_your_boss( $post_id ){
    /**
     * Subject: OMG YOU'RE NOT GOING TO BELIEVE THIS
     * Message: So, I purchased Hubbub Pro+ (I used
     * your credit card, but, it was soo inexpensive!) and enabled
     * a feature it has called Save This! This adds people to our
     * mailing list. And boy does it convert!
     * Anyway, you're going to get an email everytime this happens
     * to remind you how smart you were for hiring me!
     * Have a great day,
     * Excited Eliza!
     * 
     */
}
add_action( 'hubbub_save_this_action_sent', 'hubbub_save_this_action_sent_notify_your_boss', 10, 1 );

// Track the event of someone filling out the form in Google Analytics
function hubbub_save_this_action_counted_track_event_google_analytics( $post_id ){
    $tracking_id = 'UA-XXXX-Y';
    $client_id = 'SOME UNIQUE ID' . '_' . $post_id;
    $category = 'Form';
    $action = 'submit';
    $label = 'Save This Form';
    $value = 1;

    // Obviously, you'll need to create send_ga_event() which would call GA's Measurement Protocol
    // https://developers.google.com/analytics/devguides/collection/protocol/ga4
    send_ga_event($tracking_id, $client_id, $category, $action, $label, $value);
}
add_action( 'hubbub_save_this_action_counted', 'hubbub_save_this_action_counted_track_event_google_analytics', 10, 1 );


/**
 *  #### Filters Examples 
 * 
*/

// Use a different email subject based on post category
function hubbub_save_this_filter_email_subject_by_category( $email_subject, $post_id ) {
    // Default: 'You Saved This: %post_title%

    if ( in_category( 'BBQ Recipes', $post_id ) ) { // doc: https://developer.wordpress.org/reference/functions/in_category/
        $email_subject = str_replace( 'You Saved This:', 'A Delicious Smokey BBQ Recipe:', $email_subject );
    }

    return $email_subject;
}
add_filter( 'hubbub_save_this_filter_email_subject', 'hubbub_save_this_filter_email_subject_by_category', 10, 2 );

// Save subscriber to different MailerLite group based on post category
function add_subscriber_to_mailerlite_group_based_on_post_category( $subscriber_data, $post_id, $is_shortcode ) {

    if ( ! isset( $subscriber_data['groups'] ) ) { 
        return $subscriber_data;
    } else {

        // If the Category is X, then add to MailerLite Group Y

        if ( has_category( 'my-category-slug', $post_id ) ) {
            $subscriber_data['groups'][0] = 'MAILERLITEGROUPID';
        }

        if ( has_category( 'my-category-slug2', $post_id ) ) {
            $subscriber_data['groups'][0] = 'MAILERLITEGROUPID2';
        }

        if ( has_category( 'my-category-slug3', $post_id ) ) {
            $subscriber_data['groups'][0] = 'MAILERLITEGROUPID3';
        }

        if ( has_category( 'my-category-slug4', $post_id ) ) {
            $subscriber_data['groups'][0] = 'MAILERLITEGROUPID4';
        }

    }

    return $subscriber_data;
}

add_filter( 'hubbub_save_this_filter_subscriber_data', 'add_subscriber_to_mailerlite_group_based_on_post_category' );


// Change the email's message based on post ID
function hubbub_save_this_filter_email_message_by_post_id( $email_message, $post_id ) {
    // Default: Based on your Save This settings in Hubbub > Save This

    if ( $post_id == 1914 ) {
        $email_message = "
        <h3>Hello!</h3>
        <p>This is my custom email message. Thank you for saving this <em>specific post</em>!";
    }

    return $email_message;
}
add_filter( 'hubbub_save_this_filter_email_message', 'hubbub_save_this_filter_email_message_by_post_id', 10, 2 );

// Add an image to the bottom of the Save This email
function hubbub_save_this_filter_before_bottom_content_add_image( $content, $post_id ) {
    return '<div align="center"><a href="https://morehubbub.com/wp-content/uploads/2024/07/Download-Button-PNG-Photo1.png"><img src="https://morehubbub.com/wp-content/uploads/2024/07/Download-Button-PNG-Photo1.png"></a></div>';
}
add_filter( 'hubbub_save_this_filter_before_bottom_content', 'hubbub_save_this_filter_before_bottom_content_add_image', 10, 2 );

// Add BCC to every email
function hubbub_save_this_filter_headers_add_bcc( $headers, $post_id ) {
    $headers[] = 'BCC: Name <email@domain.com>';
    return $headers;
}
add_filter( 'hubbub_save_this_filter_headers', 'hubbub_save_this_filter_headers_add_bcc', 10, 2);

// Custom Link Color based on the time of day
function hubbub_save_this_filter_email_customlinkcolor_day_or_night( $custom_link_color, $post_id ) {
     // Get the current hour
     $currentHour = date('H');

     // Define the start and end hours for day time
     $dayStart = 6; // 6 AM
     $dayEnd = 18;  // 6 PM
 
     // Check if the current hour is between dayStart and dayEnd
     if ($currentHour >= $dayStart && $currentHour < $dayEnd) {
         // Keep the same color? Or, make it ligher?
     } else {
         $custom_link_color = "#000"; // Make it black!
     }
    return $custom_link_color;
}
add_filter( 'hubbub_save_this_filter_email_customlinkcolor', 'hubbub_save_this_filter_email_customlinkcolor_day_or_night', 10, 2 );

// Show Popular Posts at the bottom of the Save This email
// Requires the WordPress Popular Posts plugin: https://wordpress.org/plugins/wordpress-popular-posts/
// Also: This is an unstyled example, it would require styling.
// Submitted by Andrew Wilder https://github.com/blogtutor/ | https://www.nerdpress.net/
function hubbub_save_this_filter_custom_after_bottom_content_popular_posts( $content, $post_id ) {
	if ( shortcode_exists( 'wpp' ) ) { 
		$content = '<p>You may also like...</p>' . do_shortcode( '[wpp post_type="post" limit=5 range="daily" order_by="views"]' );
	}
    return $content;
}
add_filter( 'hubbub_save_this_filter_custom_after_bottom_content', 'hubbub_save_this_filter_custom_after_bottom_content_popular_posts', 10, 2 );


// Turn off saving cookies
add_filter( 'hubbub_save_this_filter_should_save_cookie', __return_false() );