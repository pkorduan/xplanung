<?php
# Zur PDF-Erstellung: http://www.htmlpdf.com/
$cwd = getcwd();
$config = json_decode(
  file_get_contents($cwd . '/config/database.conf'),
  true
);
$conn = pg_connect('dbname=' . $config['dbnamekvw'] . ' user=' . $config['user'] . ' password=' . $config['password']);
# Klassen
$sql = '
SELECT 
  xmi_id,
  name,
  package_id,
  "isAbstract",
  id,
  stereotype_id,
  general_id
FROM 
  xplan_uml.uml_classes
ORDER BY
  id
';
$result = pg_query($conn, $sql);
$klassen = array();
while ($row = pg_fetch_row($result)){
$klassen[] = $row;
}
# Attribute
$sql = "
SELECT
  xmi_id, 
  name, 
  uml_class_id, 
  id,
  datatype,
  classifier, 
  multiplicity_range_lower, 
  multiplicity_range_upper,
  initialvalue_id,
  initialvalue_body
FROM
  xplan_uml.uml_attributes
ORDER BY
  name, uml_class_id
";
$result = pg_query($conn, $sql);
$attribute = array();
while ($row = pg_fetch_row($result)){
$attribute[] = $row;
}
# Definition u. Dokumentation
$sql ="
SELECT
  v.xmi_id,
  v.datavalue,
  v.attribute_id,
  v.class_id,
  d.name
FROM
  xplan_uml.taggedvalues AS v
INNER JOIN
  xplan_uml.tagdefinitions AS d
ON
  d.xmi_id = v.type
WHERE
  d.name = 'description'
OR
  d.name = 'documentation'
";
$result = pg_query($conn, $sql);
$def = array();
while ($row = pg_fetch_row($result)){
$defs[] = $row;
}
# Datentypen
$sql ="
SELECT
xmi_id,
name
FROM
xplan_uml.datatypes
";
$result = pg_query($conn, $sql);
$datatypen = array();
while ($row = pg_fetch_row($result)){
$datatypen[] = $row;
}
# Stereotypes
$sql="
SELECT
  xmi_id,
  name
FROM
  xplan_uml.stereotypes
";
$result = pg_query($conn, $sql);
$stereotypes = array();
while($row = pg_fetch_row($result)){
$stereotypes[] = $row;
}
# Associations (type ist Ursprung, participant ist Ziel)
$sql="
SELECT
  ca.name a_class_name,
  b.id b_id,
  b.name b_name,
  b.multiplicity_range_lower b_multiplicity_range_lower,
  b.multiplicity_range_upper b_multiplicity_range_upper,
  a.id a_id,
  a.name a_name,
  a.multiplicity_range_lower a_multiplicity_range_lower,
  a.multiplicity_range_upper a_multiplicity_range_upper,
  cb.name b_class_name
FROM
  xplan_uml.uml_classes ca JOIN
  xplan_uml.association_ends a ON (ca.xmi_id = a.participant) JOIN
  xplan_uml.association_ends b ON (a.assoc_id = b.assoc_id) JOIN
  xplan_uml.uml_classes cb ON (cb.xmi_id = b.participant)
WHERE
  a.id != b.id
";
$result = pg_query($conn, $sql);
$associations = array();
while($row = pg_fetch_row($result)){
$associations[] = $row;
}
# Ableitungen
$sql="
SELECT
  xmi_id,
  parent_id,
  child_id
FROM
  xplan_uml.class_generalizations
";
$result = pg_query($conn, $sql);
$generalizations = array();
while($row = pg_fetch_row($result)){
$generalizations[] = $row;
}

