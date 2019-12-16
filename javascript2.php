<!DOCTYPE html>
<html lang="en">
<?php 
require("stylesheet_daniel.php");
$seitenname = "JavaScript 2";
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
        $javascript2 = "current";
        $jsp = "";
        $php = "";
        $nodejs = "";
        require("menu.php");
        ?>
    <div class="content-container">
        <h1>Javascript 2</h1>

        <div class="textbox" style="display: none">
            <!-- Referenz zur Struktur -->
            <h1 class="title">Title</h1>
            <h2 class="headline2">Headline 2</h2>
            <h3 class="headline3">Headline 3</h3>
            <h4 class="headline4">Headline 4</h4>
            <p class="paragraph">Paragraph</p>
            <p class="paragraph">
                <ul class="bulletpointul">
                    <li class="bulletpoint">bullet point 1</li>
                    <ul>
                        <li class="bulletpoint2">bullet point 2</li>
                        <ul>
                            <li class="bulletpoint3">bullet point 3</li>
                            <ul>
                                <li class="bulletpoint4">bullet point 4</li>
                            </ul>
                        </ul>
                    </ul>
                </ul>
            </p>
<pre><code class="code">
&#x3C;div class=&#x22;textbox&#x22;&#x3E;
    &#x3C;h1 class=&#x22;title&#x22;&#x3E;Title&#x3C;/h1&#x3E;
    &#x3C;h2 class=&#x22;headline2&#x22;&#x3E;Headline 2&#x3C;/h2&#x3E;
    &#x3C;h3 class=&#x22;headline3&#x22;&#x3E;Headline 3&#x3C;/h3&#x3E;
    &#x3C;h4 class=&#x22;headline4&#x22;&#x3E;Headline 4&#x3C;/h4&#x3E;
    &#x3C;p class=&#x22;paragraph&#x22;&#x3E;Paragraph&#x3C;/p&#x3E;
    &#x3C;pre&#x3E;&#x3C;code class=&#x22;code&#x22;&#x3E;Code&#x3C;/code&#x3E;&#x3C;/pre&#x3E;
&#x3C;/div&#x3E;
</code></pre>


            <table>
                <thead>
                    <tr><th>Wert1</th><th>wert2</th><th>wert3</th></tr>
                </thead>
                <tbody>
                    <tr><td>DATEN</td><td>DATEN</td><td>DATEN</td></tr>
                    <tr><td>DATEN</td><td>DATEN</td><td>DATEN</td></tr>
                    <tr><td>DATEN</td><td>DATEN</td><td>DATEN</td></tr>
                    <tr><td>DATEN</td><td>DATEN</td><td>DATEN</td></tr>
                    <tr><td>DATEN</td><td>DATEN</td><td>DATEN</td></tr>
                    <tr><td>DATEN</td><td>DATEN</td><td>DATEN</td></tr>
                </tbody>
            </table>
        </div>

        <div class="textbox">

            <h2 class="index">Index</h2>
            <ul class="index">
                <li><a class="hashindex" href="#wasistjavascript">Was ist JavaScript?</a> </li>
                <li><a class="hashindex" href="#datentypen">Datentypen & Arrays</a> </li>
                <li><a class="hashindex"  href="#verzweigungen">Verzweigungen und Schleifen</a> </li>
                <li><a class="hashindex"  href="#arrays">Arrays</a> </li>
                <li><a class="hashindex"  href="#funktionen">Funktionen</a> </li>
                <li><a class="hashindex"  href="#objekte">Objekte</a> </li>
                <li><a class="hashindex"  href="#eventhandler">Eventhandler</a> </li>
                <li><a class="hashindex"  href="#eventhandler">Eventhandler</a> </li>
                <li><a class="hashindex"  href="#jquery">JQuery</a> </li>
                <li><a class="hashindex"  href="#ajax">Ajax</a> </li>
                <li><a class="hashindex"  href="#selenium">Selenium</a> </li>
            </ul>

            <div id="wasistjavascript" class="chapter">
                <div class="subtopic">
                    <h3 class="headline2">Was ist JavaScript? </h3>
                    <p class="paragraph"> JavaScript (JS) ist eine zumeist client-seitig eingesetzte Skriptsprache, die ursprünglich für dynamisches HTML in Internet-Browsern entwickelt wurde, um:</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Benutzerinteraktionen auszuwerten, </li>
                        <li class="bulletpoint">Inhalte zu verändern, ohne die Webseite nachzuladen,</li>
                        <li class="bulletpoint">eine Webseiteper Programmcode nachzuladen viaAsynchronous JavaScript and XML (AJAX) und um</li>
                        <li class="bulletpoint">einen Seiteninhalt dynamisch zu generieren.</li>
                    </ul>
                    <p>JavaScript wird von allen gängigen Internet-Browsern interpretiert.</p>
                    </p>
                    <p class="paragraph">Typische Anwendungsgebiete von JavaScript in einem Internet-Browser sind...</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">die dynamische Manipulation von Webseiten über das Document Object Model (DOM).</li>
                        <li class="bulletpoint">die Plausibilitätsprüfung / Datenvalidierung von Formulareingaben noch vor der Übertragung zum Server.</li>
                        <li class="bulletpoint">die Anzeige von Dialogfenstern.</li>
                        <li class="bulletpoint">das Senden und Empfangen von Daten, ohne dass der Browser die Seite neu laden muss.</li>
                        <li class="bulletpoint">das Vorschlagen von Suchbegriffen während der Eingabe.</li>
                        <li class="bulletpoint">die Anzeige von Werbebannern oder Laufschriften.</li>
                        <li class="bulletpoint">die Verschleierung von E-Mail-Adressen zur Bekämpfung von Spam.</li>
                    </ul>
                    <p class="paragraph">JavaScript ist Turing-vollständig und erfüllt damit die Kriterien einer vollwertigen Programmiersprache.</p>
                    <p class="paragraph">JavaScript ist vollständig dynamisch typisiert; die Zuweisung von Werten an Variablen unterliegt keinen typbasierten Einschränkungen. </p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Aufgrund dessen ist der Datentyp keine Eigenschaft einer Variablen, sondern Laufzeit-bezogen die Eigenschaft ihres aktuellen Wertes.</li>
                        <li class="bulletpoint">Der Datentyp eines Wertes lässt sich zur Laufzeit mit dem unären Operator <code>typeof</code> ermitteln.</li>
                    </ul>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">HTML, JavaScript und CSS </h3>
                    <div class="subpoint">
                        <h4 class="headline4">Die Basistechnologien des Clients</h4>
                        <img class="image" src="./img_js_script/folie5.png">
                        <img class="image" src="./img_js_script/folie6.png">
                    </div>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Verschiedene Arten der Einbettung</h3>
                    <p class="paragraph">• Es gibt verschiedene Wege JavaScript in HTML einzubetten:</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Intern</li>
                        <li class="bulletpoint">Extern</li>
                        <li class="bulletpoint">Über die DOM-API</li>
                    </ul>
                    <p class="paragraph">Die Reihenfolge der Einbettung ist wichtig, da der Code auf alle vor ihm eingebunden externen oder internen Dateien zugreifen kann.</p>
                    <p class="paragraph">Die Script werden geladen und ausgeführt, sobald der Parser auf ein Script-Tag stößt.</p>
                    <p class="paragraph">JavaScript-Code kann auf allen vor ihm eingebundenen externen oder internen Code zugreifen.</p>
                    <p class="paragraph">Die dritte Variante hat nur wenige Anwendungsfälle wie z.B. das Einbinden von Google Maps Code.</p>
                    <p class="paragraph">Es sollte die externe Variante bevorzugt werden. </p>
                    <div class="subpoint">
                        <h4 class="headline4">Interne Einbettung durch script-Tag</h4>
<pre><code>
    &#x3C;!DOCTYPE html&#x3E;
        &#x3C;html lang=&#x22;de&#x22;&#x3E;
        &#x3C;head&#x3E;
            &#x3C;meta charset=&#x22;utf-8&#x22; /&#x3E;
            &#x3C;script&#x3E;alert(&#x22;Hallo Welt!&#x22;);&#x3C;/script&#x3E;
            &#x3C;noscript&#x3E;Sie haben JavaScript deaktiviert.&#x3C;/noscript&#x3E;
            &#x3C;title&#x3E;Titel der Seite&#x3C;/title&#x3E;
        &#x3C;/head&#x3E;
        &#x3C;body&#x3E; &#x3C;!--Sichtbarer Dokumentinhalt --&#x3E;
            &#x3C;h1&#x3E;Hallo Leute&#x3C;/h1&#x3E;
            &#x3C;p&#x3E;Sehen Sie sich den Quellcode dieser Seite an.&#x3C;/p&#x3E;
        &#x3C;/body&#x3E;
    &#x3C;/html&#x3E;
</code></pre>
                        <h4 class="headline4">Einbettung einer externen Datei</h4>
<pre><code>
   &#x3C;!DOCTYPE html&#x3E;
    &#x3C;html lang=&#x22;de&#x22;&#x3E;
        &#x3C;head&#x3E;&#x3C;meta charset=&#x22;utf-8&#x22; /&#x3E;
            &#x3C;title&#x3E;Titel der Seite&#x3C;/title&#x3E;
        &#x3C;/head&#x3E;
        &#x3C;body&#x3E;
        &#x3C;!--Sichtbarer Dokumentinhalt --&#x3E;
        &#x3C;h1&#x3E;Hallo Leute&#x3C;/h1&#x3E;
        &#x3C;p&#x3E;Sehen Sie sich den Quellcode dieser Seite an.&#x3C;/p&#x3E;
        &#x3C;/body&#x3E;
        &#x3C;script src=&#x201C;extern.js&#x22;&#x3E;&#x3C;/script&#x3E;
    &#x3C;/html&#x3E;
</code></pre>
                        <h4 class="headline4">Einbettung mittels der DOM-API zur Laufzeit</h4>
                        <p class="paragraph">Während der Laufzeit kann mittels der DOM-API ein Script-Element erzeugt und anschließend dem DOM hinzugefügt werden.</p>
