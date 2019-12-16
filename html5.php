<!DOCTYPE html>
<html lang="en">
<?php 
require("stylesheet_daniel.php");
$seitenname = "HTML";
require("header.php");
?>
    <body>
        <?php 
        $index = "";
        $grund = "";
        $html = "current";
        $css = "";
        $css2 = "";
        $javascript = "";
        $javascript2 = "";
        $jsp = "";
        $php = "";
        $nodejs = "";
        require("menu.php");
        ?>
<head>
        <style>
            .inhaltverzeichnis {text-decoration: none;}

            p { margin-top: 1em; margin-bottom: 1em;}
            .codebox {
                color: #F5F5F5;
                padding:10px;
                padding-left: 25px;
                background-color: #282828;
                font-style: italic;
            }
            .neben {
                color: #F5F5F5;
                float: left;
                padding: 10px;
                background: #282828;
            }
            .abbildung {
                font-style: italic;
                color: #F5F5F5;
                padding:25px;
                background-color: #282828;
				text-align:left;
            }
        </style>
</head>
        <div class="content-container">


            <div class="textbox">
                <h1 style="font-size: 2.5em" id="verzeichnis">HTML - Die Sprache des Internet</h1>
                <h1>Inhaltsverzeichnis</h1>
                <div class="content">
                    <a class="inhaltverzeichnis" href=#kapitel1>1&emsp;Einführung</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel2>2&emsp;Was ist HTML</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel21>&emsp;2.1&emsp;Aufbau eines HTML Befehl</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel22>&emsp;2.2&emsp;Aufbau eines HTML Dokument</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel221>&emsp;&emsp;2.2.1&emsp;Der HTML-Tag</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel222>&emsp;&emsp;2.2.2&emsp;Der HEAD-Block</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel223>&emsp;&emsp;2.2.3&emsp;Der BODY-Block</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel23>&emsp;2.3&emsp;Anlegen eines HTML Dokument</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel2z>&emsp;Zusammenfassung</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel2a>&emsp;Aufgaben zur Selbstüberprüfung</a><br>

                    <a class="inhaltverzeichnis" href=#kapitel3>3&emsp;Grundlegende HTML Tag im HEAD Block einer HTML Datei</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel31>&emsp;3.1&emsp;Der title Tag – Der Name einer Webseite</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel32>&emsp;3.2&emsp;Der meta Tag – Unsichtbare Daten für den Webbrowser/die Suchmaschine</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel321>&emsp;&emsp;3.2.1&emsp;Charset – Die Zeichenkodierung einer Webseite</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel322>&emsp;&emsp;3.2.2&emsp;Name/Content – Wertepaare im Meta Tag</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel33>&emsp;3.3&emsp;refresh – Seite neu laden oder Weiterleiten</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel34>&emsp;3.4&emsp;set-cookie – Cookie ohne JavaScript</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel35>&emsp;3.5&emsp;Der link Tag – zur Einbindung externe Dateien</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel36>&emsp;3.6&emsp;Der style Tag – Globale CSS Eigenschaften</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel1Zsm>&emsp;Zusammenfassung</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel1Zsm>&emsp;Aufgaben zur Selbstüberprüfung</a><br>

                    <a class="inhaltverzeichnis" href=#kapitel4>4&emsp;HTML Tag zur Textformatierung und Strukturierung</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel41>&emsp;4.1&emsp;Grundlegende HTML Tags</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel42>&emsp;4.2&emsp;Textformatierung in HTML</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel421>&emsp;&emsp;4.2.1&emsp;Heading Tag – Überschriften</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel422>&emsp;&emsp;4.2.2&emsp;Paragraph Tag – Textabsätze und Break Tag – Zeilenumbruch</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel423>&emsp;&emsp;4.2.3&emsp;Horizontal Ruler Tag – Thematische Brüche</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel424>&emsp;&emsp;4.2.4&emsp;Weitere HTML Tags zur Textformatierung</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel43>&emsp;4.3&emsp;Anpassung von Inline-Elemente mittels span Tag</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel44>&emsp;4.4&emsp;Anchor Tag - Verweise</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel441>&emsp;&emsp;4.4.1&emsp;Aufbau eines Verweises</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel442>&emsp;&emsp;4.4.2&emsp;Verweisanker anlegen</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel45>&emsp;4.5&emsp;Image Tag - Bilder</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel46>&emsp;4.6&emsp;Listen</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel461>&emsp;&emsp;4.6.1&emsp;Ordered List – Geordnete Liste</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel462>&emsp;&emsp;4.6.2&emsp;Unordnered List – Ungeordnete Liste</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel463>&emsp;&emsp;4.6.3&emsp;Description List – Beschreibungsliste</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel47>&emsp;4.7&emsp;Tabelle</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel48>&emsp;4.8&emsp;Division Tag - Bereich</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel4z>&emsp;Zusammenfassung</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel4a>&emsp;Aufgaben zur Selbstüberprüfung</a><br>  

                    <a class="inhaltverzeichnis" href=#kapitel5>5&emsp;HTML5</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel51>&emsp;5.1&emsp;Naiver Video- und Audio Wiedergabe</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel52>&emsp;5.2&emsp;Inhaltabhängige Gliederungselementen</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel53>&emsp;5.3&emsp;Formular Elemente</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel54>&emsp;5.4&emsp;Canvas Element</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel55>&emsp;5.5&emsp;Offline Datenspeicherung</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel56>&emsp;5.6&emsp;Standortabfragen</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel5z>&emsp;Zusammenfassung</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel5a>&emsp;Aufgaben zur Selbstüberprüfung</a><br>  

                    <a class="inhaltverzeichnis" href=#kapitell>L&ouml;sungen zur gestellten Aufgaben</a><br>
                    <a class="inhaltverzeichnis" href=#kapitelliteratur>Literaturverzeichnis</a><br>
                    <a class="inhaltverzeichnis" href=#kapiteltool>Verwendete Tools</a><br>
                </div>
            </div>


            <div class="textbox" id="kapitel1">
                <h1>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Einf&uuml;hrung</h1>
                <p>HTML ist die Abk&uuml;rzung von Hypertext Markup Language, eine Auszeichnungssprache, die die Grundlage f&uuml;r das sichtbare World Wide Web liefert. Fast alle Webseite werden mittels HTML dargestellt, von Social Media Plattformen wie Facebook bis zu Videoplattformen wie YouTube, dabei ist HTML urspr&uuml;nglich von Sir Tim Berners-Lee dazu entwickelt worden um wissenschaftliche Informationen strukturiert darzustellen und zu teilen.</p>
                <p>Die Anf&auml;nge von HTML geht auf das Jahr 1989 zur&uuml;ck, wo die erste HTML Version von Tim Berners-Lee am CERN in Genf vorgestellt wurde. Der erste Webbrowser Prototyp ''NeXT'' stammte ebenfalls von Tim Berners-Lee und wurde 1990 ver&ouml;ffentlich. vgl. [DRJLIAMK98, Kapitel 2]</p>
                <p>Am 28.10.2018 ver&ouml;ffentlichte das World Wide Web Consortium (W3C) die aktuellste Version von HTML, HTML5. Dieses l&ouml;ste HTML4 sowie XHTML ab.</p>
                <p>In dieser Ausarbeitung werden wir uns mit den Grundlagen von HTML sowie dessen Anwendung zur Erstellung einer einfachen Webseite besch&auml;ftigen. Zudem werden wir uns einige wichtige Neuerungen betrachten die mit HTML5 eingef&uuml;hrt wurde.</p>
            </div>


            <div class="textbox" id="kapitel2">
                <h1>2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Was ist HTML</h1>
                <p>Dieses Kapitel besch&auml;ftigt sich mit den Grundlagen von HTML Dokumenten. Wir lernen hier was HTML ist sowie die Grundlegende Struktur jeder HTML Datei.</p>
                <p>Sie sollten nach dem Durcharbeiten dieses Kapitel in der Lage sein eine einfache HTML Datei anzulegen.</p>
                <p>HTML steht wie bereits angesprochen f&uuml;r Hypertext Markup Langue und ist eine Auszeichnungssprache.</p>
                <p>Standard HTML Dateien haben die Dateiendung .htm oder .html, es gibt jedoch auch einigen Ausnahmen von dieser Konvention. HTML Dateien die PHP Abschnitte haben zum Beispiel die Endung .php</p>
                <p>Wichtig sind diese Endungen f&uuml;r den Server, der anhand der Endungen den Webbrowser mitteilen kann, um welches MINE-Type (Multipurpose Internet Mail Extension) es sich bei der &uuml;bermittelten Datei handelt. Der Webbrowser kann dann anhand des &uuml;bermittelten MINE-Type die &uuml;bermittelte HTML Datei korrekt verarbeiten.</p>
                <p>&bdquo;In Dokumenten werden in der Regel gleichartige Elemente wie zum Beispiel Titel, &Uuml;berschriften, Abs&auml;tze, Listen, Abbildungen, Tabellen und Verzeichnisse verwendet. Diese Elemente sollen konsequent &uuml;ber mehrere Dokumente hinweg in einheitlicher Form dargestellt werden.&ldquo; [FE10]</p>
                <p>Die HTML Datei selbst enth&auml;lt den Inhalt sowie die Struktur eines Dokumentes, die Darstellung des Inhaltes kann zwar auch innerhalb der HTML Datei selber realisiert werden, h&auml;ufiger wird es aber in einer separaten CSS-Datei ausgelagert.</p>
                <p>Damit gibt es eine Trennung zwischen dem Inhalt selbst und die Darstellung, dies ist notwendig da bei gr&ouml;&szlig;eren Webseiten mehrere HTML Dateien auf dieselbe CSS Datei f&uuml;r die Darstellung zur&uuml;ckgreifen kann. Das Design der Webseite kann somit auch zentral ge&auml;ndert und angepasst werden, dies ist nicht m&ouml;glich, wenn jeder HTML Datei selber f&uuml;r die Darstellung zust&auml;ndig ist.</p>
                <p>In einer Webseite existieren neben der HTML und CSS Dokumentes auch noch weitere wichtige Dokumente, die f&uuml;r die Darstellung einer modernen Webseite unverzichtbar sind. Ein solches Dokument ist das Dokument, das die Skripten der Webseite beinhaltet, sofern diese nicht in der HTML Datei selbst vorhanden ist. Die Skripten, meist als JavaScript Dateien vorhanden, sind f&uuml;r die Interaktion mit dem Nutzer der Webseite zust&auml;ndig.</p>
                <p>Es gibt auch dynamischen Webseiten die mittels PHP, kurz f&uuml;r Hypertext Preprocessor, dargestellt werden. Unteranwendung einer Datenbank, zum Beispiel mySQL, ist es dem Server damit m&ouml;glich je nach Aufrufer eine individuelle Webseite zu erstellen.</p>
                <p>Wichtig ist hierbei jedoch, auch wenn es bei Verwendung von PHP keine eigentlich HTML-Datei mit einem Quellcode auf dem Server vorhanden ist, der Server muss dennoch eine dividuelle HTML Datei generieren und es dem Nutzer zusenden, ganz auf HTML kann man also auch hier nicht verzichten.</p>
                <p>Diese sind jedoch nicht Gegenstand diese Ausarbeitung und werden daher nicht n&auml;her betrachtet.</p>

                <div class="textbox" id="kapitel21">
                    <h2>2.1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Aufbau eines HTML Befehl</h2>
                    <p>HTML spezifiziert verschiedene Befehle, die von Webbrowser interpretiert werden kann. Diese Befehle werden auch HTML-Tags genannt und dienen dazu die Struktur des &uuml;berlieferten Dokuments zu formatieren.</p>
                    <p>HMTL Tag beginnen stets mit einen ''&lt;'' und enden mit einen ''&gt;'', zwischen den beiden Zeichen steht der auszuf&uuml;hrende Befehl. Die meisten HTML Befehlen m&uuml;ssen durch einen abschlie&szlig;enden HTML-End-Tag abgeschlossen werden, diese beginnt mit ''&lt;/&ldquo; und endet mit ''&gt;''.</p>
                    <p>Es existieren jedoch auch HTML-Tag die nicht abgeschlossen werden m&uuml;ssen wie z.B. &lt;br&gt;, &lt;hr&gt;, &lt;img&gt; usw. Diese HTML-Tag werden auch leere Elemente genannt, in Englischen Empty HTML Elements, da sie keine Inhalte beinhalten.</p>
                </div>

                <div class="textbox" id="kapitel22">
                    <h2>2.2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Aufbau eines HTML Dokument</h2>

                    <div class="abbildung">
                        <pre><code>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
         &lt;title&gt;Einfache HTML Seite&lt;/title&gt;
    &lt;/head&gt;

    &lt;body&gt;
        &lt;p&gt;Hier steht was auf der Seite als Text&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;                  
