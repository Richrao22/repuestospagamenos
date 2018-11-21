<html>
<head>
    <title>Contac Us (Orfao's Autoparts)</title>



    <style type="text/css">

.MainHeadings20 /*main heading 20 pt*/
{ 
   font-family:Arial; 
   font-size:30pt;
   style="height:5px";
   color: #871DBC ;
}

.SecHeadings
{
	font-family:Arial; 
   font-size:23pt;
   style="height:5px";
   color: #871DBC ;
}

.webText
{
   font-family:Arial; 
   font-size:13pt;
   style="height:5px";
   color:black;
   
}

</style> 

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

<body link="blue" vlink="blue" alink="red" onload="currentTime()">

<table width="100%">

<tr>

  <td align="center">
    <font size="6" color="#FF1A0A" face="Helvetica"> <b> ~~~~ This is an educational website ~~~~ </b> </font>
    <br>
    <font size="6" color="#0736EE" face="Helvetica"> <b> <a href="https://www.cis.fiu.edu/">Florida International University</a> </b> </font><br>
  </td>

</tr>

</table>

<font size="5">Contact Us ( Orfao's Autoparts )</font>

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
          
          <a class="MainHeadings20">Orfao's Autoparts</a>

        </td>

      </tr>

    </table>

    <table>

        <tr>
          <td align="center">
            
            &nbsp;

          </td>
        </tr>

    </table>

    <?php include('mainMenu.php') ?>

    <table>

        <tr>
          <td align="center">
            
            &nbsp;

          </td>
        </tr>

    </table>


    <table width="100%">

        <tr>

          <td align="center">
                
              <a class="SecHeadings">Contact_Us</a>

          </td>

        </tr>

    </table>


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

    <form method="post" action="LeadsController.php">
    	


    <table width="30%" align="Center" >

        <tr>

            <td align="left" width="35%">
                
               <font face="Arial" size="5">Telephone</font> 

            </td>

            <td align="center" width="5%">
                
            </td>

			<td align="left">
                
                <input type="text" name="Telephone" placeholder="Telephone" value="<?php echo $Telephone ?>" style="width: 100%;  font: 20px arial;">

            </td>


        <tr>

            <td align="left" width="20%">
                
                <font face="Arial" size="5">First Name</font> 

            </td>

            <td align="center" width="5%">
                
                 

            </td>



			<td align="left">
                
                <input type="text" name="FirstName" placeholder="First Name" value="<?php echo $FirstName ?>" style="width: 100%;  font: 20px arial;">

            </td>
            

        <tr>

            <td align="left" width="20%">
                
                <font face="Arial" size="5">Last Name</font> 

            </td>

            <td align="center" width="5%">
                
                 

            </td>



			<td align="left">
                
                <input type="text" name="LastName" placeholder="Last Name" value="<?php echo $LastName ?>" style="width: 100%;  font: 20px arial;">

            </td>
            
        </tr>

        <tr>

            <td align="left" width="20%">
                
                <font face="Arial" size="5">Email</font> 

            </td>

            <td align="center" width="5%">
                
                 

            </td>



      <td align="left">
                
                <input type="text" name="Email" placeholder="Email" value="<?php echo $Email ?>" style="width: 100%;  font: 20px arial;">

            </td>
            
        </tr>

         <tr>
        	<td>
        		
        		&nbsp;

        	</td>

        </tr>

        <tr>
        	<td>
        		
        		&nbsp;

        	</td>

        </tr>

        <tr>

            <td align="left" width="20%">
                
                <font face="Arial" size="5">Comments</font> 

            </td>

            <td align="center" width="5%">
                
   
            </td>

			<td align="left">
                
                <textarea name="Comments" placeholder="Comments" style="width: 100%; height: 125; font-size: 20px;"><?php echo $Comments;?></textarea>

            </td>
            
        </tr>

    </table>
 
        <table width="50%">

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

        <table align="center" width="50%">

        <tr>
          <td align="center">
            
            <font size="5" face="arial"> <?php echo $message ?> </font>

          </td>
        </tr>

      </table>

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

    <table align="center">
    	<tr>
    		<td>
    			<input type="submit" name="Submit" value="Submit" style="height:40px; width:120px; font-size:20px;"> &nbsp;

    			<input type="reset" name="Clear" value="Clear" style="height:40px; width:120px; font-size:20px;"> &nbsp;

    			<input type="hidden" name="found"  value="<?php echo $found ?>">

    		</td>
    	</tr>
    </table>

        <table>

        <tr>
          <td align="center">
            
            &nbsp;

          </td>
        </tr>

    </table>

    </form>
    
</body>



