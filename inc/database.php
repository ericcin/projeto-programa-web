<!DOCTYPE html>
<html lang="en">
<head>
<title>memeG</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="logo.png"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>

<?php	
	mysqli_report(MYSQLI_REPORT_STRICT);	
	function open_database() {
        		try {		
                        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                                    return $conn;		
                                } catch (Exception $e) {		
                                        echo $e->getMessage();			
                                        return null;		
                                    }	
                                }	
                                	function close_database($conn) {
                                                try {			mysqli_close($conn);	
                                                	} catch (Exception $e) {
                                                                    echo $e->getMessage();	
                                                                    }
                                                                    }

/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 */
function find( $table = null, $id = null ) {
  
	$database = open_database();
	$found = null;

	try {
	  if ($id) {
	    $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
	    $result = $database->query($sql);
	    
	    if ($result->num_rows > 0) {
	      $found = $result->fetch_assoc();
	    }
	    
	  } else {
	    
	    $sql = "SELECT * FROM " . $table;
	    $result = $database->query($sql);
	    
	    if ($result->num_rows > 0) {
	     /* $found = $result->fetch_all(MYSQLI_ASSOC); */
        
        
        $found = array();

        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        } 
	    }
	  }
	} catch (Exception $e) {
	  $_SESSION['message'] = $e->GetMessage();
	  $_SESSION['type'] = 'danger';
  }
	
	close_database($database);
	return $found;
}

/**
 *  Pesquisa Todos os Registros de uma Tabela
 */
function find_all( $table ) {
  return find($table);
}

/**
 *  Remove uma linha de uma tabela pelo ID do registro
 */
function remove( $table = null, $id = null ) {

  $database = open_database();
	
  try {
    if ($id) {

      $sql = "DELETE FROM " . $table . " WHERE id_imagem = " . $id;
      $result = $database->query($sql);

      if ($result = $database->query($sql)) {   	
        $_SESSION['message'] = "Registro Removido com Sucesso.";
        $_SESSION['type'] = 'success';
      }
    }
  } catch (Exception $e) { 

    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }

  close_database($database);
}