</code></pre>
                        <p><img class="bild" src="html/Abb.2.einfacheHTMLSeite.jpg" alt="Eine einfache HTML Seite"><br>Abbildung 1: Eine einfache HTML Seite und dessen Quellcode</p>
                    </div>


                    <p>Die Abb. 1 zeigt wie der Code einer einfachen HTML Datei aussehen kann. Das Dokument beginnt stets mit &lt;!DOCTYPE html&gt;, dieser teilt den verwendeten Webbrowser mit was f&uuml;r Befehle er zu verarbeiten hat.</p>
                    <p>DOCTYPE legt hier die Document Type Definition (DTD) das Dokument fest, diese definiert die Grammatik sowie der Syntax des Dokuments. Seit HTML5 wurde diese vereinheitlich zu ''html''.</p>
                    <p>Zuvor musste man f&uuml;r beispielweise HTML 4.0.1 Strict den DOCTYPE Tag wie folgt definieren:<br /> &lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"&gt;</p>
                    <p>Der Tag DOCTYPE ist hierbei jedoch kein HTML Tag, diese muss daher auch nicht geschlossen werden.</p>

                    <h3 id="kapitel221">2.2.1&nbsp;&nbsp; Der HTML-Tag &lt;html&gt;</h3>
                    <p>Nach der DOCTYPE Deklaration wird der eigentlich HTML Code angegeben. Diese beginnt mit dem Tag &lt;html&gt;und endet mit dem Tag &lt;/html&gt;. Diese HTML Tag umschlie&szlig;en zwei Bl&ouml;cke des HTML Dokumentes.</p>

                    <h3 id="kapitel222">2.2.2&nbsp;&nbsp; Der HEAD-Block &lt;head&gt;</h3>
                    <p>Im HEAD Block werden Metainformationen &uuml;ber die Webseite gespeichert, diese Informationen geh&ouml;ren nicht zur eigentlichen Webseite und dienen lediglich dem Zweck Informationen anzugeben, die f&uuml;r den Betrachter der Webseite nicht direkt einzusehen sind.</p>
                    <p>Der Tag &lt;title&gt; bildet hier die Ausnahme, da diese in den meisten Webbrowser angezeigt werden. Dieser ist auch der einzige Tag, der verpflichtend in einen HTML Dokument vorkommen muss.</p>
                    <p>Im HEAD Block k&ouml;nnen auch Informationen f&uuml;r Suchmaschinen oder die verwendete Zeichenkodierung angegeben werden. H&auml;ufig wird auch die verwendete CSS-Datei f&uuml;r die Darstellung der Webseite im HEAD Block eines HTML Dokuments verlinkt.</p>

                    <h3 id="kapitel223">2.2.3&nbsp;&nbsp; Der BODY-Block &lt;body&gt;</h3>
                    <p>Im BODY Block wird der eigentliche Inhalt der Webseite sowie dessen Strukturierung gespeichert. Alles was in diesem Bereich erscheint, wird durch den Webbrowser gerendert und f&uuml;r uns sichtbar dargestellt.</p>
                </div>

                <div class="textbox" id="kapitel23">
                    <h2>2.3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Anlegen eines HTML Dokument</h2>
                    <p>Da HTML eine Auszeichnungssprache ist, ist die Erstellung eines HTML Dokument durch jeden Text-Editor, unter Windows kann man hier auch einfach den Standard Editor von Windows verwenden.</p>
                    <p>Zum Anlegen eines einfachen HTML Dokument kann der Quellcode in der Abb. 1 kopiert und in den Editor von Windows hinzugef&uuml;gt werden. Anschlie&szlig;end muss man noch die Datei als allgemeine Datei mit der Endung .htm oder .html speichern, die neu angelegte Datei kann von einem Webbrowser ge&ouml;ffnet und interpretiert werden.</p>
                    <p>Durch diese Einfachheit Webseite anlegen zu k&ouml;nnen, hat sich das HTML Format in den fr&uuml;hen Internet Zeiten als Standard im World Wide Web durchgesetzt.</p>
                    <p>Nat&uuml;rlich gibt es auch spezielle Tool f&uuml;r die Entwicklung einer Webseite, durch fr&uuml;hzeitige Erkennung von Syntaxfehler, automatisches hinzuf&uuml;gen von End-Tag oder durch Anzeigen von Verschachtelung-Ebenen erm&ouml;glich ein solches Tool umfangreichere HTML Dokumente schneller zu durchblicken.</p>
                    <p>Ein sehr empfehlenswertes Programm ist hier Brackets von der Firma Adobe, dieses Tool bietet unter andere eine Livevorschau der Webseite noch w&auml;hrend der Entwicklung des HTML Dokument, dies erm&ouml;glich es dem Entwickler seine sp&auml;tere Webseite noch w&auml;hrend der Entwicklungsphase zu betrachten.</p>
                </div>

                <h2 id="kapitel2z">Zusammenfassung</h2>
                <p>In diesem Kapitel haben wir den Grundlegende Aufbau eines HTML Dokument angesehen sowie wie man eine einfache HTML Datei anlegen kann. Hier haben wir definiert das HTML eine Auszeichnungssprache ist, die dazu verwendet werden kann um Inhalte Struktur zu verleihen. E</p>
                <p>in HTML Dokument besteht aus einen HEAD sowie ein BODY Block. Im HEAD Block werden Metainformationen &uuml;ber das Dokument gespeichert und im BODY Block wird der eigentliche Inhalt einer Webseite und dessen Struktur gespeichert.</p>

                <h2 id="kapitel2a">Aufgaben zur Selbst&uuml;berpr&uuml;fung</h2>
                <p>2.1 elche Verwendung hat der &lt;!DOCTYPE&gt; Tag am Anfang einer HTML Datei?</p>
                <p>2.2 Geben Sie einen m&ouml;glich kurzen Quellcode zu einer HTML Seite an, die nur die HTML Konventionen erf&uuml;llen muss!</p>
                <p>2.3 Antworten Sie kurz warum HTML keine Programmiersprache ist!</p>
            </div>

            <div class="textbox" id="kapitel3">
                <h1><br clear="ALL" /> 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Grundlegende HTML Tag im HEAD Block einer HTML Datei</h1>
                <p>In diesem Kapitel betrachten wir HTML Tags die im HEAD Block einer HTML Datei hinterlegt sind, diese Tags gibt Informationen zu der Webseite an die f&uuml;r den Nutzer selbst meist nicht von Bedeutung ist, da diese Informationen meist durch den Webbrowser nicht angezeigt werden, mit Ausnahme des Titel der Webseite.</p>


                <h2><br clear="ALL" /> 3.1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Der &lt;title&gt; Tag &ndash; Der Name einer Webseite</h2>
                <div class="textbox" id="kapitel31">  
                    <div class="abbildung">
                        <p><img class="bild" src="html/Abb.1.einfacheHTMLSeite.title.jpg" alt="Titel einer Webseite"><br>Abbildung 2: Den Titel einer Webseite im Browserkopf (Tab)</p>
                    </div>  
                    <p>Der &lt;title&gt;&lt;/title&gt; gibt der Name der Webseite an, die Aufgabe dieses HTML Tag ist es der Name der Seite anzugeben, wenn der Browser die Webseite aufruft, den Name der Webseite wird hierbei im Browser Kopf dargestellt.</p>
                    <p>Wenn Sie eine Webseite als Favorit speichern m&ouml;chte, ist der Name der im &lt;title&gt;&lt;/title&gt; enthalten ist, auch als Standard Name vorgeschlagen.</p>
                    <p>Eine wesentliche Aufgabe des &lt;title&gt;&lt;/title&gt; Tag ist es auch f&uuml;r Suchmaschinen wie Google den Titel eine Seite anzuzeigen, dieser Titel wird dann meisten auch als Titel der Webseite in den Suchergebnissen zu den betroffenen Seiten angezeigt.</p>
                    <div class="abbildung">
                        <p><img class="bild" src="html/Abb.3.titleDop.jpg" alt="Titel der Seite https://www.informatik-aktuell.de/autoren-cv/prof-dr-frank-dopatka.html"><img class="bild" src="html/Abb.3.titleInGoogle.jpg" alt="Titel der Seite https://www.informatik-aktuell.de/autoren-cv/prof-dr-frank-dopatka.html in Google"><br>Abbildung 3: Die Webseite https://www.informatik-aktuell.de/autoren-cv/prof-dr-frank-dopatka.html
                            Mit dem Titel ''Prof. Dr. Frank Dopatka | Informatik Aktuell''
                            und dessen Darstellung in der Suchmaschine Google
                        </p>
                    </div>  
                </div>

                <div class="textbox" id="kapitel32">
                    <h2>3.2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Der &lt;meta&gt; Tag &ndash; Unsichtbare Daten f&uuml;r den Webbrowser/die Suchmaschine</h2>
                    <p>Der Metainformationen sind Daten &uuml;ber Daten, die Informationen, die im leeren HTML Meta-Tag enthalten sind beschreibt das aktuelle HTML Dokument. Diese Informationen werden selber nicht auf der Webseite angezeigt, Sie sind aber f&uuml;r den Webbrowser oder Suchmaschinen lesbar. Die im Meta-Tag enthaltenen Informationen beschreiben oft die Sprache, den Autor oder die letzte &Auml;nderung einer Webseite.</p>
                    <p>Wir betrachten hier einige wichtige Meta-Tag eines HTML Dokumentes.</p>
                    <div class="textbox" id="kapitel321">
                        <h3>3.2.1&nbsp;&nbsp; Charset &ndash; Die Zeichenkodierung einer Webseite</h3>
                        <p>Die Angabe der Zeichenkodierung mit zum Beispiel &lt;meta charset= ''UTF-8'' /&gt; stellt gibt den Webbrowser die Anweisung die Seite in UTF-8 Zeichen zu kodieren. Dies ist notwendig, wenn der verwendete Server, auf dem die Webseite l&auml;uft standardm&auml;&szlig;ig mit einer anderer Zeichenkodierung arbeitet. Hiermit stellt man sicher das die Darstellung der Webseite in allen Bedingungen in richtigem Format erfolgt.</p>

                        <h3 id="kapitel322">3.2.2&nbsp;&nbsp; Name/Content &ndash; Wertepaare im Meta Tag</h3>
                        <p>Der Name/Content Tag im Meta-Tag ist ein Wertepaar, wo bei ersteres der Name angibt und letzteres den Inhalt. Diese Informationen legen immer als Paar vor und dienen meisten dazu Suchmaschinen anzusprechen. Hier k&ouml;nnen n&auml;here Informationen zu einer Webseite hinterlegt werden wie, Sprache, Auto usw.</p>


                        <div class="abbildung">
                            <pre><code>
