<?php
/*
数据库交互
*/

//多维数组
$posts=$wpdb->get_results("SELECT * FROM $wpdb->posts ORDER BY ID DESC");
foreach($posts as $post){
echo $post->id;
}

//取一行
$posts=$wpdb->get_row("SELECT * FROM $wpdb->posts ORDER BY ID DESC");
echo $posts->id;

//取一列
$posts=$wpdb->get_col("SELECT * FROM $wpdb->posts ORDER BY ID DESC");
echo $posts[0]->id;


//取某个值，如果是多个则取第一个
$email=$wpdb->get_var("SELECT user_email FROM wp_users WHERE user_login='lammy'");
echo $email;

//插入一行数据
$wpdb->insert($wpdb->usermeta,array("user_id"=>1,"meta_key"=>"awesome_factor","meta_value"=>10),array("%d","%s","%d"));

//修改数据
$wpdb->update($wpdb->posts,array("post_title"=>"Modified Post Title"),array("ID"=>5),array("%s"),array("%d"));
?>