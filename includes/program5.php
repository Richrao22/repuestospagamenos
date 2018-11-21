<!-- ***************************************************************************************
    Author     : Richard Orfao 
    Course     :  CGS 4854-U01 (82024) Websiteconmgmt Class Lecture MoWe    5:00PM  -  6:15PM @ECS 136
    URL        : ocelot.aul.fiu.edu/~rorfa001
    Professor  : Michael Robinson 
    Program #  : Program 4 
                 { To work with tables, fonts, colors and images } 

    Due Date   : 10/15/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Richard Orfao }..........

  ***************************************************************************************** -->
<html>

<style>

    .tooltip 
    {
      position: relative;
      display: inline-block;


    }

    .tooltip .tooltiptext 
    {
      visibility: hidden;
      width: 320px;
      background-color: #D6F3F7 ;
      color: #871DBC;
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      margin-left: -160px;
      opacity: 0;
      transition: opacity 1s;
    }


    .tooltip .tooltiptext .tooltip-left 
    {
      top: -5px;
      bottom:auto;
      right: 128%;  
    }



    .tooltip .tooltiptext::after 
    {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: dashed;
      border-color: #871DBC  transparent transparent; /*arrow*/
    }

    .tooltip:hover .tooltiptext 
    {
      visibility: visible;
      opacity: 1;
    }

  </style>

	<head>

		<title>Orfao Richard Program 5</title>

    <script>
            
         
      function currentTime() 
      {
         var today   = new Date();
         var hour    = today.getHours();
         var minutes = today.getMinutes();
         var sec     = today.getSeconds();
      
         minutes = checkTime(minutes);
         sec     = checkTime(sec);
         
         document.getElementById('txt').innerHTML = "Current Time : "+hour+":"+minutes+":"+sec;

         var t = setTimeout(function(){currentTime()},500);
         
              
      }

      function checkTime(i) 
      {
         if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
         return i;
      }

   </script>


	</head>

  <!-- I have the FIU website educational comments and Table with menu-->
  <body link="blue" vlink="blue" alink="red" onload="currentTime()">

    <!-- Table For Top Part FIU EDUCATIONAL -->
    <table width="100%">

      <tr>

        <td align="center">
          <font size="6" color="#FF1A0A" face="Helvetica"> <b> ~~~~ This is an educational website ~~~~ </b> </font>
          <br>
          <font size="6" color="#0736EE" face="Helvetica"> <b> <a href="https://www.cis.fiu.edu/">Florida International University</a> </b> </font><br>
        </td>

      </tr>

    </table>
      
    <font size="5">Orfao Richard Program 5</font>

		<hr>

    <table width="80%" align="center">

      <tr>

        <td align="Left" width="60%"> <!-- change the positions of the clock with the width -->

          <script>
        
            loggedInTime();
          
            function loggedInTime( temp )
            {
              var tiempo = new Date();  
              var temp2 =  "Logged in at : " + tiempo;
              var result = temp2;
              document.write( result );
            }

            currentTime();
      
          </script>
          
        </td>

        <td align="left" width="18%"> <!-- change the positions of the clock with the width-->

          <div id="txt"></div>
          
        </td>

      </tr>

    </table>

    <table width="100%">

      <tr>

        <td align="center">
          
          <font size="20"> Orfao's Autoparts </font>

        </td>

      </tr>

    </table>

    <?php include('mainMenu.php') ?>

    <?php 
        
      if( strlen(trim($found)) > 0 )
      {  
        
      }
      else 
      {
         $found = ""; 
      }

   ?>

    <table>

        <tr>
          <td align="center">
            
            &nbsp;

          </td>
        </tr>

        <tr>
          <td align="center">
            
            &nbsp;

          </td>
        </tr>

    </table>

		
    <form method="post" action="controller5.php">

      <table width="80%" align="center">
        
        <tr>
          
          <td style="width: 10%;">
            <div class="tooltip"> 
            <span class="tooltiptext"><font size="4" color="red">REQUIRED <br></font><font color="#871DBC"> Enter your Customer ID</font></span>
            <font size="5" face="Arial">Customer ID</font>
          </td>

          <td style="width: 15%;">
            <input type="text" placeholder="Customer ID" name="CustomerID" value="<?php echo $CustomerID ?>" style="width: 100%; font: 20px arial;">
          </td>

          <td style="width: 2%;"></td>

          <td style="width: 10%;">
             <div class="tooltip"> 
             <span class="tooltiptext"><font size="4" color= "#871DBC" >Select a Car Brand</font></span>
            <font size="5" face="Arial">Car Brand</font>
          </td>

          <td style="width: 30%;">

            <select name="CarBrand" style="width:50%; font-size:25px;">

              <option value="Toyota" <?php if ($CarBrand == "Toyota") echo selected ?> > Toyota </option>
              <option value="Honda" <?php if ($CarBrand == "Honda") echo selected ?> > Honda </option>
              <option value="Hyundai" <?php if ($CarBrand == "Hyundai") echo selected ?> > Hyundai </option>
              <option value="Volkswagen" <?php if ($CarBrand == "Volkswagen") echo selected ?> > Volskwagen </option>
              <option value="Mitsubishi" <?php if ($CarBrand == "Mitsubishi") echo selected ?> > Mitsubishi </option>
              <option value="Ford" <?php if ($CarBrand == "Ford") echo selected ?> > Ford </option>
              <option value="Chevrolet" <?php if ($CarBrand == "Chevrolet") echo selected ?> > Chevrolet </option>
              
            </select>

          </td>

        </tr>

        <tr>

          <td style="width: 10%;">
            <div class="tooltip"> 
            <span class="tooltiptext"><font size="4" color="#871DBC">Enter your First Name</font></span>
            
            <font size="5" face="Arial">First Name</font>
          </td>

          <td style="width: 15%;">
            <input type="text" name="FirstName" placeholder="First Name" value="<?php echo $FirstName ?>" style="width: 100%; font: 20px arial;">
          </td>

          <td style="width: 2%;"></td>

          <td style="width: 5%;"></td>

          <td style="width: 30%;">

          </td>

        </tr>

        <tr>

        <td style="width: 10%;">
            <div class="tooltip"> 
            <span class="tooltiptext"><font size="4" color="#871DBC">Enter your Last Name</font></span>
            <font size="5" face="Arial">Last Name</font>
          </td>

          <td style="width: 15%;">
            <input type="text" name="LastName" placeholder="LastName" value="<?php echo $LastName ?>" style="width: 100%; font: 20px arial;">
          </td>

          <td style="width: 2%;"></td>

          <td style="width: 5%;">
            <div class="tooltip"> 
            <span class="tooltiptext"><font size="4" color="#871DBC">Select your type of car</font></span>
            <font size="5" face="Arial">Type of Car</font> 
          </td>

          <td style="width: 30%;">
            <input type="checkbox" <?php if ($Sedan == "Sedan") echo checked;?> name="Sedan" value="Sedan"> <font size="5">Sedan</font> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

            <input type="checkbox" <?php if ($SUV == "SUV") echo checked;?> name="SUV" value="SUV"> <font size="5">SUV</font> &nbsp; &nbsp;&nbsp;

            <input type="checkbox" <?php if ($Truck == "Truck") echo checked;?> name="Truck" value="Truck"> <font size="5">Truck</font> &nbsp; &nbsp;&nbsp;

            <input type="checkbox" <?php if ($Sport == "Sport") echo checked;?> name="Sport" value="Sport"> <font size="5">Sport</font> &nbsp; &nbsp;&nbsp;
          </td>

        </tr>

        <tr>

        <td style="width: 10%;">
            <div class="tooltip"> 
            <span class="tooltiptext"><font size="4" color="#871DBC">Enter your Email</font></span>
            <font size="5" face="Arial">E-mail</font>
          </td>

          <td style="width: 15%;">
            <input type="text" name="Email" placeholder="E-mail" value="<?php echo $Email ?>" style="width: 100%;  font: 20px arial;">
          </td>

          <td style="width: 2%;"></td>

          <td style="width: 5%;">
            <font size="5" face="Arial"> </font>
          </td>

          <td style="width: 20%;">

          </td>

        </tr>

        <tr>

          <td style="width: 10%;">
            <div class="tooltip"> 
            <span class="tooltiptext"><font size="4" color="#871DBC">Enter your Telephone</font></span>
            <font size="5" face="Arial">Telephone</font>
          </td>

          <td style="width: 15%;">
            <input type="text" name="Telephone" placeholder="Telephone" value="<?php echo $Telephone ?>" style="width: 100%;  font: 20px arial;">
          </td>

          <td style="width: 2%;"></td>

          <td style="width: 5%;">
            <div class="tooltip"> 
            <span class="tooltiptext"><font size="4" color="#871DBC">Select the year of your car</font></span>
            <font size="5" face="Arial">Year</font>
          </td>

          <td style="width: 20%;">

            <input type="radio" <?php if ($Year == "2016")   echo "checked"; ?> name="Year" value="2016" checked> <font size="5">2016</font> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;

            <input type="radio" <?php if ($Year == "2017")   echo "checked"; ?> name="Year" value="2017"> <font size="5">2017</font> &nbsp; &nbsp;&nbsp;

            <input type="radio" <?php if ($Year == "2018")   echo "checked"; ?> name="Year" value="2018"> <font size="5">2018</font> &nbsp; &nbsp; &nbsp;&nbsp;

            <input type="radio" <?php if ($Year == "2019")   echo "checked"; ?> name="Year" value="2019"> <font size="5">2019</font> &nbsp; &nbsp; &nbsp;

          </td>

        </tr>


        <tr>

          <td style="width: 10%;">
            
          </td>

          <td style="width: 20%;">
            
          </td>

          <td style="width: 2%;"></td>

          <td style="width: 5%;">
          
          </td>

          <td style="width: 20%;">
            <font> &nbsp; </font>
          </td>

        </tr>

        <tr>

          <td style="width: 10%;">
            
          </td>

          <td style="width: 20%;">
            
          </td>

          <td style="width: 2%;"></td>

          <td style="width: 5%;">
            <div class="tooltip"> 
            <span class="tooltiptext"><font size="4" color="#871DBC">Enter any comments</font></span>
            <font size="5" face="Arial">Comments</font>
          </td>

          <td style="width: 20%;">

            <textarea name="Comments" placeholder="Comments" style="width: 50%; height: 100; font-size: 28px;"><?php echo $Comments;?></textarea>

          </td>

        </tr>

        <tr><td> <br> </td></tr>

      </table>


      <table align="center" >

        <tr>
          <td align="center">
            
            <font size="5" face="arial"> <?php echo $message ?> </font>

          </td>
        </tr>

        <tr>
          <td align="center">
            
            &nbsp;

          </td>
        </tr>

        <tr>
          <td align="center">
            
            <input type="submit" name="Find" value="Find" style="height:40px; width:120px; font-size:20px;"> &nbsp;
            
            <input type="Submit" name="Modify" value="Modify" style="height:40px; width:120px; font-size:20px;"> &nbsp;

            <input type="Submit" name="Save" value="Save" style="height:40px; width:120px; font-size:20px;"> &nbsp;

            <input type="Submit" name="Delete" value="Delete" style="height:40px; width:120px; font-size:20px;"> &nbsp;

            <input type="Submit" name="Clear" value="Clear" style="height:40px; width:120px; font-size:20px;"> &nbsp;

            <input type="Submit" name="Help" value="Help" onclick="location.href='help.php'" style="height:40px; width:120px; font-size:20px;"> &nbsp;

            <input type="button" name="About" value="About" onclick="location.href='about.php'" style="height:40px; width:120px; font-size:20px;"> &nbsp;

            <input type="button" name="Email_Me" value="Email_Me" onclick="location.href='Email_Me.php'"style="height:40px; width:120px; font-size:20px;"> &nbsp;

            <input type="button" name="Contact_us" value="Contact_us" onclick="location.href='Contact_us.php'" style="height:40px; width:120px; font-size:20px;"> &nbsp;

            <input type="button" name="Leads" value="Leads" onclick="location.href='Leads.php'"style="height:40px; width:120px; font-size:20px;"> &nbsp;

            <input type="hidden" name="found"  value="<?php echo $found ?>" >

          </td>
        </tr>
      
      
      </table>
      
    </form>

            


       

    <table>

        <tr>
          <td align="center">
            
            &nbsp;

          </td>
        </tr>

        <tr>
          <td align="center">
            
            &nbsp;

          </td>
        </tr>

    </table>

    <?php include('mainMenu.php') ?>

  </body>

</html>

