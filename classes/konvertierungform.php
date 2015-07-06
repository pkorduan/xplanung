<?php
?>
<div id="main">
  <!--  Javascript für Show und Hide () -->
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
  
  <form action ="index.php">
  <input type="hidden"name="go" value="show_konvertierungform">
  </form>
  <h1>Konvertierungsformular</h1>
  <form action ="index.php?go=show_konvertierungform" method="post">
  <input type="submit" name="neuerplan-submit" class="konvertmenue"value ="Neuer Plan">
  </form>
  <form action ="index.php?go=show_konvertierungform" method="post">
  <input type="submit" name="neuertextabschnitt-submit" class="konvertmenue"value ="Neuer Textabschnitt">
  </form>
  <form action ="index.php?go=show_konvertierungform" method="post">
  <input type="submit" name="neuerbereich-submit" class="konvertmenue"value ="Neuer Bereich">
  </form>
  <form action ="index.php?go=show_konvertierungform" method="post">
  <input type="submit" name="planladen-submit" class="konvertmenue"value ="Plan laden">
  </form>
  <form action ="index.php?go=show_konvertierungform" method="post">
  <input type="submit" name="textabschnittladen-submit" class="konvertmenue"value ="Textabschnitt laden">
  </form>
  <form action ="index.php?go=show_konvertierungform" method="post">
  <input type="submit" name="bereichladen-submit" class="konvertmenue"value ="Bereich laden">
  </form>
  <?php

function konverteingegebenerplan(){
  echo '<form action ="index.php?go=show_konvertierungform" method="post">';
  echo '<div class="eingegebenerplan">';
  echo '<h2>Eingegebener Plan</h2>';
  echo '<h3>Konformitätsbedingungen</h3><ul>';
  echo '<li>Die Relation texte darf nur auf Instanzen der Klasse <a href="index.php?go=show_elements&package=Alle#xplan:XP_BegruendungAbschnitt">XP_BegruendungAbschnitt</a> verweisen</li>';
  echo '<li>Die Relation begruendungstexte darf nur auf Instanzen der Klasse <a href="index.php?go=show_elements&package=Alle#xplan:XP_BegruendungAbschnitt">XP_BegruendungAbschnitt</a> verweisen</li>';
  echo '<li>Eine Instanz der Klasse <a href="index.php?go=show_elements&package=Alle#xplan:RP_Plan">RP_Plan</a> darf über die Relation bereich nur Instanzen der Klasse <a href="index.php?go=show_elements&package=Alle#xplan:RP_Bereicht">RP_Bereich</a> aggregieren.<img src="images/neu.png" height="13"></li>';
  echo '</ul>';
  echo '<h3>Assoziationen</h3>';
  echo '<b><span title="Assoziert den Plan mit Bereichen (RP_Bereich).">bereich [0..*]</span>:</b> gml:ReferenceType<br>';
  echo ' <input type="text" name="assoziation_plan_bereich"><br>';
  echo '<b><span title="Assoziert den Plan mit Begruendungstexten (XP_Begruendungsabschnitt).">begruendungstexte [0..*]</span>:</b> gml:ReferenceType<br>';
  echo ' <input type="text" name="assoziation_plan_begruendungstexte"><br>';
  echo '<b><span title="Assoziert den Plan mit Texten (XP_TextAbschnitt).">texte [0..*]</span>:</b> gml:ReferenceType<br>';
  echo ' <input type="text" name="assoziation_plan_texte"><br>';
  echo "<h3>XP_Plan Daten</h3>";
  if (empty($_SESSION["xp_plan_name"])){$_SESSION["xp_plan_name"] = $_POST['xp_plan_name'];}
  if (!empty($_SESSION["xp_plan_name"])) {echo 'name: ' . $_SESSION["xp_plan_name"] . '<br>';}
  if (empty($_SESSION["xp_plan_nummer"])){$_SESSION["xp_plan_nummer"] = $_POST['xp_plan_nummer'];}
  if (!empty($_SESSION["xp_plan_nummer"])) {echo 'nummer: ' . $_SESSION["xp_plan_nummer"] . '<br>';}
  if (empty($_SESSION["xp_plan_internalid"])){$_SESSION["xp_plan_internalid"] = $_POST['xp_plan_internalid'];}
  if (!empty($_SESSION["xp_plan_internalid"])) {echo 'internalId: ' . $_SESSION["xp_plan_internalid"] . '<br>';}
  if (empty($_SESSION["xp_plan_beschreibung"])){$_SESSION["xp_plan_beschreibung"] = $_POST['xp_plan_beschreibung'];}
  if (!empty($_SESSION["xp_plan_beschreibung"])) {echo 'beschreibung: ' . $_SESSION["xp_plan_beschreibung"] . '<br>';}
  if (empty($_SESSION["xp_plan_kommentar"])){$_SESSION["xp_plan_kommentar"] = $_POST['xp_plan_kommentar'];}
  if (!empty($_SESSION["xp_plan_kommentar"])) {echo 'kommentar: ' . $_SESSION["xp_plan_kommentar"] . '<br>';}
  if (empty($_SESSION["xp_plan_technherstelldatum"])){$_SESSION["xp_plan_technherstelldatum"] = $_POST['xp_plan_technherstelldatum'];}
  if (!empty($_SESSION["xp_plan_technherstelldatum"])) {echo 'technherstellDatum: ' . $_SESSION["xp_plan_technherstelldatum"] . '<br>';}
  if (empty($_SESSION["xp_plan_genehmigungsdatum"])){$_SESSION["xp_plan_genehmigungsdatum"] = $_POST['xp_plan_genehmigungsdatum'];}
  if (!empty($_SESSION["xp_plan_genehmigungsdatum"])) {echo 'genehmigungsDatum: ' . $_SESSION["xp_plan_genehmigungsdatum"] . '<br>';}
  if (empty($_SESSION["xp_plan_untergangsdatum"])){$_SESSION["xp_plan_untergangsdatum"] = $_POST['xp_plan_untergangsdatum'];}
  if (!empty($_SESSION["xp_plan_untergangsdatum"])) {echo 'untergangsDatum: ' . $_SESSION["xp_plan_untergangsdatum"] . '<br>';}
  if (!empty($_SESSION["xp_plan_aendert"])) {echo 'aendert: ' . $_SESSION["xp_plan_aendert"] . '<br>';}
  if (!empty($_SESSION["xp_plan_wurdegeaendertvon"])) {echo 'wurdeGaendertVon: ' . $_SESSION["xp_plan_wurdegeaendertvon"] . '<br>';}
  if (empty($_SESSION["xp_plan_xplangmlversion"])){$_SESSION["xp_plan_xplangmlversion"] = $_POST['xp_plan_xplangmlversion'];}
  if (!empty($_SESSION["xp_plan_xplangmlversion"])) {echo 'XPlanGMLVersion: ' . $_SESSION["xp_plan_xplangmlversion"] . '<br>';} 
  if (empty($_SESSION["xp_plan_bezugshoehe"])){$_SESSION["xp_plan_bezugshoehe"] = $_POST['xp_plan_bezugshoehe'];}
  if (!empty($_SESSION["xp_plan_bezugshoehe"])) {echo 'bezugshoehe: ' . $_SESSION["xp_plan_bezugshoehe"] . '<br>';}
  if (empty($_SESSION["xp_plan_raeumlichergeltungsbereich"])){$_SESSION["xp_plan_raeumlichergeltungsbereich"] = $_POST['xp_plan_raeumlichergeltungsbereich'];}
  if (!empty($_SESSION["xp_plan_raeumlichergeltungsbereich"])) {echo 'raeumlicherGeltungsbereich: ' . $_SESSION["xp_plan_raeumlichergeltungsbereich"] . '<br>';}
  if (empty($_SESSION["xp_plan_verfahrensmerkmale"])){$_SESSION["xp_plan_verfahrensmerkmale"] = $_POST['xp_plan_verfahrensmerkmale'];}
  if (!empty($_SESSION["xp_plan_verfahrensmerkmale"])) {echo 'verfahrensMerkmale: ' . $_SESSION["xp_plan_verfahrensmerkmale"] . '<br>';}
  if (empty($_SESSION["xp_plan_rechtsverbindlich"])){$_SESSION["xp_plan_rechtsverbindlich"] = $_POST['xp_plan_rechtsverbindlich'];}
  if (!empty($_SESSION["xp_plan_rechtsverbindlich"])) {echo 'rechtsverbindlich: ' . $_SESSION["xp_plan_rechtsverbindlich"] . '<br>';}
  if (empty($_SESSION["xp_plan_informell"])){$_SESSION["xp_plan_informell"] = $_POST['xp_plan_informell'];}
  if (!empty($_SESSION["xp_plan_informell"])) {echo 'informell: ' . $_SESSION["xp_plan_informell"] . '<br>';}
  if (empty($_SESSION["xp_plan_hatgenerattribut"])){$_SESSION["xp_plan_hatgenerattribut"] = $_POST['xp_plan_hatgenerattribut'];} 
  if (!empty($_SESSION["xp_plan_hatgenerattribut"])) {echo 'hatGenerAttribut: ' . $_SESSION["xp_plan_hatgenerattribut"] . '<br>';}
  if (empty($_SESSION["xp_plan_refbeschreibung"])){$_SESSION["xp_plan_refbeschreibung"] = $_POST['xp_plan_refbeschreibung'];}
  if (!empty($_SESSION["xp_plan_refbeschreibung"])) {echo 'refBeschreibung: ' . $_SESSION["xp_plan_refbeschreibung"] . '<br>';}
  if (empty($_SESSION["xp_plan_refbegruendung"])){$_SESSION["xp_plan_refbegruendung"] = $_POST['xp_plan_refbegruendung'];}
  if (!empty($_SESSION["xp_plan_refbegruendung"])) {echo 'refBegruendung: ' . $_SESSION["xp_plan_refbegruendung"] . '<br>';}
  if (empty($_SESSION["xp_plan_refexternalcodelist"])){$_SESSION["xp_plan_refexternalcodelist"] = $_POST['xp_plan_refexternalcodelist'];}
  if (!empty($_SESSION["xp_plan_refexternalcodelist"])) {echo 'refExternalCodeList ' . $_SESSION["xp_plan_refexternalcodelist"] . '<br>';}
  if (empty($_SESSION["xp_plan_reflegende"])){$_SESSION["xp_plan_reflegende"] = $_POST['xp_plan_reflegende'];}
  if (!empty($_SESSION["xp_plan_reflegende"])) {echo 'refLegende ' . $_SESSION["xp_plan_reflegende"] . '<br>';}
  if (empty($_SESSION["xp_plan_refrechtsplan"])){$_SESSION["xp_plan_refrechtsplan"] = $_POST['xp_plan_refrechtsplan'];}
  if (!empty($_SESSION["xp_plan_refrechtsplan"])) {echo 'refRechtsplan ' . $_SESSION["xp_plan_refrechtsplan"] . '<br>';}
  if (empty($_SESSION["xp_plan_refplangrundlage"])){$_SESSION["xp_plan_refplangrundlage"] = $_POST['xp_plan_refplangrundlage'];}
  if (!empty($_SESSION["xp_plan_refplangrundlage"])) {echo 'refPlangrundlage ' . $_SESSION["xp_plan_refplangrundlage"] . '<br>';}
  echo "<h3>RP_Plan Daten</h3>";
  if (empty($_SESSION["rp_plan_bundesland"])){$_SESSION["rp_plan_bundesland"] = $_POST['rp_plan_bundesland'];}
  if (!empty($_SESSION["rp_plan_bundesland"])) {echo 'bundesland: ' . substr($_SESSION["rp_plan_bundesland"], 22) . '<br>';}
  if (empty($_SESSION["rp_plan_sonstplanart"])){$_SESSION["rp_plan_sonstplanart"] = $_POST['rp_plan_sonstplanart'];}
  if (!empty($_SESSION["rp_plan_sonstplanart"])) {echo 'sonstPlanArt: ' . substr($_SESSION["rp_plan_sonstplanart"], 22) . '<br>';}
  if (empty($_SESSION["rp_plan_planungsregion"])){$_SESSION["rp_plan_planungsregion"] = $_POST['rp_plan_planungsregion'];}
  if (!empty($_SESSION["rp_plan_planungsregion"])) {echo 'planungsregion: ' . $_SESSION["rp_plan_planungsregion"] . '<br>';}
  if (empty($_SESSION["rp_plan_teilabschnitt"])){$_SESSION["rp_plan_teilabschnitt"] = $_POST['rp_plan_teilabschnitt'];}
  if (!empty($_SESSION["rp_plan_teilabschnitt"])) {echo 'teilabschnitt: ' . $_SESSION["rp_plan_teilabschnitt"] . '<br>';}
  if (empty($_SESSION["rp_plan_rechtsstand"])){$_SESSION["rp_plan_rechtsstand"] = $_POST['rp_plan_rechtsstand'];}
  if (!empty($_SESSION["rp_plan_rechtsstand"])) {echo 'rechtsstand: ' . substr($_SESSION["rp_plan_rechtsstand"], 20) . '<br>';}
  if (empty($_SESSION["rp_plan_status"])){$_SESSION["rp_plan_status"] = $_POST['rp_plan_status'];}
  if (!empty($_SESSION["rp_plan_status"])) {echo 'status: ' . $_SESSION["rp_plan_status"] . '<br>';}
  if (empty($_SESSION["rp_plan_aufstellungsbeschlussdatum"])){$_SESSION["rp_plan_aufstellungsbeschlussdatum"] = $_POST['rp_plan_aufstellungsbeschlussdatum'];}
  if (!empty($_SESSION["rp_plan_aufstellungsbeschlussdatum"])) {echo 'aufstellungsbeschlussDatum: ' . $_SESSION["rp_plan_aufstellungsbeschlussdatum"] . '<br>';}
  if (empty($_SESSION["rp_plan_auslegungsstartdatum"])){$_SESSION["rp_plan_auslegungsstartdatum"] = $_POST['rp_plan_auslegungsstartdatum'];}
  if (!empty($_SESSION["rp_plan_auslegungsstartdatum"])) {echo 'auslegungsStartDatum: ' . $_SESSION["rp_plan_auslegungsstartdatum"] . '<br>';}
  if (empty($_SESSION["rp_plan_auslegungsenddatum"])){$_SESSION["rp_plan_auslegungsenddatum"] = $_POST['rp_plan_auslegungsenddatum'];}
  if (!empty($_SESSION["rp_plan_auslegungsenddatum"])) {echo 'auslegungsEndDatum: ' . $_SESSION["rp_plan_auslegungsenddatum"] . '<br>';}
  if (empty($_SESSION["rp_plan_traegerbeteiligungsstartdatum"])){$_SESSION["rp_plan_traegerbeteiligungsstartdatum"] = $_POST['rp_plan_traegerbeteiligungsstartdatum'];}
  if (!empty($_SESSION["rp_plan_traegerbeteiligungsstartdatum"])) {echo 'traegerbeteiligungsStartDatum: ' . $_SESSION["rp_plan_traegerbeteiligungsstartdatum"] . '<br>';}
  if (empty($_SESSION["rp_plan_traegerbeteiligungsenddatum"])){$_SESSION["rp_plan_traegerbeteiligungsenddatum"] = $_POST['rp_plan_traegerbeteiligungsenddatum'];}
  if (!empty($_SESSION["rp_plan_traegerbeteiligungsendatum"])) {echo 'traegerbeteiligungsEndDatum: ' . $_SESSION["rp_plan_traegerbeteiligungsenddatum"] . '<br>';}
  if (empty($_SESSION["rp_plan_aenderungenbisdatum"])){$_SESSION["rp_plan_aenderungenbisdatum"] = $_POST['rp_plan_aenderungenbisdatum'];}
  if (!empty($_SESSION["rp_plan_aenderungenbisdatum"])) {echo 'aenderungenBisDatum: ' . $_SESSION["rp_plan_aenderungenbisdatum"] . '<br>';}
  if (empty($_SESSION["rp_plan_entwurfsbeschlussdatum"])){$_SESSION["rp_plan_entwurfsbeschlussdatum"] = $_POST['rp_plan_entwurfsbeschlussdatum'];}
  if (!empty($_SESSION["rp_plan_entwurfsbeschlussdatum"])) {echo 'entwurfsbeschlussDatum: ' . $_SESSION["rp_plan_entwurfsbeschlussdatum"] . '<br>';}
  if (empty($_SESSION["rp_plan_planbeschlussdatum"])){$_SESSION["rp_plan_planbeschlussdatum"] = $_POST['rp_plan_planbeschlussdatum'];}
  if (!empty($_SESSION["rp_plan_planbeschlussdatum"])) {echo 'planbeschlussDatum: ' . $_SESSION["rp_plan_planbeschlussdatum"] . '<br>';}
  if (empty($_SESSION["rp_plan_datumdesinkrafttretens"])){$_SESSION["rp_plan_datumdesinkrafttretens"] = $_POST['rp_plan_datumdesinkrafttretens'];}
  if (!empty($_SESSION["rp_plan_datumdesinkrafttretens"])) {echo 'datumDesInkrafttretens: ' . $_SESSION["rp_plan_datumdesinkrafttretens"] . '<br>';}
  if (empty($_SESSION["rp_plan_refumweltbericht"])){$_SESSION["rp_plan_refumweltbericht"] = $_POST['rp_plan_refumweltbericht'];}
  if (!empty($_SESSION["rp_plan_refumweltbericht"])) {echo 'refUmweltbericht: ' . $_SESSION["rp_plan_refumweltbericht"] . '<br>';}
  if (empty($_SESSION["rp_plan_refsatzung"])){$_SESSION["rp_plan_refsatzung"] = $_POST['rp_plan_refsatzung'];}
  if (!empty($_SESSION["rp_plan_refsatzung"])) {echo 'refSatzung: ' . $_SESSION["rp_plan_refsatzung"] . '<br>';}
  if (empty($_SESSION["rp_plan_typ"])){$_SESSION["rp_plan_typ"] = $_POST['rp_plan_typ'];}
  if (!empty($_SESSION["rp_plan_typ"])) {echo 'typ: ' . substr($_SESSION["rp_plan_typ"], 12) . '<br>';}  
  if (empty($_SESSION["rp_plan_refkarten"])){$_SESSION["rp_plan_refkarten"] = $_POST['rp_plan_refkarten'];}
  if (!empty($_SESSION["rp_plan_refkarten"])) {echo 'refKarten: ' . $_SESSION["rp_plan_refkarten"] . '<br>';}
  echo '<input type="submit" name="eraseplan-submit" value="Plan Daten leeren!">';
  echo '<input type="submit" name="plan-submit" value="Plan Daten speichern!">';
  
  
  ### hier Validierung einbauen: Es muss ein Bundeland angegeben sein,
  ### Es muss ein unique Identifier für die Datenbank bestehenden Plan bestehen (damit er später als Vorlage benutzt werden kann)
  echo '</div>';
  echo '</form>';
}

