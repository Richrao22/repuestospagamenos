   <!--br>/****************************************************************************************
    Author     : Richard Orfao 
    Course     :  CGS 4854-U01 (82024) Websiteconmgmt Class Lecture MoWe    5:00PM  -  6:15PM @ECS 136
    URL        : ocelot.aul.fiu.edu/~rorfa001
    Professor  : Michael Robinson 
    Program #  : Program 3 save.php
                 {  } 

    Due Date   : 09/05/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Richard Orfao }..........

  ****************************************************************************************/</h3><br-->
  <html>
  
  <body>
    
    <?php
        
       $CustomerID=trim($CustomerID);
       if(strlen($CustomerID)>0)           
       {   
          $sql="INSERT INTO customers (
                  CustomerID,
                  FirstName,
                  LastName,
                  Email,
                  Telephone,
                  CarBrand,
                  Sedan,
                  SUV,
                  Truck,
                  Sport,
                  Year,
                  Comments
               )
               VALUES
               (            
                  '$CustomerID',
                  '$FirstName',
                  '$LastName',
                  '$Email',
                  '$Telephone',
                  '$CarBrand',
                  '$Sedan',
                  '$SUV',
                  '$Truck',
                  '$Sport',
                  '$Year',
                  '$Comments'                     
               )";
                
                  
          if (mysqli_query($connection, $sql)) 
          {
             //echo "<br>New record created successfully";
             $message ="<span style=\"color: blue;\">Record $CustomerID Added</span><br\>";
          } 
          else
          {
             //echo "<br>Error: " . $sql . "<br>" . mysqli_error($connection);
             $message ="<span style=\"color: red;\">RECORD $CustomerID ALREADY EXISTS</span><br\>";
          }
           
       }//end if(strlen($Telephone)>0)                      
       else
       {
          $message ="<span style=\"color: red;\">RECORD $CustomerID NOT ADDED <BR> CustomerID CAN NOT BE EMPTY</span><br\>";
       } 
             
    ?>
       
  </body>

</html>