&lt;meta name=&quot;Beschreibung&quot; content=&quot;Wert&quot;&gt;

&lt;meta name=&quot;content-language&quot; content=&quot;de&quot;&gt;
- legt die Sprache des Inhalts auf Deutsch fest

&lt;meta name=&quot;author&quot; content=&quot;Phan Hoang Minh&quot;&gt;
- legt der Name des Autors als Phan Hoang Minh fest

&lt;meta name=&quot;keywords&quot; content=&quot;Web, html&quot;&gt;
- definiert Wörter, unter der die Seite über eine Suchmaschine zu finden ist               
</code></pre><p>Abbildung 4: Code Beispiele zu dem Namen/Content Meta Tag</p>
                        </div>                    




                    </div>
                </div>

                <div class="textbox" id="kapitel33">
                    <h2>3.3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; refresh &ndash; Seite neu laden oder Weiterleiten</h2>
                    <p>Mit dem Meta Tag &lt;meta http-equiv=''refresh'' content=''10;url=https://www.google.de/''&gt; kann eine automatische Weiterleitung auf die angegebene URL nach 10 Sekunden erfolgen. Wenn man auf die Angabe der URL verzichtet wird die Webseite automatisch neugeladen nach 10 Sekunden.</p>
                </div>

                <div class="textbox" id="kapitel34">
                    <h2>3.4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; set-cookie &ndash; Cookie ohne JavaScript</h2>
                    <p>Es ist m&ouml;glich Cookie zu setzen ganz ohne JavaScript anwenden zu m&uuml;ssen.</p>
                    <p>Der Beispiel Code daf&uuml;r seht wie folgt aus:<br /> &lt;meta http-equiv="set-cookie" content="Name=Hoang Minh; expires=Thursday, 05-December-19"&gt;</p>
                    <p>Das Verwalten von Cookies wird dennoch meisten von JavaScript &uuml;bernommen, da diese flexiblere Einsatzm&ouml;glichkeiten f&uuml;r Cookies bieten.</p>
                </div>

                <div class="textbox" id="kapitel35">
                    <h2>3.5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Der &lt;link&gt; Tag &ndash; zur Einbindung externe Dateien</h2>
                    <p>Der leere HTML &lt;link&gt; Tag erzeugt einen Link, der das aktuelle HTML Dokument mit einer externen Datei verkn&uuml;pft. Hiermit k&ouml;nnen beispielweise externe CSS und JavaScript Dateien in das aktuellen HTML Dokument eingebunden und verwendet werden.</p>
                    <p>Ein Beispiel wie es verwendet wird, wird in dem Code Beispiel in der Abb.3.6.1 gezeigt. Es ist Konvention das die CSS Datei m&ouml;glich fr&uuml;h geladen werden sollte, daher steht der &lt;link&gt; Tag mit der externe CSS Datei normalerweise am Anfang des Header Block.</p>
                    <p>Nat&uuml;rlich kann CSS Dateien auch am Ende des BODY Block eingebunden werden, dies wird h&auml;ufiger verwendet um das Stylesheet f&uuml;r den Drucker zu laden, damit diese das Aufbauen der Seite nicht unn&ouml;tiger weise verlangsamt.</p>
                </div>

                <div class="textbox" id="kapitel36">
                    <h2>3.6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Der &lt;style&gt; Tag &ndash; Globale CSS Eigenschaften</h2>
                    <p>Innerhalb des &lt;style&gt;&lt;/style&gt; Tag kann globale CSS Eigenschaften f&uuml;r die Darstellung des HTML Dokument festgelegt werden. Diese hat eine h&ouml;here Priorit&auml;t-Stufe als extern eingebundenen CSS Dateien, daher k&ouml;nnen hier Darstellungen spezifisch f&uuml;r diese HTML Datei festgelegt werden, die von den Darstellungen in der eingebundenen CSS Dateien abweichen.</p>
                    <p>Mit Hilfe des folgenden Codes k&ouml;nnen alle Textbl&ouml;cke blau eingef&auml;rbt werden, auch wenn diese in einer externe CSS Datei mit gr&uuml;n hinterlegt ist.</p>
                    <p>Wichtig ist, das lokale CSS Formatierung eine noch h&ouml;here Priorit&auml;t-Stufe bei der Darstellung besitzen als Globale CSS Definitionen, in dem genanntes Beispiel in der Abb. 5 wird der Text "Ich bin rot" in roter Schrift dargestellt, obwohl Texte in der Globale Style Definition als blau definiert ist.</p>





                    <div class="abbildung">
                        <pre><code>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;stylesheet_TEXTSCHRIFT_green.css&quot; type=&quot;text/css&quot;&gt;
    &lt;style&gt; 
        p { color: blue} 
    &lt;/style&gt;
    &lt;/head&gt;

    &lt;body&gt;
        &lt;p&gt;Ich bin blau&lt;/p&gt;
        &lt;p style=&quot;color:red;&quot;&gt;Ich bin rot&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt; 


Code in externe stylesheet_TEXTSCHRIFT_green.css Datei:
p {
    color: green;
}
</code></pre><p><img class="bild" src="html/Abb.5.style.jpg" alt="Darstellung eines HTML Code in Webbrowser, wo die eingebundene CSS Datei überschrieben wird"><br>Abbildung 5: Darstellung eines HTML Code in Webbrowser, wo die eingebundene CSS Datei überschrieben wird</p>
                    </div>              
                </div>


                <h2 id="kapitel3z">Zusammenfassung</h2>
                <p>In diesem Kapitel haben wir uns angesehen wie man Metainformationen im HEAD Block eines HTML Dokument speichern kann. Zus&auml;tzlich haben wir uns angesehen wie CSS-Styleguide im Head Block eines HTML Dokument angelegt werden k&ouml;nnen, sowie die M&ouml;glichkeit des Einbindens von externen CSS und JavaScript Dateien.</p>

                <h2 id="kapitel3a">Aufgaben zur Selbst&uuml;berpr&uuml;fung</h2>
                <p>3.1 Geben Sie eine weitere M&ouml;glichkeit an dem Meta Tag &lt;meta http-equiv=''refresh''&gt; zu verwenden au&szlig;er um die Seite neuzuladen!</p>
                <p>3.2 Geben Sie an, welche Informationen sinnvollerweise in HEAD-Block eines HTML Dokument gespeichert werden sollte!</p>
                <p>3.3 Begr&uuml;nden Sie warum es sinnvoll ist eine externe CSS Datei f&uuml;r die Formatierung einer Webseite zu benutzen!</p>                     
            </div>







            <div class="textbox" id="kapitel4">
                <h1><br clear="ALL" /> 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HTML Tag zur Textformatierung und Strukturierung</h1>
                <p>In diesem Kapitel wenden wir uns den wichtigsten HTML Tag zu, hier lernen Sie wie Sie wie Sie Ihre Webseite Struktur verleihen kann. Auch lernen Sie hier wie man Texte formatieren kann.</p>
                <p>Nach dem Abarbeiten dieses Kapitels sollten Sie in der Lage sein, komplexeren Webseiten mit Texten, Tabellen, Listen und Grafiken anzulegen.</p>
                <p>Es gibt &uuml;ber 100 verschiedenen Tag in HTML bzw. HTML5, wir werden uns hier nur mit dem wichtigsten HTML Tags befassen, die zur Strukturierung einer Webseite notwendig sind.</p>

                <div class="textbox" id="kapitel41">
                    <h2>4.1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Grundlegende HTML Tags</h2>
                    <p>Alle HTML Tags, die in diesem Kapitel vorgestellt werden, befinden sich im BODY Block des HTML Dokument, da dieser Block f&uuml;r den Inhalt sowie die Struktur einer Webseite verantwortlich ist.</p>
                </div>

                <div class="textbox" id="kapitel42">
                    <h2>4.2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Textformatierung in HTML</h2>
                    <p>Wir betrachten hier HTML Tag die es uns erm&ouml;glichen Texte zu formatieren, insbesondere werden wir hier &Uuml;berschriften und Paragrafen betrachten, da dieser ein wesentlichen Bestandteil eines jeden Textes ist.</p>

                    <h3 id="kapitel421">4.2.1&nbsp;&nbsp; Heading: &lt;h&gt;&lt;/h&gt; Tag &ndash; &Uuml;berschriften</h3>
                    <p>&Uuml;berschriften sind ein wichtiger Bestandteil um Texte in HTML Dokumenten zu strukturieren, HTML kennt 6 &Uuml;berschriftebenen, von &lt;h1&gt;&lt;/h1&gt; bis zum &lt;h6&gt;&lt;/6&gt;. Diese werden durch den Webbrowser in jeweils andere Schriftgr&ouml;&szlig;en angegeben. Wenn nicht anders formatiert, wird &lt;h1&gt;&lt;/h1&gt; am gr&ouml;&szlig;ten und &lt;h6&gt;&lt;/6&gt; am kleinsten dargestellt.</p>
                    <p>&Uuml;berschriften in einen Text kann man hier wie Kapitel Namen in einen Buch Betrachten, diese dienen dazu einen neuen Textabschnitt einzul&auml;uten.</p>

                    <h3 id="kapitel422">4.2.2&nbsp;&nbsp; Paragraph: &lt;p&gt;&lt;/p&gt; Tag &ndash; Textabs&auml;tze und Break: &lt;br&gt; &ndash; Zeilenumbruch</h3>
                    <p>Abs&auml;tze dienen der Gliederung des Textes, der &lt;p&gt;&lt;/p&gt; Tag umfasst genau einen Absatz, er steht nicht f&uuml;r den Zwischen Raum zwischen zwei Abs&auml;tzen. Hier verwendet man normalerweise einen neuen Absatz Block um den n&auml;chsten Absatz anzulegen.</p>
                    <p>Der Webbrowser erzeugt bei der Darstellung der Webseite automatisch einen Zwischenraum zwischen den beiden Absatz Bl&ouml;cke.</p>
                    <p>Der leere HTML Tag &lt;br&gt; dient dazu einen Zeilenbruch zu erzeugen, es wird meisten verwendet um ein Gedicht oder eine Adresse zu notieren, da Zeilenumbr&uuml;che hier semantisch von Bedeutung sind.</p>
                    <p>Der &lt;br&gt; Tag sollte nicht dazu verwendet werden um L&uuml;cken in einen Absatz zu erzeugen oder diesen zu vergr&ouml;&szlig;ern.</p>  


                    <div class="abbildung">
                        <pre><code>
