<!DOCTYPE html>
<html lang="en">
<?php 
require("stylesheet_daniel.php");
$seitenname = "JavaScript";
require("header.php");
?>
    <body>
        <?php 
        $index = "";
        $grund = "";
        $html = "";
        $css = "";
        $css2 = "";
        $javascript = "current";
        $javascript2 = "";
        $jsp = "";
        $php = "";
        $nodejs = "";
        require("menu.php");
        ?>
    <!-- header image: https://pixabay.com/photos/server-space-the-server-room-dark-2160321/ -->
  <link rel="stylesheet" href="stylesheet.css" type="text/css">
  <style>
  	.content {
  		padding-top: 30px;
  		padding-bottom: 30px;
  	}
  	code {
  		padding:30px;
  		font-family: "Bahnschrift";

  	}
  	.codebox {
  		color: #F5F5F5;
  		padding:10px;
      	padding-left: 25px;
  		background-color: #282828;
  	}
  	.goals {
  		padding-top: 30px;
  		padding-bottom: 30px;
  		font-style:italic;
  	}
  	.goals li {
  		margin-left: 30px;
  	}
  	.goals ul {
  		margin:10px;
  	}
  	.absatz {
  		padding-top:5px;
  		padding-bottom: 5px;
  	}
  	.title {
  		color:#AACCFF;
  		padding-top: 130px;
    		margin-top: -130px;
  	}
  	.Iv {
  		color:white;
  	}
	.Iv:hover {
		color:#AACCFF;
	  }
  </style>
  <meta charset="UTF-8">
  <title>Javascript</title>
    <script src="scroll+navicon.js"></script>
    <div class="content-container">
        <h1 style="font-size: 50px;padding-bottom: 50px">Die Sprache JavaScript im Detail</h1>
        <div class="textbox">
        	<h1 class="title">Inhaltsverzeichnis</h1>
        	<div class="content">
        		<a class="Iv" href=#kapitel1>1&emsp;JavaScript Einführung</a><br>
            	&emsp;<a class="Iv" href=#kapitel1.1>1.1&emsp;Was ist JavaScript?</a><br>
            	&emsp;<a class="Iv" href=#kapitel1Zsm>Zusammenfassung</a><br>
            	&emsp;<a class="Iv" href=#kapitel1Aufg>Aufgaben zur Selbstüberprüfung</a><br>
            	<a class="Iv" href=#kapitel2>2&emsp;Integration in HTML</a><br>
            	&emsp;<a class="Iv" href=#kapitel2.1>2.1&emsp;Grundstruktur eines HTML Programms</a><br>
            	&emsp;<a class="Iv" href=#kapitel2.2>2.2&emsp;Einbettung von JavaScript in ein HTML Programm</a><br>
            	&emsp;<a class="Iv" href=#kapitel2Zsm>Zusammenfassung</a><br>
            	&emsp;<a class="Iv" href=#kapitel2Aufg>Aufgaben zur Selbstüberprüfung</a><br>
            	<a class="Iv" href=#kapitel3>3&emsp;Variablen, Datentypen und Hoisting</a><br>
            	&emsp;<a class="Iv" href=#kapitel3.1>3.1&emsp;Variablen Deklaration</a><br>
            	&emsp;<a class="Iv" href=#kapitel3.2>3.2&emsp;Variablen in lokalen Code-Blöcken</a><br>
            	&emsp;<a class="Iv" href=#kapitel3.3>3.3&emsp;Konstante Variablen</a><br>
            	&emsp;<a class="Iv" href=#kapitel3.4>3.4&emsp;Datentypen</a><br>
            	&emsp;<a class="Iv" href=#kapitel3.5>3.5&emsp;Hoisting</a><br>
            	&emsp;<a class="Iv" href=#kapitel3Zsm>Zusammenfassung</a><br>
            	&emsp;<a class="Iv" href=#kapitel3Aufg>Aufgaben zur Selbstüberprüfung</a><br>
            	<a class="Iv" href=#kapitel4>4&emsp;Typumwandlung, Truthiness und Scope</a><br>
            	&emsp;<a class="Iv" href=#kapitel4.1>4.1&emsp;Vergleiche und Typumwandlung</a><br>
            	&emsp;<a class="Iv" href=#kapitel4.2>4.2&emsp;Truthiness</a><br>
            	&emsp;<a class="Iv" href=#kapitel4.3>4.3&emsp;Scope von Variablen</a><br>
            	&emsp;<a class="Iv" href=#kapitel4Zsm>Zusammenfassung</a><br>
            	&emsp;<a class="Iv" href=#kapitel4Aufg>Aufgaben zur Selbstüberprüfung</a><br>
            	<a class="Iv" href=#kapitel5>5&emsp;Verzweigungen und Schleifen</a><br>
            	&emsp;<a class="Iv" href=#kapitel5.1>5.1&emsp;Verzweigungen</a><br>
            	&emsp;<a class="Iv" href=#kapitel5.2>5.2&emsp;Schleifen</a><br>
            	&emsp;<a class="Iv" href=#kapitel5Zsm>Zusammenfassung</a><br>
            	&emsp;<a class="Iv" href=#kapitel5Aufg>Aufgaben zur Selbstüberprüfung</a><br>
            	<a class="Iv" href=#kapitel6>6&emsp;Funktionen</a><br>
            	&emsp;<a class="Iv" href=#kapitel6.1>6.1&emsp;Deklaration von Funktionen</a><br>
            	&emsp;<a class="Iv" href=#kapitel6.2>6.2&emsp;Aufrufen von Funktionen</a><br>
            	&emsp;<a class="Iv" href=#kapitel6.3>6.3&emsp;Arguments-Funktionen</a><br>
            	&emsp;<a class="Iv" href=#kapitel6.4>6.4&emsp;Arrow-Funktionen</a><br>
            	&emsp;<a class="Iv" href=#kapitel6Zsm>Zusammenfassung</a><br>
            	&emsp;<a class="Iv" href=#kapitel6Aufg>Aufgaben zur Selbstüberprüfung</a><br>
            	<a class="Iv" href=#kapitel7>7&emsp;Arrays</a><br>
            	&emsp;<a class="Iv" href=#kapitel7.1>7.1&emsp;Arrays initialisieren, Elemente hinzufügen und Elemente löschen</a><br>
            	&emsp;<a class="Iv" href=#kapitel7.2>7.2&emsp;Assoziative Arrays</a><br>
            	&emsp;<a class="Iv" href=#kapitel7.3>7.3&emsp;Hilfreiche Methoden um mit Arrays umzugehen</a><br>
            	&emsp;<a class="Iv" href=#kapitel7Zsm>Zusammenfassung</a><br>
            	&emsp;<a class="Iv" href=#kapitel7Aufg>Aufgaben zur Selbstüberprüfung</a><br>
            	<a class="Iv" href=#kapitel8>8&emsp;Objekte</a><br>
            	&emsp;<a class="Iv" href=#kapitel8.1>8.1&emsp;Erzeugung durch JSON Objekt-Literal</a><br>
            	&emsp;<a class="Iv" href=#kapitel8.2>8.2&emsp;Erzeugung durch Konstruktor-Funktion</a><br>
            	&emsp;<a class="Iv" href=#kapitel8.3>8.3&emsp;Erzeugung durch Factory-Funktion</a><br>
            	&emsp;<a class="Iv" href=#kapitel8.4>8.4&emsp;Prototypen</a><br>
            	&emsp;<a class="Iv" href=#kapitel8Zsm>Zusammenfassung</a><br>
            	&emsp;<a class="Iv" href=#kapitel8Aufg>Aufgaben zur Selbstüberprüfung</a><br>
            	<a class="Iv" href=#kapitel9>9&emsp;JavaScript und der DOM-Baum</a><br>
            	&emsp;<a class="Iv" href=#kapitel9.1>9.1&emsp;Der DOM-Baum</a><br>
            	&emsp;<a class="Iv" href=#kapitel9.2>9.2&emsp;Zugriff auf den DOM-Baum</a><br>
            	&emsp;<a class="Iv" href=#kapitel9.3>9.3&emsp;Änderungen im DOM-Baum</a><br>
            	&emsp;<a class="Iv" href=#kapitel9.4>9.4&emsp;Änderung im Style</a><br>
            	&emsp;<a class="Iv" href=#kapitel9Zsm>Zusammenfassung</a><br>
            	&emsp;<a class="Iv" href=#kapitel9Aufg>Aufgaben zur Selbstüberprüfung</a><br>
            	<a class="Iv" href=#kapitel10>10&emsp;Events, Ausblick auf jQuery und Ajax</a><br>
            	&emsp;<a class="Iv" href=#kapitel10.1>10.1&emsp;Event-Handling</a><br>
            	&emsp;<a class="Iv" href=#kapitel10.2>10.2&emsp;Event-Objekte</a><br>
            	&emsp;<a class="Iv" href=#kapitel10.3>10.3&emsp;Tastendruck-Events</a><br>
            	&emsp;<a class="Iv" href=#kapitel10.4>10.4&emsp;Ausblick auf jQuery</a><br>
            	&emsp;<a class="Iv" href=#kapitel10.4>10.5&emsp;Ausblick auf Ajax</a><br>
            	&emsp;<a class="Iv" href=#kapitel10Zsm>Zusammenfassung</a><br>
            	&emsp;<a class="Iv" href=#kapitel10Aufg>Aufgaben zur Selbstüberprüfung</a><br>
            	<a class="Iv" href=#Lösungen>A.&emsp;Lösungen der Aufgaben zur Selbstüberprüfung</a><br>
            	<a class="Iv" href=#Literatur>B.&emsp;Literaturverzeichnis</a><br>
            	<a class="Iv" href=#Abbildungen>C.&emsp;Abbildungsverzeichnis</a><br>
        	</div>
    	</div>
        <div class="textbox">
            <h1 id="kapitel1" class="title">1&emsp;JavaScript Einführung</h1>
            <div class="goals">
            	Dieses Kapitel beschäftigt sich mit einer kurzen Übersicht von JavaScript. Das beinhaltet die Geschichte
				von JavaScript, die Eigenschaften von JavaScript und die Verwendung von JavaScript.
				Folgende Lernziele sollten nach dem Bearbeiten des Kapitels erreicht werden:
				<ul>
					<li>Einen groben Überblick von JavaScript haben</li>
					<li>Verwendungen und Zwecke von JavaScript kennen</li>
					<li>Eigenschaften von der Sprache JavaScript kennen</li>
				</ul>
            </div>
            <h3 id="kapitel1.1" class="title">1.1&emsp;Was ist JavaScript?</h3>
            <div class="content">
            	<p class="absatz">JavaScript, früher auch LiveScript genannt, erschien zum ersten Mal im Jahr 1995. Die Sprache wurde
				verwendet um Programme mit Webseiten zu verbinden und Programme zu Webseiten hinzuzufügen. (vgl.
				[Hav18, S.6]) Ein primäres Merkmal von JavaScript ist es, Interaktivität auf Webseiten zu ermöglichen. Es
				wird keine weitere Software benötigt um JavaScript im Webbrowser laufen zu lassen, weil der Interpreter
				dafür bereits im Webbrowser enthalten ist. (vgl. [Fer19, S.2f]) JavaScript wurde am Anfang für den Netscape
				Navigator Webbrowser entwickelt und dient unter anderem dazu um HTML Seiten dynamisch zu gestalten.
				(vlg. [Hav18, S6]) Es findet ebenfalls in der Verwendung um DOM-Bäume zu durchlaufen und zu
				verändern.</p>
				<p class="absatz">Das ECMAScript ist ein Dokument, dass von der „Ecma International organization“ verfasst wurde. Es
				umfasst das Standard, wie die Sprache JavaScript funktionieren soll. Damit soll sicher gestellt werden, dass
				Software, die behauptet JavaScript zu unterstützen, auch von der konkreten Sprache JavaScript redet. (vgl.
				[Hav18, S.6])</p>
				<p class="absatz">JavaScript wird in einer sogenannten “Sandbox“ ausgeführt. Dabei ist JavaScript auf die Seite, auf der es
				ausgeführt wird, isoliert. Es kann nichts außerhalb der Seite ausführen um zu verhindern, dass Schadsoftware
				ausführbar ist. Das Prinzip des “sandboxing“ ermöglicht dem Nutzer eine sichere Umgebung im Browser.</p>
				<p class="absatz">Es sollte außerdem erwähnt werden, dass JavaScript nichts mit der Programmiersprache Java zu tun hat. Wie
				schon erwähnt hieß die Sprache früher LiveScript. In der gleichen Zeit, wo JavaScript entwickelt und
				veröffentlicht wurden, wurde Java sehr beliebt und stark dafür geworben. Um ebenfalls an Popularität zu
				gewinnen wurde die Sprache LiveScript zu JavaScript umbenannt. (vgl. [Hav18, S.6])</p>
            </div>
            <h3 id="kapitel1Zsm" class="title">Zusammenfassung</h3>
            <div class="content">
            	In diesem Kapitel wurde die Geschichte von JavaScript angesprochen und die Aufgaben und Verwendung
				von JavaScript besprochen. Es wird hauptsächlich dafür verwendet um Webseiten interaktiv zu entwickeln
				und HTML Seiten zu erweitern. Es wird unter anderem verwendet um Webseiten mit dem “Document
				Object Model (DOM)” zu manipulieren.
				Das ECMAScript legt einen Standard für die Sprache JavaScript fest.
				JavaScript wird in einer Sandbox Umgebung in einem Webbrowser ausgeführt.
            </div>
            <h3 id="kapitel1Aufg" class="title">Aufgaben zur Selbstüberprüfung</h3>
            <div class="content">
            	<p class="absatz"><strong>Aufgabe 1.1</strong><br>
            	Kann mit JavaScript über den Webbrowser auf den eigenen Rechner zugegriffen werden?</p>
            	<p class="absatz"><strong>Aufgabe 1.2</strong><br>
            	Was ist ECMAScript?</p>
            </div>
        </div>
        <div class="textbox">
            <h1 id="kapitel2" class="title">2&emsp;Integration in HTML</h1>
            <div class="goals">
            	Dieses Kapitel beschäftigt sich mit einer kurzen Wiederholung zu der Grundstruktur von HTML
				Programmen und behandelt die verschiedenen Wege JavaScript mit einem HTML Programm zu verbinden
				bzw. JavaScript direkt in ein HTML Programm hinzuzufügen.
				Folgende Lernziele sollten nach dem Bearbeiten des Kapitels erreicht werden:
				<ul>
					<li>Grundstruktur von HTML Programmen kennen</li>
					<li>Grundlegende HTML Tags kennen</li>
					<li>Verschiedene Möglichkeiten JavaScript in ein HTML Programm zu integrieren</li>
				</ul>
			</div>
			<h3 id="kapitel2.1" class="title">2.1&emsp;Grundstruktur eines HTML Programms</h3>
			<div class="content">
				<p class="absatz">HTML steht für „Hypertext Markup Language“ und wird für die Strukturierung von Webseiten im
				Webbrowser verwendet. Mit HTML können auf einer Webseite Überschriften, Paragraphen, Hyperlinks,
				Tabellen und andere Elemente einer Webseite gebaut werden. Mit HTML wird hauptsächlich die
				Seitenstruktur und der Inhalt einer Webseite bestimmt.</p>
				<div class="codebox">
