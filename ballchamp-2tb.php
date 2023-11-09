<?php
/*
Plugin Name: ballchamp-2tb
Description: [add_tb1 width="100%" height=""] เพิ่ม shortcode นี้ เพื่อเพิ่มตารางคะแนนทีมฟุตบอลที่ทำคะแนนได้สูงสุด ของแต่ละ league
และ [add_tb2 width="100%" height=""] เพิ่ม shortcode นี้ เพื่อเพิ่มตารางคะแนนนักฟุตบอลที่ทำคะแนนได้สูงสุด ของแต่ละ league
Author: GJ
Version: 1.0
*/
?>
<?php
function bc_tb1($atts, $content = null ) {
  
    //echo '<div id="my-plugin-value-container"></div>';
    $a = shortcode_atts( array(
        'width' => '100%',
        'height' => '100%',
    ), $atts );
        
    return '<iframe src="/showhoy/wp-content/plugins/ballchamp-2tb/tb1.php" width='.$a['width'].' height='.$a['height'].' frameborder=0></iframe>';
}

function bc_tb2($atts, $content = null ) {
  
  $a = shortcode_atts( array(
      'width' => '100%',
      'height' => '100%',
  ), $atts );
  return '<iframe src="/showhoy/wp-content/plugins/ballchamp-2tb/tb2.php" width='.$a['width'].' height='.$a['height'].' frameborder=0></iframe>';
}

add_shortcode('add_tb1', 'bc_tb1');
add_shortcode('add_tb2', 'bc_tb2');

?>

