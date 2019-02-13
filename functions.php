<?php


// #1 - funzione per raggiungere il file style.css

if (!function_exists('import_style')) {
  function import_style() {
    wp_enqueue_style('boolean', get_template_directory_uri() . '/style.css');

    //questa funzione mi permette di aggiungere il percorso del mio file css al mio template. la prima cosa in ingresso(boolean) e' solo un id ma serve a poco.

  }

  add_action('wp_enqueue_scripts', 'import_style');

  //ogni volta che creo una mia funzione, la implemento ad una gia esistente funzione wp, utilizzando il metodo add_action.
}



// #2 - funzione per aggiungere il menu

if (!function_exists('boolean_setup')) {
  function boolean_setup() {
    //cosi rendo disponibile un menu che si potra aggiungere all header html

    register_nav_menus(array(
      'header' => 'header'
    ));
  }

  add_action('after_setup_theme', 'boolean_setup');

}


// #3 - funzione per aggiungere i widget

if (!function_exists('boolean_setup')) {
  function boolean_setup() {
    //cosi rendo disponibile un menu che si potra aggiungere all header html

    register_nav_menus(array(
      'header' => 'header'
    ));
  }

  add_action('after_setup_theme', 'boolean_setup');

}

// #4 si puo utilizzare al posto di get_excerpt() per ritornare un excerpt di lunghezza desiderata
function excerpt($limit) {

  $my_content = get_the_content();
  $my_excerpt = explode(" ", $my_content);

  for ($i=0; $i < $limit; $i++) {
    $new[] = $my_excerpt[$i];
  }
  $new[] = '[...]';
  $my_new_excerpt = implode(" ", $new);
  return $my_new_excerpt;
}

?>
