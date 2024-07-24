# Hubbub Test: Save This Actions and Filters

A sample WordPress plugin that adds example actions and filters for Hubbub's Save This feature.

## Requirements

- WordPress 5.3 or above
- PHP 7.2.x
- Hubbub Pro 2.23.0 or above

## Examples

All currently supported actions and filters are in [_actions.php](https://github.com/nerdpressteam/hubbub-test-save-this-filters/blob/main/_actions.php) and [_filters.php](https://github.com/nerdpressteam/hubbub-test-save-this-filters/blob/main/_filters.php) respectively. We've also included a few pratical examples in [examples.php](https://github.com/nerdpressteam/hubbub-test-save-this-filters/blob/main/examples.php) that may be useful.

## List of Actions

- **hubbub_save_this_action_preparing** - First action called, preparing the email.
- **hubbub_save_this_action_before_sent** - Just prior to sending the Save This email.
- **hubbub_save_this_action_sent** - Save This email has just been sent.
- **hubbub_save_this_action_before_count_increment** - Just prior to incrementing the count of the number of times this post had been "Saved".
- **hubbub_save_this_action_counted** - Counted!
- **hubbub_save_this_action_before_cookie** - Just prior to saving the cookie which stores the visitor's email for autofilling later.
- **hubbub_save_this_action_cookie_saved** - (see filter if you want to disable) Cookied!
- **hubbub_save_this_action_before_mailing_list_add** - Just prior to adding the email address to the selected Mailing List Service.
- **hubbub_save_this_action_mailing_list_added** - Added to a mailing list!
- **hubbub_save_this_action_mailing_list_added_convertkit** - Added to ConvertKit.
- **hubbub_save_this_action_mailing_list_added_flodesk** - Added to FloDesk.
- **hubbub_save_this_action_mailing_list_added_mailchimp** - Added to MailChimp.
- **hubbub_save_this_action_mailing_list_added_mailerlite** - Added to MailerLite.

## List of Filters

All filters expect to accept and return strings unless otherwise noted.

- **hubbub_save_this_filter_post_url** - The URL of the post being saved. This will be used within links in the email.
- **hubbub_save_this_filter_post_raw_url** - The plain text URL of the post being saved. This is displayed as a full URL in the Save This email.
- **hubbub_save_this_filter_post_title** - The title of the post being saved.
- **hubbub_save_this_filter_email_fromname** - The "From Name" provided in Hubbub > Save This settings.
- **hubbub_save_this_filter_email_fromaddress** - The "From Address" provided in Hubbub > Save This settings.
- **hubbub_save_this_filter_email_featuredimageurl** - The URL of the featured image for the post.
- **hubbub_save_this_filter_email_message** - The "Email Message" provided in Hubbub > Save This settings.
- **hubbub_save_this_filter_email_bottomcontent** - The "Bottom Content" provided in Hubbub > Save This settings.
- **hubbub_save_this_filter_email_subject** = The default email subject which is "You Saved This: %post_title%".
- **hubbub_save_this_filter_email_heading** - The default heading which is "You Saved This:".
- **hubbub_save_this_filter_post_title_link** - An HTML link of the post title and post URL. E.g. `<a href=$post_url target="_blank">$post_title</a>`
- **hubbub_save_this_filter_footer_site_title** - The Site Title in the footer of the email.
- **hubbub_save_this_filter_image_url** - The URL of the image provided in Hubbub > Save This settings.
- **hubbub_save_this_filter_email_customlinkcolor** - The Custom Link Color provided in Hubbub > Save This settings.


- **hubbub_save_this_filter_should_save_cookie** - String (expected: "false"). Determines whether or not to save a cookie. Default 'true'.

- **hubbub_save_this_filter_html_template** - The raw HTML template prior to adding any content to it.
- **hubbub_save_this_filter_html_email_complete** - The raw HTML template after adding all of the content just before sending.

- **hubbbub_save_this_filter_custom_section_1** - Custom content section. Below site name or logo.
- **hubbbub_save_this_filter_custom_section_2** - Custom content section. Below email message area.
- **hubbbub_save_this_filter_custom_section_3** - Custom content section. Below post title.
- **hubbbub_save_this_filter_custom_section_4** - Custom content section. Below post URL.

## Support Docs

For more information [see our Support Doc](https://morehubbub.com/docs/save-this-filters/)

## Changelog

**1.0.0**
- Initial commit
- Examples
- Readme