<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- questa qua sopra e' una funzione wordpress che mi permette di scegliere la lingua, non e' proprio una best practice poiche e' una funzione che ritorna un echo.
Sarebbe meglio scrivere una funzione con return, e poi fare echo da php. -->
  <head>
    <meta charset="utf-8">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- la meta description e' importante per l ottimizzazione SEO-->
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
    <!-- questo serve per aggiungere alla head un sacco di ottimizzazioni (es: cose seo come prefetch o preconnect, scripts, ecc ecc..) -->
  </head>
  <body <?php body_class(); ?>>
  <!-- qua questa funzione aggiunge varie classi al body. se ne voglio aggiungere altre, basta scrivere nella parentesi -->
