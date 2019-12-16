<!DOCTYPE html>
<html lang="en">
<?php 
require("stylesheet_daniel.php");
$seitenname = "CSS 2";
require("header.php");
?>
    <body>
        <?php 
        $index = "";
        $grund = "";
        $html = "";
        $css = "";
        $css2 = "current";
        $javascript = "";
        $javascript2 = "";
        $jsp = "";
        $php = "";
        $nodejs = "";
        require("menu.php");
        ?>
    <div class="content-container">
        <h1>CSS</h1><br/>
		
		<h4 id="Inhalt">Links zu den Unterkapiteln</h4>
		<a href = #Kap1 style="color:white">1: Einleitung</a><br/>
		<a href = #Kap2 style="color:white">2: Die Idee der Cascading Style Sheets</a><br/>
		<a href = #Kap3 style="color:white">3: Integration in HTML</a><br/>
		<a href = #Kap4 style="color:white">4: Responsives Webdesign</a><br/>
		<a href = #Kap5 style="color:white">5: Regeln und Selektoren</a><br/>
		<a href = #Kap6 style="color:white">6: "ID" versus "Class"</a><br/>
		<a href = #Kap7 style="color:white">7: Grundlegende CSS-Elemente</a><br/>
		<a href = #Kap7.4 style="color:white">7.4: Das BOX-Modell</a><br/>
		<a href = #Kap8 style="color:white">8: Shorthand Eigenschaften</a><br/>
		<a href = #KapA style="color:white">A Lösungen zu den Aufgaben</a><br/>
		<a href = #KapB style="color:white">B Literaturverzeichnis</a><br/>
		<a href = #Ueb1 style="color:white">Übung01</a><br/>		
		<a href = #Ueb2 style="color:white">Übung02</a><br/>
		<a href = #Ueb3 style="color:white">Übung03</a><br/>
		<a href = #Ueb4 style="color:white">Übung04</a><br/>
		<a href = #Ueb5 style="color:white">Übung05</a><br/>
		

        <div class="textbox">
            <p>
			<h2 id="Kap1">1 Einleitung</h2>
Diese Seite soll eine Einführung in "Cascading Style Sheets" darstellen, im folgenden mit "CSS" 
abgekürzt. Erklärt werden die grundlegenden Ideen hinter CSS, das Zusammenwirken mit "Hypertext 
Markup Language", im folgenden mit HTML abgekürzt, sowie das Arbeiten mit CSS. Einige Beispiele 
sollen dabei helfen CSS zu verstehen. Empfehlenswert ist ein grundlegendes Verständnis von HTML.</br></br>

CSS-Befehle werden auf HTML-Elemente oder HTML-Selektoren angewandt. Damit sind zum Beispiel 
body, h1, p, ul, div, span und andere hoffentlich bereits bekannten Elemente gemeint.</br></br>
Die vorgestellten Befehle funktionieren im Zusammenspiel mit HTML 5. Bei niedrigeren Versionen besteht 
keine Garantie auf Funktionsfähigkeit.</br></br>
<h4>Tipp 1:</h4> Wenn man auf einer Internetseite auf einem beliebigen Element der Seite die rechte Maustaste klickt 
und im auftauchenden Menü den Befehl "Element untersuchen"(Firefox) oder "Untersuchen"(Chrome) 
anklickt, kann man sich die HTML- und CSS-Befehle nebeneinander anschauen. </br></br>
<h4>Tipp 2:</h4> Man kann CSS-Befehle sehr leicht in HTML-Dokumente einbinden oder CSS-Dateien leicht mit 
bestimmten Texteditoren erstellen und die Auswirkungen auf ein HTML-Dokument sehr schnell beobachten,
sofern man CSS per <link href="Name der Datei.css" rel="stylesheet"> einbindet. Die HTML- und CSS-
Dateien müssen dabei im selben Ordner sein.</br></br>
<h4>Tipp 3:</h4> Auf dieser Seite, kann man den eigenen CSS-Code hochladen und auf Fehler untersuchen.
 jigsaw.w3.org/css-validator/</br>
			
			
			</p>
        </div>
		
        <div class="textbox">
            <p>
			<h2 id="Kap2">2 Die Idee der Cascading Style Sheets</h2></br>
			
			<h3>Wozu ist CSS gut?</h3>
			
CSS legt Gestaltungsregeln für HTML-Seiten fest. Ziel war es die Webseitengestaltung von der Struktur zu 
trennen und einen einheitlichen Regelsatz zu schaffen, um Webseiten leichter gestalten zu können.</br></br>
Nach [Mül16, S.105] sind Stylesheets eine Sammlung von Formatvorlagen mit denen man die eingebauten 
Formatvorlagen der Browser überschreiben kann.</br></br>
In der Anfangszeit von HTML gab es kaum Gestaltungsmöglichkeiten. Die Webseiten waren auf Information
fokussiert. Mit dem Erscheinen der ersten Browser und der Verbreitung des Webs, stieg der Bedarf nach 
Gestaltung der Webseiten.
Einen Entwurf für CSS gab es bereits Anfang der 1990er Jahre, setzte sich aber erst Ende der 1990er Jahre 
durch [Mül16, S.35ff]. CSS wird bislang ständig weiterentwickelt. Unter großer Mitwirkung des "World 
Wide Web Consortium". Neue Standards werden allerdings nicht unbedingt komplett in allen Browsern 
umgesetzt.</br></br>
Ausgehend davon, dass HTML aus Kästen aufgebaut ist, kann man mit CSS jeden Aspekt dieser Kästen 
gestalten. Dies betrifft den Inhalt, mit Schrift und Hintergrund, die man nach Art, Farbe, Größe und Stil 
gestalten kann. Dies umfasst die Rahmen der Kästen und das Verhalten und die Position der Kästen 
untereinander.</br></br>
Mit der Verbreitung Netzzugangs auf andere Endgeräte als Pcs wurde auch die vernünftige Darstellung der 
Webseiten auf diesen Endgeräten wichtig. Dies wird später noch im Kapitel 4 Responsive Webdesign 
behandelt.</br></br>
<h4> Zusammenfassung:</h4>
• CSS dient dem Styling von Webseiten nicht der Struktur.</br>
• CSS ist eine Sammlung von Formatvorlagen</br></br>

 		<a href = #Inhalt style="color:white">Zurück zum Anfang</a><br/>

			</p>
        </div>
			
        <div class="textbox">
            <p>
			<h2 id="Kap3">3 Integration in HTML</h2></br>
			In diesem Kapitel werden verschiedene Möglichkeiten behandelt, wie man CSS-Befehle auf ein HTML-
