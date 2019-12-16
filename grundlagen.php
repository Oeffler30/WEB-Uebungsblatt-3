<!DOCTYPE html>
<html lang="en">
<?php 
require("stylesheet_daniel.php");
$seitenname = "WEB Grundlagen";
require("header.php");
?>
    <body>
        <?php 
        $index = "";
        $grund = "current";
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
        <h1>Grundlagen</h1>
	<div class="textbox">
		<div class="liste">
			<ul style="list-style-type:none">
				<li><a style="color:white" href="#ip+ports+sockets">1. IP-Adressen, TCP-Ports, Sockets</a></li>
			</ul>
			<div class="liste">
				<ul style="list-style-type:none">
					<li><a style="color:white" href="#ip">1.1 IP-Adressen</a></li>
					<li><a style="color:white" href="#ports">1.2 TCP-Ports</a></li>
					<li><a style="color:white" href="#sockets">1.3 Sockets</a></li>
					<li><a style="color:white" href="#ipzsm">1.4 Zusammenfassung</a><li>
				</ul>
			</div>
			<ul style="list-style-type:none">
				<li><a style="color:white" href="#uri+url+urn">2. URI, URL, URN</a></li>
			</ul>
			<div class="liste">
				<ul style="list-style-type:none">
					<li><a style="color:white" href="#uri">2.1 URI</a></li>
					<li><a style="color:white" href="#url">2.2 URL</a></li>
					<li><a style="color:white" href="#urn">2.3 URN</a></li>
					<li><a style="color:white" href="#urizsm">2.4 Zusammenfassung</a><li>
				</ul>
			</div>
			<ul style="list-style-type:none">
				<li><a style="color:white" href="#kommunikation">3. Kommunikation über HTTP</a></li>
			</ul>
			<div class="liste">
				<ul style="list-style-type:none">
					<li><a style="color:white" href="#client+server">3.1 Client - Server - Kommunikation</a></li>
					<li><a style="color:white" href="#statuscodes">3.2 HTTP-Statuscodes</a></li>
					<li><a style="color:white" href="#methoden">3.3 HTTP-Methoden</a></li>
					<li><a style="color:white" href="#sessions">3.4 Notwendigkeit von Sessions</a><li>
					<li><a style="color:white" href="#httpzsm">3.5 Zusammenfassung</a><li>
				</ul>
			</div>
			<ul style="list-style-type:none">
				<li><a style="color:white" href="#html+xml+json">4. HTML, XML und JSON</a></li>
			</ul>
			<div class="liste">
				<ul style="list-style-type:none">
					<li><a style="color:white" href="#html">4.1 HTML</a></li>
					<li><a style="color:white" href="#xml+schema">4.2 XML</a></li>
				</ul>
				<div class="liste">
					<ul style="list-style-type:none">
						<li><a style="color:white" href="#schema">4.2.1 XML und XML-Schema</a></li>
						<li><a style="color:white" href="#xml">4.2.2 XML</a></li>
					</ul>
				</div>
				<ul style="list-style-type:none">
					<li><a style="color:white" href="#json">4.3 JSON</a></li>
					<li><a style="color:white" href="#datazsm">4.4 Zusammenfassung</a><li>
				</ul>
			</div>
			<ul style="list-style-type:none">
				<li><a style="color:white" href="#literatur">Literaturverzeichnis</a></li>
			</ul>
		</div>
	</div>
        <div class="textbox">
	    <h1 id="ip+ports+sockets">1. IP-Adressen, TCP-Ports, Sockets</h1>
            <p>In diesem Kapitel werde dem Leser die grundlegenden Bedeutungen von IP-Adressen, TCP-Ports und Netzwerk-Sockets bei der Kommunikation von Geräten in einem Computernetzwerk nähergebracht. Es wird dabei zuerst auf die Bedeutung der IP-Adressen in der alltäglichen Welt, sowie die grundlegende Eigenschaft der Eindeutigkeit eingegangen. Daraufhin wird unter Verwendung einer Analogie der grundlegende Ablauf einer Datenübertragung über ein Computernetzwerk beschrieben.
	       <br><br>Leser sollten nach Durcharbeiten dieses Kapitels in der Lage sein:<br><br>
	       <div class="liste">
	       		<ul>
				<li>die Rolle der Protokolle IP und TCP, sowie von Sockets bei der Netzwerkkommunikation nachzuvollziehen</li>
				<li>die Funktion von IP-Adresse und TCP-Port bei der Netzwerkkommunikation nennen zu können</li>
				<li>die einzelnen Bestandteile eines Netzwerk-Sockets erkennen und benennen zu können</li>
	       		</ul>
	       </div>
	    </p>
        </div>
        <div class="textbox">
	    <h2 id="ip">1.1 IP-Adressen</h2>
            <p>Ein Begriff, der bezüglich der Thematik Netzwerkkommunikation oft genannt wird, ist der der „IP-Adresse“. Selbst weniger bewanderte Menschen haben mit Sicherheit davon gehört. Oft wird in den Nachrichten von einem Hacker-Angriff berichtet, bei dem die Adressen den Angreifern anscheinend die Tore in die Rechner der betroffenen Unternehmen, Bundesbehörden oder sonstigen Nutzer öffneten. Je nachdem welche Angriffstaktik genau genutzt wurde, ist diese natürlich mehr oder weniger schwierig, aber für viele Laien ist es trotzdem oft die IP-Adresse, die ihnen im Gedächtnis hängen bleibt.</p>
        </div>
        <div class="textbox">
            <p>Doch so abstrakt wie sie auch wirken mag, so simpel ist das Konzept dahinter. Ein jedes netzwerkfähiges Gerät, sei es nun Laptop, Smartphone oder auch ein intelligentes SmartHome-Gerät, verfügt über eine solche Adresse.</p>
        </div>
        <div class="definition">
	    <h4 class="definitionHeading">Definition 1.1.1: </h4><h4>IP-Adresse</h4>
            <p>Eine IP-Adresse ist eine Folge von vier acht Bit langen Zeichenketten. Diese werden als Oktette bezeichnet. Ein Oktett kann nur Werte im positiven Bereich von 0 bis 255 annehmen. Eine IP-Adresse dient zu eindeutigen Identifikation eines Netzwerkgeräts in einem Computernetzwerk.</p>
        </div>
        <div class="textbox">
            <p>Identifiziert werden muss das Netzwerkgerät, wenn ein anderer Netzwerkteilnehmer mit ihm kommunizieren möchte. Es kommt dann zu einem Datenaustausch, bei dem die Daten in Pakete verpackt und über das Netzwerk verschickt werden. Man kann sich ein Computernetzwerk, sei es nun das eigene Heimnetzwerk mit einigen wenigen Teilnehmern oder das Internet, das weltweit mehrere Millionen von Geräten verbindet, ähnlich einer Straße in einer Stadt oder einem Vorort vorstellen. In der Straße gibt es viele verschiedene Wohnhäuser in denen in diesem Beispiel jeweils eine Familie, bestehend aus mehreren Mitgliedern, wohnt. Die Straße entspricht dabei einem Netzwerk, die Wohnhäuser entsprechen den Geräten, die mit dem Netzwerk verbunden sind. Das angesprochene Datenpack soll nun an eine bestimmte Person, die in einem der Wohnhäuser lebt, zugestellt werden. Der Postbote in dieser exemplarischen Stadt kann das Paket nur anhand seiner Adresse an das richtige Haus zustellen. Der Absender muss also ebendiese Adresse auf das Paket geschrieben haben, damit es sein Ziel erfolgreich erreicht. Die Adresse des Hauses entspricht in der Realität der IP-Adresse des Netzwerkgerätes, das die Daten empfangen soll. Ist diese korrekt, kann der Postbote es zustellen. </p>
        </div>
        <div class="textbox">
            <p>Hat der Postbote das richtige Haus gefunden, um das Paket abzuliefern, ist seine Aufgabe erfüllt. Auch in der Realität endet der Aufgabenbereich des IP-Protokolls hier. Es ist im bekannten TCP/IP Schichtenmodell auf der Internetschicht eingeordnet, was bedeutet, dass es sich nur um die Zustellung der Datenpakete innerhalb des Netzwerks kümmert.</p>
        </div>
	 <div class="textbox">
	    <h2 id="ports">1.2 TCP-Ports</h2>
            <p>Allerdings ist das Paket damit noch nicht an seinem eigentlichen Zielort angekommen. Dem Postboten wurde das Paket an der Tür des richtigen Hauses abgenommen. Das Haus, an das das Paket adressiert ist, ist in dem Beispiel eine große Villa, in der eine reiche Familie lebt. Eine solche reiche Familie beschäftigt eine große Anzahl an Dienstpersonal, das verschiedenen Aufgaben nachgeht. Ein dazugehörendes Dienstmädchen hat dem Postboten das Paket abgenommen. Ihre Aufgabe ist es nun, das Zimmer des konkreten Familienmitglieds, an das das Paket adressiert ist, zu finden und der Person das Paket zu bringen. Dazu ist sie in der Lage, weil sie die Namen der Bewohner des Hauses kennt. Der Postbote (das IP-Protokoll) kannte nur die Adresse des Hauses (des Netzwerkgeräts) in der Ortschaft (dem Netzwerk). Das Dienstmädchen kann anhand des Namens, der auf das Paket gedruckt ist, feststellen zu welchem Zimmer sie gehen muss, um das Paket an sein Ziel zu bringen. Ähnlich funktioniert es im Computernetzwerk, in welchem die Datenanfrage (welche das Paket darstellt) von einem bestimmten Anwendungsprogramm geschickt wurde. Das Anwendungsprogramm ist im Beispiel das Familienmitglied, das die Bestellung aufgegeben hat. Um allerdings die Daten zustellen zu können, muss es eine zentrale Stelle geben, über die dieses Anwendungsprogramm erreichbar ist, sodass Daten zugestellt werden können. Diese Zugangstelle ist ein sogenannter TCP-Port.</p>
        </div>
	 <div class="definition">
	    <h4 class="definitionHeading">Definition 1.2.1: </h4><h4>TCP-Port</h4>
            <p>Ein TCP-Port ist eine Schnittstelle zwischen einer Anwendung und einer konkreten Verbindung zwischen Client und Server, die vom Betriebssystem zur Verfügung gestellt wird. Durch ihn ist es möglich, einkommenden und ausgehenden Daten ein Anwendungsprogramm als Empfänger beziehungsweise Absender zuzuordnen.</p>
        </div>
	 <div class="textbox">
            <p>Ein Netzwerkgerät verfügt über 65535 dieser Ports, von denen die ersten 1024 (also Ports 0 bis 1023) für bestimmte Netzwerkdienste reserviert sind. Über das TCP-Protokoll werden ebendiese Ports adressiert, hinter welchen sich dann das Anwendungsprogramm befindet, das die Daten angefordert hatte. In der Analogie ist dies das Familienmitglied, welches seine Bestellung nun entgegennehmen kann.</p>
        </div>
 	<div class="textbox">
	    <h2 id="sockets">1.3 Sockets</h2>
            <p>In der Realität werden diese beiden Informationen in Form eines Sockets zusammengefasst. Da sich dieses Konzept schon auf einer etwas höheren Abstraktionsebene befindet, passt es nicht mehr so gut in die Analogie mit der Straße, dem Wohnhaus und dem Paketboten. Am ehesten ist das Socket an der Stelle des Dienstmädchens einzuordnen, da dieses sowohl die IP-Adresse als auch die Portnummer kennt, an die das Paket zugestellt ist. Genaugenommen ist das Socket selbst allerdings weniger greifbar als die Teile, aus denen es besteht. Es stellt die Verbindung zwischen IP-Adresse und Port dar, und damit den eigentlichen Endpunkt einer jeden Netzwerkkommunikation.</p>
        </div>
	<div class="definition">
	    <h4 class="definitionHeading">Definition 1.3.1: </h4><h4>Socket</h4>
            <p>Ein Socket ist ein Endpunkt einer bestehenden Verbindung zwischen zwei Geräten in einem Netzwerk. Es setzt sich zusammen aus der IP-Adresse des Geräts und der Portnummer des Anwendungsprogramms.</p>
        </div>
 	<div class="textbox">
            <p>Beide Teile werden benötigt, damit das Paket sein Ziel erreicht und das Socket stellt ebendiese Einheit dar. So erfolgt auch tatsächlich die Adressierung der Pakete innerhalb des Netzwerks. Die IP-Adresse wird zuerst genannt, gefolgt von der Portnummer nach einem Doppelpunkt. Wird beispielsweise die Zeichenfolge:<br><br>
