<?php  
require_once(__ROOT__ . "model/model.php");
require_once(__ROOT__ . "model/product_model.php");
require_once(__ROOT__ . "model/products_model.php");

?>

<?php

class Commodity extends Model
{
   private $comm_id; 
   //private Product $product;
   private $quantity;
   private $unit_price;
   private $total_price;
   private $package_weight;
   private $package_type;


   function __construct($comm_id, /*$product,*/ $quantity="", $unit_price="", $package_weight="", $package_type="")
   {
      $this->comm_id = $comm_id;
      $this->dbh = $this->connect();

      if("" == $quantity)
      {
        $this->readCommodity($comm_id);    
      }
      else
      {
        //$this->product = new Product(//product id);
        $this->quantity = $quantity;
        $this->unit_price = $unit_price;
        $this->total_price = $total_price;
        $this->package_weight = $package_weight;
        $this->package_type = $package_type;
      }
   }


   function readCommodity($comm_id)
   {
    /*
      $sql = "SELECT commodity.quantity, commodity.unit_price, commodity.total_price, 
                     commodity.package_weight, commodity.package_type,
                     product.name
              FROM commodity JOIN product
              WHERE comm_id = $comm_id AND product.ID = commodity.product ";
     */


      //THIS SQL is not right, the one above should be right with aggregation
      $sql = "SELECT * FROM commodity WHERE comm_id = $comm_id ";
              
      $db = $this->connect();
      $result = $db->query($sql); 

      if($result->num_rows == 1)
      {
        $row = $db->fetchRow();

        //$this->product = $row["name"]; 
        $this->quantity = $row["quantity"];
        $this->unit_price = $row["unit_price"];
        $this->total_price = $row["total_price"];
        $this->package_weight = $row["package_weight"];
        $this->package_type = $row["package_type"];
      }
      else
      {
        //$this->product = "";
        $this->quantity = "";
        $this->unit_price = "";
        $this->total_price = "";
        $this->package_weight = "";
        $this->package_type = ""; 
      }
    }


    /*
    function getProduct(){
        return $this->product;
    }
    function setProduct($product){
        return $this->product = $product;
    }
    */

    function getQuantity(){
        return $this->quantity;
    }
    function setQuantity($quantity){
        return $this->quantity = $quantity;
    }

    function getUnitPrice(){
        return $this->unit_price;
    }
    function setUnitPrice($unit_price){
        return $this->unit_price = $unit_price;
    }

    function getTotPrice(){
        return $this->total_price;
    }
    function setTotPrice($total_price){
        return $this->total_price = $total_price;
    }

    function getPackWeight(){
        return $this->package_weight;
    }
    function setPackWeight($package_weight){
        return $this->package_weight = $package_weight;
    }

    function getPackType(){
        return $this->package_type;
    }
    function setPackType($package_type){
        return $this->package_type = $package_type;
    }



   function insertCommodity(/*$product,*/ $quantity, $unit_price, $package_weight, $package_type)
   {
      //$product = $this->dbh->getConn()->real_escape_string($product);
      $quantity = $this->dbh->getConn()->real_escape_string($quantity);
      $unit_price = $this->dbh->getConn()->real_escape_string($unit_price);
      $total_price = $this->dbh->getConn()->real_escape_string($total_price);
      $package_weight = $this->dbh->getConn()->real_escape_string($package_weight);
      $package_type = $this->dbh->getConn()->real_escape_string($package_type);

      $sql = "INSERT INTO commodity (quantity, unit_price, package_weight, package_type)
              VALUES ('$quantity', '$unit_price', '$package_weight', '$package_type')"; 
      ////NOTICEE >>>>>>>>>>>>>>>>>>>>.
      //Products already exist on system
      //how to insert product id, contract id????????????    
      //From controller maybe?
      
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



   function editCommodity($comm_id, /*$product,*/ $quantity, $unit_price, $package_weight, $package_type)
   {
      //$product = $this->dbh->getConn()->real_escape_string($product);
      $quantity = $this->dbh->getConn()->real_escape_string($quantity);
      $unit_price = $this->dbh->getConn()->real_escape_string($unit_price);
      $total_price = $this->dbh->getConn()->real_escape_string($total_price);
      $package_weight = $this->dbh->getConn()->real_escape_string($package_weight);
      $package_type = $this->dbh->getConn()->real_escape_string($package_type);


      $sql = "UPDATE commodity SET quantity = '$quantity', unit_price = '$unit_price', total_price = '$total_price',
                                 package_weight = '$package_weight', package_type = '$package_type'
              WHERE comm_id = $comm_id";

      ////NOTICEE >>>>>>>>>>>>>>>>>>>>.
      //Products edit, choose another product?   
      //From controller maybe?   


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



   function deleteCommodity($comm_id)
   {
      $sql = "DELETE FROM commodity WHERE comm_id = $comm_id";

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