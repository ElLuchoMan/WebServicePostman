<?php>
class Conectar{
    protected $dbh;
    protected function Conexion(){
        try{ $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=andercode_helpdsesk","root","");
            return $conectar; 
        }catch (Exception $e){
            print "¡ERROR!". $e -> getMessage()."<br/>";
            die();
        }
    }
}
public function set_name{
    return $this->dbh->query("SET NAMES 'utf8'");
}