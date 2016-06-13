<?php
require_once ('CharacterString.php');
require_once ('void.php');
require_once ('BP_Flaechenobjekt.php');

namespace Bebauungsplan\BP_Aufschuettung_Abgrabung_Bodenschaetze;



use Primitive\Text;
use Implementation\Names;
use Bebauungsplan\BP__Basisobjekte;
/**
 * Flächen für Aufschüttungen, Abgrabungen oder für die Gewinnung von
 * Bodenschätzen (§ 9 Abs. 1 Nr. 17 und Abs. 6 BauGB). Hier: Flächen für Gewinnung
 * von Bodenschätzen
 * @author Kraetschmer
 * @created 29-Jul-2015 12:04:53
 */
class BP_BodenschaetzeFlaeche extends BP_Flaechenobjekt
{

	/**
	 * Bezeichnung des Abbauguts.
	 */
	private $abbaugut;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getabbaugut()
	{
		return abbaugut;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setabbaugut(CharacterString $newVal)
	{
		abbaugut = newVal;
	}

}
?>