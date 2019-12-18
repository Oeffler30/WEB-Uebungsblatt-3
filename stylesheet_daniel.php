<style type='text/css' media='screen'>
* {
  /*Some settings to fix some ugly standard element settings like standard margins or paddings
   so we can override them cleanly later*/
  padding: 0;
  margin: 0;
}

//Cookiebanner formatierung
.js_enabled #cookie-message {
    display: none;
}

#cookie-message {
            background-color: #d5e6ed;
            color: #662d91;
            margin: 0 auto;
            padding: 1em;
}

#knopf {
 background-color: #bbb;
 padding: .5em;
 -moz-border-radius: 5px;
 -webkit-border-radius: 5px;
 border-radius: 6px;
 color: #fff;
 font-family: 'Oswald';
 font-size: 20px;
 text-decoration: none;
 border: none;
}

#knopf:hover {
 border: none;
 background: orange;
 box-shadow: 0px 0px 1px #777;
}

body{
  background-color: #36393f;
  color: white;
  font-family: Calibri;
}

.content-container {
  /*display the text boxes in the middle*/
  width: 80%;
  margin: 14em auto 0;
}

a:link, a:visited
{
color: white;
}


a:active, a:hover
{
color:blue;
}


#header {
  height:13em;
  width: 100%;
  position: fixed;
  top: 0;
  /*hide the blur overflow from the background-picture*/
  margin-top: -5px;
  overflow-y: hidden;
  /*make the collapsing of the header go smoothly*/
  transition: 0.5s;
}

.header_scroll_collapsed {
  height: 7em !important;
}

#header-image {
  background-image: url("header3.jpg");
  height: 100%;
  width: 100%;
  /*position the background picture nicely*/
  background-size: cover;
  background-position-y: 100%;
  background-position-x: 82%;
  /*make the background picture blurry*/
  filter: blur(3px);
}

#navbar{

  /*make the navbar stick to the bottom of the header*/
  position:absolute;
  bottom: 0;
  width: 100%;
  background-color: #2f3136;
}


#nav {
  /*position the navbar like the content container*/
  margin: 0 10%;
  width: 80%;
}

#nav ul li{
  /*display the li elements inline but still sizable*/
  display: inline-block;
  width: 15%;
  text-align: center;
}

#current a{
  background-color: red;
}

#nav ul li a{
  font-size: 15pt;
  padding: 0.5em;
  box-sizing: border-box;
  /*box-sizing border-box wirkung: padding + width 100% sorgen nicht mehr dafür dass
  das a element größer ist als es sollte;*/
  text-decoration: none;
  color: white;
  width: 100%;
  height: 100%;
  /*damit man das element noch resizen kann*/
  display: inline-block;
}


#nav ul li:hover, #footer li:hover{
  /*wenn man über die navigation oder über den footer hovert, soll sich der hintergrund ändern*/
  background-color: #1565C0;
}

.textbox {
  background-color: #2f3136;
  padding: 1em;
  margin: 1em 0;
}

/*-----------------für WEB Grundlagen & NodeJS------------------*/
.definition {
	background-color: orange;
	border-color: red;
	color: black;
	padding: 0.5% 1% 1% 1%
}

.definitionHeading {
	color: red;
}

.abbildung {
	text-align:center;
	font-style: italic;
}

.bild {
	width: 100%;
	height: auto;
}

.rot {
	color: red;
}

.textCode {
	font-family: "Courier New", Courier, monospace;
}

.liste {
	padding-left: 5%;
	padding-right: 5%;
}

.nodeBild {
	width: 60%;
	height: auto;
}
/*--------------------------------------------------------------*/

.footer-container {
  width: 100%;
  height: 30px;
  background-color: #2f3136;
}

#footer {
  margin: 0;
  padding: 0;
  list-style-type: none;
  width: 60%;
  height: 100%;
  margin-left: auto;
  margin-right: auto;
}

#footer li {
  display: inline-block;
  width: 32%;
  text-align: center;
  height: 100%;
}

#footer a {
  line-height: 1.6;
  width: 100%;
  height: 100%;
  display: inline-block;
  text-decoration: none;
  color: #fff;
}

#navbar .icon {
  /*looks*/
  color: white;
  background-color: #2f3136;
  /*positioning*/
  position: absolute;
  left: 0;
  top: 0;
  /*size*/
  width: 1em;
  padding: 1em;
  font-size: 15px;
  text-align: center;
  /*icon-characteristics*/
  cursor: pointer;
  display: none;
}

/* icon lines*/
#navbar .icon hr {
  margin: 3px 0 0;
}

#info {
    font-weight: bold;
    color: aliceblue;
}

/*below 768px*/
@media screen and (max-width: 768px) {

  .nodeBild {
	width: 100%;
	height: auto;
  }

  #header {
    overflow-y: unset;
  }
  #header-image {
    display: none;
  }

  #navbar {
    /*the icons position is dependent on this*/
    position: relative;
  }

  .icon {
    /*show icon*/
    /*note: !important after a css value overrides the css order rules*/
    display: block !important;
  }
  .icon:hover {
    background-color: #1565C0 !important;
  }

  #nav {
    margin: 0;
    width: 100%;
    /*default is hidden unless it has the non-collapsed class which is added via js*/
    display: none;
  }

  #nav ul li {
    /*let li elements take 100% width*/
    display: block;
    width: 100%;
  }

  .content-container {
    margin: 3em auto 0;
    width: 95%;
  }
  .content-container.not-collapsed {
    /*formel für ersten wert : (4 + (anzahl der nav elemente *2))em*/
    margin: 23em auto 0;
  }

  /*show nav after the icon is clicked*/
  #nav.not-collapsed {
    display: block;
  }


}
</style>