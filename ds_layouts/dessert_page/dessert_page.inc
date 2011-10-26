<?php
function ds_dessert_page() {
  return array(
    'label' => t('Dessert Page'),
    'regions' => array(
      'left_top' => t('Left Top'),
      'right_top' => t('Right Top'),
      'left_bottom' => t('Left Bottom'),
      'right_bottom' => t('Right Bottom'),
      'right_bottom_left' => t('Right Bottom Left'),
      'right_bottom_right' => t('Right Bottom Right')
    ),
    'css' => TRUE,
  );
}
?>