<pre><code>&lt;!doctype html&gt;
	&lt;html&gt;
		&lt;head&gt;
			&lt;title&gt;Name der Webseite&lt;/title&gt;
		&lt;/head&gt;
		&lt;body&gt;
			&lt;h1&gt;Überschrift&lt;/h1&gt;
			&lt;p&gt;Ein Paragraph&lt;/p&gt;
			&lt;a href=“https://google.de>Link zu Google.de&lt;/a&gt;
		&lt;/body&gt;
	&lt;/html&gt;</code></pre>
				</div>
				<p><small>Listing 2.1: Die Grundstruktur eines HTML Programms</small></p>
				<div class="content">
					<p class="absatz">Listing 2.1 zeigt einfaches HTML Programm. Jedes HTML Dokument strukturiert die Seite mit den Zeichen < und >. Diese sogenannten Tags sind zwischen den Zeichen kleiner und größer  und bestimmen wie die Seite später aufgebaut wird. Es gibt eine große Auswahl an Tags um eine Webseite je nach belieben aufzubauen. Viele Elemente fangen an und enden mit einem Tag. Der Text zwischen drin wird als Klartext dargestellt und entsprechend dem Tag formatiert. Hier werden nur ein paar grundlegende Tags besprochen.</p>
					<p class="absatz">Mit <!doctype html> fängt jedes HTML Dokument an und gibt dem Browser an, das Dokument als HTML Dokument zu interpretieren. Anschließend folgt der &lt;html&gt; Tag, welcher alle anderen HTML Elemente die vorkommen beinhaltet. Es dient als eine Art Container von anderen Tags. Danach folgen die &lt;head&gt; und &lt;body&gt; Tags. Im &lt;head&gt; stehen Informationen über das Dokument. Dort kann unter anderem eine „Cascading Style Sheets (CSS)“ Datei eingebunden werden oder mit dem &lt;style&gt; Tag direkt das Aussehen der HTML Webseite verändern und angepasst werden. In diesem Beispiel wurde mit &lt;title&gt; der Titel des Dokuments festgelegt. Im &lt;body&gt; Tag ist das Dokument selber enthalten. Mit &lt;h1&gt; wird eine Überschrift festgelegt. Der &lt;p&gt; Tag bestimmt einen Paragraphen. Der &lt;a&gt; Tag gibt einen Link an. Das Attribut href gibt dabei die Webseite, die verlinkt ist, an.</p>
				</div>
				<h3 id="kapitel2.2" class="title">2.2&emsp;Einbettung von JavaScript in ein HTML Programm</h3>
				<div class="content">
					<p class="absatz">Es gibt mehrere Möglichkeiten JavaScript in ein HTML Dokument einzubinden. Wenn der Parser über das HTML Dokument läuft, wird das JavaScript Skript geladen sobald der Parser ein &lt;script&gt; Tag entdeckt. Das Skript wird dann geladen. Man kann intern oder extern einbetten. (vgl. [Hav18, S.221f])</p>
					<p class="absatz">Eine Möglichkeit ist eine interne Einbettung über das &lt;script&gt; Tag.</p>
				</div>
				<div class="codebox">
<pre><code>&lt;!doctype html>
	&lt;html>
		&lt;head>
			&lt;script>alert(“Hallo Welt!“);&lt;/script>
		&lt;/head>
		&lt;body>
		&lt;/body>
	&lt;/html>
</code></pre>
				</div>
				<p><small>Listing 2.2: Einbettung über das &lt;script> Tag</small></p>
				<div class="content">
					<p class="absatz">Listing 2.2 zeigt die interne Einbettung eines JavaScript Programms mithilfe des &lt;script> Tags. Zwischen &lt;script> und &lt;/script> wird der JavaScript Code für das HTML Programm definiert. In diesem konkreten Fall wird ein Dialogfenster mit der Nachricht „Hallo Welt!“ dargestellt sobald das Skript geladen wurde. Diese Möglichkeit ist für längere JavaScript Programme zu vermeiden, da das HTML Programm schnell unübersichtlich werden kann.</p>
					<p class="absatz">Eine andere Möglichkeit ist eine externe Einbettung. Diese Variante wird in den meisten Fällen verwendet.</p>
				</div>
				<div class="codebox">
<pre><code>&lt;!doctype html>
	&lt;html>
		&lt;head>
			&lt;script src=“beispiel.js“>&lt;/script>
		&lt;/head>
		&lt;body>
		&lt;/body>
	&lt;/html>
</code></pre>
				</div>
				<p><small>Listing 2.3: externe Einbettung von JavaScript über eine Datei</small></p>
				<div class="content">
					<p class="absatz">Listing 2.3 zeigt die externe Einbettung von JavaScript. Der &lt;script> Tag hat das Attribut src. Damit kann eine externe JavaScript Datei angegeben und eingebunden werden. In diesem Fall wird die Datei „beispiel.js“ in das HTML Dokument geladen. In „beispiel.js“ kann das gleiche JavaScript, wie in Listing 2.2 stehen und führt damit zum gleichen Dialogfenster. Das ist die bevorzugte Variante, weil JavaScript Code und HTML Tags voneinander getrennt sind. Dies führt zu einer deutlich übersichtlicheren Struktur des Programms im Gegensatz zur internen Einbettung.</p>
				</div>
				<h3 id="kapitel2Zsm" class="title">Zusammenfassung</h3>
				<div class="content">
					Ein HTML Dokument wird mithilfe von verschiedener Tags definiert. Sie geben den Inhalt und die Struktur eines Programms vor. Die wichtigsten Tags sind &lt;!doctype html>, &lt;html>, &lt;head>, &lt;body>, und in unserem Fall &lt;script>.
					Ein JavaScript Programm wird geladen, wenn ein Parser den &lt;script> Tag findet.
					Es gibt mehrere Möglichkeiten ein JavaScript Programm einzubetten. Einer der Möglichkeiten ist die interne Einbettung. Dabei wird der JavaScript Code direkt zwischen &lt;script> und &lt;/script> eingefügt. Eine bessere Möglichkeit ist die externe Einbettung. Damit wird mithilfe des Attributs src des &lt;script> Tags eine externe JavaScript Datei eingebunden.
				</div>
				<h3 id="kapitel2Aufg" class="title">Aufgaben zur Selbstüberprüfung</h3>
				<div class="content">
					<p class="absatz"><strong>Aufgabe 2.1</strong><br>
					Nennen Sie die wichtigsten HTML Tags, die in beinahe jedem HTML Dokument zu finden sind.</p>
					<p class="absatz"><strong>Aufgabe 2.2</strong><br>
					Nennen Sie mindestens drei HTML Tags, die Klartext einer HTML Seite formatieren können.</p>
					<p class="absatz"><strong>Aufgabe 2.3</strong><br>
					Nennen Sie zwei Möglichkeiten JavaScript in ein HTML Dokument einzubetten.</p>
				</div>
        </div>
        </div>
        <div class="textbox">
            <h1 id="kapitel3" class="title">3&emsp;Variablen, Datentypen und Hoisting</h1>
            <div class="goals">
              Dieses Kapitel beschäftigt sich mit der Erstellung von unterschiedlichen Variablen, deren zugehörigen möglichen Datentypen, wie diese Datentypen durch Literale und Instanzen erstellt werden können und das Hoisting von Variablen. Unter anderem wird kurz angesprochen, wie mit dem Webbrowser JavaScript Code ausgeführt werden kann.
              Folgende Lernziele sollten nach dem Bearbeiten des Kapitels erreicht werden:
            <ul>
              <li>Verschiedene Arten von Variablen in JavaScript deklarieren</li>
              <li>Datentypen von JavaScript kennen</li>
              <li>Erstellung von primitiven Datentypen durch Literale und Instanzen</li>
              <li>Hoisting verstehen</li>
            </ul>
            </div>
            <h3 id="kapitel3.1" class="title">3.1&emsp;Variablen Deklaration</h3>
            <div class="content">
              <p class="absatz">JavaScript ist eine schwach typisierte dynamische Sprache. Variablen die einen Wert eines Typs haben, können später einen überhaupt anderen Typ besitzen. (vgl. [Fer19, S. 25f]) Dies kann zum Beispiel in der Debug-Konsole von Chrome ausprobiert werden. Gehen Sie dazu auf „developer tools“ und dann auf „console“.</p>
            </div>
            <div class="codebox">
<pre><code>
var variable = “String“;
variable = 100;
console.log(variable);

</code></pre>
            </div>
            <p><small>Listing 3.1: Beispielangabe in die Konsole von Chrome</small></p>
            <div class="content">
              <p class="absatz">In Listing 3.1 wird dieses Prinzip vorgeführt. Zunächst wird die Variable variable mit dem keyword var deklariert. Diese Variable erhält den Wert “String“. Dieser Wert ist vom Typ String. Anschließend wird der Variable variable einer neuer Wert zugewiesen. Diesmal wird der Wert 100 zugewiesen. Dieser Wert ist vom Typ Integer. Diese Variable wird dann durch console.log(variable) auf der Konsole wiedergegeben. Während der Laufzeit kann sich der Wert einer Variable ändern und der Datentyp einer Variable kann sich ebenfalls ändern.</p>
              <p class="absatz">Wenn Variablen in JavaScript deklariert werden, gelten bestimmte Regeln, die die Variable erfüllen muss. Die deklarierte Variable darf nicht mit einer Zahl anfangen und auch nicht mit einem Symbol anfangen. Symbole sind zum Beispiel das Fragezeichen oder das Ausrufezeichen. Variablen dürfen auch keine Leerzeichen beinhalten. Nachdem eine Variable mit einem Buchstaben begonnen hat, dürfen Zahlen und Symbole in der Variable verwendet werden. (vgl. [Fer19, S26])</p>
              <p class="absatz">Am Ende jeder Zeile darf ein Semikolon stehen, was den Abschluss des Statements dieser Zeile bedeutet. Man kann auch kein Semikolon platzieren und den Interpreter die Aufgabe überlassen selber zu bestimmen wo das Statement aufhört.</p>
            </div>
            <h3 id="kapitel3.2" class="title">3.2&emsp;Variablen in lokalen Code-Blöcken</h3>
            <div class="content">
              Man kann mit let und var Variablen in JavaScript deklarieren. Bis jetzt haben wir betrachtet wie mit var eine Variable mit beliebigem Datentyp deklariert werden kann. Mit let lässt sich dies ebenfalls tun. Doch let speichert die Variable nachdem ein Code-Block ausgeführt wurde nicht mehr. Somit kann der Variablenname nach der Ausführung des Code-Blockes wieder verwendet werden.
            </div>
            <div class="codebox">
<pre><code>
for (let i = 0; i < 1; i++) {
  console.log(i);
}
console.log(i);

