   <!--br>/****************************************************************************************
    Author     : Richard Orfao 
    Course     :  CGS 4854-U01 (82024) Websiteconmgmt Class Lecture MoWe    5:00PM  -  6:15PM @ECS 136
    URL        : ocelot.aul.fiu.edu/~rorfa001
    Professor  : Michael Robinson 
    Program #  : Program 3 modify.php
                 {  } 

    Due Date   : 09/05/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Richard Orfao }..........

  ****************************************************************************************/</h3><br-->
  <html>

  <body>
        
    <?php
        
       $found = $_POST['found']; 

       if (  ( strlen(trim($found)) > 0 ) && ($found == $CustomerID) )
       {               
                  
          $query = "UPDATE customers 
                    SET CustomerID    =  '$CustomerID', 
                        FirstName     =  '$FirstName',  
                        LastName      =  '$LastName',
                        Email         =  '$Email',
                        Telephone     =  '$Telephone',
                        CarBrand      =  '$CarBrand',
                        Sedan         =  '$Sedan',
                        SUV           =  '$SUV',
                        Truck         =  '$Truck',
                        Sport         =  '$Sport',
                        Year          =  '$Year',
                        Comments      =  '$Comments'  
                                 
                   WHERE CustomerID = '$CustomerID'";
                       
          $sql = mysqli_query( $connection,$query );
                                              
          if ($sql)
          {
             $message ="<span style=\"color: blue;\">RECORD $CustomerID MODIFIED</span><br\>";
          }   


          else
          {
             $message ="<span style=\"color: red;\"></span><br\>";
          }

             
       }   
       else
       {
          $message ="<span style=\"color: red;\">RECORD $CustomerID CAN NOT BE MODIFIED, FIND IT FIRST</span><br\>";
       }
           
    ?>
            
  </body>
                
</html>