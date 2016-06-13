<?php
require_once ('CharacterString.php');
require_once ('void.php');
require_once ('BP_Geometrieobjekt.php');

namespace Bebauungsplan\BP_Sonstiges;



use Primitive\Text;
use Implementation\Names;
use Bebauungsplan\BP__Basisobjekte;
/**
 * Festsetzung nacvh §9 Nr. (4) BauGB
 * @author Kraetschmer
 * @version 1.0
 * @created 29-Jul-2015 12:04:54
 */
class BP_FestsetzungNachLandesrecht extends BP_Geometrieobjekt
{

	/**
	 * Kurzbeschreibung der Festsetzung
	 */
	private $kurzbeschreibung;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getkurzbeschreibung()
	{
		return kurzbeschreibung;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setkurzbeschreibung(CharacterString $newVal)
	{
		kurzbeschreibung = newVal;
	}

}
?>