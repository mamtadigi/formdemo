<!DOCTYPE html>
<html>
<head>
</head>
<body>
	
    <?php
         class Digistreet {
    public $name, $digi, $spes, $gender;
    public $digian = [];
    public function set_humans($name,$digi, $spes, $gender)
    {
       $this->name=$name;
       $this->digi=$digi;
       $this->spes=$spes;
       $this->gender=$gender;

       $this->digian = [$this->name, $this->digi, $this->spes, $this->gender ];
       
    }
    public function get_humans()
    {
            return $this->digian;
        
    }

}
  
    
    $obj1 =new Digistreet();
    $obj1->set_humans("Darpan","Owner", "Yes" ,"Male");
    $obj1->get_humans();
    $data1 = $obj1->get_humans();
    print_r($data1);



    $obj2 =new Digistreet();
    $obj2->set_humans("Mamta","php Developer", "Yes" ,"Female");
    $obj2->get_humans();
    $data2 = $obj2->get_humans();
    print_r($data2);

    $obj3 =new Digistreet();
    $obj3->set_humans("Gurpreet","Senior Developer", "No" ,"Male");
    $obj3->get_humans();
    $data3 = $obj3->get_humans();
    print_r($data3);


  ?>
    


</body>
</html>
