<?php defined('C5_EXECUTE') or die(_("Access Denied."));
/**
 * Typical Single Page Controller
 *
 * @package    boilerplate
 * @category   Single Page Controller
 * @author     name, organization, email address
 *
 */

class TypicalController extends Controller {   
    
    protected $pkgHandle; // auto
    
    private function set_package_handle()
    {
	/*
	    assume the dir name is also the desired package handle
	    /packages/$this->pkgHandle/...
	*/
	
	$ao = new ArrayObject(explode('/', __FILE__));
	$this->pkgHandle = $ao->offsetGet($ao->count() -3);
    }    
    
    // add any header items
    public function on_start()
    {
	/*
	    // instance of html helper is used in both examples below
	    $html = Loader::helper('html');
	    
	    // links a javascript file from this package's /js folder into the page's header via <script> tag
	    $this->addHeaderItem($html->javascript('filename.js', $this->pkgHandle));
	    
	    // links a css file from this package's /css folder into the page's header via <link> tag
	    $this->addHeaderItem($html->css('filename.css', $this->pkgHandle));	    
	*/	
    }
    
    // set view vars
    public function view()
    {
	$this->set('varname', 'value');
    }
}