Dokument anwenden kann, sowie die Auswertungsreihenfolge der Selektoren.</br></br>
			<h3> Integration mit einem einzelnen Element </h3>
			Beispiel: (Code funktioniert ohne das Zeichen &)</br>
			<& h1 style= "color: blue;"> Diese Überschrift wird blau. </h1></br>
			<img src="CSSimages/1.1 CSS-Integration.png" alt="CodeBeispiel" width="50%" height="50%" align="center"></br></br>

			Diese Integration ist nur ratsam, wenn man wenige Elemente in einfacher Weise stylen möchte, da es schnell 
unübersichtlich wird und die Übertragbarkeit auf andere HTML-Dokumente schwieriger ist.  </br></br>

<h3> Integration in ein HTML-Dokument als Block</h3>

Es besteht die Möglichkeit CSS innerhalb eines "Styling"-Blocks in dem HTML-Dokument zu schreiben.
Innerhalb von HTML-Klammern wird dabei style  geschrieben und innerhalb des so geschaffenen Blocks 
können mehrere Befehle hineingeschrieben werden.</br></br>

Beispiel:</br>
<& head></br>
&nbsp <& style></br>
&nbsp &nbsp  h1 { color: blue;}</br>
&nbsp <& /style></br>
<& /head></br></br>

Dies hat die gleichen Auswirkungen, wie der Befehl für das einzelne Element. Der CSS-Befehl wird hierbei 
bereits komplett im CSS-Format geschrieben.
Der Style-Block muss nicht im Header stehen. Bei umfangreichen Befehlen dient dies jedoch der 
Übersichtlichkeit.</br></br>

<h3> Integration in ein HTML-Dokument durch einen Verweis auf eine eigene Datei</h3>

Eine empfehlenswerte Methode ist es, eine eigene CSS-Datei zu erstellen und im HTML-Header per link 
href einzubinden. Dadurch ist die Trennung von Styling und Struktur komplett.</br></br>
Dadurch wird auch "Responsive Webdesign" leichter und wesentlich übersichtlicher. Es werden für jedes 
Endgerät eigene CSS-Dateien angelegt.</br></br>
Struktur der Einbindung:</br>
<&link href= "Pfad und/oder Name der CSS-Datei.css" rel="stylesheet" media ="screen" ></br></br>

Rel (Relation) beschreibt, dass die eingebundene CSS- Datei ein stylesheet zur Gestaltung ist. Media 
bezeichnet das Endgerät für das der Browser diese CSS-Datei nutzen soll.</br></br>
Es ist empfehlenswert, die verlinkte CSS-Datei so zu benennen, dass man sie einem HTML-Dokument 
zuordnen kann. </br></br>
Eine Erweiterung dieser Einbindungsart ist es, eine generelle CSS-Datei zu erstellen, in die man die anderen
CSS-Dateien importiert. Alle HTML-Dateien binden dann nur die zentrale CSS-Datei ein.</br></br>

Der Importbefehl in der CSS-Datei sieht folgendermaßen aus:</br></br>
@import url(Name der CSS-Datei) screen;</br></br>
Das optionale "Screen" spezifiziert das Medium für welches die jeweilige CSS-Datei genutzt werden soll.

<h3>Rangfolge der Einbindungsarten</h3></br>
Es kann passieren, dass sich CSS-Anweisungen wiedersprechen. In diesem Fall werden diese nach 
bestimmten Regeln ausgewertet. Sollte eine Auswertung mehrerer Regeln keine Reihenfolge feststellen 
können, wird die am weitesten unten stehende Regel ausgewählt.</br></br>
Das Hinzufügen von !important vor dem abschließenden Semikolon eines CSS-Befehls wird den 
betreffenden Befehl bevorzugen.</br></br>
Beispiel: p { color: blue !important; }</br></br>

Zur Verdeutlichung der Auswertungsregeln eignet sich die folgende Tabelle besonders:</br>
<img src="CSSimages/1.2-Punkteverteilung bei Selektoren.png" alt="CodeBeispiel" width="70%" height="70%" align="center"></br>
Punkteverteilung bei Selektoren [Mül16, S.137, Tab 8.2]</br></br>

Einfache Selektoren sind am niedrigsten bewertet. "ID" gekennzeichnete Elemente sind wichtiger als 
"Class"-Elemente. Einfache Selektoren mit einem "style"-Befehl innerhalb von HTML-Klammern erhalten 
die größte Wichtigkeit.</br></br>

<h4>Zusammenfassung:</h4>
Integration von CSS in HTML erfolgt durch:</br>
• Das Hinzufügen von Style zu einzelnen HTML-Elementen.</br>
• Schreiben von style-Blocks im HTML-Dokument.</br>
• Schreiben eigener CSS-Dateien mit Verlinkung in der HTML-Datei.</br></br>

<h4 id="Ueb1">Übung 01:</h4>
Öffnen Sie mit einem Editor eine HTML-Datei. Schreiben Sie einen beliebigen Text innerhalb der <p> 
Klammern. Öffnen Sie eine CSS-Datei. Verlinken Sie diese mit der HTML-Datei. Versuchen Sie nun die 
Farbe des Textes zu ändern.  Ändern sie zwei andere Textfarben mit den anderen Einbindungsmethoden.<br/><br/>

 		<a href = #Inhalt style="color:white">Zurück zum Anfang</a><br/>

	</p>
</div>

        <div class="textbox">
            <p>
			<h2 id="Kap4">4 Responsives Webdesign</h2>
			In diesem Kapitel wird die Idee des "Responsive Webdesign" vorgestellt und einige Grundlagen zur Gestaltung.</br></br>

			<h3>Die Idee des Responsive Webdesign</h3></br>
