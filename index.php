<?php 
require "lib/url.php";
ob_start();
session_start();

?>
<?php 
require "lib/template.php" ;    
?>

<?php 

//CheckList
/*
1.Đẩy dữ liệu truy cập lên url (vd: thẻ a có href = '?page=product)
2.Lấy dữ liệu page từ url ($page = !empty($_GET['page'])?$_GET['page']:"home")
3.Tạo đường dẫn ($path = "pages/{$page}.php";)
4.Gọi file xử lý hiện tại 
*/
#2
$page = !empty($_GET['page'])?$_GET['page']:"home";

// if(!empty($_GET['page'])){
//     $page = $_GET['page'];
// }else{
//     $page = 'home';
// }
#3
$path = "pages/{$page}.php";
#4
if(file_exists($path))
{
    require $path;
}else{
    require "inc/404.php";
}
?>

<!-- end content  -->