<div style="text-align:center;">172.217.7.238:80</div><br><br>
in die Adressleiste eines beliebigen Internetbrowsers eingegeben, gelangt man alsbald auf die Startseite von Google. Der erste Teil der Adresse – 172.217.7.238 – ist hierbei die IP-Adresse eines zu Google gehörenden Servers im Netzwerk (dem Internet) und der zweite Teil – 80 – die Portnummer, auf der ebendieser Server auf einkommende HTTP-Anfragen lauscht. „Lauschen“ ist hierbei gleichbedeutend mit „warten“, da die Serversoftware ständig bereitstehen muss, um diese entgegenzunehmen und zu verarbeiten. 
</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Abbildung 1.3.1.png" alt="WireShark Log für eine Anfrage"><br>Abbildung 1.3.1: WireShark Log für eine Anfrage</p>
        </div>
 	<div class="textbox">
            Abbildung 1.3.1 zeigt ein WireShark Log für eine Datenanfrage, die ein Client an einen Server geschickt hat. In der Realität erkennt man, dass die Bestandteile des Sockets bei der Übertragung der Daten in verschiedenen Protokollheadern zu finden sind. Die IP-Adresse ist für das Internet Protokoll (IP) von Bedeutung, da dieses für die Adressierung des Geräts im Netzwerk zuständig ist. Es stellt also, um noch einmal zu unserer Analogie zurückzukommen, den Postboten dar. Um die Zustellung zum richtigen Anwendungsprogramm mithilfe der Portnummer kümmert sich TCP. In diesem Beispiel wurden Daten von einem Rechner an den Google-Server, der sich hinter dem obigen Socket verbirgt, gesendet. Man erkennt auch die IP-Adresse Netzwerkgeräts (198.162.8.103), sowie den Port, von dem aus der in dem Beispiel benutzte Internetbrowser die Anfrage geschickt hat (60860). Wenn Google nun also eine Antwort schickt, wird sich diese an das Socket 198.162.8.103:60860 richten.</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Abbildung 1.3.2.png" alt="WireShark Log für Antwort"><br>Abbildung 1.3.2: WireShark Log für Antwort</p>
        </div>
 	<div class="textbox">
            <p>Abbildung 1.3.2 zeigt, dass dem so ist. Die Gesamtheit von IP-Adresse und Portnummer stellt schließlich das Socket dar, und damit letztendlich das, was an den beiden Enden einer Netzwerkverbindung steht. Es ist auch möglich, dass ein Client mehrere Verbindungen zu ein und demselben Server aufbaut. Dies kann beispielswese geschehen, wenn ein Anwendungsprogramm mehrere Dateien parallel übertragen möchte, etwa beim Download. Um dies zu ermöglichen werden ihm weitere Ports zur Verfügung gestellt, von denen aus es die notwendigen Verbindungen zum Server aufbaut. Die resultierenden Sockets auf dem Client unterscheiden sich demzufolge nur in ihren Portnummern, nicht aber in ihren IP-Adressen.</p>
        </div>
	<div class="textbox">
	    <h2 id="ipzsm">1.4 Zusammenfassung</h2>
            <p>In diesem Kapitel der grundlegende Ablauf einer Kommunikation zweier Netzwerkgeräte mittels der Protokolle IP und TCP erklärt. Im Zuge dessen wurden die Begriffe und Bedeutungen von IP-Adresse, TCP-Port und Socket dem Leser anhand einer Analogie und eines konkreten Beispiels näher gebracht.</p>
        </div>
 	<div class="textbox">
	    <h1 id="uri+url+urn">2. URL, URI, URN</h1>
            <p>Mit den in Kapitel 1 beschriebenen Verfahrensweisen ist es möglich eine Verbindung zu einem anderen Netzwerkgerät aufzubauen. Um jedoch alltägliche Aktionen im Internet ausführen zu können, ist es nicht nur nötig, andere Netzwerkteilnehmer anzusprechen, sondern spezielle Ressourcen mit diesen auszutauschen. Der Begriff „Ressource“ kann hierbei laut Spezifikation eine Vielzahl verschiedener Dateien oder Informationen bezeichnen, beispielsweise ein „elektronisches Dokument, ein Bild, eine Informationsquelle mit einheitlichem Zweck (zum Beispiel „der heutige Wetterbericht für Los Angeles“), eine Dienstleistung (zum Beispiel Gateway zwischen den Protokollen HTTP und SMS) oder eine Ansammlung anderer Ressourcen“ [BFM01 S. 5]. Weiterhin nennt die Spezifikation auch die Möglichkeit, dass Menschen, reale Objekte, wie zum Beispiel Bücher in einer Bibliothek, oder auch abstrakte Konzepte Ressourcen darstellen können, vgl. [BFM01 S. 5]. Im Kontext der Client-Server Kommunikation ist es allerdings sinnvoll, sich bei Verwendung des Begriffs nur auf die in digitalem Format vorliegenden Dateien und Informationen konzentrieren, also HTML-Dateien, Bilder, und ähnliches.</p>
        </div>
	<div class="textbox">
            <p>In diesem Kapitel werden URIs, URLs und URNs vorgestellt. Genauer eingegangen wird hierbei auf den Aufbau einer allgemeinen URI, sowie die Bedeutung und den Unterschied zwischen URL und URN.<br><br>
Der Leser sollte nach Durcharbeiten dieses Kapitels in der Lage sein:<br><br>
	    <div class="liste">    
			<ul>
				<li>die Unterschiede zwischen URI, URL und URN nennen zu können</li>
				<li>die Bestandteile einer URI nennen und im Detail erklären zu können</li>
				<li>den Zusammenhang zwischen URN und URL zu verstehen</li>
			</ul>
	    </div>
	</p>
        </div>
 	<div class="textbox">
	    <h2 id="uri">2.1 URI</h2>
            <p>Damit ein Netzwerkteilnehmer auf eine ebensolche Ressource über das Netzwerk zugreifen kann, müssen die Möglichkeit bestehen, sie eindeutig zu identifizieren. Um dies zu gewährleisten, verfügt jede Ressource über einen Identifikator, einen Uniform Resource Identifier (URI).</p>
        </div>
	<div class="definition">
	    <h4 class="definitionHeading">Definition 2.1.1: </h4><h4>URI</h4>
            <p>Die Abkürzung URI steht für Uniform Resource Identifier. Sie dient dazu, eine Ressource in einem Netzwerk anhand einer Zeichenkette eindeutig zu identifizieren.</p>
        </div>
 	<div class="textbox">
            <p>Zur Identifikation einer Ressource gehört allerdings nicht nur ihr Name. Eine URI ist nach einem festgelegten Schema aufgebaut und gliedert sich in verschiedene Teile, welche ähnlich einem Dateipfad im Dateisystem eines Computers schlussendlich zur gewollten Ressource führen.</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Abbildung 2.1.1.png" alt="Beispiel für eine URI [BFM01 S. 16]"><br>Abbildung 2.1.1: Beispiel für eine URI [BFM01 S. 16]</p>
        </div>
 	<div class="textbox">
            <p>In Abbildung 2.1.1 erkennt man die Bestandteile einer beispielhaften URI.<br><br>
