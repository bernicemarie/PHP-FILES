<?php
 use PHPMailer\PHPMailer\PHPMailer;

    use PHPMailer\PHPMailer\Exception;

$upload_directory = "uploads";

// helper functions


function last_id(){

global $connection;

return mysqli_insert_id($connection);


}


function set_message($msg){
$_SESSION['message'] = $msg;

}


function display_message() {

    if(isset($_SESSION['message'])) {

        echo $_SESSION['message'];
        unset($_SESSION['message']);

    }



}


function redirect($location){

return header("Location: $location ");


}



// function redirect($location, $sec=0)
// {
//     if (!headers_sent())
//     {
//         header( "refresh: $sec;url=$location" ); 
//     }
//     elseif (headers_sent())
//     {
//         echo '<noscript>';
//         echo '<meta http-equiv="refresh" content="'.$sec.';url='.$location.'" />';
//         echo '</noscript>';
//     }
//     else
//     {
//         echo '<script type="text/javascript">';
//         echo 'window.location.href="'.$location.'";';
//         echo '</script>';
//     }
// }



function query($sql) {

global $connection;

return mysqli_query($connection, $sql);


}


function confirm($result){

global $connection;

if(!$result) {

die("QUERY FAILED " . mysqli_error($connection));


	}


}


function escape_string($string){

global $connection;

return mysqli_real_escape_string($connection, $string);


}



function fetch_array($result){

return mysqli_fetch_array($result);


}



/****************************FRONT END FUNCTIONS************************/


// get products 


function get_products() {
$query = query(" SELECT * FROM products");
confirm($query);
while($row = fetch_array($query)) {
//$product_image = display_image($row['product_image']);
$product = <<<DELIMETER
<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <a href="item.php?id={$row['product_id']}"><img style="height: 90px" src="../resource/images/{$row['product_image']}" alt=""></a>
        <div class="caption">
            <h4 class="pull-right">&#36;{$row['product_price']}</h4>
            <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
            </h4>
            <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
            <a class="btn btn-primary"  href="../resource/cart.php?add={$row['product_id']}">Ajouter sur la carte</a>
        </div>
    </div>
</div>
DELIMETER;
echo $product;
		}
}

//cat
function get_product_cat() {
$query = query(" SELECT * FROM products WHERE product_category_id=".escape_string($_GET['id'])."");
confirm($query);
while($row = fetch_array($query)) {
//$product_image = display_image($row['product_image']);
$product = <<<DELIMETER
  <div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <a href="item.php?id={$row['product_id']}"><img style="height: 90px" src="../resource/images/{$row['product_image']}" alt=""></a>
        <div class="caption">
            <h4 class="pull-right">&#36;{$row['product_price']}</h4>
            <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
            </h4>
            <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
           
             <p>
        <a href="#" class="btn btn-primary">Buy Now!</a>
         <a class="btn btn-primary"  href="../resource/cart.php?add={$row['product_id']}">Ajouter sur la carte</a>
         <a href="item.php?id={$row['product_id']}" class="btn btn-default">Infos</a>       
            </p>
        </div>
    </div>
</div>
DELIMETER;
echo $product;
        }
}

//cat
//shop

function get_product_in_shop() {
$query = query(" SELECT * FROM products");
confirm($query);
while($row = fetch_array($query)) {
//$product_image = display_image($row['product_image']);
$product = <<<DELIMETER
  <div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <a href="item.php?id={$row['product_id']}"><img style="height: 90px" src="../resource/images/{$row['product_image']}" alt=""></a>
        <div class="caption">
            <h4 class="pull-right">&#36;{$row['product_price']}</h4>
            <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
            </h4>
            <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
           
             <p>
        <a href="#" class="btn btn-primary">Buy Now!</a>
         <a class="btn btn-primary"  href="../resource/cart.php?add={$row['product_id']}">Ajouter sur la carte</a>
         <a href="item.php?id={$row['product_id']}" class="btn btn-default">Infos</a>       
            </p>
        </div>
    </div>
</div>
DELIMETER;
echo $product;
        }
}
//shop
function count_all_records($table){
    return mysqli_num_rows(query('SELECT * FROM '.$table));
}

function count_all_products_in_stock(){

    return mysqli_num_rows(query('SELECT * FROM products WHERE product_quantity >= 1'));
}




