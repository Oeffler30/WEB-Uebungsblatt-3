<!DOCTYPE html>
<html lang="en">
<?php 
require("stylesheet_daniel.php");
$seitenname = "Kontakt";
require("header.php");
?>
    <body>
        <?php 
        $index = "";
        $grund = "";
        $html = "";
        $css = "";
        $css2 = "";
        $javascript = "";
        $javascript2 = "";
        $jsp = "";
        $php = "";
        $nodejs = "";
        $kontakt = "current";
        require("menu.php");
        ?>
        
        <div class="content-container">
            <h1>Kontaktformular</h1>
            <div class="textbox">
                <form action="savedata.php" method="get">
                    Name:<br><input style="width:20em" name="name" type="text"><br><br>
                    E-mail Adresse:<br><input style="width:20em" name="email" type="text"><br><br>
                    Nachricht:<br><textarea name="nachricht" cols="80" rows="15"></textarea><br><br>
                    <input name="submit" type ="submit" value="abschicken">
                </form>
            </div>
                <?php require("footer.php")?>
        </div>

    </body>
</html>