Das Schema (scheme) bezeichnet ein Protokoll, wie zum Beispiel HTTP oder FTP. Durch dieses können genauere Richtlinien zum Aufbau der folgenden Komponenten festgelegt werden.<br><br>
Der auch als Host bezeichnete Anbieter einer Ressource verbirgt sich hinter der Autorität, welche meist mit einem Servernamen angegeben ist. In dem Beispiel in Abbildung 2.1.1 ist dazu auch noch die Portnummer nach einem Doppelpunkt angegeben. Da die Spezifikation des eben angesprochenen Schemas allerdings in den meisten Fällen einen Standart-Port (zum Beispiel Port 80 für HTTP) definiert, wird die Angabe dessen meist weggelassen. Die Kombination aus Servernamen und Portnummer erinnert stark an die im ersten Kapitel besprochenen Sockets. Man könnte statt des Servernamens auch dessen IP-Adresse angeben; in diesem Fall würde man, statt den Weg über die Adressauflösung von DNS zu gehen, den Server direkt ansprechen. Im Normalfall kennt ein Netzwerknutzer allerdings weder die IP-Adresse des Geräts, das er ansprechen will, noch die Portnummer, über die er an die Ressource herankommt. Darum haben sich menschenlesbare Servernamen, auch Hostnamen genannt, eingebürgert, und auch die Portnummer wird meist weggelassen. Bei bestimmten Webanwendungen besteht die Möglichkeit, dass verschiedene Nutzer mit eigenem Namen auf den Server zugreifen. Diese haben dann beispielsweise verschiedene Rechte. Auf einem Datenbankserver können Nutzer etwa Rechte zum Lesen oder Schreiben von Datensätzen haben. Um diese verschiedenen Nutzer mit ihren individuellen Rechten zu verwalten, ist es unter Umständen noch erforderlich den Benutzernamen des jeweiligen Nutzers vor dem Hostnamen anzugeben, mit dem Zeichen @ als Trennzeichen. Eine Anmeldung bei einem Datenbankserver, der auf dem lokalen Rechner läuft, würde also nach Aufruf der folgenden URI erfolgen:<br><br>
<div style="text-align:center;">http://root@localhost/phpmyadmin/index.php</div><br><br>
Dabei ist „root“ der Nutzername und „localhost“ der Name des lokalen Rechners.<br><br>
Der Pfad ist schließlich der erste URI-Teil, der der Identifikation der Ressource auf dem Server dient. Er funktioniert genauso, wie ein Pfad im Dateisystem eines gewöhnlichen Heim-PCs. Meistens ist der Server strukturell auch genauso aufgebaut. Die Ressource, auf die in Abbildung 2.1.1 zugegriffen wird, ist im Dateisystem des Servers in einem Ordner „over“ gespeichert, in welchem sich eine Datei „there“ befindet. Anzumerken ist dabei noch, dass der Pfad grundsätzlich mit einem „/“ eingeleitet wird. Das bedeutet, dass sich der Pfad auf ein gewisses Wurzelelement bezieht. Im Dateisystem eines Servers ist dies meist ein bestimmter Ordner, in dem die sich die vom Netzwerk aus zugänglichen Ressourcen befinden. Daneben kann es beispielswese noch Ordner mit Konfigurationsdateien oder ähnlichem geben, die allerdings nicht über den Pfad einer URI von außen adressiert werden können. Leerzeichen können Probleme bei der korrekten Identifikation einer Ressource hervorrufen, weswegen sie nicht erlaubt sind. Sie können allerdings durch die Zeichenfolge %20 oder das Zeichen + ersetzt werden.<br><br>
Nach dem Pfad folgt die „Query“ also die „Anfrage“ mit der weiter spezifiziert wird, welche Ressource angefragt wird. Die Query wird immer mit einem Fragezeichen eingeleitet. Danach folgen Daten in Form von „key=value“-Paaren. Mehrere Paare sind mit dem Zeichen & voneinander getrennt. „Key“ kann dabei ein Parameter sein, dem mit „Value“ ein Wert zugewiesen wird, welcher wiederum zur näheren Identifikation der Ressource genutzt werden kann, wie das folgende Beispiel zeigt:<br><br>
<div style="text-align:center;">http://localhost/phpmyadmin/db_structure.php?db=tradingtool</div><br><br>
Hier wird die Ressource db_structure.php über den URI-Pfad identifiziert. Mittels der Query ?db=tradingtool wird die Anfrage auf die Datenbank mit dem Namen „tradingtool“ spezifiziert. Es können mithilfe der Paare auch Daten übertragen werden, die dann im Backend an Funktionen übergeben werden, und dort zur weiteren Verarbeitung dienen. Die Möglichkeit zur Übertragung von Daten über die URI (genaugenommen die URL) macht sich auch die HTTP-Methode „GET“ zu Nutze, die unter anderem in Kapitel 3.3 näher behandelt wird.<br><br>
Der letzte Teil der URI, das Fragment, dient schließlich dazu, einen bestimmten Teil oder eine spezielle Ansicht der Ressource zu definieren. In einer HTML-Datei beispielsweise, gibt es die Möglichkeit, bestimmte Elemente mit einer sogenannten ID zu versehen. Ordnet man so etwa einer Überschrift eine solche zu, kann man durch Angabe der ID im Fragment-Teil der URI schon beim ersten Laden der Datei im Browser direkt an die Stelle springen, an der ebendiese Überschrift zu finden ist. Folgendes Beispiel zeigt dies gut:<br><br>
Die Adresse<br><br>
<div style="text-align:center;">https://de.wikipedia.org/wiki/Hypertext_Transfer_Protocol</div><br><br>
führt zum Wikipedia-Artikel (einem HTML-Dokument) über HTTP. Gibt man noch einen Fragment-Teil an:<br><br>
<div style="text-align:center;">https://de.wikipedia.org/wiki/Hypertext_Transfer_Protocol#Funktionsweise</div><br><br>
gelangt man direkt zum Abschnitt „Funktionsweise“. Inspiziert man den Quelltext der Seite, kann man feststellen, dass die Überschrift, die diesen Abschnitt einleitet, eine ID mit dem Wert „Funktionsweise“ hat. Da die genauen Hintergründe dieser Funktionalität aber zu weit vom Thema abweichen würden, wird hier nicht weiter darauf eingegangen.<br><br>
Die große Anzahl von verschiedenen Bestandteilen mag auf den unerfahrenen Leser zunächst erschlagend wirken. Hierbei ist jedoch zu beachten, dass eine URI bei weitem nicht alle dieser Elemente enthalten muss. Die notwendigen Bestandteile, die einer URI Gültigkeit verleihen, und damit zwangsläufig in jeder enthalten sein müssen, sind Schema und Pfad. Ein Beispiel, in dem nur diese beiden Bestandteile vorhanden sind, lässt sich leicht veranschaulichen, indem beispielsweise eine HTML-Datei im Browser desselben Rechners geöffnet wird, auf dem sie auch gespeichert ist.
</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Abbildung 2.1.2.png" alt="Die URI einer HTML-Datei auf dem lokalen Rechner"><br>Abbildung 2.1.2: Die URI einer HTML-Datei auf dem lokalen Rechner</p>
        </div>
 	<div class="textbox">
            <p>In Abbildung 2.1.2 ist die URI einer im Browser geöffneten HTML-Datei zu sehen. Das dabei verwendete Schema ist file, der Pfad der URI ist /D:/HS Mannheim/3. Semester/WEB/Diverses/datei.html. Durch das Vorhandensein dieser beiden Komponenten ist die URI gültig. Allerdings illustriert dieses Beispiel auch die vom Schema abhängigen Restriktionen bezüglich der Gültigkeitsregeln einer URI. Denn das Schema file erlaubt eine leere Autorität, da es in diesem Fall davon ausgeht, dass sich der Pfad auf das Dateisystem des lokalen Rechners bezieht. Soll auf eine Ressource auf einem anderen Netzwerkgerät zugegriffen werden, muss der entsprechende Hostname im Autoritätsteil angegeben werden. Andere Schemen, wie beispielsweise HTTP erlauben allerdings keine leere Autorität.</p>
        </div>
	<div class="textbox">
	    <h2 id="url">2.2 URL</h2>
            <p>Die am weitesten verbreitete Form solcher URIs sind die URLs, die Uniform Resource Locators. Betrachtet man eine Bibliothek als Analogie zum Internet, ist die URL vergleichbar mit dem Standort des Buches in der Bibliothek. Mit ihr können Ressourcen, beispielsweise HTML-Dateien, eindeutig in einem Netzwerk lokalisiert werden. Da die URL eine Art Unterform, beziehungsweise konkretere Form der URI ist, muss ihr Aufbau dem ebendieser entsprechen.</p>
        </div>
 	<div class="definition">
	    <h4 class="definitionHeading">Definition 2.2.1: </h4><h4>URL</h4>
            <p>Die Abkürzung URL steht für Uniform Resource Locator. Sie dient dazu, eine Ressource in einem Netzwerk eindeutig zu lokalisieren. Eine URL stellt eine konkrete Form einer URI dar.</p>
        </div>
	<div class="textbox">
            <p>Wie bereits beschrieben, wird eine angefragte Ressource über den Pfad im Dateisystem eines Servers und mithilfe der Query unter Umständen noch genauer lokalisiert. In dem Beispiel im vorigen Teilkapitel wurde die URI<br><br>
<div style="text-align:center;">https://de.wikipedia.org/wiki/Hypertext_Transfer_Protocol</div><br><br>
genauer betrachtet. Hierbei wird der Netzwerkteilnehmer mit dem Namen de.wikipedia.org angesprochen und die Ressource mit dem Namen Hypertext_Transfer_Protocol (eine Inspektion des Quelltextes zeigt, dass es sich dabei um eine HTML-Datei handelt) angefordert. Augenscheinlich befindet sich diese im Pfad /wiki/. „wiki“ könnte der Name eines Ordners im Dateisystem des Servers sein. Betrachten wir dieses Beispiel im Kontext unserer Analogie. Hier entspräche „wiki“ dem Namen einer bestimmten Sektion in der Bibliothek in der sich allgemeine Wissensartikel befinden. Allerdings ist auch der Name der Ressource bei der URL Teil ihres Standorts, da sie auch durch ihn lokalisiert wird. In der Bibliothek würde man in der entsprechenden Sektion schließlich auch ein Buch finden, das den Namen Hypertext_Transfer_Protocol trägt. Es kann durchaus passieren, dass eine neue Ressource angelegt und unter der obigen URL abgelegt wird, während der Artikel über HTTP, der vorher unter ihr zu finden war, beispielsweise auf einen anderen Server verschoben wurde.
</p>
        </div>
	<div class="textbox">
	    <h2 id="urn">2.3 URN</h2>
        </div>
	<div class="definition">
	    <h4 class="definitionHeading">Definition 2.3.1: </h4><h4>URN</h4>
	    <p>Die Abkürzung URN steht für Uniform Resource Name. Sie dient dazu, einer Ressource einen eindeutigen Namen zuzuweisen. Eine URN stellt eine konkrete Form einer URI dar.</p>
	</div>
	<div class="textbox">
            <p>In Bezug auf die Bibliothek ist die URN vergleichbar mit der ISBN eines Buches. Auch wenn die Bibliothek umgebaut wird, oder sogar komplett umzieht, kann man das Buch noch eindeutig mithilfe seiner ISBN identifizieren. Um allerdings an seinen genauen Standort in der Bibliothek heranzukommen, muss im Bibliothekskatalog nachgeschlagen werden. Ähnliche Abläufe finden in der Realität statt, wo es, trotz der eindeutigen Identifizierungsmöglichkeit, die die URN bietet, dennoch von Nöten ist, eine zugehörige URL nachzuschlagen, wenn man die Ressource nur anhand der URN aufrufen möchte. Diese ist meist in einer Datenbank hinterlegt, was es auch erleichtert den Standort auch nach einem Umzug der Ressource noch aktuell zu halten. Eine URN, die die in Abbildung 2.1.1 identifizierte Ressource bezeichnet, sieht wie folgt aus:</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Abbildung 2.3.1.png" alt="Ein Beispiel für eine URN [BFM01 S. 16]"><br>Abbildung 2.3.1: Ein Beispiel für eine URN [BFM01 S. 16]</p>
        </div>
	<div class="textbox">
            <p>Wie in Abbildung 2.3.1 zu erkennen ist, muss auch die URN die Bestandteile Schema und Pfad beinhalten, um gültig zu sein. Dabei muss jede URN als Schema „urn“ verwenden. Darauf folgen durch Doppelpunkte abgetrennte Namensräume. Wie bereits angeführt, ist eine URN vergleichbar mit einer ISBN eines Buches. Würde man eine konkrete ISBN als URN formulieren, würde dies wie folgt aussehen:<br><br>