function konverteingegebenertextabschnitt(){
  
  echo '<form action ="index.php?go=show_konvertierungform" method="post">';
  echo '<div class="eingegebenertextabschnitt">';
  echo '<h2>Eingegebener Textabschnitt</h2>';
  echo '<h3>Konformitätsbedingungen</h3><ul>';
  echo '<li>Das Attribut text oder die Relation refText muss belegt sein, es dürfen aber nicht gleichzeitig text und refText belegt sein.</li>';
  echo '</ul>';
  echo "<h3>XP_Textabschnitt Daten</h3>";
  if (empty($_SESSION["xp_textabschnitt_schluessel"])){$_SESSION["xp_textabschnitt_schluessel"] = $_POST['xp_textabschnitt_schluessel'];}
  if (!empty($_SESSION["xp_textabschnitt_schluessel"])) {echo 'schluessel: ' . $_SESSION["xp_textabschnitt_schluessel"] . '<br>';}
  if (empty($_SESSION["xp_textabschnitt_gesetzlichegrundlage"])){$_SESSION["xp_textabschnitt_gesetzlichegrundlage"] = $_POST['xp_textabschnitt_gesetzlichegrundlage'];}
  if (!empty($_SESSION["xp_textabschnitt_gesetzlichegrundlage"])) {echo 'gesetzlicheGrundlage: ' . $_SESSION["xp_textabschnitt_gesetzlichegrundlage"] . '<br>';}
  if (empty($_SESSION["xp_textabschnitt_text"])){$_SESSION["xp_textabschnitt_text"] = $_POST['xp_textabschnitt_text'];}
  if (!empty($_SESSION["xp_textabschnitt_text"])) {echo 'text: ' . $_SESSION["xp_textabschnitt_text"] . '<br>';}
  if (empty($_SESSION["xp_textabschnitt_reftext"])){$_SESSION["xp_textabschnitt_reftext"] = $_POST['xp_textabschnitt_reftext'];}
  if (!empty($_SESSION["xp_textabschnitt_reftext"])) {echo 'text: ' . $_SESSION["xp_textabschnitt_reftext"] . '<br>';}
  echo "<h3>RP_Textabschnitt Daten</h3>";
  if (empty($_SESSION["rp_textabschnitt_rechtscharakter"])){$_SESSION["rp_textabschnitt_rechtscharakter"] = $_POST['rp_textabschnitt_rechtscharakter'];}
  if (!empty($_SESSION["rp_textabschnitt_rechtscharakter"])) {echo 'text: ' . $_SESSION["rp_textabschnitt_rechtscharakter"] . '<br>';}
  echo '<input type="submit" name="erasetextabschnitt-submit" value="Textabschnitt Daten leeren!">';
  echo '<input type="submit" name="textabschnitt-submit" value="Textabschnitt Daten speichern!">';
  ### hier Validierung einbauen + Es muss eingeben werden, zu welchem Plan der Textabschnitt gehört und Nummer muss unique sein
  ###   damit er nach diesem später wieder gesucht werden kann
  echo "</div>";
  echo '</form>';
}

function konverteingegebenerbereich(){
  echo '<form action ="index.php?go=show_konvertierungform" method="post">';
  echo '<div class="eingegebenerbereich">';
  echo '<h2>Eingegebener Bereich</h2>';
  echo '<h3>Konformitätsbedingungen</h3><ul>';
  echo '<li>Die Relation praesentationsobjekt darf nur auf Instanzen von Klassen verweisen, die von<a href="index.php?go=show_elements&package=Alle#xplan:XP_AbstraktesPraesentationsobjekt">XP_AbstraktesPraesentationsobjekt</a> abgeleitet sind.</li>';
  echo '<li>Die Relation nachrichtlich darf nur auf Instanzen der Klasse <a href="index.php?go=show_elements&package=Alle#xplan:XP_Objekt">XP_Objekt</a> verweisen.</li>';
  echo '<li>Die Relation rasterBasis darf nur auf Instanzen der Klasse <a href="index.php?go=show_elements&package=Alle#xplan:XP_RasterplanBasis">XP_Rasterplanbasis</a> verweisen.</li>';
  echo '<li>Eine Instanz der Klasse RP_Bereich darf über die Relation inhaltRPlan nur Objekte referieren, die von <a href="index.php?go=show_elements&package=Alle#xplan:RP_Objekt">RP_Objekt</a> abgeleitet sind.<img src="images/neu.png" height="13"></li>';
  echo '<li>Eine Instanz der Klasse RP_Bereich darf über die Relation rasterAenderung nur Instanzen der Klasse <a href="index.php?go=show_elements&package=Alle#xplan:RP_RasterplanAenderung">RP_RasterplanAenderung</a> referieren<img src="images/neu.png" height="13"></li>';
  echo '<li>Eine Instanz der Klasse RP_Bereich muss über die Relation gehoertZuPlan genau eine Instanz der Klasse <a href="index.php?go=show_elements&package=Alle#xplan:RP_Plan">RP_Plan</a> referieren. Diese Instanz referiert über die Relation bereich die Bereichs-Instanz.<img src="images/neu.png" height="13"></li>';
  echo '</ul>';
  echo '<h3>Assoziationen</h3>';
  echo '<b><span title="Assoziert den Bereich mit einem Plan (RP_Plan). Jeder Bereich muss einem Plan zugeordnet werden">gehoertZuPlan:</span></b> gml:ReferenceType<br>';
  echo ' <input type="text" name="assoziation_bereich_gehoertzuplan" required><br>';
  echo '<b><span title="Assoziert den Bereich mit einem Präsentationsobjekt (XP_AbstraktesPraesentationsobjekt). Jeder Bereich darf beliebig vielen Praesentationsobjekten zugeordnet werden.">praesentationsobjekt [0..*]:</span></b> gml:ReferenceType<br>';
  echo ' <input type="text" name="assoziation_bereich_praesentationsobjekt"><br>';
  echo '<b><span title="Assoziert den Bereich mit einem rasterbasisobjekt (XP_RasterplanBasis).">rasterBasis [0..1]:</span></b> gml:ReferenceType<br>';
  echo ' <input type="text" name="assoziation_bereich_rasterbasis"><br>';
  echo "<h3>XP_Bereich Daten</h3>";
  if (empty($_SESSION["xp_bereich_nummer"])){$_SESSION["xp_bereich_nummer"] = $_POST['xp_bereich_nummer'];}
  if (!empty($_SESSION["xp_bereich_nummer"])) {echo 'nummer: ' . $_SESSION["xp_bereich_nummer"] . '<br>';}
  if (empty($_SESSION["xp_bereich_name"])){$_SESSION["xp_bereich_name"] = $_POST['xp_bereich_name'];}
  if (!empty($_SESSION["xp_bereich_name"])) {echo 'name: ' . $_SESSION["xp_bereich_name"] . '<br>';}
  if (empty($_SESSION["xp_bereich_bedeutung"])){$_SESSION["xp_bereich_bedeutung"] = $_POST['xp_bereich_name'];}
  if (!empty($_SESSION["xp_bereich_bedeutung"])) {echo 'bedeutung: ' . $_SESSION["xp_bereich_bedeutung"] . '<br>';}
  if (empty($_SESSION["xp_bereich_detailliertebedeutung"])){$_SESSION["xp_bereich_detailliertebedeutung"] = $_POST['xp_bereich_detailliertebedeutung'];}
  if (!empty($_SESSION["xp_bereich_detailliertebedeutung"])) {echo 'detaillierteBedeutung: ' . $_SESSION["xp_bereich_detailliertebedeutung"] . '<br>';}
  if (empty($_SESSION["xp_bereich_erstellungsmasstab"])){$_SESSION["xp_bereich_erstellungsmasstab"] = $_POST['xp_bereich_erstellungsmasstab'];}
  if (!empty($_SESSION["xp_bereich_erstellungsmasstab"])) {echo 'erstellungsMasstab: ' . $_SESSION["xp_bereich_erstellungsmasstab"] . '<br>';}
  if (empty($_SESSION["xp_bereich_geltungsbereich"])){$_SESSION["xp_bereich_geltungsbereich"] = $_POST['xp_bereich_geltungsbereich'];}
  if (!empty($_SESSION["xp_bereich_geltungsbereich"])) {echo 'geltungsbereich: ' . $_SESSION["xp_bereich_geltungsbereich"] . '<br>';}
  echo "<h3>RP_Bereich Daten</h3>";
  if (empty($_SESSION["rp_bereich_versionbrog"])){$_SESSION["rp_bereich_versionbrog"] = $_POST['rp_bereich_versionbrog'];}
  if (!empty($_SESSION["rp_bereich_versionbrog"])) {echo 'versionBROG: ' . $_SESSION["rp_bereich_versionbrog"] . '<br>';}
  if (empty($_SESSION["rp_bereich_versionbrogtext"])){$_SESSION["rp_bereich_versionbrogtext"] = $_POST['rp_bereich_versionbrogtext'];}
  if (!empty($_SESSION["rp_bereich_versionbrogtext"])) {echo 'versionBROGText: ' . $_SESSION["rp_bereich_versionbrogtext"] . '<br>';}
  if (empty($_SESSION["rp_bereich_versionlplg"])){$_SESSION["rp_bereich_versionlplg"] = $_POST['rp_bereich_versionlplg'];}
  if (!empty($_SESSION["rp_bereich_versionlplg"])) {echo 'versionLPLG: ' . $_SESSION["rp_bereich_versionlplg"] . '<br>';}
  if (empty($_SESSION["rp_bereich_versionlplgtext"])){$_SESSION["rp_bereich_versionlplgtext"] = $_POST['rp_bereich_versionlplgtext'];}
  if (!empty($_SESSION["rp_bereich_versionlplgtext"])) {echo 'versionLPLGText: ' . $_SESSION["rp_bereich_versionlplgtext"] . '<br>';}
  echo '<input type="submit" name="erasebereich-submit" value="Bereich Daten leeren!">';
  echo '<input type="submit" name="plan-submit" value="Bereich Daten speichern!">';
  ### hier Validierung einbauen + Es muss eingeben werden, zu welchem Plan der Bereich gehört und Nummer muss unique sein
  ###   damit er nach diesem später wieder gesucht werden kann
  echo '</div>';
  echo '</form>';
}      
      

