<?php  

	function insert($table, $data = array()){

		# 1º parte da Query - Tabela
		$query =  "INSERT INTO `$table` ";

		# 2º Parte da Query
		$fields = [];
		$values = [];
		foreach ($data as $key => $value) {
			$fields[] = $key;
			$values[] = $value;
		}

		$fields = implode('`, `', $fields);
		$query .= "(`$fields`)";

		# 3º Parte da query
		$values = implode("', '", $values);
		$query .= " VALUES ('$values'); ";

		global $conn;

		$result = mysqli_query($conn, $query) or die(mysqli_error());

		return $result;

	}

    function select($table, $fields, $filters, $extra){
        $query = "SELECT ";
        if($fields == null){
            $query .= "* ";
        }else{
            $fields = implode('`, `', $fields);
            $query .= "`$fields` ";
        }
        $query .= " FROM `$table` ";

        if($filters != null){
			$query .= " WHERE ";
			foreach ($filters as $key => $value) {
				$query .= "`$key` = '$value' AND ";
			}
            
			$query = substr($query, 0, -4);
		}

        if($extra != null){
            $query .= $extra;
        }

        global $conn;

		$result = mysqli_query($conn, $query) or die(mysqli_error());

		if(!$result){
			return false;
		}

		$data = [];
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}

		return $data;
    }

    function update($table, $data, $filters){
        $query = "UPDATE `$table` SET ";
		foreach ($data as $key => $value){
			$query .= "`$key` = '$value', ";
		}
		$query = substr($query, 0, -2);

		$query .= " WHERE ";
		foreach ($filters as $key => $value) {
			$query .= "`$key` = '$value' AND ";
		}        
			$query = substr($query, 0, -4);


		global $conn;

		$result = mysqli_query($conn, $query) or die(mysqli_error());

		return $result;
    }

	function delete($table, $filters){
		$query = "DELETE FROM `$table` ";

		$query .= " WHERE ";
		foreach ($filters as $key => $value) {
			$query .= "`$key` = '$value' AND ";
		}        
			$query = substr($query, 0, -4);


		global $conn;

		$result = mysqli_query($conn, $query) or die(mysqli_error());

		return $result;
	}
	
?>
