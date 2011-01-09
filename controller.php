<?php defined('C5_EXECUTE') or die(_("Access Denied."));
/**
 * Boilerplate Package Controller
 *
 * @package    boilerplate
 * @category   Package Controller
 * @author     name, organization, email address
 *
 */

class BoilerplatePackage extends Package {

    protected $pkgHandle; // auto
    protected $appVersionRequired = '5.3.2';
    protected $pkgVersion = '0.1';
    
    public function __construct()
    {
	$this->set_package_handle();
    }
    
    public function getPackageName()
    {
	return t('Package Name');
    }
    
    public function getPackageDescription()
    {
	return t('Package description goes here.');
    }
    
    private function set_package_handle()
    {
	/*
	    assume the dir name is also the desired package handle
	    /packages/$this->pkgHandle/
	*/
	$ao = new ArrayObject(explode('/', __FILE__));
	$this->pkgHandle = $ao->offsetGet($ao->count() -2);
    }
    
    public function install()
    {
	$pkg = parent::install();
	    
	// ---------- START: BLOCKS ---------------- //
	
	/*// install blocks
	 
	    BlockType::installBlockTypeFromPackage('widget_display', $pkg);
	*/
	
	// ---------- END: BLOCKS ------------------ //

	// ---------- START: SINGLE PAGES ---------- //

	/*// install single pages:
	 
	    Loader::model('single_page');
		
	    $single_pages = array(		    
		array('path' => 'typical', 'exclude_nav' => 0),
	    );
	    
	    foreach ($single_pages as $single_page)
	    {
		$page = SinglePage::add('/' . $single_page['path'], $pkg);
		$page->setAttribute('exclude_nav', $single_page['exclude_nav']);
	    }
	*/
	
	// ---------- END: SINGLE PAGES ---------- //
	
	// ---------- START: ATTRIBUTES ---------- //
	
	// attribute types can be: text, textarea, boolean, date_time, image_file, number, rating, select, address
	
	/*// Adding a text attribute to files in the file manager:
	 
	    FileAttributeKey::add(
		'text',
		array(
		    'akHandle'=>'some_text',
		    'akName' =>t("Some Text"),
		    'akIsSearchable'=>0
		),
		$pkg
	    );
	*/
	
	/*// Adding a select attribute to files in the file manager:
	 
	    $someSelectAttrKey = FileAttributeKey::add(
		'select',
		array(
		    'akName'=>t("Some Select"),
		    'akHandle'=>'some_select',
		    'akSelectAllowMultipleValues'=>0,
		    'akIsSearchable'=>1
		),
		$pkg
	    );
			
	    $options = array(
		'one',
		'two',
		'three',
		'etc.'
	    );
			
	    foreach($options as $i => $option) {
		$opt = new SelectAttributeTypeOption(0, t($option), ($i+1));
		$opt = $opt->saveOrCreate($someSelectAttrKey); 				
	    }
	*/
	
	/*
	    Similarly, attributes can be applied to collections (pages).
	    Use CollectionAttributeKey::add() for adding attributes to collections.
	*/
	
	// ---------- END: ATTRIBUTES ---------- //
	
	// ---------- START: DATABASE TABLES ---------- //
	
	/*// Ensure custom database tables exist
	
	    Loader::helper('installer', $this->pkgHandle);
	    $ih = new InstallerHelper;
	    
	    Loader::model('widget', $this->pkgHandle);
	    $w = new Widget;
	    
	    if (! $ih->tables_exist($w->table_names))
	    {
		// create them
		$w->create();
		
	    } else {
		// tables exist from a previous installation,
		// you may want to empty them via truncate
		$w->truncate();	
	    }
	*/
	
	// ---------- END: DATABASE TABLES ---------- //
    }
	    
}