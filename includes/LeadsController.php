<!--br>/****************************************************************************************
    Author     : Richard Orfao 
    Course     :  CGS 4854-U01 (82024) Websiteconmgmt Class Lecture MoWe    5:00PM  -  6:15PM @ECS 136
    URL        : ocelot.aul.fiu.edu/~rorfa001
    Professor  : Michael Robinson 
    Program #  : Program 5  LeadsController.php
                 {  } 

    Due Date   : 09/05/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Richard Orfao }..........

  ****************************************************************************************/</h3><br-->
  <html>

  <head>
    
  </head>
          
  <body>

<?php



       //                                server               user          password  database     
       $connection = mysqli_connect("ocelot.aul.fiu.edu","fall18_rorfa001","5959717","fall18_rorfa001");
       if (mysqli_connect_errno())
       {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }

       else
       {  
          //echo "<br>I have connected to mySql<br>";            
             
          // Change database to another name if needed
             
          $dbName="fall18_rorfa001"; 
          $db_selected = mysqli_select_db( $connection, $dbName );
                      
          if (!$db_selected)
          {
             die( $dbName . ' does not exist, can\'t use it ' . mysqli_error());
          }
          else
          {
             //echo "I selected database : " . $db_selected . " " . $dbName . "<br></h3>" ;
                   
             //access to a table                    
             $tableName = "contacts";
                      
             $query = mysqli_query( $connection, "SELECT * FROM $tableName" );
                     
             //if table does not exist, create it 
             if(!$query)
             {
                echo "The ".$tableName." does not exists<br>";
                        
                echo "<br>Creating table : ".$tableName."<br>";
                       
                $sql = "CREATE TABLE ".$tableName."(
                        Telephone VARCHAR(20) NOT NULL,
                        PRIMARY KEY(Telephone),
                        FirstName VARCHAR(30),
                        LastName VARCHAR(30),
                        Email VARCHAR(30),
                        Comments VARCHAR(200)
                        )";
                                
                $result = mysqli_query( $connection, $sql );
                         
                //confirm table creation
                if ($result)
                {
                   echo "table ". $tableName." created<br>";
                }
                else
                {
                   die ("Can\'t create ". $tableName." ". mysqli_error() );
                }
                     
             }//if(!$query) if table does not exist, create it 
                        
          }//end if (!$db_selected) connecting to db
                
       }//end if (mysqli_connect_errno()) connecting to mysql

                    
       //extract the data inputed by the user creating global php fields 
       
       $location= $_POST['location'];
       $location=(int)$location;
       $Telephone    = $_POST['Telephone'];
       $FirstName    = $_POST['FirstName'];
       $LastName     = $_POST['LastName'];
       $Email        = $_POST['Email'];
       $Comments     = $_POST['Comments'];            
       $found = $_POST['found']; 
                
       if ( $_POST['Submit'] )
       { 

        include ('saveContact.php');

       $Telephone    = "";
       $FirstName    = "";
       $LastName     = "";
       $Email        = "";
       $Comments     = "";
       $found        = "";

        include ('Contact_us.php');

       }


      else if ($_POST['Last'])
      {
        $sql="SELECT * FROM contacts order by Telephone ASC";
          
        if ($results=mysqli_query($connection,$sql))
        {
          //find the total number of rows and sets the location to last row.
          $rowcount=mysqli_num_rows($results);
          $location=$rowcount-1;
         
          //data_seek command moves the memory pointer in SQL table objects.
          //location must be INT or LONG.
          mysqli_data_seek($results, $location);
            
          $row=mysqli_fetch_assoc($results);
            
          $Telephone = $row['Telephone'];
          $FirstName = $row['FirstName'];
          $LastName  = $row['LastName'];
          $Email     = $row['Email'];
          $Comments  = $row['Comments'];    
            
        }//end if ($results=mysqli_query($connection,$sql)) 

        include ('Leads.php');

      }//end if($_POST['Last'])





      else if ($_POST['Prev'])
      {
        $sql="SELECT * FROM contacts order by Telephone ASC";
          
        if ($results=mysqli_query($connection,$sql))
        {
          //Decrement location only if it is above the lowest possible value.
          if ($location >0)    
          {
            $location--;
          }

          mysqli_data_seek($results, $location);
          $row=mysqli_fetch_assoc($results);
            
          $Telephone = $row['Telephone'];
          $FirstName = $row['FirstName'];
          $LastName  = $row['LastName'];
          $Email     = $row['Email'];
          $Comments  = $row['Comments'];

        }//end if ($results=mysqli_query($connection,$sql))

        include ('Leads.php');

      }//end else if($_POST['Prev'])












      else if ($_POST['Next'])
      {
        $sql="SELECT * FROM contacts order by Telephone ASC";
          
        if ($results=mysqli_query($connection,$sql))
        {
          //total number of rows for the upper limit of the search function.
          $rowcount=mysqli_num_rows($results);
              
          //Increment location only if it is below the highest possible value.
          if ($location <$rowcount-1)    
          {
            $location++;
          }                           
                        
          mysqli_data_seek($results, $location);
          $row=mysqli_fetch_assoc($results);
            
          $Telephone = $row['Telephone'];
          $FirstName = $row['FirstName'];
          $LastName  = $row['LastName'];
          $Email     = $row['Email'];
          $Comments  = $row['Comments'];  
            
        }//end if ($results=mysqli_query($connection,$sql))

        include ('Leads.php');

      }//end else if($_POST['Next'])
    

      else if ($_POST['First'])
      {
        //Resets location to position 0, and grab the first record in the table.
        $location=0;    
        $sql="SELECT * FROM contacts order by Telephone ASC limit 1";
             
        if ($result=mysqli_query($connection,$sql))
        {
          $row = mysqli_fetch_array( $result );
                
          $Telephone = $row['Telephone'];
          $FirstName = $row['FirstName'];
          $LastName  = $row['LastName'];
          $Email     = $row['Email'];
          $Comments  = $row['Comments'];    
        }//end if ($result=mysqli_query($connection,$sql))

        include ('Leads.php');
      
      }//end else

      else
      {
        echo"you pressed nothing";
      }


       mysqli_close($connection); 


    ?>
                 
    </body>
  
  </html>