Die Idee des "Responsive Webdesign" ist es, die gleiche Webseite für verschiedene Endgeräte lesbar 
darzustellen. Dazu definiert man für jedes Endgerättyp eigene CSS-Regelsätze, die die Formatierung 
verändern. Elemente werden umpositioniert oder gegebenenfalls entfernt. Überschneidungen werden 
korrigiert. Bei manchen Webseiten kann man dies beobachten, wenn man das Browserfenster verkleinert.</br></br>

Auf dem folgenden Bild, sieht man eine Webseite, die auf mehreren Endgeräten durch "Responsive 
Webdesign" lesbar dargestellt wird und ihre Funktion, wie die Navleiste beibehält. 
In anderen Fällen kann es sein, dass sogar das Bild bei kleinen Endgeräten entfernt wird, um die Lesbarkeit 
zu steigern.</br></br>
<img src="CSSimages/2.1-Ein Quelltext auf versch. Endgeräten.png" alt="CodeBeispiel" width="70%" height="70%" align="center"></br>
Ein Quelltext auf verschiedenen Endgeräten [Mül16, S.33, Abb.1.4]</br></br>
			

<h3>Media-Typen und Media-Queries</h3></br>

In CSS sind einige Endgerät-Typen(Media Types) integriert. Diese sind zum Beispiel: all, handheld, print, 
screen, tv, projection und weitere.</br>
Zusätzlich dazu wurden auch media-queries eingeführt. Dadurch kann man bestimmte Abfragen an das 
Endgerät stellen, die erfüllt sein müssen, bevor eine bestimmte CSS-DAtei angewandt wird.</br>
Media  wird üblicherweise bei der Verlinkung einer CSS-Datei im HTML-Dokument mitgegeben. Dies 
geschieht mit dem Wort media mit dem Media-Typ innerhalb von Anführungszeichen.</br></br>

Beispiel:(Code funktioniert ohne das Zeichen &)</br>
<&link href="NamederDatei.css" rel="stylesheet" media="screen" /></br></br>

Über media-queries kann man eine Bedingung folgendermaßen einfügen.</br>
<&link href="NamederDatei.css" rel="stylesheet" media="screen and (max-device-width: 640px)" /></br></br>

Die Bedingung steht in runden Klammern und wird innerhalb der Anführungszeichen mit einem and mit 
dem Media-Typ verbunden.</br></br>

In diesem Fall kommt der Stylesheet nur zur Anwendung, sofern das Endgerät nicht mehr als 640px 
Bildschirmbreite hat. Mit  einem weiteren and kann man zusätzliche Bedingungen in neuen Klammern 
hinzufügen.</br></br>

Eine weitere Möglichkeit ist das Einfügen von Bedingungen in unsere CSS-Datei.</br></br>
Mit @media importiert man den Media-Typ und fügt mit dem "and" Bedingungen vor einen CSS-Befehlsblock in geschweiften Klammern.</br></br>
Beispiel:</br>
@media screen and (min-device-width: 640px) {  h1 { font-family: Verdana;}  }</br></br>
Auch die Verwendung einer zentralen CSS-Datei mit Verweisen auf untergeordneten CSS_DAteien 
funktioniert über @import.</br></br>
Beispiel:</br>
@import url("Beispiel.css") screen min-device-width: 640px;</br></br>

Einen erklärenden Link finden Sie auch hier (English):</br>
http://alistapart.com/article/responsive-web-design</br></br>

<h4>Zusammenfassung:</h4></br>
• Responsive Webdesign soll Webseiten auf verschiedenen Endgeräten lesbar machen.</br>
• Mit media bestimmt man das Endgerät für das der Browser das Stylesheet nutzen soll.</br>
• Media-Queries fügen Eigenschaften hinzu, die ein Endgerät erfüllen muss, bevor die folgenden 
CSS-Regeln genutzt werden.</br></br>


 		<a href = #Inhalt style="color:white">Zurück zum Anfang</a><br/>

			
			</p>
        </div>
			
		
        <div class="textbox">
            <p>
			<h2 id="Kap5">5 Regeln und Selektoren</h2></br></br>
			Hier werden der Bausatz eines CSS-Befehls vorgestellt, sowie die verschiedenen Möglichkeiten HTML-
Elemente anzusprechen.</br></br>

<h3>Die CSS-Regeln</h3></br>
			
	CSS-Befehle werden folgendermaßen geschrieben:</br></br>
Zuerst folgt die Auswahl des Html-Elements über einen Selektor (html, body, p, h1, ul,...).
Innerhalb geschweifter Klammern folgt die Befehlsauswahl, gefolgt von einem Doppelpunkt und der 
Wertzuweisung für diesen Befehl. Abgeschlossen wird dieser mit einem Semikolon und der schließenden 
geschweiften Klammer. Es können mehrere Befehle hintereinander stehen.</br></br>

Zur Verdeutlichung:</br></br>
Selektor { Befehl : Wertzuweisung ; }</br></br>

<h3>Selektoren</h3>
Was ist ein Selektor genau? Ein Selektor wählt aus, welche Teile einer HTML-Seite gestaltet werden.
Ein Selektor kann verschiedene Ebenen einer Seite ansprechen.</br></br>

<h4>Allgemeiner Selektor und Einzelselektoren</h4>
Ein Selektor für alle Elemente einer Seite ist  * . </br></br>
Beispiel Code:</br>
* { font-family: Arial; }  Mit diesem Code wird das Schriftformat für die ganze Seite auf Arial gestellt.</br></br>

Hat man mehrere Elemente gleichen Typs auf der Seite und ein Styling, dass für alle gelten soll, reicht es 
den Selektor für diesen Typ anzusprechen.</br></br>

Beispiel Code: (Code funktioniert ohne das Zeichen &)</br>
HTML</br>
<&h1>Ich bin bei Moe<&/h1></br>
<&h2> Dämlicher Flenders<&/h2></br>
<&p> Mmmmh, Donuts. Mmmmh, Donuts.Mmmmh, Donuts.Mmmmh, Donuts.Mmmmh, Donuts.<&/p></br>
<&h2> Dämlicher Flenders<&/h2></br>
<&p> Mmmmh, Donuts. Mmmmh, Donuts.Mmmmh, Donuts.Mmmmh, Donuts.Mmmmh, Donuts. <&/p></br></br>

