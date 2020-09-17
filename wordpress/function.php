<?php

// Header
get_header();
get_header($name);
wp_title(); // output the title
get_stylesheet_directory_uri(); // location of stylesheet
get_temporary_directory_uri(); // location of the site's theme file
get_site_url(); // the exact URL
bloginfo('description'); // description of the blog in Settings > General
bloginfo('html_type');
bloginfo('charset');

// Navigation
register_nav_menus(); // put in functions.php to register a new menu
wp_nav_menu(['theme_location'=>'header-menu']); // where the menu should display

function register_new_menus() {
  register_nav_menus(
    ['footer_menu'=>__('Footer Menu'),'extra_menu'=>__('Extra Menu')]
  );
}
// include following in wp_nav_menu function
// menu_class // css class of the ul element
// menu_id // the id that is applied to the ul element
// container // add an extra wrapper round the ul
// container_class // css class of the container
// container_id // apply id to the container
// before // custom text before
// after // custom text after

// Template Functions
the_content(); // display the content of the posts
get_header(); // header.php
get_sidebar(); // contents of sidebar.php
get_footer(); // footer.php
the_time('m-d-y'); // date in month-day-year
comments_popup_link(); // link for the comment on the post
the_title(); // specific title
the_permalink(); // URL of the post/page
has_post_thumbnail(); // if post has an image
the_post_thumbnail(); // display image
the_category(); // category of a post/page
the_author(); // name
the_author_link(); // link to author
the_author_meta(); // info in User Profile
the_excerpt(); // excerpt of the post
the_ID(); // ID of a post/page
edit_post_link(); // link to edit post/page
comments_template(); // display comment.php file content
wp_list_pages(); // lists all pages on the site
wp_list_cats(); // list categories
next_post_link('%link'); // url for next post
previous_post_link('%link'); // url for previous post
posts_nav_link(); // next and previous post links

// The Loop
// queries database to determine of there are posts/pages to show
// formats the post/page to the themes instructions
// ends with endwhile statement

if (have_posts()) : 
    while ( have_posts()) : the_posts();
    // display post content
    endwhile;
  endif;

if(have_posts()) :  // check if posts available

  while(have_posts()) : the_post(); // shows posts while available
endwhile; // close loop
endif; // cloe if

the_title(); // title of the post
the_excerpt(); // post excerpt (55 words with ...)
the_content(); // full post content
the_category(); // post categories
the_tags(); // tags associated with the post
the_author(); // author of the post
the_date(); // post date