</code></pre>
            </div>
            <p><small>Listing 3.2: Code-Block mit let</small></p>
            <div class="content">
              In Listing 3.2 wird eine for-Schleife verwendet, welche die Variable i auf der Konsole ausgibt und nach der Schleife nochmal ausgibt. Wenn das Programm ausgeführt wird, werden bei beiden Ausgaben unterschiedliche Ergebnisse ausgegeben. Das console.log(i) gibt die Zahl 0 aus. Das liegt daran, dass die Variable i in der Schleife mit let und dem Wert 0 initialisiert wurde. Daher existiert die Variable nur im Code-Block der for-Schleife. Anschließend wird i nach der Schleife nochmal ausgegeben. Dies führt zu einem Fehler, der angibt, dass i nicht definiert ist. Die Deklaration mit let ermöglicht die Verwendung der Variable in einem Code-Block und das Vergessen dieser Variable wenn der Code-Block beendet wurde. 
              Eine Deklaration einer Variable mit var führt zu einem anderen Ergebnis.
            </div>
            <div class="codebox">
<pre><code>
for (var i = 0; i < 1; i++) {
  console.log(i);
}
console.log(i);

</code></pre>
            </div>
            <p><small>Listing 3.3: Code-Block mit var</small></p>
            <div class="content">
              In Listing 3.3 beträgt die Ausgabe des ersten console.log(i) dem Wert 0. Die zweite beträgt dem Wert 1. Dies passiert, weil durch var die Variable im derzeitigen Ausführungskontext erstellt wird. (vgl. [Fer19, S.30]) Die Variable erhält durch diese Art von Deklarierung einen globalen Scope.
            </div>
            <h3 id="kapitel3.3" class="title">3.3&emsp;Konstante Variablen</h3>
            <div class="content">
              Eine weiter Möglichkeit Variablen in JavaScript zu deklarieren, ist die Deklaration von konstanten Variablen. Diese Art von Variablen sind unveränderlich und können innerhalb des Programmverlaufs nicht mehr verändert werden. Das bedeutet, dass eine neue Wert Zuweisung einer konstanten Variable nicht mehr möglich ist. Mithilfe des keyword's const lassen sich konstante Variablen deklarieren.
            </div>
            <div class="codebox">
<pre><code>
const variable = “String“;
variable = 100;
console.log(variable);

</code></pre>
            </div>
            <p><small>Listing 3.4: Variablen Deklaration mit const</small></p>
            <div class="content">
              In Listing 3.4 wird zunächst der Variable variable der Wert “String“ zugewiesen. Dies erfolgt mit dem keyword const. Danach wird der Variable variable einer neuer Wert zugewiesen mit dem Wert 100. Zum Schluss wird die Variable ausgegeben. Man erwartet als Ausgabe den zuletzt zugewiesenen Wert der Variable. Diese Beträgt die Zahl 100. Doch das Ausführen des Programms führt zu einem Fehler bei “variable = 100;“. Das liegt daran, dass wir versucht haben der konstanten Variable variable einen Wert zuzuweisen. Konstante Variablen sind aber unveränderlich. Daher führt dies zu einem Fehler.
            </div>
            <h3 id="kapitel3.4" class="title">3.4&emsp;Datentypen</h3>
            <div class="content">
              Es werden unterschiedliche Datentypen von JavaScript unterstützt, die auch von vielen anderen Programmiersprachen ebenfalls unterstützt werden. JavaScript unterstützt Boolean, Number, String, Array, Objekt, Function und RegExp. Um bestimmte Datentypen zu erstellen, werden hauptsächlich zwei Methoden verwendet. Zum einen die Erstellung durch Literale und zum anderen die Erstellung durch Konstruktoren. (vgl. [Hav18, S.10ff]) Der Aufruf des entsprechenden Konstruktors führt zur Erzeugung des gewünschten Datentyps.
            </div>
            <div class="codebox">
<pre><code>
var eins = new String(“a“);
var zwei = new Number(10);
var drei = new Boolean(true);

</code></pre>
            </div>
            <p><small>Listing 3.5: Erzeugung von Variablen durch Konstruktoren</small></p>
            <div class="content">
              In Listing 3.5 werden drei Variablen mithilfe von Konstruktoren erstellt. Variable eins wird ein String zugewiesen, indem mit dem Konstruktor new String() ein neuer String, in diesem Fall “a“ erstellt wird. Variable zwei wird ein Zahl zugewiesen, indem mit dem Konstruktor new Number() ein neue Zahl, in diesem Fall 10, erstellt wird.Variable drei wird ein Wahrheitswert zugewiesen, indem mit dem Konstruktor new Boolean() ein neuer Wahrheitswert, in diesem Fall true, erstellt wird.
            </div>
            <div class="codebox">
<pre><code>
var eins = “a“;
var zwei = 10;
var drei = true;

</code></pre>
            </div>
            <p><small>Listing 3.6: Erzeugung von Variablen durch Literale</small></p>
            <div class="content">
              In Listing 3.6 werden drei Variablen mit Literalen erstellt. Dabei wird einfach der gewünschte Wert der Variable der entsprechenden Variable zugewiesen.
            </div>
            <h3 id="kapitel3.5" class="title">3.5&emsp;Hoisting</h3>
            <div class="content">
              Hoisting ist ein besonderes Verhalten in JavaScript. Es bezeichnet das sogenannte Hochziehen von Variablen durch den Interpreter. Dieses Verhalten findet bei der Deklarationen von Variablen und gleichzeitigen Zuweisung eines Wertes dieser Variable nicht statt. (vgl. [Fer19, S.31f]) Der Interpreter sucht dabei in einer Funktion alle lokalen Variablendeklarationen. Diese Variablen werden dann sofort deklariert aber nicht initialisiert. Die gefundenen Variablen werden sozusagen unterhalb des Funktionskopfes hochgezogen und dann deklariert.
            </div>
            <div class="codebox">
<pre><code>
function doSomething() {
  variable = 10;
  console.log(variable);
  var variable;
}

doSomething();

</code></pre>
            </div>
            <p><small>Listing 3.7: Beispiel zur Verwendung von Hoisting</small></p>
            <div class="content">
              In Listing 3.7 wird ein Hoisting Beispiel vorgeführt. Wenn wir aus einer anderen Programmiersprache heraus denken würden, dann würde man annehmen, dass wenn die Funktion ausgeführt wird, für console.log(variable) der Wert undefined  beträgt. Dies ist hier aber nicht der Fall. Die Deklaration var variable wird vorher deklariert, oder anderes gesagt, nach oben unter den Methodenkopf hochgezogen, und für console.log(variable) ergibt sich das richtige Ergebnis, der Wert 10.
            </div>
            <h3 id="kapitel3Zsm" class="title">Zusammenfassung</h3>
            <div class="content">
              In diesem Kapitel haben wir verschiedene Arten kennengelernt wie man JavaScript Variablen deklariert. Mit var werden Variablen deklariert, die durch verschiedene Datentypen zugewiesen werden können. Mit let können Variablen nur für einen bestimmen Code-Block deklariert werden. Mit const werden konstante und unveränderliche Variablen deklariert. JavaScript unterstützt wie viele andere Programmiersprachen die gänglichen Datentypen, wie zum Beispiel Number oder String. Datentypen können durch einen Konstruktor oder einfach durch Literale erstellt werden und der Variable zugewiesen werden. Hoisting findet zum Beispiel innerhalb von Funktionen statt, wo deklarierte Variablen innerhalb des Funktionsblocks vor dem eigentlichen Ausführen der Funktionen deklariert werden. Man kann das mit dem Hochziehen von Variablen unter dem Methodenkopf umschreiben. Daher kommt auch der Begriff Hoisting.
            </div>
            <h3 id="kapitel3Aufg" class="title">Aufgaben zur Selbstüberprüfung</h3>
            <div class="content">
              <p class="absatz"><strong>Aufgabe 3.1</strong><br>
                Nennen Sie drei verschiedene Arten um Variablen in JavaScript zu deklarieren.</p>
              <p class="absatz"><strong>Aufgabe 3.2</strong><br>
                Welche grundlegenden Datentypen unterstützt JavaScript?</p>
              <p class="absatz"><strong>Aufgabe 3.3</strong><br>
                Erstellen Sie ein eigenes Beispiel, wo Hoisting eingesetzt wird.</p>
            </div>
        </div>
        <div class="textbox">
            <h1 id="kapitel4" class="title">4&emsp;Typumwandlung, Truthiness und Scope</h1>
            <div class="goals">
              Dieses Kapitel beschäftigt sich mit der Typumwandlung von Werten, mit dem Wahrheitswert von Werten und den Arten von Scope, die eine Variable haben kann. Folgende Lernziele sollten nach dem Bearbeiten des Kapitels erreicht werden:
              <ul>
                <li>Typumwandlungen von Variablen durchführen können</li>
                <li>Truthiness verstehen</li>
                <li>Den globalen und lokalen Scope verstehen</li>
              </ul>
             </div>
             <h3 id="kapitel4.1" class="title">4.1&emsp;Vergleiche und Typumwandlung</h3>
             <div class="content">
              <p class="absatz">Eine Typumwandlung beschreibt die Transformationen des Datentyps einer Variable zu einem anderen Datentyp. Dies wird zum Beispiel gebraucht um Ganzzahlen mit Fließkommazahlen vergleichen zu können oder um einen String, der eine Zahl beinhaltet, zu einer tatsächlichen Zahl als Datentyp umzuwandeln um damit rechnen zu können. Wie in anderen schwach typisierten Sprachen wird die Typumwandlung beim Vergleichen zum Beispiel implizit zum größeren Typ durchgeführt. Das bedeutet, dass der genauere Typ der ersten Variable zum größeren Typ der zweiten Variable umgewandelt wird.</p>
              <p class="absatz">Dafür werden hauptsächlich zwei Vergleichsoperatoren verwendet. Ein Vergleichsoperator ist der == Operator. Dabei werden beide Werte zu einem Typ umgewandelt und dann verglichen. Der andere Operator ist der === Operator. Hier findet keine Typumwandlung statt. Wenn die Typen nicht übereinstimmen, wird der Vergleich immer zu false ausgewertet.</p>
             </div>
             <div class="codebox">
<pre><code>
var eins = “1“;
var zwei = 1;
var drei = (eins == zwei);
var vier = (eins === zwei);
console.log(drei);
console.log(vier); 

</code></pre>
             </div>
             <p><small>Listing 4.1: Unterschied zwischen == und ===</small></p>
             <div class="content">
              In Listing 4.1 wird der Unterschied zwischen den beiden Vergleichsoperatoren gezeigt. Die Variable eins erhält die Zahl 1 als String zugewiesen. Die zweite Variable zwei bekommt die Zahl 1 als Number zugewiesen. Die Variable drei erhält den Wahrheitswert des Ergebnisses wenn eins und zwei mit dem == Operator verglichen werden. Dieser Wahrheitswert beträgt true. Es fand eine implizite Typumwandlung statt und die Variablen wurden auf Gleichheit überprüft. Die Variable vier erhält den Wahrheitswert des Ergebnisses wenn eins und zwei mit dem === Operator verglichen werden. Dieser Wahrheitswert beträgt false. Es fand keine Typumwandlung statt, weil der Typ sich zwischen den beiden Variablen unterschieden hat. Das Ergebnis ist in diesem Fall automatisch false.
             </div>
             <h3 id="kapitel4.2" class="title">4.2&emsp;Truthiness</h3>
             <div class="content">
              JavaScript besteht hauptsächlich aus Objekten. Werte von Variablen mit Datentypen Number und String zum Beispiel sind Objekte. Jedes Objekt hat einen Wahrheitswert. Der Wahrheitswert eines Objektes wird mit der Truthiness bestimmt. Es gilt allgemein, dass false, 0,  NaN, null und undefined unwahr sind, das bedeutet sie geben bei einer Anfrage des Wahrheitswertes als Ergebnis false. Alle anderen Werte sind true.
             </div>
             <div class="codebox">
<pre><code>
var bool1 = Boolean(“false“);
var bool2 = Boolean(null);
console.log(bool1);
console.log(bool2);

</code></pre>
             </div>
             <p><small>Listing 4.2: Truthiness von zwei Werten</small></p>
             <div class="content">
              In Listing 4.3 wird die unterschiedliche Truthiness von zwei Werten gezeigt. Der Variable bool1 wird der Wahrheitswert des angegebenen Strings “false“ zugewiesen. Die Ausgabe für diesen Wert ist das Ergebnis true. Die Variable bool2 erhält den Wahrheitswert des Wertes null. Das Ergebnis ist false und für die Variable bool2 wird false ausgegeben.
             </div>
             <h3 id="kapitel4.3" class="title">4.3&emsp;Scope von Variablen</h3>
             <div class="content">
              Jede Variable in einem Programm hat einen eigenen Scope. Der Scope gibt an, von wo und bis wohin eine Variable sichtbar für das restliche Programm ist. Es entsteht ein globaler Scope für eine Variable, wenn die Variable nicht in einer Funktion deklariert wurde. Diese Variable ist dann auf globaler Ebene im Programm zugänglich. Es entsteht ein lokaler Scope für eine Variable, wenn die Variable in einer Funktion deklariert wurde. Diese ist dann aus dem globalen Scope nicht zugänglich. Da Funktion in Funktionen definiert werden können, entstehen einzelne Scope-Blöcke. Der innere Block kann dabei auf die lokalen Variablen außerhalb zugreifen. (vgl. [Hav18, S.40f])
             </div>
             <div class="codebox">
<pre><code>
var eins = 1;
function f1() {
  var zwei = 1;
}