CSS
h2 { background-color: grey; }</br>	
Auswirkungen:	</br>	
		<img src="CSSimages/3.2-Selektoren 1.png" alt="CodeBeispiel" width="60%" height="60%" align="center"></br>
	
Es wird der Hintergrund aller Überschriften vom Typ "h2" grau gefärbt.


<h4>ID und Class-Selektoren</h4>
Mittels  den Schlüsselworten "class" und "id" kann man HTML-Elementen Namen zuweisen und per Namen in 
CSS ansprechen.</br></br>

Dies geschieht durch die Auswahl eines Selektors in HTML mit den nachfolgenden Schlüsselworten "id" oder 
"class" in Verbindung mit einer Namenszuweisung in Anführungszeichen. </br>
Der Aufruf in CSS erfolgt mit einem . und dem Namen für "class" und einem # und dem gewählten Namen für 
"id". Anschließend folgen die geschweiften Klammern mit den Befehlen.

Beispiel: (Beispiele funktionieren ohne das Zeichen &)</br>
HTML</br>
<&h1 class="Überschrift"> Diese Überschriften sollen eine bestimmte Schriftart haben<&/h1>
<&p id="Sonderabsatz"> Dieser Absatz soll hervorgehoben werden <&/p></br></br>

CSS:</br>
.Überschrift { font-family: Arial; color: grey;} Alternative Schreibweise: h1.Überschrift { font-family: 
Arial;}</br>
#Sonderabsatz { font-weight: bold; color: red; }</br></br>

Auswirkungen:	</br>		
		<img src="CSSimages/3.1-ID und Class.png" alt="CodeBeispiel" width="60%" height="60%" align="center"></br></br>

<h4>Mehrere Einzelelemente und geschachtelte Elemente</h4>
Mehrere Einzelelemente kann man auch, per Komma getrennt, hintereinander notieren, statt zweimal 
denselben Befehl für unterschiedliche Elemente zu notieren. </br></br>

Beispiel:</br>
CSS</br>
h1, h2 { font-family: Arial; color: grey;} </br></br>

Geschachtelte Elemente kann man durch hintereinanderschreiben ansprechen. Allerdings ohne Komma.</br></br>

Beispiel:</br>
ul li {font-style: italian;}</br></br>
Dadurch spricht man nur die Listenelemente in ungeordneten Listen an.</br></br>

<h4>Zusammenfassung:</h4></br>
• Mit Selektoren wählt man die Teile der Webseite aus, die man gestalten möchte.</br>
• Man spart Arbeit, wenn man Gruppen von Selektoren bildet, für die dasselbe Design gelten soll.</br>
• Mit id und class kann man Selektoren Namen geben</br></br>

<h4 id="Ueb2">Übung 02:</h4></br>
Erstellen Sie eine ungeordnete Liste und eine geordnete Liste mit beliebigem Text in einigen 
Listenelementen. Ändern Sie nur den Text der Listenelemente einer der Listen.			</br></br>
			 		
					<a href = #Inhalt style="color:white">Zurück zum Anfang</a><br/>

			</p>
        </div>
        
		<div class="textbox">
            <p>
			<h2 id="Kap6">6 "ID" versus "Class"</h2></br>
			
In diesem Kapitel wird beschrieben, wann man am besten "class" einsetzt, und wann "id".</br></br>

Das Prinzip der Namensvergebung mit "id" und "class" haben Sie kennengelernt. Doch wann nutzt man was am 
besten?</br></br>

ID ist kurz für Identität. Dieser Selektor darf pro Seite nur einmal vorkommen. Sinnvoll ist dies also beim 
Styling einzelner Elemente, wie besonderen Texte oder Hyperlinks.</br></br>

Mit class  kann man mehreren Elementen denselben Namen zuweisen und so Gruppen gestalten.</br></br>
Beispiel:</br>
Html-Dokument:</br>
<&h3 class="Text2">Überschrift<&/h3></br>
<&p id="Text1">Textausführung<&/p></br>
<&p class="Text2">Textausführung<&/p></br>

Css-Dokument:</br>
.Text2 { Stylinganweisung; }</br>
#Text1 { Stylinganweisung; }</br></br>

Die Stylinganweisung für "Text2" betrifft nun die beiden Elemente, die mit diesem Namen gekennzeichnet 
sind. Diese Anweisung ist beliebig erweiterbar.</br></br>

Es empfielt sich Elemente nach deren Bedeutung zu benennen, um die Übersicht zu wahren.</br></br>

<h4>Weitere Funktion von ID:</h4>
Mit einer Einbindung in Hyperlinks kann id auch zur Navigation genutzt werden.</br></br>

Beispiel:</br>
<&a href = "#Text1> Springt zu der entsprechenden Stelle der Id auf derselben Seite<&/a></br></br>
<&a href="Seite2.html#Text2 auf einer anderen Seite>Springt zur id "Text2" auf Seite2.html<&/a></br></br>

<h4>Zusammenfassung:</h4>
• Id nutzt man zum Design einzelner Elemente.</br>
• Mit class erstellt man Gruppen von Elementen.</br></br>

<h4 id="Ueb3">Übung03:</h4>
Erstellen Sie zwei Links zu zwei Ids und wechseln Sie zwischen beiden Elementen.</br></br>
		
 		<a href = #Inhalt style="color:white">Zurück zum Anfang</a><br/>
		
			</p>
        </div>
		
			
		<div class="textbox">
            <p>
			<h2 id="Kap7">7 Grundlegende CSS-Elemente</h2></br>

			In diesem Kapitel sollen die grundlegenden CSS-Elemente vorgestellt werden. </br></br>
			
Stellen Sie sich ein HTML-Element als einen Kasten vor, den Sie gestalten wollen. Sie können den 
Kasteninhalt gestalten mit Schriften, Farben und Abständen zum Rahmen. Die Gestaltung des Rahmens ist 
möglich, die Position der Kästen auf der Webseite und deren Verhalten untereinander.</br></br>

<h3>Größeneinheiten für die Abstände und Größen bei Schriften, Kästen und Bildern</h3>
Eine Html-Seite hat durch einen Browser bereits Grundeinstellungen zur Darstellung, die Schriftgröße und 
Zeilenabstände betreffen, die Kastengröße und Abstände. </br></br>
Zur eigenen Einstellung dieser Werte gibt es verschiedene Möglichkeiten.</br></br>