##############################FUNKTIONEN#############################
###### XP_PLAN
###### XP_PLAN
###### XP_PLAN

function konverteingabexpplan(){
  ?>
  <div class="featuretypeableitend">
    <a href="javascript:ReverseDisplay('minmaxxpplan')" class=hlink><h2>XP_Plan</h2></a>
    <form action ="index.php?go=show_konvertierungform" method="post">
      <div id="minmaxxpplan">
        <b>name</b> [0..1]:CharacterString<br>
        <input type="text" name="xp_plan_name" value="<?php if (!empty($_SESSION["xp_plan_name"])) {echo $_SESSION["xp_plan_name"];}?>"><br>
        <b>nummer</b> [0..1]:CharacterString<br>
        <input type="text" name="xp_plan_nummer" value="<?php if (!empty($_SESSION["xp_plan_nummer"])) {echo $_SESSION["xp_plan_nummer"];}?>"><br>
        <b>internalId</b> [0..1]:CharacterString<br>
        <input type="text" name="xp_plan_internalid" value="<?php if (!empty($_SESSION["xp_plan_internalid"])) {echo $_SESSION["xp_plan_internalid"];}?>"><br>
        <b>beschreibung</b> [0..1]:CharacterString<br>
        <input type="text" name="xp_plan_beschreibung" value="<?php if (!empty($_SESSION["xp_plan_beschreibung"])) {echo $_SESSION["xp_plan_beschreibung"];}?>"><br>
        <b>kommentar</b> [0..1]:CharacterString<br>
        <input type="text" name="xp_plan_kommentar" value="<?php if (!empty($_SESSION["xp_plan_kommentar"])) {echo $_SESSION["xp_plan_kommentar"];}?>"><br>
        <b>technHerstellDatum</b> [0..1]:Date<br>
        <input type="text" name="xp_plan_technherstelldatum" value="<?php if (!empty($_SESSION["xp_plan_technherstelldatum"])) {echo $_SESSION["xp_plan_technherstelldatum"];}?>"><br>
        <b>genehmigungsDatum</b> [0..1]:Date<br>
        <input type="text" name="xp_plan_genehmigungsdatum" value="<?php if (!empty($_SESSION["xp_plan_genehmigungsdatum"])) {echo ($_SESSION["xp_plan_genehmigungsdatum"]);}?>"><br>
        <b>untergangsDatum</b> [0..1]:Date<br>
        <input type="text" name="xp_plan_untergangsdatum" value="<?php if (!empty(($_SESSION["xp_plan_untergangsdatum"]))) {echo $_SESSION["xp_plan_untergangsdatum"];}?>"><br>
        <b>aendert</b> [0..1]:<a href="javascript:ReverseDisplay('minmaxaendertxp_verbundenerplan')" class=hlink><b>XP_VerbundenerPlan</b></a><br>
          <div id="minmaxaendertxp_verbundenerplan" class="enumeration" style="display:none;">
            <b>planName</b> :CharacterString<br>
            <input type="text" name="aendertxp_verbundenerplan_planname" value="<?php if(!empty($xp_plan))?>"><br>
            <b>rechtscharakter</b> :XP_RechtscharakterPlanaenderung<br>
            <select name="xp_aendertverbundenerplan_rechtscharakter">
            <option value="Aenderung1000">Aenderung = 1000</option>
            <option value="Ergaenzung1100">Ergaenzung = 1100</option>
            <option value="Aufhebung2000">Aufhebung = 2000</option>
            </select><br>
            <b>nummer</b> :CharacterString<br>
            <input type="text" name="aendertxp_verbundenerplan_nummer"><br>
        </div>
        <b>wurdeGeaendertVon</b> [0..*]:<a href="javascript:ReverseDisplay('minmaxwurdegeaendertvonxp_verbundenerplan')" class=hlink><b>XP_VerbundenerPlan</b></a><br>
          <div id="minmaxwurdegeaendertvonxp_verbundenerplan" class="enumeration" style="display:none;">
            <b>planName</b> :CharacterString<br>
            <input type="text" name="xp_verbundenerplan_planname"><br>
            <b>rechtscharakter</b> :XP_RechtscharakterPlanaenderung<br>
            <select name="xp_verbundenerplan_rechtscharakter">
              <option value="Aenderung1000">Aenderung = 1000</option>
              <option value="Ergaenzung1100">Ergaenzung = 1100</option>
              <option value="Aufhebung2000">Aufhebung = 2000</option>
            </select><br>
            <b>nummer</b> :CharacterString<br>
            <input type="text" name="xp_verbundenerplan_nummer"><br>
          </div>
        <b>XPlanGMLVersion</b> [0..1]:CharacterString<br>
        <input type="text" name="xp_plan_xplangmlversion" placeholder="4.1" value="<?php if (!empty($_SESSION["xp_plan_xplangmlversion"])) {echo $_SESSION["xp_plan_xplangmlversion"];}?>"><br>
        <b>bezugshoehe</b> [0..1]:Length<br>
        <input type="text" name="xp_plan_bezugshoehe" value="<?php if (!empty($_SESSION["xp_plan_bezugshoehe"])) {echo $_SESSION["xp_plan_bezugshoehe"];}?>"> in Meter<br>
        <b>raeumlicherGeltungsbereich</b> [0..1]:<a href="javascript:ReverseDisplay('minmaxraeumlichergeltungsbereichxp_flaechengeometrie')" class=hlink><b>XP_Flaechengeometrie</b></a><br>
          <div id="minmaxraeumlichergeltungsbereichxp_flaechengeometrie" class="enumeration" style="display:none;">
            <b>Flaeche</b> :GM_Surface<br>
            <input type="text" name="xp_flaechengeometrie_gmsurface"><br>
            <b>MultiFlaeche</b> :GM_MultiSurface<br>
            <input type="text" name="xp_flaechengeometrie_gmsurface"><br>
          </div>
        <b>verfahrensMerkmale</b> [0..*]:<a href="javascript:ReverseDisplay('minmaxvermerkxp_verfahrensmerkmal')" class=hlink><b>XP_Verfahrensmerkmal</b></a><br>
          <div id="minmaxvermerkxp_verfahrensmerkmal" class="enumeration" style="display:none;">
            <b>vermerk</b> :CharacterString<br>
            <input type="text" name="xp_verfahrensmerkmal_vermerk"><br>
            <b>datum</b> :Date<br>
            <input type="text" name="xp_verfahrensmerkmal_datum"><br>
            <b>signatur</b> CharacterString<br>
            <input type="text" name="xp_verfahrensmerkmal_signatur"><br>
            <b>signiert</b> :Boolean<br>
            <select name="xp_verfahrensmerkmal_signiert">
              <option value="xp_verfahrensmerkmal_signiert_true">True</option>
              <option value="xp_verfahrensmerkmal_signiert_false">False</option>
            </select><br>
          </div>
        <b>rechtsverbindlich</b> [0..*]:<a href="javascript:ReverseDisplay('minmaxrechtsverbindlichxp_externereferenz')" class=hlink><b>XP_ExterneReferenz</b></a><br>
          <div id="minmaxrechtsverbindlichxp_externereferenz" class="enumeration" style="display:none;">
            <b>georefURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_georefurl"><br>
            <b>georefMimeType</b> [0..1]:XP_MimeTypes<br>
            <select name="xp_externereferenz_georefmimetype">
              <option value="xp_externereferenz_georefmimetypes_applicationpdf">application/pdf</option>
              <option value="xp_externereferenz_georefmimetypes_applicationzip">application/zip</option>
              <option value="xp_externereferenz_georefmimetypes_applicationxml">application/xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationmsword">application/msword</option>
              <option value="xp_externereferenz_georefmimetypes_applicationmsexcel">application/msexcel</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcgml">application/vnd.ogc.gml</option>         
              <option value="xp_externereferenz_georefmimetypes_applicationodt">application/odt</option>
              <option value="xp_externereferenz_georefmimetypes_imagejpg">image/jpg</option>
              <option value="xp_externereferenz_georefmimetypes_imagepng">image/png</option>
              <option value="xp_externereferenz_georefmimetypes_imagetiff">image/tiff</option>
              <option value="xp_externereferenz_georefmimetypes_imageecw">image/ecw</option>
              <option value="xp_externereferenz_georefmimetypes_imagesvgxml">image/svgxml</option>
              <option value="xp_externereferenz_georefmimetypes_texthtml">text/html</option>
              <option value="xp_externereferenz_georefmimetypes_extplain">ext/plain</option>    
            </select><br>
            <b>art</b> [0..1]:XP_ExterneReferenzArt<br>
            <select name="xp_externereferenz_externereferenzart">
              <option value="xp_externereferenz_art_dokument">Dokument</option>
              <option value="xp_externereferenz_art_planmitgeoreferenz">PlanMitGeoreferenz</option>
            </select><br>
            <b>informationssystemURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_informationssystemurl"><br>
            <b>referenzName</b> [0..1]:CharacterString<br>
            <input type="text" name="xp_externereferenz_referenzname"><br>
            <b>referenzURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_referenzurl"><br>
            <b>referenzMimeType</b> [0..1]:XP_MimeTypes<br>
            <select name="xp_externereferenz_referenzmimetype">
              <option value="xp_externereferenz_referenzmimetype_applicationpdf">application/pdf</option>
              <option value="xp_externereferenz_referenzmimetype_applicationzip">application/zip</option>
              <option value="xp_externereferenz_referenzmimetype_applicationxml">application/xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationmsword">application/msword</option>
              <option value="xp_externereferenz_referenzmimetype_applicationmsexcel">application/msexcel</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcgml">application/vnd.ogc.gml</option>         
              <option value="xp_externereferenz_referenzmimetype_applicationodt">application/odt</option>
              <option value="xp_externereferenz_referenzmimetype_imagejpg">image/jpg</option>
              <option value="xp_externereferenz_referenzmimetype_imagepng">image/png</option>
              <option value="xp_externereferenz_referenzmimetype_imagetiff">image/tiff</option>
              <option value="xp_externereferenz_referenzmimetype_imageecw">image/ecw</option>
              <option value="xp_externereferenz_referenzmimetype_imagesvgxml">image/svgxml</option>
              <option value="xp_externereferenz_referenzmimetype_texthtml">text/html</option>
              <option value="xp_externereferenz_referenzmimetype_extplain">ext/plain</option>    
            </select><br>
            <b>beschreibung</b> [0..1]:CharacterString<br>
            <input type="text" name="xp_externereferenz_beschreibung"><br>
            <b>datum</b> [0..1]:Date<br>
            <input type="text" name="xp_externereferenz_datum"><br>
          </div>
        <b>informell</b> [0..*]:<a href="javascript:ReverseDisplay('minmaxinformellxp_externereferenz')" class=hlink><b>XP_ExterneReferenz</b></a><br>
          <div id="minmaxinformellxp_externereferenz" class="enumeration" style="display:none;">
            <b>georefURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_georefurl"><br>
            <b>georefMimeType</b> [0..1]:XP_MimeTypes<br>
            <select name="xp_externereferenz_georefmimetype">
              <option value="xp_externereferenz_georefmimetypes_applicationpdf">application/pdf</option>
              <option value="xp_externereferenz_georefmimetypes_applicationzip">application/zip</option>
              <option value="xp_externereferenz_georefmimetypes_applicationxml">application/xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationmsword">application/msword</option>
              <option value="xp_externereferenz_georefmimetypes_applicationmsexcel">application/msexcel</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcgml">application/vnd.ogc.gml</option>         
              <option value="xp_externereferenz_georefmimetypes_applicationodt">application/odt</option>
              <option value="xp_externereferenz_georefmimetypes_imagejpg">image/jpg</option>
              <option value="xp_externereferenz_georefmimetypes_imagepng">image/png</option>
              <option value="xp_externereferenz_georefmimetypes_imagetiff">image/tiff</option>
              <option value="xp_externereferenz_georefmimetypes_imageecw">image/ecw</option>
              <option value="xp_externereferenz_georefmimetypes_imagesvgxml">image/svgxml</option>
              <option value="xp_externereferenz_georefmimetypes_texthtml">text/html</option>
              <option value="xp_externereferenz_georefmimetypes_extplain">ext/plain</option>    
            </select><br>
            <b>art</b> [0..1]:XP_ExterneReferenzArt<br>
            <select name="xp_externereferenz_externereferenzart">
              <option value="xp_externereferenz_art_dokument">Dokument</option>
              <option value="xp_externereferenz_art_planmitgeoreferenz">PlanMitGeoreferenz</option>
            </select><br>
            <b>informationssystemURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_informationssystemurl"><br>
            <b>referenzName</b> [0..1]:CharacterString<br>
            <input type="text" name="xp_externereferenz_referenzname"><br>
            <b>referenzURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_referenzurl"><br>
            <b>referenzMimeType</b> [0..1]:XP_MimeTypes<br>
            <select name="xp_externereferenz_referenzmimetype">
              <option value="xp_externereferenz_referenzmimetype_applicationpdf">application/pdf</option>
              <option value="xp_externereferenz_referenzmimetype_applicationzip">application/zip</option>
              <option value="xp_externereferenz_referenzmimetype_applicationxml">application/xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationmsword">application/msword</option>
              <option value="xp_externereferenz_referenzmimetype_applicationmsexcel">application/msexcel</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcgml">application/vnd.ogc.gml</option>         
              <option value="xp_externereferenz_referenzmimetype_applicationodt">application/odt</option>
              <option value="xp_externereferenz_referenzmimetype_imagejpg">image/jpg</option>
              <option value="xp_externereferenz_referenzmimetype_imagepng">image/png</option>
              <option value="xp_externereferenz_referenzmimetype_imagetiff">image/tiff</option>
              <option value="xp_externereferenz_referenzmimetype_imageecw">image/ecw</option>
              <option value="xp_externereferenz_referenzmimetype_imagesvgxml">image/svgxml</option>
              <option value="xp_externereferenz_referenzmimetype_texthtml">text/html</option>
              <option value="xp_externereferenz_referenzmimetype_extplain">ext/plain</option>    
            </select><br>
            <b>beschreibung</b> [0..1]:CharacterString<br>
            <input type="text" name="xp_externereferenz_beschreibung"><br>
            <b>datum</b> [0..1]:Date<br>
            <input type="text" name="xp_externereferenz_datum"><br>
          </div>
        <b>hatGenerAttribut</b> [0..*]:<a href="javascript:ReverseDisplay('minmaxhatgenerattributxp_externereferenz')" class=hlink><b>XP_GenerAttribut</b></a><br>
          <div id="minmaxhatgenerattributxp_externereferenz" class="enumeration" style="display:none;">
            <b>name</b> :Characterstring<br>
            <input type="text" name="xp_generattribut_name"><br>
            <b>wert</b> :Characterstring<br>
            <input type="text" name="xp_stringattribut_wert"><br>
            <b>wert</b> :Decimal<br>
            <input type="text" name="xp_doubleattribut_wert"><br>
            <b>wert</b> :Date<br>
            <input type="text" name="xp_datumattribut_wert"><br>
            <b>wert</b> :Integer<br>
            <input type="number" name="xp_integerattribut_wert"><br>
            <b>wert</b> :URI<br>
            <input type="text" name="xp_urlattribut_wert"><br>
          </div>      
        <b>refBeschreibung</b> [0..*]:<a href="javascript:ReverseDisplay('minmaxrefbeschreibungxp_externereferenz')" class=hlink><b>XP_ExterneReferenz</b></a><br>
          <div id="minmaxrefbeschreibungxp_externereferenz" class="enumeration" style="display:none;">
            <b>georefURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_georefurl"><br>
            <b>georefMimeType</b> [0..1]:XP_MimeTypes<br>
            <select name="xp_externereferenz_georefmimetype">
              <option value="xp_externereferenz_georefmimetypes_applicationpdf">application/pdf</option>
              <option value="xp_externereferenz_georefmimetypes_applicationzip">application/zip</option>
              <option value="xp_externereferenz_georefmimetypes_applicationxml">application/xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationmsword">application/msword</option>
              <option value="xp_externereferenz_georefmimetypes_applicationmsexcel">application/msexcel</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcgml">application/vnd.ogc.gml</option>         
              <option value="xp_externereferenz_georefmimetypes_applicationodt">application/odt</option>
              <option value="xp_externereferenz_georefmimetypes_imagejpg">image/jpg</option>
              <option value="xp_externereferenz_georefmimetypes_imagepng">image/png</option>
              <option value="xp_externereferenz_georefmimetypes_imagetiff">image/tiff</option>
              <option value="xp_externereferenz_georefmimetypes_imageecw">image/ecw</option>
              <option value="xp_externereferenz_georefmimetypes_imagesvgxml">image/svgxml</option>
              <option value="xp_externereferenz_georefmimetypes_texthtml">text/html</option>
              <option value="xp_externereferenz_georefmimetypes_extplain">ext/plain</option>    
            </select><br>
            <b>art</b> [0..1]:XP_ExterneReferenzArt<br>
            <select name="xp_externereferenz_externereferenzart">
              <option value="xp_externereferenz_art_dokument">Dokument</option>
              <option value="xp_externereferenz_art_planmitgeoreferenz">PlanMitGeoreferenz</option>
            </select><br>
            <b>informationssystemURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_informationssystemurl"><br>
            <b>referenzName</b> [0..1]:CharacterString<br>
            <input type="text" name="xp_externereferenz_referenzname"><br>
            <b>referenzURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_referenzurl"><br>
            <b>referenzMimeType</b> [0..1]:XP_MimeTypes<br>
            <select name="xp_externereferenz_referenzmimetype">
              <option value="xp_externereferenz_referenzmimetype_applicationpdf">application/pdf</option>
              <option value="xp_externereferenz_referenzmimetype_applicationzip">application/zip</option>
              <option value="xp_externereferenz_referenzmimetype_applicationxml">application/xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationmsword">application/msword</option>
              <option value="xp_externereferenz_referenzmimetype_applicationmsexcel">application/msexcel</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcgml">application/vnd.ogc.gml</option>         
              <option value="xp_externereferenz_referenzmimetype_applicationodt">application/odt</option>
              <option value="xp_externereferenz_referenzmimetype_imagejpg">image/jpg</option>
              <option value="xp_externereferenz_referenzmimetype_imagepng">image/png</option>
              <option value="xp_externereferenz_referenzmimetype_imagetiff">image/tiff</option>
              <option value="xp_externereferenz_referenzmimetype_imageecw">image/ecw</option>
              <option value="xp_externereferenz_referenzmimetype_imagesvgxml">image/svgxml</option>
              <option value="xp_externereferenz_referenzmimetype_texthtml">text/html</option>
              <option value="xp_externereferenz_referenzmimetype_extplain">ext/plain</option>    
            </select><br>
            <b>beschreibung</b> [0..1]:CharacterString<br>
            <input type="text" name="xp_externereferenz_beschreibung"><br>
            <b>datum</b> [0..1]:Date<br>
            <input type="text" name="xp_externereferenz_datum"><br>
          </div>
        <b>refBegruendung</b> [0..*]:<a href="javascript:ReverseDisplay('minmaxrefbegruendungxp_externereferenz')" class=hlink><b>XP_ExterneReferenz</b></a><br>
          <div id="minmaxrefbegruendungxp_externereferenz" class="enumeration" style="display:none;">
            <b>georefURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_georefurl"><br>
            <b>georefMimeType</b> [0..1]:XP_MimeTypes<br>
            <select name="xp_externereferenz_georefmimetype">
              <option value="xp_externereferenz_georefmimetypes_applicationpdf">application/pdf</option>
              <option value="xp_externereferenz_georefmimetypes_applicationzip">application/zip</option>
              <option value="xp_externereferenz_georefmimetypes_applicationxml">application/xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationmsword">application/msword</option>
              <option value="xp_externereferenz_georefmimetypes_applicationmsexcel">application/msexcel</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcgml">application/vnd.ogc.gml</option>         
              <option value="xp_externereferenz_georefmimetypes_applicationodt">application/odt</option>
              <option value="xp_externereferenz_georefmimetypes_imagejpg">image/jpg</option>
              <option value="xp_externereferenz_georefmimetypes_imagepng">image/png</option>
              <option value="xp_externereferenz_georefmimetypes_imagetiff">image/tiff</option>
              <option value="xp_externereferenz_georefmimetypes_imageecw">image/ecw</option>
              <option value="xp_externereferenz_georefmimetypes_imagesvgxml">image/svgxml</option>
              <option value="xp_externereferenz_georefmimetypes_texthtml">text/html</option>
              <option value="xp_externereferenz_georefmimetypes_extplain">ext/plain</option>    
            </select><br>
            <b>art</b> [0..1]:XP_ExterneReferenzArt<br>
            <select name="xp_externereferenz_externereferenzart">
              <option value="xp_externereferenz_art_dokument">Dokument</option>
              <option value="xp_externereferenz_art_planmitgeoreferenz">PlanMitGeoreferenz</option>
            </select><br>
            <b>informationssystemURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_informationssystemurl"><br>
            <b>referenzName</b> [0..1]:CharacterString<br>
            <input type="text" name="xp_externereferenz_referenzname"><br>
            <b>referenzURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_referenzurl"><br>
            <b>referenzMimeType</b> [0..1]:XP_MimeTypes<br>
            <select name="xp_externereferenz_referenzmimetype">
              <option value="xp_externereferenz_referenzmimetype_applicationpdf">application/pdf</option>
              <option value="xp_externereferenz_referenzmimetype_applicationzip">application/zip</option>
              <option value="xp_externereferenz_referenzmimetype_applicationxml">application/xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationmsword">application/msword</option>
              <option value="xp_externereferenz_referenzmimetype_applicationmsexcel">application/msexcel</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcgml">application/vnd.ogc.gml</option>         
              <option value="xp_externereferenz_referenzmimetype_applicationodt">application/odt</option>
              <option value="xp_externereferenz_referenzmimetype_imagejpg">image/jpg</option>
              <option value="xp_externereferenz_referenzmimetype_imagepng">image/png</option>
              <option value="xp_externereferenz_referenzmimetype_imagetiff">image/tiff</option>
              <option value="xp_externereferenz_referenzmimetype_imageecw">image/ecw</option>
              <option value="xp_externereferenz_referenzmimetype_imagesvgxml">image/svgxml</option>
              <option value="xp_externereferenz_referenzmimetype_texthtml">text/html</option>
              <option value="xp_externereferenz_referenzmimetype_extplain">ext/plain</option>    
            </select><br>
            <b>beschreibung</b> [0..1]:CharacterString<br>
            <input type="text" name="xp_externereferenz_beschreibung"><br>
            <b>datum</b> [0..1]:Date<br>
            <input type="text" name="xp_externereferenz_datum"><br>
          </div>
        <b>refExternalCodeList</b> [0..*]:<a href="javascript:ReverseDisplay('minmaxrefexternalcodelistxp_externereferenz')" class=hlink><b>XP_ExterneReferenz</b></a><br>
          <div id="minmaxrefexternalcodelistxp_externereferenz" class="enumeration" style="display:none;">
            <b>georefURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_georefurl"><br>
            <b>georefMimeType</b> [0..1]:XP_MimeTypes<br>
            <select name="xp_externereferenz_georefmimetype">
              <option value="xp_externereferenz_georefmimetypes_applicationpdf">application/pdf</option>
              <option value="xp_externereferenz_georefmimetypes_applicationzip">application/zip</option>
              <option value="xp_externereferenz_georefmimetypes_applicationxml">application/xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationmsword">application/msword</option>
              <option value="xp_externereferenz_georefmimetypes_applicationmsexcel">application/msexcel</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcgml">application/vnd.ogc.gml</option>         
              <option value="xp_externereferenz_georefmimetypes_applicationodt">application/odt</option>
              <option value="xp_externereferenz_georefmimetypes_imagejpg">image/jpg</option>
              <option value="xp_externereferenz_georefmimetypes_imagepng">image/png</option>
              <option value="xp_externereferenz_georefmimetypes_imagetiff">image/tiff</option>
              <option value="xp_externereferenz_georefmimetypes_imageecw">image/ecw</option>
              <option value="xp_externereferenz_georefmimetypes_imagesvgxml">image/svgxml</option>
              <option value="xp_externereferenz_georefmimetypes_texthtml">text/html</option>
              <option value="xp_externereferenz_georefmimetypes_extplain">ext/plain</option>    
            </select><br>
            <b>art</b> [0..1]:XP_ExterneReferenzArt<br>
            <select name="xp_externereferenz_externereferenzart">
              <option value="xp_externereferenz_art_dokument">Dokument</option>
              <option value="xp_externereferenz_art_planmitgeoreferenz">PlanMitGeoreferenz</option>
            </select><br>
            <b>informationssystemURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_informationssystemurl"><br>
            <b>referenzName</b> [0..1]:CharacterString<br>
            <input type="text" name="xp_externereferenz_referenzname"><br>
            <b>referenzURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_referenzurl"><br>
            <b>referenzMimeType</b> [0..1]:XP_MimeTypes<br>
            <select name="xp_externereferenz_referenzmimetype">
              <option value="xp_externereferenz_referenzmimetype_applicationpdf">application/pdf</option>
              <option value="xp_externereferenz_referenzmimetype_applicationzip">application/zip</option>
              <option value="xp_externereferenz_referenzmimetype_applicationxml">application/xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationmsword">application/msword</option>
              <option value="xp_externereferenz_referenzmimetype_applicationmsexcel">application/msexcel</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcgml">application/vnd.ogc.gml</option>         
              <option value="xp_externereferenz_referenzmimetype_applicationodt">application/odt</option>
              <option value="xp_externereferenz_referenzmimetype_imagejpg">image/jpg</option>
              <option value="xp_externereferenz_referenzmimetype_imagepng">image/png</option>
              <option value="xp_externereferenz_referenzmimetype_imagetiff">image/tiff</option>
              <option value="xp_externereferenz_referenzmimetype_imageecw">image/ecw</option>
              <option value="xp_externereferenz_referenzmimetype_imagesvgxml">image/svgxml</option>
              <option value="xp_externereferenz_referenzmimetype_texthtml">text/html</option>
              <option value="xp_externereferenz_referenzmimetype_extplain">ext/plain</option>    
            </select><br>
            <b>beschreibung</b> [0..1]:CharacterString<br>
            <input type="text" name="xp_externereferenz_beschreibung"><br>
            <b>datum</b> [0..1]:Date<br>
            <input type="text" name="xp_externereferenz_datum"><br>
          </div>
        <b>refLegende</b> [0..*]:<a href="javascript:ReverseDisplay('minmaxreflegendexp_externereferenz')" class=hlink><b>XP_ExterneReferenz</b></a><br>
          <div id="minmaxreflegendexp_externereferenz" class="enumeration" style="display:none;">
            <b>georefURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_georefurl"><br>
            <b>georefMimeType</b> [0..1]:XP_MimeTypes<br>
            <select name="xp_externereferenz_georefmimetype">
              <option value="xp_externereferenz_georefmimetypes_applicationpdf">application/pdf</option>
              <option value="xp_externereferenz_georefmimetypes_applicationzip">application/zip</option>
              <option value="xp_externereferenz_georefmimetypes_applicationxml">application/xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationmsword">application/msword</option>
              <option value="xp_externereferenz_georefmimetypes_applicationmsexcel">application/msexcel</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcgml">application/vnd.ogc.gml</option>         
              <option value="xp_externereferenz_georefmimetypes_applicationodt">application/odt</option>
              <option value="xp_externereferenz_georefmimetypes_imagejpg">image/jpg</option>
              <option value="xp_externereferenz_georefmimetypes_imagepng">image/png</option>
              <option value="xp_externereferenz_georefmimetypes_imagetiff">image/tiff</option>
              <option value="xp_externereferenz_georefmimetypes_imageecw">image/ecw</option>
              <option value="xp_externereferenz_georefmimetypes_imagesvgxml">image/svgxml</option>
              <option value="xp_externereferenz_georefmimetypes_texthtml">text/html</option>
              <option value="xp_externereferenz_georefmimetypes_extplain">ext/plain</option>    
            </select><br>
            <b>art</b> [0..1]:XP_ExterneReferenzArt<br>
            <select name="xp_externereferenz_externereferenzart">
              <option value="xp_externereferenz_art_dokument">Dokument</option>
              <option value="xp_externereferenz_art_planmitgeoreferenz">PlanMitGeoreferenz</option>
            </select><br>
            <b>informationssystemURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_informationssystemurl"><br>
            <b>referenzName</b> [0..1]:CharacterString<br>
            <input type="text" name="xp_externereferenz_referenzname"><br>
            <b>referenzURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_referenzurl"><br>
            <b>referenzMimeType</b> [0..1]:XP_MimeTypes<br>
            <select name="xp_externereferenz_referenzmimetype">
              <option value="xp_externereferenz_referenzmimetype_applicationpdf">application/pdf</option>
              <option value="xp_externereferenz_referenzmimetype_applicationzip">application/zip</option>
              <option value="xp_externereferenz_referenzmimetype_applicationxml">application/xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationmsword">application/msword</option>
              <option value="xp_externereferenz_referenzmimetype_applicationmsexcel">application/msexcel</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcgml">application/vnd.ogc.gml</option>         
              <option value="xp_externereferenz_referenzmimetype_applicationodt">application/odt</option>
              <option value="xp_externereferenz_referenzmimetype_imagejpg">image/jpg</option>
              <option value="xp_externereferenz_referenzmimetype_imagepng">image/png</option>
              <option value="xp_externereferenz_referenzmimetype_imagetiff">image/tiff</option>
              <option value="xp_externereferenz_referenzmimetype_imageecw">image/ecw</option>
              <option value="xp_externereferenz_referenzmimetype_imagesvgxml">image/svgxml</option>
              <option value="xp_externereferenz_referenzmimetype_texthtml">text/html</option>
              <option value="xp_externereferenz_referenzmimetype_extplain">ext/plain</option>    
            </select><br>
            <b>beschreibung</b> [0..1]:CharacterString<br>
            <input type="text" name="xp_externereferenz_beschreibung"><br>
            <b>datum</b> [0..1]:Date<br>
            <input type="text" name="xp_externereferenz_datum"><br>
          </div>
        <b>refRechtsplan</b> [0..*]:<a href="javascript:ReverseDisplay('minmaxrefrechtsplanxp_externereferenz')" class=hlink><b>XP_ExterneReferenz</b></a><br>
          <div id="minmaxrefrechtsplanxp_externereferenz" class="enumeration" style="display:none;">
            <b>georefURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_georefurl"><br>
            <b>georefMimeType</b> [0..1]:XP_MimeTypes<br>
            <select name="xp_externereferenz_georefmimetype">
              <option value="xp_externereferenz_georefmimetypes_applicationpdf">application/pdf</option>
              <option value="xp_externereferenz_georefmimetypes_applicationzip">application/zip</option>
              <option value="xp_externereferenz_georefmimetypes_applicationxml">application/xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationmsword">application/msword</option>
              <option value="xp_externereferenz_georefmimetypes_applicationmsexcel">application/msexcel</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcgml">application/vnd.ogc.gml</option>         
              <option value="xp_externereferenz_georefmimetypes_applicationodt">application/odt</option>
              <option value="xp_externereferenz_georefmimetypes_imagejpg">image/jpg</option>
              <option value="xp_externereferenz_georefmimetypes_imagepng">image/png</option>
              <option value="xp_externereferenz_georefmimetypes_imagetiff">image/tiff</option>
              <option value="xp_externereferenz_georefmimetypes_imageecw">image/ecw</option>
              <option value="xp_externereferenz_georefmimetypes_imagesvgxml">image/svgxml</option>
              <option value="xp_externereferenz_georefmimetypes_texthtml">text/html</option>
              <option value="xp_externereferenz_georefmimetypes_extplain">ext/plain</option>    
            </select><br>
            <b>art</b> [0..1]:XP_ExterneReferenzArt<br>
            <select name="xp_externereferenz_externereferenzart">
              <option value="xp_externereferenz_art_dokument">Dokument</option>
              <option value="xp_externereferenz_art_planmitgeoreferenz">PlanMitGeoreferenz</option>
            </select><br>
            <b>informationssystemURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_informationssystemurl"><br>
            <b>referenzName</b> [0..1]:CharacterString<br>
            <input type="text" name="xp_externereferenz_referenzname"><br>
            <b>referenzURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_referenzurl"><br>
            <b>referenzMimeType</b> [0..1]:XP_MimeTypes<br>
            <select name="xp_externereferenz_referenzmimetype">
              <option value="xp_externereferenz_referenzmimetype_applicationpdf">application/pdf</option>
              <option value="xp_externereferenz_referenzmimetype_applicationzip">application/zip</option>
              <option value="xp_externereferenz_referenzmimetype_applicationxml">application/xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationmsword">application/msword</option>
              <option value="xp_externereferenz_referenzmimetype_applicationmsexcel">application/msexcel</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcgml">application/vnd.ogc.gml</option>         
              <option value="xp_externereferenz_referenzmimetype_applicationodt">application/odt</option>
              <option value="xp_externereferenz_referenzmimetype_imagejpg">image/jpg</option>
              <option value="xp_externereferenz_referenzmimetype_imagepng">image/png</option>
              <option value="xp_externereferenz_referenzmimetype_imagetiff">image/tiff</option>
              <option value="xp_externereferenz_referenzmimetype_imageecw">image/ecw</option>
              <option value="xp_externereferenz_referenzmimetype_imagesvgxml">image/svgxml</option>
              <option value="xp_externereferenz_referenzmimetype_texthtml">text/html</option>
              <option value="xp_externereferenz_referenzmimetype_extplain">ext/plain</option>    
            </select><br>
            <b>beschreibung</b> [0..1]:CharacterString<br>
            <input type="text" name="xp_externereferenz_beschreibung"><br>
            <b>datum</b> [0..1]:Date<br>
            <input type="text" name="xp_externereferenz_datum"><br>
          </div>
        <b>refPlangrundlage</b> [0..*]:<a href="javascript:ReverseDisplay('minmaxrefplangrundlagexp_externereferenz')" class=hlink><b>XP_ExterneReferenz</b></a><br>
          <div id="minmaxrefplangrundlagexp_externereferenz" class="enumeration" style="display:none;">
            <b>georefURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_georefurl"><br>
            <b>georefMimeType</b> [0..1]:XP_MimeTypes<br>
            <select name="xp_externereferenz_georefmimetype">
              <option value="xp_externereferenz_georefmimetypes_applicationpdf">application/pdf</option>
              <option value="xp_externereferenz_georefmimetypes_applicationzip">application/zip</option>
              <option value="xp_externereferenz_georefmimetypes_applicationxml">application/xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationmsword">application/msword</option>
              <option value="xp_externereferenz_georefmimetypes_applicationmsexcel">application/msexcel</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
              <option value="xp_externereferenz_georefmimetypes_applicationvndogcgml">application/vnd.ogc.gml</option>         
              <option value="xp_externereferenz_georefmimetypes_applicationodt">application/odt</option>
              <option value="xp_externereferenz_georefmimetypes_imagejpg">image/jpg</option>
              <option value="xp_externereferenz_georefmimetypes_imagepng">image/png</option>
              <option value="xp_externereferenz_georefmimetypes_imagetiff">image/tiff</option>
              <option value="xp_externereferenz_georefmimetypes_imageecw">image/ecw</option>
              <option value="xp_externereferenz_georefmimetypes_imagesvgxml">image/svgxml</option>
              <option value="xp_externereferenz_georefmimetypes_texthtml">text/html</option>
              <option value="xp_externereferenz_georefmimetypes_extplain">ext/plain</option>    
            </select><br>
            <b>art</b> [0..1]:XP_ExterneReferenzArt<br>
            <select name="xp_externereferenz_externereferenzart">
              <option value="xp_externereferenz_art_dokument">Dokument</option>
              <option value="xp_externereferenz_art_planmitgeoreferenz">PlanMitGeoreferenz</option>
            </select><br>
            <b>informationssystemURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_informationssystemurl"><br>
            <b>referenzName</b> [0..1]:CharacterString<br>
            <input type="text" name="xp_externereferenz_referenzname"><br>
            <b>referenzURL</b> [0..1]:URI<br>
            <input type="text" name="xp_externereferenz_referenzurl"><br>
            <b>referenzMimeType</b> [0..1]:XP_MimeTypes<br>
            <select name="xp_externereferenz_referenzmimetype">
              <option value="xp_externereferenz_referenzmimetype_applicationpdf">application/pdf</option>
              <option value="xp_externereferenz_referenzmimetype_applicationzip">application/zip</option>
              <option value="xp_externereferenz_referenzmimetype_applicationxml">application/xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationmsword">application/msword</option>
              <option value="xp_externereferenz_referenzmimetype_applicationmsexcel">application/msexcel</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
              <option value="xp_externereferenz_referenzmimetype_applicationvndogcgml">application/vnd.ogc.gml</option>         
              <option value="xp_externereferenz_referenzmimetype_applicationodt">application/odt</option>
              <option value="xp_externereferenz_referenzmimetype_imagejpg">image/jpg</option>
              <option value="xp_externereferenz_referenzmimetype_imagepng">image/png</option>
              <option value="xp_externereferenz_referenzmimetype_imagetiff">image/tiff</option>
              <option value="xp_externereferenz_referenzmimetype_imageecw">image/ecw</option>
              <option value="xp_externereferenz_referenzmimetype_imagesvgxml">image/svgxml</option>
              <option value="xp_externereferenz_referenzmimetype_texthtml">text/html</option>
              <option value="xp_externereferenz_referenzmimetype_extplain">ext/plain</option>    
            </select><br>
            <b>beschreibung</b> [0..1]:CharacterString<br>
            <input type="text" name="xp_externereferenz_beschreibung"><br>
            <b>datum</b> [0..1]:Date<br>
            <input type="text" name="xp_externereferenz_datum"><br>
          </div>
      </div>
      <input type="submit" name="xpplan-submit" value="XP_Plan Daten eingeben!">
    </form>
  </div>         
  <?php
}
 
