<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <?php
        //Include the class
        require_once "BootstrapGenerator.php";

        //Display the <link> and <source> tags
        echo BootstrapGenerator::setSources("bootstrap-3.3.7-dist/", "css/bootstrap.css",
            "js/jquery-3.3.1.js", "js/bootstrap.js");
    ?>
</head>
<body>

<?php

    //Creates a navbar button
    $button = BootstrapGenerator::genNavbarElement("Submit", "button", "btn-primary", null, null);

    //Creates a custom navbar brand
    $brand = BootstrapGenerator::genNavbarElement("My Brand", "brand", null, null, null);

    //Concatenate the elements in order to make one
    $formContent = $brand.$button;

    //Generates the form group
    $formGroup = BootstrapGenerator::genNavbarElement($formContent, "form-group", null, null, null);

    //Generates the nav form
    $form = BootstrapGenerator::genNavbarElement($formGroup, "form", null, null, "method='post'");

    //Generates the nav bar
    $nav = BootstrapGenerator::genNavbar($form, true, null, null, null);

    //Generates the jumbotron
    $jumbotron =  BootstrapGenerator::genJumbotron($nav."<br><h1>Hello, world!</h1>",
                    null, null, null);

    //Generates the container
    $container =  BootstrapGenerator::genContainer($jumbotron, true, null, null, null);

    //Displays the whole thing !
    echo $container;
?>

</body>
</html>