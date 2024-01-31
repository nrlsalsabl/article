<?php 
class Connection{
  private $link;
  public function __construct() {
    $this->link = new mysqli("localhost","root","","incnews");
  }
  public function connect() {
    return $this->link;
  }
  public function query($query) {        
    $result = $this->link->query($query);
    return $result;
  }
  public function multi_query($query) {        
    $result_multi = $this->link->multi_query($query);
    return $result_multi;
  }

  public function real_escape_string($val){
		$result = $this->link->real_escape_string($val);
		return $result;
	} 

	public function prepare($query){
		$result = $this->link->prepare($query);
		return $result;
	} 

	public function execute($query, $str, $ars){
        try {
            $stmt = $this->link->prepare($query);
            // return $ars;
            if (!$stmt->bind_param($str, ...$ars)) {
                die( "Error in bind_param: (" .$this->link->errno . ") " . $this->link->error);
            }
            
            $result = $stmt->execute();
            return $result;
        } catch (Exception $e) {
            return $e->getMessage();
        }
	} 

	public function select($query, $str, $ars){
        try {
            $stmt = $this->link->prepare($query);
            // return $ars;
            if (!$stmt->bind_param($str, ...$ars)) {
                die( "Error in bind_param: (" .$this->link->errno . ") " . $this->link->error);
            }
            $stmt->execute();
            $result = $stmt->get_result();
            return $result;
        } catch (Exception $e) {
            return $e->getMessage();
        }
	} 

    public function number_rows($query, $str, $ars){
        try {
            $stmt = $this->link->prepare($query);
            // return $ars;
            if (!$stmt->bind_param($str, ...$ars)) {
                die( "Error in bind_param: (" .$this->link->errno . ") " . $this->link->error);
            }
            $stmt->execute();
			$stmt -> store_result();

			/* Fetch the value */
			$stmt -> fetch();
			$numberofrows = $stmt->num_rows;
            return $numberofrows;
        } catch (Exception $e) {
            return $e->getMessage();
        }
	}

    
}
?>