&lt;h1>Adresse:&lt;/h1&gt;
&lt;p&gt;
    Phan Hoang Minh&lt;br&gt;
    Am Mühlentor 11&lt;br&gt;
    19417 Warin
&lt;/p&gt;
</code></pre><p>Abbildung 6: Angaben einer Adresse in einen Absatz mit Hilfe von Zeilenumbrüchen</p>
                    </div>        


                    <h3 id="kapitel423">4.2.3&nbsp;&nbsp; Horizontal Ruler: &lt;hr&gt; Tag &ndash; Thematische Br&uuml;che</h3>
                    <p>Der leere &lt;hr&gt; Tag leitet einen Themenwechsel ein in einen HTML Dokument und wird durch eine horizontale Linie dargestellt. Diese sichtbaren Trennlinien dienen auch dazu um visuell eine Abgrenzung von Absatz Bl&ouml;cke anzuzeigen.</p>
                    <p>Der &lt;hr&gt; Tag f&uuml;gt eine Trennlinie ein und erzeugt damit selber einen eigenen Absatz.</p> 

                    <h3 id="kapitel424">4.2.4&nbsp;&nbsp; Weitere HTML Tags zur Textformatierung</h3>
                    <p>HTML bietet den Entwickler auch weitere M&ouml;glichkeiten an, um einen Text zu formatieren. Dies erm&ouml;glich dem Entwickler, nur mit Hilfe von HTML Tag, einen Text, wie in einen Text-Editor, anzupassen.</p>
                    <p>Im Folgenden werden einige HTML Tag vorgestellt die bei der Formatierung eines Textes eine Rolle spielen kann. Wir betrachten nur einige wichtige Tag die f&uuml;r die Formatierung eines Textes ben&ouml;tigt werden.</p> 
                    <p>Am besten kann man ein solches Beispiel anhand von einer direkten Gegen&uuml;berstellung eines Textabsatzes in HTML und dessen Darstellung im Browser zeigen.</p>   


                    <div class="abbildung">
                        <pre><code>                
&lt;p&gt;In einem HTML Text kann man eine Textstelle stark betonen und damit &lt;strong&gt;Fett markieren&lt;/strong&gt;,&lt;br&gt;
&lt;i&gt;kursiv darstellen&lt;/i&gt;,&lt;br&gt;
oder &lt;u&gt;unterstreichen&lt;/u&gt;.&lt;br&gt;

Es ist auch M&ouml;glich den Text &lt;strike&gt;durchzustreichen&lt;/strike&gt;.
oder &lt;br&gt;
&lt;mark&gt;einzuf&auml;rben&lt;/mark&gt;&lt;/p&gt;

&lt;p&gt;M&ouml;chte man eine Textstelle nur normal betonen kann man diese auch so &lt;em&gt;markieren&lt;/em&gt;.&lt;/p&gt;
&lt;p&gt;&lt;q cite="https://developer.mozilla.org/de/docs/Web/HTML/Element/q"&gt;Kurze Zitate&lt;/q&gt; werden wie folgt zitiert. &lt;/p&gt;
</code></pre><p><img class="bild" src="html/Abb.7.textformatierung.jpg" alt="Darstellung von verschiedenen Textformatierungen im Browser"><br>Abbildung 7: Quellcode mit HTML Textformatierung Elementen und dessen Darstellung im Browser (Firefox)</p>
                    </div>                



                    <p>Wie im Beispiel in der Abb. 4.2.4.1 gezeigt kann man einen Text mit Hilfe des &lt;strong&gt;&lt;/strong&gt; als Stark betont markieren, dieser Text wird, in den meisten Webbrowser, als Fett markiert dargestellt. Wenn man den Text jedoch kontextlos, ohne Betonungen Fett markieren m&ouml;chte, kann man hierf&uuml;r auch den Tag &lt;b&gt;&lt;/b&gt; benutzen.</p>
                    <p>Mit &lt;em&gt;&lt;/em&gt; kann man einen Text normal betonen, der Webbrowser stellt diesen Text meist kursiv da.</p>
                    <p>HTML sieht vor, bei explizit kursiv darzustellender Text, den Tag &lt;i&gt;&lt;/i&gt; zu verwenden. Um Texte hervorzuheben ist eine Nutzung des HTML Tag &lt;mark&gt;&lt;/mark&gt; m&ouml;glich. Diese f&auml;rbt den Text Hintergrund gelb ein, wie bei einem Textmarker, wenn nicht anderes zuvor mittels CSS definiert wurde.</p>
                    <p>Sollte der Text unterstrichen werden, verwendet man den Tag &lt;u&gt;&lt;/u&gt;. Beim durchstreichen des Textes kann der Tag &lt;strike&gt;&lt;/strike&gt; verwendet werden.</p>
                    <p>Mit Hilfe von der &lt;q&gt;&lt;/q&gt; Tag kann man Zitate in dem HTML Dokument anzeigen, in den &lt;q&gt; Tag selber, kann man je nach Bedarf mit &lt;q cite="url"&gt; eine Online Quelle, die man hier zitiert hat, angeben. Anzumerken ist, dass der &lt;q&gt;&lt;/q&gt; Tag nur f&uuml;r Kurze Zitate vorgesehen ist, l&auml;ngere Zitate sollte man mit dem &lt;blockquote&gt;&lt;/blockquote&gt; Tag zitieren.</p>
                    <p>Alle diese HTML Tag k&ouml;nnen auch miteinander kombiniert werden, so erh&auml;lt man mit &lt;strong&gt;&lt;i&gt;&lt;u&gt;<strong><em><span style="text-decoration: underline;">Text</span></em></strong>&lt;/u&gt;&lt;/i&gt;&lt;/strong&gt; einen Stark Betonten Text (fett markiert) der zus&auml;tzlich dazu auch noch kursiv und unterstrichen ist.</p>
                    <p>Wichtig ist hierbei das man die HTML Tags auch an der richtigen Stelle schlie&szlig;en muss, der Anfang Tag muss zuletzt geschlossen werden, der zweiter als Tag als vorletztes usw.</p>    
                </div>

                <div class="textbox" id="kapitel43">
                    <h2>4.3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Anpassung von Inline-Elemente mittels &lt;span&gt;&lt;/span&gt; Tag</h2>
                    <p>Anmerkung:&nbsp;&nbsp;&nbsp; &bdquo;Inline-Elemente nehmen nur den Platz in Anspruch, der auch vom Inhalt ben&ouml;tigt wird. Typische Inline-Elemente sind beispielsweise die Hervorhebungen wie &lt;b&gt; und &lt;i&gt; bzw. Links wie &lt;a&gt;&ldquo; [HTMLSEMINAR]</p>
                    <p>Betrachten wir hier einige M&ouml;glichkeiten einen Text oder andere Inline Elemente zu formatieren. Eine M&ouml;glichkeit dazu bietet der HTML Tag &lt;span&gt;&lt;/span&gt;. Der &lt;span&gt;&lt;/span&gt; selber hat keinen semantischen Inhalt, und bewirkt von sich aus nichts. Er dient lediglich dazu Inline Elemente zu umfassen und diese mittels CSS zu formatieren.</p>

                    <div class="abbildung">
                        <pre><code>                
&lt;head&gt;
    &lt;style&gt;
        span {color: red;}
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
        &lt;p&gt;Die &lt;span&gt;ueberspannte Stelle&lt;/span&gt; ist rot&lt;/p&gt;
&lt;/body&gt;
</code></pre><p>Abbildung 8: Der Code bewirkt, dass ''ueberspannte Stelle'' rot eingefärbt wird</p>
                    </div>                


                    <p>Nat&uuml;rlich kann auch der &lt;span&gt;&lt;/span&gt; Tag lokal eingesetzt werden um Texte lokal priorisiert zu formatieren.</p>

                    <div class="abbildung">
                        <pre><code>                
&lt;p&gt;&lt;span style="color: white; background-color: red; font-size: 32px; font-family: Time New Roman;"&gt;
Roter Hintergrund, weisse Schriftfarbe und Times New Roman als Schriftart
&lt;/span&gt;&lt;/p&gt;
</code></pre><p>Abbildung 9: Der Code zeigt wie in &lt;span&gt;&lt;/span&gt; Tag selber ein Text mittels CSS formatiert werden kann</p>
                    </div>                


                </div>

                <div class="textbox" id="kapitel44">
                    <h2>4.4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Anchor: &lt;a&gt;&lt;/a&gt; Tag - Verweise</h2>
                    <p>Der &lt;a&gt; Tag ist im HTML eines der zentralen Elemente zum Aufbau von komplexen Webseiten. Verweise k&ouml;nnen zu anderen Webseiten verlinkt werden. Zu eine andere HTML oder beliebiges Dokument/Datei im eigenen Projektordner. Diese Verweise k&ouml;nnen aber auch auf einen Verweisziel im aktuellen Dokument zeigen.</p>
                    <p>Mit Hilfe von Verweisen k&ouml;nnen mehrere HTML Seiten miteinander verlinkt werden, eine statische Homepage wird so realisiert.</p>

                    <h3 id="kapitel441">4.4.1&nbsp;&nbsp; Aufbau eines Verweises</h3>
                    <div class="abbildung">
                        <pre><code>                