########RP_PLAN
########RP_PLAN
########RP_PLAN

    function konverteingaberpplan(){
    ?>
      <div class="featuretype">
        <a href="javascript:ReverseDisplay('minmaxrpplan')" class=hlink><h2>RP_Plan</h2></a>
        <form action ="index.php?go=show_konvertierungform" method="post">
          <div id="minmaxrpplan">
            <b>bundesland</b> [1..*]:XP_Bundeslaender<br>
              <select name="rp_plan_bundesland" required>
                <option value="rp_plan_bundeslaender_bb1000">BB = 1000</option>
                <option value="rp_plan_bundeslaender_be1100">BE = 1100</option>
                <option value="rp_plan_bundeslaender_bw1200">BW = 1200</option>
                <option value="rp_plan_bundeslaender_by1300">BY = 1300</option>
                <option value="rp_plan_bundeslaender_hb1400">HB = 1400</option>
                <option value="rp_plan_bundeslaender_he1500">HE = 1500</option>
                <option value="rp_plan_bundeslaender_hh1600">HH = 1600</option>
                <option value="rp_plan_bundeslaender_mv1700">MV = 1700</option>         
                <option value="rp_plan_bundeslaender_ni1800">NI = 1800</option>
                <option value="rp_plan_bundeslaender_nw1900">NW = 1900</option>
                <option value="rp_plan_bundeslaender_rp2000">RP = 2000</option>
                <option value="rp_plan_bundeslaender_sh2100">SH = 2100</option>
                <option value="rp_plan_bundeslaender_sl2200">SL = 2200</option>
                <option value="rp_plan_bundeslaender_sn2300">SN = 2300</option>
                <option value="rp_plan_bundeslaender_st2400">ST = 2400</option>
                <option value="rp_plan_bundeslaender_th2500">TH = 2500</option>
                <option value="rp_plan_bundeslaender_bund3000">Bund = 3000</option>
              </select><br>
              <!--
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_bb1000"> BB=1000<br>
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_be1100"> BE=1100<br>
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_bw1200"> BW=1200<br>
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_by1300"> BY=1300<br>
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_hb1400"> HB=1400<br>
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_he1500"> HE=1500<br>
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_hh1600"> HH=1600<br>
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_mv1700"> MV=1700<br>
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_ni1800"> MV=1800<br>
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_nw1900"> NW=1900<br>
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_rp2000"> RP=2000<br>
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_sh2100"> SH=2100<br>
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_SL2200"> SL=2200<br>
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_sn2300"> SN=2300<br>
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_st2400"> ST=2400<br>
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_th2500"> TH=2500<br>
              <input type ="checkbox" name="xp_bundeslaender" value ="rp_plan_bundeslaender_bund3000"> Bund=3000<br>
              -->
            <b>planArt</b> [0..1]:RP_Art<br>
              <select name="rp_plan_planart">
                <option value="rp_plan_planart_regionalplan1000">Regionalplan = 1000</option>
                <option value="rp_plan_planart_sachlicherteilplanregionalebene2000">SachlicherTeilplanRegionalebene = 2000</option>
                <option value="rp_plan_planart_sachlicherteilplanlandesebene2001">SachlicherTeilplanLandesebene = 2001</option>
                <option value="rp_plan_planart_braunkohlenplan3000">Braunkohlenplan = 3000</option>
                <option value="rp_plan_planart_bundeslaender_landesweiterraumordnungsplan4000">LandesweiterRaumordnungsplan = 4000</option>
                <option value="rp_plan_planart_standortkonzeptbund5000">StandortkonzeptBund = 5000</option>
                <option value="rp_plan_planart_awzplan5001">AWZPlan = 5001</option>
                <option value="rp_plan_planart_raeumlicherteilplan6000">RaeumlicherTeilplan = 6000</option>         
                <option value="rp_plan_planart_sonstiges9999">Sonstiges = 9999</option>
              </select><br>
            <b>sonstPlanArt</b> [0..1]:RP_SonstPlanArt<br>
              <select name="'rp_plan_sonstplanart">
              </select><br>
            <b>planungsregion</b> [0..1]:Integer<br>
              <input type="number" name="rp_plan_planungsregion" value="<?php if (!empty($_SESSION["rp_plan_planungsregion"])) {echo $_SESSION["rp_plan_planungsregion"];}?>"><br>
            <b>teilabschnitt</b> [0..1]:Integer<br>
              <input type="number" name="rp_plan_teilabschnitt" value="<?php if (!empty($_SESSION["rp_plan_teilabschnitt"])) {echo $_SESSION["rp_plan_teilabschnitt"];}?>"><br>
            <b>rechtsstand</b> [0..1]:RP_Rechtsstand<br>
              <select name="rp_plan_rechtsstand">
                <option value="rp_plan_rechtsstand_aufstellungsbeschluss1000">Aufstellungsbeschluss = 1000</option>
                <option value="rp_plan_rechtsstand_entwurf2000">Entwurf = 2000</option>
                <option value="rp_plan_rechtsstand_entwurfgenehmigt2001">EntwurfGenehmigt = 2001</option>
                <option value="rp_plan_rechtsstand_entwurfgeaendert2002">EntwurfGeaendert = 2002</option>
                <option value="rp_plan_rechtsstand_entwurfaufgegeben2003">EntwurfAufgegeben = 2003</option>
                <option value="rp_plan_rechtsstand_entwurfruht2004">EntwurfRuht = 2004</option>
                <option value="rp_plan_rechtsstand_plan3000">Plan = 3000</option>
                <option value="rp_plan_rechtsstand_inkraftgetreten4000">Inkraftgetreten = 4000</option>         
                <option value="rp_plan_rechtsstand_allgemeineplanungsabsichten5000">allgemeinePlanungsabsichten = 5000</option>
                <option value="rp_plan_rechtsstand_ausserkraft6000">Ausserkraft = 6000</option>
                <option value="rp_plan_rechtsstand_planungueltig7000">PlanUngueltig = 7000</option>
              </select><br>
            <b>status</b> [0..1]:RP_Status<br>
              <select name="rp_plan_status">
              </select><br>
            <b>aufstellungsbeschlussDatum</b> [0..1]:Datum<br>
              <input type="text" name="rp_plan_aufstellungsbeschlussdatum" value="<?php if (!empty($_SESSION["rp_plan_aufstellungsbeschlussdatum"])) {echo $_SESSION["rp_plan_aufstellungsbeschlussdatum"];}?>"><br>
            <b>auslegungsStartDatum</b> [0..1]:Datum<br>
              <input type="text" name="rp_plan_auslegungstartdatum" value="<?php if (!empty($_SESSION["rp_plan_aufstellungstartdatum"])) {echo $_SESSION["rp_plan_aufstellungstartdatum"];}?>"><br>
            <b>auslegungsEndDatum</b> [0..1]:Datum<br>
              <input type="text" name="rp_plan_auslegungenddatum" value="<?php if (!empty($_SESSION["rp_plan_aufstellungenddatum"])) {echo $_SESSION["rp_plan_aufstellungenddatum"];}?>"><br>
            <b>traegerbeteiligungsStartDatum</b> [0..1]:Datum<br>
              <input type="text" name="rp_plan_traegerbeteiligungsstartdatum" value="<?php if (!empty($_SESSION["rp_plan_traegerbeteiligungsstartdatum"])) {echo $_SESSION["rp_plan_traegerbeteiligungsstartdatum"];}?>"><br>
            <b>traegerbeteiligungsEndDatum</b> [0..1]:Datum<br>
              <input type="text" name="rp_plan_traegerbeteiligungsenddatum" value="<?php if (!empty($_SESSION["rp_plan_traegerbeteiligungsenddatum"])) {echo $_SESSION["rp_plan_traegerbeteiligungsenddatum"];}?>"><br>
            <b>aenderungenBisDatum</b> [0..1]:Datum<br>
              <input type="text" name="rp_plan_aenderungenbisdatum" value="<?php if (!empty($_SESSION["rp_plan_aenderungenbisdatum"])) {echo $_SESSION["rp_plan_aenderungenbisdatum"];}?>"><br>
            <b>entwurfsbeschlussDatum</b> [0..1]:Datum<br>
              <input type="text" name="rp_plan_entwurfsbeschlussdatum" value="<?php if (!empty($_SESSION["rp_plan_entwurfsbeschlussdatum"])) {echo $_SESSION["rp_plan_entwurfsbeschlussdatum"];}?>"><br>
            <b>planbeschlussDatum</b> [0..1]:Datum<br>
              <input type="text" name="rp_plan_planbeschlussdatum"value="<?php if (!empty($_SESSION["rp_plan_planbeschlussdatum"])) {echo $_SESSION["rp_plan_planbeschlussdatum"];}?>"><br>
            <b>datumDesInkrafttretens</b> [0..1]:Datum<br>
              <input type="text" name="rp_plan_datumdesinkrafttretens" value="<?php if (!empty($_SESSION["rp_plan_datumdesinkrafttretens"])) {echo $_SESSION["rp_plan_datumdesinkrafttretens"];}?>"><br>
            <b>refUmweltbericht</b> [0..1]:<a href="javascript:ReverseDisplay('minmaxrefumweltberichtxp_externereferenz')" class=hlink><b>XP_ExterneReferenz</b></a><br>
              <div id="minmaxrefumweltberichtxp_externereferenz" class="enumeration" style="display:none;">
                <b>georefURL</b> [0..1]:URI<br>
                <input type="text" name="xp_externereferenz_georefurl"><br>
                <b>georefMimeType</b> [0..1]:XP_MimeTypes<br>
                <select name="xp_externereferenz_georefmimetype">
                  <option value="xp_externereferenz_georefmimetypes_applicationpdf">application/pdf</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationzip">application/zip</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationxml">application/xml</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationmsword">application/msword</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationmsexcel">application/msexcel</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationvndogcgml">application/vnd.ogc.gml</option>         
                  <option value="xp_externereferenz_georefmimetypes_applicationodt">application/odt</option>
                  <option value="xp_externereferenz_georefmimetypes_imagejpg">image/jpg</option>
                  <option value="xp_externereferenz_georefmimetypes_imagepng">image/png</option>
                  <option value="xp_externereferenz_georefmimetypes_imagetiff">image/tiff</option>
                  <option value="xp_externereferenz_georefmimetypes_imageecw">image/ecw</option>
                  <option value="xp_externereferenz_georefmimetypes_imagesvgxml">image/svgxml</option>
                  <option value="xp_externereferenz_georefmimetypes_texthtml">text/html</option>
                  <option value="xp_externereferenz_georefmimetypes_extplain">ext/plain</option>    
                </select><br>
                <b>art</b> [0..1]:XP_ExterneReferenzArt<br>
                <select name="xp_externereferenz_externereferenzart">
                  <option value="xp_externereferenz_art_dokument">Dokument</option>
                  <option value="xp_externereferenz_art_planmitgeoreferenz">PlanMitGeoreferenz</option>
                </select><br>
                <b>informationssystemURL</b> [0..1]:URI<br>
                <input type="text" name="xp_externereferenz_informationssystemurl"><br>
                <b>referenzName</b> [0..1]:CharacterString<br>
                <input type="text" name="xp_externereferenz_referenzname"><br>
                <b>referenzURL</b> [0..1]:URI<br>
                <input type="text" name="xp_externereferenz_referenzurl"><br>
                <b>referenzMimeType</b> [0..1]:XP_MimeTypes<br>
                <select name="xp_externereferenz_referenzmimetype">
                  <option value="xp_externereferenz_referenzmimetype_applicationpdf">application/pdf</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationzip">application/zip</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationxml">application/xml</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationmsword">application/msword</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationmsexcel">application/msexcel</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationvndogcgml">application/vnd.ogc.gml</option>         
                  <option value="xp_externereferenz_referenzmimetype_applicationodt">application/odt</option>
                  <option value="xp_externereferenz_referenzmimetype_imagejpg">image/jpg</option>
                  <option value="xp_externereferenz_referenzmimetype_imagepng">image/png</option>
                  <option value="xp_externereferenz_referenzmimetype_imagetiff">image/tiff</option>
                  <option value="xp_externereferenz_referenzmimetype_imageecw">image/ecw</option>
                  <option value="xp_externereferenz_referenzmimetype_imagesvgxml">image/svgxml</option>
                  <option value="xp_externereferenz_referenzmimetype_texthtml">text/html</option>
                  <option value="xp_externereferenz_referenzmimetype_extplain">ext/plain</option>    
                </select><br>
                <b>beschreibung</b> [0..1]:CharacterString<br>
                <input type="text" name="xp_externereferenz_beschreibung"><br>
                <b>datum</b> [0..1]:Date<br>
                <input type="text" name="xp_externereferenz_datum"><br>
              </div>
            <b>refSatzung</b> [0..1]:<a href="javascript:ReverseDisplay('minmaxrefsatzungxp_externereferenz')" class=hlink><b>XP_ExterneReferenz</b></a><br>
              <div id="minmaxrefsatzungxp_externereferenz" class="enumeration" style="display:none;">
                <b>georefURL</b> [0..1]:URI<br>
                <input type="text" name="xp_externereferenz_georefurl"><br>
                <b>georefMimeType</b> [0..1]:XP_MimeTypes<br>
                <select name="xp_externereferenz_georefmimetype">
                  <option value="xp_externereferenz_georefmimetypes_applicationpdf">application/pdf</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationzip">application/zip</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationxml">application/xml</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationmsword">application/msword</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationmsexcel">application/msexcel</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationvndogcgml">application/vnd.ogc.gml</option>         
                  <option value="xp_externereferenz_georefmimetypes_applicationodt">application/odt</option>
                  <option value="xp_externereferenz_georefmimetypes_imagejpg">image/jpg</option>
                  <option value="xp_externereferenz_georefmimetypes_imagepng">image/png</option>
                  <option value="xp_externereferenz_georefmimetypes_imagetiff">image/tiff</option>
                  <option value="xp_externereferenz_georefmimetypes_imageecw">image/ecw</option>
                  <option value="xp_externereferenz_georefmimetypes_imagesvgxml">image/svgxml</option>
                  <option value="xp_externereferenz_georefmimetypes_texthtml">text/html</option>
                  <option value="xp_externereferenz_georefmimetypes_extplain">ext/plain</option>    
                </select><br>
                <b>art</b> [0..1]:XP_ExterneReferenzArt<br>
                <select name="xp_externereferenz_externereferenzart">
                  <option value="xp_externereferenz_art_dokument">Dokument</option>
                  <option value="xp_externereferenz_art_planmitgeoreferenz">PlanMitGeoreferenz</option>
                </select><br>
                <b>informationssystemURL</b> [0..1]:URI<br>
                <input type="text" name="xp_externereferenz_informationssystemurl"><br>
                <b>referenzName</b> [0..1]:CharacterString<br>
                <input type="text" name="xp_externereferenz_referenzname"><br>
                <b>referenzURL</b> [0..1]:URI<br>
                <input type="text" name="xp_externereferenz_referenzurl"><br>
                <b>referenzMimeType</b> [0..1]:XP_MimeTypes<br>
                <select name="xp_externereferenz_referenzmimetype">
                  <option value="xp_externereferenz_referenzmimetype_applicationpdf">application/pdf</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationzip">application/zip</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationxml">application/xml</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationmsword">application/msword</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationmsexcel">application/msexcel</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationvndogcgml">application/vnd.ogc.gml</option>         
                  <option value="xp_externereferenz_referenzmimetype_applicationodt">application/odt</option>
                  <option value="xp_externereferenz_referenzmimetype_imagejpg">image/jpg</option>
                  <option value="xp_externereferenz_referenzmimetype_imagepng">image/png</option>
                  <option value="xp_externereferenz_referenzmimetype_imagetiff">image/tiff</option>
                  <option value="xp_externereferenz_referenzmimetype_imageecw">image/ecw</option>
                  <option value="xp_externereferenz_referenzmimetype_imagesvgxml">image/svgxml</option>
                  <option value="xp_externereferenz_referenzmimetype_texthtml">text/html</option>
                  <option value="xp_externereferenz_referenzmimetype_extplain">ext/plain</option>    
                </select><br>
                <b>beschreibung</b> [0..1]:CharacterString<br>
                <input type="text" name="xp_externereferenz_beschreibung"><br>
                <b>datum</b> [0..1]:Date<br>
                <input type="text" name="xp_externereferenz_datum"><br>
              </div>
            <b>typ</b> [0..1]:RP_Typ<br>
              <select name="rp_plan_typ">
                <option value="rp_plan_typ_aenderung1000">Aenderung = 1000</option>
                <option value="rp_plan_typ_teilfortschreibung2000">Teilfortschreibung = 2000</option>
                <option value="rp_plan_typ_neuaufstellung3000">Neuaufstellung = 3000</option>
                <option value="rp_plan_typ_gesamtfortschreibung4000">Gesamtfortschreibung = 4000</option>
              </select><br> 
            <b>refKarten</b> [0..1]:<a href="javascript:ReverseDisplay('minmaxrefkartenxp_externereferenz')" class=hlink><b>XP_ExterneReferenz</b></a><br>
              <div id="minmaxrefkartenxp_externereferenz" class="enumeration" style="display:none;">
                <b>georefURL</b> [0..1]:URI<br>
                <input type="text" name="xp_externereferenz_georefurl"><br>
                <b>georefMimeType</b> [0..1]:XP_MimeTypes<br>
                <select name="xp_externereferenz_georefmimetype">
                  <option value="xp_externereferenz_georefmimetypes_applicationpdf">application/pdf</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationzip">application/zip</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationxml">application/xml</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationmsword">application/msword</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationmsexcel">application/msexcel</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
                  <option value="xp_externereferenz_georefmimetypes_applicationvndogcgml">application/vnd.ogc.gml</option>         
                  <option value="xp_externereferenz_georefmimetypes_applicationodt">application/odt</option>
                  <option value="xp_externereferenz_georefmimetypes_imagejpg">image/jpg</option>
                  <option value="xp_externereferenz_georefmimetypes_imagepng">image/png</option>
                  <option value="xp_externereferenz_georefmimetypes_imagetiff">image/tiff</option>
                  <option value="xp_externereferenz_georefmimetypes_imageecw">image/ecw</option>
                  <option value="xp_externereferenz_georefmimetypes_imagesvgxml">image/svgxml</option>
                  <option value="xp_externereferenz_georefmimetypes_texthtml">text/html</option>
                  <option value="xp_externereferenz_georefmimetypes_extplain">ext/plain</option>    
                </select><br>
                <b>art</b> [0..1]:XP_ExterneReferenzArt<br>
                <select name="xp_externereferenz_externereferenzart">
                  <option value="xp_externereferenz_art_dokument">Dokument</option>
                  <option value="xp_externereferenz_art_planmitgeoreferenz">PlanMitGeoreferenz</option>
                </select><br>
                <b>informationssystemURL</b> [0..1]:URI<br>
                <input type="text" name="xp_externereferenz_informationssystemurl"><br>
                <b>referenzName</b> [0..1]:CharacterString<br>
                <input type="text" name="xp_externereferenz_referenzname"><br>
                <b>referenzURL</b> [0..1]:URI<br>
                <input type="text" name="xp_externereferenz_referenzurl"><br>
                <b>referenzMimeType</b> [0..1]:XP_MimeTypes<br>
                <select name="xp_externereferenz_referenzmimetype">
                  <option value="xp_externereferenz_referenzmimetype_applicationpdf">application/pdf</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationzip">application/zip</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationxml">application/xml</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationmsword">application/msword</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationmsexcel">application/msexcel</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
                  <option value="xp_externereferenz_referenzmimetype_applicationvndogcgml">application/vnd.ogc.gml</option>         
                  <option value="xp_externereferenz_referenzmimetype_applicationodt">application/odt</option>
                  <option value="xp_externereferenz_referenzmimetype_imagejpg">image/jpg</option>
                  <option value="xp_externereferenz_referenzmimetype_imagepng">image/png</option>
                  <option value="xp_externereferenz_referenzmimetype_imagetiff">image/tiff</option>
                  <option value="xp_externereferenz_referenzmimetype_imageecw">image/ecw</option>
                  <option value="xp_externereferenz_referenzmimetype_imagesvgxml">image/svgxml</option>
                  <option value="xp_externereferenz_referenzmimetype_texthtml">text/html</option>
                  <option value="xp_externereferenz_referenzmimetype_extplain">ext/plain</option>    
                </select><br>
                <b>beschreibung</b> [0..1]:CharacterString<br>
                <input type="text" name="xp_externereferenz_beschreibung"><br>
                <b>datum</b> [0..1]:Date<br>
                <input type="text" name="xp_externereferenz_datum"><br>
              </div>
            </div>
          <input type="submit" name="rpplan-submit" value="RP_Plan Daten eingeben!">
          </form>
      </div>
    <?php
    }