"Absolute" Einheiten, deren Größe unabhängig von der Auflösung immer gleich bleibt, wie zum Beispiel 
Zentimeter(cm), Inch(in), oder Punkt(pt). Diese Werte werden vor allem beim Drucken genutzt und sind 
nicht für Bildschrimdarstellungen geeignet.</br></br>

"Relative" Einheiten, welche je nach Bezug auf ein Element die Größe ändern. Relative Einheiten eignen sich 
sehr gut zur Darstellung auf unterschiedlichen Endgeräten. </br></br>

"Relative Einheiten":
Die Einheit Pixel (px) ist relativ zur Auflösung auf dem Endgerät. Mit zunehmender Auflösung werden die 
Pixel kleiner. Bei einer Auflösung von 1024*768 gibt es bereits 786432 Pixel auf dem Monitor.</br></br>

"Em" ist eine Einheit, die sich relativ zur eingestellten Schriftgröße ändert. Dies bezieht sich auf die 
Schriftgröße der Elterneinheit des Elements welches man ändert. Im Boxmodell bezieht sich Em auf die 
Schriftgröße der Box, deren Eigenschaften man ändert. </br>
Die Schriftgröße der Elternbox wird dabei mit 1em bewertet. Möchte man die Schrift eines Unterelements 
kleiner gestalten könnte man 0.6em schreiben.</br></br>

"Rem" funktioniert wie Em, bezieht sich jedoch auf die Grundeinstellung des Html – Elements.</br></br>

Das Prozentzeichen(%) dient als weitere Möglichkeit der Einstellung und bezieht sich auf das jeweilig 
umgebende Elternelement.</br></br>
Bei der Auswahl der Maßeinheit ist darauf zu achten, dass zwischen Zahlenwert und Maßeinheit KEIN Leerzeichen steht.</br></br>

Beispiel:</br>
HTML</br>
<&h1>Ich bin bei Moe<&/h1></br>
<&h2> Dämlicher Flenders<&/h2></br>
<&p> Mmmmh, Donuts. Mmmmh, Donuts.Mmmmh, Donuts.Mmmmh, Donuts.Mmmmh, Donuts.<&/p></br></br>

CSS</br>
h2 { background-color: yellow; width: 10%; }</br>
p { background-color: grey; width: 300px; height: 100px;}</br>

Auswirkungen:</br>
	<img src="CSSimages/4.1-Auswirkungen von Größeneinheiten auf die Darstellung.png" alt="CodeBeispiel" width="60%" height="60%" align="center"></br></br>
	
Mit dem obigen Code wird die Hintergrundfarbe des ersten Elements auf 10% des umgebenden Elements 
gestaucht, welches body ist. Die Schrift ist nicht davon betroffen, da ansonsten die Worte gespalten werden 
müssten.</br>
Mit der zweiten Anweisung wird der Kasten für die Donuts auf 300px Breite und 100px Höhe erweitert. Es 
stehen nicht mehr Donuts in einer Reihe, da zwischen den Worten teilweise Leerzeichen fehlen und 
zusammenhängende Wörter nicht getrennt werden.</br></br>

<h3>Gestaltung der Schrift (Wichtigste Größen)</h3>
Mit CSS hat man verschiedene Möglichkeiten die Schrift zu gestalten. Eine Auswahl der wichtigsten folgt:</br></br>

Die Anweisung font-family regelt die Schriftart. Mehrere Schriftarten hintereinander zeigen dem Browser, 
welche Schrift er verwenden soll, sollte eine Schriftart nicht zum Repertoire des Browsers gehören. 
Bei mehrteiligen Namen muss dieser in Anführungszeichen gesetzt werden.</br></br>

Beispiel:  p { font-family: Verdana, "Times New Roman"; }</br></br>

Der Ausdruck font-size stellt die Schriftgröße ein. Standard bei Browsern ist oft 16px. Von einer 
Standardeinstellung des Browser ausgehend, kann man mit % - Werten arbeiten.</br></br>
Mit font-style stellt man die Schriftlage ein. Typische Befehle sind dabei italic für kursive Schreibweise und 
oblique  für eine schräge Schreibweise. Normal ist die übliche Grundeinstellung.</br></br>
Font-weight stellt die Dicke der Schrift ein. Bold bedeutet fette Schrift, bolder die fetteste Darstellung. 
Lighter zeigt eine dünnere Schrift.</br></br>
Die Schriftfarbe regelt color. Es gibt mehrere Auswahlmöglichkeiten der Farbwahl.</br></br>

Möchte man Text unterstreichen, durchstreichen, Unterstreichung entfernen oder den Text blinken lassen, so 
nutzt man text-decoration. Die zugehörigen Befehle sind dabei underline, line-through, none und blink.</br></br>
Durch text-align wird die Textausrichtung eingestellt. Übliche Befehle sind dabei left, center und right.</br></br>
Die Abstände zwischen Zeilen, Worten und Buchstaben können durch line-height, word-spacing und letter-
spacing in Verbindung mit numerischen Werten eingetellt werden.</br></br>

Beispiel:</br>
HTML</br>
<&h2> Dämlicher Flenders<&/h2></br>
<&p> Mmmmh, Donuts. Mmmmh, Donuts.Mmmmh, Donuts.Mmmmh, Donuts.Mmmmh, Donuts.<&/p></br></br>

CSS</br>
h2 { font-size: 80%; font-style: italic; text-decoration: underline; }</br>
p { text-align: right; line-height: 35px;}</br></br>

Auswirkungen:		</br>
<img src="CSSimages/4.2-Einige Schriftänderungen.png" alt="CodeBeispiel" width="60%" height="60%" align="center"></br></br>
	
Die Überschrift h2 wurde verkleinert und unterstrichen. Der Zeilenabstand zwischen den Donuts wurde 
vergrößert und der Text an den rechten Rand des Fensters geschoben.</br></br>

