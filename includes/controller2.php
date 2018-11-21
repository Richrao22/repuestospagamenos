<?php
  /****************************************************************************************
    Author     : Richard Orfao 
    Course     :  CGS 4854-U01 (82024) Websiteconmgmt Class Lecture MoWe    5:00PM  -  6:15PM @ECS 136
    URL        : ocelot.aul.fiu.edu/~rorfa001
    Professor  : Michael Robinson 
    Program #  : Assignment 2 
                 { Create a Dropdown Menu, Create a Form and Formatting } 

    Due Date   : 09/05/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Richard Orfao }..........

  ****************************************************************************************/

    echo 'This is the controller2.php'."<br><br>";

    $CustomerID = $_POST['CustomerID'];

    $FirstName = $_POST['FirstName'];
    
    $LastName = $_POST['LastName'];
    
    $Email = $_POST['Email'];
    
    $Telephone = $_POST['Telephone'];
    
    $CarBrand = $_POST['CarBrand'];
    
    /* CheckBoxes options */

    $Sedan = $_POST['Sedan'];
    $SUV = $_POST['SUV'];
    $Truck = $_POST['Truck'];
    $Sport = $_POST['Sport'];

    $Year = $_POST['Year'];
    
    $Comments = $_POST['Comments'];

    /* Printing all the Values */

    echo 'CustomerID: '.$CustomerID."<br><br>";

    echo "Last Name: ".$LastName."<br><br>";

    echo 'First Name: '.$FirstName."<br><br>";

    echo "Email: ".$Email."<br><br>";

    echo "Telephone: ".$Telephone."<br><br>";

    echo "CarBrand: ".$CarBrand."<br><br>";

    if( $_POST['Sedan'] )
   	{
   		echo "You selected ".$Sedan."<br><br>";
   	}

   	if ( $_POST['SUV'] )
   	{
   		echo "You selected ".$SUV."<br><br>";
   	}

   	if ( $_POST['Truck'] )
   	{
   		echo "You selected ".$Truck."<br><br>";
   	}

   	if ( $_POST['Sport'] )
   	{
   		echo "You selected ".$Sport."<br><br>";
   	}

    echo "Year: ".$Year."<br><br>";

    echo "Comments: ".$Comments."<br><br>";

    if ( $_POST['Submit'] ) 
    {
    	echo "You pressed the Find button ";
    }

    else if ( $_POST['Modify']) 
    {
    	echo "You pressed the Modify button";
    }

    else if ( $_POST['Save']) 
    {
    	echo "You pressed the Save button";
    }

    else if ( $_POST['Delete']) 
    {
    	echo "You pressed the Delete button";
    }

    else
    {
    	echo "Error not button pressed found";
    }
    
  ?>