###### XP_TEXTABSCHNITT
###### XP_TEXTABSCHNITT
###### XP_TEXTABSCHNITT

function konverteingabexptextabschnitt(){
  ?>
    <div class="featuretypeableitend">
      <a href="javascript:ReverseDisplay('minmaxxptextabschnitt')" class=hlink><h2>XP_Textabschnitt</h2></a>    
      <form action ="index.php?go=show_konvertierungform" method="post">
        <div id="minmaxxptextabschnitt">
          <b>schluessel</b> [0..1]:CharacterString<br>
          <input type="text" name="xp_textabschnitt_schluessel"><br>
          <b>gesetzlicheGrundlage</b> [0..1]:CharacterString<br>
          <input type="text" name="xp_textabschnitt_gesetzlichegrundlage"><br>
          <b>text</b> [0..1]:CharacterString<br>
          <input type="text" name="xp_textabschnitt_text"><br>
          <b>refText</b> [0..1]:<a href="javascript:ReverseDisplay('minmaxreftextxp_externereferenz')" class=hlink><b>XP_ExterneReferenz</b></a><br>
            <div id="minmaxreftextxp_externereferenz" class="enumeration" style="display:none;">
              <b>georefURL</b> [0..1]:URI<br>
              <input type="text" name="xp_externereferenz_georefurl"><br>
              <b>georefMimeType</b> [0..1]:XP_MimeTypes<br>
              <select name="xp_externereferenz_georefmimetype">
                <option value="xp_externereferenz_georefmimetypes_applicationpdf">application/pdf</option>
                <option value="xp_externereferenz_georefmimetypes_applicationzip">application/zip</option>
                <option value="xp_externereferenz_georefmimetypes_applicationxml">application/xml</option>
                <option value="xp_externereferenz_georefmimetypes_applicationmsword">application/msword</option>
                <option value="xp_externereferenz_georefmimetypes_applicationmsexcel">application/msexcel</option>
                <option value="xp_externereferenz_georefmimetypes_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
                <option value="xp_externereferenz_georefmimetypes_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
                <option value="xp_externereferenz_georefmimetypes_applicationvndogcgml">application/vnd.ogc.gml</option>         
                <option value="xp_externereferenz_georefmimetypes_applicationodt">application/odt</option>
                <option value="xp_externereferenz_georefmimetypes_imagejpg">image/jpg</option>
                <option value="xp_externereferenz_georefmimetypes_imagepng">image/png</option>
                <option value="xp_externereferenz_georefmimetypes_imagetiff">image/tiff</option>
                <option value="xp_externereferenz_georefmimetypes_imageecw">image/ecw</option>
                <option value="xp_externereferenz_georefmimetypes_imagesvgxml">image/svgxml</option>
                <option value="xp_externereferenz_georefmimetypes_texthtml">text/html</option>
                <option value="xp_externereferenz_georefmimetypes_extplain">ext/plain</option>    
              </select><br>
              <b>art</b> [0..1]:XP_ExterneReferenzArt<br>
              <select name="xp_externereferenz_externereferenzart">
                <option value="xp_externereferenz_art_dokument">Dokument</option>
                <option value="xp_externereferenz_art_planmitgeoreferenz">PlanMitGeoreferenz</option>
              </select><br>
              <b>informationssystemURL</b> [0..1]:URI<br>
              <input type="text" name="xp_externereferenz_informationssystemurl"><br>
              <b>referenzName</b> [0..1]:CharacterString<br>
              <input type="text" name="xp_externereferenz_referenzname"><br>
              <b>referenzURL</b> [0..1]:URI<br>
              <input type="text" name="xp_externereferenz_referenzurl"><br>
              <b>referenzMimeType</b> [0..1]:XP_MimeTypes<br>
              <select name="xp_externereferenz_referenzmimetype">
                <option value="xp_externereferenz_referenzmimetype_applicationpdf">application/pdf</option>
                <option value="xp_externereferenz_referenzmimetype_applicationzip">application/zip</option>
                <option value="xp_externereferenz_referenzmimetype_applicationxml">application/xml</option>
                <option value="xp_externereferenz_referenzmimetype_applicationmsword">application/msword</option>
                <option value="xp_externereferenz_referenzmimetype_applicationmsexcel">application/msexcel</option>
                <option value="xp_externereferenz_referenzmimetype_applicationvndogcsldxml">application/vnd.ogc.sld+xml</option>
                <option value="xp_externereferenz_referenzmimetype_applicationvndogcwmsxml">application/vnd.ogc.wms_xml</option>
                <option value="xp_externereferenz_referenzmimetype_applicationvndogcgml">application/vnd.ogc.gml</option>         
                <option value="xp_externereferenz_referenzmimetype_applicationodt">application/odt</option>
                <option value="xp_externereferenz_referenzmimetype_imagejpg">image/jpg</option>
                <option value="xp_externereferenz_referenzmimetype_imagepng">image/png</option>
                <option value="xp_externereferenz_referenzmimetype_imagetiff">image/tiff</option>
                <option value="xp_externereferenz_referenzmimetype_imageecw">image/ecw</option>
                <option value="xp_externereferenz_referenzmimetype_imagesvgxml">image/svgxml</option>
                <option value="xp_externereferenz_referenzmimetype_texthtml">text/html</option>
                <option value="xp_externereferenz_referenzmimetype_extplain">ext/plain</option>    
              </select><br>
              <b>beschreibung</b> [0..1]:CharacterString<br>
              <input type="text" name="xp_externereferenz_beschreibung"><br>
              <b>datum</b> [0..1]:Date<br>
              <input type="text" name="xp_externereferenz_datum"><br>
            </div>
          </div>
      <input type="submit" name="xptextabschnitt-submit" value="XP_Textabschnitt Daten eingeben!">
      </form>
    </div>
  <?php
}

