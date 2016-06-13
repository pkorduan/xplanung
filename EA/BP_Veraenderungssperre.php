<?php
require_once ('Date.php');
require_once ('XP_ExterneReferenz.php');
require_once ('XP_VerlaengerungVeraenderungssperre.php');
require_once ('void.php');
require_once ('BP_Ueberlagerungsobjekt.php');

namespace Bebauungsplan\BP_Sonstiges;



use ;
use Basisklassen\XP_Basisobjekte;
use Basisklassen\XP_Enumerationen;
use Implementation\Names;
use Bebauungsplan\BP__Basisobjekte;
/**
 * Ausweisung einer Veränderungssperre, die nicht den gesamten Geltungsbereich des
 * Plans umfasst. Bei Verwendung dieser Klasse muss das Attribut
 * 'veraenderungssperre" des zugehörigen Plans (Klasse BP_Plan) auf "false"
 * gesetzt werden.
 * @author Kraetschmer
 * @created 29-Jul-2015 12:04:55
 */
class BP_Veraenderungssperre extends BP_Ueberlagerungsobjekt
{

	/**
	 * Datum bis zu dem die Veränderungssperre bestehen bleibt.
	 */
	private $gueltigkeitsDatum;
	/**
	 * Referenz auf das Dokument mit dem zug. Beschluss.
	 */
	private $refBeschluss;
	/**
	 * Gibt an, ob die Veränderungssperre bereits ein- oder zweimal verlängert wurde.
	 */
	private $verlaengerung;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getgueltigkeitsDatum()
	{
		return gueltigkeitsDatum;
	}

	public function getrefBeschluss()
	{
		return refBeschluss;
	}

	public function getverlaengerung()
	{
		return verlaengerung;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setgueltigkeitsDatum(Date $newVal)
	{
		gueltigkeitsDatum = newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setrefBeschluss(XP_ExterneReferenz $newVal)
	{
		refBeschluss = newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setverlaengerung(XP_VerlaengerungVeraenderungssperre $newVal)
	{
		verlaengerung = newVal;
	}

}
?>