<?php declare(strict_types=1);
require_once('StatusController.php');
echo '<h1>Tabla Status</h1>';

$statusController=new statusController();

$statusData=array(
    'status_id'=>9,
    'status'=>'HomeHomeHomeHome'
);
$statusController->update($statusData);
$statusController->delete(10);
$data=$statusController->read();
var_dump($data);
echo "
        <table>
            <tr>
                <td>Status id</td>
                <td>Status</td>
            </tr>
        ";
            $template= "<tr>
                    <td>%s</td>
                    <td>%s</td>
                  </tr>
        ";
        for($i=0;$i<count($data);$i++){
            printf($template,$data[$i]['status_id'],$data[$i]['status']);
        }

        echo "</table>";
