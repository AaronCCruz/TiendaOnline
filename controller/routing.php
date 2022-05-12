<?php


$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';
// $var_getMenu = $_GET['menu'];

switch ($var_getMenu) {
    case "home":
        require_once('./views/home.php');
        break;
    case "inicio":
        require_once('./views/home.php');
        break;
    case "registro":
        require_once('./views/signup.php');
        break;    
    case "productos":
        require_once('./views/products.php');
        break;
    case "productClass":
        $_clave = trim(filter_input(INPUT_GET, 'clave'));
        if($_clave==1){
            require_once('./views/productCactus.php');
        }
        if($_clave==2){
            require_once('./views/productFlores.php');
        }
        if($_clave==3){
            require_once('./views/productMedicine.php');
        }
        
        break;
    case "login":
        require_once('./views/login.php');
        break;
    case "config":
        require_once('./views/settings.php');
        break;
    
    case "logout":
        $session_destroy = session_destroy();
        
        header("location: ./index.php?menu=home");
        break;

    case "agregarAlCarro":
        $_clave = trim(filter_input(INPUT_GET, 'clave'));
        $_id = trim(filter_input(INPUT_GET, 'id'));
        require_once ('./model/cart_add.php');        
        header("location: ./index.php?menu=productClass&clave=$_clave");       
        break;
    case "quitarDelCarro":
        $_id = trim(filter_input(INPUT_GET, 'id'));
        require_once ('./model/cart_remove.php');        
        header("location: ./index.php?menu=carro");       
        break;
    case "success":
        $_id = trim(filter_input(INPUT_GET, 'id'));        
        require_once ('./views/success.php');       
        break;
    case "carro":
        require_once('./views/cart.php');
        break;
    case "bienvenido":
        require_once('./views/welcome.php');
        break; 
    default:
        require_once('./views/home.php');
}
?>