<div style="text-align:center;">URN:ISBN:978-1565925090</div><br>
Hier ist nach dem Schema der erste angegebene Namensraum ISBN. Innerhalb dieses Namensraums wird dann ein weiterer definiert, nämlich 978-1565925090. Wichtig ist hierbei, dass jeder Namensraum Einschränkungen für die danach folgenden festlegt. So muss eine ISBN etwa immer mit einem der Präfixe 978 oder 979 beginnen. Auch für die danach folgenden Ziffern gibt es feststehende Regeln, die in der URN durch den Namensraum ISBN definiert werden. Diese Angaben sind ausreichend, um das Buch eindeutig zu identifizieren. Möchte man allerdings eine einzelne Seite des Buches mit der URN bezeichnen, muss man sie noch weiter spezifizieren, indem man innerhalb Namensraum 978-1565925090 noch einen weiteren definiert. Eine URN, die zur Identifikation der dritten Seite dieses Buches dient, würde so aussehen:<br><br>
<div style="text-align:center;">URN:ISBN:978-1565925090:3</div><br>
Ähnlich wie der Namensraum ISBN Regeln für die konkrete Nummer des Buches festgelegt hat, legt nun der Namensraum 978-1565925090 Einschränkungen für den nächsten Namensraum fest. Konkret sind dies hier mögliche Seitenzahlen, die angegeben werden können. Da das Buch, zu dem die ISBN gehört, nur 658 Seiten hat und Buchseiten nur positive Indizes haben können, dürfen an der letzten Stelle der URN nur Zahlen zwischen 1 und 658 stehen. Zu beachten ist hierbei allerdings, dass es sich bei ISBN um einen genau genormten Namensraum handelt. Das Beispiel, in dem noch ein Unternamensraum für die Buchseite definiert wurde, dient nur zur Illustration des Aufbaus einer URN. Es ist kein offiziell vergebener Bezeichner.
</p>
        </div>
	<div class="textbox">
	    <h2 id="urizsm">2.4 Zusammenfassung</h2>
            <p>Dieses Kapitel hat Möglichkeiten zur Identifikation einer Ressource in einem Computernetzwerk dargestellt. Genau beschrieben wurde dabei der Aufbau von URIs, sowie die Bedeutung und Funktionsweise von URL und URN als spezielle Formen der URI. Es wurden Beispiele zur Illustration ebendieser Funktionsweisen dargebracht.</p>
        </div>
	<div class="textbox">
	    <h1 id="kommunikation">3. Kommunikation über HTTP</h1>
            <p>In Kapitel 1 wurde genauer dargestellt, wie Verbindungen auf Netzwerkebene zustande kommen. Kapitel 2 hat den Fokus darauf gerichtet, wie spezifische Ressourcen in einem Netzwerk identifiziert werden können. Um nun alltägliche Transaktionen im Internet vollziehen zu können, müssen die Daten auf eine Art und Weise übertragen werden, die es jedem Kommunikationspartner ermöglicht, sie zu interpretieren und gegebenenfalls passende Antworten zu versenden. Genau an dieser Stelle kommen die Anwendungsschicht und das Protokoll HTTP ins Spiel. Es dient nicht einfach nur zur Kommunikation von zwei Netzwerkgeräten, sondern speziell der eines Clients mit einem Server. Genauso wie bei der Kommunikation über IP und TCP müssen auch zur Übermittlung mittels HTTP die Daten zuerst mit einem entsprechenden Header versehen werden. Da die Anwendungsschicht die oberste Schicht des TCP/IP-Modells ist, und damit beim Absenden einer Anfrage als erstes „durchlaufen“ wird, ist der HTTP-Header der erste, in den die Daten verpackt werden. Ihm folgen der TCP- und der IP-Header. An unterster Stelle folgt schließlich noch der Header eines Protokolls der Netzzugangsschicht, meistens Ethernet. Der HTTP-Header enthält mehrere Header-Felder, welche sowohl die im „Body“ übermittelten Daten in Art und Umfang beschreiben als auch Informationen über den Absender des Datenpakets enthalten.</p>
        </div>
	<div class="textbox">
            <p>In diesem Kapitel wird näher auf den Ablauf der Kommunikation von Client und Server über das Protokoll HTTP eingegangen. Im Zuge dessen werden HTTP-Request und -Response im Detail dargestellt und erklärt. Weiterhin werden die wichtigsten HTTP-Statuscodes genannt und die Situationen, in denen sie verschickt werden, benannt. Zusätzlich dazu werden die verschiedenen HTTP-Methoden genauer beschrieben. Im letzten Teilkapitel wird schließlich auf den Begriff der Session im Kontext der Kommunikation über HTTP eingegangen.<br>
Nach Durcharbeiten dieses Kapitels sollte der Leser in der Lage sein:<br><br>
	    <div class="liste">    
			<ul>
				<li>den Ablauf der Kommunikation von Client und Server über HTTP nachzuvollziehen.</li>
				<li>die Bedeutung der wichtigsten Header-Felder in HTTP-Request und -Response zu nennen</li>
				<li>die fünf unterschiedlichen Gruppen von Statuscodes mit ihren wichtigsten Vertretern zu nennen</li>
				<li>die Anwendungsbereiche der verschiedenen HTTP-Methoden zu verstehen</li>
			</ul>
	    </div>
	</p>
        </div>
	<div class="textbox">
	    <h2 id="client+server">3.1 Client – Server – Kommunikation</h2>
            <p>An einer Kommunikation sind im Normalfall zwei Teilnehmer beteiligt. Der Client ist derjenige Netzwerkteilnehmer, der die Verbindung initiiert und eine Ressource anfordert. Wenn man über HTTP spricht, bewegt man sich auf der Anwendungsebene des TCP/IP-Modells. Aus diesem Grund sind es hier Anwendungsprogramme, die Nachrichten austauschen, konkret ein Internetbrowser als Client und eine andere Software als Server. Der Server ist der Dienstleister, der die Ressourcen zur Verfügung stellt. Möchte ein Client eine Verbindung initiieren, schickt er zu allererst einen Request, also eine Anfrage für eine Ressource an den Server.</p>
        </div>
	<div class="definition">
	    <h4 class="definitionHeading">Definition 3.1.1: </h4><h4>HTTP-Anfrage</h4>
            <p>Eine HTTP-Anfrage (HTTP-Request) ist eine Nachricht, die vom Client an den Server geschickt wird. Sie besteht aus einem Header und einem Body. Mit ihr fordert der Client den Server dazu auf, eine Aktion auf einer bestimmten Ressource auszuführen.</p>
        </div>
	<div class="textbox">
            <p>Je nachdem, welche Aktion der Client ausführen möchte, kann der Body der Anfrage Daten enthalten oder leer sein. Der Header einer HTTP-Anfrage sieht beispielsweise so aus:</p>
        </div>
	<div class="abildung">
            <p><img class="bild" src="Bilder/Abbildung 3.1.1.png" alt="WireShark Log für eine HTTP-Anfrage"><br>Abbildung 3.1.1: WireShark Log für eine HTTP-Anfrage</p>
        </div>
	<div class="textbox">
            <p>Man erkennt in Abbildung 3.1.1 den Protokollstack mit den Headern der verschiedenen Protokolle, mithilfe welcher die Anfrage über das Netzwerk an den Server übermittelt wird. Der HTTP-Header enthält mehrere, für eine erfolgreiche Kommunikation essenzielle Header-Felder, welche im Folgenden lediglich als „Felder“ bezeichnet werden, um Verwirrungen zu vermeiden. Jedes Feld besteht aus seinem Namen, einem Doppelpunkt und seinem Inhalt und wird mit der Zeilenumbruchsequenz „\r\n“ für CRLF abgeschlossen.<br><br>
