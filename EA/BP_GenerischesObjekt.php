<?php
require_once ('BP_ZweckbestimmungGenerischeObjekte.php');
require_once ('void.php');
require_once ('BP_Geometrieobjekt.php');

namespace Bebauungsplan\BP_Sonstiges;



use Bebauungsplan\BP_Sonstiges;
use Implementation\Names;
use Bebauungsplan\BP__Basisobjekte;
/**
 * Klasse zur Modellierung aller Inhalte des BPlans, die keine nachrichtliche
 * Übernahmen aus anderen Rechtsbereichen sind, aber durch keine andere Klasse des
 * BPlan-Fachschemas dargestellt werden können.
 * @author Kraetschmer
 * @created 29-Jul-2015 12:04:54
 */
class BP_GenerischesObjekt extends BP_Geometrieobjekt
{

	/**
	 * Über eine CodeList definierte weitere Zweckbestimmung des Objektes. <b>Dies
	 * Attribut ist ab Version 4.1 als "veraltet" gekennzeichnet, es sollte
	 * stattdessen </b><b><i>zweckbestimmung </i></b><b>mehrfach belegt werden.</b>
	 */
	private $weitereZweckbestimmung1;
	/**
	 * Über eine CodeList definierte weitere Zweckbestimmung des Objektes. <b>Dies
	 * Attribut ist ab Version 4.1 als "veraltet" gekennzeichnet, es sollte
	 * stattdessen </b><b><i>zweckbestimmung </i></b><b>mehrfach belegt werden. </b>
	 */
	private $weitereZweckbestimmung2;
	/**
	 * Über eine CodeList definierte weitere Zweckbestimmung des Objektes. <b>Dies
	 * Attribut ist ab Version 4.1 als "veraltet" gekennzeichnet, es sollte
	 * stattdessen </b><b><i>zweckbestimmung </i></b><b>mehrfach belegt werden.</b>
	 */
	private $weitereZweckbestimmung3;
	/**
	 * Über eine CodeList definierte weitere Zweckbestimmung des Objektes. <b>Dies
	 * Attribut ist ab Version 4.1 als "veraltet" gekennzeichnet, es sollte
	 * stattdessen </b><b><i>zweckbestimmung </i></b><b>mehrfach belegt werden.</b>
	 */
	private $weitereZweckbestimmung4;
	/**
	 * Über eine CodeList definierte Zweckbestimmungen des Objektes.
	 */
	private $zweckbestimmung;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getweitereZweckbestimmung1()
	{
		return weitereZweckbestimmung1;
	}

	public function getweitereZweckbestimmung2()
	{
		return weitereZweckbestimmung2;
	}

	public function getweitereZweckbestimmung3()
	{
		return weitereZweckbestimmung3;
	}

	public function getweitereZweckbestimmung4()
	{
		return weitereZweckbestimmung4;
	}

	public function getzweckbestimmung()
	{
		return zweckbestimmung;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setweitereZweckbestimmung1(BP_ZweckbestimmungGenerischeObjekte $newVal)
	{
		weitereZweckbestimmung1 = newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setweitereZweckbestimmung2(BP_ZweckbestimmungGenerischeObjekte $newVal)
	{
		weitereZweckbestimmung2 = newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setweitereZweckbestimmung3(BP_ZweckbestimmungGenerischeObjekte $newVal)
	{
		weitereZweckbestimmung3 = newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setweitereZweckbestimmung4(BP_ZweckbestimmungGenerischeObjekte $newVal)
	{
		weitereZweckbestimmung4 = newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setzweckbestimmung(BP_ZweckbestimmungGenerischeObjekte $newVal)
	{
		zweckbestimmung = newVal;
	}

}
?>