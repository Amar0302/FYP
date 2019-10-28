<?php
    require_once('globals.php');
    error_reporting(E_ALL);
	
	
    function assertValidUpload($code)
    {

         if ($code == UPLOAD_ERR_OK) {
            return;
        }
 
        switch ($code) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                $msg = 'Image is too large';
                break;
 
            case UPLOAD_ERR_PARTIAL:
                $msg = 'Image was only partially uploaded';
                break;
 
            case UPLOAD_ERR_NO_FILE:
                $msg = 'No image was uploaded';
                break;
 
            case UPLOAD_ERR_NO_TMP_DIR:
                $msg = 'Upload folder not found';
                break;
 
            case UPLOAD_ERR_CANT_WRITE:
                $msg = 'Unable to write uploaded file';
                break;
 
            case UPLOAD_ERR_EXTENSION:
                $msg = 'Upload failed due to extension';
                break;
 
            default:
                $msg = 'Unknown error';
        }
 
        throw new Exception($msg);
    }
 
    $errors = array();
 
   
 
    if (count($errors) == 0) {
        // no errors, so insert the image
 
		$query = sprintf(
            "insert into users (userid ,password, username, email)
                values ('%d', '%s', '%s', '%s')",
            '', 					// the itemId is auto increment 
            $_REQUEST['password'],
            $_REQUEST['username'],
            $_REQUEST['email']
        );
     	$result = $db->query($query);
		if (PEAR::isError($result)){die($result->getMessage());}  

        //$id = (int) mysql_insert_id($db);
 		$id = $db->lastInsertID(); //'users', 'userid'
 		if (PEAR::isError($id)) {die($id->getMessage());}
 		
 		
        // finally, redirect the user to view the new image
        header("Location: index.php");
        exit;
    }
?>
