<?php
class SPDO extends PDO
{
	private static $instance = null;

	private function __construct()
	{
		$config = Config::singleton();

		switch ($config->get('dbdriver'))
		{
			// MS SQL Server
			case "sqlsrv":
				$dns = 'sqlsrv' .
					':Server=' . $config->get('dbhost') .
					',' . $config->get('dbport') .
					';Database=' . $config->get('dbname');
				break;

			// MySQL
			case "mysql":
			default:
				$dns = 'mysql' .
					':host=' . $config->get('dbhost') .
					';port=' . $config->get('dbport') .
					';dbname=' . $config->get('dbname');
		}

		parent::__construct($dns, $config->get('dbusername'), $config->get('dbpassword'));
	}

	public static function singleton()
	{
		if( self::$instance == null )
		{
			self::$instance = new self();
		}
		return self::$instance;
	}
}
?>
