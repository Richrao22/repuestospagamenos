<!--br>/****************************************************************************************
    Author     : Richard Orfao 
    Course     :  CGS 4854-U01 (82024) Websiteconmgmt Class Lecture MoWe    5:00PM  -  6:15PM @ECS 136
    URL        : ocelot.aul.fiu.edu/~rorfa001
    Professor  : Michael Robinson 
    Program #  : Program 3  controller3.php
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
             $tableName = "customers";
                      
             $query = mysqli_query( $connection, "SELECT * FROM $tableName" );
                     
             //if table does not exist, create it 
             if(!$query)
             {
                echo "The ".$tableName." does not exists<br>";
                        
                echo "<br>Creating table : ".$tableName."<br>";
                       
                $sql = "CREATE TABLE ".$tableName."(
                        CustomerID VARCHAR(20) NOT NULL,
                        PRIMARY KEY(CustomerID),
                        FirstName VARCHAR(30),
                        LastName VARCHAR(30),
                        Email VARCHAR(30),
                        Telephone VARCHAR(12),
                        CarBrand VARCHAR(20),
                        Sedan VARCHAR(5), 
                        SUV  VARCHAR(3),
                        Truck  VARCHAR(5),
                        Sport  VARCHAR(5),
                        Year VARCHAR(10),
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
       $CustomerID   = $_POST['CustomerID'];
       $FirstName    = $_POST['FirstName'];
       $LastName     = $_POST['LastName'];
       $Email        = $_POST['Email'];
       $Telephone    = $_POST['Telephone'];
       $CarBrand     = $_POST['CarBrand'];
       $Sedan        = $_POST['Sedan'];
       $SUV          = $_POST['SUV'];
       $Truck        = $_POST['Truck'];
       $Sport        = $_POST['Sport'];
       $Year         = $_POST['Year'];
       $Comments     = $_POST['Comments'];            
                 
       $found = $_POST['found']; 
                
     
       if ( $_POST['Find'] )
       { 
          include('find.php');
       }

       else if ( $_POST['Save'] )
       { 
          include('save.php');
       }

       else if ( $_POST['Modify'] )
       {  
          include('modify.php');
       }

       else if ( $_POST['Delete'] )
       { 
          include('delete.php');
       }

       else if ( $_POST['Help'] )
       { 
          include('help.php');
       }

       else if ( $_POST['About'] )
       {
          include('about.php');
       }

       else if ( $POST['Email_Me'] )
       {
          include('Email_Me');
       }

       else if ( $_POST['Clear'] )
       {
          include('clear.php');
       }

       else
       { 
           echo "<br><h1> you pressed UNKOWN button</h1>";   
       }

       mysqli_close($connection); 

       include( "program4.php" );


    ?>
                 
    </body>
  
  </html>