function get_products_with_pagination($perPage = "6") {
  $rows = count_all_products_in_stock();


    if(isset($_GET['page'])){ //get page from URL if it's there
        $page = preg_replace('#[^0-9]#', '', $_GET['page']); //filter everything but numbers



    } else{
        $page = 1;
    }



    $lastPage = ceil($rows / $perPage);

    if($page < 1){
        $page = 1;
    }elseif($page > $lastPage){
        $page = $lastPage;
    }

    $middleNumbers = '';
    $sub1 = $page - 1;
    $sub2 = $page - 2;
    $add1 = $page + 1;
    $add2 = $page + 2;
    if($page == 1){
        $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';
    } elseif ($page == $lastPage) {
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1. '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
    }elseif ($page > 2 && $page < ($lastPage -1)) {
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub2.'">' .$sub2. '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1. '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add2.'">' .$add2. '</a></li>';
    } elseif($page > 1 && $page < $lastPage){
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page= '.$sub1.'">' .$sub1. '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';
    }

    $limit = 'LIMIT ' . ($page-1) * $perPage . ',' . $perPage;
    $query2 = query(" SELECT * FROM products WHERE product_quantity >= 1 ". $limit);
    confirm($query2);
    $outputPagination = ""; // Initialize the pagination output variable

    if($page != 1){
        $prev  = $page - 1;
        $outputPagination .='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$prev.'">Rétour</a></li>';
    }

    $outputPagination .= $middleNumbers;

    if($page != $lastPage){
        $next = $page + 1;
        $outputPagination .='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$next.'">Suivant</a></li>';
    }

    while($row = fetch_array($query2)) {
        $product_image = display_image($row['product_image']);
        $product = <<<DELIMETER

<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <a href="item.php?id={$row['product_id']}"><img style="height:90px" src="../resource/images/{$row['product_image']}" alt=""></a>
        <div class="caption">
            <h4 class="pull-right">&#36;{$row['product_price']}</h4>
            <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
            </h4>
            <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
             <p class="text-center"><a class="btn btn-primary" target="_blank" href="../resource/cart.php?add={$row['product_id']}">Ajouter sur la carte</a>
             </a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">Info Plus</a></p>
        </div>
    </div>
</div>

DELIMETER;
        echo $product;
    }

    echo "<div class='text-center' style='clear: both;' ><ul class='pagination' >{$outputPagination}</ul></div>";
}



 


function get_shop_with_pagination($perPage = "6") {
  $rows = count_all_products_in_stock();


    if(isset($_GET['page'])){ //get page from URL if it's there
        $page = preg_replace('#[^0-9]#', '', $_GET['page']); //filter everything but numbers



    } else{
        $page = 1;
    }



    $lastPage = ceil($rows / $perPage);

    if($page < 1){
        $page = 1;
    }elseif($page > $lastPage){
        $page = $lastPage;
    }

    $middleNumbers = '';
    $sub1 = $page - 1;
    $sub2 = $page - 2;
    $add1 = $page + 1;
    $add2 = $page + 2;
    if($page == 1){
        $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';
    } elseif ($page == $lastPage) {
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1. '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
    }elseif ($page > 2 && $page < ($lastPage -1)) {
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub2.'">' .$sub2. '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1. '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add2.'">' .$add2. '</a></li>';
    } elseif($page > 1 && $page < $lastPage){
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page= '.$sub1.'">' .$sub1. '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';
    }

    $limit = 'LIMIT ' . ($page-1) * $perPage . ',' . $perPage;
    $query2 = query(" SELECT * FROM products WHERE product_quantity >= 1 ". $limit);
    confirm($query2);
    $outputPagination = ""; // Initialize the pagination output variable

    if($page != 1){
        $prev  = $page - 1;
        $outputPagination .='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$prev.'">Rétour</a></li>';
    }

    $outputPagination .= $middleNumbers;

    if($page != $lastPage){
        $next = $page + 1;
        $outputPagination .='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$next.'">Suivant</a></li>';
    }

    while($row = fetch_array($query2)) {
        $product_image = display_image($row['product_image']);
        $product = <<<DELIMETER

        <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
            <a href="item.php?id={$row['product_id']}"><img style="height: 90px" src="../resource/images/{$row['product_image']}" alt=""></a>
            <div class="caption">
                <h4 class="pull-right">&#36;{$row['product_price']}</h4>
                <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                </h4>
                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
               
                 <p>
            <a href="#" class="btn btn-primary">Buy Now!</a>
             <a class="btn btn-primary"  href="../resource/cart.php?add={$row['product_id']}">Ajouter sur la carte</a>
             <a href="item.php?id={$row['product_id']}" class="btn btn-default">Infos</a>       
                </p>
            </div>
        </div>
    </div>

DELIMETER;
        echo $product;
    }

    echo "<div class='text-center' style='clear: both;' ><ul class='pagination' >{$outputPagination}</ul></div>";
}








