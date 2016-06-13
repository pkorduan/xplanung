<?php
require_once ('CharacterString.php');
require_once ('void.php');
require_once ('BP_Ueberlagerungsobjekt.php');

namespace Bebauungsplan\BP_Sonstiges;



use Primitive\Text;
use Implementation\Names;
use Bebauungsplan\BP__Basisobjekte;
/**
 * Umgrenzung der Flächen, die von der Bebauung freizuhalten sind, und ihre
 * Nutzung (§ 9 Abs. 1 Nr. 10 BauGB).
 * @author Kraetschmer
 * @created 29-Jul-2015 12:04:54
 */
class BP_FreiFlaeche extends BP_Ueberlagerungsobjekt
{

	/**
	 * Festgesetzte Nutzung der Freifläche.
	 */
	private $nutzung;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getnutzung()
	{
		return nutzung;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setnutzung(CharacterString $newVal)
	{
		nutzung = newVal;
	}

}
?>