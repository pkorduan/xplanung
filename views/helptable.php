<?php
?>
<script type="text/javascript" language="JavaScript">
  function HideContent(d) {
  document.getElementById(d).style.display = "none";
  }
  function ShowContent(d) {
  document.getElementById(d).style.display = "block";
  }
  function ReverseDisplay(d) {
  if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
  else { document.getElementById(d).style.display = "none"; }
  }
  </script>
	<a href="javascript:ReverseDisplay('helpplaene')" class=hlink title="Erklärung der Tabellenfunktionen">
		<img src="images/ICONhelp.png" alt="Hilfe Plaene" class = "help-image">
  </a>
  </h1>
  <div id="helpplaene" style="display:none;">
		<p>
			<img src="images/help/selektorfeld.png"><br>
				Das Selektorfeld erlaubt das Sortieren nach Selektion. Klicken Sie Aktualisieren, um die Selektion zu bestätigen.<br><br>
			<img src="images/help/roplamospalten.png"><br>
				Das Spaltenauswahlfeld oben rechts der Tabelle erlaubt die Auswahl oder Abwahl verschiedener Spalten des Datensatzes.<br><br>
			<img src="images/help/alternativeorder.png"><br>
				Der Darstellungsbutton erlaubt eine alternative Darstellung der Daten.<br><br>
			<img src="images/help/searchfeld.png"><br>
				Das Suchen-Feld erlaubt die Suche von Elementen nach Name, Legendencode oder ähnlichem.<br><br>
			<img src="images/help/rowperpage.png"><br>
				Das Zeilenauswahlfeld erlaubt mehr oder weniger Zeilen pro Seite anzuzeigen.<br><br>
			<img src="images/help/pagenumber.png"><br>
				Das Seitenauswahlfeld erlaubt die Auswahl verschiedener Seiten der angezeigten Daten.<br><br>
			<img src="images/help/export.png"><br>
				Das Seitenauswahlfeld erlaubt den Export in verschiedene Formate.<br><br>        
		</p>
  </div>
  <h1>
<?php
?>