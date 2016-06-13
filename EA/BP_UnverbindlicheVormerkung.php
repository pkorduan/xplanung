<?php
require_once ('CharacterString.php');
require_once ('void.php');
require_once ('BP_Geometrieobjekt.php');

namespace Bebauungsplan\BP_Sonstiges;



use Primitive\Text;
use Implementation\Names;
use Bebauungsplan\BP__Basisobjekte;
/**
 * Unverbindliche Vormerkung späterer Planungsabsichten.
 * @author Kraetschmer
 * @created 29-Jul-2015 12:04:55
 */
class BP_UnverbindlicheVormerkung extends BP_Geometrieobjekt
{

	/**
	 * Text der Vormerkung.
	 */
	private $vormerkung;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getvormerkung()
	{
		return vormerkung;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setvormerkung(CharacterString $newVal)
	{
		vormerkung = newVal;
	}

}
?>