<h4>Definition von Farben:</h4></br>
Die Hauptfarben Rot, Grün und Blau werden in unterschiedlichen Anteilen gemischt, um alle Farben 
darstellen zu können.</br></br>
Die Farbauswahl erfolgt durch Textauswahl, durch einen # mit nachfolgenden Hexadezimalwerten, durch 
das Schlüsselwort rgb(RotGrünBlau) in Verbindung mit drei geklammerten Zahlen von 0 bis 255 für jede 
Farbe, oder  drei Prozentwerten.</br></br>
Für eine bestimmte Farbauswahl kann man im Internet auf Farbpaletten zurückgreifen.
Link zu Farbpaletten:
https://wiki.selfhtml.org/wiki/Grafik/Farbpaletten</br></br>

Beispiel:</br>
body { background-color: white,  #ffffff,  rgb(255,255,255), rgb(100%,100%,100%) ; }</br></br>
 
In jedem Fall ist die gewählte Farbe weiß.</br></br>

<h4>Zusammenfassung:</h4></br>
• Es gibt absolute und relative Größen, die auf viele HTML-Elemente anwendbar sind.</br>
• Relative Größen beziehen sich auf das umgebende Elternelement.</br>
• Schriften lassen sich auf vielfältige Weise ändern.</br>
• Farben lassen sich auf unterschiedliche Arten ändern.</br></br>

 		<a href = #Inhalt style="color:white">Zurück zum Anfang</a><br/>


<h3 id="Kap7.4">Das BOX-Modell</h3>
In diesem Kapitel wird das "Box-Modell" erklärt. HTML-Elemente sind Kästen. Diese stehen in Beziehung 
zueinander und können in verschiedener Weise verändert werden. Dies geschiehtdurch Schlüsselworte und 
Wertzuweisungen. </br></br>
Um den Inhalt des Kastens kann man drei Bereiche gestalten: Die Polsterung (padding), die Grenze 
(border) und den Außenabstand(margin).  Weist man diesen Selektoren Werte zu, so ändern diese alle vier 
Seiten der Box. Es besteht die Möglichkeit sich einzeln auf jede Seite der Kästen zu beziehen. 
Das geschieht durch die Bereichsauswahl in Verbindung mit top, right, bottom und left.
Die Breite und Höhe kann man mit width und height mit den bekannten Wertzuweisung steuern.</br></br>
Padding  liegt dabei um den Inhalt und beschreibt der Abstand des Inhalts zur border. Um die Grenze  liegt  
margin, wodurch der Abstand des Kastens zu anderen Kästen beschrieben wird.</br></br>
Ohne Angabe von Werten sind padding, border und margin so breit und hoch, wie der Inhaltsbereich.</br></br>
Diese Seite zeigt ein interaktives Box-Modell, an dem man die Auswirkungen der Einstellungen beobachten 
kann:</br>
codepen.io/carolineartz/full/ogVXZj</br></br>

Zur Verdeutlichung des Box-Modells folgt eine Abbildung:</br>
<img src="CSSimages/4.3-Das Box-Modell.png" alt="CodeBeispiel" width="60%" height="60%" align="center"></br>
Das Box-Modell [Mül16, S.147, Abb.9.1]</br></br>


Width und height beziehen sich nur auf den Inhaltsbereich. Mit max- und min-height/width kann man 
Höhe und Breite auch Beschränkungen auferlegen.</br></br>
Möchte man die Gesamtbreite berechnen muss man noch paddin, border und  margin dazurechnen.</br></br>

<h4>Die Posterung(Padding):</h4>
Padding regelt den Abstand von Inhalt und border.
Mit padding  und Wertzuweisungen allein kann man alle Seiten gleichzeitig verändern.
Die einzelnen Seiten kann man mit padding-top für die Oberseite, padding-right für die rechte Seite, 
padding-left für die linke Seite und padding-bottom für die Unterseite ansteuern. 
Hat ein Element innerhalb von border eine bestimmte Hintergrundfarbe, so beeinhaltet dies Inhalt und 
padding. Die Farbe kann man mit dem Befehl background-color bestimmen.</br></br>

<h4>Der Rahmen(Border): </h4>
Border folgt auf padding und stellt die Grenze von Innen- und  Außenbereich dar. 
Wie bei padding  folgt Ansteuerung der einzelnen Elemente bei border mit den Zusätzen -top, -right, -left 
und -bottom.</br></br>
Die Größensteuerung erfolgt wieder mit width und height. Mit dem Befehl color erfolgt die Farbeinstellung
Der Zusatz -style ermöglicht die Einstellung des Rahmens von border.</br></br>
Wertzuweisungen für border-style sind zum Beispiel solid, dashed, double, inset, outset. Jede Seite ist auch 
einzeln einstellbar.</br></br>

Beispiel:</br>
HTML </br>
<&p> Mmmmh, Donuts. Mmmmh, Donuts.Mmmmh, Donuts.Mmmmh, Donuts.Mmmmh, Donuts.<&/p></br></br>

CSS</br>
p { border-style: solid dotted; border-width: 5px; border-color: red; padding: 10px; }  </br></br>

Auswirkungen:</br>
<img src="CSSimages/4.4-Border und Padding.png" alt="CodeBeispiel" width="60%" height="60%" align="center"></br></br>

In diesem Code werden mit einer Anweisung gepunktete und solide Linien in den Rahmen eingebaut. Das 
padding ist zwar transparent, vergrößert hier aber bereits den Abstand von Inhalt und Rahmen. Auffällig ist 
auch, dass die Box in der Grundeinstellung, die gesamte Breite der Seite einnimmt.</br></br>
Mit border-radius in Verbindung mit einem Zahlenwert in Pixeln, kann man die Ecken einer Box abrunden.</br></br>

Beispiel:</br>
p{ border-style: solid; border-width: 5px; border-color: red; border-radius: 20px; }</br></br>

Auswirkungen:</br>
<img src="CSSimages/4.5-Border-Radius.png" alt="CodeBeispiel" width="60%" height="60%" align="center"></br>
Hier erkennt man deutlich die Kantenrundung durch border-radius.</br></br>

<h4>Der Außenbereich(Margin):</h4>
Margin beschreibt den Außenabstand zwischen den Elementen und kann, wie padding, verändert werden.</br></br>
Bei  margin existiert allerdings eine Sonderbedingung namens "collapsing margin". Dies bedeutet, dass 
wenn sich zwei Elementen mit ihren vertikalen Außenbereichen berühren, nur die größere Margin verbleibt.
Dieser Umstand gilt für Elemente derselben Ebene, aber auch für ein Element und dessen Elternelement. 
Dies ist unbedingt zu beachten. Auf der horizontalen Ebene gibt es diese Eigenschaft jedoch nicht.
Umgehen kann man dies auf der Element-Elternelementebene, indem man zum Beispiel mit einer Anpassung
am padding oder border dafür sorgt, dass sich die Margins nicht mehr berühren.</br></br>

Beispiel  für "collapsing margin":</br>
CSS</br>
h2 { background-color: red; margin: 50px; }</br>
p{ background-color: grey; margin: 0px;}</br></br>

Auswirkung:</br>
<img src="CSSimages/4.6-Collapsing Margins 1.png" alt="CodeBeispiel" width="60%" height="60%" align="center"></br>
Der Abstand zwischen diesen Elementen(gleiche Ebene) beträgt 50px.</br></br>

CSS</br>
h2 { background-color: red; margin: 50px; }</br>
p{ background-color: grey; margin: 49px;}</br></br>

Auswirkungen:</br>
<img src="CSSimages/4.7-Collapsing Margins 2.png" alt="CodeBeispiel" width="60%" height="60%" align="center"></br>
Der Abstand bleibt gleich, trotz, in Summe, einem fast doppelten Wert für margin.</br></br>

Einen Artikel zu "collapsing margin" gibts über diesen Link:
reference.sitepoint.com/css/collapsingmargins</br></br>

<h4>Einschränkungen:</h4>
Einige Elemente haben keine Breite, Höhe, margin-top und margin-bottom. Dies betrifft alle "Inline"-
Elemente, wie: button, input, a, img, span und einige andere. Abgesehen davon sind diese ebenso 
veränderbar.</br></br>
"Inline"-Elemente nehmen nur so viel Platz in Anspruch, wie der Inhalt benötigt. "Normale" Kästen sind so 
breit wie die ganze Seite.</br></br>

Beispiel:</br>
<img src="CSSimages/4.8-Inline vs Block.png" alt="CodeBeispiel" width="60%" height="60%" align="center"></br></br>

<h4>Zusammenfassung:</h4>
Eine Box besteht aus: Inhaltsbereich, padding, border und margin</br></br>
Jede Seite kann einzeln angesprochen werden mit -top, -right, -left, -bottom.</br></br>
Width und height mit Wertzuweisung regeln die Höhe und Breite. </br></br>

<h4 id="Ueb4">Übung 4: </h4>
Erstellen Sie vier verschiedene Rahmen um einen Text. Nutzen Sie color und style.</br></br>
 

 <h3>Pseudoklassen</h3>
Hyperlinks können die Farbe ändern, je nachdem, ob man sie angeklickt hat oder nicht. Dies bewirken die 
Pseudoklassen.</br></br>
Kontruiert werden diese mit dem einem Doppelpunkt gefolgt von dem benötigten Schlüsselwort. In der 
Regel wird der Link farblich verändert.</br></br>

Beispiel:</br>
a:link {color: green;} a:visited{color:red;} </br></br>

Dies bewirkt, dass ein Link, der noch nicht besucht wurde grün gefärbt ist, während ein besuchter Link sich 
rot färbt.</br></br>

Weitere Möglichkeiten sind: a:hover, die Veränderung erscheint hier beim Schweben über den Link; 
a:focus, welcher den Link beim Ansteuern durch die "Tab"-Taste ändert und  a:active, welcher den Link 
beim draufklicken ändert.</br>
Änderungen beschränken sich nicht auf Farben, wenngleich diese am sinnvollsten sind.</br></br>


<h3>Nutzung von display: inline</h3>
Mit diesem Kommando ist es möglich Listenelemente, die untereinander stehen, nebeneinander 
auszurichten. So erstellt man zum Beispiel horizontale Navigationsleisten in Verbindung mit einer 
Verlinkung der Listen.</br></br>

Beispiel: </br>
li { display: inline; } </br>
Dieses Kommando ordnet alle Listenelemente horizontal.</br></br>


<h3>Tabellengestaltung</h3>
Auch Tabellen sind durch die Kommandos des Box-Modells gestaltbar. Ein für für die Tabelle spezifischer 
Befehl ist border-collapse. Dies formatiert die Rahmen zwischen den einzelnen Zellen.
Collapse baut eine Tabelle ohne Lücken, separate erzeugt Zwischenräume, die der Lesbarkeit dienen 
können. Border-spacing in Verbindung mit einem Zahlenwert verändert die Größe der Zwischenräume.
Ander als beim Box-Modell, werden bei Tabelle durch width  und height auch die Rahmenlinien erfasst.</br></br>

<h3>Einbindung von Bildern als Hintergrund über CSS</h3>
Mit <h4>background-image</h4> : url(Verzeichnis des Bildes); können Bilder als Hintergrund über CSS verwendet 
werden.</br></br>
Weitere Einstellungsmöglichkeiten betreffen die Wiederholung der Hintergrundgrafik, sofern die Grafik 
kleiner als der verfügbare Platz ist.</br></br>
Der Befehl dazu lautet background-repeat mit den Wertzuweisungen  repeat, no-repeat, repeat-y und 
repeat-x. Die letzten beiden Anweisungen beschränken eine Wiederholung auf die y- oder die x-Achse.</br></br>

Beispiel:</br>
body { background-image: url(hintergrund.png); background-repeat: repeat; }</br></br>

Zur <h4>Positionierung</h4> der Hintergrundgrafik wird background-position verwendet mit den Zuweisungen top, 
right, bottom, left und einer Kombination aus diesen, wie left top, right bottom. 
Zusaätzlich dazu kann man noch Zahlenwerte in Pixel oder Prozent angeben. Das Hintergrundbild 
positioniert sich dann abhängig vom Ausgangspunkt den man wählt. Standardgemäß beginnt ein Hintergrund
am linken oberen Rand. Der erste Zahlenwert ändert die horizontale, der zweite die vertikale Position.</br></br>

Beispiel:</br> 
.Bild { background-position: left 100px top 100px; }</br></br>

In dem Beispiel befindet sich das Hintergrundbild 100 Pixel vom linken und oberen Rand des Fensters 
entfernt. </br></br>

Zur weiteren Erklärung mit Beispiel, sehen Sie auch auf dieser Webseite nach:
http://tinyurl.com/selfhtml-background-position</br></br>

Die <h4>Fixierung (background-attachment)</h4> bestimmt das Verhalten der Hintergrundgrafik beim scrollen.
Mit dem Zusatz fixed bleibt die Hintergrundgrafik fixiert. Standardgemäß ist  scroll  eingestellt, wodurch die
Hintergrundgrafik mit dem Sichtfenster wandert.</br></br>

<h4>Zusammenfassung:</h4>
• Links, Tabellen und Hintergrundbilder können flexibel gestaltet werden.</br></br>

<h4 id="Ueb5">Übung 5:</h4>
Erstellen Sie eine eigene Bilddatei mit einem HTML-Element, border und background-color.
Erstellen Sie zunächst ein Quadrat in Farbe. Klicken Sie dann unter Firefox mit der rechten Maustaste auf 
den Browser und dann auf "Bildschirmfoto aufnehmen". Markieren Sie das Quadrat, speichern Sie dieses als 
"png". Importieren Sie die Datei in CSS und sorgen Sie mit "fixed" für einen coolen Hintergrundeffekt. Das 
Bild sollte rechts unten anfangen.<br/><br/>

 		<a href = #Inhalt style="color:white">Zurück zum Anfang</a><br/>
</p>
</div>


<div class="textbox">
            <p>

<h2 id="Kap8">8 Shorthand Eigenschaften</h2></br>
Shorthand oder Kurzschreibweise beschreibt die Möglichkeit in CSS Befehle kürzer zu fassen.</br></br>

<h3>Shorthand für das Box-Modell</h3>
Soll das padding einer Box auf allen Seiten denselben Abstand haben, so muss man nicht jede Seite einzeln 
ansprechen (mit padding-top: 10px,  padding-left: 10px ....). Es genügt nur das allgemeine Schlüsselwort mit 
einem Wert.</br></br>

Beispiel:</br>
h1 { padding: 10px;}</br></br>

Dies gilt ebenso für border, border-style und margin. </br></br>

Wenn sich nur eine Seite von den anderen unterscheiden soll, nutzt man zunächst den allgemeinen Befehl, 
gefolgt mit der Seite, die man ändern möchte.</br></br>

Beispiel:</br>
CSS</br>
h1 { padding: 20px; padding-bottom 0; }</br></br>
Hier ist die Reihenfolge wichtig. In diesem Fall überschreibt der zweite Wert den bottom-Wert aus der ersten 
Anweisung.</br></br>
Möchte man für alle vier Seiten unterschiedliche Werte einstellen so kann man das allgemeine padding 
auswählen mit vier Zahlenwerten. Diese werden dann im Uhrzeigersinn von top beginnend ausgewertet.</br></br>

Beispiel:</br>
h1 { padding: 10px, 20px, 30px, 40px;}</br></br>
Vier Werte schreiben mit einem padding Befehl.</br></br>

Wenn jeweils oben und unten, sowie links und rechts dieselben Werte haben sollen, so genügt das schreiben 
des allgemeinen Befehls mit zwei Werten.</br></br>
Beispiel:</br>
h1 { padding: 20px 40px;}</br></br>

Bei unterschiedlichen Werten für oben und unten, aber gleichen Werten für links und rechts genügen drei 
Werte.</br></br>
Beispiel:</br>
h1 { padding: 10px, 30px, 50px;}</br></br>

Appliziert man diese Möglichkeiten auf border-radius ist zu beachten, dass die Reihenfolge oben links 
beginnt und im Uhrzeigersinn verläuft.</br></br>

Eine weitere Kurzschreibweise ist aber auch:</br>
p {border: 5px dotted red;} Dies weist dem Element border-width, border-style und border-color zu.</br></br>

<h3>Shorthand für Schriften und Hintergrundbilder</h3>
Kurzschreibweisen können anfangs etwas unübersichtlich wirken, wenn diese mehr als eine Eigenschaft 
betreffen.</br></br>
Beispiel:</br>
ul { background: grey, url(Beispiel.png) fixed repeat left top }</br></br>

Hier wird zunächst die Hintergrundfarbe festgelegt, bevor ein Hintergrundbild importiert wird, bevor einige 
Eigenschaften des Bildes zur Position und Wiederholung festgelegt werden.</br></br>

<h4>Zusammenfassung:</h4>
• Kurzschreibweisen erleichtern das Leben, sofern man sie einsetzen kann.</br></br>


			</p>
        </div>
		
		<div class="textbox">
            <p>
			<h2 id="KapA">A Lösungen zu den Aufgaben</h2></br></br>

			Übung 01: 1. p { color: red;} 2. <&style> p { color: blue;} <&/style> 3. <&p style="color:blue;">Text<&/p></br></br>
			
Übung 02:<&ul> <&li>Text <&/li> <&/ul></br>
		<&ol> <&li> Text <&/li> <&/ol></br>
ul li { color: red;}</br></br>

Übung 03: <&h1 id="Anfang">Ich bin bei Moe<&/h1> <&a href="#Ende">Der Tag ist gelaufen<&/a> </br>
<&ol id="Ende"> <&li>Dämlicher,Flenders<&/li> <&a href="#Anfang">Ein neuer Tag beginnt.<&/a> <&/ol></br></br>

Übung 04: p { border-color: red, green, blue, black; border-width: 5px; border-style: solid, dotted, inset, dashed; }</br></br>

Übung 05: p { border-color: red, green, blue, black; border-width: 5px; border-style: solid, dotted, inset, dashed; width: 
200px; height: 200px; }</br>
Rechte Maustaste klicken, als "png" speichern. </br>
p { url(background.png); background-attachment: fixed;  background-position: right bottom; }</br></br>

</p>
</div>

<div class="textbox">
            <p>
			<h2 id="KapB">B Literaturverzeichnis</h2>
			[Mül16]P.Müller: Einstieg in CSS; 2. Auflage, Rheinwerk Verlag; Bonn; 2016; ISBN 978-3-8362-3684-3</br>
https://selfhtml.org/</br>
https://www.w3schools.com/css/



</p>
        </div>
    </div>
    <?php require("footer.php")?>
<script src="cookie.js"></script>

</body>
</html>
