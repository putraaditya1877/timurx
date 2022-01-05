<?php 
class ajaxtopcustomer extends Controller
{    
    public function getdroptop(){
        // $id = //$_POST["namacustomer"];
        $id =  "Customer 2";
       
        var_dump($id);
        // die();
        $data['topcustomerdetail'] = $this->model('topcustomer_model')->gettopCustomerByIdx($id);
        // var_dump( $data['topcustomerdetail']);
        // $data['nama'] = 'topcustomer | '.$data['namacustomer'];
        //$test = $data['topcustomerdetail'];

        // echo json_encode ($test); 
        $test="test ini dari controller";
        echo $test;
     }
}