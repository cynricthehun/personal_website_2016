<?php

/**
 * @file
 * template.php
 */
 function mytheme_theme_registry_alter(&$variables) {
     $variables['picture_formatter']['variables']['attributes']['class'][] = "featurette-image img-circle img-responsive pull-right";
 }