&lt;a href=&quot;Verweisziel&quot; title=&quot;Verweisziel&quot; target=&quot;_blank&quot; download=&quot;beispiel.zip&quot;&gt;Verweislink&lt;/a&gt;
</code></pre><p>Abbildung 10: Beispielcode für einen Verweis</p>
                    </div>                    


                    <p>Verweisziel ist eine verpflichtende Angabe beim Konstruieren eines Verweises, hier wird das Ziel angegeben, welches dem Benutzer nach dem Anklicken auf dem Verweislink hinf&uuml;hren soll.</p>
                    <p>Der Wert im Title wird angezeigt, wenn der Mauszeiger &uuml;ber dem Download Link schwebt, diese Angabe ist optimal.</p>
                    <p>Mit der Erg&auml;nzung target="_blank" kann man angeben das der Link in einem neuen Fenster oder Webbrowser Tab ge&ouml;ffnet werden soll.</p>
                    <p>Mit der Erg&auml;nzung des Verweises um das Attribut "download" kann man eine Datei zum Download anbieten. Wenn der Benutzer auf dem Link klickt, wird Ihn die Datei von Verweisziel zum Download angeboten.</p>
                    <p>Durch die Angabe eines Wertes f&uuml;r "download" wird ein Name, f&uuml;r den zum Herunterladen freigegebene Datei, f&uuml;r den Benutzer vorgeschlagen.</p>

                    <h3 id="kapitel442">4.4.2&nbsp;&nbsp; Verweisanker anlegen</h3>
                    <p>Man kann in ein HTML Dokument Verweisanker definieren, auf diese Anker kann mit Hilfe eines Verweises verlinkt werden, so springt der Nutzer direkt zu der Anker Stelle, wenn er die Seite mit Hilfe eines solchen Verweises aufruft.</p>
                    <p>Einen unsichtbaren Verweisanker in einen HTML Dokument kann man, wie der Verweis selber, mithilfe des &lt;a&gt;&lt;/a&gt; Tag anlegen, um den Ankerpunkt aufzurufen, muss man hier ebenfalls den &lt;a&gt;&lt;/a&gt; Tag benutzen.</p>
                    <div class="abbildung">
                        <pre><code>                
Ankerpunkt:             &lt;a name=&quot;VerweisankerImText&quot;>&lt;/a&gt;
Verweis zu Ankerpunkt:  &lt;a href=&quot;#Ankername&quot;&gt;Verweistext&lt;/a&gt;
</code></pre><p>Abbildung 11: Beispiel wie man einen Verweisanker anlegt und auf diesen verweisen kann</p>
                    </div>                   


                    <p>Man kann auch zu jedem beliebigen Punkt in eine HTML Datei verweisen, in dem man auf ein bestimmtes id-Attribut verweis, welches in einen HTML-Element zus&auml;tzlich angegeben ist.</p>
                    <div class="abbildung">
                        <pre><code>                
Ankerpunkt:             &lt;h1 id=&quot;marker1&quot;&gt;Kapitel 1&lt;/h2&gt;
Verweis zu "marker1"    &lt;a href=&quot;#marker1&quot;&gt;zum Kapitel 1&lt;/a&gt;
</code></pre><p>Abbildung 12: Beispiel für einen Verweisanker mit Hilfe des id-Attribut</p>
                    </div>                   

                </div>

                <div class="textbox" id="kapitel45">
                    <h2>4.5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Image: &lt;img&gt; Tag - Bilder</h2>
                    <p>Mit dem leeren HTML Tag &lt;img&gt; kann man Bilder und Grafiken in eine HTML Datei einbinden. Das &lt;img&gt; Tag wird wie folgt aufgebau:</p>                
                    <p>Die beiden Attribute "src" und "alt" m&uuml;ssen immer angegeben werden, hier wird der Speicherort des Bildes oder die Grafik hinterlegt. Das Attribut "alt" gibt einen alternativen Text an, der angezeigt wird, wenn das Bild oder die Grafik nicht geladen werden k&ouml;nnen.</p>
                    <div class="abbildung">
                        <pre><code>                
&lt;img src="bild.jpeg" width="100" height="100" alt="Bild"&gt;
</code></pre><p>Abbildung 13: Beispiel Code zum Einbinden eines Bildes</p>
                    </div>                 


                    <p>Die beiden anderen Attribute "width" und "height" geben optimal die Bildbreite und Bild H&ouml;he an, diese Angaben sind nicht verpflichtend. Man sollte diese dennoch stets mitangeben, so kann der Browser bereits bevor er die Bilder geladen hat, leere Bildfl&auml;chen f&uuml;r die sp&auml;tere Darstellung anzeigen.</p>
                    <p>Bilder k&ouml;nnen auch als Link fungieren, mit folgendem Code kann man ein Bild als Verweis nutzen.</p>
                    <div class="abbildung">
                        <pre><code>                
&lt;a href="Verweisziel"&gt;&lt;img src="beispielBild.jpeg" width="100" height="100" alt="Bild"&gt;&lt;/a&gt;
</code></pre><p>Abbildung 14: Beispiel Code um ein Bild als Linkverweis zu nutzen</p>
                    </div>                 
                </div>

                <div class="textbox" id="kapitel46">
                    <h2>4.6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Listen</h2>
                    <p>In HTML gibt es 3 verschiedenen Arten von Listen, die geordnete List, die ungeordnete Liste und die Beschreibende Liste. Diese Listen dienen jeweils einen anderen speziellen Zweck, eine kurze Einf&uuml;hrung zu Listen finden Sie jetzt hiernach.</p>

                    <h3 id="kapitel461">4.6.1&nbsp;&nbsp; Ordered List: &lt;ol&gt;&lt;/ol&gt; Tag &ndash; Geordnete Liste</h3>





                    <div class="abbildung">
                        <pre><code>                
&lt;ol start="17"&gt;
    &lt;li&gt;Beginnt mit 17&lt;/li&gt;
    &lt;li&gt;Lucky 18&lt;/li&gt;
    &lt;li value="4">Wieder bei 4&lt;/li&gt;
    &lt;li&gt;Weiter mit 5&lt;/li&gt;
&lt;/ol&gt;
</code></pre><p><img class="bild" src="html/Abb.15.jpg" alt="Ordered List"><br>Abbildung 15: Code Beispiel für eine geordnete Liste und dessen Darstellung im Webbrowser</p>
                    </div>                    




                    <p>Der HTML Tag &lt;ol&gt;&lt;/ol&gt;gibt eine nummerierte geordnete Liste an, die Reihenfolge der Elemente sind hier semantisch von Bedeutung. Jedes Listen-Element wird von dem Tag &lt;li&gt;&lt;/li&gt; eingeschlossen.</p>
                    <p>In eine geordnete Liste kann man mit dem "start" Attribut angeben, ab welcher Zahl in der Liste gez&auml;hlt wird. Man kann zudem den Z&auml;hlwert, an jede beliebige Listenelement, neufestlegen mit dem "value" Attribut.</p>
                    <div class="abbildung">
                        <pre><code>                
&lt;ol start="17"&gt;
    &lt;li&gt;Beginnt mit 17&lt;/li&gt;
    &lt;ol start="17"&gt;
    	&lt;li&gt;Beginnt mit 17&lt;/li&gt;
    	&lt;li&gt;Lucky 18&lt;/li&gt;
    	&lt;li value="4"&gt;Wieder bei 4&lt;/li&gt;
    	&lt;li&gt;Weiter mit 5&lt;/li&gt;
	&lt;/ol&gt;
    &lt;li&gt;Lucky 18&lt;/li&gt;
    &lt;li value="4"&gt;Wieder bei 4&lt;/li&gt;
    &lt;li&gt;Weiter mit 5&lt;/li&gt;
&lt;/ol&gt;
</code></pre><p><img class="bild" src="html/Abb.16.jpg" alt="Ordered List"><br>Abbildung 16: Beispielcode für eine verschachtelte geordnete Liste, sowie dessen Darstellung im Browser</p>
                    </div>                 

                    <p>Eine Verschachtelung der geordneten Liste ist ebenfalls m&ouml;glich, hierbei ist jedoch zu beachten, das mit HTML allein eine &bdquo;Nummerierungshierarchien wie 1, 1.1, 1.1.1&ldquo; [FD19, S.15] nicht m&ouml;glich ist.</p>

                    <h3 id="kapitel462">4.6.2&nbsp;&nbsp; Unordnered List: &lt;ul&gt;&lt;/ul&gt; Tag &ndash; Ungeordnete Liste</h3>
                    <div class="abbildung">
                        <pre><code>                
&lt;ul&gt;
    &lt;li&gt;Kaffee ist gut&lt;/li&gt;
    &lt;li&gt;Redbull ist gut&lt;/li&gt;
    &lt;li&gt;Alkohol ist weniger gut&lt;/li&gt;
    &lt;li&gt;Computerspiele ist gut&lt;/li&gt;
&lt;/ul&gt;
</code></pre><p><img class="bild" src="html/Abb.17.jpg" alt="unordered List"><br>Abbildung 17: Code Beispiel für ungeordnete Liste und dessen Darstellung im Webbrowser</p>
                    </div> 

                    <p>Sollten die geordnete Reihenfolge der Listenelemente semantisch keine Rolle spielen, dann kann man diese Listen-Elementen auch in eine ungeordnete Liste hinterlegen. Diese wird erzeugt durch dem HTML-Tag &lt;ul&gt;&lt;/ul&gt;, auch hier werden die Listenelemente in den Tag &lt;li&gt;&lt;/li&gt; eingeschlossen.</p>
                    <p>Die meisten Webbrowser stellen eine ungeordnete Liste als eine Aufz&auml;hlungsliste mit Aufz&auml;hlungszeichen (Bullet) dar. Auch hier ist es selbstverst&auml;ndlich m&ouml;glich eine Liste in eine andere zu Verschachteln.</p>
                    <p>Moderne Webbrowser k&ouml;nnen hier, f&uuml;r die Unterliste, andere Aufz&auml;hlungszeichen verwenden als f&uuml;r die Oberliste.</p>
                    <div class="abbildung">
                        <pre><code>                
&lt;ul&gt;
    &lt;li&gt;Kaffee ist gut&lt;/li&gt;
    &lt;li&gt;Redbull ist gut&lt;/li&gt;
    &lt;ul&gt;
        &lt;li&gt;Kaffee ist gut&lt;/li&gt;
        &lt;li&gt;Redbull ist gut&lt;/li&gt;
        &lt;li&gt;Alkohol ist weniger gut&lt;/li&gt;
        &lt;li&gt;Computerspiele ist gut&lt;/li&gt;
    &lt;/ul&gt;
    &lt;li&gt;Alkohol ist weniger gut&lt;/li&gt;
    &lt;li&gt;Computerspiele ist gut&lt;/li&gt;
