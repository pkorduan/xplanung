<?php


namespace Bebauungsplan\BP_Sonstiges;


/**
 * @author Kraetschmer
 * @created 29-Jul-2015 12:04:56
 */
class BP_WegerechtTypen
{

	/**
	 * Gehrecht
	 */
	private $Gehrecht = 1000;
	/**
	 * Fahrrecht
	 */
	private $Fahrrecht = 2000;
	/**
	 * Geh- und Fahrrecht
	 */
	private $GehFahrrecht = 3000;
	private $Leitungsrecht = 4000;
	/**
	 * Geh- und Leitungsrecht
	 */
	private $GehLeitungsrecht = 4100;
	/**
	 * Fahr- und Leitungsrecht
	 */
	private $FahrLeitungsrecht = 4200;
	/**
	 * Geh-, Fahr- und Leitungsrecht
	 */
	private $GehFahrLeitungsrecht = 5000;

	function __construct()
	{
	}

	function __destruct()
	{
	}



}
?>