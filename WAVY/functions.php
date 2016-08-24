  <?php

function wavy_theme_styles() {

  wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );

  wp_enqueue_style('style_css', get_template_directory_uri() . '/style_css' );


}

 add_action ('wp_enqueue_scripts', 'wavy_theme_styles');

 function wavy_theme_js() {

   wp_enqueue_script('bootstrap_js', get_template_directory_uri() . 'js/bootstrap.min.js', array('jquery'), '', true );

   wp_enqueue_script('jqBootstrapValidation_js', get_template_directory_uri() . 'js/jqBootstrapValidation.js', array('jquery'), '', true  );

   wp_enqueue_script('contact_me_js', get_template_directory_uri() . 'js/contact_me.js', array('jquery'), '', true  );

   wp_enqueue_script('agency_js', get_template_directory_uri() . 'js/agency.js', array('jquery'), '', true  );

   wp_enqueue_script('gulpfile_js', get_template_directory_uri() . 'js/gulpfile.js', array('jquery'), '', true  );


 }

 add_action('wp_enqueue_scripts', 'wavy_theme_js');

   ?>
