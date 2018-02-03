<?php
/**
 * User: tonypiton
 *
 * Description : Bootstrap HTML elements generator
 */

class BootstrapGenerator
{
    //Set bootstrap sources
    public static function setSources($dir)
    {
        //Set css files
        $cssBootstrap = $dir."/css/bootstrap.css";
        $cssBootstrapTheme = $dir."/css/bootstrap-theme.css";

        //Set js files
        $jsBootstrap = $dir."/js/bootstrap.js";
        $jsJQuery = $dir."/js/jquery-3.3.1.js";

        //Set HTML
        $sources = "<link rel='stylesheet' href='".$cssBootstrap."'>
                    <link rel='stylesheet' href='".$cssBootstrapTheme."'>
                    <script src='".$jsJQuery."'></script>
                    <script src='".$jsBootstrap."'></script>";

        //Retrun HTML with sources
        return $sources;
    }


    //Generate Jumbotron with content
    public static function genJumbotron($content, $class, $id, $attributes)
    {
        //Set HTML Jumbotron with attributes
        $jumbo = "<div class='jumbotron ".$class."' id='".$id."' $attributes>".$content."</div>";

        //Return HTML Jumbotron
        return $jumbo;
    }


    //Generate Container
    public static function genContainer($content, $fluid, $class, $id, $attributes)
    {
        //Prepare Container variable
        $container = null;

        //If fluid, add fluid to class
        if($fluid)
            $container = "<div class='container-fluid ".$class."' id='".$id."' $attributes>".$content."</div>";
        else
            $container = "<div class='container ".$class."' id='".$id."'>".$content."</div>";

        //Return HTML Container
        return $container;
    }


    //Generate Navbar
    public static function genNavbar($content, $inverse, $class, $id, $attributes)
    {
        //Prepare Navbar variable
        $navbar = null;

        //If inverse, add inverse to class
        if($inverse)
            $navbar = "<nav class='navbar navbar-inverse ".$class."' id='".$id."' $attributes>".$content."</nav>";
        else
            $navbar = "<nav class='navbar navbar-default ".$class."' $id='".$id."' $attributes>".$content."</nav>";

        //Return HTML Navbar
        return $navbar;
    }


    //Generate Navbar elements
    public static function genNavbarElement($content, $type, $class, $id, $attributes)
    {
        //Prepare Navbar element variable
        $navbarElement = null;

        //Select element type
        switch ($type)
        {
            case 'brand':
                $navbarElement = "<a class='navbar-brand ".$class."' id='".$id."' $attributes>".$content."</a>";
                break;
            case 'form':
                $navbarElement = "<form class='navbar-form ".$class."' id='".$id."' $attributes>".$content."</form>";
                break;
            case 'form-group':
                $navbarElement = "<div class='form-group ".$class."' id='".$id."' $attributes>".$content."</div>";
                break;
            case 'button':
                $navbarElement = "<button class='btn navbar-btn ".$class."' id='".$id."' $attributes>".$content."</button>";
                break;
            case 'text':
                $navbarElement = "<p class='navbar-text ".$class."' id='".$id."' $attributes>".$content."</p>";
                break;
        }

        //Return HTML navbar element
        return $navbarElement;
    }


    //Generate Row div
    public static function genRow($content, $class, $id, $attributes)
    {
        //Set HTML div
        $row = "<div class='row ".$class."' id='".$id."' $attributes>".$content."</div>";

        //Return HTML row div
        return $row;
    }
}