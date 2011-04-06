<?php defined('C5_EXECUTE') or die(_("Access Denied."));
/**
 * Widget Block Controller
 *
 * @package    boilerplate
 * @category   Block Controller
 * @author     name, organization, email address
 *
 */

class WidgetDisplayBlockController extends BlockController {

    protected $btTable = 'btWidgetDisplay';
    protected $btInterfaceWidth = "430";
    protected $btInterfaceHeight = "285";
    private $pkgHandle; // auto

    public function __construct($obj = null)
    {
	parent::__construct($obj);
	$this->set_package_handle();
    }

    public function getBlockTypeDescription()
    {
	return t("Your block description goes here.");
    }
    
    public function getBlockTypeName()
    {
	return t("Block Name");
    }
    
    private function set_package_handle()
    {
	/*
	    assume the dir name is also the desired package handle
	    /packages/$this->pkgHandle/blocks/whatever
	*/
	
	$ao = new ArrayObject(explode('/', __FILE__));
	$this->pkgHandle = $ao->offsetGet($ao->count() -4);
    }    
    
    // add any header items
    public function on_page_view()
    {
	/*
	    // instance of html helper is used in both examples below
	    $html = Loader::helper('html');
	    
	    // links a javascript file from this package's /js folder into the page's header via <script> tag
	    $this->addHeaderItem($html->javascript('filename.js', $this->pkgHandle));
	    
	    // links a css file from this package's /css folder into the page's header via <link> tag
	    $this->addHeaderItem($html->css('filename.css', $this->pkgHandle));	    
	*/

	/*
	    The variable, $this->stored_widget_string is a database column (see db.xml). It
	    is affected at add/edit time, and is autoloaded as a member variable of this
	    instance.
 
	    $this->set('stored_widget_string', $this->stored_widget_string);
	*/
    }
    
    
    // called at package install time
    /*public function install()
    {
	// must call parent's install method
	$ret = parent::install();
	
	/*
	    the table(s) defined in db.xml have just been created
	    this is where you could insert some data into them if you have a reason to
	* /
	
	return $ret;
    }*/

}