&lt;/ul&gt;
</code></pre><p><img class="bild" src="html/Abb.18.jpg" alt="unordered List"><br>Abbildung 18: Codebeispiel einer verschachtelten ungeordneten Liste sowie dessen Barstellung im Webbrowser</p>
                    </div> 


                    <h3 id="kapitel463">4.6.3&nbsp;&nbsp; Description List: &lt;dl&gt;&lt;/dl&gt; Tag &ndash; Beschreibungsliste</h3>
                    <p>Eine Description List, zu Deutsch Definitionslisten, ist eine Listenart, die seit HTML5 dazu benutzt wird, um eine beschreibende Liste darzustellen. Solche Listen kann man benutzen um Glossare darzustellen.</p>
                    <p>&bdquo;Ein Glossar besteht meist aus einer Liste von Eintr&auml;gen, die wiederum aus mindestens einem zu erkl&auml;renden Sachverhalt nebst mindestens einer Erkl&auml;rung besteht.&ldquo; [FD19, S.17]</p>
                    <p>Die Beschreibungsliste wird durch den Tag &lt;dl&gt;&lt;/dl&gt; definiert. Innerhalb der Liste wird der zu erl&auml;uternde Ausdruck in den Tag &lt;dt&gt;&lt;/dt&gt; eingeschlossen, die Beschreibung des zu erl&auml;uternden Ausdrucks erfolgt innerhalb des Tags &lt;dd&gt;&lt;/dd&gt; direkt hinter dem &lt;dt&gt;&lt;/dt&gt; Tag.</p>
                    <p>Man k&ouml;nnte hier auch sagen, dass die Beschreibungsliste Wertepaare speichern.</p>
                    <div class="abbildung">
                        <pre><code>                
&lt;dl&gt;
    &lt;dt&gt;HTML&lt;/dt&gt;
        &lt;dd&gt;Für Struktur in einer Webseite&lt;/dd&gt;
    &lt;dt&gt;CSS&lt;/dt&gt;
        &lt;dd&gt;Für Darstellung in einer Webseite&lt;/dd&gt;  
    &lt;dt&gt;Javascript&lt;/dt&gt;
        &lt;dd&gt;Für Interaktion in einer Webseite&lt;/dd&gt;
&lt;/dl&gt;
</code></pre><p><img class="bild" src="html/Abb.19.jpg" alt="Description List"><br>Abbildung 19: Codebeispiel einer Description List, sowie dessen Darstellung in einem Webbrowser</p>
                    </div>                

                </div>

                <div class="textbox" id="kapitel47">
                    <h2>4.7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tabelle</h2>
                    <p>Mit dem Tag &lt;table&gt;&lt;/table&gt; kann man in einen HTML Dokument eine Tabelle anlegen.</p>
                    <p>Der &lt;table&gt;&lt;/table&gt; Tag wird hierbei mit dem verschiedenen Tag wie &lt;thead&gt;&lt;/thead&gt;, &lt;body&gt;&lt;/body&gt;, &lt;tr&gt;&lt;/tr&gt;, &lt;th&gt;&lt;/th&gt; und dem &lt;td&gt;&lt;/td&gt; Tag kombiniert um eine Tabelle darzustellen.</p>
                    <div class="abbildung">
                        <pre><code>                
&lt;table border="1"&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;th&gt;Spalte 1&lt;/th&gt;
            &lt;th&gt;Spalte 2&lt;/th&gt;
            &lt;th&gt;Spalte 3&lt;/th&gt;
        &lt;tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Wert 1 Zeile 1&lt;/td&gt;
            &lt;td&gt;Wert 2 Zeile 1&lt;/td&gt;
            &lt;td&gt;Wert 3 Zeile 1&lt;/td&gt;
        &lt;/tr&gt; 
        &lt;tr&gt;
            &lt;td&gt;Wert 1 Zeile 2&lt;/td&gt;
            &lt;td&gt;Wert 2 Zeile 2&lt;/td&gt;
            &lt;td&gt;Wert 3 Zeile 2&lt;/td&gt;
        &lt;/tr&gt; 
    &lt;/tbody&gt;
&lt;/table&gt;
</code></pre><p><img class="bild" src="html/Abb.20.jpg" alt="Tabelle"><br>Abbildung 19: Codebeispiel für eine Tabelle und dessen Darstellung im Browser</p>
                    </div>                  

                    <p>Der &lt;body&gt;&lt;/body&gt; Tag markiert hierbei den Beginn des Inhaltes in einer Tabelle, mit dem &lt;tr&gt;&lt;/tr&gt; Tag werden dann jeweils eine Zeile angelegt.</p>
                    <p>Mit dem &lt;th&gt;&lt;/th&gt; Tag definiert man jeweils den Kopf einer Spalte (Spaltenname) und mit dem &lt;td&gt;&lt;/td&gt; Tag werden die Werte in einer Zeile bef&uuml;llt.</p>
                    <p>Wenn gew&uuml;nscht kann auch die &lt;th&gt;&lt;/th&gt; Tag Zeile f&uuml;r den Tabellenkopf in eine spezielle daf&uuml;r vorgesehene &lt;thead&gt;&lt;/thead&gt; bereich definiert werden.</p>
                    <p>Es gibt auch noch dem &lt;tfoot&gt;&lt;/tfoot&gt; Tag, hier werden meist die Ergebnisse der vorherigen Zeilen zusammengefasst und angegeben.</p>
                    <p>Wie in Abb.20 gezeigt, ben&ouml;tigt man die beiden Tags &lt;thead&gt;&lt;/thead&gt; und &lt;tfoot&gt;&lt;/tfoot&gt; nicht unbedingt, um eine Tabelle darzustellen. Diese dienen lediglich der besseren Strukturierung einer Tabelle, da Sie Tabellenelementen Explizit definieren.</p>
                    <p>Mit HTML ist es auch m&ouml;glich eine Tabelle weiter anzupassen, mit den Attributen &lt;td colspan="<strong>x</strong>"&gt; kann man eine Zelle in eine Zeile auf <strong>x</strong> Zellen verbreiten, die Zelle nehmt damit den Platz f&uuml;r x Zellen ein.</p>
                    <p>Auch ist es m&ouml;glich eine Zelle in einer Spalte auf mehreren Zellen auszubreiten, mit &lt;td rowspan="<strong>y</strong>"&gt; wird einer Zelle in einer Spalte um <strong>y </strong>Zellen erweitert.</p>
                    <div class="abbilung">
                        <pre><code>                
&lt;table border="1"&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;th&gt;Spalte 1&lt;/th&gt;
            &lt;th&gt;Spalte 2&lt;/th&gt;
            &lt;th&gt;Spalte 3&lt;/th&gt;
        &lt;tr&gt;
        &lt;tr&gt;
            &lt;td rowspan="2" colspan="2"&gt;Wert 1 Zeile 1&lt;/td&gt;
            &lt;td&gt;Wert 3 Zeile 1&lt;/td&gt;
        &lt;/tr&gt; 
        &lt;tr&gt;
            &lt;td&gt;Wert 3 Zeile 2&lt;/td&gt;
        &lt;/tr&gt; 
    &lt;/tbody&gt;
&lt;/table&gt;
</code></pre><p><img class="bild" src="html/Abb.21.jpg" alt="Tabelle"><br>Abbildung 21: Codebeispiel für die Formatierung einer Tabelle mit rowspan und colspan sowie dessen Darstellung im Webbrowser</p>
                    </div>                


                    <p>Wie wir bereits kennengelernt haben, ist in HTML auch eine Kombination der beiden Attribute m&ouml;glich mit &lt;td rowspan="<strong>2</strong>" colspan="<strong>2</strong>"&gt;.</p>
                    <p>Diese Tabelle Zelle w&uuml;rde insgesamt 4 Zellen Platz in Anspruch nehmen, <strong>2</strong> vertikale und <strong>2</strong> horizontale.</p>
                </div>

                <div class="textbox" id="kapitel48">
                    <h2>4.8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Division: &lt;div&gt;&lt;/div&gt; Tag &ndash; Bereich</h2>
                    <p>Der &lt;div&gt;&lt;/div&gt; Tag definiert einen Bereich oder Sektion in einen HTML Dokument. Das div-Element Element ist meist dazu gedacht, mehrere Elemente eines HTML Dokument wie Text, Listen, Tabellen usw. in einen Bereich zu gruppieren, damit diese mittels CSS formatiert werden kann.</p>
                </div>

                <h2 id="kapitel4z">Zusammenfassung</h2>
                <p>In diesem Kapitel haben wir mehrere elementare Elemente eines HTML Dokumentes kennengelernt. Wir haben kennengelernt wie man Texte formatiert, Verweise anlegt und Bilder einbindet. Wir haben zudem gelernt wie wir Listen und Tabellen anlegen k&ouml;nnen, sowie den Tag &lt;div&gt;&lt;/div&gt; kurz kennengelernt. Diese wird uns sehr helfen bei der Formatierung von gr&ouml;&szlig;eren Webseiten mittels CSS, aber das ist nicht Gegenstand dieser Ausarbeitung, daher werden wir darauf nicht n&auml;her eingehen.</p>
                <p>Sie sollten nach dem Abarbeiten dieses Kapitel bereits in der Lage sein, eine komplexere Webseite zu entwickeln.</p>

                <h2 id="kapitel4a">Aufgaben zur Selbst&uuml;berpr&uuml;fung</h2>
                <p>4.1 Beschreiben Sie den Unterschied zwischen den &lt;span&gt; und &lt;div&gt; Tag!</p>
                <p>4.2 Geben Sie die vorhandenen Listen Arten in HTML an!</p>
                <p>4.3 Geben Sie vier m&ouml;gliche Formatierung arten zu einem Text in HTML an!</p> 
                <p>4.4 Was bewirken die beiden Attribute rowspan und colspan in einer Tabelle?</p>
                <p>4.5 Warum m&uuml;ssen Sie stets das Attribut alt angeben, wenn Sie ein Bild in Ihrer HTML Dokument verlinken wollen?</p>
                <p>4.6 Wozu verwendet man einen Verweisanker in einen HTML Dokument?</p>
                <p>4.7 Recherchieren Sie eigenst&auml;ndig nach, wie Sonderzeichen in der deutschen Sprache in HTML Dokument dargestellt werden.</p>
            </div>

            <div class="textbox" id="kapitel5">
                <h1>5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HTML5</h1>
                <p>HTML5 ist der Momentan aktuellster HTML Standard, dieser ist der Nachfolger von HTML4 und XHTML. Wichtig ist anzumerken, dass HTML5 nahezu zu 100 Prozent abw&auml;rtskompatibel ist, das hei&szlig;t, sollte Ihrer Webseite bisher aller Standard und Konventionen eingehalten haben, ist dieser weiterhin durch einen Webbrowser darstellbar der nur HTML5 unterst&uuml;tzt.</p>
                <p>HTML5 bringt neben einige Komfort &Auml;nderungen, wie das erm&ouml;glichen des weglassen von HEAD und BODY Bl&ouml;cke in einen HTML Dokument, einige wichtige Neuerungen, die wir in diesem Kapitel kennen lernen werden.</p>

                <div class="textbox" id="kapitel51">
                    <h2>5.1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Naiver Video- und Audio Wiedergabe</h2>
                    <div class="abbildung">
                        <pre><code>                
&lt;video width="320" height="240" controls&gt;
    &lt;source src="beispielVideo.mp4" type="video/mp4"&gt;
    &lt;source src="beispielVideo.ogv" type="video/ogg"&gt;
    Dein Webbrowser unterstützt HTML5 leider nicht.