###### RP_TEXTABSCHNITT
###### RP_TEXTABSCHNITT
###### RP_TEXTABSCHNITT

function konverteingaberptextabschnitt(){
  ?>
    <div class="featuretype">
      <a href="javascript:ReverseDisplay('minmaxrptextabschnitt')" class=hlink><h2>RP_Textabschnitt</h2></a>    
        <form action ="index.php?go=show_konvertierungform" method="post">
        <div id="minmaxrptextabschnitt">
          <b>rechtscharakter</b> :RP_Rechtscharakter<br>
            <select name="rp_textabschnitt_rechtscharakter" required>
            <option value="zielderraumordnung1000">ZielDerRaumordnung = 1000</option>
            <option value="grundsatzderraumordnung2000">GrundsatzDerRaumordnung = 2000</option>
            <option value="nachrichtlicheuebernahme3000">NachrichtlicheUebernahme = 3000</option>
            <option value="nachrichtlicheuebernahmeziel4000">NachrichtlicheUebernahmeZiel = 4000</option>
            <option value="nachrichtlicheuebernahmegrundsatz5000">NachrichtlicheUebernahmeGrundsatz = 5000</option>
            <option value="nurinformationsgehalt6000">nurInformationsgehalt = 6000</option>
            <option value="textlichesziel7000">textlichesZiel = 7000</option>
            <option value="zielundgrundsatz8000">ZielundGrundsatz = 8000</option>
            <option value="vorschlag000">Vorschlag = 9000</option>
            </select><br>
        </div>
      <input type="submit" name="rptextabschnitt-submit" value="RP_Textabschnitt Daten eingeben!">  
      </form>
    </div>
  <?php
}

