<?php


function testMassage($condation, $message)
{
    if ($condation) {
        echo "<div style='margin-top:80px' class='alert  mx-auto w-50 alert-success'>
    $message Success
    </div>";
    } else {
        echo "<div style='margin-top:80px' class='alert  mx-auto w-50 alert-danger'>
        $message Failed
        </div>";
    }
}


function go($path)
{
    echo "<script>
    window.location.replace('/hima/$path');
        </script>";
}


function auth()
{
    if (isset($_SESSION['admin'])) {
        // go("pages-login.php");
    } else {
        go("pages-login.php");
    }
}

auth();



function authrization($authNumber1=0 ,$authNumber2 =0 ,$authNumber3=0  ){
    if($_SESSION['role'] == $authNumber1 || $_SESSION['role'] == $authNumber2 
    || $_SESSION['role'] == $authNumber3
    ){

    }else{
        go('/pages-error-404.php');
    }
}