function get_categories(){


$query = query("SELECT * FROM categories");
confirm($query);

while($row = fetch_array($query)) {


$categories_links = <<<DELIMETER

<a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>


DELIMETER;

echo $categories_links;

     }



}





function get_products_in_cat_page() {


$query = query(" SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id']) . " AND product_quantity >= 1 ");
confirm($query);

while($row = fetch_array($query)) {

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER


            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../resources/{$product_image}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="../resource/cart.php?add={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

DELIMETER;

echo $product;


		}


}







function get_products_in_shop_page() {


$query = query(" SELECT * FROM products WHERE product_quantity >= 1 ");
confirm($query);

while($row = fetch_array($query)) {

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER


            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../resources/{$product_image}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="../resource/cart.php?add={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

DELIMETER;

echo $product;


        }


}



function login_user(){

if(isset($_POST['submit'])){

$username = escape_string($_POST['username']);
$password = escape_string($_POST['password']);
$nom= $_SESSION['nom'] ;

$query = query("SELECT * FROM users WHERE username = '{$username}' AND userpassword = '{$password }' ");
confirm($query);

if(mysqli_num_rows($query) == 0) {
set_message("Vos informations ne sont pas valides, réessayez-encore");
redirect("login.php");


} else {
   $nom= $_SESSION['nom'] ;
$_SESSION['username'] = $username;

redirect("admin");

         }



    }



}



function send_message() {

    if(isset($_POST['envoyer'])){ 
        $to          = escape_string("kamanobenjamin@gmail.com");
        $from_name   =   escape_string($_POST['name']);
        $subject     =   escape_string($_POST['titre']);
        $emails      =   escape_string($_POST['email']);
        $message     =   escape_string($_POST['message']);
        require 'vendor/autoload.php';
        require 'vendor/phpmailer/phpmailer/src/Exception.php';
       require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
        require 'vendor/phpmailer/phpmailer/src/SMTP.php';
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug  = 0;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "kamanobenjamin87@gmail.com";
    $mail->Password   = "K@mano87$";
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->AddAddress($to, "Benjamin Marie KAMANO");
    $mail->SetFrom( $emails ,$from_name);
    //$mail->AddReplyTo($from_name, "reply-to-name");
    //$mail->AddCC("cc-recipient-email", "cc-recipient-name");
    $mail->Subject =  $subject;
    $content =   $message ;
    $mail->MsgHTML($content); 
    if(!$mail->Send()) {
        set_message("Désolé votre message n'a pas pû être envoyé");
        redirect("contact.php");
      var_dump($mail);
    } else {
        set_message("Votre message a été envoyé avec succès");
        redirect("contact.php");
    }


}
}



/****************************BACK END FUNCTIONS************************/


function display_orders(){



$query = query("SELECT * FROM orders");
confirm($query);


while($row = fetch_array($query)) {


$orders = <<<DELIMETER

<tr>
    <td>{$row['order_id']}</td>
    <td>{$row['order_amount']}</td>
    <td>{$row['order_transaction']}</td>
    <td>{$row['order_currency']}</td>
    <td>{$row['order_status']}</td>
    <td><a class="btn btn-danger" href="index.php?delete_order_id={$row['order_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>




DELIMETER;

echo $orders;



    }



}




/************************ Admin Products Page ********************/

function display_image($picture) {

global $upload_directory;

return $upload_directory  . DS . $picture;



}





function get_products_in_admin(){


$query = query(" SELECT * FROM products");
confirm($query);

while($row = fetch_array($query)) {

$category = show_product_category_title($row['product_category_id']);

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER

        <tr>
            <td>{$row['product_id']}</td>
            <td>{$row['product_title']}<br>
        <a href="index.php?edit_product&id={$row['product_id']}"><img style="height: 90px" src='../resource/images/{$row['product_image']}' alt=""></a>
            </td>
            <td>{$category}</td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_quantity']}</td>
             <td><a class="btn btn-danger" href="index.php?delete_product_id={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

DELIMETER;

echo $product;


        }





}


function show_product_category_title($product_category_id){


$category_query = query("SELECT * FROM categories WHERE cat_id = '{$product_category_id}' ");
confirm($category_query);

while($category_row = fetch_array($category_query)) {

return $category_row['cat_title'];

}



}






/***************************Add Products in admin********************/


function add_product() {


if(isset($_POST['publish'])) {


$product_title          = escape_string($_POST['product_title']);
$product_category_id    = escape_string($_POST['product_category_id']);
$product_price          = escape_string($_POST['product_price']);
$product_description    = escape_string($_POST['product_description']);
$short_desc             = escape_string($_POST['short_desc']);
$product_quantity       = escape_string($_POST['product_quantity']);
$product_image          = escape_string($_FILES['file']['name']);
$image_temp_location    = escape_string($_FILES['file']['tmp_name']);

move_uploaded_file($image_temp_location  , UPLOAD_DIRECTORY . DS . $product_image);


$query = query("INSERT INTO products(product_title, product_category_id, product_price, product_description, short_desc, product_quantity, product_image) VALUES('{$product_title}', '{$product_category_id}', '{$product_price}', '{$product_description}', '{$short_desc}', '{$product_quantity}', '{$product_image}')");
$last_id = last_id();
confirm($query);
set_message("New Product with id {$last_id} was Added");
redirect("index.php?products");


        }


}

function show_categories_add_product_page(){


$query = query("SELECT * FROM categories");
confirm($query);

while($row = fetch_array($query)) {


$categories_options = <<<DELIMETER

 <option value="{$row['cat_id']}">{$row['cat_title']}</option>


DELIMETER;

echo $categories_options;

     }



}



/***************************updating product code ***********************/

function update_product() {


if(isset($_POST['update'])) {


$product_title          = escape_string($_POST['product_title']);
$product_category_id    = escape_string($_POST['product_category_id']);
$product_price          = escape_string($_POST['product_price']);
$product_description    = escape_string($_POST['product_description']);
$short_desc             = escape_string($_POST['short_desc']);
$product_quantity       = escape_string($_POST['product_quantity']);
$product_image          = escape_string($_FILES['file']['name']);
$image_temp_location    = escape_string($_FILES['file']['tmp_name']);


if(empty($product_image)) {

$get_pic = query("SELECT product_image FROM products WHERE product_id =" .escape_string($_GET['id']). " ");
confirm($get_pic);

while($pic = fetch_array($get_pic)) {

$product_image = $pic['product_image'];

    }

}



move_uploaded_file($image_temp_location  , UPLOAD_DIRECTORY . DS . $product_image);


$query = "UPDATE products SET ";
$query .= "product_title            = '{$product_title}'        , ";
$query .= "product_category_id      = '{$product_category_id}'  , ";
$query .= "product_price            = '{$product_price}'        , ";
$query .= "product_description      = '{$product_description}'  , ";
$query .= "short_desc               = '{$short_desc}'           , ";
$query .= "product_quantity         = '{$product_quantity}'     , ";
$query .= "product_image            = '{$product_image}'          ";
$query .= "WHERE product_id=" . escape_string($_GET['id']);





$send_update_query = query($query);
confirm($send_update_query);
set_message("Product has been updated");
redirect("index.php?products");


        }


}

/*************************Categories in admin ********************/


function show_categories_in_admin() {


$category_query = query("SELECT * FROM categories");
confirm($category_query);


while($row = fetch_array($category_query)) {

$cat_id = $row['cat_id'];
$cat_title = $row['cat_title'];


$category = <<<DELIMETER


<tr>
    <td>{$cat_id}</td>
    <td>{$cat_title}</td>
    <td><a class="btn btn-danger" href="./index.php?delete_category_id={$row['cat_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>



DELIMETER;

echo $category;



    }



}


function add_category() {

if(isset($_POST['add_category'])) {
$cat_title = escape_string($_POST['cat_title']);

if(empty($cat_title) || $cat_title == " ") {

echo "<p class='bg-danger'>THIS CANNOT BE EMPTY</p>";


} else {


$insert_cat = query("INSERT INTO categories(cat_title) VALUES('{$cat_title}') ");
confirm($insert_cat);
set_message("Category Created");



    }


    }




}

 /************************admin users***********************/



function display_users() {


$category_query = query("SELECT * FROM users");
confirm($category_query);


while($row = fetch_array($category_query)) {

$userid = $row['userid'];
$username = $row['username'];
$nom = $row['nom'];
$password = $row['userpassword'];

$user = <<<DELIMETER


<tr>
    <td>{$userid}</td>
    <td>{$username}</td>
     <td>{$nom}</td>
    <td><a class="btn btn-danger" href="index.php?delete_user_id={$row['userid']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>



DELIMETER;

echo $user;



    }



}


function add_user() {


if(isset($_POST['add_user'])) {


$username   = escape_string($_POST['username']);
$nom      = escape_string($_POST['email']);
$password   = escape_string($_POST['password']);
// $user_photo = escape_string($_FILES['file']['name']);
// $photo_temp = escape_string($_FILES['file']['tmp_name']);


// move_uploaded_file($photo_temp, UPLOAD_DIRECTORY . DS . $user_photo);


$query = query("INSERT INTO users(username,nom,userpassword) VALUES('{$username}','{$nom}','{$password}')");
confirm($query);
set_message("Utilisateur crée!");
redirect("index.php?users");
}
}
function get_reports(){
$query = query(" SELECT * FROM reports");
confirm($query);

while($row = fetch_array($query)) {


$report = <<<DELIMETER

        <tr>
             <td>{$row['report_id']}</td>
            <td>{$row['product_id']}</td>
            <td>{$row['order_id']}</td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_title']}
            <td>{$row['product_quantity']}</td>
            <td><a class="btn btn-danger" href="./index.php?delete_report_id={$row['report_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

DELIMETER;

echo $report;


        }





}


//////// SLIDES ////////

function add_slides(){

    if(isset($_POST['add_slide'])) {


        $slide_title        = escape_string($_POST['slide_title']);
        $slide_image        = $_FILES['image']['name'];
        $slide_image_loc    = $_FILES['image']['tmp_name'];


        if(empty($slide_title) || empty($slide_image)) {

           set_message('Ce champ ne doit pas être vide!');
           redirect("index.php?slides");

        } else {

            move_uploaded_file($slide_image_loc, "../../resource/slideimages/$slide_image");

            $query = query("INSERT INTO slides(slide_title, slide_image) VALUES('{$slide_title}', '{$slide_image}')");
            confirm($query);
            set_message("L'image a été bien ajoutée");
            //redirect("index.php?slides");





        }


    }

}
function get_current_slide(){


}

function get_current_slide_in_admin(){

    $query = query("SELECT * FROM slides ORDER BY slide_id DESC LIMIT 1");
    confirm($query);

    while($row = fetch_array($query)) {

        $slide_image = display_image($row['slide_image']);

        $slide_active_admin = <<<DELIMETER


        
        <img class="img-responsive" src="../../resource/slideimages/{$row['slide_image']}" alt="">
    

DELIMETER;

        echo $slide_active_admin;


    }



}


function get_active_slide(){
    $query = query("SELECT * FROM slides ORDER BY slide_id DESC LIMIT 1");
    confirm($query);



    while($row = fetch_array($query)) {

        $slide_image = display_image($row['slide_image']);

$slide_active = <<<DELIMETER


 <div class="item active">
    <img class="slide-image" src="../resource/slideimages/{$row['slide_image']}" alt="">
</div>


DELIMETER;

        echo $slide_active;


    }
}

function get_slides(){

    $query = query("SELECT * FROM slides");
    confirm($query);

    while($row = fetch_array($query)) {

        $slide_image = display_image($row['slide_image']);

$slides = <<<DELIMETER
 <div class="item">
    <img class="slide-image" src="../resource/slideimages/{$row['slide_image']}" alt="">
</div>
DELIMETER;

        echo $slides;


    }


}
function get_slide_thumbnails(){

    $query = query("SELECT * FROM slides ORDER BY slide_id ASC ");
    confirm($query);

    while($row = fetch_array($query)) {

        $slide_image = display_image($row['slide_image']);

        $slide_thumb_admin = <<<DELIMETER


<div class="col-xs-6 col-md-3 image_container">
    
    <a href="index.php?delete_slide_id={$row['slide_id']}">
        
         <img  class="img-responsive slide_image" src="../../resource/slideimages/{$row['slide_image']}" alt="">


    </a>

    <div class="caption">

    <p>{$row['slide_title']}</p>

    </div>


</div>
DELIMETER;

        echo $slide_thumb_admin;


    }



}