An erster Stelle steht dabei die verwendete HTTP-Methode, auf die im weiteren Verlauf dieses Kapitels näher eingegangen wird.<br><br>
Danach folgt der Name des angesprochenen Servers im Host Feld.<br><br>
Im Feld User-Agent werden Daten zu Betriebssystem und benutzter Browserengine des Clients übertragen. Im Beispiel in Abbildung 3.1.1 ist der Client ein Firefox-Browser, der auf einem Windows 10 Rechner läuft.<br><br>
Dem nachfolgend geben die Accept Felder Auskunft über Präferenzen des Clients bezüglich der in der Antwort enthaltenen Daten.<br><br>
In Accept ist zu erkennen, dass HTML-, XHTML- und XML-Dateien bevorzugt vor allen anderen möglichen Datentypen (dargestellt durch „*/*“) akzeptiert werden. Die in diesem Feld angegebenen Datentypen sind sogenannte MIME-Typen, welche von der Internet Assigned Numbers Authority (IANA) definiert werden.<br><br>
In Accept-Language sind die vom Client akzeptierten und bevorzugten Sprachen erkennbar. So werden in Abbildung 3.1.1 etwa Antworten in den Sprachen Deutsch und Englisch akzeptiert, wobei Deutsch bevorzugt wird. Diese Angabe kann nützlich sein, wenn es mehrere Versionen einer Ressource in verschiedenen Sprachen gibt. Da es sich in diesem Fall nur um unterschiedliche Repräsentationen ein und derselben Ressource handelt, ändert sich an der URL, mit der der Client die Ressource anfragt, allerdings nichts. Der Server ist verantwortlich dafür, eine für den Client passende Version auszuwählen.<br><br>
Accept-Encoding bezieht sich darauf, wie die Daten zur Übertragung komprimiert wurden. In diesem Beispiel akzeptiert der Client die Kompressionsverfahren gzip und deflate.<br><br>
Da im DNT (Do Not Track) Feld der Wert 1 gesetzt ist, übermittelt der Client hier, dass er nicht getrackt werden möchte.<br><br>
Im Feld Connection wird angegeben, ob die Verbindung zwischen Client und Server nach dem Beantworten der Anfrage noch offengehalten werden soll. Damit können auch danach noch Anfragen an den Server geschickt werden, ohne dass die Verbindung komplett neu aufgebaut werden muss.<br><br>
Upgrade-Insecure-Requests wird schließlich auf 1 gesetzt, um dem Server mitzuteilen, dass der Client eine verschlüsselte Antwort bevorzugt.<br><br>
Es gibt noch andere Header-Felder, die in einem HTTP-Request Header vorhanden sein können. Die in Abbildung 3.1.1 gezeigten sind allerdings einige der häufigsten.
</p>
        </div>
	<div class="textbox">
            <p>Stellt nun ein Client eine HTTP-Anfrage, erzeugt er den entsprechenden Request mit Header und Body. Bevor dieser allerdings abgeschickt werden kann, muss der Browser zuerst anhand der URI die IP-Adresse und unter Umständen den Zielport des Servers ermitteln. Dies erfolgt über den Dienst DNS (Domain Name System), welcher den menschenlesbaren Hostnamen in die dazugehörige IP-Adresse auflöst. Daraufhin wird eine TCP-Verbindung zu ebendiesem Server aufgebaut und die HTTP-Anfrage mit dem entsprechenden TCP- und IP-Header sowie dem eines Protokolls der Netzzugangsschicht - meistens Ethernet - versehen, sodass auch Portnummer, IP- und Hardwareadresse des Absenders und des Rezipienten bekannt sind und schließlich über das Netzwerk an den Server geschickt. Dort angekommen wird, nach Entfernen der anderen Header, die Anfrage bearbeitet. Die Antwort, die der Server schickt, wird als HTTP-Response bezeichnet.</p>
        </div>
	<div class="definition">
	    <h4 class="definitionHeading">Definition 3.1.2: </h4><h4>HTTP-Antwort</h4>
            <p>Eine HTTP-Antwort (HTTP-Response) ist eine Nachricht, die vom Server an den Client geschickt wird. Sie besteht aus einem Header und einem Body. Mit ihr informiert der Server den Client über den Ausgang der Anfrage.</p>
        </div>
	<div class="textbox">
            <p>Es gibt also wieder einen Header, einen Response-Header, der zum Client zurückgeschickt wird. Dieser ist im Grunde genommen genauso aufgebaut, wie der Request-Header, allerdings enthält er einige andere Felder, um nun dem Client Auskunft über die Eigenschaften der zurückgeschickten Daten zu geben. Der Antwort-Header auf die Anfrage in Abbildung 3.1.1 sieht wie folgt aus:</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Abbildung 3.1.2.png" alt="WireShark Log für eine HTTP-Antwort"><br>Abbildung 3.1.2: WireShark Log für eine HTTP-Antwort</p>
        </div>
	<div class="textbox">
            <p>Genau wie der des Requests, enthält auch der in Abbildung 3.1.2 dargestellte Response-Header verschiedene Felder, die über den Server und die im Body übertragenen Daten Auskunft geben.<br><br>
Im Feld Server ist erkennbar, dass die aufgerufene Web-Applikation auf einem Payara Server läuft. <br><br>
Genauere Informationen über die Technologie hinter der Applikation und die Spezifikationen, auf denen sie basiert, finden sich im Feld X-Powered-By. Im Beispiel in Abbildung 3.1.2 handelt es sich um eine JSP-Anwendung.<br><br>
Das letzte interessante Feld ist Content-Type. Wie man hier sieht, liefert der Server mit der Response eine JSON-Applikation zurück. Im Accept Feld des Requests waren XML, XHTML und HTML als für den Client akzeptable MIME-Typen angegeben. JSON entspricht keinem dieser Formate. Allerdings befand sich nach diesen bevorzugten Datentypen auch noch die Angabe „*/*“, auf welche alle MIME-Typen passen. Aus diesem Grund akzeptiert der Client auch diese Antwort.<br><br>
Unter dem Response-Header in Abbildung 3.1.2 sind auch noch die im Body der Nachricht enthaltenen Daten zu sehen.
</p>
        </div>
	<div class="textbox">
	    <h2 id="statuscodes">3.2 HTTP-Statuscodes</h2>
            <p>Die erste Zeile eines HTTP-Headers ist in jedem Fall eine der ausschlaggebendsten. In ihr wird der HTTP-Statuscode übermittelt. Dieser gibt Auskunft über den Ausgang der Anfrage des Clients. Im Beispiel in Abbildung 3.1.2 schickt der Server den Code 200 zurück, dem der Ausdruck OK entspricht. Die GET-Anfrage des Clients ist also erfolgreich bearbeitet worden, und die angefragte Ressource ist im Body der Antwort enthalten.</p>
        </div>
	<div class="textbox">
            <p>Statuscodes, die im Bereich 2xx liegen zeigen dabei immer eine erfolgreiche Bearbeitung der Anfrage an. Der wichtigste Code aus dieser Gruppe ist der eben schon benannte Code 200. Weitere Codes aus diesem Bereich sind zum Beispiel Code 201, der angibt, dass eine Ressource unter einer URI auf dem Server erfolgreich abgelegt wurde und Code 202, welcher zurückgegeben wird, wenn die Anfrage des Clients zwar vom Server akzeptiert, aber ihre Bearbeitung noch nicht abgeschlossen wurde.</p>
        </div>
	<div class="textbox">
            <p>Die Codegruppe 1xx gibt an, dass die Anfrage des Clients empfangen, aber noch nicht vollständig bearbeitet worden ist. Dies kann daran liegen, dass die Anfrage noch nicht komplett empfangen worden ist (100) oder dass der Client um einen Wechsel auf ein anderes Protokoll gebeten hat (101).</p>
        </div>
	<div class="textbox">
            <p>Codes aus der Gruppe 3xx werden zurückgegeben, wenn zur erfolgreichen Bearbeitung der Anfrage weitere Schritte von seitens des Clients notwendig sind. In den meisten Fällen ist dies darauf zurückzuführen, dass die angefragte Ressource unter einer anderen URI zu finden ist. Am bedeutendsten ist dabei wohl Code 301, der angibt, dass eine Ressource auf Dauer verschoben wurde. Ein Beispiel lässt sich leicht mit dem Aufruf der Webseite der HS Mannheim zeigen:</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Abbildung 3.2.1.png" alt="WireShark Log für eine Antwort mit Statuscode 301"><br>Abbildung 3.2.1: WireShark Log für eine Antwort mit Statuscode 301</p>
        </div>
	<div class="textbox">
            <p>In diesem Fall wird die neue URI im Body der Antwort im HTML-Format mit übermittelt, wie Abbildung 3.2.2 zeigt:</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Abbildung 3.2.2.png" alt="WireShark Log für die in der 301-Antwort übermittelten Daten"><br>Abbildung 3.2.2: WireShark Log für die in der 301-Antwort übermittelten Daten</p>
        </div>
	<div class="textbox">
            <p>Die meisten Browser sind heutzutage in der Lage die Umleitung auf die neue URL automatisch vorzunehmen.</p>
        </div>
	<div class="textbox">
            <p>Statuscodes aus der Gruppe 4xx weisen darauf hin, dass auf Seiten des Clients ein Fehler aufgetreten ist. Der wohl bekannteste Code aus dieser Gruppe, und wahrscheinlich sogar der am häufigsten im alltäglichen Umgang mit dem Internet anzutreffende Statuscode überhaupt, ist 404. Dieser weist bekanntermaßen darauf hin, dass die Ressource unter der angegebenen Ziel-URI nicht gefunden werden kann. Weitere Statuscodes dieser Gruppe sind unter anderem Code 401, der angibt, dass auf eine Ressource nicht ohne gültige Authentifizierung zugegriffen werden kann, und 403, welcher zurückgegeben wird, wenn Zugriff auf die Ressource für den Client grundsätzlich verboten ist.</p>
        </div>
	<div class="textbox">
            <p>Die letzte Gruppe von Statuscodes ist schließlich die Gruppe 5xx, die aussagt, dass ein serverseitiger Fehler aufgetreten ist. Dabei ist Code 500 wohl einer der wichtigsten. Er gibt an, dass ein interner Fehler den Server davon abhält, die Anfrage korrekt zu bearbeiten. Weitere Codes aus diesem Bereich sind beispielsweise 501, welcher angibt, dass die benutzte HTTP-Methode nicht vom Server behandelt werden kann, und 503, der bei Überlastung des Servers oder während Wartungsarbeiten zurückgegeben wird.</p>
        </div>
	<div class="textbox">
	    <h2 id="methoden">3.3 HTTP-Methoden</h2>
            <p>Es gibt verschiedene Arten von Anfragen, die ein Client an einen Server stellen kann. Sie unterscheiden sich darin, welche Aktion der Client mit der angefragten Ressource durchführen möchte. Ausschlaggebend sind hierbei die sogenannten HTTP-Methoden, mit denen nicht nur eine Ressource selbst, sondern auch eine bestimmte Aktion, die der Client auf der Ressource oder in Bezug zum Server ausführen möchte, definiert wird.</p>
        </div>
	<div class="textbox">
            <p>Eine der am häufigsten verwendeten HTTP-Methoden ist die Methode GET. Mit ihr wird eine Ressource vom Server angefragt, wobei die URI ebendieser mit angegeben werden muss. Wie im vorigen Kapitel bereits erläutert, können in einer URI im Query-Teil auch Daten in Form von Belegungen der Value-Felder der Key=Value-Paare übertragen werden. Genau diesen Umstand kann man sich auch beim Verwenden der GET-Methode zu Nutzen machen, und damit Nutzerdaten übermitteln, die dann vom Server verwaltet werden. Da diese Form der Datenübermittlung allerdings vollkommen unverschlüsselt über die URL erfolgt, und somit sehr leicht von Dritten nachverfolgt werden kann, ist es nicht ratsam, GET zur Übertragung sensibler Daten zu verwenden. Stattdessen beschränkt sich ihr Einsatzbereich auf das einfache Anfragen von Ressourcen und, unter Umständen, das Übertragen von Suchparametern.</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Abbildung 3.3.1.png" alt="WireShark Log für eine HTTP GET-Methode"><br>Abbildung 3.3.1: WireShark Log für eine HTTP GET-Methode</p>
        </div>
	<div class="textbox">
            <p>Abbildung 3.3.1 zeigt den Namen der Methode, sowie die angefragte URI und die HTTP-Protokollversion. Im Feld „Request URI“ wird hier nur der Pfad-Teil der URI angezeigt, da dieser auf die Ressource verweist, die man mit der Methode anfragt. Bei erfolgreicher Bearbeitung der Anfrage liefert der Server die Ressource im Body der Antwort an den Client.</p>
        </div>
	<div class="textbox">
            <p>Da die Übertragung von Daten mit der GET-Methode unsicher ist, bedient man sich zumeist der POST-Methode, welche Daten aus HTML-Formularen an den Server überträgt. Um dies zu realisieren existiert in dem entsprechenden HTML-Element ein Attribut, mit dem man die gewünschte Methode zur Datenübermittlung auswählen kann. Entscheidet man sich für POST, werden die Nutzerdaten nicht wie bei GET über URL-Parameter übertragen, sondern stattdessen in den Body der HTTP-Anfrage verpackt.</p>
        </div>
	<div class="abblidung">
            <p><img class="bild" src="Bilder/Abbildung 3.3.2.png" alt="WireShark Log für eine HTTP-POST Methode"><br>Abbildung 3.3.2: WireShark Log für eine HTTP-POST Methode</p>
        </div>
	<div class="textbox">
            <p>Abbildung 3.3.2 zeigt, ähnlich wie beim Log der GET-Methode, den Namen der Methode und die Ziel-URI. Anders als bei GET soll auf diese Anfrage hin keine Ressource zurückgeliefert werden, sondern die im Body übermittelten Daten an die Ressource übergeben werden. Der Zweck, dem die an den Server übertragen Daten dienen, kann variieren. Beispielsweise können sie verwendet werden, um eine neue Ressource auf dem Server zu erstellen oder eine serverseitige Funktion mit Daten zu versorgen, zum Beispiel um einen Arzttermin zu buchen. In diesem Fall wurden Daten an Google Analytics übertragen. Die vollständige URI, wie aus den Header-Daten erkennbar ist, lautet http://www.google-analytics.com/collect. Zu beachten ist dabei allerdings, dass auch diese Daten unverschlüsselt und im Klartext übertragen werden.</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Abbildung 3.3.3.png" alt="Daten, die mittels POST an die Ziel-URI übermittelt werden"><br>Abbildung 3.3.3: Daten, die mittels POST an die Ziel-URI übermittelt werden</p>
        </div>
	<div class="textbox">
            <p>In Abbildung 3.3.3 sieht man die ersten 24 Byte der übertragenen Nutzerdaten. Ein Blick in den Hexdump des abgefangenen Packets (hier aus Platzgründen nicht dargestellt) offenbart allerdings die gesamten 484 Bytes, die übermittelt wurden, und lässt schnell erkennen, dass unter anderem Informationen zum clientseitg verwendeten Antivirenprogramm und der Ansichtsweise der Webseite auf dem Rechner übertragen wurden. Das Abfangen und Auslesen eines HTTP-Headers erfordert zwar etwas professionellere Software als das einfache Mitlesen einer URL. Allerdings stellt es für entschlossene Kriminelle absolut kein Hindernis dar, sich daran zu versuchen. Aus diesem Grund ist das Protokoll HTTPS als verschlüsselte Erweiterung von HTTP entwickelt worden. Man sollte also darauf achten, niemals vertrauliche Daten Übertragungswegen preiszugeben, die nicht wenigstens mit HTTPS abgesichert sind.</p>
        </div>
	<div class="textbox">
            <p>Die Methode HEAD wird zu Diagnosezwecken verwendet, da sie genauso funktioniert, wie die GET-Methode, allerdings durch sie kein tatsächlicher Inhalt im Response-Body vom Server zurückgeliefert wird. Eine HTTP-Response für eine HEAD-Anfrage ist also genauso aufgebaut, wie eine Antwort auf eine Anfrage mit GET-Methode, nur dass eben nur der Response-Header geliefert wird, ohne eine Ressource. Diese Funktionalität kann nützlich sein, wenn man Links auf Gültigkeit prüfen möchte, da in diesem Fall nur der im Antwort-Header enthaltene Statuscode von Interesse ist.</p>
        </div>
	<div class="textbox">
            <p>Eine weitere Methode, die sich zu Diagnosewecken eignet, ist TRACE. Ähnlich wie bei HEAD werden auch bei ihr keine Daten im Body der Antwort übertragen. Stattdessen wird die Anfrage genauso, wie sie beim Server eingegangen ist, wieder als Antwort an den Client zurückgeschickt. Damit kann der Client nachvollziehen, wie der Server die Daten empfängt und diese Informationen zum Debuggen von Netzwerkproblemen nutzen, vgl. [FR02 S. 33].</p>
        </div>
	<div class="textbox">
            <p>PUT dient zum Hochladen neuer, oder Modifizieren bereits bestehender Ressourcen. In der Anfrage muss dabei die URI angegeben werden, mit der die Ressource identifiziert wird beziehungsweise werden soll. Ist diese URI bereits auf dem Server vergeben, wird die bestehende Ressource modifiziert, oder überschrieben. Da es mithilfe dieser Methode offensichtlich recht einfach ist, Daten von außerhalb auf den Server zu schleusen, stellt sie ein großes Sicherheitsrisiko dar, weswegen sie heutzutage auf den meisten Servern deaktiviert ist, also mit ihr gestellte Anfragen nicht akzeptiert werden. Die Übertragung von Nutzerdaten an den Server ähnelt hier dem Anwendungszweck der POST-Methode. Die beiden Methoden unterscheiden sich dahingehend, dass bei PUT die unter der Ziel-URI zu findende Ressource modifiziert beziehungsweise neu erstellt wird. Die Ressource selbst ist also der Content, der bei Anwendung der Methode übertragen wird. Bei POST hingegen werden Daten an die Ziel-Ressource übertragen, sodass diese sie dann weiterverarbeiten kann. Der Content sind also die Nutzerdaten, während die Ressource lediglich ihr Ziel ist.</p>
        </div>
	<div class="textbox">
            <p>Wie man sicherlich anhand ihres Namens bereits vermutet, dient die DELETE-Methode dazu, eine Ressource von einem Server zu löschen. Ähnlich wie bei PUT gibt dies allerdings Dritten eine viel zu große Kontrolle über die innere Struktur des Servers, und stellt ein potenzielles Sicherheitsrisiko dar, weswegen sie generell von Servern nicht akzeptiert wird.</p>
        </div>
	<div class="textbox">
            <p>Um herauszufinden, welche Methoden ein Server akzeptiert, wird die OPTIONS-Methode verwendet. Diese liefert eine Liste der unterstützten Methoden im Header-Feld Allow zurück. Ein Client hat dabei die Möglichkeit, die erlaubten Methoden für eine bestimmte Ressource oder für den Server als Ganzes anzufragen. Wird letzteres beabsichtigt, muss der Anfrage statt einer konkreten Ziel URI das Zeichen * übergeben werden.</p>
        </div>
	<div class="textbox">
            <p>Um eine verschlüsselte Verbindung zu einem Server aufzubauen, bietet sich eine mit TLS verschlüsselte Verbindung über einen Proxy-Server an, welche mithilfe der CONNECT-Methode initialisiert werden kann.</p>
        </div>
	<div class="definition">
	    <h4 class="definitionHeading">Definition 3.3.1: </h4><h4>Proxy-Server</h4>
            <p>Als Proxy-Server bezeichnet man einen Server, der bei einer Kommunikation zwischen Client und Server steht. Anfragen des Clients werden dabei zuerst an ihn geschickt, bevor er sie zum eigentlichen Ziel-Server weiterleitet. Auch Antworten des Servers kommen zuerst beim Proxy an, bevor dieser sie an den Client leitet.</p>
        </div>
	<div class="textbox">
            <p>TLS ist ein auf der Transportschicht des TCP/IP-Modells eingeordnetes Protokoll, das zur Verschlüsselung der Kommunikation zwischen Client und Server dient. Speziell sorgt es dafür, dass die Daten weder von Dritten mitgeschnitten noch verändert werden können, sondern nur von Client und Server entschlüsselt werden können. Der Aufruf der CONNECT-Methode richtet sich an ebendiesen Proxy-Server, wobei der Name des eigentlichen Ziel-Servers, zu dem der Client eine Verbindung aufbauen möchte, im Feld request-target des CONNECT-Headers übermittelt wird.</p>
        </div>
	<div class="textbox">
	    <h2 id="sessions">3.4 Notwendigkeit von Sessions</h2>
            <p>Ein Problem, das beim Umgang mit HTTP auftritt, ist die Zustandslosigkeit dieses Protokolls. Nachdem der Server die Anfrage eines Clients bearbeitet hat, geht jegliche Beziehung zwischen den beiden verloren. Der Server „vergisst“ den Client also direkt nach dem Übersenden der Antwort. Dies stellt spätestens dann ein Problem dar, wenn man sich in einen Benutzeraccount auf einer Webseite einloggen möchte, da der Server eben immer nur die momentane Anfrage eines Clients beantworten kann. In einem Online-Shop wäre es somit beispielsweise unmöglich, Warenkörbe zu realisieren, in denen im Laufe einer Sitzung des Clients verschiedene Daten gespeichert werden müssen. Um dieses Problem zu lösen, wurde versucht, ebendiese Sitzungen trotz der Einschränkungen von HTTP zu realisieren</p>
        </div>
	<div class="definition">
	    <h4 class="definitionHeading">Definition 3.4.1: </h4><h4>Sitzung</h4>
            <p>Der Begriff Sitzung (Session) bezeichnet den gesamten Zeitraum, während dem eine Verbindung zwischen einem Client und einem Server besteht.</p>
        </div>
	<div class="textbox">
            <p>Speziell setzt man sogenannte Session-Cookies ein, welche im Browser des Clients gespeichert werden. Der Client erhält dabei eine eindeutige Session-ID anhand derer der Server ihn auch nach Bearbeiten der initialen Anfrage noch identifizieren kann. Im HTTP-Response Header gibt es diesbezüglich ein Feld namens Set-Cookie. In Verbindung mit diesem kann zwar auch ein Ablaufdatum für den Cookie festgelegt werden. Unterlässt man dies allerdings, wird der gesetzte Cookie als Session-Cookie behandelt. Im weiteren Kommunikationsverlauf enthält dann jeder Request-Header des Clients ein Feld „Cookie“ in welchem er den Cookie mit der Session-ID übermittelt.</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Abbildung 3.4.1.png" alt="WireShark Log für das Header-Feld Cookie"><br>Abbildung 3.4.1: WireShark Log für das Header-Feld Cookie</p>
        </div>
	<div class="textbox">
            <p>In Abbildung 3.4.1 werden im Feld Cookie alle vom Server gesetzten Cookies mit ihren jeweiligen Werten hintereinander gereiht angezeigt. Darunter finden sich mehrere Cookie pair Felder, in welchen die einzelnen Cookies separat aufgelistet werden. Aus Gründen der Leserlichkeit zeigt der Screenshot nur diese Felder. Wie man sieht, werden auch Cookies gespeichert, die Auskunft über andere Eigenschaften des Clients geben, wie beispielsweise has_js, welcher angibt, ob der Client JavaScript unterstützt. Der Session-Cookie im Falle des Beispiels in Abbildung 3.4.1 trägt den Namen incap_ses_449_818693. Die Session-ID folgt in Form einer langen Zeichenkette dem Gleichheitszeichen. Somit kann der Server Zugriffsprivilegien auf Ressourcen von verschiedenen Clients regeln. Beendet der Client seine Sitzung, was je nach vorgenommenen Einstellungen beim Schließen des Browsers oder etwa beim Logout passiert, löscht der Server den Session-Cookie indem er in der Response ein in der Vergangenheit liegendes Ablaufdatum für den Cookie festlegt. Wie man jedoch in Abbildung 3.4.1 ebenfalls erkennen kann, werden die Cookie-Daten unverschlüsselt und im Klartext übertragen. Schafft es ein Angreifer also, die Session-ID eines nichtsahnenden Nutzers auszulesen, kann er damit dem Server vorgaukeln, ebendieser Nutzer zu sein und beispielsweise auf Accountdaten dessen zugreifen, oder in seinem Namen Käufe tätigen. Diese Vorgehensweise wird als Session-Hijacking bezeichnet. Ähnlich wie bei der Datenübertragung mit der POST-Methode ist es also auch hier wichtig darauf zu achten, dass man sensible Daten nicht auf Kommunikationswegen übermittelt, die nicht wenigstens mit HTTPS gesichert sind.</p>
        </div>
	<div class="textbox">
	    <h2 id="httpzsm">3.5 Zusammenfassung</h2>
            <p>In diesem Kapitel wurde die Kommunikation von Client und Server über HTTP genauer betrachtet. Die Begriffe Request und Response wurden als Hauptbestandteile ebendieser definiert und anhand von konkreten Beispielen erläutert. Des Weiteren lag der Fokus auf den Statuscodes, die mit jeder HTTP-Response vom Server übermittelt werden. Dabei wurden die Code-Gruppen, sowie die wichtigsten Vertreter dieser benannt. Weiterhin hat das Kapitel die verschiedenen HTTP-Methoden sowie ihre Anwendungsbereiche thematisiert. Das letzte Teilkapitel hat sich schließlich mit dem Umstand der Zustandslosigkeit von HTTP und der daraus resultierenden Bedeutung von Sessions beschäftigt.</p>
        </div>
	<div class="textbox">
	    <h1 id="html+xml+json">4. HTML, XML und JSON</h1>
            <p>In den ersten drei Kapiteln wurde beschrieben, wie die Verbindung zwischen Client und Server zustande kommt, und was zwischen den beiden passiert, wenn eine Ressource abgerufen wird. Noch nicht geklärt ist jedoch die Frage, wie genau eine Ressource aufgebaut ist beziehungsweise was für Daten der Server in der Antwort an den Client zurückschickt.</p>
        </div>
	<div class="textbox">
            <p>Dass der Begriff Ressource eine Vielzahl von möglichen Dateien und Informationen bezeichnen kann, wurde bereits in Kapitel 2 vermittelt. Es gibt allerdings einige bestimmte Datenformate, die Nutzern beim alltäglichen Umgang mit dem Internet häufiger begegnen. Wichtig sind diese, weil sie nicht nur dazu beitragen, Inhalte zu verbreiten, sondern auch dafür sorgen, dass diese strukturiert dargestellt werden können. Solche „Auszeichnungssprachen“ sind das Kernstück des Internets, da erst sie es möglich machen, Internetseiten sowohl in maschinenlesbarer Form abzuspeichern und zu übertragen als auch dafür zu sorgen, dass die Seite in einem Browser in bequem menschenlesbarer Form angezeigt werden kann. Um solche Auszeichnungssprachen zu definieren wurde die Standard Generalized Markup Language (SGML), eine sogenannte Metasprache, entwickelt. Mit ihr wird die Syntax eines Dokuments beschrieben.</p>
        </div>
	<div class="textbox">
            <p>In diesem Kapitel werden die Auszeichnungssprachen HTML und XML sowie das Datenformat JSON vorgestellt. Dabei werden grundlegende Informationen zur Syntax der einzelnen Sprachen dargelegt und an Beispielen illustriert. Im Abschnitt HTML wird weiterhin der Ablauf beim Laden einer HTML-Seite im Internetbrowser beschrieben.<br><br>
Nach dem Durcharbeiten dieses Kapitels sollten Leser in der Lage sein:<br><br>
	    <div class="liste">   
			<ul>
				<li>HTML, XML und JSON verstehen sowie in Theorie und Praxis unterscheiden zu können</li>
				<li>den Ablauf beim Laden einer HTML-Seite nachvollziehen und beschreiben zu können</li>
				<li>einen einfachen Datentyp mittels eines XML-Schemas definieren, und in XML anwenden zu können</li>
				<li>ein einfaches JSON-Objekt erstellen zu können</li>
			</ul>
	    </div>
	</p>
        </div>
	<div class="textbox">
	    <h2 id="html">4.1 HTML</h2>
            <p>Die wohl am weitesten verbreitete Anwendung von SGML ist die Auszeichnungssprache Hypertext Markup Language (HTML). Das bedeutet, dass alle Versionen von HTML, die vor Version 4.0 veröffentlicht wurden, auf Grundlage von SGML spezifiziert wurden. HTML selbst wird genutzt, um den Inhalt und die grundlegende Darstellung von Webseiten zu beschreiben. Um dies zu erreichen, bedient sich HTML sogenannter Tags, welche die Elemente des Texts einschließen, der später vom Browser auf bestimmte Art und Weise dargestellt werden soll.</p>
        </div>
	<div class="textbox">
            <p>So dient der Tag h1 etwa dazu, eine große Überschrift festzulegen. Möchte man also beispielsweise den Text „Herzlich Willkommen“ als eine solche Überschrift formatieren, schreibt man dies im HTML-Dokument als < h1 >Herzlich Willkommen< /h1 >.</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Abbildung 4.1.1.png" alt="HTML-Code im Editor & -Seite im Browser"><br>Abbildung 4.1.1: HTML-Code im Editor & -Seite im Browser</p>
        </div>
	<div class="textbox">
            <p>Abbildung 4.1.1 zeigt HTML Quelltext, in dem eine ebensolche Auszeichnung vorgenommen wurde, sowie die Seite im Browser. Praktisch ist hierbei, dass das gesamte Dokument als Text vorliegt, wobei die Tags vom Browser eben speziell interpretiert werden. Aufgrund dessen können HTML-Dokumente leicht von serverseitigen Skripten verarbeitet werden, da diese sie nur als Strings einlesen, entsprechend verarbeiten, und wieder ausgeben müssen – sehr grundlegende Funktionalitäten in den meisten Programmiersprachen. Eine weitere beliebte Funktionalität von HTML ist das Verlinken von mehreren Dateien. Dies können einerseits Bilder sein, die durch den Tag <img> in eine Seite eingebunden werden, oder auch andere HTML-Seiten, auf die mit Hyperlinks verwiesen wird. All diese zusätzlichen Dateien müssen ebenfalls auf einem Server gespeichert werden. Beim Aufruf und subsequenten Laden einer HTML-Seite müssen all die Dateien, die in die Seite eingebunden werden sollen – also beispielsweise Mediendateien, wie Bilder oder Videos – ebenfalls von dem Server, auf dem sie gespeichert sind, geholt werden. Aus diesem Grund muss im <img> Tag, um beim Beispiel des Bildes zu bleiben, der Pfad, unter dem das Bild zu finden ist, angegeben werden.</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Abbildung 4.1.2.png" alt="Zwei WireShark Logs: Der erste für die HTML-Seite selbst & der zweite für ein Bild"><br>Abbildung 4.1.2: Zwei WireShark Logs: Der erste für die HTML-Seite selbst & der zweite für ein Bild</p>
        </div>
	<div class="textbox">
            <p>Wie man in dem Beispiel in Abbildung 4.1.2 erkennen kann, werden trotz des Aufrufs nur einer einzigen HTML-Seite mehrere GET-Anfragen ausgelöst. In der ersten wird die Ressource, die unter der URI mit dem Pfad „/script/datei.html“ abgelegt ist, abgerufen. Daraufhin liefert der Server mit der Antwort die entsprechende HTML-Datei. Im Quelltext ebendieser findet man schnell die Stelle, an der das Bild eingebunden wird:</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Abbildung 4.1.3.png" alt="Quelltext an der Stelle, an der das Bild eingebunden wird"><br>Abbildung 4.1.3: Quelltext an der Stelle, an der das Bild eingebunden wird</p>
        </div>
	<div class="textbox">
            <p>Unschwer zu erkennen ist, dass sich das Bild unter einem anderen Pfad als die HTML-Datei selbst befindet. Auch der Browser erkennt dies, da er den Quelltext der Seite während des Ladens kontinuierlich analysiert. Stößt er bei diesem Vorgang auf einen solchen Link, veranlasst er eine neue GET-Anfrage, mit der die verlinkte Ressource unter dem angegebenen Pfad vom Server angefordert wird. Ebendiese Anfrage ist in der unteren Hälfte von Abbildung 4.1.2 sichtbar. Ähnlich wie Bilder werden auch CSS-Dateien, die zur Formatierung der einzelnen Elemente der HTML-Seite dienen, erst geladen, wenn der Browser die Datei am Zielpfad komplett geladen hat. Heutzutage ist dieses Nachladen von einzelnen Elementen einer Webseite aufgrund der hohen Übertragungsgeschwindigkeiten kaum noch bemerkbar. Ist man aber beispielsweise aufgrund von Netzwerküberlastungen einer langsameren Internetverbindung ausgesetzt, ist es nicht selten zu sehen, wie sich die Internetseite Stück für Stück „aufbaut“.</p>
        </div>
	<div class="textbox">
	    <h2 id="xml+schema">4.2 XML</h2>
            <p>Eine der größten Schwächen von SGML ist, dass es nicht sehr streng ist und Entwicklern recht viele Freiheiten lässt. Das führt dazu, dass die SGML-Spezifikation sehr umfangreich ist, da es trotz dieser Freiheiten natürlich noch möglich sein muss, Dokumente erzeugen zu können, die von Parsern auf Korrektheit geprüft werden können.</p>
        </div>
	<div class="definition">
	    <h4 class="definitionHeading">Definition 4.2.1: </h4><h4>Parser</h4>
            <p>Ein Parser ist eine Software, die dazu dient Daten von einem Format in ein anderes umzuwandeln. Meistens wird er genutzt, um Eingabedaten für die Verarbeitung mit einer bestimmten Programmiersprache aufzubereiten oder sie auf Gültigkeit zu überprüfen.</p>
        </div>
	<div class="textbox">
            <p>Aus diesem Grund wurde die Extensible Markup Language (XML) entwickelt, welche auf SGML basiert, allerdings viele dieser Freiheiten nicht mehr gestattet und dafür weniger umfangreich und besser geeignet ist, von Maschinen verarbeitet zu werden. Da XML dadurch deutliche Vorteile gegenüber SGML hat, hat es sich heute als vorrangige Metasprache durchgesetzt. Seit Version 4.0 basiert auch HTML auf XML.</p>
        </div>
	<div class="textbox">
            <p>XML erlaubt es, ebenso wie SGML, Sprachen syntaktisch zu definieren. Es nutzt dabei Tags, die den in SGML und damit auch HTML verwendeten sehr ähnlich sind und prinzipiell auch genauso funktionieren. XML-Dokumente werden hauptsächlich zum Datenaustausch verwendet, da sie ein strukturiertes Speichern von Daten ermöglichen. Da sie als einfache Textdateien übermittelt werden können bieten sie ähnliche Vorteile, wie auch HTML-Dateien, nämlich, dass sie von serverseitiger Software sehr einfach eingelesen, verarbeitet, und auch wieder erzeugt werden können. Beispielsweise ist es möglich, eine mit der serverseitigen, auf Java basierenden Technologie JSP erzeugte Objektstruktur über die Programmierschnittstelle JAXB als XML-Dateien zu exportieren und auch Daten aus XML-Dateien wieder an Klassen zu binden.</p>
        </div>
	<div class="textbox">
	    <h3 id="schema">4.2.1 XML und XML-Schema</h3>
            <p>Da ein solcher Datenaustausch zwischen verschiedenen Systemen einheitlich genormt sein muss, sollten die beteiligten XML-Dokumente wohlgeformt sein. Kriterien zur Wohlgeformtheit umfassen das Vorhandensein eines Wurzelelements, das Einleiten und Abschließen von Elementen mit Inhalt mit Anfangs- und Endtags und das korrekte Verschachteln von Elementen ineinander, vgl. [W3C03 Kapitel 2.1]. Ist ein XML-Dokument wohlgeformt und richtet es sich nach einer festgelegten Grammatik, gilt es als gültig und kann zum Datenaustausch verwendet werden. Eine Grammatik kann wiederum durch eine DTD oder ein XML-Schema festgelegt werden. Da DTDs allerdings eher altmodisch sind und es an Möglichkeiten der Syntaxüberprüfung und der Festlegung von Datentypen mangelt, werden eher XML-Schemas verwendet. Ein beispielhaftes XML-Schema für einen Datentyp „student“ könnte wie folgt aussehen:</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Quellcode 1.png" alt="Ein XML-Schema für den Datentyp "student""><br>Quellcode 4.2.1.1: Ein XML-Schema für den Datentyp "student"</p>
        </div>
	<div class="textbox">
            <p>Quellcode 4.2.1.1 definiert einen Datentyp “student”, welcher dann in einem XML-Dokument benutzt und mit Daten befüllt werden kann. Es wird dabei festgelegt, dass ein „student“ einen Nachnamen, einen Vornamen und eine Matrikelnummer haben muss. Die Definition des Datentyps wird mit dem Tag <xs:complextype> eingeleitet, welcher als Attribut den Namen des Datentypen bekommt. Ein Datentyp wird als komplexer Typ definiert, wenn er weitere Elemente enthält. Soll ein Datentyp mehrere Elemente enthalten, müssen diese in einer Sequenz definiert werden, die mit <xs:sequence> eingeleitet wird. Konkret bedeutet dies, dass die Elemente beim Verwenden des Datentyps immer in dieser Reihenfolge genannt werden müssen. Die Elemente selbst müssen jeweils einen Namen, sowie einen Datentyp besitzen. Sie sind daher vergleichbar mit Attributen in einer Java-Klasse. Auch die hierbei möglichen Datentypen sind vergleichbar mit den aus Java bekannten. So gibt es die numerischen Datentypen xs:integer für Ganzzahlen, xs:float für Gleitkommazahlen und xs:decimal für Dezimalzahlen. Für Zeichenketten gibt es xs:string, für Wahrheitswerte xs:boolean. Zeit und Datum können jeweils mit xs:time und xs:date dargestellt werden. Zusätzlich zu diesen eher grundlegenden Datentypen gibt es allerdings auch für ein XML Schema spezifische Datentypen. Dazu gehört unter anderem xs:QName, der einen eindeutigen Namen bezeichnet. Um ein Kürzel für eine Sprache zu bezeichnen, wie zum Beispiel en-US für amerikanisches Englisch, nutzt man xs:language. Eine URI kann man mit xs:anyURI einfügen. Der Student verfügt also über einen Nachnamen und einen Vornamen, die jeweils als Zeichenketten definiert sind. Weiterhin hat er eine Matrikelnummer, die als Ganzzahl gespeichert wird. Außerdem können einem Studenten mit xs:attribute Attribute hinzugefügt werden, in diesem Beispiel wird dies mit einem ein ID-Attribut gezeigt.</p>
        </div>
	<div class="textbox">
	    <h3 id="xml">4.2.2 XML</h3>
            <p>In einem XML-Dokument würde die Datenstruktur dann wie folgt verwendet werden können:</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Quellcode 2.png" alt="Zwei Instanzen von "student" in XML"><br>Quellcode 4.2.2.1: Zwei Instanzen von "student" in XML</p>
        </div>
	<div class="textbox">
            <p>Quellcode 4.2.2.1 zeigt ein XML-Dokument, das das XML-Schema Beispiel aus Quellcode 4.2.1.1 benutzt. Dieses wird in der 4. Zeile eingebunden. Vorher werden Namensräume definiert, welche weitere Vorgaben zu den möglichen Bezeichnern für Elemente und Attribute, die in der XML-Datei verwendet werden, angibt. Würden mehrere Namensräume angegeben, könnte man beispielsweise Grammatiken aus verschiedenen XML-Schemen mischen.</p>
        </div>
	<div class="textbox">
            <p>Soll nun ein XML-Dokument auf Gültigkeit geprüft werden, wird ein Parser eingesetzt. Dieser lädt zuerst das Dokument, das die Grammatik für das zu prüfende XML-Dokument definiert. Dann überprüft für die Elemente, die zu dem Namensraum des jeweiligen Schemas beziehungsweise der DTD gehören, ob sie der darin definierten Grammatik gehorchen.</p>
        </div>
	<div class="textbox">
            <p>Für den Laien bietet es sich an, sich die Relation zwischen XML und XML-Schema ähnlich vorzustellen wie die zwischen einer Klasse in Java und einer Instanz dieser Klasse. Ein XML-Schema definiert den Aufbau eines Datentyps mit seinen Elementen und deren erlaubten Werten. Dies ist vergleichbar mit einer Java Klasse, die Attribute definiert, die dann zur Laufzeit befüllt werden. Die Anwendung der im Schema festgelegten Grammatik in einem XML-Dokument kann man dann mit einer Objektinstanz vergleichen, in welcher die in der Klasse einmalig definierte Struktur mit konkreten Daten befüllt wird, und die für weitere Zwecke verwendet werden kann.</p>
        </div>
	<div class="textbox">
	    <h2 id="json">4.3 JSON</h2>
            <p>Eine weitere Möglichkeit zum Austausch von Daten zwischen zwei Kommunikationspartnern bietet JSON. Es ist eine einfache Art, strukturierte Daten zu übertragen. Die Daten sind dabei in Key=Value-Paaren organisiert und können sowohl in geordneter als auch ungeordneter Reihenfolge aufgelistet werden. JSON erlaubt Datentypen, die den grundlegenden Datentypen und -strukturen in den meisten gängigen Programmiersprachen entsprechen: Zahlen, Zeichenketten, Arrays und Objekte. Zusätzlich gibt es die Wahrheitswerte true und false, sowie null. Dies ist dahingehend praktisch, dass es die Existenz von Parsern in den meisten Programmiersprachen begünstigt, mit denen Daten aus JSON-Dateien in Daten- beziehungsweise Objektstrukturen eines Programms eingelesen werden können.</p>
        </div>
	<div class="textbox">
            <p>Zu unterscheiden ist dabei zwischen einfachen Key=Value-Paaren, sowie geordneten und ungeordneten Auflistungen dieser. Eine geordnete Auflistung wird durch ein Array der Einzeldaten realisiert. Das erste Studentenbeispiel, das im XML-Abschnitt gezeigt wurde, würde in einem JSON-Array also wie in Quellcode 4.3.1 aussehen:</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Quellcode 3.png" alt="Ein JSON-Array mit Daten eines Studenten"><br>Quellcode 4.3.1: Ein JSON-Array mit Daten eines Studenten</p>
        </div>
	<div class="textbox">
            <p>Dabei ist zu beachten, dass die einzelnen Key=Value-Paare hier in geordneter Reihenfolge stehen. In einem JSON-Objekt hingegen, ist die Reihenfolge ungeordnet. Das zweite Studentenbeispiel von oben würde also wie folgt realisiert werden:</p>
        </div>
	<div class="abbildung">
            <p><img class="bild" src="Bilder/Quellcode 4.png" alt="Ein JSON-Objekt mit Daten eines Studenten"><br>Quellcode 4.3.2: Ein JSON-Objekt mit Daten eines Studenten</p>
        </div>
	<div class="textbox">
            <p>Ungeachtet dessen, wie die Key=Value-Paare genutzt werden, müssen sie immer einer speziellen Syntax folgen. Sowohl Key als auch Value müssen in Anführungszeichen eingeschlossen und durch einen Doppelpunkt voneinander getrennt sein. Bei Aufzahlungen, wie in Quellcode 4.3.1 und 4.3.2 gezeigt, müssen die einzelnen Paare durch Kommata getrennt sein.</p>
        </div>
	<div class="textbox">
            <p>Ein Vorteil von JSON gegenüber XML ist, dass es deutlich weniger Overhead produziert, also die Dateien bei gleichem Inhalt kleiner sind als entsprechende XML-Dateien. Allerdings bietet sich JSON nur zum Übertragen von bereits existenten Daten an, da es im Gegensatz zu XML keine Strukturen definieren kann. Ein weiterer Vorteil von JSON ist, dass es direkt auswertbaren JavaScript-Code darstellt.</p>
        </div>
	<div class="definition">
	    <h4 class="definitionHeading">Definition 4.3.1: </h4><h4>JavaScript</h4>
            <p>JavaScript ist eine, meistens auf Seiten des Clients verwendete, Skriptsprache, die es erlaubt Webseiten dynamisch zu verändern und Nutzereingaben zu verarbeiten.</p>
        </div>
	<div class="textbox">
            <p>Es kann also mithilfe einer von JavaScript bereitgestellten Funktion namens eval() direkt ausgewertet werden. Aus diesem Grund bietet es sich zur Datenübertragung an, da die Daten aus JSON-Objekten nicht wie bei XML erst aus der Datenstruktur extrahiert werden müssen, sondern direkt interpretiert beziehungsweise verwendet werden können.</p>
        </div>
	<div class="textbox">
	    <h2 id="datazsm">4.4 Zusammenfassung</h2>
            <p>Dieses Kapitel hat sich mit den Grundlagen zu HTML, XML und JSON befasst. Anhand konkreter Beispiele wurde dabei der Syntax der Sprachen kurz erklärt, woraufhin ihre Anwendungszwecke genauer beleuchtet wurden. Außerdem wurde der Ablauf beim Laden einer HTML-Seite anhand eines Beispiels beschrieben.</p>
        </div>
	<div class="textbox">
	    <h1 id="literatur">Literaturverzeichnis</h1>
            <p>Brian Totty, David Gourley, Marjorie Sayer, Anshu Aggarwal, Sailu Reddy: HTTP – The Definitive Guide; O’Reilly & Associates, Inc.; 2002; Kapitel 1 – 4; ISBN 978-1565925090<br>
<br>[BFM01] T. Berners-Lee, R. Fielding, L. Masinter: RFC 3986  - Uniform Resource Identifier (URI): Generic Syntax; 2005; <https://tools.ietf.org/html/rfc3986> (19.11.2019 08:45)<br>
<br>[FR02] R. Fielding, J. Reschke: RFC 7231 – Hypertext Transfer Protokoll (HTTP/1.1): Semantics and Content; 2014; <https://tools.ietf.org/html/rfc7231> (04.12.2019 22:22)<br>
<br>[W3C03] W3C: Extensible Markup Language (XML) 1.0 (Fifth Edition); 2008; <https://www.w3.org/TR/xml/> (04.12.2019 23:28)<br>
<br>N. Freed, N. Borenstein: RFC 2046 – Multipurpose Internet Mail Extensions (MIME) Part Two: Media Types; 1996; <https://tools.ietf.org/html/rfc2046> (30.11.2019 13:10)<br>
<br>A. Barth: RFC 6265 – HTTP State Management Mechanism; 2011; <https://tools.ietf.org/html/rfc6265> (01.12.2019 13:09)<br>
<br>W3C: XML Schema Part 1: Structured Second Edition; 2004; <https://www.w3.org/TR/xmlschema-1/> (01.12.2019 21:14)<br>
<br>T. Bray: RFC 8259 – The JavaScript Object Notation (JSON) Data Interchange Format; 2017; <https://tools.ietf.org/html/rfc8259> (01.12.2019 22:11)<br>
<br>R. Moats: RFC 2141 – URN Syntax; 1997; <https://tools.ietf.org/html/rfc2141> (03.12.2019 14:27)<br>
<br>E. Rescorla: RFC 8446 – The Transport Layer Security (TLS) Protocoll Version 1.3; 2018; <https://tools.ietf.org/html/rfc8446> (04.12.2019 22:43)<br>
</p>
        </div>
    </div>
    <?php require("footer.php")?>

<script src="cookie.js"></script>
</body>
</html>
