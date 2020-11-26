<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<?php
//
//if(is_the_logged_in_user_owner(156)){
//
//    echo "YES";
//
//} else {
//
//    echo "NO";
//
//}

$result = get_user_and_admin_posts();

while($row = mysqli_fetch_array($result)){

    var_dump($row['post_title']);

}