<?php 
function get_header ()
{
    $path_template = 'inc/header.php';
    if(file_exists($path_template)){
        require $path_template;
    }else{
        require false;
    }
}
function get_footer ()
{
    $path_template = 'inc/footer.php';
    if(file_exists($path_template)){
        require $path_template;
    }else{
        require false;
    }
}
function get_header_login ()
{
    $path_template = 'inc/header_login.php';
    if(file_exists($path_template)){
        require $path_template;
    }else{
        require false;
    }
}
?>