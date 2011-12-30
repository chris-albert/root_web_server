<?php 

class IndexController extends BaseController{

    private $UsersModel = null;
	public function __construct(&$registry) {
		parent::__construct($registry);
        $this->UsersModel = new UsersModel($registry);
	}
	
	public function view() {
		$this->index();
	}

    public function site() {
        //Site wide source, this is loaded on every page
        $this->loadSRC($this->_registry->request, array(
            'js/sizzle.js',
            'js/creasetoph_env.js',
            'js/creasetoph_base.js',
            'js/creasetoph_dialog.js'
        ),'js',true,true);
    }
	
    public function index() {
        if($this->User->isValid) {
            //do somthing else if a user is logged in
        }
        $this->Template->render('home');
	}

    public function phpinfo() {
	echo phpinfo();
    }
    
}
