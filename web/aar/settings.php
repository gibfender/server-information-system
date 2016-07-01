<?php

class SIMRegistry
{

    static $init = false;
    public static $settings;

    public function __construct()
    {
        self::$settings['community_name'] = "Arma Goons";
        self::$settings['community_url'] = "http://www.armagoons.com/";
        self::$settings['favicon'] = "./res/img/favicon.ico";

        self::$settings['base_url'] = "http://aar.armagoons.com/";
        self::$settings['replay_url'] = "/replay.php?id=";

        self::$settings['db_host'] = "localhost";
        self::$settings['db_user'] = "sim_usr";
        self::$settings['db_pass'] = "Hypermusic123!";
        self::$settings['db_database'] = "sim";

        self::$settings['replay']['dir'] = SIM_ROOT_DIR . "replays/";
        self::$settings['replay']['extension'] = ".replay";

        self::$settings['log_dir'] = "logs/";

        self::$settings['using_ips'] = false;
        self::$settings['ips']['db'] = "ipboard";

        // The following defines the database and field names for information.
        self::$settings['ips']['ccs']['db'] = "ccs_custom_database_7"; // ccs database the missions exist in.
        self::$settings['ips']['ccs']['category'] = "43"; // category to look in for live missions.
        self::$settings['ips']['ccs']['mission_name'] = "field_38";
        self::$settings['ips']['ccs']['mission_file'] = "field_48";
        self::$settings['ips']['ccs']['mission_type'] = "field_43";
        self::$settings['ips']['ccs']['mission_author'] = "field_47";
        self::$settings['ips']['ccs']['mission_description'] = "field_49";
        self::$settings['ips']['ccs']['mission_min_slots'] = "field_39";
        self::$settings['ips']['ccs']['mission_broken'] = ""; // Field containing broken flag.

        self::$init = true;
    }

    public static function GetSettings()
    {
        return self::$settings;
    }


}


/// ---------- DO NOT CHANGE BELOW THIS LINE ---------- ///

define ('SIM_ROOT_DIR', __DIR__ . "/");

if (SIMRegistry::$init == false) {
    new SIMRegistry();
}

define ('SIM_BASE_URL', SIMRegistry::$settings['base_url']);
define ('SIM_DIR_IMG', SIM_BASE_URL . "res/img/");
define ('SIM_DIR_CSS', SIM_BASE_URL . "res/css/");
define ('SIM_DIR_JS', SIM_BASE_URL . "res/js/");
 ?>
