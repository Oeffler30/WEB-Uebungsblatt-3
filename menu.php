<!DOCTYPE html>
<html>
<script>
            document.body.className = document.body.className + " js_enabled";
        </script>

        <div id="header">
            <!-- Cookie Banner -->
            <div id="cookie-message">
                <p>
                    Diese Webseite benutzt einen Cookie um dir eine individualisierte Webseite präsentieren zu können.
                    <a href="datenschutz.html" title="View our Cookie Policy">Finde mehr heraus über Cookies und Datenschutz</a>
                </p>
                <form>
                    <input id="knopf" type="button" value="Nicht Einverstanden" onclick="hide()">
                    <input id="knopf" type="button" value="Einverstanden" onclick="acceptCookie()">
                </form>
            </div>
            <div id="header-image"></div>
            <div id="navbar">
                <div id="nav">
                    <ul>
                        <li id=<?php echo($index) ?>><a href="index.php">Startseite</a></li>
                        <li id=<?php echo($grund) ?>><a href="grundlagen.php">Grundlagen</a></li>
                        <li id=<?php echo($html) ?>><a href="html5.php">HTML</a></li>
                        <li id=<?php echo($css) ?>><a href="css3.php">CSS</a></li>
                        <li id=<?php echo($css2) ?>><a href="css3-2.php">CSS 2</a></li>
                        <li id=<?php echo($javascript) ?>><a href="javascript.php">Javascript</a></li>
                        <li id=<?php echo($javascript2) ?>><a href="javascript2.php">Javascript (2)</a></li>
                        <li id=<?php echo($jsp) ?>><a href="jsp_servlets_jaxb.php">JSP, Servlets, JAXB</a></li>
                        <li id=<?php echo($php) ?>><a href="php.php">PHP</a></li>
                        <li id=<?php echo($nodejs) ?>><a href="nodejs.php">NodeJS</a></li>
                    </ul>
                </div>
                <a class="icon">
                    <hr>
                    <hr>
                    <hr>
                </a>
            </div>
        </div>
</html>