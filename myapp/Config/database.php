<?php
class DATABASE_CONFIG {
    public $default = array();

	public $develop = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'otukutun',
		'password' => 'otukutun',
		'database' => 'tadoku',
		'encoding' => 'utf8'
    );
	public $production = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'otukutun',
		'password' => '1989_08_01_social_network',
		'database' => 'tadoku',
		'encoding' => 'utf8'
    );
    public function __construct() {
        $env = FULL_BASE_URL;
        if ($env == 'http://www.tadoku.me') {
            $this->default = $this->production;
        } else {
            $this->default = $this->develop;
        }
    }
}
