<?php

    include (__DIR__ . '/db.php');
    
    
    function getUsers () {
        global $db;
        
        $results = [];

        $stmt = $db->prepare("SELECT userID, fName, lName, userName, email, salt,date,isAdmin FROM userstable ORDER BY userName"); 
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                 
         }
         
         return ($results);
    }

    function getUser ($id) {
        global $db;
        
        $results = [];

        $stmt = $db->prepare("SELECT  fName, lName, userName, email, salt, date, isAdmin FROM userstable WHERE userID=:userID"); 
        $stmt->bindValue('userID',$id);
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetch(PDO::FETCH_ASSOC);
                 
         }
         
         return ($results);
    }
    
    
    


    
    function addUser ($fn, $ln,$usr,$ema,$slt,$dte) {
        global $db;
        $results = "Not added";

        $stmt = $db->prepare("INSERT INTO userstable SET fName = :fName, lName = :lName, userName= :userName, email= :email, salt = :password, date= :date");

        $binds = array(

            ":fName" => $fn,
            ":lName" => $ln,
            ":userName"=>$usr,
            ":email"=>$ema,
            ":password"=>$slt,
            ":date"=>$dte
        );
        
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'User Created';
        }
        
        return ($results);
    }

    function updatePatient ($id,$fname, $lname, $birthdate,$married) {
        global $db;

        $results = "";

        $stmt = $db->prepare("UPDATE patients SET patientFirstname = :patientFirstname, patientLastname = :patientLastname,patientBirthDate=:patientBirthDate,patientMarried=:patientMarried WHERE id=:id");
        
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':patientFirstname', $fname);
        $stmt->bindValue(':patientLastname', $lname);
        $stmt->bindValue(':patientBirthDate', $birthdate);
        $stmt->bindValue(':patientMarried', $married);

      
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = 'Data Updated';
        }
        
        return ($results);
    }

 
    function deletePatient ($id) {
        global $db;
        
        $results = "Data was not deleted";
        $stmt = $db->prepare("DELETE FROM patients WHERE id=:id");
        
        $stmt->bindValue(':id', $id);
            
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = 'Data Deleted';
        }
        
        return ($results);
    }

    
   
    

?>