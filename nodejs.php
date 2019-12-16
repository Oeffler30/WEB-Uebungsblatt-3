<!DOCTYPE html>
<html lang="en">
<?php 
require("stylesheet_daniel.php");
$seitenname = "NodeJS";
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
        $nodejs = "current";
        require("menu.php");
        ?>
    <div class="content-container">
        <h1>NodeJS</h1>
	<div class="textbox">
		<div class="liste">
			<ul style="list-style-type:none">
				<li><a style="color:white" href="#was">1. Was ist NodeJS?</a></li>
				<li><a style="color:white" href="#programmieren">2. Programmieren mit NodeJS</a></li>
			</ul>
			<div class="liste"><ul style="list-style-type:none">
					<li><a style="color:white" href="#server">    2.1 Ein WebSocket-Server und ein WebServer</a></li>
					<li><a style="color:white" href="#idee">    2.2 Die Idee von NodeJS</a></li>
					<li><a style="color:white" href="#clientAction">    2.3 Aktionen des Clients</a></li>
					<li><a style="color:white" href="#serverAction">    2.4 Aktionen des Servers</a></li>
					<li><a style="color:white" href="#wasNoch">    2.5 Was muss jetzt noch bis zur fertigen Version getan werden?</a></li>
				</ul>
			</div>
			<ul style="list-style-type:none">
				<li><a style="color:white" href="#literatur">3. Weiterführende Literatur</a></li>
			</ul>
		</div>
	</div>
        <div class="textbox">
	    <h1 id="was">1. Was ist NodeJS?</h1>
            <p>NodeJS ist eine serverseitige Plattform in der Softwareentwicklung zum Betrieb von Netzwerkanwendungen. Insbesondere lassen sich Webserver damit realisieren. Node.js bietet eine ressourcensparende Architektur, die eine besonders große Anzahl gleichzeitig bestehender Netzwerk-verbindungen ermöglicht. Die Skriptsprache JavaScript gibt eine ereignisgesteuerte Architektur vor. Diese hat im Serverbetrieb den Vorteil, pro bestehender Verbindung weniger Arbeitsspeicher zu verbrauchen als bei vergleichbaren Anwendungen, die für jede geöffnete Verbindung einen eigenen Thread starten.<br><br>Node.js enthält einige Module, die direkt in das Binärpaket kompiliert wurden. Dazu gehören:<br><br></p>
            <div class="liste">
		<ul>
			<li>das Modul für asynchronen Netzwerkzugriff</li>
			<li>Adapter für das Dateisystem</li>
			<li>Puffer
			<li>Zeitgeber</li>
			<li>allgemein gehaltene Datenstrom-Klasse</li>
	    	</ul>
	    </div>
        </div>
        <div class="textbox">
            <p>Darüber hinaus können zusätzliche Module eingebunden werden, zum Beispiel über vorkompilierte Dateien mit der Dateiendung .node oder in Form einfacher JavaScript-Dateien. Zur Verwaltung der Module gibt es den Paketmanager npm, in dessen Depot sich über 475.000 Pakete befinden.<br>Einen server-seitigen Anwendungsfall für Node.JS betrachten wir anhand eines Schach-Beispiels:</p>
        </div>
        <div class="textbox">
	    <h1 id="programmieren">2. Programmieren mit NodeJS</h1>
	    <h2 id="server">2.1 Ein WebSocket-Server und ein WebServer</h2>
            <p></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/NodeJS 1.png" alt="Ein WebSocket-Server und ein Web-Server"><br>Abbildung 1: Ein WebSocket-Server und ein Web-Server</p>
        </div>
        <div class="textbox">
            <p>Das Schachbrett selbst wird in HTML aufgebaut:</p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/NodeJS 2.png" alt="Das Layout und die Randfelder werden umgesetzt"><br>Abbildung 2: Das Layout und die Randfelder werden umgesetzt<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/NodeJS 3.png" alt="Die Randfelder werden beschriftet"><br>Abbildung 3: Die Randfelder werden beschriftet<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 4.png" alt="Den Spielfeldern wird der passende Hintergrund zugewiesen"><br>Abbildung 4: Den Spielfeldern wird der passende Hintergrund zugewiesen</p>
        </div>
        <div class="textbox">
            <p>Das Schachbrett mit dessen Figuren kann man direkt in HTML in Fleißarbeit fest erstellen. Man kann das Schachbrett mit dessen Figuren auch in JavaScript per document.write(content) mit wenigen Schleifen erstellen. Alternativ dazu kann man das Schachbrett auch in JavaScript durch Zugriff auf den DOM-Baum erstellen mit<br><br></p>
	    <div class="liste">
		<ul>
			<li>document.createElement("table / tr / td")</li>
			<li>appendChild("tr / td")</li>
			<li>td.setAttribute("style","background:#CF8F4F;")</li>
		</ul>
	    </div>
        </div>
        <div class="textbox">
            <p>Wenn Sie Designer sind, können Sie auch das ganze Brett incl. Beschriftung auch als Bild auch in PhotoShop zeichnen und per CSS als Hintergrund der Tabelle einblenden.</p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 5.png" alt="Das Schachbrett als Hintergrundbild"><br>Abbildung 5: Das Schachbrett als Hintergrundbild</p>
        </div>
        <div class="textbox">
	    <h2 id="idee">2.2 Die Idee von NodeJS</h2>
            <p>Damit mehrere Spieler zusammen spielen können, brauchen wir entweder eine (eher untypische) Peer-to-Peer Architektur oder einen Server. Im Frontend sind HTML5 und CSS3 etabliert. Beides sind jedoch keine Programmiersprachen. Zusätzlich hat sich auf der Seite des Clients JavaScript als einzige turing-vollständige und leicht verständliche Programmiersprache etabliert. Wieso soll man auf dem Server eine andere Sprache verwenden? Nehmen wir doch auch dort JavaScript!</p>
        </div>
        <div class="textbox">
            <p>Was brauchen wir noch für das Spiel?<br><br></p>
	    <div class="liste">
		    <ol>
			<li>eine Datenstruktur: Wie speichere ich das aktuelle Schachbrett im laufenden Spiel?</li>
			<li>die Schach-Regeln: Wer darf welche Figur wohin ziehen?</li>
			<li>die Vorgänge, wie man eine Figur konkret zieht und wie man das Schachbrett aktualisiert, wenn der andere gezogen hat</li>
		    </ol>
	    </div>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 6.png" alt="Eine mögliche Datenstruktur"><br>Abbildung 6: Eine mögliche Datenstruktur<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 7.png" alt="Erlaubte Züge des Springers müssen implementiert werden"><br>Abbildung 7: Erlaubte Züge des Springers müssen implementiert werden</p>
        </div>
        <div class="textbox">
            <p>Die Regeln sind abhängig vom Typ der Figur: T,S,L,D,K,B. Die Regeln für jede Figur kann man in je einer JavaScript-Funktion hinterlegen. So kann der Springe auf <span class="rot">g1</span> bzw. auf <span class="rot">7/1</span> auf die folgenden Felder gezogen werden. Ein Array dieser Felder, also <span class=“rot“>6/3</span> und <span class=“rot“>8/3</span> ist dann die Rückgabe der Funktion. Wieso kann der Springer <span class=“rot“>nicht auf e2</span> ziehen.</p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 8.png" alt="Abfragen der erlaubten Züge"><br>Abbildung 8: Abfragen der erlaubten Züge<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 9.png" alt="Funktion zum Abfragen der erlaubten Züge"><br>Abbildung 9: Funktion zum Abfragen der erlaubten Züge<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 12.png" alt="Erlaubte Züge des Springers"><br>Abbildung 10: Erlaubte Züge des Springers<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 11.png" alt="Hinzufügen der möglichen Züge"><br>Abbildung 11: Hinzufügen der möglichen Züge<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 13.png" alt="Implementation der Zugmöglichkeiten"><br>Abbildung 12: Implementation der Zugmöglichkeiten</p>
        </div>
        <div class="textbox">
            <p>Auf dieselbe Art kann man die Regeln der anderen Figuren einbinden.<br>Doch wie bekommt man das JavaScript nun auf einen NodeJS-Server?</p>
        </div>
        <div class="textbox">
	    <h2 id="clientAction">2.3 Aktionen des Clients</h2>
            <p></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 14.png" alt="Modellhafte Verbindung zwischen den Clients und dem Server"><br>Abbildung 13: Modellhafte Verbindung zwischen den Clients und dem Server<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 15.png" alt="Eingaben im Footer des Clients (eingabe.hmtl)"><br>Abbildung 14: Eingaben im Footer des Clients (eingabe.hmtl)<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 16.png" alt="Senden der Eingaben im Head des Clients"><br>Abbildung 15: Senden der Eingaben im Head des Clients<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 17.png" alt="Auswerten der Antwort des Servers"><br>Abbildung 16: Auswerten der Antwort des Servers<br><br></p>
        </div>
        <div class="textbox">
	    <h2 id="serverAction">2.4 Aktionen des Servers</h2>
            <p></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 18.png" alt="server.js als Kern des Servers"><br>Abbildung 17: server.js als Kern des Servers<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 19.png" alt="neue Socket-Verbindung auf Port 8000"><br>Abbildung 18: neue Socket-Verbindung auf Port 8000<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 20.png" alt="Anbindung des Spiels"><br>Abbildung 19: Anbindung des Spiels<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 21.png" alt="Allen Clients mitteilen, wer gerade am Zug ist"><br>Abbildung 20: Allen Clients mitteilen, wer gerade am Zug ist</p>
        </div>
        <div class="textbox">
            <p>Die Zugeingabe über ein Textfeld ist altmodisch. Besser ist es, bei der Erzeugung des Bretts jede Tabellen-Zelle anklickbar zu machen & eine JavaScript-Funktion aufzurufen, die dann die entsprechenden Koordinaten zum Server sendet. Die server.js generiert dann Folgendes für jedes Schachfeld:<br><br>
