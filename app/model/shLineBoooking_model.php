<?php  
require_once(__ROOT__ . "model/model.php");
require_once(__ROOT__ . "model/company_model.php");
require_once(__ROOT__ . "model/companies_model.php");

?>

<?php

class Booking extends Model
{
  private $shipping_id; 
  //private Company $shippingLine;
  private $shipping_date
  private $landing_port;
  private $discharge_port;
  private $container_no;
  private $ship_name;
  private $trip_no;
  private $billOf_landing;



  function __construct($shipping_id, /*$shippingLine="",*/ $shipping_date="", $landing_port="",
                       $discharge_port="", $container_no="", $ship_name="", $trip_no="", $billOf_landing="")
  {
    $this->shipping_id = $shipping_id;
    $this->dbh = $this->connect();

    if("" == $shipping_date)
    {
      $this->readBooking($shipping_id);
    }
    else
    {
      //$this->shippingLine = new Company(company id);
      $this->shipping_date = $shipping_date;
      $this->landing_port = $landing_port;
      $this->discharge_port = $discharge_port;
      $this->container_no = $container_no;
      $this->ship_name = $ship_name;
      $this->trip_no = $trip_no;
      $this->billOf_landing = $billOf_landing;
    }
  }



  function readBooking($shipping_id)
  {
    /*
    $sql = "SELECT shLineBooking.shipping_date, shLineBooking.landing_port, shLineBooking.discharge_port,
                   shLineBooking.container_no, shLineBooking.ship_name, shLineBooking.trip_no, shLineBooking.billOf_landing,
                   company.company_name
            FROM shLineBooking JOIN company 
            WHERE shipping_id = $shipping_id
            AND shLineBooking.shippingLine_id = company.company_id";
    */

    //THIS SQL is not right, the one above should be right with aggregation
    $sql = "SELECT * FROM shLineBooking WHERE shipping_id = $shipping_id ";
              
    $db = $this->connect();
    $result = $db->query($sql); 

    if($result->num_rows == 1)
    {
      $row = $db->fetchRow(); 
      //$this->shippingLine = $row["company_name"];
      $this->shipping_date = $row["shipping_date"];
      $this->landing_port = $row["landing_port"];
      $this->discharge_port = $row["discharge_port"];
      $this->container_no = $row["container_no"];
      $this->ship_name = $row["ship_name"];
      $this->trip_no = $row["trip_no"];
      $this->billOf_landing = $row["billOf_landing"];
    }
    else
    {
      //$this->shippingLine = "";
      $this->shipping_date = "";
      $this->landing_port = "";
      $this->discharge_port = "";
      $this->container_no = "";
      $this->ship_name = "";
      $this->trip_no = "";
      $this->billOf_landing = "";
    }
  }


  function getShID(){
    return $this->shipping_id;
  }
  function setShID($shipping_id){
    return $this->shipping_id = $shipping_id;
  }


  function getShLine(){
    return $this->shippingLine;
  }
  function setShLine($shippingLine){
    return $this->shippingLine = $shippingLine;
  }


  function getShDate(){
    return $this->shipping_date;
  }
  function setShDate($shipping_date){
    return $this->shipping_date = $shipping_date;
  }


  function getLanding(){
    return $this->landing_port;
  }
  function setLanding($landing_port){
    return $this->landing_port = $landing_port;
  }


  function getDischarge(){
    return $this->discharge_port;
  }
  function setDischarge($discharge_port){
    return $this->discharge_port = $discharge_port;
  }


  function getContainer(){
    return $this->container_no;
  }
  function setContainer($container_no){
    return $this->container_no = $container_no;
  }


  function getShip(){
    return $this->ship_name;
  }
  function setShip($ship_name){
    return $this->ship_name = $ship_name;
  }


  function getTrip(){
    return $this->trip_no;
  }
  function setTrip($trip_no){
    return $this->trip_no = $trip_no;
  }


  function getBill(){
    return $this->billOf_landing;
  }
  function setBill($billOf_landing){
    return $this->billOf_landing = $billOf_landing;
  }



  function insertBooking(/*$shippingLine,*/ $shipping_date, $landing_port,
                         $discharge_port, $container_no, $ship_name, $trip_no, $billOf_landing)
  {
    //$shippingLine = $this->dbh->getConn()->real_escape_string($shippingLine);

    $shipping_date = $this->dbh->getConn()->real_escape_string($shipping_date);
    $landing_port = $this->dbh->getConn()->real_escape_string($landing_port);
    $discharge_port = $this->dbh->getConn()->real_escape_string($discharge_port);
    $container_no = $this->dbh->getConn()->real_escape_string($container_no);
    $ship_name = $this->dbh->getConn()->real_escape_string($ship_name);
    $trip_no = $this->dbh->getConn()->real_escape_string($trip_no);
    $billOf_landing = $this->dbh->getConn()->real_escape_string($billOf_landing);


    $sql = "INSERT INTO shLineBooking (shipping_date, landing_port,
                                       discharge_port, container_no, ship_name, trip_no, billOf_landing)
            VALUES ('$shipping_date', '$landing_port',
                    '$discharge_port', '$container_no', '$ship_name', '$trip_no', '$billOf_landing')";
   //INSERY company_id in shippingLine_id


   if ($this->dbh->query($sql) === true) 
    {
      echo "Records inserted successfully.";
      $this->fillArray();
    }
    else 
    {
      echo "ERROR: Could not execute $sql. " . $this->conn->error;
    }
  }


  function editBooking($shipping_id, /*$shippingLine,*/ $shipping_date, $landing_port,
                         $discharge_port, $container_no, $ship_name, $trip_no, $billOf_landing)
  {
    //$shippingLine = $this->dbh->getConn()->real_escape_string($shippingLine);
    
    $shipping_date = $this->dbh->getConn()->real_escape_string($shipping_date);
    $landing_port = $this->dbh->getConn()->real_escape_string($landing_port);
    $discharge_port = $this->dbh->getConn()->real_escape_string($discharge_port);
    $container_no = $this->dbh->getConn()->real_escape_string($container_no);
    $ship_name = $this->dbh->getConn()->real_escape_string($ship_name);
    $trip_no = $this->dbh->getConn()->real_escape_string($trip_no);
    $billOf_landing = $this->dbh->getConn()->real_escape_string($billOf_landing);


    $sql = "UPDATE shLineBooking SET shipping_date = '$shipping_date', 
            landing_port = '$landing_port', discharge_port = '$discharge_port', container_no = '$container_no', 
            ship_name = '$ship_name', trip_no = '$trip_no', billOf_landing = '$billOf_landing'
            WHERE shipping_id = $shipping_id";
    //edit company_id in shippingLine_id (chossen shipping company)


    if ($this->dbh->query($sql) === true) 
    {
      echo "Records updated successfully.";
      $this->fillArray();
    }
    else 
    {
      echo "ERROR: Could not execute $sql. " . $this->conn->error;
    }
  }



  function deleteBooking($shipping_id)
  {
    $sql = "DELETE FROM shLineBooking WHERE shipping_id = $shipping_id";

    if ($this->dbh->query($sql) === true)
    {
       echo "Record deleted successfully.";
    }
    else 
    {
       echo "ERROR: Could not execute $sql. " . $this->conn->error;
    }
  }


}
?>