</code></pre>
             </div>
             <p><small>Listing 4.3: Unterschiedlicher Scope von Variablen</small></p>
             <div class="content">
              In Listing 4.4 werden die zwei unterschiedlichen Scope's vorgeführt. Die Variable eins wird in diesem Code Beispiel als globale Variable definiert. Die Variable zwei wird in einer Funktionen deklariert und initialisiert. Diese Variable existiert dabei nur in dem Scope bzw. Code-Block der Funktion f().
             </div>
             <h3 id="kapitel4Zsm" class="title">Zusammenfassung</h3>
             <div class="content">
              Die Typumwandlung findet in JavaScript implizit statt. Es gibt hauptsächlich die Operator == und === um Vergleiche zwischen Variablen durchzuführen. Der == Operator führt eine Typumwandlung durch, der === Operator nicht. Jeder Wert und jedes Objekt in JavaScript hat ein Wahrheitswert. false, 0, NaN, null und undefined sind false, alles andere ist true. Es gibt zwei Arten von Scope. Globaler Scope entsteht wenn eine Variable außerhalb einer Funktion deklariert wird. Sie ist von überall zugreifbar. Lokaler Scope entsteht durch Deklaration einer Variable in einer Funktionen. Sie ist nur in diesem Code-Block zugänglich.
             </div>
             <h3 id="kapitel4Aufg" class="title">Aufgaben zur Selbstüberprüfung</h3>
             <div class="content">
              <p class="absatz"><strong>Aufgabe 4.1</strong><br>
              Mit welcher Funktion kann der Typ einer Variable herausgefunden werden?</p>
              <p class="absatz"><strong>Aufgabe 4.2</strong><br>
              Erklären Sie den Begriff “Truthiness“.</p>
              <p class="absatz"><strong>Aufgabe 4.3</strong><br>
              Wenn in einer Funktion eine Variable initialisiert wird aber nicht deklariert, hat sie ebenfalls nur einen lokalen Scope?</p>
             </div>
        </div>
        <div class="textbox">
          <h1 id="kapitel5" class="title">5&emsp;Verzweigungen und Schleifen</h1>
          <div class="goals">
            <p class="absatz">Dieses Kapitel beschäftigt sich mit der Erstellung von Verzweigungen und den verschiedenen Möglichkeiten in JavaScript eine Schleife zu erstellen. Folgende Lernziele sollten nach dem Bearbeiten des Kapitels erreicht werden:</p>
            <ul>
              <li>Verzweigungen in JavaScript programmieren können</li>
              <li>Unterschiedliche Schleifenarten in JavaScript programmieren können</li>
            </ul>
          </div>
            <h3 id="kapitel5.1" class="title">5.1&emsp;Verzweigungen</h3>
            <div class="content">
              Eine Verzweigung in JavaScript bestimmt den darauf folgenden Programmablauf eines JavaScript Programms unter Überprüfung einer bestimmten Bedingung. Diese Bedingung ist vom Typ Boolean und liefert einen Wahrheitswert. Der Wahrheitswert kann true oder false sein. Verzweigungen in JavaScript funktionieren genauso wie Verzweigungen in anderen Programmiersprachen wie Java.
            </div>
            <div class="codebox">
<pre><code>
var eins = value;
var zwei;
if (eins === 1) {
  zwei = 1;
} else if (eins === 2) {
  zwei = 2;
} else {
  zwei = 3;
}

</code></pre>
            </div>
            <p><small>Listing 5.1: Verzweigungen</small></p>
            <div class="content">
              In Listing 5.1 werden die möglichen Verzweigungen in JavaScript dargestellt. Wenn die Variable eins für value den Wert 1 erhält, so wird die Variable zwei auf den Wert 1 gesetzt. Wenn die Variable eins für value den Wert 2 erhält, so wird die Variable zwei auf den Wert 2 gesetzt. Wenn die Variable irgendeinen anderen Wert erhält, so wird die Variable zwei auf 3 gesetzt.
            </div>
            <h3 id="kapitel5.2" class="title">5.2&emsp;Schleifen</h3>
            <div class="content">
              Insgesamt gibt es zwei unterschiedliche Schleifen. Die erste Art von Schleife ist die while Schleife. Diese hat ebenfalls zwei unterschiedliche Arten. Einmal die normale while Schleife und die do while Schleife. Bei der while Schleife braucht man eine Variable die den Zähler darstellt wenn man zum Beispiel durch ein Array iterieren muss.
            </div>
            <div class="codebox">
<pre><code>
var i = 0;
while(i < 10) {
  console.log(i);
  i++;
}

</code></pre>
            </div>
            <p><small>Listing 5.2: Beispiel einer while Schleife</small></p>
            <div class="content">
              In Listing 5.2 zählt eine normale while Schleife die Zahlen von 0 bis 9 hoch. Es werden dabei durch console.log(i) die Zahlen von 0 bis 9 ausgegeben. Mit i++ wird der Zähler der Schleife hochgezählt.
            </div>
            <div class="codebox">
<pre><code>
var i = 0;
do  {
  console.log(i);
  i++;
} while (i < 10)

</code></pre>
            </div>
            <p><small>Listing 5.3: Beispiel einer do-while Schleife</small></p>
            <div class="content">
              In Listing 5.3 zählt eine do while Schleife die Zahlen von 0 bis 9 hoch. Das Code Beispiel erfüllt den gleichen Zweck wie das Beispiel in Listing 5.2. Die do while Schleife führt die beschriebenen Aktionen vor dem Überprüfen der Bedingung aus im Gegensatz zum vorherigen Beispiel. Die for Schleife hat in JavaScript drei unterschiedliche Varianten. Es wird unterschieden zwischen der normalen for Schleife, der for in Schleife und der for of Schleife. (vgl. [Hav18, S.32f])
            </div>
            <div class="codebox">
<pre><code>
for (let i = 0; i < 10; i++) {
  console.log(i);
}

</code></pre>  
            </div>
            <p><small>Listing 5.4 Beispiel einer normale for Schleife</small></p>
            <div class="content">
              In Listing 5.4 wird eine normal for Schleife verwendet um die Zahlen von 0 bis 9 hochzuzählen. Die Schleife funktioniert ähnlich wie die while Schleife. Diese Art von Schleife definiert die Zählvariable und das Inkrement dieser Zählvariable zusammen mit der Definition der for Schleife.
            </div>
            <div class="codebox">
<pre><code>
var chars = [“a“, “b“];
for (let i of chars) {
  console.log(i);
}

</code></pre>
            </div>
            <p><small>Listing 5.5: Beispiel einer for of Schleife</small></p>
            <div class="content">
              In Listing 5.5 wird eine for of  Schleife verwendet um über die Elemente eines Arrays zu iterieren. Jedes i ist dabei ein Wert des Arrays über das iteriert wird. Mit der for of  Schleife wird von vorne des Arrays bis zum Ende alle Elemente durchgegangen. In diesem Beispiel werden die Strings “a“ und “b“ ausgegeben.
            </div>
            <div class="codebox">
<pre><code>
var chars = {index1: “a“, index2: “b“};
for (let i in chars) {
  console.log(chars[i]);
}

</code></pre>
            </div>
            <p><small>Listing 5.6: Beispiel einer for in Schleife</small></p>
            <div class="content">
              In Listing 5.6 wird eine for in Schleife verwendet um über assoziative Arrays oder Eigenschaften eines Objektes zu iterieren. Dabei ist i der String des Eigenschaftsnamen. Hier werden wie im vorherigen Beispiel die Buchstaben “a“ und “b“ ausgegeben.
            </div>
            <h3 id="kapitel5Zsm" class="title">Zusammenfassung</h3>
            <div class="content">
              Eine Verzweigung in JavaScript wir genauso wie in anderen Programmiersprachen erstellt. Es gibt das if und wenn benötigt auch die else if und else Verzweigungen. Es gibt allgemein zwei Schleifenarten. Einmal die while Schleifen und zum anderen die for Schleifen. Die while Schleife lässt sich in als normale while Schleife schreiben oder als do while Schleife. Bei der for Schleife gibt es die for, for in und for of  Schleife.
            </div>
            <h3 id="kapitel5Aufg" class="title">Aufgaben zur Selbstüberprüfung</h3>
            <div class="content">
              <p class="absatz"><strong>Aufgabe 5.1</strong><br>
              Erstellen Sie eine do while Schleife die mit einer falschen Bedingung trotzdem den Wert einer Variable ausliest.</p>
              <p class="absatz"><strong>Aufgabe 5.2</strong><br>
              Was für unterschiedliche for Schleifen gibt es?</p>
              <p class="absatz"><strong>Aufgabe 5.3</strong><br>
              Welche Art von Schleife lohnt sich am besten um Elemente eines Arrays auszulesen?</p>
            </div>
        </div>
        <div class="textbox">
          <h1 id="kapitel6" class="title">6&emsp;Funktionen</h1>
          <div class="goals">
            Dieses Kapitel beschäftigt sich mit der Erzeugung von Funktionen, dem Aufrufen von Funktionen und Parameterübergabe und Rückgaben von Funktionen.Unter anderem werden verschiedene Arten von Funktionen kennengelernt, die die Möglichkeiten um Funktionen zu erstellen erweitern. Folgende Lernziele sollten nach dem Bearbeiten des Kapitels erreicht werden:
            <ul>
              <li>Funktionen erzeugen und aufrufen können</li>
              <li>Arrow-Funktionen erstellen können</li>
              <li>Arguments-Funktionen erstellen können</li>
            </ul>
          </div>
            <h3 id="kapitel6.1" class="title">6.1&emsp;Deklaration von Funktionen</h3>
            <div class="content">
              Eine Funktion führt Code aus, welche bei Eingabeparameter mit Daten arbeitet. Eine Funktion braucht einen Namen, eine optionale Liste von Eingabeparametern und Code welche Operationen ausführt umschlossen von eckigen Klammern. (vgl. [Fer19, S.45f]) Eine Funktion wird mit function deklariert. Die Eingabeparameter folgen in der Klammer nach dem Funktionsnamen. Eine Funktion kann nach ihrer Berechnung ein Ergebnis zurückliefern. Dieses Ergebnis kann mit return zurückgeliefert werden.
            </div>
            <div class="codebox">
<pre><code>
function zahlenAddieren(zahl1, zahl2) {
  return zahl1 + zahl2;
}

</code></pre>
            </div>
            <p><small>Listing 6.1: Funktion deklarieren</small></p>
            <div class="content">
              In Listing 6.1 wird eine Funktion mit function und dann den Namen zahlenAddieren deklariert. Diese Funktion erhält als Eingabeparameter zwei Zahlen, zahl1 und zahl2. Mit diesen beiden Eingabeparametern wird in der Funktionen weitergerechnet. Zahl1 und zahl2 werden zusammen addiert und das Ergebnis wird danach mit return zurückgegeben.
            </div>
            <h3 id="kapitel6.2" class="title">6.2&emsp;Aufrufen von Funktionen</h3>
            <div class="content">
              Funktionen in JavaScript werden wie in anderen Programmiersprachen wie Java aufgerufen. Um eine Funktion aufzurufen, weist man optional das Ergebnis einer Variable zu und schreibt die Funktionen mit ihren Eingabeparameters, wenn sie welche besitzt, aus.
            </div>
            <div class="codebox">
<pre><code>
function zahlenAddieren(zahl1, zahl2) {
  return zahl1 + zahl2;
}
var zahl = zahlenAddieren(1, 2);

</code></pre>
            </div>
            <p><small>Listing 6.2: Funktionen aufrufen</small></p>
            <div class="content">
              In Listing 6.2 wird die Funktionen zahlenAddieren mit den Eingabeparametern 1 und 2 aufgerufen. Das Ergebnis wird der Variable zahl zugewiesen. In diesem Beispiel ist das Ergebnis 3.
            </div>
            <h3 id="kapitel6.3" class="title">6.3&emsp;Arguments-Funktionen</h3>
            <div class="content">
              Eine Arguments-Funktion definiert nicht die Anzahl an Parametern, die die Funktion nehmen darf. Alle Parameter, die der Funktion übergeben werden, werden im Array arguments gespeichert, welche von der Funktion gegeben ist. Die Werte, die übergeben wurden, können dann aus dem Array gelesen werden und weiterverwendet werden.
            </div>
            <div class="codebox">
<pre><code>
function mehrereArgumente() {
  for (var i = 0; i < arguments.length; i++) {
      system.log(arguments[i]);
  }
}
mehrereArgumente(1, 2, 3);

</code></pre>
            </div>
            <p><small>Listing 6.1: Funktion deklarieren</small></p>
            <div class="content">
              In Listing 6.3 wird die Funktionsweise einer Arguments-Funktion vorgeführt. Der Funktion arguments() werden mehrere Eingabeparameter übergeben. Doch die Funktionen hat keine vordefinierten Eingabeparameter. Daher kann die Anzahl an Eingabeparameter beliebig sein. In unserem Fall werden die Zahlen 1, 2 und 3 übergeben. Diese Parameter werden automatisch in die Variable arguments gespeichert. In einer for Schleife werden die übergebenen Werte aus der Variable arguments nacheinander ausgegeben.
            </div>
            <h3 id="kapitel6.4" class="title">6.4&emsp;Arrow-Funktionen</h3>
            <div class="content">
              Mithilfe einer Arrow-Funktion können sehr schnell Funktionen erstellt werden. Es wird wie vorher eine gültige Funktion erstellt. Um eine Arrow-Funktion erstellen zu können, muss der => Operator verwendet werden. (vgl. [Fer19, S.47f]) Bei längeren Funktionen ist diese Art von Deklaration von Funktionen aufgrund von Übersichtlichkeit im Code zu vermeiden.
            </div>
            <div class="codebox">
