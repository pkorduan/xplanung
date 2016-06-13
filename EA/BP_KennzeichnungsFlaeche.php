<?php
require_once ('XP_ZweckbestimmungKennzeichnung.php');
require_once ('void.php');
require_once ('BP_Flaechenobjekt.php');

namespace Bebauungsplan\BP_Sonstiges;



use Basisklassen\XP_Enumerationen;
use Implementation\Names;
use Bebauungsplan\BP__Basisobjekte;
/**
 * Flächen für Kennzeichnungen gemäß §9 Abs. 5 BauGB.
 * @author Kraetschmer
 * @created 29-Jul-2015 12:04:55
 */
class BP_KennzeichnungsFlaeche extends BP_Flaechenobjekt
{

	/**
	 * Weitere Zweckbestimmung der Fläche. <b>Dies Attribut ist ab Version 4.1 als
	 * "veraltet" gekennzeichnet, es sollte stattdessen </b><b><i>zweckbestimmung
	 * </i></b><b>mehrfach belegt werden.</b>
	 */
	private $weitereZweckbestimmung;
	/**
	 * Zweckbestimmungen der Fläche.
	 */
	private $zweckbestimmung;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getweitereZweckbestimmung()
	{
		return weitereZweckbestimmung;
	}

	public function getzweckbestimmung()
	{
		return zweckbestimmung;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setweitereZweckbestimmung(XP_ZweckbestimmungKennzeichnung $newVal)
	{
		weitereZweckbestimmung = newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setzweckbestimmung(XP_ZweckbestimmungKennzeichnung $newVal)
	{
		zweckbestimmung = newVal;
	}

}
?>