&lt;/video&gt;
oder
&lt;audio controls="control"&gt;
    &lt;source src="beispielAudio.wav" type="audio/wav"&gt;
    Dein Webbrowser unterstützt HTML5 leider nicht.
&lt;/audio&gt;
</code></pre><p>Abbildung 22: Beispiel Code zum Einbinden eines Videos oder Audiodatei in HTML5</p>
                    </div>                 

                    <p>&lt;p&gt;HTML bietet es nativ &amp;uuml;ber das HTML Element &amp;lt;video&amp;gt; bzw. &amp;lt;audio&amp;gt; Video- und Audiodateien einzubinden, und diese mittels CSS zu formatieren und &amp;uuml;ber JavaScript zu steuern. Damit kann auf zus&amp;auml;tzlich Plug-In wie dem Adobe Flash Player verzichtet werden.&lt;/p&gt;<br />&lt;p&gt;Man kann auch mehrere Dateien in unterschiedlichen Formaten hinterlegen, der Webbrowser sucht sich in diesem Fall das passende Format aus, den er abspielen kann.&lt;/p&gt;</p>
                </div>

                <div class="textbox" id="kapitel52">
                    <h2>5.2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Inhaltabh&auml;ngige Gliederungselementen</h2>
                    <p>HTML5 f&uuml;hrt einige neuen Elementen ein, die dazu verwendet werden um eine Webseite noch besser zu gliedern. Die Verwendung des &lt;div&gt;&lt;/div&gt; Tag zur Gliederung des HTML Dokumentes in mehreren semantischen Abschnitten, haben wir bereits in Kapitel 4.8 betrachtet.</p>
                    <p>In HTML5 wird der &lt;div&gt;&lt;/div&gt; Tag durch &lt;section&gt;&lt;/section&gt; ersetzt, damit l&ouml;st man das Problem, das man durch den &lt;div&gt; Tag nicht genau erkennen kann, ob es sich hierbei um einen semantischen Abschnitt oder ob es sich hierbei lediglich um einen Block handelt, der mittels CSS formatiert werden soll.</p>
                    <p>HTML5 f&uuml;hrt ein spezifischer HTML &lt;nav&gt;&lt;/nav&gt; Element ein, der dazu genutzt wird, um eine Navigationsleiste zu erstellen, hier werden Linkssammlungen verwaltet, die die Homepage mit seinen Unterseiten verlinken.</p>
                    <p>Mit &lt;header&gt;&lt;/header&gt; und &lt;footer&gt;&lt;/footer&gt; Tag f&uuml;hrt HTML5 auch neben &lt;section&gt; zwei spezifischer Segmente in einer Webseite, beim &lt;header&gt; Abschnitt handelt es sich um den Kopfbereich einer Webseite, dieser soll einleitende Inhalte der Webseite gliedern, hier werden h&auml;ufig die horizontale Navigationsleiste eingegliedert oder das Banner der Seite wird hier angezeigt.</p>
                    <p>Beim &lt;header&gt; Abschnitt handelt es sich um das Ende eine Seite, Element die hier gegliedert sind sollen erst am Ende einer Webseite zu sehen sein. Meist werden hier die Links zur Impressum oder Datenschutzerkl&auml;rungen angezeigt.</p>
                </div>

                <div class="textbox" id="kapitel53">
                    <h2>5.3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Formular Elemente</h2>
                    <p>Mit HTML5 wurden neuen Input Typen eingef&uuml;hrt. Die unter HTML4 vorhandenen Input Typen text, hidden und password wurde um weiteren Typen erweitert, darunter sind date, email, tel usw.</p>
                    <p>Damit ist es m&ouml;glich Informationen noch vor dem Absenden zu validieren auf Ihre Richtigkeit, dies erspart viel Programmierarbeit und erh&ouml;ht zudem die Benutzerfreundlichkeit.</p>
                    <div class="abbildung">
                        <pre><code>                
&lt;form action="beispielurl"&gt;
    Name:
    &lt;br&gt;
    &lt;input type="text" name="name"&gt;
    &lt;br&gt;
    &lt;input type="submit"&gt;
&lt;/form&gt;
</code></pre><p><img class="bild" src="html/Abb.22.jpg" alt="Formular"><br>Abbildung 23: Codebeispiel für ein Formular zum Abfragen des Namens und dessen Darstellung im Webbrowser</p>
                    </div>                

                    <p>Das Attribut action beinhaltet als Wert einen URL, wo die Daten hingesendet werden, wenn auf "Senden" geklickt wird. Beim Klick auf senden wird eine http Request ausgel&ouml;st die Seitens der Server verarbeitet wird. Handelts es sich bei der URL um eine ScriptDatei, dann wird diese den Request serverseitig bearbeiten.</p>
                </div>

                <div class="textbox" id="kapitel54">
                    <h2>5.4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Canvas Element</h2>
                    <p>Der &lt;canvas&gt;&lt;/canvas&gt; Tag wird dazu verwendet um mittels JavaScript Grafiken auf eine Webseite darzustellen. Das &lt;canvas&gt;&lt;/canvas&gt; Element ist dabei jedoch nur ein Container f&uuml;r die Grafiken, man muss JavaScript verwenden um diese Grafiken zu erstellen.</p>
                    <p>Mit dem Canvas Element, ist es m&ouml;glich Grafiken f&uuml;r die Darstellung in eine Webseite dynamisch zu erstellen ohne das diese Grafiken vorher auf dem Server abgelegt werden muss.</p>
                    <div class="codebox">
                        <pre><code>                
&lt;!DOCTYPE html&gt;
&lt;html&gt;
	&lt;script type="text/javascript"&gt;
		// Die Canvas-Funktion beim Laden der Seite aufrufen
		if(window.addEventListener){
			addEventListener("load", drawCanvas, false);
		}
		else{
			attachEvent("onload", drawCanvas);
		}

		//Canvas zeichnen
		function drawCanvas(){
			var canvas = document.getElementById('testcanvas1');
			if(canvas.getContext){
				var context = canvas.getContext('2d');
				context.fillStyle = "rgb(255, 0, 255)";
				context.fillRect(0, 0, canvas.width, canvas.height);
			}
		}
	&lt;/script&gt;
	&lt;body&gt;
		&lt;h1&gt;Canvas&lt;/h1&gt;
		&lt;canvas id="testcanvas1" width="300" height="200"&gt;
			Dein Browser kann diese Grafik nicht darstellen.
		&lt;/canvas&gt;

	&lt;/body&gt;
&lt;/html&gt;
</code></pre><p><img class="bild" src="html/Abb.23.jpg" alt="Canvas Element"><br>Abbildung 24: Code Beispiel um mit Canvas Eine Fläche zu Zeichnen [PK19]</p>
                    </div>                

                </div>

                <div class="textbox" id="kapitel55">
                    <h2>5.5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Offline Datenspeicherung</h2>
                    <p>HTML5 erm&ouml;glich es WebApplication vollst&auml;ndig, ohne eine stetige Internetverbindung, zu funktionieren. Unter Verwendung des &bdquo;HTML5 Application Cache&ldquo; [W3LAG14, S.7] und DOM Storage werden Ressourcen vorgeladen im Onlinebetrieb und im Offlinebetrieb werden Informationen in einer clientseitigen Datenbank angelegt, um einen Sp&auml;teren Versand dieser Informationen zu erm&ouml;glichen. Wenn dieser beiden Prozesse gut genug miteinander agieren, dann wird der Nutzer nicht mitbekommen das er Offline ist.</p>
                    <p>Dieser M&ouml;glichkeit der Offline Nutzung ist notwendig, da beispielweise Smartphone oft Ihre Internetverbindung kurzfristig verlieren. Damit sollte dieser Technologie eine angenehmere Nutzererfahrung erm&ouml;glichen. Da der Nutzer durch die lokale Speicherung von einige Daten trotz Verbindungsabr&uuml;che die Webseite weiter benutzen kann.</p>
                </div>

                <div class="textbox" id="kapitel56">
                    <h2>5.6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Standortabfragen</h2>
                    <p>Die Geolocation API erm&ouml;glich es dem Nutzer, einer Webapplication seinen aktuellen Standort mitzuteilen.</p>
                    <p>Die Standortangaben sind f&uuml;r die Anwendung mit einem Smartphone am pr&auml;zisesten, da diese &uuml;ber einen eingebauten GPS Empf&auml;nger verf&uuml;gt.</p>
                    <p>Der Standort kann von einer Navigation WebApp verwendet werden, um den Nutzer seinen Standort auf eine Karte mitzuteilen, oder auch einfach um das Wetter am Standort des Nutzers anzuzeigen.</p>
                    <p>In Verbindung mit der Suchmaschine Google wird uns hiermit auch oft die n&auml;chstgelegene Arztpraxis oder Restaurant angezeigt, wenn wir eine solche Suchanfrage starten und Google Zugriff auf unseren Standortinformationen erlauben.</p>
                    <p>Ein m&ouml;glicher Code f&uuml;r eine solche Standortabfrage w&uuml;rde wie folgt aussehen.</p>
                    <div class="codebox">
                        <pre><code>                
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
	&lt;p&gt;Click the button to get your coordinates.&lt;/p&gt;
	&lt;button onclick="getLocation()"&gt;Try It&lt;/button&gt;
	&lt;p id="demo"&gt;&lt;/p&gt;
