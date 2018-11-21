   <!--br>/****************************************************************************************
    Author     : Richard Orfao 
    Course     :  CGS 4854-U01 (82024) Websiteconmgmt Class Lecture MoWe    5:00PM  -  6:15PM @ECS 136
    URL        : ocelot.aul.fiu.edu/~rorfa001
    Professor  : Michael Robinson 
    Program #  : Program 3 find.php
                 {  } 

    Due Date   : 09/05/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Richard Orfao }..........

  ****************************************************************************************/<br-->
  <html>
                     
  <body>
                        
    <?php
           
       $sql="SELECT * FROM customers where CustomerID = '$CustomerID'";
             
       if ($result=mysqli_query($connection,$sql))
       {
          $rowcount=mysqli_num_rows($result);
           
          while( $row = mysqli_fetch_array( $result ) )
          {
             $CustomerID    = $row['CustomerID'];    //primary key
             $FirstName     = $row['FirstName'];     //type="text"
             $LastName      = $row['LastName'];      //type="text"
             $Email         = $row['Email'];         //type="text"
             $Telephone     = $row['Telephone'];     //type="Text" 
             $CarBrand      = $row['CarBrand'];      //type="Dropdown"
             $Sedan         = $row['Sedan'];         //type="checkbox"
             $SUV           = $row['SUV'];           //type="checkbox" 
             $Truck         = $row['Truck'];         //type="checkbox"
             $Sport         = $row['Sport'];         //type="checkbox"
             $Year          = $row['Year'];          //Type="radio"
             $Comments      = $row['Comments'];      //type="text"
                       
          }

          $CustomerID=trim($CustomerID);

          if ( $rowcount )
          {
             $found = $CustomerID;
             $message ="<span style=\"color: blue;\">RECORD $found FOUND</span><br\>";
          } 
          else if( strlen($CustomerID) == 0 )           
          {
             $message ="<span style=\"color: red;\">CustomerID CAN NOT BE EMPTY</span><br>";         
          }
          else 
          {
             $message ="<span style=\"color: red;\">RECORD $CustomerID NOT FOUND</span><br>";
              
          }  
      }        
   ?>

  </body>
</html>