<?php
/*
分类页面获取分类信息：category.php
*/

//1
$category=get_the_category();
echo $category[0]->cat_name;
/*
cat_ID - 分类ID
cat_name - 分类名
category_nicename - 别名
category_description - 分类描述
category_parent - 父分类ID
category_count - 包涵文章数量  
*/

//2 只能在分类页里使用
global $wp_query;
$cat_ID = get_query_var("cat");
?>