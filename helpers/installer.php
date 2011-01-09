<?php defined('C5_EXECUTE') or die(_("Access Denied."));
/**
 * Installer Helper
 *
 * @package    boilerplate
 * @category   Helper
 * @author     name, organization, email address
 *
 */

class InstallerHelper {
    
    // checks if the provided tables exist
    public function tables_exist($table_names) {
	
	$db = Loader::db();
	
	$rows = $db->getAll('SHOW TABLES');
	$tables_in_db = array();
	
	// first put all existing table names into an array
	foreach($rows as $row) {
	    $tables_in_db[] = $row['Tables_in_' . DB_DATABASE];
	}
	
	// do the app's tables exists?
	foreach($table_names as $table_name) {
	    if (! in_array($table_name, $tables_in_db)) {
		return false;
	    }
	}
	
	// if we get to this point, all the tables exist
	return true;
    }
}