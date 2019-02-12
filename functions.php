<?php

if (!function_exists('import_style')) {
  function import_style() {
    wp_enqueue_style('boolean', get_template_directory_uri() . '/style.css');

    //questa funzione mi permette di aggiungere il percorso del mio file css al mio template. la prima cosa in ingresso(boolean) e' solo un id ma serve a poco.

  }

  add_action('wp_enqueue_scripts', 'import_style');

  //ogni volta che creo una mia funzione, la implemento ad una gia esistente funzione wp, utilizzando il metodo add_action.
}





 ?>