<pre><code>
var arrowAddierer = (zahl1, zahl2) => {zahl1 + zahl2};
var arrowGibEins = _ => 1

</code></pre>
            </div>
            <p><small>Listing 6.1: Funktion deklarieren</small></p>
            <div class="content">
              In Listing 6.4 werden zwei unterschiedliche Arrow-Funktionen dargestellt. Die ersten Arrow-Funktion arrowAddiere ist eine Variable und bekommt die Funktion zugewiesen. Dabei werden die Eingabeparameter in Klammern angegeben, dann der => Operator verwendet und anschließend in eckigen Klammern die Rückgabe definiert. In diesem Fall sind die Eingabeparameter zahl1 und zahl2 und die Rückgabe ist die Addition dieser beiden Zahlen. Die zweite Arrow-Funktion gibt nur die Zahl 1 zurück. Der Unterstrich am Anfang der Zuweisung symbolisiert eine leere Liste von Eingabeparametern. Die Funktion arrowGibEins gibt beim Aufruf immer 1 zurück und nimmt keine Eingabeparameter.
            </div>
            <h3 id="kapitel6Zsm" class="title">Zusammenfassung</h3>
            <div class="content">
              Funktionen werden mit dem function keyword deklariert. Nach dem Namen der Funktion folgt die Eingabeparameterliste. Die Rückgabe einer Funktion erfolgt durch return. Funktionen werden wie auch in anderen Programmiersprachen einfach durch Angabe des Namen der Funktion und optional durch Eingabeparameter aufgerufen. Arguments-Funktionen haben keine Liste von Eingabeparametern. Diese Funktionen können so viele Parameter nehmen wie gewünscht ist. Auf diese Parameterliste kann durch die Variable arguments darauf zugegriffen werden. Arrow-Funktionen ermöglichen eine besonders kurze Definition einer Funktionen durch den => Operator.
            </div>
            <h3 id="kapitel6Aufg" class="title">Aufgaben zur Selbstüberprüfung</h3>
            <div class="content">
              <p class="absatz"><strong>Aufgabe 6.1</strong><br>
              Schreiben Sie eine möglichst kurze Funktion um zwei Zahlen zu multiplizieren.</p>
              <p class="absatz"><strong>Aufgabe 6.2</strong><br>
              Verwenden Sie eine Arguments-Funktion um zehn Zahlen zu multiplizieren.</p>
              <p class="absatz"><strong>Aufgabe 6.3</strong><br>
              Ist es sinnvoll für jede Funktion eine Arrow-Funktion zu erstellen?</p>
            </div>
        </div>
        <div class="textbox">
          <h1 id="kapitel7" class="title">7&emsp;Arrays</h1>
          <div class="goals">
            <p class="absatz">Dieses Kapitel beschäftigt sich mit der Erstellung von Arrays, der Verwendung von Arrays, mit hilfreichen Methoden um mit Arrays umzugehen und mit assoziativen Arrays. Folgende Lernziele sollten nach dem Bearbeiten des Kapitels erreicht werden:
            <ul>
              <li>Arrays initialisieren können</li>
              <li>Elemente an ein Array anhängen und Elemente löschen können</li>
              <li>assoziative Arrays erstellen können</li>
              <li>einige hilfreiche Methoden kennen, die den Umgang mit Arrays vereinfachen</li>
            </ul>
            </p>
          </div>
          <h3 id="kapitel7.1" class="title">7.1&emsp;Arrays initialisieren, Elemente hinzufügen und Elemente löschen</h3>
          <div class="content">
            Arrays in JavaScript sind dynamisch. Das bedeutet, dass Arrays beim Anhängen von Elementen automatisch wachsen. Es gibt verschiedene Möglichkeiten um ein Array in JavaScript zu initialisieren. Wird eine Länge des Arrays definiert, so gilt die Länge solange, bis ein Element außerhalb der Länge hinzugefügt wird oder ein Element hinzugefügt wird, was die Länge des Arrays überschreitet. In diesem Fall wächst das Array dynamisch mit. Wenn ein Array deklariert wird, können sofort die zu enthaltenen Elemente spezifiziert werden. Arrays können sowohl mit einem Konstruktor als auch mit einem Literal initialisiert werden. Um an einer bestimmten Stelle ein Element hinzuzufügen muss nur die Stelle des Arrays mit dem gewünschten Wert zugewiesen werden. Die Länge eines Arrays kann mit array.length abgefragt werden. Elemente können mit delete entfernt werden. Man sollte beachten, dass delete offene Stellen bzw. Lücken im Array verursachen kann, die eventuell nicht gewollt sind. (vgl. [Fer19, S.39f])
          </div>
          <div class="codebox">
<pre><code>
var arr1 = new Array();
arr1[0] = “test“;
system.log(arr1.length);
var arr2 = new Array(2);
arr2[0] = “test“;
arr2[3] = “test“;
system.log(arr2.length);
var arr3 = new Array(5, 6, 7);
var arr4 = [5, 6, 7];
delete arr4[1];

</code></pre>
          </div>
          <p><small>Listing 7.1: Beispiele für die Initialisierung von Arrays</small></p>
          <div class="content">
            <p class="absatz">In Listing 7.1 werden verschiedene Möglichkeiten verwendet um ein Array zu initialisieren. Das Array arr1 wird mit dem Konstruktor new Array() erzeugt. Dieses Array ist anfangs leer und hat eine Länge von 0. Anschließend wird der String “test“ mit arr1[0] = “test“ angehängt. Das Array ist dynamisch gewachsen und nun ist das Ergebnis von arr1.length gleich 1.</p>
            <p class ="absatz">Das Array arr2 wird mit einem Konstruktor erzeugt und es wird dabei eine Länge des Arrays definiert.  new Array(2) erzeugt ein neues Array mit der vordefinierten Länge 2. Das Array besteht aus zwei Feldern mit leerem Inhalt. Der String “test“ wird im Array an die Stelle 0 dran gehängt. Die Länge des Arrays ist dabei immer noch 2. Es wird nun der gleiche String an Stelle 3 des Arrays hinzugefügt. Die Länge des Arrays wurde nach dem Anhängen des Elements außerhalb der spezifizierten Länge dynamisch erweitert. Die Länge des Arrays arr2 ist 4.</p>
            Das Array arr3 wird mit dem Konstruktor new Array() und mit den Argumenten 5, 6 und 7 initialisiert. Das Array arr3 beinhaltet nun die Elemente 5, 6 und 7 gleich nach dem Initialisieren. Das Array arr4 wird mit einem Literal initialisiert. Es beinhaltet die gleichen Elemente wie das Array arr3. Anschließend wird das mittlere Element des Arrays gelöscht. Die Elemente 5 und 7 bleiben vorhanden und die Länge des Arrays bleibt bei der ursprünglichen Länge.
          </div>
          <h3 id="kapitel7.2" class="title">7.2&emsp;Assoziative Arrays</h3>
          <div class="content">
            Ein assoziativer Array in JavaScript ist ähnliche wie Hashtabellen. Man kann assoziative Arrays mit einem Hash mit key und value Paaren vergleichen. Jeder key beinhaltet ein value.
          </div>
          <div class="codebox">
<pre><code>
var hash = {
  “a“ : “A“,
  “b“ : “B“,
  “c“ : “C“,
}

</code></pre>
          </div>
          <p><small>Listing 7.2: Beispiel eines assoziativen Arrays</small></p>
          <div class="content">
            In Listing 7.2 wird ein assoziatives Array mit den Index, “a“ und dem Wert “A“, dem Index “b“ und dem Wert “B“ und dem Index “c“ und dem Wert “C“ erzeugt. Wie wir schon bei Schleifen gelernt haben, kann man über assoziative Arrays mit einer for in Schleife iterieren.
          </div>
          <h3 id="kapitel7.3" class="title">7.3&emsp;Hilfreiche Methoden um mit Arrays umzugehen</h3>
          <div class="content">
            <p class="absatz">JavaScript stellt mehrere hilfreiche Methoden bereit um einfacher mit Arrays umzugehen und schnell bestimmte Funktionen und Aktionen mit Arrays durchzuführen.</p>
            <p class="absatz">Einer dieser Funktionen ist push() und pop(). Diese Funktionen funktionieren genauso wie bei einem Stack. Die Methode push() fügt Elemente zu einem Array hinzu. Dieses Element wird am Ende des Arrays angehängt. Die Methode pop() entfernt das letzte Element des Arrays.</p>
            <p class="absatz">Eine weitere oft hilfreiche Methode ist join(). Mit ihr können Elemente eines Arrays zu einem String verbunden werden. Die Methode join() nimmt einen Eingabeparameter, der unter Angabe bestimmt, mit was für einem Wert oder Symbol die Elemente verbunden werden.</p>
            <p class="absatz">Die splice() Methode kann verwendet werden um Elemente hinzuzufügen oder zu entfernen. Der erste Eingabeparameter gibt an, an welcher Position die Elemente hinzugefügt oder entfernt werden sollen. Der zweite Parameter gibt an wie viele Elemente durch die neuen Elemente ersetzt werden sollen. Anschließend folgen die neuen Werte als Eingabeparameter.</p>
          </div>
          <div class="codebox">
<pre><code>
var values = ["a", "b", "c", "d"];
values.splice(2, 0, "1", "2");

var values2 = ["a", "b", "c", "d"];
values2.splice(0, 1);