<pre><code>
var googleMapsApiKey = &#x27;...&#x27;;
var script = document.createElement(&#x27;script&#x27;);
script.id = &#x27;google-maps-script&#x27;;
script.src = &#x27;https://maps.googleapis.com/maps/api/js?key=&#x27; + googleMapsApiKey + &#x27;&#x26;libraries=places&#x26;callback=initMap&#x27;;
document.body.appendChild(script);
</code></pre>
                    </div>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Was ist ECMAScript?</h3>
                    <p class="paragraph">ECMAScript ist die Standardisierung des Sprachkerns von JavaScript, welches von der European Computer Manufacturer's Association in Genf seit 1997 durchgeführt wird.</p>
                    <p class="paragraph">Ziel war die Beendigung des Browserkriegs zwischen Microsoft und Netscape</p>
                    <p class="paragraph">Die aktuelle Version ist die Version 2017, die im Juni 2017 als „ECMAScript 2017“ veröffentlicht wurde.</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Dieser sollen jährliche Updates folgen.</li>
                        <li class="bulletpoint">Die Entwicklung der Standards erfolgt auf GitHub.</li>
                    </ul>
                    <div class="subpoint">
                        <h4 class="headline4">ECMAScript in der Sandbox</h4>
                        <p class="paragraph">JavaScript wird im Browser in einer sogenannten Sandbox ausgeführt. </p>
                        <p class="paragraph">Dies bewirkt, dass man in JavaScript im Allgemeinen nur Zugriff auf die Objekte des Browsers hat und somit nicht auf das Dateisystem zugreifen und dadurch keine Dateien lesen oder schreiben kann.</p>
                        <p class="paragraph">Um Sicherheitsprobleme, wie das sogenannte Cross-Site-Scripting zu verhindern, wird jede Website oder Webanwendung innerhalb des Browsers isoliert ausgeführt und ein Datenaustausch unterbunden.</p>
                        <ul class="bulletpointul">
                            <li class="bulletpoint">Ohne diesen Schutz wäre es möglich, über eine Seite Schadcode auszuführen, der beispielsweise Bank-oder Logindaten in anderen parallel geöffneten Browserfenstern ausliest oder manipuliert.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="datentypen" class="chapter">
                <h2 class="headline2">Datentypen & Arrays </h2>
                <div class="subtopic">
                    <h3 class="headline3">Eigenschaften von JavaScript</h3>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">C ähnliche Syntax, frei formatierbar</li>
                        <li class="bulletpoint">interpretierend</li>
                        <li class="bulletpoint">schwaches Typsystem (loosely-typed)</li>
                        <li class="bulletpoint">Garbage-Collection ähnlich zu Java</li>
                        <li class="bulletpoint">Strings in Unicode</li>
                        <li class="bulletpoint">objektbasiert aber nicht objektorientiert</li>
                        <ul>
                            <li class="bulletpoint2">es gibt keine Klassen</li>
                            <li class="bulletpoint2">Objekte haben Properties und Methoden</li>
                        </ul>
                        <li class="bulletpoint">Variablen und Funktionen können jederzeit angelegt werden</li>
                        <li class="bulletpoint">variable Anzahl von Parametern für Funktionen</li>
                        <li class="bulletpoint">portabel und hardwareunabhängig</li>
                    </ul>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">JavaScript vs. Java</h3>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">ähnliche Syntax</li>
                        <ul>
                            <li class="bulletpoint2">Blöcke mit <code>{ }</code></li>
                            <li class="bulletpoint2">Kontrollstrukturen: <code>if, switch, for, while, do, try catch</code></li>
                            <li class="bulletpoint2">Kommentare: <code>//, /*...*</code></li>
                            <li class="bulletpoint2">Stringverkettung mit +</li>
                        </ul>
                        <li class="bulletpoint">JavaScript hat keine feste Typdeklaration</li>
                        <ul>
                            <li class="bulletpoint2">eine Variable kann nacheinander unterschiedliche Typen halten</li>
                            <li class="bulletpoint2">Zahlen sind immer Gleitkommazahlen (kein int, kein short, ...)</li>
                            <li class="bulletpoint2"><code>function</code> leitet eine Funktionsdeklaration ein</li>
                        </ul>
                    </ul>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Variablen</h3>
                    <p class="paragraph">Zur Erstellung von Variablen können drei verschiedene Identifikatoren benutzt werden.</p>
                    <p class="paragraph">Angelegte, aber nicht initialisierte Variablen sind automatisch <code>undefined</code>.</p>
                    <p class="paragraph">Der Typ einer Variable kann mittelst <code>typeof</code> abgefragt werden.</p>
                    <p class="paragraph">Identifikatoren sind</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint"><code>var</code></li>
                        <li class="bulletpoint"><code>let</code> seit ES2015</li>
                        <li class="bulletpoint"><code>const</code> seit ES2015</li>
                    </ul>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Datentypen</h3>
                    <p class="paragraph">Eingebaute Datentypen von JavaScript...</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint"><code>Boolean</code> – Wahrheitswert (true oder false)</li>
                        <li class="bulletpoint"><code>Number</code> – Ganz-oder Fließkommazahl</li>
                        <li class="bulletpoint"><code>String</code> – Zeichenkette</li>
                        <li class="bulletpoint"><code>Date</code> – Datum</li>
                        <li class="bulletpoint"><code>Array</code> – Indiziertes oder assoziatives Array</li>
                        <li class="bulletpoint"><code>Objekt</code> - Vor-oder selbstdefinierte Objekte</li>
                        <li class="bulletpoint"><code>Function</code> – Funktionen</li>
                        <li class="bulletpoint"><code>RegExp</code> – Reguläre Ausdrücke</li>
                    </ul>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Literale und Instanzen</h3>
                    <p class="paragraph">Eingebaute Datentypen von JavaScript...</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">über Literale oder</li>
                        <li class="bulletpoint">über Instanzen.</li>
                    </ul>
                    <p class="paragraph">Die Datentypen <code>Number, Boolean, String </code> und <code> Object </code> können über den Aufruf eines Konstruktors erzeugt werden</p>
                    <p class="paragraph">Die Konstruktor-Funktionen heißen genau wie die Datentypen und liefern ein Objekt zurück.</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Dies gilt für Arrays und reguläre Ausdrücke.</li>
                    </ul>
                    <p class="paragraph">Für <code>Null</code> und <code>Undefined</code> existieren nur Literale.</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">String:</li>
                        <ul class="bulletpointul">
                            <li class="bulletpoint">Literal: <code>"aaa" / 'aaa'</code></li>
                            <li class="bulletpoint">Konstruktor: <code>new String(value)</code></li>
                        </ul>
                        <li class="bulletpoint">Number:</li>
                        <ul class="bulletpointul">
                            <li class="bulletpoint">Literal: <code>123, ...</code></li>
                            <li class="bulletpoint">Konstruktor: <code>new Number(value)</code></li>
                        </ul>
                        <li class="bulletpoint">Boolean:</li>
                        <ul class="bulletpointul">
                            <li class="bulletpoint">Literal: <code>true / false</code></li>
                            <li class="bulletpoint">Konstruktor: <code>new Boolean(value)</code></li>
                        </ul>
                        <li class="bulletpoint">Object:</li>
                        <ul class="bulletpointul">
                            <li class="bulletpoint">Literal: <code>{}</code></li>
                            <li class="bulletpoint">Konstruktor: <code>new Object()</code></li>
                        </ul>

                    </ul>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Typumwandlung</h3>
                    <p class="paragraph">die Typumwandlung erfolgt implizit</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">hin zum größeren Typ</li>
                        <li class="bulletpoint">keine Genauigkeitsverluste bei Zuweisung</li>
                    </ul>
                    <p class="paragraph">es gibt 2 Vergleichsoperatoren</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">==konvertiert die Werte erst zu einem gemeinsamen Typ und vergleicht sie dann.</li>
                        <li class="bulletpoint">===vergleicht die Werte sofort, ohne eine Typangleichung durchzuführen. Bei ungleichem Typ ist der Vergleich dadurch immer negativ.</li>
                        <li class="bulletpoint">Der „triple equals“-Operator ist immer zu bevorzugen!</li>
                        <li class="bulletpoint">Der „triple equals“-Operator ist immer zu bevorzugen!</li>
                    </ul>
                    <p class="paragraph"><code>typeof(variable)</code> liefert den Datentyp der Variablen</p>

                    <div class="subpoint">
                        <h4 class="headline4">Beispiel</h4>
<pre><code>
    &#x3C;!DOCTYPE html&#x3E;
&#x3C;html lang=&#x22;de&#x22;&#x3E;
&#x3C;head&#x3E;&#x3C;/head&#x3E;
&#x3C;body&#x3E;
&#x3C;script&#x3E;
    var a = &#x22;10&#x22;;
    var b = 10;
    document.write(&#x22;typeof(a) = &#x22; + typeof(a) + &#x22;&#x3C;br/&#x3E;&#x22;);
    document.write(&#x22;typeof(b) = &#x22; + typeof(b) + &#x22;&#x3C;br/&#x3E;&#x22;);
    var c1 = (a == b);var c2 = (a === b);
    document.write(&#x22;c1 = &#x22; + c1 + &#x22;&#x3C;br/&#x3E;&#x22;);
    document.write(&#x22;c2 = &#x22; + c2 + &#x22;&#x3C;br/&#x3E;&#x22;);
&#x3C;/script&#x3E;
&#x3C;/body&#x3E;
&#x3C;/html&#x3E;
</code></pre>

                        <img class="image" src="./img_js_script/folie21.png">
                    </div>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Truthiness</h3>
                    <p class="paragraph">die Operatoren <code>||, &&</code> und Kontrollstrukturen wie <code>if</code> arbeiten mit boolschen Werten, beliebige Daten können übergeben werden</p>
                    <p class="paragraph">die Truthiness legt fest, welche Werte als <code>true</code> bzw. <code>false</code> angesehen werden</p>
                    <p class="paragraph">falsch sind</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint"><code>false</code></li>
                        <li class="bulletpoint"><code>0, -0, NaN</code></li>
                        <li class="bulletpoint"><code>null, undefined</code></li>
                    </ul>
                    <p class="paragraph">wahr sind alle anderen Werte.</p>

                </div>
                <div class="subtopic">
                    <h3 class="headline3">Undefined und Null</h3>
                    <p class="paragraph">alle Variablen die deklariert, aber nicht initialisiert sind, haben automatisch den Wert <code> undefined </code></p>
                    <p class="paragraph">Null repräsentiert hingegen ein gewolltes Auslassen einer Wertes</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Null hat nur einen Wert: <code>null</code></li>
                    </ul>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Scope von Variablen</h3>
                    <p class="paragraph">In JavaScript existieren zwei Arten von Scopes. Diese definieren die Sichtbarkeit einer Variable.</code></p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">1. globaler Scope</li>
                        <ul>
                            <li class="bulletpoint">Alle nicht in einer lokalen Funktion definierten Variable befinden sich im globalen Scope.</li>
                            <li class="bulletpoint">Dieser beinhaltet abhängig von der Laufzeitumgebung verschiedene APIs und die Standardbibliothek.</li>
                        </ul>
                        <li class="bulletpoint">2. lokaler Scope</li>
                        <ul>
                            <li class="bulletpoint">Jede Funktion definiert einen neuen, lokalen Scope..</li>
                            <li class="bulletpoint">Alle in einer Funktion definierten Variablen sind von ihrem Scope, aber nicht vom globalen Scope sichtbar.</li>
                            <li class="bulletpoint">Innerhalb eines lokalen Scopes kann man auf alle äußeren Scopes zugreifen.</li>
                            <li class="bulletpoint">Ein lokaler Scope wird bei der Ausführung der Funktion erstellt und nach ihrer Beendigung entfernt.</li>
                            <li class="bulletpoint">Achtung: Falls eine Variable in einem lokalen Scope initialisiert, aber nicht definiert wird, ist sie automatisch global.</li>
                        </ul>
                        <p class="paragraph">Variablen sind in der ganzen Funktion sichtbar</p>
                        <p class="paragraph">Blöcke haben -anders als in Java -keine Auswirkungen auf die Sichtbarkeit:</p>
<pre><code>
    var a = 5;// global sichtbar
    function f() {
        var b = 7; // innerhalb der Funktion sichtbar
        if (b === 7) {
            var c = 9; // innerhalb der Funktion sichtbar
        }
        document.write(&#x22;a = &#x22; + a +&#x22;&#x3C;br/&#x3E;&#x22;);
        document.write(&#x22;b = &#x22; + b +&#x22;&#x3C;br/&#x3E;&#x22;);
        ocument.write(&#x22;c = &#x22; + c +&#x22;&#x3C;br/&#x3E;&#x22;);
    }
    f();

    //Ausgabe:
    //a=5
    //b=7
    //c=9


    let globaleVariable = 5;
    let variable = 4;
    function neuerScope() {
        let variable = &#x27;&#x27;;
        neueGlobaleVariable = 2;
        console.log(typeof variable); // string
        console.log(typeof globaleVariable); // number
        console.log(typeof neueGlobaleVariable); // number
    }
    console.log(typeof globaleVariable); // number
    console.log(typeof variable); // number
    console.log(typeof neueGlobaleVariable); // undefined
    neuerScope();
    console.log(typeof neueGlobaleVariable); // number
</code></pre>
                    </ul>

                </div>
                <div class="subtopic">
                    <h3 class="headline3">JavaScript Debug-Konsole in Firefox</h3>
                    <img class="image" src="./img_js_script/folie26.png">
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Not a Number (NaN)</h3>
                    <p class="paragraph">bei Zahlen repräsentiert <code>NaN</code> den ungültigen Wert Not a Number.</p>
                    <p class="paragraph">Kein Wert ist gleich <code>NaN;</code> auch nicht NaN selbst!</p>
<pre><code>
    &#x3C;!DOCTYPE html&#x3E;
    &#x3C;html lang=&#x22;de&#x22;&#x3E;
    &#x3C;head&#x3E;&#x3C;/head&#x3E;
    &#x3C;body&#x3E;
        &#x3C;script&#x3E;document.write(1 / 0);
            document.write(&#x22;&#x3C;br/&#x3E;&#x22;);document.write(0 / 0);
            document.write(&#x22;&#x3C;br/&#x3E;&#x22;);document.write(0 === NaN);
            document.write(&#x22;&#x3C;br/&#x3E;&#x22;);document.write(NaN === NaN);
            document.write(&#x22;&#x3C;br/&#x3E;&#x22;);
        &#x3C;/script&#x3E;
        &#x3C;/body&#x3E;
    &#x3C;/html&#x3E;
</code></pre>
                    <img class="image" src="./img_js_script/folie29.png">
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Einfache Literale</h3>
                    <p class="paragraph">Notation ist ähnlich zu Java; mit Besonderheiten bei Strings</p>
<pre><code>
    var antwort = 42;       // Integer-Literal
    var pi = 3.141;         // Flie&#xDF;komma-Literal
    var happy = true;       // Boolean-Literal
    var leer = null;        // Null-Literal

    // String-Literale:
    var s1 = &#x27;Hallo&#x27;;
    var s2 = &#x22;Hallo&#x22;;
    var s3 = &#x27;String &#x22;im String&#x22; geht auch&#x27;;
    var s4 = &#x22;String &#x27;im String&#x27; geht auch&#x22;;
    var s5 = &#x22;String &#x22; + &#x22;Anhang&#x22;;
    var s6 = &#x22;\&#x22;Escapen von Zeichen\&#x22;&#x22;;
    var s7 = &#x22;\u00ea Unicode&#x22;;

</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Hoisting</h3>
                    <p class="paragraph">
                        Mit Hoisting (Hochziehen) bezeichnet man das Verhalten des JavaScript-Interpreters bei der Deklaration von Variablen und Funktionen in Funktionen.
                    </p>
                    <p class="paragraph">
                        Stößt der JavaScript-Interpreter auf eine Funktion, so überprüft er zunächst in der gesamten Funktion, welche Variablen im lokalen Gültigkeitsbereich der Funktion definiert werden und welche global definiert wurden.
                    </p>
                    <p class="paragraph">
                        Werden Variablendefinitionen mit lokalem Gültigkeitsbereich gefunden, so werden diese gleich deklariert, nicht aber initialisiert.
                    </p>
                    <p class="paragraph">
                        Der JavaScript-Interpreter "zieht" also sämtliche Deklarationen von Variablen im Funktionsrumpf gleich unterhalb des Kopfes der Funktion hoch.
                    </p>
                    <p class="paragraph">
                        Ebenso werden die Deklaration von Funktionen nach vorne gezogen.
                    </p>
<pre><code>
    var s = &#x22;hallo&#x22;;     // globale Variable
    function foo() {
        document.write(s);  // ergibt &#x22;undefined&#x22; und nicht &#x22;hallo&#x201C;
        var s = &#x22;test&#x22;;     // Initialisierung von &#x27;s&#x27;
        document.write(s);  // ergibt &#x22;test&#x201C;
    }
    foo();
</code></pre>

                    <p class="paragraph">
                        Der obenstehende Code wird vom JavaScript-Interpreter so ausgeführt, als wäre Folgendes definiert worden...
                    </p>
<pre><code>
    var s = &#x22;hallo&#x22;;     // globale Variable
    function foo() {
        var s;
        document.write(s);  // ergibt &#x22;undefined&#x22; und nicht &#x22;hallo&#x201C;
        var s = &#x22;test&#x22;;     // Initialisierung von &#x27;s&#x27;
        document.write(s);  // ergibt &#x22;test&#x201C;
    }
    foo();
</code></pre>
                </div>
            </div>
            <div id="verzweigungen" class="chapter">
                <h2 class="headline2">Verzweigungen und Schleifen</h2>
                <div class="subtopic">
                    <h3 class="headline3">If-Verzweigung</h3>
<pre><code>
    if (0) {
        console.log(&apos;A&apos;);
    } else if (false) {
        console.log(&apos;B&apos;);
    } else if (null) {
        console.log(&apos;C&apos;);
    } else if (undefined) {
        console.log(&apos;D&apos;);
    } else if (NaN) {
        console.log(&apos;E&apos;);
    } else if (&apos;&apos; || &quot;&quot;) {
        console.log(&apos;F&apos;);
    } else {
        console.log(&apos;G&apos;);
    }
</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">for-Schleife</h3>
<pre><code>
    for (let i = 0; i &lt; 100; i++) {
        console.log(i);
    } // 0 1 2 3 ...
    let l = 0;
    for (;;) {
        if (l === 100) break;
        console.log(l);
        l++;
    }
    // 0 1 2 3 ...
</code></pre>
                    <div class="subpoint">
                        <h4 class="headline4">for...in-Schleife</h4>
                        <p class="paragraph">Mittels dieser Schleife kann man über alle aufzählbaren Eigenschaften eines Objektes iterieren.</p>
                        <ul class="bulletpointul">
                            <li class="bulletpoint">Die Variable i stellt den Eigenschaftsnamen als String dar.</li>
                        </ul>
                        <p class="paragraph">Dies funktioniert auch mit Arrays, da Arrays Objekte und die Indexes Eigenschaftsnamen sind. </p>
                        <ul class="bulletpointul">
                            <li class="bulletpoint">Die Reihenfolge ist aber nicht garantiert.</li>
                        </ul>

<pre><code>
const objekt = {eigenschaft1: &apos;...&apos;,eigenschaft2: &apos;...&apos;};
for (let i in objekt) {
    console.log(i);
}
// eigenschaft1 eigenschaft2
</code></pre>
</div>
                    <div class="subpoint">
                        <h4 class="headline4">for...of-Schleife</h4>
                        <p class="paragraph">Die Schleife iteriert über alle Elemente eines iterierbaren Objektes.</p>
                        <ul class="bulletpointul">
                            <li class="bulletpoint">Iterierbare Objekte sind Array, Typedarrays, Map, ...</li>
                        </ul>
                        <p class="paragraph">Es werden nur eigene Eigenschaften iteriert.</p>
                        <p class="paragraph">i enthält den Wert der Eigenschaft und nicht den Namen.</p>
                    </div>

<pre><code>
const array1 = [1, 2, 3];
    for (let i of array1) {
    console.log(i);
}
// 1 2 3
</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">while-Schleife und do...while-Schleife</h3>
<pre><code>
let i = 0;
do {
    console.log(i);i++;
} while (i &lt; 100);
// 0 1 2 3 ...

i = 0;
while(i &lt; 100) {
    console.log(i);
    i++;
    }
// 0 1 2 3 ...
</code></pre>


                </div>
            </div>
            <div id="arrays" class="chapter">
                <h2 class="headline2">Arrays</h2>
                <div class="subtopic">
                    <h3 class="headline3">Ein erstes Beispiel</h3>

<pre><code>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;de&quot;&gt;
&lt;head&gt;&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
var a1 = new Array();
a1[0] = &quot;Hallo&quot;;
a1[1] = 42;
document.write(a1.length+&quot;&lt;br/&gt;&quot;);
a1[22] = 23;
document.write(a1+&quot;&lt;br/&gt;&quot;);
document.write(a1.length+&quot;&lt;br/&gt;&quot;);
document.write(a1[5]+&quot;&lt;br/&gt;&quot;);
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>

                    <img class="image" src="./img_js_script/folie42.png">




                </div>
                <div class="subtopic">
                    <h3 class="headline3">dynamisches Wachsen</h3>
                    <pre><code>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;de&quot;&gt;
&lt;head&gt;&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
var a2 = new Array();
a2[0] = &quot;Hallo&quot;;
a2[1] = 42;
document.write(a2.length+&quot;&lt;br/&gt;&quot;);
a2[12] = 23;document.write(a2+&quot;&lt;br/&gt;&quot;);
document.write(a2.length+&quot;&lt;br/&gt;&quot;);
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>

                    <img class="image" src="./img_js_script/folie43.png">
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Initialisierung</h3>
<pre><code>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;de&quot;&gt;
&lt;head&gt;&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
// Array direkt initialisieren
var a3 = new Array(&quot;Hallo&quot;, 24, 23);
// Array Literale
var leer = [];
var zahlen = [ &quot;eins&quot;, &quot;zwei&quot;, &quot;drei&quot; ];
document.write(leer[0]+&quot;&lt;br/&gt;&quot;);
document.write(zahlen[1]+&quot;&lt;br/&gt;&quot;);
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
                    <img class="image" src="./img_js_script/folie44.png">

                </div>
                <div class="subtopic">
                    <h3 class="headline3">Elementlöschung</h3>

<pre><code>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;de&quot;&gt;
&lt;head&gt;&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
var zahlen = [ &quot;eins&quot;, &quot;zwei&quot;, &quot;drei&quot; ];
delete zahlen[1];
document.write(zahlen+&quot;&lt;br/&gt;&quot;);
document.write(zahlen.length+&quot;&lt;br/&gt;&quot;);
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">splice</h3>
                    <div class="subpoint">
                        <h4 class="headline4">Elementlöschung</h4>
                        <img class="image" src="./img_js_script/folie46.png">
                        <img class="image" src="./img_js_script/folie47.png">
                        <img class="image" src="./img_js_script/folie48.png">
                        <img class="image" src="./img_js_script/folie49.png">
                    </div>
                    <div class="subpoint">
                        <h4 class="headline4">Elementeinfügung</h4>
                        <img class="image" src="./img_js_script/folie50.png">
                        <img class="image" src="./img_js_script/folie51.png">
                    </div>

                    <a href="https://www.w3schools.com/Jsref/jsref_splice.asp">https://www.w3schools.com/Jsref/jsref_splice.asp</a>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Anhängen eines Elementes</h3>

<pre><code>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;de&quot;&gt;
&lt;head&gt;&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
var a5 = [ &quot;a&quot;, &quot;b&quot;, &quot;c&quot; ];
a5[a5.length] = &quot;d&quot;;
document.write(a5+&quot;&lt;br/&gt;&quot;);
a5.push(&quot;e&quot;);
document.write(a5+&quot;&lt;br/&gt;&quot;);
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
                    <img class="image" src="./img_js_script/folie52.png">
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Assoziative Arrays</h3>
                    <p class="paragraph">besonderes Array mit String als Index</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">unterschiedliche Typen als Inhalt möglich</li>
                        <li class="bulletpoint">ähnlich einer Map in Java</li>
                    </ul>
                    <p class="paragraph">Verarbeitung</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Erzeugung mit <code>new Array()</code></li>
                        <li class="bulletpoint">Auslesen eines Elements über <code>["Index"]</code></li>
                        <li class="bulletpoint">Iterieren über alle Elemente mit foreach-Schleife <code>for (var e in array) { ... }</code></li>
                    </ul>
                    <div class="subpoint">
                        <h4 class="headline4">Beispiel</h4>
<pre><code>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;de&quot;&gt;
&lt;head&gt;&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
var a6 = new Array();
a6[&quot;go&quot;] = &quot;gehen&quot;;
a6[&quot;walk&quot;] = &quot;gehen&quot;;
a6[&quot;sleep&quot;] = &quot;schlafen&quot;;
document.write(a6[&quot;go&quot;]+&quot;&lt;br/&gt;&quot;);
for (var e in a6 ) {
    document.write(e + &quot;: &quot; + a6[e] +&quot;&lt;br/&gt;&quot;);
}
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
                        <img class="image" src="./img_js_script/folie54.png">

                    </div>
                    <div class="subpoint">
                        <h4 class="headline4">Array-Literal</h4>

<pre><code>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;de&quot;&gt;
&lt;head&gt;&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
var a7 = { &quot;go&quot; : &quot;gehen&quot;, &quot;walk&quot; : &quot;gehen&quot;, &quot;sleep&quot; : &quot;schlafen&quot; };
for (var e in a7 ) {
 document.write(e + &quot;: &quot; + a7[e] +&quot;&lt;br/&gt;&quot;);
}
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
                        <img class="image" src="./img_js_script/folie55.png">
                    </div>
                </div>
            </div>
            <div id="funktionen" class="chapter">
                <h2 class="headline2">Funktionen</h2>
                <div class="subtopic">
                    <h3 class="headline3">Was sind Funktionen in JavaScript?</h3>
                    <p class="paragraph">Funktionen sind Objekte:</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">sie können über Variablen referenziert werden</li>
                        <li class="bulletpoint">sie können an andere Funktionen übergeben werden</li>
                    </ul>
                    <p class="paragraph">die Deklaration einer Funktion erfolgt</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">mit dem Schlüsselwort <code>function</code> oder</li>
                        <li class="bulletpoint">mit dem speziellen Konstruktor <code>Function</code></li>
                    </ul>
                    <p class="paragraph">der Aufruf einer Funktion erfolgt</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">über ihren Namen oder </li>
                        <li class="bulletpoint">über eine Variable, die auf die Funkion zeigt oder</li>
                        <li class="bulletpoint">über die <code>apply-Methode</code>, die jede Funktion hat</li>
                    </ul>
                    <p class="paragraph">die Parameterübergabe erfolgt wie in Java</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">pass-by-value: eine Kopie der Parameter wird angelegt</li>
                        <li class="bulletpoint">formale Parameter sind lokale Variablen</li>
                        <li class="bulletpoint">bei Objekten wird die Referenz kopiert, nicht das Objekt</li>
                    </ul>
                    <p class="paragraph">Rückgabe von Werten</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">der Rückgabeparameter wird in JavaScript nicht deklariert</li>
                        <li class="bulletpoint">über Schlüsselwort returnfür Rückgabe</li>
                    </ul>
                    <p class="paragraph">Funktionen können Funktionen enthalten</p>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Deklaration einer Funktion</h3>
                    <p class="paragraph">einfache Deklaration<br> <code>function f() { }</code></p>
                    <p class="paragraph">Benannter Funktionsausdruck (named function expression)<br> <code>var f = function f() { };</code></p>
                    <p class="paragraph">Anonyme Funktion (anonymous function)<br> <code>var f = function() { };</code></p>
                    <p class="paragraph">Bei der Deklaration und dem benannten Funktionsausdruck kann über die Proprerty <code>name</code> der Name der Funktion ausgelesen werden</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">dies ist jedocht nicht gemäß ECMA-Standard</li>
                    </ul>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Beispiele</h3>

<pre><code>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;de&quot;&gt;
&lt;head&gt;&lt;/head&gt;
&lt;body&gt;
    &lt;script&gt;
    function f1() { }
    var f2 = function() { };
    var f3 = function f3() { };
    document.write(f1.name+&quot;&lt;br/&gt;&quot;);
    document.write(f2.name+&quot;&lt;br/&gt;&quot;);
    document.write(f3.name+&quot;&lt;br/&gt;&quot;);
    //f1
    //f2
    //f3
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>


                </div>
                <div class="subtopic">
                    <h3 class="headline3">Beispielhafte println-Funktion</h3>

<pre><code>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;de&quot;&gt;
&lt;head&gt;
    &lt;script&gt;
    function println(x) {
     document.write(x+&quot;&lt;br/&gt;&quot;);
    }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;script&gt;
        println(&quot;Hallo&quot;);println(&quot;Welt&quot;);
        //Hallo
        //Welt
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">feine Unterschiede</h3>
                    <p class="paragraph">deklarierte Funktionen sind auch vor der Deklaration schon sichtbar</p>
                    <p class="paragraph">anonyme und benannte Funktionen sind erst ab der Zuweisung sichtbar</p>

<pre><code>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;de&quot;&gt;
&lt;head&gt;
    &lt;script&gt;
        println(typeof sumDek);
        function sumDek(a, b) {
            return a + b;
        }
        println(typeof sumAnon); // nicht verf&uuml;gbar
        var sumAnon = function(a, b) {
            return a + b;
        };
        println(typeof sumAnon);
        //function
        //undefined
        //function
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">verschiedene Versionen</h3>

<pre><code>
function add(a, b) {
    var result = a + b;return result;
}
var sub = function(a, b) {
    return a -b;
};
// Funktionskonstruktor:
var mul = new Function(&quot;a&quot;, &quot;b&quot;, &quot;return a * b;&quot;);
</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Funktionen aufrufen</h3>

<pre><code>
function add(a, b) {
 return a + b; }
var sub = function(a, b) {
 return a -b;
};

// Zuweisung des Funktionsobjektes:
var subtract = sub;
var addiere = add;

// Aufruf einer Funktion
var i = add(3, 5);       println(i); //8
var j = sub(7, 4);       println(j); //3
var k = subtract(12, 6); println(k); //6
var l = addiere(12, 6);  println(l); //18
var m = add.apply(null, new Array(7, 9)); println(m); //16
</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Funktionen in Funktionen</h3>
<pre><code>
function aussen(a, b) {
 function innen(c) {
  return a + c;
 }return innen(b);
}
var m = aussen(3,4);
println(m);
a = 3
b = 4
c = b = 4
innen(4) = 3 + 4 = 7
</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Vararg-Funktionen</h3>

<pre><code>
function varag() {
 var summe = 0;
 for (var i = 0; i &lt; arguments.length; i++) {
  summe += arguments[i];
 }return summe;
}var n = varag(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
println(n); // 55
</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Eingebaute Funktionen</h3>
                    <ul class="bulletpointul">
                        <li class="bulletpoint"><code>eval(string)</code><br>interpretiert übergebenen String als Code</li>
                        <li class="bulletpoint"><code>isNaN(wert)</code><br>interpretiert übergebenen String als Code</code></li>
                        <li class="bulletpoint"><code>parseFloat(string)</code><br>prüft auf ungültigen Wertebereich</li>
                        <li class="bulletpoint"><code>parseInt(string)</code><br>String in Ganzzahl umwandeln</li>
                        <li class="bulletpoint"><code>Number(wert)</code><br>in eine Zahl umwandeln</li>
                        <li class="bulletpoint"><code>String(wert)</code><br>in eine Zeichenkette  umwandeln</li>
                        <li class="bulletpoint"><code>encodeURI(string)</code><br>in das URI-Format umwandeln</li>
                        <li class="bulletpoint"><code>encodeURI(string)</code><br>in das URI-Format umwandeln</li>
                        <li class="bulletpoint"><code>decodeURI(string)</code><br>aus dem URI-Format umwandeln</li>
                    </ul>
                    <div class="subpoint">
                        <h4 class="headline4">Tests eingebauter Funktionen</h4>

<pre><code>
var a = eval(&quot;2 + 5&quot;);
println(a); // 7
var b = 0.0 / 0.0;
println(isFinite(b)); // false
println(isNaN(b)); // true
var c = parseFloat(&quot;24.42&quot;) -1.0;
println(c); // 23.42
var d = String(5) + &quot;0&quot;;
println(d); // 50
var e = encodeURI(&quot;Ein String / Strung&quot;);
println(e);
var f = 42; // Ein%20String%20/%20Strung
var g = f.toFixed(5);
println(g); // 42.00000
</code></pre>
                    </div>
                </div>
            </div>
            <div id="objekte" class="chapter">
                <h2 class="headline2">JavaScript kennt keine Klassen, sondern nur Objekte</h2>
                <div class="subtopic">
                    <h3 class="headline3">Objektbasierend statt Objektorientiert</h3>
                    <p class="paragraph">Funktionen sind in JavaScript auch Objekte</p>
                    <p class="paragraph">Objekte können von Objekten erben: prototypische Vererbung</p>
                    <p class="paragraph">In Java...</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">legt die Klasse die Strutkur der erzeugten Objekte fest.</li>
                        <li class="bulletpoint">Alle erzeugten Objekte haben denselben Aufbau.</li>
                    </ul>
                    <p class="paragraph">In JavaScript...</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">legt eine Konstruktorfunktion die Struktur der erzeugten Objekte fest.</li>
                        <li class="bulletpoint">Erzeugte Objekte können unterschiedlichen Aufbau haben.</li>
                    </ul>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Erzeugen von Objekten</h3>
                    <p class="paragraph">Objekte können erzeugt werden über</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">ein Objekt-Literal via JSON.</li>
                        <li class="bulletpoint">eine Konstruktor-Funktion, die mit <code>new</code> aufgerufen wird</li>
                        <li class="bulletpoint">eine Factory-Funktion, die ohne <code>new</code> aufgerufen wird</li>
                    </ul>
                    <p class="paragraph">Konvention:</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Konstruktor-Funktionen fangen mit Großbuchstaben an.</li>
                        <li class="bulletpoint">Factory-Funtionen fangen mit Kleinbuchstaben an.</li>
                    </ul>
                    <div class="subpoint">
                        <h4 class="headline4">Erzeugung via JSON Objekt-Literal </h4>
<pre><code>
var schulze = {name: &quot;Schulze, Herbert&quot;,geboren: &quot;4.5.1954&quot;,details: function() {
  return &quot;Name: &quot; + this.name + &quot;, geboren: &quot; + this.geboren;
  }
};
println(schulze.details());
//Name: Schulze, Herbert, geboren: 4.5.1954
</code></pre>
                    </div>
                    <div class="subpoint">
                        <h4 class="headline4">Erzeugung via Konstruktor-Funktion</h4>
<pre><code>
function Mitarbeiter(name, geboren) {
  this.name = name;
  this.geboren = geboren;
  this.details = function() {
    return &quot;Name: &quot; + this.name + &quot;, geboren: &quot; + this.geboren;
  };
}
var meier = new Mitarbeiter(&quot;Meier, Franz&quot;, &quot;1.5.1972&quot;);
var mueller = new Mitarbeiter(&quot;M&uuml;ller, Peter&quot;, &quot;8.11.1981&quot;);
println(meier.details());
println(mueller.details());
//Name: Meier, Franz, geboren: 1.5.1972Name: M&uuml;ller, Peter, geboren: 8.11.1981
</code></pre>

                    </div>
                    <div class="subpoint">
                        <h4 class="headline4">Erzeugung via Factory-Funktion</h4>
<pre><code>
function makeMitarbeiter(name, geboren) {
  var that = new Object();
  that.name = name;
  that.geboren = geboren;
  that.details = function() {
    return &quot;Name: &quot; + this.name + &quot;, geboren: &quot; + this.geboren;
  };
  return that;
}
var meier = makeMitarbeiter(&quot;Meier, Franz&quot;, &quot;1.5.1972&quot;);
var mueller = makeMitarbeiter(&quot;M&uuml;ller, Peter&quot;, &quot;8.11.1981&quot;);
println(meier.details());
println(mueller.details());

//Name: Meier, Franz, geboren: 1.5.1972Name: M&uuml;ller, Peter, geboren: 8.11.1981
</code></pre>

                    </div>
                    <div class="subpoint">
                        <h4 class="headline4">Erzeugung via Factory-Funktion und JSON</h4>
<pre><code>
function makeMitarbeiter(name, geboren) {
 return { name: name,geboren: geboren,details: function() {
     return &quot;Name: &quot; + this.name + &quot;, geboren: &quot; + this.geboren;
     }
   };
}
var meier = makeMitarbeiter(&quot;Meier, Franz&quot;, &quot;1.5.1972&quot;);
var mueller = makeMitarbeiter(&quot;M&uuml;ller, Peter&quot;, &quot;8.11.1981&quot;);
println(meier.details());
println(mueller.details());

//Name: Meier, Franz, geboren: 1.5.1972Name: M&uuml;ller, Peter, geboren: 8.11.1981
</code></pre>
                    </div>
                </div>
            </div>
            <div id="eventhandler" class="chapter">
                <h2 class="headline2">Eventhandler</h2>
                <div class="subtopic">
                    <h3 class="headline3">Events und deren Wanderung</h3>
                    <p class="paragraph">Ein DOM-Event kann ein Mausklick, das Betätigen einer Taste oder ähnliches sein.</p>
                    <p class="paragraph">Man kann für jedes Element ein oder mehrere Eventhandler definieren.</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Diese werden ausgeführt, falls das Event auftritt.</li>
                    </ul>
                    <p class="paragraph">Ein vom Browser ausgelöstes Element, z.B. ein Buttonklick, wandert von <code>window</code> zu dem Element, dass das Event ausgelöst hat. </p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Anschließend wandert das Element zurück zu <code>window</code>.</li>
                        <li class="bulletpoint">Die erste Phase nennt man Capture, die anderen Bubbling</li>
                        <li class="bulletpoint">Bei jedem Schritt dieser Wanderung werden die Eventhandler des aktuellen Elements aufgerufen.</li>
                        <li class="bulletpoint">Die Wanderung kann durch eine API unterbrochen werden.</li>
                    </ul>
                    <img class="image" src="./img_js_script/folie138.png">
                    <a href="https://javascript.info/bubbling-and-capturing">https://javascript.info/bubbling-and-capturing</a>

                    <div class="subpoint">
                        <h4 class="headline4">HTML-Datei</h4>
<pre><code>
&lt;!DOCTYPE HTML&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;link rel=&quot;stylesheet&quot; href=&quot;example.css&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form id=&quot;form&quot;&gt;FORM
            &lt;div&gt;DIV
                &lt;p&gt;P&lt;/p&gt;
            &lt;/div&gt;
        &lt;/form&gt;
        &lt;script src=&quot;script.js&quot;&gt;&lt;/script&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
                    </div>
                    <div class="subpoint">
                        <h4 class="headline4">example.css</h4>
<pre><code>
form {
    background-color: green;
    position: relative;
    width: 150px;
    height: 150px;
    text-align: center;
    cursor: pointer;
}

div {
    background-color: blue;
    position: absolute;
    top: 25px;
    left: 25px;
    width: 100px;
    height: 100px;
}
p {
background-color: red;
    position: absolute;
    top: 25px;
    left: 25px;
    width: 50px;
    height: 50px;
    line-height: 50px;
    margin: 0;
}

body {
    line-height: 25px;
    font-size: 16px;
}
</code></pre>
                    </div>
                    <div class="subpoint">
                        <h4 class="headline4">javascript</h4>
<pre><code>
form.onclick = function(event) {
    event.target.style.backgroundColor = &apos;yellow&apos;;

    // Timeout f&uuml;r Chrome zum Gelb-Updaten
    setTimeout(() =&gt; {
        alert(&quot;target = &quot; + event.target.tagName + &quot;, this=&quot; + this.tagName);
        event.target.style.backgroundColor = &apos;&apos;
    }, 0);
};
</code></pre>
                    </div>
                    <div class="subpoint">
                        <h4 class="headline4">test</h4>
                        <img class="image" src="./img_js_script/folie141-1.png">
                        <img class="image" src="./img_js_script/folie141-2.png">
                        <img class="image" src="./img_js_script/folie142.png">
                        <img class="image" src="./img_js_script/folie143.png">
                    </div>

                    <a href="https://javascript.info/bubbling-and-capturing">https://javascript.info/bubbling-and-capturing</a>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Die einfachste Art des Eventhandling</h3>
                    <p class="paragraph">JavaScript kann als Eventhandler für ein HTML-Element direkt im HTML annotiert werden:</p>
<pre><code class="code">
&lt;body&gt;
    &lt;button onclick=&quot;onClickHandler()&quot;&gt;Click&lt;/button&gt;
    &lt;script&gt;
        function onClickHandler() {
        console.log(&apos;click&apos;);}
    &lt;/script&gt;
&lt;/body&gt;
</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Empfehlung für unaufdringliches JavaScript</h3>
                    <p class="paragraph">Die Interaktivität sollte jedoch statt dessen dem Dokument automatisch hinzugefügt werden.</p>
                    <p class="paragraph">Im HTML-Code sollte sich also kein JavaScript in Form von Eventhandler-Attributen befinden, also kein
                        <ul class="bulletpointul">
                            <li class="bulletpoint">onload, </li>
                            <li class="bulletpoint">onclick,</li>
                            <li class="bulletpoint">onmouseover</li>
                            <li class="bulletpoint">usw.,</li>
                        </ul>
                    sondern beim Laden des Dokuments sollte die Scripte automatisch aktiv und starten die Ereignisüberwachung an den betreffenden Elementen.
                    </p>
                    <p class="paragraph">Christian Heilmann entwickelte dafür den Begriff Unobtrusive JavaScript, also unaufdringliches oder auch barrierefreies JavaScript.</p>
                    <p class="paragraph">Im Idealfall sollte im head-Element das ein oder andere script-Element stehen, um eine externe JavaScript-Datei einzubinden, die dann ihrerseits aktiv wird und die Eventhandler an die jeweiligen Elemente anbringt. </p>
                    <p class="paragraph">Dazu können Elemente, denen ein bestimmtes Verhalten hinzugefügt werden soll, z.B. mit einer Klasse markiert oder bei Bedarf mit einer ID ausgezeichnet werden.</p>
                    <p class="paragraph">Mischen Sie also kein JavaScript mit HTML.</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Hängen Sie statt dessen Eventhandler dynamisch an HTML-Elemente an.</li>
                    </ul>
                    <p class="paragraph">Trennen Sie auch CSS-Anweisungen von JavaScript-Code.</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Definieren Sie die Formatierungsregeln in einem zentralen Stylesheet, nicht im JavaScript.</li>
                        <li class="bulletpoint">Sorgen Sie im JavaScript dafür, dass diese Formatierungsregeln angewendet werden, indem Sie einem Element dynamisch eine Klasse hinzufügen.</li>
                    </ul>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Hinzufügen und Entfernen von Eventhandlern</h3>
                    <p class="paragraph">Man kann einen Event Listener mittels <code>element.addEventListener </code> hinzufügen.</p>
                    <p class="paragraph">Falls der Event Handler nicht mehr ausgeführt werden soll, muss er mittels <code> element.removeEventListener </code>wieder entfernt werden.</p>
                    <p class="paragraph">Auf diese Weise können beliebig viele Handler für ein Event auf einem Element erstellt werden.</p>
                    <p class="paragraph">Mann kann ihn auch direkt im HTML oder durch <code>element.on&#x3C;event-name&#x3E</code> hinzufügen. </p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Dabei kann jedoch nur ein Handler benutzt werden.</li>
                    </ul>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Ein dynamischer Handler</h3>
<pre><code>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;de&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
            main {
                padding: 0.5em 1em;
                max-width: 40em;
                background-color: hsl(210, 50%, 80%);
                outline: 1px solid black;
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Beispiel: Registrierung eines Event-Handlers&lt;/h1&gt;
        &lt;main&gt;
        &lt;p&gt; Mit dem blau eingef&auml;rbten Main-Element ist bislang keine Funktion verkn&uuml;pft, das hei&szlig;t, bei einem Klick auf die blaue Fl&auml;che passiert nichts. Wird jedoch auf den Button unten geklickt, dann wird f&uuml;r das Main-Element und das Ereignis &lt;em&gt;click&lt;/em&gt; ein Event-Handler registriert. Klicken Sie also auf den Button und danach nocheinmal auf die blaue Fl&auml;che! &lt;/p&gt;
        &lt;button type=&quot;button&quot; lang=&quot;en&quot;&gt;addEventListener&lt;/button&gt;
        &lt;p id=&quot;message&quot; hidden&gt;Event-Handler f&uuml;r das Element Main hinzugef&uuml;gt!&lt;/p&gt;
        &lt;/main&gt;
    &lt;/body&gt;

    &lt;script&gt;
        window.addEventListener(&apos;DOMContentLoaded&apos;, function () {
            var button = document.querySelector(&apos;button&apos;);
            button.addEventListener(&apos;click&apos;, handlerForButton);
            function handlerForButton() {
                var main = document.querySelector(&apos;main&apos;);
                main.addEventListener(&apos;click&apos;, handlerForMain, true);
            }
            function handlerForMain() {
                var paragraph = document.getElementById(&apos;message&apos;);
                paragraph.hidden = false;
        }
    });&lt;/script&gt;
&lt;/html&gt;

</code></pre>
                    <a href="https://wiki.selfhtml.org/wiki/JavaScript/DOM/EventTarget/addEventListener">https://wiki.selfhtml.org/wiki/JavaScript/DOM/EventTarget/addEventListener</a>
                </div>
            </div>
            <div id="jquery" class="chapter">
                <h2 class="headline2">JQuery</h2>
                <div class="subtopic">
                    <h3 class="headline3">Probleme des DOM</h3>
                    <p class="paragraph">Die DOM-Schnittstelle zum Browser ist umständlich zu nutzen:</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Zugriff über Tag-Namen oder ID</li>
                        <li class="bulletpoint">Ständiges Suchen im DOM-Baum nach den richtigen Elementen</li>
                        <li class="bulletpoint">Die Erzeugung von Elementen ist mühselig</li>
                    </ul>
                    <p class="paragraph">Typische DOM-Operationen sind</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Identifikation: Wie bekomme ich eine Referenz auf den Knoten, der mich interessiert?</li>
                        <li class="bulletpoint">Traversieren: Wie bewege ich mich durch den DOM-Baum?</li>
                        <li class="bulletpoint">Knoten-Manipulation: Wie lese und verändere ich Eigenschaften eines DOM-Knotens?</li>
                        <li class="bulletpoint">Baum-Manipulation: Wie ändere ich die Struktur des DOM-Baumes?</li>
                    </ul>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Was ist jQuery?</h3>
                    <img class="image" src="./img_js_script/folie154.png" style="background-color: white;">
                    <p class="paragraph">jQuery ist eine freie JavaScript-Bibliothek, die Funktionen zur Navigation und Manipulationim HTML-DOM zur Verfügung stellt.</p>
                    <p class="paragraph">jQuery ist die meistverwendete JavaScript-Bibliothek:Jede zweite Website und 70% der 10.000 meistbesuchten Websites nutzen jQuery.</p>
                    <p class="paragraph">jQuery bietet die Möglichkeit,</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Elemente des geladenen DOM auszuwählen und</li>
                        <li class="bulletpoint">diese zu manipulieren und dynamisch zu ergänzen,</li>
                        <li class="bulletpoint">Ereignisse (events) zu definieren und zu handhaben,</li>
                        <li class="bulletpoint">Animationen und Effekte einzufügen sowie</li>
                        <li class="bulletpoint">Ajax-Funktionalitäten einzubinden.</li>
                    </ul>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Was bietet jQuery?</h3>
                    <p class="paragraph">jQuery erleichtert DOM-Programmierung erheblich</p>
                    <p class="paragraph">Elemente können über einen Selektor ähnlich wie bei CSS gesucht werden</p>
                    <p class="paragraph">jQuery behebt die meisten Browser-Inkompatibilitäten</p>
                    <p class="paragraph">Historie von jQuery:</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">es entstand 2006 auf einem BarCamp in NewYork/li>
                        <li class="bulletpoint">Motto: "write less, do more"</li>
                        <li class="bulletpoint">Open-Source</li>
                        <li class="bulletpoint">mit jQuery-Mobile auch für Smartphones</li>
                    </ul>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Einbinden von jQuery</h3>
<pre><code>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;&lt;/head&gt;
    &lt;body&gt;&lt;/body&gt;
    &lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js&quot;&gt;
    &lt;/script&gt;
    &lt;script
        &gt;console.log(typeof $); // function
    &lt;/script&gt;
&lt;/html&gt;
</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Initialisierung mit jQuery</h3>
                    <p class="paragraph">Bevor das DOM aufgebaut ist, kann man keine Änderungen daran vornehmen.</p>
                    <p class="paragraph">Man kann jQuery eine Initialisierungsfunktion übergeben.</p>
                    <p class="paragraph">Diese Funktion wird nach Aufbau des DOMs aufgerufen:</p>
<pre><code>
$(function() {
    // auf dem DOM arbeiten}
);
</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">jQuery-Selektoren</h3>
                    <p class="paragraph">Die $-Funktion kann auch direkt mit CSS-Selektoren umgehen</p>
<pre><code>
// id-Selektor
var elem = $(&quot;#eineid&quot;);
// Gruppen-Selektor
var elems = $(&quot;#eineid, p&quot;);
// Kontext-Selektor
var elems = $(&quot;#eineid &lt; div p&quot;);
</code></pre>

                </div>
                <div class="subtopic">
                    <h3 class="headline3">jQuery-Funktion</h3>
                    <p class="paragraph">die jQuery-Funktion <code>$()</code> gibt immer ein Array-artiges Objekt zurück, auch bei ID-Selektoren</p>
                    <p class="paragraph">die DOM-Knoten werden von jQuery gekapselt, der Rückgabewert ist also kein DOM-Knoten</p>
                    <p class="paragraph">will man einen DOM-Knoten, kann man ihn jederzeit auslesen per <code>get(index)</code> oder <code>[index]</code></p>
<pre><code>
// false
document.getElementById(&quot;myid&quot;) == $(&quot;#myid&quot;);document.querySelectorAll(&quot;p&quot;) == $(&quot;p&quot;);

// true
document.getElementById(&quot;myid&quot;) == $(&quot;#myid&quot;)[0];
document.getElementById(&quot;myid&quot;) == $(&quot;#myid&quot;).get(0);
document.querySelectorAll(&quot;p&quot;)[0] == $(&quot;p&quot;)[0];
</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Getter und Setter</h3>
                    <p class="paragraph">jQuery-Getter liefern normalerweise das erste Element aus der Liste zurück:</p>
<pre><code>
&lt;ul&gt;
    &lt;li style=&quot;font-size: 10px&quot;&gt;10px font size&lt;/li&gt;
    &lt;li style=&quot;font-size: 20px&quot;&gt;20px font size&lt;/li&gt;
    &lt;li style=&quot;font-size: 30px&quot;&gt;30px font size&lt;/li&gt;
&lt;/ul&gt;

// liefert &apos;10px&apos;:
$(&quot;li&quot;).css(&quot;font-size&quot;);
</code></pre>
                    <p class="paragraph">jQuery-Setter arbeiten auf allen Elementen der Liste:</p>
<pre><code>
&lt;ul&gt;
    &lt;li style=&quot;font-size: 10px&quot;&gt;10px font size&lt;/li&gt;
    &lt;li style=&quot;font-size: 20px&quot;&gt;20px font size&lt;/li&gt;
    &lt;li style=&quot;font-size: 30px&quot;&gt;30px font size&lt;/li&gt;
&lt;/ul&gt;

// setzt alle Elemente auf 15px:
$(&quot;li&quot;).css(&quot;font-size&quot;, &quot;15px&quot;);
</code></pre>

                    <p class="paragraph">Viele jQuery-Methoden sind überladen:</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Getter: <code>$("#myid").css(propertyName);</code></li>
                        <li class="bulletpoint">Setter: <code>$("#myid").css(propertyName, value);</code></li>
                    </ul>
<pre><code>
// Multi-Setter
$(&quot;#myid&quot;).css({&apos;propertyName1&apos;: value1,&apos;propertyName2&apos;: value2,...});

// Modifier
$(&quot;#myid&quot;).css(propertyName, function(idx, oldValue) {
    return newValue;
});
</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Chaining</h3>

                    <p class="paragraph">Statt..</p>
<pre><code>
$(&quot;#myId&quot;).css(&quot;color&quot;, &quot;red&quot;);
$(&quot;#myId&quot;).addClass(&quot;special&quot;);
$(&quot;#myId&quot;).attr(&quot;src&quot;, &quot;foo.png&quot;);
</code></pre>

                    <p class="paragraph">...schreibt man besser...</p>
<pre><code>
$("#myId").css("color", "red").addClass("special").src = "foo.png";
</code></pre>

                </div>
                <div class="subtopic">
                    <h3 class="headline3">Einen DOM-Knoten in ein jQuery-Objekt konvertieren...</h3>
<pre><code>
var elem = document.getElementById(&quot;myId&quot;);
elem = $(elem);

var elems = document.querySelectorAll(&quot;.special&quot;);
elems = $(elems);
</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">DOM-Traversierung:DOM-Methoden vs. jQuery</h3>
                    <img class="image" src="./img_js_script/folie166-1.png">
                    <img class="image" src="./img_js_script/folie166-2.png">
                </div>
                <div class="subtopic">
                    <h3 class="headline3">each()-Schleife</h3>
                    <p class="paragraph">Mit return false kann man die Schleife beenden.</p>
                    <p class="paragraph"><code>e</code> ist ein normales DOM-Objekt</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Will man ein JQuery-Objekt, muss man es erneut wrappen: <code>e = $(e);</code></li>
                    </ul>
<pre><code>
$(&quot;li&quot;).each(function(idx, e) {// etwas mit e machen...});
</code></pre>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">CSS-Eigenschaften mit jQuery verändern</h3>

                    <p class="paragraph">Dazu existieren die folgenden jQuery-Methoden:</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint"><code>addClass</code> - Klasse hinzufügen</li>
                        <li class="bulletpoint"><code>removeClass</code> - Klasse entfernen</li>
                        <li class="bulletpoint"><code>hasClass </code> - Prüfen, ob Klasse vorhanden ist</li>
                    </ul>

<pre><code>
function highlightField() {
    // Text gelb setzen und vergr&ouml;&szlig;ern
    if (!$(&quot;#myid&quot;).hasClass(&quot;invalid&quot;)){
        $(&quot;#myid&quot;).addClass(&quot;highlight&quot;);
    }
}
</code></pre>

                    <div class="subpoint">
                        <h4 class="headline4">attr()-Funktion</h4>
                    </div>
                    <div class="subpoint">
                        <h4 class="headline4">Weitere jQuery-Methoden, ausgehend von einem jQuery-Objekt</h4>
                    </div>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">DOM-Manipulation mit jQuery</h3>
                    <p class="paragraph">Einen Knoten anlegen:<br><code>$(&quot;#myid&quot;).append($(&quot;&lt;div&gt;&quot;));</code></p>
                    <p class="paragraph">Einen Knoten löschen:<br><code>$(&quot;li:contains(&apos;children&apos;)&quot;).remove();</code></p>
                </div>
            </div>
            <div id="ajax" class="chapter">
                <h2 class="headline2">Ajax </h2>
                <div class="subtopic">
                    <h3 class="headline3">Was ist Ajax?</h3>
                    <p class="paragraph">Asynchronous JavaScript and XML (Ajax) bezeichnet ein Konzept der asynchronen Datenübertragung zwischen einem Browser und dem Server.</p>
                    <p class="paragraph">Das Konzeptermöglicht es, HTTP-Requests durchzuführen, während eine HTML-Seite angezeigt wird, und die Seite zu verändern, ohne sie komplett neu zu laden.</p>
                    <p class="paragraph">Eine Ajax-Anwendung basiert auf Web-Technologien</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">HTML und dessen DOM zur Repräsentation der Daten oder Inhalte,</li>
                        <li class="bulletpoint">JavaScript zur Manipulation des DOM und zur dynamischen Darstellung der Inhalte; JavaScript dient auch als Schnittstelle zwischen einzelnen Komponenten, sowie dem</li>
                        <li class="bulletpoint">XMLHttpRequest-Objekt als Bestandteil vieler Browser, um Daten auf asynchroner Basis mit dem Webserver austauschen zu können.</li>
                    </ul>
                    <p class="paragraph">Die asynchrone Kommunikation erfolgt meist über REST-Aufrufe.</p>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">synchronität</h3>
                    <div class="subpoint">
                        <h4 class="headline4">Synchrone DOM-Manipulationohne Ajax</h4>
<pre><code>
&lt;script&gt;
    function manipuliere() {
        var div = document.getElementById(&quot;ajaxDiv&quot;);
        div.firstChild.nodeValue = &quot;neuer dynamischer Text&quot;;
    }
&lt;/script&gt;
...
&lt;body&gt;
    &lt;div id=&quot;ajaxDiv&quot;&gt;alter Text&lt;/div&gt;
    &lt;button onclick=&quot;manipuliere()&quot;&gt;Klicke!&lt;/button&gt;
&lt;/body&gt;
</code></pre>
                        <img class="image" src="./img_js_script/folie187-1.png">
                        <img class="image" src="./img_js_script/folie187-2.png">

                    </div>
                    <div class="subpoint">
                        <h4 class="headline4">synchrone Datenübertragungohne Ajax</h4>
                        <img class="image" src="./img_js_script/folie188.png">

                    </div>
                    <div class="subpoint">
                        <h4 class="headline4">Synchrone DOM-Manipulationohne Ajax</h4>
                        <img class="image" src="./img_js_script/folie189.png">

                    </div>
                    <div class="subpoint">
                        <h4 class="headline4">Ajax über XMLHttpRequest</h4>
                        <p class="paragraph">Die eingefügten Daten sollen vom Server kommen!</p>
                        <ul class="bulletpointul">
                            <li class="bulletpoint">Erfolgt ein Server-Aufruf direkt aus dem Event-Handler per JavaScript, so blockiert der Browser, bis die Antwort vom Server eintrifft.</li>
                        </ul>
                        <p class="paragraph">Lösung: Verwendung des XMLHttpRequest-Objekts</p>
                        <ul class="bulletpointul">
                            <li class="bulletpoint">Festlegen einer Abfrage an den Server als URL</li>
                            <li class="bulletpoint">Registrieren eines Callback-Handlers</li>
                            <li class="bulletpoint">asynchrones Absenden der Anfrage</li>
                            <li class="bulletpoint">der Callback-Handler wird gerufen, sobald die Daten der Antwort eintreffen</li>
                        </ul>

                    </div>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Was ist Ajax?</h3>
                    <img class="image" src="./img_js_script/folie191.png">
<pre><code>
&lt;script&gt;
    var request = new XMLHttpRequest();
    function manipuliere() {
        request.open(&quot;GET&quot;, &quot;/daten.php&quot;); // Request-URL festlegen
        // Callback-Handler zuordnen:
        request.onreadystatechange = callbackHandler;
        request.send(); // Request abschicken
    }
&lt;/script&gt;
...
&lt;body&gt;
    &lt;div id=&quot;ajaxDiv&quot;&gt;alter Text&lt;/div&gt;
    &lt;button onclick=&quot;manipuliere()&quot;&gt;Klicke!&lt;/button&gt;
&lt;/body&gt;
</code></pre>

                    <div class="subpoint">
                        <h4 class="headline4">Asynchronität DOM-Manipulationmit Ajax</h4>
<pre><code>
function callbackHandler() {
    if ((request.readyState == 4) &amp;&amp; (request.status == 200) &amp;&amp; (request.responseText != null)) {
        // Daten in das Div-Tag eintragen
        var div = document.getElementById(&quot;ajaxDiv&quot;);
        div.firstChild.nodeValue = &quot;Vom Server: &quot; + request.responseText;
    }
}
</code></pre>
                    </div>
                    <div class="subpoint">
                        <h4 class="headline4">Asynchrone DOM-Manipulationmit Ajax</h4>
                        <img class="image" src="./img_js_script/folie194.png">
                        <img class="image" src="./img_js_script/folie195.png">

                    </div>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Das XMLHttpRequest-Objekt</h3>
                    <table>
                        <thead>
                        <tr><th>Attribut</th><th>Bedeutung</th></tr>
                        </thead>
                        <tbody>
                        <tr><td>onreadystatechange</td><td>Methode, die bei Eintreffen der Antwort aufgerufen werden soll</td></tr>
                        <tr><td>readyState</td><td>Bearbeitungsstatus (manche Browser unterstützen nur 0, 1 und 4)</td></tr>
                        </tbody>
                    </table>

                    <table>
                        <thead>
                        <tr><th>State-Wert</th><th>Bezeichnung</th><th>Bedeutung</th></tr>
                        </thead>
                        <tbody>
                        <tr><td>0</td><td>Uninitialized</td><td>open() noch nicht aufgerufen</td></tr>
                        <tr><td>1</td><td>Open</td><td>open() aufgerufen, send() noch nicht</td></tr>
                        <tr><td>2</td><td>Sent</td><td>Anfrage abgesendet (d. h. send() aufgerufen)</td></tr>
                        <tr><td>3</td><td>Receiving</td><td>Antwort wird gerade vom Server empfangen</td></tr>
                        <tr><td>4</td><td>Loaded</td><td>Antwort des Servers liegt vollständig vo</td></tr>
                        </tbody>
                    </table>

                    <table>
                        <thead>
                        <tr><th>Attribut</th><th>Bedeutung</th></tr>
                        </thead>
                        <tbody>
                        <tr><td>open(method, url, asyncFlag [,userName [,password]])</td><td>Anfrage erstellen</td></tr>
                        <tr><td>send(content)</td><td>Anfrage absenden</td></tr>
                        <tr><td>abort()</td><td>aktuelle Anfrage abbrechen</td></tr>
                        <tr><td>setRequestHeader(name, value)</td><td>Header für Request setzen</td></tr>
                        <tr><td>getResponseHeader(name)</td><td>Header aus Response lesen</td></tr>
                        <tr><td>getAllResponseHeaders()</td><td>Alle Response-Header lesen</td></tr>
                        </tbody>

                        <p class="paragraph">Verarbeitung</p>
                        <ul class="bulletpointul">
                            <li class="bulletpoint">Erzeugung mit <code>new Array()</code></li>
                            <li class="bulletpoint">Auslesen eines Elements über <code>["Index"]</code></li>
                            <li class="bulletpoint">Iterieren über alle Elemente mit foreach-Schleife <code>for (var e in array) { ... }</code></li>
                            <li class="bulletpoint">Iterieren über alle Elemente mit foreach-Schleife <code>for (var e in array) { ... }</code></li>
                        </ul>
                    </table>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">XML in AJAX</h3>
                    <p class="paragraph">XMLHttpRequest erlaubt auch Übertragung von XML</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">der Zugriff auf XML erfolgt per <code>request.responseXML</code> statt <code>request.responseText</code></li>
                        <li class="bulletpoint">das XML-Dokument wird als eigenes DOM zur Verfügung gestellt</li>
                        <li class="bulletpoint">der Zugriff erfolgt mit normalen DOM-Methoden, also z.B.</li>
                        <ul>
                            <li class="bulletpoint2"><code>request.responseXML.getElementsByTagName(...);</code></li>
                        </ul>
                        <li class="bulletpoint">die Verwendung von XML ist allerdings umständlich</li>
                    </ul>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">JSON in AJAX</h3>
                    <p class="paragraph">JSON lässt sich deutlich einfacher als XML nutzen.</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Einfache und schlanke Notation zur Darstellung von</li>
                        <ul>
                            <li class="bulletpoint2">Listen,</li>
                            <li class="bulletpoint2">Strings, </li>
                            <li class="bulletpoint2">Zahlen und</li>
                            <li class="bulletpoint2">assoziativen Arrays.</li>
                        </ul>

                    </ul>
                    <p class="paragraph">Gängige Programmiersprachen bieten Bibliotheken zum Serialisieren von Objekten nach JSON.</p>
                    <p class="paragraph">Der JavaScript Befehl <code>eval()</code>deserialisiert ein übergebenes Argument und liefert das Ergebnis als JavaScript-Objekt, beispielsweise als ein assoziatives Array.</p>

                    <div class="subpoint">
                        <h4 class="headline4">Beispiel einer PHP-Datei auf dem Server</h4>
<pre><code>
&lt;?phpheader(&quot;Content-type: application/json&quot;);echo &apos;{ vorname: &quot;Peter&quot;, nachname: &quot;Lustig&quot;}&apos;;?&gt;
</code></pre>
                    </div>
                    <div class="subpoint">
                        <h4 class="headline4">Modifizierter JavaScript Callback-Handler</h4>
<pre><code>
function callbackHandler() {
    if ((request.readyState == 4) &amp;&amp; (request.status == 200) &amp;&amp; (request.responseText != null)) {

        // JSON deserialisieren
        var obj = eval(&apos;(&apos; + request.responseText + &apos;)&apos;);

        // Daten des JS-Objektes eintragen
        var div = document.getElementById(&quot;ajaxDiv&quot;);
        div.firstChild.nodeValue = &quot;Vorname: &quot; + obj.vorname + &quot;,&bdquo; +&quot;Nachname: &quot; + obj.nachname;
    }
}
</code></pre>
                    </div>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Vorteile für den Entwickler...</h3>
                    <p class="paragraph">geringere Serverbelastung als bei ständigem Nachladen kompletter Seiten</p>
                    <p class="paragraph">zentrale Softwareinstallation und -wartung</p>
                    <p class="paragraph">nur eine Version für sämtliche Plattformen nötig</p>
                    <p class="paragraph">Kombination bestehender Anwendungen zu Software Mashups zur Erstellung neuer Medieninhalte durch die nahtlose (Re-)Kombination bereits bestehender Inhalte</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Wiederverwendung</li>
                        <li class="bulletpoint">Einführung von Software-Mietmodellen</li>
                    </ul>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Nachteile für den Entwickler...</h3>
                    <p class="paragraph">erhöhter Programmier-und Testaufwand</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">schwer zu debuggen</li>
                        <li class="bulletpoint">Tricks sind nötig, um Rückwärtsbutton, Browserhistorie und Bookmarks zu ermöglichen</li>
                        <li class="bulletpoint">Tricks sind nötig, um Suchmaschinen zu unterstützen</li>
                        <li class="bulletpoint">Browserunterschiede müssen berücksichtigt werden</li>
                    </ul>
                    <p class="paragraph">JavaScript ist keine vollwertige objektorientierte Programmiersprache</p>
                </div>
            </div>
            <div id="selenium" class="chapter">
                <h2 class="headline2">Das Selenium-Framework</h2>
                <div class="subtopic">
                    <h3 class="headline3">Was ist Selenium?</h3>
                    <img class="image" src="./img_js_script/folie208.png">
                    <p class="paragraph">Selenium ist ein Framework für automatisierte Softwaretests von Web-Anwendungen, welches als freie Software unter der Apache-2.0-Lizenz veröffentlicht wurde.</p>
                    <p class="paragraph">Es ist ein weit verbreitetes Tool und zählt zu den bekanntesten quelloffenen Testwerkzeugen.</p>
                    <p class="paragraph">Der Kern von Selenium basiert auf reinem HTML und JavaScript.</p>
                    <p class="paragraph">Selenium kann z. B. als Firefox-Addon installiert werden:</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Der Benutzer interagiert nur mit Firefox,</li>
                        <li class="bulletpoint">Selenium nimmt den Test auf und spielt ihn dann wieder ab.</li>
                    </ul>
                    <p class="paragraph">Mit dem Selenium WebDriver kann jede gängige Internet-Browserengine eingebunden werden.</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Über eine Java-, .NET-, PHP-, Python-oder Ruby-Anwendung kann man dann die Browserengine völlig kontrollieren und Benutzereingaben und Interaktionen simulieren.</li>
                    </ul>

                    <p class="paragraph">Daher wird Selenium neben automatisierten Softwaretests von Web-Anwendungen auch insbesondere für dieProgrammierung von automatischen Webcrawlern eingesetzt.</p>
                    <p class="paragraph">Im folgenden Szenario wird Selenium zum automatisiertenAuslesen von Daten der Online-Tradingplattform Wikifolio verwendet.</p>
                    <p class="paragraph">Ziele dabei sind</p>
                    <ol class="bulletpointul">
                        <li class="bulletpoint">Das Selenium-Framework in einer Java-Anwendung mit einem Treiber eines aktuellen Web-Browsers zu starten.</li>
                        <li class="bulletpoint">Sich bei der Tradingplattform automatisiert einzuloggen.</li>
                        <li class="bulletpoint">Käufe und Verkäufe von bekannten Wikofolio-Tradern unter Angabe bestimmter Grenzwerte auszulesen.</li>
                        <li class="bulletpoint">Diese Daten in CSV-Dateien abzulegen für die weitere manuelle Analyse mit dem Ziel eines Copy-Tradings.</li>
                    </ol>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Was ist ein Webcrawler?</h3>
                    <p class="paragraph">Ein Webcrawler (auch: Spider, Searchbot oder Robot) ist ein Computerprogramm, das automatisch das WWW durchsucht und Webseiten analysiert. </p>
                    <p class="paragraph">Webcrawler werden unter anderem von Suchmaschinen zur Indexierung von Webseiten eingesetzt. </p>
                    <p class="paragraph">Weitere Anwendungen sind das Sammeln von Web-Feeds, E-Mail-Adressen oder von anderen Informationen.</p>
                    <p class="paragraph">Webcrawler sind eine spezielle Art von Bots, also Computerprogrammen, die weitgehend automatisch sich wiederholenden Aufgaben nachgehen.</p>
                    <img style="background-color: white" class="image" src="./img_js_script/folie211.png">

                    <div class="subpoint">
                        <h4 class="headline4">Download & Einbinden der JARs</h4>

                        <ul class="bulletpointul">
                            <li class="bulletpoint">Herunterladen von <a href="https://www.seleniumhq.org/download/">https://www.seleniumhq.org/download/</a></li>
                            <li class="bulletpoint">Kopieren der JARs ins eigene Java-Projekt</li>
                            <li class="bulletpoint">ggf. auch JARs zur Datenbankanbindung(MySQL-Connector)</li>
                            <li class="bulletpoint">Einbinden über Build-Path -> Configure Build-Path</li>
                        </ul>
                        <img class="image" src="./img_js_script/folie213.png">
                    </div>
                    <div class="subpoint">
                        <h4 class="headline4">Der Treiber der Web-Browser-Engine</h4>
                        <img class="image" src="./img_js_script/folie214.png">

                        <div class="subsubpoint">
                            <h5 class="headline5">Download des Treibersfür die Web-Browser-Engine</h5>

                            <p class="paragraph">Die Engines der bekannten Web-Browser können Sie sich als einzelne Executable-Datei herunterladen, beispielsweise für</p>
                            <ul class="bulletpointul">
                                <li class="bulletpoint">Google Cromehttps://chromedriver.storage.googleapis.com/index.html?path=2.38/
                                    <img class="image" src="./img_js_script/folie215-1.png">

                                </li>
                                <li class="bulletpoint">Mozilla Firefox (geckodriver)https://github.com/mozilla/geckodriver/releases
                                    <img class="image" src="./img_js_script/folie215-2.png">
                                    <img class="image" src="./img_js_script/folie215-3.png">
                                </li>
                            </ul>
                        </div>
                        <div class="subsubpoint">
                            <h5 class="headline5">Einbinden des Treibers in den Java-Code</h5>
                            <img class="image" src="./img_js_script/folie216-0.png">
                            <img class="image" src="./img_js_script/folie216.png">
                        </div>
                    </div>
                    <div class="subpoint">
                        <h4 class="headline4">Das Szenario eines Aktien-Crawlers</h4>
                        <p class="paragraph">Ziel ist der Bau eines Crawlers, der ausgewählte Aktienkurse automatisch aktualisiert.</p>
                        <p class="paragraph">Diese Daten sollen dann in einer Datenbank hinterlegt und über einen eigenen REST-Service angeboten werden, um beliebige Frontends anzubinden.</p>
                        <p class="paragraph">Auf diesem festen Datenstamm können dann eigene Indikatoren und Analysemodelle getestet werden</p>
                        <p class="paragraph">Die Daten kommen von dieser Quelle...</p>
                        <ul class="bulletpointul">
                            <li class="bulletpoint"><a href="https://www.ariva.de/DE0007100000/historische_kurse?currency=EUR">https://www.ariva.de/DE0007100000/historische_kurse?currency=EUR </a></li>
                            <li class="bulletpoint">DE0007100000:ISIN der Daimler-Aktie, jede Aktie hat eine weltweit eindeutige ISIN</li>
                        </ul>

                        <div class="subsubpoint">
                            <h5 class="headline5">Daimler-Aktie</h5>
                            <p class="paragraph">nteressant ist der CSV-Download, der dann automatisch in eine Datenbank integriert werden kann.</p>
                            <p class="paragraph">Dazu müssen aber einige Formularfelder ausgefüllt und auf den Download-Button geklickt werden..</p>
                            <img class="image" src="./img_js_script/folie218.png">

                            <p class="paragraph">Wie kommen Sie sicher an die Felder und an den Button aus Ihrem Java-Programm aus dran?</p>
                            <img class="image" src="./img_js_script/folie219-1.png">
                            <img class="image" src="./img_js_script/folie219-2.png">
                            <img class="image" src="./img_js_script/folie220.png">
                            <p class="paragraph">//*[@id="minTime"]</p>

                        </div>
                    </div>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Was ist XPath?</h3>
                    <p class="paragraph">XML-gerechte Dokumente sind wie die Ordner-und Dateistruktur auf einem Datenträger baumförmig aufgebaut.</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Jeder untergeordnete Ordner kann wiederum andere Unterordner und Dateien enthalten usw. </li>
                        <li class="bulletpoint">ähnlich einer Map in Java</li>
                    </ul>
                    <p class="paragraph">Ebenso, wie man bei der Dateistruktur braucht man für die Adressierung von Bestandteilen eines XML-Dokuments eine geeignete Terminologie.</p>
                    <p class="paragraph">Die XML Path Language (XPath) dient dem Adressieren von Knoten in XML-Dokumenten und benutzt hierzu Pfaden ähnliche Ausdrücke.</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Bei absoluter Adressierung vom Wurzelelement aus wird der Pfad mit einem / eingeleitet.</li>
                    </ul>
                    <div class="subsubpoint">
                        <h5 class="headline5">XPath-Beispiel eines Aktien-Crawlers</h5>
                        <img class="image" src="./img_js_script/folie221-1.png">
                        <img class="image" src="./img_js_script/folie221-2.png">
                        <img class="image" src="./img_js_script/folie223.png">
                        <img class="image" src="./img_js_script/folie224.png">

                    </div>
                </div>
                <div class="subtopic">
                    <h3 class="headline3">Wie geht es weiter?</h3>
                    <p class="paragraph">Die heruntergeladene CSV-Datei kann nun zeilenweise mit einem BufferedReader wieder eingelesen werden.</p>
                    <p class="paragraph">Jede Zeile ist der Eintrag eines Tages mit</p>
                    <ul class="bulletpointul">
                        <li class="bulletpoint">Datum</li>
                        <li class="bulletpoint">Eröffnungskurs</li>
                        <li class="bulletpoint">Schlusskurs</li>
                        <li class="bulletpoint">Tageshoch</li>
                        <li class="bulletpoint">Tagestief</li>
                        <li class="bulletpoint">gehandeltes Volumen</li>
                    </ul>
                    <p class="paragraph">Jede Zeile kann dann als neuer Datenbankeintrag per JDBC in eine MySQL-Datenbank (oder in etwas Anderes) geschrieben werden.</p>
                    <p class="paragraph">Von dort aus können die Daten wieder per REST ausgelesen und beliebig interpretiert werden.</p>

                </div>
            </div>
        </div>

    </div>
    <?php require("footer.php")?>
<script src="cookie.js"></script>
</body>
</html>
