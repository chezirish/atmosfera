<?php 

function remove_editor() {
    if (isset($_GET['post'])) {
        $id = $_GET['post'];
        $template = get_post_meta($id, '_wp_page_template', true);

        if($template == 'page-templates/main.php'){ 
            remove_post_type_support( 'page', 'editor' );
        }
        if($template == 'page-templates/about.php'){ 
            remove_post_type_support( 'page', 'editor' );
        }
        if($template == 'page-templates/articles.php'){ 
            remove_post_type_support( 'page', 'editor' );
        }
        if($template == 'page-templates/contacts.php'){ 
            remove_post_type_support( 'page', 'editor' );
        }
        if($template == 'page-templates/gift-sertificates.php'){ 
            remove_post_type_support( 'page', 'editor' );
        }
        if($template == 'page-templates/licence.php'){ 
            remove_post_type_support( 'page', 'editor' );
        }
        if($template == 'page-templates/masters.php'){ 
            remove_post_type_support( 'page', 'editor' );
        }
        if($template == 'page-templates/news.php'){ 
            remove_post_type_support( 'page', 'editor' );
        }
        if($template == 'page-templates/shares.php'){ 
            remove_post_type_support( 'page', 'editor' );
        }
        if($template == 'page-templates/all-reviews.php'){ 
            remove_post_type_support( 'page', 'editor' );
        }
    }
}
add_action('init', 'remove_editor');