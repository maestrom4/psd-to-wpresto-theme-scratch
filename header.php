<?php
/**
 * Header file.
 * 
 * @package wpresto
 * @version 1.0
 */
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title><?php  wp_title( '|', true, 'right'); ?></title>
     <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
     
