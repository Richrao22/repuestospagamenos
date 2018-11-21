   <!--br>/****************************************************************************************
    Author     : Richard Orfao 
    Course     :  CGS 4854-U01 (82024) Websiteconmgmt Class Lecture MoWe    5:00PM  -  6:15PM @ECS 136
    URL        : ocelot.aul.fiu.edu/~rorfa001
    Professor  : Michael Robinson 
    Program #  : Program 3 delete.php
                 {  } 

    Due Date   : 09/05/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Richard Orfao }..........

  ****************************************************************************************/</h3><br-->
  <html>

  <body>
    
    <!--h3>this is delete.phd</h3-->
             
                  
    <?php
                   
       $record = "RECORD ". $CustomerID." DELETED";
         
       $found = $_POST['found']; 
       //echo "delete  found = [" . $found . "]<br>";
        
       // sql to delete a record
       $sql="DELETE FROM customers WHERE CustomerID='$CustomerID'";
         
       $CustomerID=trim($CustomerID);
          
       //     if(strlen($CustomerID)>0)           
       if (  ( strlen(trim($found)) > 0 ) && ($found == $CustomerID) )
       { 
                      
          if (mysqli_query($connection, $sql)) 
          {
             //echo "Record deleted successfully found = {".$found."}";
             $message ="<span style=\"color: red;\">RECORD $CustomerID DELETED</span><br\>";
             $found=""; //this clear the flag for record found to be able to modify 
          }         
          else 
          {
             $message = "Error deleting record: " . mysqli_error($connection); 
          }
          
       }   
       else
       {
          $message ="<span style=\"color: red;\">RECORD $CustomerID CAN NOT BE DELETED <BR> IT DOES NOT EXISTS</span><br\>";
       }
       
    ?>
                           
  </body>
                    
</html>