&lt;script&gt;
	var x = document.getElementById("demo");
	function getLocation() {
		if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition);
		} else {
			x.innerHTML = "Geolocation is not supported by this browser.";
		}
	}
    function showPosition(position) {
	   x.innerHTML = "Latitude: " + position.coords.latitude + "&lt;br&gt;Longitude: " + position.coords.longitude;
    }
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre><p><img class="bild" src="html/Abb.24.jpg" alt="Geostandort"><br>Abbildung 25: Codebeispiel für eine Standortabfrage [HTML5GEO19]</p>
                    </div>                 

                </div>

                <h2 id="kapitel5z">Zusammenfassung</h2>
                <p>Wir haben in diesem Kapitel die Neuerungen angesehen, die in HTML5 eingef&uuml;hrt werden. Neben einige &Auml;nderungen zur Erh&ouml;hung der Benutzerfreunflichkeit wie die native Videowiedergabe durch den Webbrowser.</p>
                <p>HTML5 auch neue M&ouml;glichkeiten f&uuml;r die Benutzung von Smartphone, hier wurden Technologien eingef&uuml;hrt, die auf die Nutzung von Smartphone ausgelegt sind, wie Offline Storage und Standortabfragen.</p>
                <p>Neben den obengenannten Elementen bringt HTML5 auch die M&ouml;glichkeit Grafiken mittels JavaScript zu erstellen mittels Canvas Element, sowie eine bessere M&ouml;glichkeit nur Gliederung von Webseiten mit inhaltabh&auml;ngige Gliederungselementen.</p>

                <h2 id="kapitel5a">Aufgaben zur Selbst&uuml;berpr&uuml;fung</h2>
                <p>5.1 Was ist Ihrer Meinung nach, die wichtigste Neuerung in HTML5, begr&uuml;nden Sie Ihrer Antwort!</p>
                <p>5.2 Nennen Sie 3 m&ouml;gliche Anwendungsszenarien f&uuml;r die Nutzung Ihres Standortes.</p>
                <p>5.3 Warum ist die Offline F&auml;higkeit von HTML5 einen gutes Feature f&uuml;r die Anwendung am Smartphone, begr&uuml;nden Sie Ihre Antwort.</p> 
                <p>5.4 Was ist der Nutzen von den neu eingef&uuml;hrten Input Typen in HTML5?</p>
            </div>

            <div class="textbox" id="kapitell">
                <h1>L&ouml;sungen der Aufgaben zur Selbst&uuml;berpr&uuml;fung</h1>
                <p>2.1</p>
                <p>&lt;!DOCTYPE&gt; Am Anfang einer HTML Datei legt fest um was es sich f&uuml;r ein Dokumententyp es sich hierbei handelt, hier wird zudem in HTML Fall speziell die HTML Version angegeben, damit der Browser diese entsprechend interpretieren kann.</p>
                <p>2.2</p>
                <p>HTML ist eine Auszeichnungssprache, ihr fehlt es wesentliche Bestandteile einer Sprache damit man damit programmieren kann. Die beiden wichtigsten Bestandteile eine Programmiersprache, Schleifen und Bedingungen sind in HTML nicht vorhanden, daher ist diese auch keine Programmiersprache.</p>
                <p>2.3</p>
                <p>&lt;!DOCTYPE html&gt;<br /> &lt;html&gt;<br /> &nbsp;&nbsp;&nbsp; &lt;title&gt;HTML&lt;/title&gt;<br /> &lt;/html&gt;</p>
                <p>Nach der Neuerung von HTML5 muss kein HEAD und BODY Block mehr angegeben werden, daher ger&uuml;gt dieser Code vollst&auml;ndig als eine HTML Datei.</p>
                <p>3.1</p>
                <p>Als erstes werden die Lokale, danach die Globale und erst anschlie&szlig;end die externen CSS Regeln ausgef&uuml;hrt.</p>
                <p>3.2</p>
                <p>Bei Umfangreichere Webpr&auml;senzen mit mehrere HTML Dokumenten die alle das gleiche Design haben sollte, ist es sinnvoller das Design in eine externe Datei zu habe damit man bei &Auml;nderungen am Design diese zentral vornehmen kann.</p>
                <p>3.3</p>
                <p>Im HEAD Block sollte unbedingt der Titel der Seite angegeben werden, auch die verwendete Zeichenkodierung ist sinnvoll, falls der Server eine andere Zeichenkodierung standartm&auml;&szlig;ig benutzt.</p>
                <p>3.4</p>
                <p>Der Meta Tag Refresh kann statt der aktuellen Seite neuzuladen auch eine andere Seite aufrufen, diese funktioniert dann wie eine automatische Weiterleitung.</p>
                <p>&lt;meta http-equiv=''refresh'' content=''10;url=https://www.google.de/''&gt;</p>
                <p>4.1</p>
                <p>Das span Element wird dazu verwendet um Inline Elemente zu umschlie&szlig;en um diese anschlie&szlig;end mit CSS zu formatieren. Das div Element hingegen wird dazu genutzt um mehrere Elemente zu Gruppieren in einen semantischen Abschnitt.</p>
                <p>4.2</p>
                <p>Ordered List, hier spielen die Reihenfolge der Listenelemente semantisch eine Rolle<br /> Unordnered List, hier spielen die Reihenfolge der Listenelemente semantisch keine Rolle<br /> Description List, Liste enth&auml;lt Wertepaare. Eines der Elemente ist der zu Beschreibende Ausdruck und das andere Element ist die Beschreibung dazu.</p>
                <p>&nbsp;</p>
                <p>4.3</p>
                <p>Man kann zum Beispiel mit &lt;b&gt; einen Text Fett markieren, mit &lt;strike&gt; diese durchstreichen, mit &lt;u&gt; den Text unterstreichen und mit &lt;i&gt; diese kursiv schreiben.</p>
                <p>4.4</p>
                <p>Das rowspan Attribut erweitert die Zelle einer Tabelle in vertikaler Richtung w&auml;hrend das colspan Attribute die Zelle der Tabelle in horizontaler Richtung erweitert.</p>
                <p>4.5</p>
                <p>Der Wert in das Attribut alt wird angezeigt, wenn die Bilddatei nicht geladen werden kann.</p>
                <p>4.6</p>
                <p>Der Verweisanker wird innerhalb eines HTML Dokument dazu verwendet um einen Besucher direkt zu dieser Stelle zu f&uuml;hren, wenn er die Webseite mit dem entsprechenden URL aufruft. Ein solcher URL enth&auml;lt ein &hellip;#fragment teil der direkt zu der Verweisanker f&uuml;hrt.</p>
                <p>4.7</p>
                <p>&Auml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &amp;Auml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gro&szlig;buchstabe f&uuml;r den deutschen Umlaut A<br />
                    &Ouml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &amp;Ouml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gro&szlig;buchstabe f&uuml;r den deutschen Umlaut O<br />
                    &Uuml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &amp;Uuml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gro&szlig;buchstabe f&uuml;r den deutschen Umlaut U<br />
                    &auml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &amp;auml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kleinbuchstabe f&uuml;r den deutschen Umlaut a<br />
                    &ouml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &amp;ouml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kleinbuchstabe f&uuml;r den deutschen Umlaut o<br />
                    &uuml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &amp;uuml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kleinbuchstabe f&uuml;r den deutschen Umlaut u<br />
                    &szlig;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &amp;szlig;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Scharfes S / sz</p>
                <p>5.1</p>
                <p>Subjektive Antwort, meiner Meinung nach ist die M&ouml;glichkeit Video- und Audiodateien ohne Plug-In abspielen zu k&ouml;nnen eines der besten Feature in HTML5. F&uuml;r den Nutzer selbst bedeutet weniger Einrichtung Aufwand und h&ouml;here Sicherheit durch den Verzicht externen Media-Player.</p>
                <p>5.2</p>
                <p>Eine Webseite bestimmt mein Standort um die n&auml;chstgelegene Filiale anzeigen zu k&ouml;nnen. Die Wetter vorhersage zu bestimmen. Ortspezifische Nachrichten anzeigen.</p>
                <p>5.3</p>
                <p>Smartphone haben sehr oft Verbindungsprobleme, besonders wenn das Highspeed Volumen eines Monates aufgebraucht ist. Dann ist diese Funktion sinnvoll, um weiterhin angenehm Webseiten betrachten zu k&ouml;nnen.</p>
                <p>5.4</p>
                <p>Die neuen Input Typen sind sinnvoll um die Eingabe des Nutzers, noch vor dem Versenden, validieren zu k&ouml;nnen, ob es sich dabei auch um korrekte Eingabe handelt.</p>
            </div>

            <div class="textbox" id="kapitelliteratur">
                <h1>Literaturverzeichnis</h1>
                <p>&nbsp;[DRJLIAMK98] Dave Raggett, Jenny Lam, Ian Alexander and Michael Kmiec: Raggett on HTML 4; 2. Auflage; Addison-Wesley Longman Publishing Co., Inc; Boston, MA, USA &copy;1998; <br /> ISBN:0-201-17805-2</p>
                <p>[SELFHTML19] SELFHTML e.V.; SELFHTML-Wiki<br /> &lt;<a href="https://wiki.selfhtml.org/" target="_blank">https://wiki.selfhtml.org/</a>&gt;</p>
                <p>[W3SCHOOL9] w3schools.com; W3Schools Online Web Tutorials <br /> &lt;<a href="https://www.w3schools.com/" target="_blank">https://www.w3schools.com/</a>&gt;</p>
                <p>[MC19] Mozilla Corporation: HTML: HyperText Markup Language<br /> &lt;<a href="https://developer.mozilla.org/de/docs/Web/HTML" target="_blank">https://developer.mozilla.org/de/docs/Web/HTML</a> &gt;</p>
                <p>[FE10] Dipl.-Math Frank Elsner: Einf&uuml;hrung in HTML und CSS; Osnabr&uuml;ck 2010<br /> &lt; <a href="http://www.home.uni-osnabrueck.de/elsner/Skripte/html.pdf" target="_blank">http://www.home.uni-osnabrueck.de/elsner/Skripte/html.pdf</a>&gt; (30.11.2018)</p>
                <p>[HTMLSEMINAR] HTML-Seminar.de: HTML: Block- und Inline-Elemente verstehen<br /> &lt; <a href="https://www.html-seminar.de/block-inline-elemente-verstehen.htm" target="_blank">https://www.html-seminar.de/block-inline-elemente-verstehen.htm</a>&gt;(30.11.2018)</p>
                <p>[FD19] Prof. Dr. Frank Dopatka: Webbasierte Systeme (WEB) 02a &ndash; Frontend-Technologien im Detail &ndash; HTML; Mannheim 2019;<br /> &lt;<a href="https://moodle.hs-mannheim.de/pluginfile.php/184333/mod_resource/content/0/WEB%20-%20V02a%20-%20Frontend-Technologien%20im%20Detail%20-%20HTML.pdf" target="_blank">https://moodle.hs-mannheim.de/pluginfile.php/184333/mod_resource/content/0/WEB%20-%20V02a%20-%20Frontend-Technologien%20im%20Detail%20-%20HTML.pdf</a>&gt;</p>
                <p>[HTML5GEO19] W3Schools.com: HTML5 Geolocation &lt;<a href="https://www.w3schools.com/html/html5_geolocation.asp" target="_blank">https://www.w3schools.com/html/html5_geolocation.asp</a>&gt;</p>
                <p>[W3LAG14] W3L AG: Offline Apps mit HTML5<br /> &lt;<a href="https://www.w3l.de/de/fileadmin/user_upload/Offline_Apps_mit_HTML5_2014.pdf" target="_blank">https://www.w3l.de/de/fileadmin/user_upload/Offline_Apps_mit_HTML5_2014.pdf</a>&gt;</p>
                <p>[PK19] Peter Kr&ouml;ner: Eine kleine Canvas-Einf&uuml;hrung<br /> &lt;<a href="https://www.peterkroener.de/eine-kleine-canvas-einfuehrung/" target="_blank">https://www.peterkroener.de/eine-kleine-canvas-einfuehrung/</a> &gt;</p>
            </div>

            <div class="textbox" id="kapiteltool">
                <h1>C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Verwendete Tools</h1>
                <p>[TEv36] Tryit Editor v3.6 &ndash; W3Schools<br /> &lt; <a href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml_basic" target="_blank">https://www.w3schools.com/html/tryit.asp?filename=tryhtml_basic</a>&gt;</p>
            </div>
            <?php require("footer.php")?>
            <script src="cookie.js"></script>
            </body>
        </html>
