<?php declare(strict_types=1);
require_once ('Model.php');

class statusModel extends Model{
    public $status_id;
    public $status;

    public function __construct(){
        $this->dbName='mexflix';

    }

    public function create( $statusData=array()):void {
        // TODO: Implement create() method.
        foreach ($statusData as $key=>$value){
            $$key=$value;
        }

        /** @var TYPE_NAME $status */
        /** @var TYPE_NAME $status_id */
        $this->query="INSERT INTO status (status_id,status) values ($status_id,'$status')";
        $this->setQuery();
    }

    public function read(string $status_id=''):array{
        $this->query=($status_id!='')?"select * from status where status_id=$status_id":"select * from status";
        $this->getQuery();
        $data=Array();
        foreach ($this->rows as $key=>$value){
            $data[$key]=$value;
        }
        return $data;
    }

    public function update( $statusData=array()):void {
        // TODO: Implement update() method.
        foreach ($statusData as $key=>$value){
            $$key=$value;
        }

        /** @var TYPE_NAME $status */
        /** @var TYPE_NAME $status_id */
        $this->query="UPDATE status SET status_id=$status_id, status='$status' WHERE status_id=$status_id";
        $this->setQuery();
    }

    public function delete($status_id=''):void {
        // TODO: Implement delete() method.
        $this->query="DELETE FROM status WHERE status_id=$status_id";
        $this->setQuery();
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}