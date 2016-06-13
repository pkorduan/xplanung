<?php
require_once ('Length.php');
require_once ('CharacterString.php');
require_once ('BP_WegerechtTypen.php');
require_once ('void.php');
require_once ('BP_Geometrieobjekt.php');

namespace Bebauungsplan\BP_Sonstiges;



use ;
use Primitive\Text;
use Bebauungsplan\BP_Sonstiges;
use Implementation\Names;
use Bebauungsplan\BP__Basisobjekte;
/**
 * Festsetzung von Flächen, die mit Geh-, Fahr-, und Leitungsrechten zugunsten der
 * Allgemeinheit, eines Erschließungsträgers, oder eines beschränkten
 * Personenkreises belastet sind  (§ 9 Abs. 1 Nr. 21 und Abs. 6 BauGB).
 * @author Kraetschmer
 * @created 29-Jul-2015 12:04:56
 */
class BP_Wegerecht extends BP_Geometrieobjekt
{

	/**
	 * Breite des Wegerechts bei linienförmiger Ausweisung der Geometrie.
	 */
	private $breite;
	/**
	 * Beschreibung des Rechtes.
	 */
	private $thema;
	/**
	 * Typ des Wegerechts
	 */
	private $typ;
	/**
	 * Inhaber der Rechte.
	 */
	private $zugunstenVon;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getbreite()
	{
		return breite;
	}

	public function getthema()
	{
		return thema;
	}

	public function gettyp()
	{
		return typ;
	}

	public function getzugunstenVon()
	{
		return zugunstenVon;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setbreite(Length $newVal)
	{
		breite = newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setthema(CharacterString $newVal)
	{
		thema = newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function settyp(BP_WegerechtTypen $newVal)
	{
		typ = newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setzugunstenVon(CharacterString $newVal)
	{
		zugunstenVon = newVal;
	}

}
?>