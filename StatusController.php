<?php declare(strict_types=1);
require_once ('StatusModel.php');
class StatusController{
    private $statusModel;
    public function __construct(){
        $this->statusModel=new statusModel();
    }

    public function create( $statusData=array()) :void{
        $this->statusModel->create($statusData);
    }
    public function read( string $status_id=''):array{
        return $this->statusModel->read($status_id);
    }
    public function update($statusData=array()):void{
        $this->statusModel->update($statusData);
    }
    public function delete(string $status_id=''):void{
        $this->statusModel->delete($status_id);
    }

}