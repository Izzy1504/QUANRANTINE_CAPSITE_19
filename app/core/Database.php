<?php 
class Database{
    private $__conn;
    public function __construct(){
        global $db_config;
        $this->__conn = Connection::connection($db_config);
    }

    public function create($table, $data) {
        // Build SQL statement dynamically using $data array
        $sql = "INSERT INTO " . $table . " (";
        $columns = [];
        $values = [];
      
        foreach ($data as $column => $value) {
          $columns[] = $column;
      
          if ($value === null) {
            $values[] = "NULL";
          } else {
            $value = str_replace('\'', '\\\'', $value);
            $values[] = "N'" . $value . "'";
          }
        }
      
        $sql .= implode(", ", $columns) . ") VALUES (" . implode(", ", $values) . ")";
        // echo $sql;
      
        // Prepare and execute SQL statement
        $stmt = sqlsrv_prepare($this->__conn, $sql);
      
        // Option 1a: Bind data values when using prepared statement parameters
        // foreach ($data as $column => $value) {
        //   sqlsrv_bind($stmt, ":$column", $value, PDO::PARAM_STR);
        // }
      
        if (sqlsrv_execute($stmt) === false) {
          die(print_r(sqlsrv_errors(), true));
        }
      
        // Close connection
        sqlsrv_close($this->__conn);
      
        // Return the ID of the inserted record (modify as needed)
        // return sqlsrv_rows_affected($stmt);
      }
      
      

      public function update($table, $data, $condition) {
        // Build SQL statement dynamically using $data and $condition arrays
        $sql = "UPDATE " . $table . " SET ";
        $updates = [];
      
        foreach ($data as $column => $value) {
          if ($value === null) {
            $updates[] = $column . " = NULL";
          } else {
            // Thêm tiền tố N cho giá trị chuỗi
            $value = str_replace('\'', '\\\'', $value); // Escape dấu nháy đơn
            $updates[] = $column . " = N'" . $value . "'";
          }
        }
      
        $sql .= implode(", ", $updates);
        $sql .= " WHERE " . $condition;
      
        // Prepare and execute SQL statement
        $stmt = sqlsrv_prepare($this->__conn, $sql, array("CharacterSet" => "UTF-8"));
        if (sqlsrv_execute($stmt) === false) {
          die(print_r(sqlsrv_errors(), true));
        }
      
        // Close connection
        sqlsrv_close($this->__conn);
      }
      
    public function delete($table, $condition) {
        // Build SQL statement dynamically using $condition array
        $sql = "DELETE FROM " . $table . " WHERE " . $condition;
    
        // Prepare and execute SQL statement
        $stmt = sqlsrv_prepare($this->__conn, $sql);
        if (sqlsrv_execute($stmt) === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        // Close connection
        sqlsrv_close($this->__conn);

    }
    public function query($sql, $params = []) {
        // Execute the provided SQL statement with parameters
        $stmt = sqlsrv_query($this->__conn, $sql, $params);
    
        if (!$stmt) {
            die(print_r(sqlsrv_errors(), true));
        }
    
        // Fetch all results as an associative array
        $results = [];
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $results[] = $row;
        }
    
        // Free resources associated with the statement
        sqlsrv_free_stmt($stmt);
    
        return $results;
    }
    public function countRows($table) {
        $sql = "SELECT COUNT(*) AS num_rows FROM $table";
        $results = $this->query($sql);
        return $results[0]['num_rows']; // Lấy giá trị 'num_rows' từ kết quả đầu tiên
      }
      
    
      
      
    
    
    
    
}