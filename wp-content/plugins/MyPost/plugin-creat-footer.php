<?php

/*
Plugin Name: My footer Setting
Plugin URI:
Description: Add post types footer
Version: 1.0.0
Author: DUC NGUYEN
Author URI: http://localhost:8080/task2/
 */

defined('ABSPATH') or die("HEY, WHAT DO YOU DOING?, you silly human!");

class MyFooter
{
    public function  __construct()
    {
        add_action('admin_menu',array($this,'settingMenu'));
        add_filter('manage_posts_columns', array($this,'posts_columns_id'), 5);
        add_action('manage_posts_custom_column', array($this,'posts_custom_id_columns'), 5, 2);
        add_filter('admin_footer_text', array($this,'remove_footer_admin'));
    }

    function remove_footer_admin () {
        echo ' <div class="display-post"></div>';
        echo '<script>
            function checkedCkeckbox(id) {
                    jQuery.ajax({ // Hàm ajax
                       type : "post", //Phương thức truyền post hoặc get
                       dataType : "html", //Dạng dữ liệu trả về xml, json, script, or html
                       url : "'.admin_url("admin-ajax.php").'" , // Nơi xử lý dữ liệu
                       data : {action: "checkedCheckbox",id:id},
                       beforeSend: function(){
                            // Có thể thực hiện công việc load hình ảnh quay quay trước khi đổ dữ liệu ra
                       },
                       success: function(response) {
                         
                          },
                       error: function( jqXHR, textStatus, errorThrown ){
                            //Làm gì đó khi có lỗi xảy ra
                            console.log( \'The following error occured: \' + textStatus, errorThrown );
                       }
                   });          
            }
        </script>';
    }

    //select options
    function posts_columns_id($defaults){
        $defaults['wps_post_id'] = __('Featured');
        return $defaults;
    }
    function posts_custom_id_columns($column_name, $id){
        if($column_name === 'wps_post_id'){
            global $wpdb;
            $table_name= $wpdb->prefix ."posts";
            $check= $wpdb->get_var( "SELECT status FROM $table_name WHERE ID = $id" );
            if ($check=="no"||$check==null)
                echo '<input   type="checkbox" onclick="checkedCkeckbox('.$id.');">';
            else
                echo '<input checked  type="checkbox" onclick="checkedCkeckbox('.$id.');">';
        }
    }

    //create menu
    public function settingMenu()
    {
        add_menu_page('My Menu Title',
        'My Menu',
        'manage_options',
        'mymenupage',
        array($this,'exampleMenu'),
        '',
        6
    );
    }

    //design menu
    function exampleMenu()
    {
        require_once 'pageSetting.php';
    }
    //add options when actice
    function active_plugin()
    {

    }

    //update options when deactive
    function deactive(){

    }
}
require_once ABSPATH . "wp-admin/includes/upgrade.php";
global $wpdb;
$table_name =$wpdb->prefix ."featured";
if ($wpdb->get_var("SHOW TABLES LIKE '".$table_name."'")!=$table_name)
{
    $sql="CREATE TABLE ".$table_name."(
   id INT NOT NULL AUTO_INCREMENT,
   status VARCHAR(40) NOT NULL,
    number int NOT NULL,
   PRIMARY KEY ( id )
    );";
    dbDelta($sql);
}


$table_post=$wpdb->prefix ."posts";
$wpdb->query("ALTER TABLE ".$table_post."
        ADD COLUMN status VARCHAR(15);");

if (class_exists('MyFooter'))
{
    $footerPlugin = new MyFooter();
}

register_activation_hook(__FILE__,array($footerPlugin,'active_plugin'));

register_deactivation_hook(__FILE__,array($footerPlugin,'deactive'));


