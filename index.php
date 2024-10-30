<?php
/*
Plugin Name: Simplest comment spam catcher
Plugin URI: https://wordpress.org/plugins/mhm-catch-comment-spam/
Description: Adds a hidden field to comment forms: this will, most likely, be auto-filled by evil robots. If the form submission contains a value for this field, the comment will not be saved.
Author: Say Hello GmbH
Version: 1.0.5
Author URI: http://sayhello.ch/
*/

class MHM_CatchCommentSpam
{

	public function __construct()
	{
		add_filter('preprocess_comment', [$this, 'catch_comment_spam']);
		add_action('comment_form_after_fields', [$this, 'catch_comment_spam_extrafield']);
	}

	//////////////////////////////////////////////////

	function catch_comment_spam($comment_data)
	{
		if (isset($comment_data['mhmcatchcommentspam']) && '' !== $comment_data['mhmcatchcommentspam']) {
			die();
		}
		return $comment_data;
	}

	//////////////////////////////////////////////////

	function catch_comment_spam_extrafield()
	{
		echo '<input type="hidden" name="mhmcatchcommentspam" />';
	}
}

new MHM_CatchCommentSpam();
