<?php
/**
 * Week Grid Template
 * The template for displaying events by week.
 *
 * This view contains the filters required to create an effective week grid view.
 *
 * You can recreate an ENTIRELY new week grid view by doing a template override, and placing
 * a week.php file in a tribe-events/ directory within your theme directory, which
 * will override the /views/week.php. 
 *
 * You can use any or all filters included in this file or create your own filters in 
 * your functions.php. In order to modify or extend a single filter, please see our
 * readme on templates hooks and filters (TO-DO)
 *
 * @package TribeEventsCalendarPro
 * @since  2.1
 * @author Modern Tribe Inc.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); }


	echo apply_filters('tribe_events_week_pagination', '');
	echo apply_filters('tribe_events_week_the_grid', '');

/*
	Mockup: https://central.tri.be/attachments/54643/weekview.1.jpg
	
	Template Tags Needed:
		
	-Week Nav (like the month nav on calendar view)
		<-- Previous Week | Month/Week #?/Year Selector | Next Week -->
	-Week View Button (top, right of calendar/list view)
	
	-Tag to output the day dates in the table header
	
	-Tag to output the day hours for the grid, including an "All Day" one at the top (see the mockup)
	
	I'll need your help in coming up with the best solution for all the timeline stuff
	
	(Feel free to let me know if the following would just be default WP tags like the_title, etc)
	
	-Event Title Tag
	-Event Excerpt Tag
	-Event Time Duration Tag (Just like for calendar view)
	-Tag For URL To Event
*/
