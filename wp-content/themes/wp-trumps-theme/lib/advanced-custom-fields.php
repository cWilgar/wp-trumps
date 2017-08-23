<?php

/**
 * Register ACF fields for trump-card
 */

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_royal-trump-image',
    'title' => 'Royal Trump Image',
    'fields' => array (
      array (
        'key' => 'field_599c6dc9a0c3c',
        'label' => 'Image',
        'name' => 'image',
        'type' => 'image',
        'required' => 0,
        'save_format' => 'object',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      )
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'trump-card',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));

  register_field_group(array (
    'id' => 'acf_royal-trump-categories',
    'title' => 'Royal Trump Categories',
    'fields' => array (
      array (
        'key' => 'field_599c69d2eb3b9',
        'label' => 'reign',
        'name' => 'reign',
        'type' => 'number',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
      array (
        'key' => 'field_599c6b07926d4',
        'label' => 'ascension',
        'name' => 'ascension',
        'type' => 'number',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
      array (
        'key' => 'field_599c6b1c926d5',
        'label' => 'death',
        'name' => 'death',
        'type' => 'number',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
      array (
        'key' => 'field_599c6b34926d6',
        'label' => 'spouses',
        'name' => 'spouses',
        'type' => 'number',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
      array (
        'key' => 'field_599c6b3f926d7',
        'label' => 'children',
        'name' => 'children',
        'type' => 'number',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'trump-card',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}
