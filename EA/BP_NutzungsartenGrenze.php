<?php
require_once ('BP_DetailAbgrenzungenTypen.php');
require_once ('BP_AbgrenzungenTypen.php');
require_once ('void.php');
require_once ('BP_Linienobjekt.php');

namespace Bebauungsplan\BP_Sonstiges;



use Bebauungsplan\BP_Sonstiges;
use Bebauungsplan\BP_Sonstiges;
use Implementation\Names;
use Bebauungsplan\BP__Basisobjekte;
/**
 * Abgrenzung unterschiedlicher Nutzung, z.B. von Baugebieten wenn diese nach
 * PlanzVO in der gleichen Farbe dargestellt werden, oder Abgrenzung
 * unterschiedlicher Nutzungsmaße innerhalb eines Baugebiets ("Knödellinie", §1
 * Abs. 4, §16 Abs. 5 BauNVO).
 * @author Kraetschmer
 * @created 29-Jul-2015 12:04:55
 */
class BP_NutzungsartenGrenze extends BP_Linienobjekt
{

	/**
	 * Detaillierter Typ der Abgrenzung, wenn das Attribut typ den Wert 9999 (Sonstige
	 * Abgrenzung) hat.
	 */
	private $detailTyp;
	/**
	 * Typ der Abgrenzung. Wenn das Attribut nicht belegt ist, ist die Abgrenzung eine
	 * Nutzungsarten-Grenze (Schlüsselnummer 1000).
	 */
	private $typ = 1000;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getdetailTyp()
	{
		return detailTyp;
	}

	public function gettyp()
	{
		return typ;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setdetailTyp(BP_DetailAbgrenzungenTypen $newVal)
	{
		detailTyp = newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function settyp(BP_AbgrenzungenTypen $newVal)
	{
		typ = newVal;
	}

}
?>