###### XP_BEREICH
###### XP_BEREICH
###### XP_BEREICH

function konverteingabexpbereich(){
  ?>
    <div class="featuretypeableitend">
      <a href="javascript:ReverseDisplay('minmaxxpbereich')" class=hlink><h2>XP_Bereich</h2></a>    
        <form action ="index.php?go=show_konvertierungform" method="post">
        <div id="minmaxxpbereich">
          <b>nummer</b> :integer<br>
          <input type="number" name="xp_bereich_nummer" placeholder="0" required></br>
          <b>name</b> [0..1]:CharacterString<br>
          <input type="text" name="xp_bereich_name"></br>
          <b>bedeutung</b> [0..1]:XP_BedeutungenBereich<br>
          <select name="xp_bereich_bedeutungenbereich">
            <option value="aenderungsbereich1000">Aenderungsbereich = 1000</option>
            <option value="ergaenzungsbereich1500">Ergaenzungsbereich = 1500</option>
            <option value="teilbereich1600">Teilbereich = 1600</option>
            <option value="Gesamtbereich1650">Gesamtbereich = 1650</option>
            <option value="Eingriffsbereich1700">Eingriffsbereich = 1700</option>
            <option value="ausgleichsbereich1800">Ausgleichsbereich = 1800</option>
            <option value="nebenzeichnung2000">Nebenzeichnung = 2000</option>
            <option value="variante2500">Variante = 2500</option>
            <option value="vertikalegliederung3000">VertikaleGliederung = 3000</option>
            <option value="erstnutzung3500">Erstnutzung = 3500</option>
            <option value="folgenutzung">Folgenutzung = 4000</option>
            <option value="sonstiges9999">Sonstiges = 9999</option>
            </select><br>
          <b>detaillierteBedeutungen</b> [0..1]CharacterString<br>
          <input type="text" name="xp_bereich_detailliertebedeutungen"></br>
          <b>erstellungsMasstab</b> [0..1]Integer<br>
          <input type="number" name="xp_bereich_erstellungsmassstab"></br>
          <b>geltungsbereich</b> [0..1]:<a href="javascript:ReverseDisplay('minmaxgeltungsbereichxp_flaechengeometrie')" class=hlink><b>XP_Flaechengeometrie</b></a><br>
            <div id="minmaxgeltungsbereichxp_flaechengeometrie" class="enumeration" style="display:none;">
              <b>Flaeche</b> :GM_Surface<br>
              <input type="text" name="xp_flaechengeometrie_gmsurface"><br>
              <b>MultiFlaeche</b> :GM_MultiSurface<br>
              <input type="text" name="xp_flaechengeometrie_gmsurface"><br>
            </div>
        </div>
      <input type="submit" name="xpbereich-submit" value="XP_Bereich Daten eingeben!">
      </form>
    </div>
  <?php
}