<span class=”textCode”>content+="<td onclick='klick("+i+","+j+");'>"; // klick(4,1)</span><br><br>Die Klick-Funktion in der header.html schaut nach, ob es der erste Klick „d2-“ oder der zweite Klick „d2-d3“ auf ein Feld war und sendet die Anfrage in beiden Fällen an den Server.</p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 22.png" alt="Senden des Zugs vom Client an den Server"><br>Abbildung 21: Senden des Zugs vom Client an den Server<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 23.png" alt="Der Server lädt und speichert die Spieldaten mit LowDB im JSON-Format"><br>Abbildung 22: Der Server lädt und speichert die Spieldaten mit LowDB im JSON-Format<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 24.png" alt="Die im JSON-Format gespeicherten Spieldaten"><br>Abbildung 23: Die im JSON-Format gespeicherten Spieldaten</p>
        </div>
        <div class="textbox">
	    <h2 id="wasNoch">2.5 Was muss jetzt noch bis zur fertigen Version getan werden?</h2>
            <p>Die Regeln der anderen Figuren sind einzubinden. Ich darf nur ziehen, wenn ich durch meinen Zug nicht selbst im Schach stehe: Es ist also zusätzlich eine globale Sicht auf das Brett notwendig! Bei einer Rochade werden 2 Figuren gleichzeitig bewegt! Gelangt ein Bauer zu dem anderen Ende des Bretts, so kann er wahlweise in eine Dame, Turm, Läufer oder Springer umgewandelt werden. Bei „en passant“ schlägt ein Bauer auf ein leeres Feld, nachdem der Gegner einen Doppelschritt seines Bauern getätigt hat. Das Spielende:<br><br></p>
	    <div class="liste">
		<ul>
			<li>Wann hat man verloren (Matt)?</li>
			<li>Wann ist es unentschieden (Remis / Patt)?</li>
	       </ul>
	    </div>
        </div>
        <div class="textbox">
	    <h1 id="literatur">3. Weiterführende Literatur</h1>
            <p>Node.js: Professionell hochperformante Software entwickeln; Robert Prediger, Ralph Winzinger; Hanser-Verlag; 2015; Print-ISBN: 978-3-446-43722-7; E-Book-ISBN: 978-3-446-43758-6</p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/NodeJS Buch.png" alt="Weiterführende Literatur"><br>Abbildung 24: Weiterführende Literatur</p>
        </div>
    </div>
    <?php require("footer.php")?>
<script src="cookie.js"></script>
</body>
</html>
