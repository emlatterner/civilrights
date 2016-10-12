<?php

function filter_navigation($nav) {
  $nav = array(
    array(
      'label' => 'Items',
      'uri' => url('items')
    ),
    array(
      'label' => 'Collections',
      'uri' => url('collections')
    ),
    array(
      'label' => 'Resources',
      'uri' => url('exhibits')
    )
  );
  return $nav;
}

add_filter('public_navigation_main', 'filter_navigation');
