<?php defined('C5_EXECUTE') or die(_("Access Denied."));
/**
 * Widget Model
 *
 * @package    boilerplate
 * @category   Model
 * @author     name, organization, email address
 *
 *
 * In this example, the model does have a 1:1 ratio to tables.
 * Often times there is a 1:many ratio of model:tables.
 */

class Widget {
    
    public function __construct()
    {
	$this->db = Loader::db();
	$this->table_names = array('WidgetData');
    }
    
    public function select()
    {
	return $this->db->getAll('SELECT * FROM WidgetData');
    }
    
    public function insert($data)
    {
	$this->db->Execute('INSERT INTO WidgetData (last_modified, data) VALUES (NOW(), ?)', array($data));
    }

    public function update($id, $data)
    {
	$this->db->Execute('UPDATE WidgetData SET last_modified = NOW(), data = ? WHERE id = ?', array($data, $id));
    }
    
    public function delete($id)
    {
	$this->db->Execute('DELETE WidgetData WHERE id = ?', array($id));
    }
    
    // used by package controller's install method
    public function create()
    {
	$sql = "CREATE TABLE ".DB_DATABASE.".WidgetData (
	    ID INT( 7 ) NOT NULL AUTO_INCREMENT ,
	    last_modified DATE NOT NULL ,
	    data varchar( 100 ) NOT NULL,
	    PRIMARY KEY ( ID ) )";
	
	$this->db->Execute($sql);		
    }
    
    // used by package controller's install method
    public function truncate()
    {
	$sql = "TRUNCATE TABLE ".DB_DATABASE.".WidgetData";
	$db->Execute($sql);
    }
    
    // ------ START: WORKING WITH FILES ------ //
    
    /*
	// Load the File Model class
	Loader::model('file');
     
	// instantiating a File Model from an fID:
	$fm = File::getByID($fID);
	
	// getting the relative path from a File Model:
	$path = $fm->getRelativePath();
	
	// getting an attribute from a File Model:
	$attribute = $fm->getAttribute('attribute_handle');
     
	// File Sets
	
	// Load the File Set Model (contains both FileSet and FileSetFiles classes)
	Loader::model('file_set');
	
	// instantiating File Set Model and File Set Files Model
	$fs = FileSet::getByName('Set Name');
	$fsf = new FileSetFile();
	
	// get the files contained in the file set
	$fileSetFiles = $fsf->Find('fsID=?',array($fs->fsID));
	
	// $fileSetFiles is now an array of FileSetFile objects which have an fID member variable
	foreach ($fileSetFiles as $fsf)
	{
	    // use the fID as an input to File Model, for example, getting the relative path:
	    $path = File::getByID($fsf->fID)->getRelativePath();
	}
	
    */
    
    // ------- END: WORKING WITH FILES ------- //
}