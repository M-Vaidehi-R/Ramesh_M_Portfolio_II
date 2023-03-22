<?php


require_once("../model/portfolio_model.php");

class portfolio{

    private $PortPiece;
    protected $connection;


    public function __construct() {
        $this->PortPiece = new portfolio_Database(); 
		$dsn = "mysql:host=".DB_SERVER.";dbname=".DB_NAME.";charset=utf8mb4";
		try {
		  $this->connection = new PDO($dsn, DB_USER, DB_PASS);
		} catch (Exception $e) {
		  error_log($e->getMessage());
		  exit('unable to connect');
		}
	}

    public function loadViews() {
        // if (isset($_GET['category'])) {
        //     $ports = $this->PortPiece->getAll($_GET['category']);
        // } else {
        //     $ports = $this->PortPiece->getAll();
        // }
    
        $ports = $this->PortPiece->getAll();
         $rows = $this->PortPiece->rows;
    
        // if (isset($_GET['category']) && $_GET['category'] == 'designing') {
        //     include('../view/display_designing_projects.php');
        // } else if (isset($_GET['category']) && $_GET['category'] == 'developing') {
        //     include('../view/display_developing_projects.php');
        // } else if (isset($_GET['category']) && $_GET['category'] == 'motion') {
        //     include('../view/display_motion_projects.php');
        // } 
        
        // else {
        //     include('../view/display_all_ports.php');
        // }
    
        if (isset($_GET['id']) && !isset($_GET['page'])) {
            $ports = $this->PortPiece->getOne($_GET['id']);
            include('../view/single_port_display.php');
        }
        else {
            include('../view/display_all_ports.php');
        }
    }

}


?>