?>
<HTML>
  <HEAD>
    <TITLE>Feature Katalog XPlan (nach ISO 19110 Beispiel)</TITLE>
    <META http-equiv=Content-Type content="text/html; charset=UTF-8">
    <script src="3rdparty/jQuery-1.12.0/jquery-1.12.0.min.js"></script>
    <script src="control.js"></script>
    <link rel="stylesheet" href="3rdparty/font-awesome-4.0.3/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="styles2.css" type="text/css"/>
  </HEAD>
  <BODY>
  <div id="main">
    <b><h1>FeatureCatalogue</h1></b>
    <table style="width:90%">
    <col width="30%">
    <col width="70%">
      <tr>
        <td><i>Name:</i></td>
        <td>Feature Katalog des XPlan Raumordnungsschemas</td>
      </tr>
      <tr>
        <td><i>Scope:</i></td>
        <td>Die Raumordnungsplanung in Deutschland</td>
      </tr>
      <tr>
        <td><i>Field of Application:</i></td>
        <td>Der Featurekatalog dient der textlichen Definition und Dokumentation der XPlanung-Elemente des Raumordnungsschemas nach ISO 19110.</td>
      </tr>
      <tr>
        <td><i>Version Number:</i></td>
        <td>Version 1.0 des Feature Katalogs</td>
      </tr>
      <tr>
        <td><i>Version Date:</i></td>
        <td>01.07.2016</td>
      </tr>
      <tr>
        <td><i>Definition Source:</i></td>
        <td></td>
      </tr>
      <tr>
        <td><i>Definition Type:</i></td>
        <td></td>
      </tr>
      <tr>
        <td><i>Producer:</i></td>
        <td>Robert Kraetschmer<br>GDI-Service Rostock<br>Joachim-Jungius Str. 9<br>18059 Rostock<br>Deutschland</td>
      </tr>
      <tr>
        <td><i>Functional Language:</i></td>
        <td></td>
      </tr>
    </table>
    <!-- Loop For Each Feature-->
    <?
      foreach($klassen as $klasse){
        foreach($stereotypes as $stereotype){
          if(($klasse[5] == $stereotype[0]) and ($stereotype[1] == 'FeatureType')){
            ?>
            <h2><b>Feature Type</b></h2>
            <table style="width:90%">
            <col width="30%">
            <col width="70%">
              <tr>
                <td><i>Name:</i></td>
                <td>
                <?
                echo $klasse[1];
                ?>
                </td>
              </tr>
              <tr>
                <td><i>Definition:</i></td>
                <td>
                <?
                foreach($defs as $def) {
                  if($def[3] == $klasse[4]){echo $def[1];}
                }     
                ?>
                </td>
              </tr>
              <tr>
                <td><i>Code:</i></td>
                <td></td>
              </tr>
              <tr>
                <td><i>Aliases:</i></td>
                <td></td>
              </tr>
              <tr>
                <td><i>Feature Operation Names:</i></td>
                <td></td>
              </tr>
              <tr>
                <td><i>Feature Attribute Names:</i></td>
                <td>
                  <?
                  $attrib_names = array();
                    foreach($attribute as $attribut) {
                      if($attribut[2] == $klasse[4]){
                        $attrib_names[] = $attribut[1];
                      }
                    }
                    $attrib_separated = implode(", ", $attrib_names);
                    $attrib_separated = rtrim($attrib_separated, ', ');
                    echo $attrib_separated;
                    unset($attrib_separated);
                ?>
                </td>
              </tr>
              <tr>
                <td><i>Feature Association Names:</i></td>
                <td>
                <?
                # packt alle assoziationsnamen in array, implodiert mit komma, entfernt das letzte komma, reset des array
                $assoc_names = array();
                foreach($associations as $association){
                  if(($klasse[1] == $association[0]) and ($association[2] != "<undefined>") and (!empty($association[2]))) {
                    $assoc_names[] = $association[2];
                  }
                }
                $assoc_separated = implode(", ", $assoc_names);
                $assoc_separated = rtrim($assoc_separated,', ');
                echo $assoc_separated;
                unset($assoc_separated);
                ?>
                </td>
              </tr>
              <tr>
                <td><i>Subtype of:</i></td>
                <!-- Ableitungen -->
                <td>
                  <?
                  if ($klasse[6] != '-1'){
                    foreach($generalizations as $generalization){
                      if($generalization[0] == $klasse[6]){
                        foreach($klassen as $klasse_g){
                          if($klasse_g[0] == $generalization[1]){
                            echo $klasse_g[1];
                          }
                        }
                      }
                    }
                  }
                ?></td>
              </tr>
            </table>
            <!-- Loop For Each Attribute-->
            <?
            foreach($attribute as $attribut) {
              if($attribut[2] == $klasse[4]){
                ?>
                </h3><b>Feature Attribute</b></h3>
                <table style="width:90%">
                <col width="30%">
                <col width="70%">
                  <tr>
                    <td><i>Name:</i></td>
                    <td>
                      <? echo $attribut[1]; ?>
                    </td>
                  </tr>
                  <tr>
                    <td><i>Definition:</i></td>
                    <td>
                      <?
                        foreach($defs as $def) {
                          if($def[2] == $attribut[3]){echo $def[1];break;}
                        }     
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td><i>Code:</i></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><i>Value Data Type:</i></td>
                    <td>
                      <?
                        # Datentyp (sowohl datatype als auch classifier können hierauf verweisen
                        # undefined wird nicht angezeigt
                        foreach($datatypen as $datatyp){
                          if(($attribut[4] == $datatyp[0]) or ($attribut[5] == $datatyp[0])){
                            if($datatyp[1] != '<undefined>'){
                              echo $datatyp[1];
                            }
                          }
                        }
                        # Classifier (KomplexeTypen)
                        foreach($klassen as $klasse_c){
                          if($attribut[5] == $klasse_c[0]){
                            # Integer, da Code eingetragen wird
                            echo 'Integer';
                          }
                        }
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td><i>Value Measurement Unit:</i></td>
                    <td></td>
                  </tr>
                  <!-- 1("enumerated") für Objekte, die auf Codelisten verweisen-->
                  <!-- 0("not enumerated") für flache Objekte-->
                  <tr>
                    <td><i>Value Domain Type:</i></td>
                    <td>
                      <?
                        foreach($datatypen as $datatyp){
                          if(($attribut[4] == $datatyp[0]) or ($attribut[5] == $datatyp[0])){
                            if($datatyp[1] != '<undefined>'){
                              echo '0("not enumerated")';
                            }
                          }
                        }
                        foreach($klassen as $klasse_c){
                          if($attribut[5] == $klasse_c[0]){
                            echo '1("enumerated")';
                          }
                        }
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td><i>Value Domain:</i></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><i>Feature Attribute Value:</i></td>
                    <td></td>
                  </tr>
<!-- LOOP Featue Attribute Value: Codelisten -->
                  <?
                    foreach($klassen as $klasse_c){
                      if($attribut[5] == $klasse_c[0]){
                        ?>
                        <tr>
                          <td></td>
                          <td>
                            <table>
                              <col width="50%">
                              <col width="50%">
                              <col width="50%">
                              <tr>
                                <td><i><em>Label</em></i></td>
                                <td><i><em>Code</em></</i></td>
                                <td><i><em>Definition</em></</i></td>
                              </tr>
                              <?
                                foreach($attribute as $attribut_a) {
                                  if($attribut_a[2] == $klasse_c[4]){
                                    ?>
                                    <tr>
                                      <td><?echo $attribut_a[1];?></td>
                                      <td><?echo $attribut_a[9];?></td>
                                      <td>
                                        <?
                                          foreach($defs as $def) {
                                            if($def[2] == $attribut_a[3]){echo $def[1];break;}
                                          }     
                                        ?>
                                      </td>
                                    </tr>
                                  <?
                                  }
                                }
                              ?>
                            </table>
                        <?        
                      }
                    }
                    ?>          
                  </tr>
                </table>
              <?
              }
            }
            ?> 
            <!-- LOOP Feature Association -->
            <?
            foreach($associations as $association){
              if(($klasse[1] == $association[0]) and ($association[2] != "<undefined>") and (!empty($association[2]))) {
                ?>
                <h3><b>Feature Association</b></h3>
                <table style="width:90%">
                <col width="30%">
                <col width="70%">
                  <tr>
                    <td><i>Name:</i></td>
                    <td>
                    <?
                    echo $association[2];
                    ?>
                    </td>
                  </tr>
                  <tr>
                    <td><i>Inverse Relationship:</i></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><i>Definition:</i></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><i>Code:</i></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><i>Feature Types Included:</i></td>
                    <td>
                    <?
                    echo $association[0];
                    echo ', ';
                    echo $association[9];
                    ?>
                    </td>
                  </tr>
                  <tr>
                  <!-- Order immer relevant, dann alle (ein_ oder bi-)direktional mit unterschiedlichen Endnamen sind-->
                    <td><i>Order Indicator:</i></td>
                    <td>1("ordered")</td>
                  </tr>
                  <tr>
                    <td><i>Cardinality:</i></td>
                    <td>
                    <?
                      echo $association[3] . ' : ';
                      if($association[4] == '-1'){echo '?';}else{echo $association[9];}
                    ?>
                    </td>
                  </tr>
                  <tr>
                    <td><i>Constraints:</i></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><i>Role Name:</i></td>
                    <td></td>
                  </tr>
                </table>
                <?
              }
            }
          }
        }
      }
    ?>
  </BODY>
  </div>
</HTML>