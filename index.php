<!DOCTYPE html>
<html lang="en">
<?php 
require("stylesheet_daniel.php");
$seitenname = "Startseite";
require("header.php");
?>
    <body>
        <?php 
        $index = "current";
        $grund = "";
        $html = "";
        $css = "";
        $css2 = "";
        $javascript = "";
        $javascript2 = "";
        $jsp = "";
        $php = "";
        $nodejs = "";
        require("menu.php");
        ?>
        
        <div class="content-container">
            <h1>Webbasierte Systeme</h1>


            <div class="textbox">
                <h2>Zuletzt gesehen: <span id="info"></span></h2>
            </div>

            <div class="textbox">
                <pre><code>
<h2>Name:                   Webbasierte Systeme</h2>
<h2>Kürzel:                 WEB</h2>
<h2>Semester:               3</h2>
<h2>Unterrichtssprache:     Deutsch</h2>
<h2>Häufigkeit:             Jedes Semester</h2>
<h2>Modulverantwortlich:    Prof. Thomas Smits</h2>
</code></pre>

                <h2>Studiengänge</h2>
                <ul>
                    <li>Cyber Security (Bachelor)</li>
                    <li>Informatik (Bachelor)</li>
                    <li>Medizinische Informatik (Bachelor)</li>
                    <li>Unternehmens- und Wirtschaftsinformatik (Bachelor)</li>
                </ul>
            </div>




            <div class="textbox">
                <h2>Allgemeine Information zu WEB</h2>
                <pre><code>
<h2>Studienleistung:        Pflichtübung (PU)</h2>
<h2>Prüfungsleistung:       Klausur 90 Minuten (K90)</h2>
</code></pre>

                <h2 style="padding-top: 1em">Voraussetzungen</h2>
                <ul>
                    <li>Einführung in die Informatik (EI)</li>
                    <li>Programmierung 1 (PR1)</li>
                    <li>Programmierung 2 (PR2)</li>
                </ul>


                <h2 style="padding-top: 1em">Inhalte:</h2>
                <ul>
                    <li>Client/Server-Modell</li>
                    <li>XML-Grundlagen (XML als Markup, XML Schema, DTD)</li>
                    <li>HTML/CSS Grundlagen</li>
                    <li>JavaScript, JSON</li>
                    <li>Web Frameworks (z. B. Rails, JSF, Django)</li>
                    <li>Einfache Backend-Integration mit REST</li>
                    <li>Oberflächentests (Selenium)</li>
                </ul>

                <h2 style="padding-top: 1em">Lernziele/Kompetenzen</h2>
                <p>Die Studierenden sind in der Lage:</p>
                <ul>
                    <li>die Anforderungen an eine Webanwendung zu analysieren</li>
                    <li>die Programmierparadigmen von Web-basierten Applikationen verstehen</li>
                    <li>geeignete Webtechnologien für die Umsetzung konkreter Anforderungen auszuwählen</li>
                    <li>Webanwendungen mit den Standardtechnolgien HTML, XML, CSS, JavaScript, Webserver
                        u.ä. zu entwickeln</li>
                    <li>einfache Backends für Webanwendungen zu realisieren und per REST anzubinden</li>
                </ul>

                <h2 style="padding-top: 1em">Semesterwochenstunden</h2>
                <pre><code>
<h2>Vorlesung:      2 SWS</h2>
<h2>Übung:          2 SWS</h2>
_______________________________
<h2 style="padding-top: 1em">Summe:          4 SWS</h2>
</code></pre>   
                <br>
                <h2>Arbeitsaufwand (work load)</h2>
                <pre><code>
<h2>Präsenzstudium:                             30</h2>
<h2>Eigenstudium zur Vor- und Nachbereitung:    90</h2>
<h2>Selbständiges Bearbeiten der Übungen:       30</h2>
____________________________________________________________________
<h2 style="padding-top: 1em">Summe:                                     150</h2>
</code></pre>                 

                <h2 style="padding-top: 1em">Dozentinnen / Dozenten</h2>
                <ul>
                    <li>Prof. Dr. Frank Dopatka</li>
                    <li>Prof. Dr. Michael Gröschel</li>
                    <li>Prof. Dr. Sachar Paulus</li>
                    <li>Prof. Thomas Smits</li>
                    <li>Prof. Dr. Thomas Specht</li>
                </ul>


            </div>






            <div class="textbox">
                <h1>Literatur</h1>
                <ul>
                    <li>Helmut Vonhoegen, Einstieg in XML: Grundlagen, Praxis, Referenz, Rheinwerk Computing,
2015</li>
                    <li>Jürgen Wolf, HTML5 und CSS3, Rheinwerk Computing, 2016</li>
                    <li>Klaus Franz, Handbuch zum Testen von Web-Applikationen, Springer, 2007</li>
                </ul>
            </div>


                <?php require("footer.php")?>

                </body>
            </html>