###### RP_BEREICH
###### RP_BEREICH
###### RP_BEREICH

function konverteingaberpbereich(){
  ?>
    <div class="featuretype">
      <a href="javascript:ReverseDisplay('minmaxrpbereich')" class=hlink><h2>RP_Bereich</h2></a>    
        <form action ="index.php?go=show_konvertierungform" method="post">
          <div id="minmaxrpbereich">
            <b>versionBROG</b> [0..1]:Date<br>
            <input type="text" name="rp_bereich_versionbrog"><br>
            <b>versionBROGText</b> [0..1]:CharacterString<br>
            <input type="text" name="rp_bereich_versionbrogtext"><br>
            <b>versionLPLG</b> [0..1]:Date<br>
            <input type="text" name="rp_bereich_versionlplg"><br>
            <b>versionLPLGText</b> [0..1]:CharacterString<br>
            <input type="text" name="rp_bereich_versionlplgtext"><br>
          </div>
        <input type="submit" name = "rpbereich-submit" value="RP_Bereich Daten eingeben!">
        </form>
    </div>
  <?php
}

#### PLAN
if (!empty($_POST['neuerplan-submit'])) {
  konverteingegebenerplan();
  echo '<div class ="featuregroup" id="plangroup">';
  echo '<h1>Plan entwerfen</h1>';
  konverteingabexpplan();
  konverteingaberpplan();
  echo '</div>';
}
elseif (isset($_POST['xpplan-submit'])) {
  konverteingegebenerplan();
  echo '<div class ="featuregroup" id="plangroup">';
  echo '<h1>Plan entwerfen</h1>';
  konverteingabexpplan();
  konverteingaberpplan();
  echo '</div>';
}
elseif (isset($_POST['rpplan-submit'])) {
  konverteingegebenerplan();
  echo '<div class ="featuregroup" id="plangroup">';
  echo '<h1>Plan entwerfen</h1>';
  konverteingabexpplan();
  konverteingaberpplan();
  echo '</div>';
}

if (isset($_POST['eraseplan-submit'])) {
  $_SESSION["xp_plan_name"] = "";
  $_SESSION["xp_plan_nummer"] = "";
  $_SESSION["xp_plan_internalid"] = "";
  $_SESSION["xp_plan_beschreibung"] = "";
  $_SESSION["xp_plan_kommentar"] = "";
  $_SESSION["xp_plan_technherstelldatum"] = "";
  $_SESSION["xp_plan_genehmigungsdatum"] = "";
  $_SESSION["xp_plan_untergangsdatum"] = "";
  $_SESSION["xp_plan_aendert"] = "";
  $_SESSION["xp_plan_wurdegeaendertvon"] = "";
  $_SESSION["xp_plan_erstellungsmassstab"] = "";
  $_SESSION["xp_plan_xplangmlversion"] = "";
  $_SESSION["xp_plan_bezugshoehe"] = "";
  $_SESSION["xp_plan_raeumlichergeltungsbereich"] = "";
  $_SESSION["xp_plan_verfahrensmerkmale"] = "";
  $_SESSION["xp_plan_rechtsverbindlich"] = "";
  $_SESSION["xp_plan_informell"] = "";
  $_SESSION["xp_plan_hatgenerattribut"] = "";
  $_SESSION["xp_plan_refbeschreibung"] = "";
  $_SESSION["xp_plan_refbegruendung"] = "";
  $_SESSION["xp_plan_refexternalcodelist"] = "";
  $_SESSION["xp_plan_legende"] = "";
  $_SESSION["xp_plan_rechtsplan"] = "";
  $_SESSION["xp_plan_plangrundlage"] = "";
  $_SESSION["rp_plan_bundesland"] = "";
  $_SESSION["rp_plan_planart"] = "";
  $_SESSION["rp_plan_sonstplanart"] = "";
  $_SESSION["rp_plan_planungsregion"] = "";
  $_SESSION["rp_plan_teilabschnitt"] = "";
  $_SESSION["rp_plan_rechtsstand"] = "";
  $_SESSION["rp_plan_status"] = "";
  $_SESSION["rp_plan_aufstellungsbeschlussdatum"] = "";
  $_SESSION["rp_plan_auslegungsstartdatum"] = "";
  $_SESSION["rp_plan_auslegungsenddatum"] = "";
  $_SESSION["rp_plan_traegerbeteiligungsstartdatum"] = "";
  $_SESSION["rp_plan_traegerbeteiligungsenddatum"] = "";
  $_SESSION["rp_plan_aenderungenbisdatum"] = "";
  $_SESSION["rp_plan_entwurfsbeschlussdatum"] = "";
  $_SESSION["rp_plan_planbeschlussdatum"] = "";
  $_SESSION["rp_plan_datumdesinkrafttretens"] = "";
  $_SESSION["rp_plan_refumweltbericht"] = "";
  $_SESSION["rp_plan_refsatzung"] = "";
  $_SESSION["rp_plan_typ"] = "";
  $_SESSION["rp_plan_refkarten"] = "";
  konverteingegebenerplan();
  echo '<div class ="featuregroup" id="plangroup">';
  echo '<h1>Plan entwerfen</h1>';
  konverteingabexpplan();
  konverteingaberpplan();
  echo '</div>';
}


#### TEXTABSCHNITT
if (!empty($_POST['neuertextabschnitt-submit'])) {
  konverteingegebenertextabschnitt();
  echo '<div class ="featuregroup" id="textabschnittgroup">';
  echo '<h1>Textabschnitt entwerfen</h1>';
  konverteingabexptextabschnitt();
  konverteingaberptextabschnitt();
  echo '</div>';
}
elseif (isset($_POST['xptextabschnitt-submit'])) {
  konverteingegebenertextabschnitt();
  echo '<div class ="featuregroup" id="textabschnittgroup">';
  echo '<h1>Textabschnitt entwerfen</h1>';
  konverteingabexptextabschnitt();
  konverteingaberptextabschnitt();
  echo '</div>';
}
elseif (isset($_POST['rptextabschnitt-submit'])) {
  konverteingegebenertextabschnitt();
  echo '<div class ="featuregroup" id="textabschnittgroup">';
  echo '<h1>Textabschnitt entwerfen</h1>';
  konverteingabexptextabschnitt();
  konverteingaberptextabschnitt();
  echo '</div>';
}

if (isset($_POST['erasetextabschnitt-submit'])) {
  $_SESSION["xp_textabschnitt_schluessel"] = '';
  $_SESSION["xp_textabschnitt_gesetzlichegrundlage"] = '';
  $_SESSION["xp_textabschnitt_text"] = '';
  $_SESSION["xp_textabschnitt_reftext"] = '';
  $_SESSION["rp_textabschnitt_rechtscharakter"] = '';
  $_SESSION["xp_bereich_geltungsbereich"] = '';
  $_SESSION["rp_bereich_versionbrog"] = '';
  $_SESSION["rp_bereich_versionbrogtext"] = '';
  $_SESSION["rp_bereich_versionlplg"] = '';
  $_SESSION["rp_bereich_versionlplgtext"] = '';
  konverteingegebenertextabschnitt();
  echo '<div class ="featuregroup" id="textabschnittgroup">';
  echo '<h1>Textabschnitt entwerfen</h1>';
  konverteingabexptextabschnitt();
  konverteingaberptextabschnitt();
  echo '</div>';
}

#### BEREICH
if (!empty($_POST['neuerbereich-submit'])) {
  konverteingegebenerbereich();
  echo '<div class ="featuregroup" id="bereichgroup">';
  echo '<h1>Bereich entwerfen</h1>';
  konverteingabexpbereich();
  konverteingaberpbereich();
  echo '</div>';
}
elseif (isset($_POST['xpbereich-submit'])) {
  konverteingegebenerbereich();
  echo '<div class ="featuregroup" id="bereichgroup">';
  echo '<h1>Bereich entwerfen</h1>';
  konverteingabexpbereich();
  konverteingaberpbereich();
  echo '</div>';
}
elseif (isset($_POST['rpbereich-submit'])) {
  konverteingegebenerbereich();
  echo '<div class ="featuregroup" id="bereichgroup">';
  echo '<h1>Bereich entwerfen</h1>';
  konverteingabexpbereich();
  konverteingaberpbereich();
  echo '</div>';
}

if (isset($_POST['erasebereich-submit'])) {
  $_SESSION["xp_bereich_nummer"] = '';
  $_SESSION["xp_bereich_name"] = '';
  $_SESSION["xp_bereich_bedeutung"] = '';
  $_SESSION["xp_bereich_detailliertebedeutung"] = '';
  $_SESSION["xp_bereich_erstellungsmassstab"] = '';
  $_SESSION["xp_bereich_geltungsbereich"] = '';
  $_SESSION["rp_bereich_versionbrog"] = '';
  $_SESSION["rp_bereich_versionbrogtext"] = '';
  $_SESSION["rp_bereich_versionlplg"] = '';
  $_SESSION["rp_bereich_versionlplgtext"] = '';
  konverteingegebenerbereich();
  echo '<div class ="featuregroup" id="bereichgroup">';
  echo '<h1>Bereich entwerfen</h1>';
  konverteingabexpbereich();
  konverteingaberpbereich();
  echo '</div>';
}
?>