</code></pre>
          </div>
          <p><small>Listing 7.3: Die Methode splice() um Elemente hinzuzufügen und zu entfernen</small></p>
          <div class="content">
            In Listing 7.3 werden die zwei Verwendungen von splice() vorgeführt. Zum Array values werden an der zweiten Index Position die Elemente “1“ und “2“ hinzugefügt. Dabei werden keine Elemente ersetzt, weil als zweite Parameterangabe eine 0 eingesetzt wurde. Der neue Array values besteht nun aus dem Array ["a", "b", "c", "d", “1“, “2“] Im zweiten Array values2 wird der Index 0 mit einem leeren Wert ersetzt. Daher wird einfach nur das erste Element des Arrays entfernt. Das neue Array besteht aus ["b", "c", "d"].
          </div>
          <h3 id="kapitel7Zsm" class="title">Zusammenfassung</h3>
          <div class="content">
            Arrays in JavaScript können auf unterschiedliche Arten deklariert werden. Wenn Elemente angehängt werden, können Arrays dynamisch wachsen. Assoziative Arrays bestehen aus mehreren Index, die Strings sind. Diese Index haben je einen Wert zugeordnet. Mit der for in Schleife kann darüber iteriert werden. Assoziative Arrays sind vergleichbar mit einer Hashtabelle. Es gibt viele hilfreiche eingebaute Methoden um sich die Arbeit mit Arrays zu erleichtern. Mit den Methoden push() und pop() können Elemente hinzugefügt werden und wieder entfernt werden. Mit splice() können gezielt mehrere Elemente gleichzeitig hinzugefügt und ersetzt werden.
          </div>
          <h3 id="kapitel7Aufg" class="title">Aufgaben zur Selbstüberprüfung</h3>
          <div class="content">
            <p class="absatz"><strong>Aufgabe 7.1</strong><br>
            Erstellen sie ein assoziatives Array und iterieren Sie über die Elemente.</p>
            <p class="absatz"><strong>Aufgabe 7.2</strong><br>
            Schauen Sie sich die Dokumentation von JavaScript Arrays an und finden Sie heraus wie die Methode shift() funktioniert.</p>
            <p class="absatz"><strong>Aufgabe 7.3</strong><br>
            Geben Sie zwei mögliche Methoden an, wie man ein Array deklarieren kann.</p>
          </div>
        </div>
        <div class="textbox">
          <h1 id="kapitel8" class="title">8&emsp;Objekte</h1>  
          <div class="goals">
            <p class="absatz">Dieses Kapitel beschäftigt sich mit der Erzeugung von Objekten durch Konstruktor-Funktionen, Factory-Funktionen und durch ein Objekt-Literal mit JSON. Es werden Prototypen in JavaScript besprochen. Folgende Lernziele sollten nach dem Bearbeiten des Kapitels erreicht werden:</p>
            <ul>
              <li>Objekte auf unterschiedliche Arten erzeugen können</li>
              <li>JavaScript Prototypen verstehen</li>
            </ul>
          </div>
          <h3 id="kapitel8.1" class="title">8.1&emsp;Erzeugung durch JSON Objekt-Literal</h3>
          <div class="content">
            In JavaScript gibt es im Gegensatz zu Java zum Beispiel keine Klassen. Objekte bestehen dabei aus Attributen und Funktionen. (vgl. [Hav18, S.61) Eine Möglichkeit ein Objekt zu erzeugen ist durch ein JSON Objekt-Literal. Dabei wird das Objekt im JSON Format erstellt und kann dann einfach als JavaScript Objekt weiter verwendet werden.
          </div>
          <div class="codebox">
<pre><code>
var auto = {
  modell: “Opel“,
  farbe: “rot“,
  info: function() {
      return this.modell;
  }
};
println(auto.info());

</code></pre>
          </div>
          <p><small>Listing 8.1: Erzeugung eines Objektes durch ein JSON Objekt-Literal</small></p>
          <div class="content">
            In Listing 8.1 wurde ein JSON Objekt-Literal erzeugt. Dieses Variable auto bekommt das erstellte Literal zugeordnet. Die Eigenschaften des Literals ist modell und farbe. Unter anderem beinhaltet das Objekt eine Funktion info(), welche die Eigenschaften modell ausgibt.
          </div>
          <h3 id="kapitel8.2" class="title">8.2&emsp;Erzeugung durch Konstruktor-Funktion</h3>
          <div class="content">
            Eine weitere Möglichkeit ein Objekt zu erzeugen ist durch eine Konstruktor-Funktion. Das Objekt wird mit function deklariert und kann dann durch new Objektname() erzeugt werden, wobei Objektname für den Namen des Objektes steht.
          </div>
          <div class="codebox">
<pre><code>
function Mensch(name, alter) {
  this.name = name;
  this.alter = alter;
  info = function() {
      return this.name + “ “ + this.alter;
  };
}
var peter = new Mensch(“Peter“, 25);
println(peter.info());

</code></pre>
          </div>
          <p><small>Listing 8.2: Erzeugung eines Objektes durch eine Konstruktor-Funktion</small></p>
          <div class="content">
            In Listing 8.2 wird ein das Objekt erstellt. Im Unterschied zu Listing 8.1 wird ein Schema erstellt, mit dem mehrere Objekte erstellt werden können. Dieses Schema ist die Funktion Mensch die mit den Eingabeparameter name und alter ein neues Objekt zurückgeben kann. Sie beinhaltet eine Funktion um die Attribute zurückzugeben. Anschließend wird ein neues Objekt vom Typ Mensch erstellt und dann die Funktion info() aufgerufen, die die angegebenen Attribute name und alter wiedergibt.
          </div>
          <h3 id="kapitel8.3" class="title">8.3&emsp;Erzeugung durch Factory-Funktion</h3>
          <div class="content">
            Die letzte Möglichkeit um Objekte zu erstellen wird unter Verwendung von Factory-Methoden durchgeführt. Bei Factory-Funktionen wird innerhalb der Funktion das Objekt erzeugt, dem Objekt die benötigten Attribute und Funktionen hinzugefügt und dann zurückgegeben. Am Ende der Funktion wird das erstellte Objekt zurückgegeben.
          </div>
          <div class="codebox">
<pre><code>
function erstelleMensch(name, alter) {
  var mensch = new Object();
  mensch.name = name;
  mensch.alter = alter;
  mensch.info = function() {
      return this.name + “ “ + this.alter;
  };
  return mensch;
}
var peter = new erstelleMensch(“Peter“, 25);
println(peter.info());

</code></pre>
          </div>
          <p><small>Listing 8.3: Erzeugung eines Objektes durch eine Factory-Methode</small></p>
          <div class="content">
            Listing 8.3 führt eine Factory-Methode vor. Hier wird in der Methode erstelleMensch  innerhalb der Funktion ein neues leeres Objekt der Variable mensch zugewiesen. Mit mensch.name und mensch.alter werden die Attribute name und alter dem Objekt mensch zugeordnet. Danach wird mit mensch.info die Funktion info() zugeordnet, die das gleiche ausführt wie die info() Funktion aus Listing 8.2. Zum Schluss der Funktion wird das neu erstellte Objekt innerhalb der Funktion zurückgegeben. Die Variable peter erhält das Objekt und kann die Methode info() ausführen.
          </div>
          <h3 id="kapitel8.4" class="title">8.4&emsp;Prototypen</h3>
          <div class="content">
            Wenn Objekte mit new erzeugt werden, dann erhält das Objekt automatisch eine Referenz zum Prototypen. Das erstellte Objekt erbt dabei alles vom Prototypen. Wenn Funktionen von diesem Objekt aufgerufen werden, die nicht existieren, wird im Prototypen nach diesen Funktionen gesucht. (vgl. [Hav18, S.99ff]) Prototypen erlauben auch das Hinzufügen von Attributen oder Funktionen zum bereits erstellten Objekt.
          </div>
          <div class="codebox">
<pre><code>
function Mensch(name, alter) {
  this.name = name;
  this.alter = alter;
}
Mensch.prototype.info = function() {
  return this.name + " " + this.alter;
};

</code></pre>
          </div>
          <p><small>Listing 8.4: Hinzufügen einer Funktion durch den Prototypen des Objekts</small></p>
          <div class="content">
            In Listing 8.5 wird eine neue Funktion mithilfe des Prototypen hinzugefügt. Die Funktion Mensch wird mit der neuen Funktion info() ergänzt. Dies erfolgt durch Verwendung des Prototypen, indem wir den Prototypen mit Mensch.prototype ansprechen und mit Mensch.prototype.info eine Funktion zuweisen.
          </div>
          <h3 id="kapitel8Zsm" class="title">Zusammenfassung</h3>
          <div class="content">
            In JavaScript gibt es keine Klassen. Die meisten Funktionen in JavaScript sind Objekte. Es gibt mehrere Methoden um ein Objekt in JavaScript zu erzeugen. Man kann ein JSON Objekt-Literal erzeugen und diesen dann einer Variable zuordnen. Man kann eine Konstruktor-Funktion erstellen, die ein Schema vorgibt, wie mehrere Objekte des Typs aussehen können. Mit new können dann mehrere Objekte diesen Typs erstellt werden. Die Verwendung von Factory-Funktionen unterscheiden sich zu Konstruktor-Funktionen darin, dass in einer Funktion das Objekt selber erstellt wird und zum Schluss zurückgegeben wird. Mit Prototypen können Attribute und Funktionen einem Objekt hinzugefügt werden. Wenn ein Objekt ein Attribut oder eine Methode nicht kennt, dann schaut es in seinen Prototypen ob das gesuchte Attribut oder die gesuchte Funktion dort existiert.
          </div>
          <h3 id="kapitel8Aufg" class="title">Aufgaben zur Selbstüberprüfung</h3>
          <div class="content">
            <p class="absatz"><strong>Aufgabe 8.1</strong><br>
            Erstellen Sie ein Schema für ein Objekt “Tier“, welches die Attribute Name, Alter und Tierart als Eingabeparameter akzeptiert.</p>
            <p class="absatz"><strong>Aufgabe 8.2</strong><br>
            Erzeugen Sie das gleiche Schema Objekt wie in Aufgabe 7.1. Verwenden Sie dabei eine andere Möglichkeit um das Schema zu programmieren.</p>
            <p class="absatz"><strong>Aufgabe 8.3</strong><br>
            Fügen Sie mithilfe eines Prototyps die Funktion “fressen()“ hinzu. Die Funktion soll eine Ausgabe machen, dass das Tier gerade frisst.</p>
          </div>
        </div>
        <div class="textbox">
          <h1 id="kapitel9" class="title">9&emsp;JavaScript und der DOM-Baum</h1>
          <div class="goals">
            <p class="absatz">Dieses Kapitel beschäftigt sich mit mit dem Zugriff auf das Document Object Model, mit dem Hinzufügen von neuen Elementen in den DOM und mit dem Zugriff auf Style des Dokuments. Folgende Lernziele sollten nach dem Bearbeiten des Kapitels erreicht werden:</p>
            <ul>
              <li>Auf den DOM  zugreifen können</li>
              <li>Den DOM verändern können</li>
              <li>Das Layout des Dokuments mit JavaScript verändern können</li>
            </ul>
          </div>
          <h3 id="kapitel9.1" class="title">9.1&emsp;Der DOM-Baum</h3>
          <div class="content">
            Webseiten im Internet sind verschickte HTML Seiten, die der Browser empfängt und dann darstellt. Diese HTML Seite verwendet der Browser dann um daraus ein Modell zur Struktur der Seite zu bauen. Auf dieses Modell, dass der Browser erstellt hat, kann dann mit JavaScript angeschaut und verändert werden. Veränderungen sind dann im Browser sichtbar. (vgl. [Hav18, S.224]) Man kann sich das DOM als einen Baum vorstellen, über den man durch einzelne Knoten komplett durchgehen kann.
          </div>
          <h3 id="kapitel9.2" class="title">9.2&emsp;Zugriff auf den DOM-Baum</h3>
          <div class="content">
            Eine Möglichkeit auf den DOM-Baum zuzugreifen ist über die Methode getElementsByTagName(). Diese Funktion findet alle untergeordneten Elemente die den angegebenen Tag Namen dazugehören. Diese Kinder von den Knoten werden als Knoten Liste gesammelt und bei Zuweisung durch eine Variable in dieser Variable gespeichert. (vgl. [Hav18, S.228f]) Diese Methode eignet sich gut um mehrere gleiche Formatierungen gleichzeitig anzuschauen oder zu verändern.
          </div>
          <div class="codebox">
<pre><code>
var paragraph = document.body.getElementsByTagName(“p“)[0].firstChild.data;
console.log(paragraph);

</code></pre>
          </div>
          <p><small>Listing 9.1: Zugriff auf den DOM-Baum über getElementsByTagName()</small></p>
          <div class="content">
            <p class="absatz">In Listing 9.1 wird der Zugriff auf den DOM-Baum mit der Funktion getElementsByTagName() demonstriert. Mit document.body.getElementsByTagName(“p“)[0].firstChild.data wird von dem ersten gefundenen Paragraphen und dessen ersten Kind die Daten, in diesem Fall einfacher Text, vom DOM-Baum geholt. Dieser Text wird in der Variable paragraph gespeichert. Der Text kann dann auf die Konsole ausgegeben werden.</p>
            <p class="absatz">Eine andere Möglichkeit um auf den DOM-Baum zuzugreifen ist über die Methode getElementsById(). Mit dieser Funktion kann man statt mehrere Knoten nur ein bestimmten Knoten finden und speichern. (vgl. [Hav18, S.229]) Diese Methode eignet sich gut um nur eine spezifische Stelle im DOM-Baum sich anzuschauen oder zu verändern.</p>
          </div>
          <div class="codebox">
<pre><code>
var einLink = document.body.getElementsById(“ersterLink“);
console.log(einLink.href);

</code></pre>
          </div>
          <p><small>Listing 9.2: Zugriff auf den DOM-Baum über getElementsById()</small></p>
          <div class="content">
            In Listing 9.2 wird mit der Methode getElementsById auf ein bestimmten Knoten zugegriffen. Die Id dieses Knoten ist “ersterLink“ und ist ein &lt;a> Tag. Die Id wird als Eingabeparameter der Funktion verwendet um den Knoten zu erhalten. Dieser Knoten wird dann in der Variable einLink gespeichert. Anschließend wird der verweisende Link mit einLink.href auf der Konsole wiedergegeben. Dabei wurde auf das Attribut href  von dem Tag &lt;a> zugegriffen.
          </div>
          <h3 id="kapitel9.3" class="title">9.3&emsp;Änderungen im DOM-Baum</h3>
          <div class="content">
            Es gibt sehr viele Möglichkeiten um einen DOM-Baum zu verändern. Mit Methoden wie zum Beispiel removeChild() können Kinder Knoten entfernt werden, mit appendChild() können Knoten am Ende angehängt werden und mit insertBefore() können Knoten vor dem ausgewählten Knoten hinzugefügt werden. Mit remove() können Knoten entfernt werden.
          </div>
          <div class="codebox">
<pre><code>
var container = document.getElementById(“erstesDiv“);
container.remove();

</code></pre>
          </div>
          <p><small>Listing 9.3: Entfernen eines Div-Containers mit der Methode remove()</small></p>
          <div class="content">
            <p class="absatz">In Listing 9.3 wird die remove() Funktion verwendet. Zuerst wird das Element mit Id erstesDiv mit getElementById() geholt und in der Variable container gespeichert. Anschließend wird auf die Variable container die Funktion remove() aufgerufen. Das bewirkt, dass das Element aus dem DOM-Baum entfernt wird.</p>
            <p class="absatz">Um in einem DOM-Baum Elemente und Klartext hinzuzufügen können die Methoden createElement() und createTextNode() verwendet werden. Die Funktion createElement() erstellt ein neues Element, wie zum Beispiel einen neuen Tag. Die Funktion createTextNode() erstellt ein neues Element, wo Text hinzugefügt werden kann. (vgl. [Hav18, S.230f]) Dies kann nützlich sein um formatierende Tags mit Klartext zu füllen.</p>
          </div>
          <div class="codebox">
<pre><code>
function createParagraph() {
  var para = document.createElement(“p“);
  var text = document.createTextNode(“Das ist ein neuer Paragraph“);
  para.appendChild(text);
  document.body.appendChild(para);
}

</code></pre>
          </div>
          <p><small>Listing 9.4: Funktion zum Hinzufügen eines neuen Paragraphens</small></p>
          <div class="content">
            In Listing 9.4 wird eine Funktion erstellt, die es ermöglicht neue Paragraphen mit dem Text “Das ist ein neuer Paragraph“ hinzuzufügen. Diese Funktion könnte zum Beispiel mit einem Knopf verknüpft werden, der auf Knopfdruck diese Funktion aufruft. In dieser Funktion wird ein neuer Paragraph mit document.createElement(“p“) erstellt und der Variable para zugewiesen. Dann wird ein Text Knoten mit document.createTextNode(“Das ist ein neuer Paragraph“) erzeugt. Dieser Knoten wird an den Paragraphen angehängt, damit der Klartext im Paragraphen enthalten ist. Dies geschieht mit der Funktion appendChild(), welche Kinder an den Knoten anhängt. Zum Schluss wird mit document.body.appendChild(para)  der erstelle Paragraph dem Dokument hinzugefügt. Dies ist nur eine Auswahl von den wichtigsten Methoden um einen DOM-Baum verändern zu können. Es gibt viele andere Funktionen die den DOM-Baum auf andere Weisen verändern. Diese können in der Dokumentation des HTML DOM-Baumes nachgelesen werden.
          </div>
          <h3 id="kapitel9.4" class="title">9.4&emsp;Änderung im Style</h3>
          <div class="content">
            Das Design und Style eines Dokuments kann mit CSS verändert werden. Mit JavaScript können diese Elemente ebenfalls verändert werden. Dabei wird das gleiche Prinzip wie mit der Methode getElementById() verwendet. (vgl. [Hav18, S. 236])
          </div>
          <div class="codebox">
<pre><code>
var paragraph = document.getElementById(“paragraph“);
paragraph.style.color = “red“;

</code></pre>
          </div>
          <p><small>Listing 9.5: Die Schriftfarbe innerhalb eines Paragraphen wird verändert</small></p>
          <div class="content">
            In Listing 9.5 wird mithilfe der Funktion getElementById() zunächst das entsprechende Element geholt. Anschließend wird das Attribut style und dessen Attribut color verändert. Die Schriftfarbe wurde auf rot geändert.
          </div>
          <h3 id="kapitel9Zsm" class="title">Zusammenfassung</h3>
          <div class="content">
            Das Document Object Model (DOM) besteht aus Elementen die ein HTML Dokument ausmachen. Der DOM-Baum stellt die Elemente in einem Baum dar. Mit getElementsByTagName() können mehrere Tags gleichzeitig angesprochen werden, die der gleichen Klasse angehören. Mit getElementsById() können bestimme Tags mit einer einzigartigen Id, die man einem Tag vergeben kann, angesprochen werden. Mit den Funktionen createElement() und createTextNode() können neue unterschiedliche Knoten angelegt werden mit appendChild() an den bestehenden DOM-Baum angehängt werden. Der Style eines HTML Tags kann im DOM-Baum ebenfalls verändert werden. Man verwendet die Funktion getElementById() und ändert anschließend das style Attribut eines Knoten.
          </div>
          <h3 id="kapitel9Aufg" class="title">Aufgaben zur Selbstüberprüfung</h3>
          <div class="content">
            <p class="absatz"><strong>Aufgabe 9.1</strong><br>
            Nehmen Sie an es gibt mehre &lt;a> Tags in einem Dokument. Greifen Sie mit getElementsByTagName() auf das erste &lt;a> Tag zu und geben Sie den Link aus, auf das der &lt;a> Tag hinweist.</p>
            <p class="absatz"><strong>Aufgabe 9.2</strong><br>
              Nehmen Sie an es existiert bereits ein HTML Dokument. Fügen Sie ein &lt;h1> Tag zu diesem Dokument hinzu. Dieses Tag soll den Klartext “Ein Titel umgeben von h1 Tags“ umgeben.</p>
            <p class="absatz"><strong>Aufgabe 9.3</strong><br>
              Es existiert folgender Teil eines HTML Dokuments:
              <div class="codebox">
<pre><code>
  &lt;div id="div_block" style="background-color:black; color:white">
  Ein div block
&lt;/div>

</code></pre>
              </div>
              In diesem Beispiel ist die Schriftfarbe weiß und die Hintergrundfarbe schwarz. Kehren Sie dies um. Verwenden Sie dabei ein &lt;script> Block um Ihre Änderungen einzutragen.</p>
          </div>
        </div>
        <div class="textbox">
            <h1 id="kapitel10" class="title">10&emsp;Events, Ausblick auf jQuery und Ajax</h1>
            <div class="goals">
              <p class="absatz">Dieses Kapitel beschäftigt sich mit der Behandlung von Events. Es wird allgemein das Handling von Events, das Event Objekt und Events durch Tastendruck besprochen. Unter anderem gibt es einen kurzen Ausblick auf  jQuery und asynchrone Verarbeitung mit Ajax. Folgende Lernziele sollten nach dem Bearbeiten des Kapitels erreicht werden:</p>
              <ul>
                <li>Events erstellen können</li>
                <li>Event Objects verwenden können</li>
                <li>Tastendruck Events erstellen können</li>
              </ul>
            </div>
            <h3 id="kapitel10.1" class="title">10.1&emsp;Event-Handling</h3>
            <div class="content">
              Events können durch alles mögliche aufgerufen werden. Beispiele sind Maus und Tastatur Eingaben durch den Benutzer. Diese Eingaben lösen dann eine Aktion im Programm aus. Wenn Event auftritt, dann wird eine bestimmte Stelle im Code signalisiert, dass eine Eingabe bzw. ein Event geschehen ist. Auf dieses Signal kann dann das Programm entsprechend reagieren. Man kann dies realisieren, indem wir bestimmte Funktionen als Event-Handlers registrieren. (vgl. [Hav18, S.243f])
            </div>
            <div class="codebox">
<pre><code>
&lt;body>
&lt;/body>
&lt;button id="Knopf">Klicke auf Button um Event auszulösen&lt;/button>
&lt;script>
document.getElementById("Knopf").addEventListener("click", function(){
  var para = document.createElement("p");
  var text = document.createTextNode("Das ist ein neuer Paragraph");
  para.appendChild(text);
  document.body.appendChild(para);
});
&lt;/script>

</code></pre>
            </div>
            <p><small>Listing 10.1: Einfacher Event-Handler</small></p>
            <div class="content">
              In Listing 10.1 wird ein einfacher Event-Handler für einen Knopf erstellt. Die Id des Knopfes ist “Knopf“ und wird mit den &lt;button> Tag erstellt. Um diesen Knopf mit einem Event-Handler zu verknüpfen wird die Funktion addEventListener() verwendet. Diese Funktion wird auf das Objekt mit dem der Event-Handler verknüpft sein soll, aufgerufen. Als ersten Eingabeparameter nimmt die Funktion addEventListener() die Art von Event, die ausgeführt werden muss, damit der Event-Handler reagiert. In diesem Fall ist es ein Klick-Event. Als zweiten Eingabeparameter nimmt es eine Funktion, die ausgeführt wird, wenn der Knopf gedrückt wird. Wenn der Knopf gedrückt wird, dann wird ein neues Element erstellt und dem DOM-Baum hinzugefügt. Dies passiert bei jedem Anklicken des Knopfes.
            </div>
            <h3 id="kapitel10.2" class="title">10.2&emsp;Event-Objekte</h3>
            <div class="content">
              Die Funktion, die ausgeführt wird, wenn ein Event passiert, kann auch ein Eingabeparameter haben. Dieser Eingabeparameter ist das Event selber und ist ein Objekt. Mit diesem können weitere Informationen über die Art des Events herausgefunden werden. (vgl. [Hav18, S.245])
            </div>
            <div class="codebox">
<pre><code>
&lt;body>
&lt;/body>
&lt;button id="Knopf">Drück mich&lt;/button>
&lt;script>
document.getElementById("Knopf").addEventListener("mousedown", function(event) {
if (event.button == 0) {
  var para = document.createElement("p");
  var text = document.createTextNode("linke Maustaste gedrückt");
  para.appendChild(text);
  document.body.appendChild(para);
} else if (event.button == 1) {
  var para = document.createElement("p");
  var text = document.createTextNode("mittlere Maustaste gedrückt");
  para.appendChild(text);
  document.body.appendChild(para);
} else if (event.button == 2) {
  var para = document.createElement("p");
  var text = document.createTextNode("rechte Maustaste gedrückt");
  para.appendChild(text);
  document.body.appendChild(para);
}
});
&lt;/script>

</code></pre>
            </div>
            <p><small>Listing 10.2: Beispielhafte Verwendung eines Event-Objekts bei Knopfdruck</small></p>
            <div class="content">
              In Listing 10.2 wird ein Event-Objekt verwendet, um die Art des Mausklicks auf den Knopf zu bestimmen. Es wird diesmal das Event mousedown verwendet, damit andere Mausklicks, statt nur die linke Maustaste, registriert werden. In diesem Beispiel hat unsere Funktion im Eingabeparameter der Funktion addEventListener() selber ein Eingabeparameter. Dieser Eingabeparameter event ist das Event-Objekt. Mit diesem kann mithilfe von Verzweigungen und der Abfrage event.button bestimmt werden, welche Maustaste gedrückt wurde. Dabei ist button ein Attribut von event, und wird beim Mausklick einer Zahl zugewiesen. Die Zahl ist abhängig von der Art des Mausklicks. In diesem Fall steht die null für die linke Maustaste, die eins für die mittlere Maustaste und die zwei für die rechte Maustaste. Je nach dem welche Maustaste gedrückt wurde, wird ein Paragraph mit entsprechenden Text in den body des Dokuments hinzugefügt.
            </div>
            <h3 id="kapitel10.3" class="title">10.3&emsp;Tastendruck-Events</h3>
            <div class="content">
              Eine weitere wichtige und oft verwendete Event Art sind Tastendruck-Events. Sie funktionieren genauso mit Event-Objekten wie das Beispiel zuvor. Bei  Tastendruck ist das auszuführende Event abhängig von der bestimmten Taste, die gedrückt wurde.
            </div>
            <div class="codebox">
<pre><code>
&lt;body>
  &lt;p id="para">Schriftfarbe kann geändert werden mit R, G oder B Taste&lt;/p>
&lt;/body>
&lt;script>
window.addEventListener("keypress", function(event) {
  if (event.key == "r") {
    var paragraph = document.getElementById("para");
    paragraph.style.color = "red";
  }
});
window.addEventListener("keypress",  function(event) {
  if (event.key == "b") {
    var paragraph = document.getElementById("para");
    paragraph.style.color = "blue";
  }
});
window.addEventListener("keypress",  function(event) {
  if (event.key == "g") {
    var paragraph = document.getElementById("para");
    paragraph.style.color = "green";
  }
});
&lt;/script>

</code></pre>
            </div>
            <p><small>Listing 10.3: Unterschiedliche Schriftfarbe bei Tastendruck</small></p>
            <div class="content">
              In Listing 10.3 wird vorgeführt, wie Tastendruck verwendet werden kann um unterschiedliche Events auszuführen. Die Art des Events ist abhängig von der Taste, die gedrückt wurde. Wenn die Taste 'R' gedrückt wird, dann erscheint eine rote Schrift im Paragraphen. Bei 'B' eine blaue Schrift und bei 'G' eine grüne Schrift im Paragraphen.
            </div>
            <h3 id="kapitel10.4" class="title">10.4&emsp;Ausblick auf jQuery</h3>
            <div class="content">
              JavaScript stellt eine Menge an nutzvollen Frameworks zur Verfügung. Eines dieser Frameworks ist jQuery. Es bietet Funktionen zur Verfügung um DOM-Bäume besser zu navigieren, unterstützt Ajax und CSS. Insbesondere vereinfacht es DOM Zugriffe. Statt mehrere Methoden wie getElementById() und getElementsByTagName() zu haben, verwendet jQuery nur noch die $ Funktion. Mit ihr können Elemente einer Webseite referenziert werden. (vgl. [Ste18, S.31ff]) Weitere Informationen und eine Einführung von jQuery finden Sie im Buch “jQuery, Das universelle JavaScript-Framework für das interaktive Web und mobile Apps“ von  Ralph Steyer. (vgl. [Ste18])
            </div>
            <h3 id="kapitel10.5" class="title">10.5&emsp;Ausblick auf Ajax</h3>
            <div class="content">
              Browser und Webserver kommunizieren mithilfe von HTTP Anfragen und HTTP Antworten. Die Anfrage folgt an den Webserver vom Browser. Diese Anfrage wird dann vom Webserver bearbeitet. Nach der Bearbeitung folgt eine Antwort vom Webserver. Um die Antwort des Webservers anzeigen zu können, muss die komplette Seite neu geladen werden. (vgl. [MZ08, S.26]) Bei Asynchronous JavaScript and XML (Ajax) ist dies nicht der Fall. Unter Verwendung von Ajax wird nur ein Teil der Seite aktualisiert. Dieser Teil ist die vom Nutzer verwendete Teil. Dabei muss die gesamte Seite nicht komplett neu geladen werden müssen, nachdem eine HTTP Anfrage verschickt wurde. (vgl. [MZ08, S.31f]) Weitere Informationen zu Ajax finden Sie im Buch “AJAX, Geschichte, Technologie, Zukunft“ von Hassan El Moussaoui und Klaus Zeppenfeld. (vgl. [MZ08])
            </div>
            <h3 id="kapitel10Zsm" class="title">Zusammenfassung</h3>
            <div class="content">
              Mit addEventListener() können Elemente mit einem Event-Handler verbunden werden. Wenn eine Aktion vom Nutzer auf das verknüpfte Element ausgeführt wird, zum Beispiel ein Mausklick, dann wird der Event-Handler angestoßen. Dieser Event-Handler führt anschließend eine definierte Funktion aus. Mit dem Event-Objekt und dessen Attribute können weitere Informationen über das ausgeführte Event herausgefunden werden.
            </div>
            <h3 id="kapitel10Aufg" class="title">Aufgaben zur Selbstüberprüfung</h3>
            <div class="content">
              <p class="absatz"><strong>Aufgabe 10.1</strong><br>
              Erstellen Sie drei Knöpfe, die unterschiedliche Hintergrundfarben ermöglichen.</p>
            </div>
        </div>
        <div class="textbox">
          <h1  id="Lösungen" class="title">A.&emsp;Lösungen der Aufgaben zur Selbstüberprüfung</h1>
          <p class="absatz">
            <strong>Aufgabe 1.1</strong><br>
            Nein, wenn JavaScript in einem Browser ausgeführt wird, so ermöglicht JavaScript nur Zugriff auf Objekte des Browsers und nicht auf die Dateien des Rechners. Dies wird durch das Prinzip des “sandboxing“ verursacht.
          </p>
          <p class="absatz">
            <strong>Aufgabe 1.2</strong><br>
            Das ECMAScript ist ein Dokument, dass von der „Ecma International organization“ verfasst wurde. Es umfasst das Standard, wie die Sprache JavaScript funktionieren soll.
          </p>
          <p class="absatz">
            <strong>Aufgabe 2.1</strong><br>
            Die wichtigsten Tags eines HTML Dokuments sind &lt;!doctype html>, &lt;html>, &lt;head> und &lt;body>. Sie dienen zur grundlegenden Strukturierung eines HTML Programms.
          </p>
          <p class="absatz">
            <strong>Aufgabe 2.2</strong><br>
            Drei Tags um Klartext in einer HTML Seite zu formatieren sind zum Beispiel &lt;p>, &lt;h1> und &lt;a>.
          </p>
          <p class="absatz">
            <strong>Aufgabe 2.3</strong><br>
            Eine Möglicht ist die interne Einbettung von JavaScript. Sie ist das Einfügen von JavaScript Code innerhalb des &lt;script> und &lt;/script> Tags. Eine andere Möglichkeit ist die externe Einbettung durch das Attribut src des &lt;script> Tags, wo der Name der JavaScript Datei angegeben wird.
          </p>
          <p class="absatz">
            <strong>Aufgabe 3.1</strong><br>
            Es können mit den keyword's var, let und const Variablen deklariert werden.
          </p>
          <p class="absatz">
            <strong>Aufgabe 3.2</strong><br>
            JavaScript unterstützt Boolean, Number, String, Date, Array, Objekt, Function und RegExp.
          </p>
          <p class="absatz">
            <strong>Aufgabe 3.3</strong><br>
            <div class="codebox">
<pre><code>
function doSomething() {
  variable = 10;
  console.log(variable);
  var variable;
}

doSomething();

</code></pre>
            </div>
          </p>
          <p class="absatz">
            <strong>Aufgabe 4.1</strong><br>
            Mit der Funktion typeof() kann der Typ einer Variable herausgefunden werden.
          </p>
          <p class="absatz">
            <strong>Aufgabe 4.2</strong><br>
            JavaScript besteht hauptsächlich aus Objekten. Werte von Variablen mit Datentypen Number und String zum Beispiel sind Objekte. Jedes Objekt hat einen Wahrheitswert. Die Truthiness legt dabei fest, welches Objekt welchen Wahrheitswert besitzt. Es gilt allgemein, dass false, 0, -0, NaN, null und undefined unwahr sind. Alle anderen Werte sind true.
          </p>
          <p class="absatz">
            <strong>Aufgabe 4.3</strong><br>
            Nein, solche Art von Variablen erhalten einen globalen Scope.
          </p>
          <p class="absatz">
            <strong>Aufgabe 5.1</strong><br>
            <div class="codebox">
<pre><code>
var i = 0;
do  {
  console.log(i);
  i++;
} while (false)

</code></pre>
            </div>
          </p>
          <p class="absatz">
            <strong>Aufgabe 5.2</strong><br>
            Es gibt die normale for Schleife, die for in Schleife und die for of  Schleife
          </p>
          <p class="absatz">
            <strong>Aufgabe 5.3</strong><br>
            Es würde sich am besten die for of Schleife eignen um Elemente aus einem Array auszulesen.
          </p>
          <p class="absatz">
            <strong>Aufgabe 6.1</strong><br>
            <div class="codebox">
<pre><code>
var c = (a, b) => {a * b};

</code></pre>
            </div>
          </p>
          <p class="absatz">
            <strong>Aufgabe 6.2</strong><br>
            <div class="codebox">
<pre><code>
function varag() {
  var summe = 0;
  for (var i = 0; i < arguments.length; i++) {
      Summe *= arguments[i];
  }
  return summe;
}
var a = varag(1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
system.log(a);

</code></pre>
            </div>
          </p>
          <p class="absatz">
            <strong>Aufgabe 6.3</strong><br>
            Nein, diese Vorgehensweise würde zu Unübersichtlichkeit im Code führen. Es ist besser eine Funktion normal zu deklarieren wenn die Funktion länger ist.
          </p>
          <p class="absatz">
            <strong>Aufgabe 7.1</strong><br>
            <div class="codebox">
<pre><code>
var hash = {
  “a“ : “A“,
  “b“ : “B“,
  “c“ : “C“,
}
for (i in hash) {
  System.log(i);
}

</code></pre>
            </div>
          </p>
          <p class="absatz">
            <strong>Aufgabe 7.2</strong><br>
            Die shift() Methode entfernt das erste Element eines Arrays und verschiebt alle anderen Werte um eine Stelle nach links bzw. erniedrigt den Index jedes Elements um eins.
          </p>
          <p class="absatz">
            <strong>Aufgabe 7.3</strong><br>
            <div class="codebox">
<pre><code>
var arr1 = new Array();
var arr2 = [5, 6, 7];

</code></pre>
            </div>
          </p>
          <p class="absatz">
            <strong>Aufgabe 8.1</strong><br>
            <div class="codebox">
<pre><code>
function erstelleTier(name, alter, tierart) {
  var tier = new Object();
  tier.name = name;
  tier.alter = alter;
  tier.tierart = tierart;
  return tier;
}

</code></pre>
            </div>
          </p>
          <p class="absatz">
            <strong>Aufgabe 8.2</strong><br>
            <div class="codebox">
<pre><code>
function Tier(name, alter, tierart) {
  this.name = name;
  this.alter = alter;
  this.tierart = tierart;
}

</code></pre>
            </div>
          </p>
          <p class="absatz">
            <strong>Aufgabe 8.3</strong><br>
            <div class="codebox">
<pre><code>
Tier.prototype.fressen = function() {
  println(“Tier frisst gerade“);
};

</code></pre>
            </div>
          </p>
          <p class="absatz">
            <strong>Aufgabe 9.1</strong><br>
            <div class="codebox">
<pre><code>
var link = document.body.getElementsByTagName("a")[0];
console.log(link.href);

</code></pre>
            </div>
          </p>
          <p class="absatz">
            <strong>Aufgabe 9.2</strong><br>
            <div class="codebox">
<pre><code>
&lt;body>
&lt;/body>
&lt;script>
var h1 = document.createElement("h1");
var text = document.createTextNode("Ein Titel umgeben von h1 Tags");
h1.appendChild(text);
document.body.appendChild(h1);
&lt;/script>

</code></pre>
            </div>
          </p>
          <p class="absatz">
            <strong>Aufgabe 9.3</strong><br>
            <div class="codebox">
<pre><code>
&lt;div id="div_block" style="background-color:black; color:white">
  Ein div block
&lt;/div>
&lt;script>
  var div_block = document.getElementById("div_block");
  div_block.style.backgroundColor = "white";
  div_block.style.color = "black";
&lt;/script>

</code></pre>
            </div>
          </p>
          <p class="absatz">
            <strong>Aufgabe 10.1</strong><br>
            <div class="codebox">
<pre><code>
&lt;body>
&lt;p>&lt;button id="rot">roter Hintergrund&lt;/button>&lt;/p>
&lt;p>&lt;button id="grün">grüner Hintergrund&lt;/button>&lt;/p>
&lt;p>&lt;button id="blau">blauer Hintergrund&lt;/button>&lt;/p>
&lt;/body>
&lt;script>
document.getElementById("rot").addEventListener("click", function(){
  document.body.style.backgroundColor = "red";
});
document.getElementById("grün").addEventListener("click", function(){
  document.body.style.backgroundColor = "green";
});
document.getElementById("blau").addEventListener("click", function(){
  document.body.style.backgroundColor = "blue";
});
&lt;/script>

</code></pre>
            </div>
          </p>
        </div>
        <div class="textbox">
          <h1 id="Literatur" class="title">B.&emsp;Literaturverzeichnis</h1>
          <div class="content">
            [Hav18] M. Haverbeke: Eloquent JavaScript, 3rd Edition: A Modern Introduction to Programming; No Starch Press; Auflage: 3rd ; 2018; ISBN: 1593279507<br>[Bae19] S. Bae: JavaScript Data Structures and Algorithms; Apress, Berkeley, CA; 2019; ISBN: 978-1-4842-3987-2<br>[Fer19] F. Russ: Beginning JavaScript; Apress, Berkeley, CA; 2019; ISBN: 978-1-4842-4394-7<br>[Ste18] R. Steyer: jQuery, Das universelle JavaScript-Framework für das interaktive Web und mobile Apps; Carl Hanser Verlag GmbH & Co. KG; ISBN: 978-3-446-45558-0<br>[MZ08] H. Moussaoui, K. Zeppenfeld: AJAX, Geschichte, Technologie, Zukunft; Springer, Berlin, Heidelberg; ISBN: 978-3-540-73112-2
          </div>
        </div>
        <div class="textbox">
          <h1 id="Abbildungen" class="title">C.&emsp;Abbildungsverzeichnis</h1>
          <div class="content">
<p>Listing 2.1: Die Grundstruktur eines HTML Programms</p>
<p>Listing 2.2: Einbettung über das &lt;script> Tag</p>
<p>Listing 2.3: externe Einbettung von JavaScript über eine Datei</p>
<p>Listing 3.1: Beispielangabe in die Konsole von Chrome</p>
<p>Listing 3.2: Code-Block mit let</p>
<p>Listing 3.3: Code-Block mit var</p>
<p>Listing 3.4: Variablen Deklaration mit const</p>
<p>Listing 3.5: Erzeugung von Variablen durch Konstruktoren</p>
<p>Listing 3.6: Erzeugung von Variablen durch Literale</p>
<p>Listing 3.7: Beispiel zur Verwendung von Hoisting</p>
<p>Listing 4.1: Unterschied zwischen == und ===</p>
<p>Listing 4.2: Truthiness von zwei Werten</p>
<p>Listing 4.3: Unterschiedlicher Scope von Variablen</p>
<p>Listing 5.1: Verzweigungen</p>
<p>Listing 5.2: Beispiel einer while Schleife</p>
<p>Listing 5.3: Beispiel einer do-while Schleife</p>
<p>Listing 5.4: Beispiel einer normale for Schleife</p>
<p>Listing 5.5: Beispiel einer for of Schleife</p>
<p>Listing 5.6: Beispiel einer for in Schleife</p>
<p>Listing 6.1: Funktion deklarieren</p>
<p>Listing 6.2: Funktionen aufrufen</p>
<p>Listing 6.3: Beispiel einer Arguments-Funktion</p>
<p>Listing 6.4: Beispiel einer Arrow-Funktion</p>
<p>Listing 7.1: Beispiele für die Initialisierung von Arrays</p>
<p>Listing 7.2: Beispiel eines assoziativen Arrays</p>
<p>Listing 7.3: Die Methode splice() um Elemente hinzuzufügen und zu entfernen</p>
<p>Listing 8.1: Erzeugung eines Objektes durch ein JSON Objekt-Literal</p>
<p>Listing 8.2: Erzeugung eines Objektes durch eine Konstruktor-Funktion</p>
<p>Listing 8.3: Erzeugung eines Objektes durch eine Factory-Methode</p>
<p>Listing 8.4: Hinzufügen einer Funktion durch den Prototypen des Objekts</p>
<p>Listing 9.1: Zugriff auf den DOM-Baum über getElementsByTagName()</p>
<p>Listing 9.2: Zugriff auf den DOM-Baum über getElementsById()</p>
<p>Listing 9.3: Entfernen eines Div-Containers mit der Methode remove()</p>
<p>Listing 9.4: Funktion zum Hinzufügen eines neuen Paragraphens</p>
<p>Listing 9.5: Die Schriftfarbe innerhalb eines Paragraphen wird verändert</p>
<p>Listing 10.1: Einfacher Event-Handler</p>
<p>Listing 10.2: Beispielhafte Verwendung eines Event-Objekts bei Knopfdruck</p>
<p>Listing 10.3: Unterschiedliche Schriftfarbe bei Tastendruck</p>
          </div>
        </div>
    </div>
    <?php require("footer.php")?>
<script src="cookie.js"></script>
</body>
</html>
