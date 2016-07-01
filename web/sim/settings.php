<?php

if (SIMRegistry::$init == false) {
    new SIMRegistry();
}

class SIMRegistry
{
    public function __construct()
    {

        /// ---------- EDIT SETTINGS BELOW THIS LINE ---------- ///
        
        self::$settings['base_url'] = "http://sim.armagoons.com";
        self::$settings['db_host'] = "localhost";
        self::$settings['db_user'] = "root";
        self::$settings['db_pass'] = "birdsresearchanybodyonce123!";
        self::$settings['db_database'] = "sim";

        self::$settings['query'][0]['id'] = "SRV1"; // 4 Character unique identifer for server.
        self::$settings['query'][0]['host'] = "";

        self::$settings['sections']['current_players'] = true;
        self::$settings['sections']['histogram'] = true;
        self::$settings['sections']['mission_history'] = true;
        self::$settings['sections']['top_players'] = true;
        self::$settings['sections']['top_missions'] = false;

        self::$settings['log_dir'] = "logs/";

        self::$settings['using_ips'] = false;
        self::$settings['ips']['db'] = "";

        // The following defines the database and field names for information.
        self::$settings['ips']['ccs']['db'] = ""; // ccs database the missions exist in.
        self::$settings['ips']['ccs']['category'] = ""; // category to look in for live missions.
        self::$settings['ips']['ccs']['mission_name'] = "";
        self::$settings['ips']['ccs']['mission_file'] = "";
        self::$settings['ips']['ccs']['mission_type'] = "";
        self::$settings['ips']['ccs']['mission_author'] = "";
        self::$settings['ips']['ccs']['mission_description'] = "";
        self::$settings['ips']['ccs']['mission_min_slots'] = "";
        self::$settings['ips']['ccs']['mission_broken'] = ""; // Field containing broken flag.

        /// ---------- DO NOT CHANGE BELOW THIS LINE ---------- ///

        self::$init = true;
    }

    public function GetSettings()
    {
        return $this->settings;
    }


    static $init = false;
    public static $settings;

}




define ('SIM_ROOT_DIR', __DIR__ . "/");
define ('SIM_BASE_URL', $settings['base_url']);

define ('SIM_DIR_IMG', SIM_BASE_URL . "res/img/");
define ('SIM_DIR_CSS', SIM_BASE_URL . "res/css/");
define ('SIM_DIR_JS', SIM_BASE_URL . "res/js/");
 ?>
