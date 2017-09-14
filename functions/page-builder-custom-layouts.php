<?php
function mytheme_prebuilt_layouts($layouts){
  $layouts['home-page'] = array (
    'name' => __('Standard Underside', 'vantage'),    // Required
    'widgets' =>
    array (
      0 =>
      array (
        'type' => 'visual',
        'title' => '',
        'text' => '',
        'filter' => '1',
        'panels_info' =>
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'raw' => false,
          'grid' => 0,
          'cell' => 1,
          'id' => 0,
          'style' =>
          array (
            'background_display' => 'tile',
            'parallax' => '',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      1 =>
      array (
        '_sow_form_id' => '563c8ef5080a3',
        'panels_info' =>
        array (
          'class' => 'Subpage_Menu_Widget',
          'raw' => false,
          'grid' => 0,
          'cell' => 2,
          'id' => 1,
          'style' =>
          array (
            'background_display' => 'tile',
            'parallax' => '',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
    ),
    'grids' =>
    array (
      0 =>
      array (
        'cells' => 3,
        'style' =>
        array (
          'padding' => '97px 0px 30px 0px',
          'background_display' => 'tile',
          'parallax' => '',
          'center-content' => '',
          'matchheight' => '',
          'fillheight' => '',
          'scrollToRowButton' => '',
        ),
      ),
    ),
    'grid_cells' =>
    array (
      0 =>
      array (
        'grid' => 0,
        'weight' => 0.08300000000000000432986979603811050765216350555419921875,
      ),
      1 =>
      array (
        'grid' => 0,
        'weight' => 0.6670000000000000373034936274052597582340240478515625,
      ),
      2 =>
      array (
        'grid' => 0,
        'weight' => 0.25,
      ),
    ),
  );
    return $layouts;
}
add_filter('siteorigin_panels_prebuilt_layouts','mytheme_prebuilt_layouts');
