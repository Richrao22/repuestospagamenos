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

  <head>

    <title>Email Me ( Orfao's Autoparts )</title>

  </head>



<body>


<table width="100%">

<tr>

  <td align="center">
    <font size="6" color="#FF1A0A" face="Helvetica"> <b> ~~~~ This is an educational website ~~~~ </b> </font>
    <br>
    <font size="6" color="#0736EE" face="Helvetica"> <b> <a href="https://www.cis.fiu.edu/">Florida International University</a> </b> </font><br>
  </td>

</tr>

</table>

<font size="5">Orfao Richard Email Me</font>

  <hr>

<?php include('../includes/mainMenu.php')?>

   <table>
    <tr>
      <td>

        &nbsp;

      </td>
    </tr>
 
  </table>

        <table align="center">
          <tr align="center">
            <td align="center">
                <form method="POST" action="mailer.php">
                <p><strong><font size="5" color="#871DBC">What kind of problem did you have?</font></strong></p>

                &nbsp;<input type="radio" checked name="MessageType" value="Bad Information"><font size="5">Bad Information </font>&nbsp; &nbsp;
                <input type="radio" name="MessageType" value="Not Part Requested"><font size="5">No The Part Requested</font>&nbsp; &nbsp;
                <input type="radio" name="MessageType" value="Suggestion"> <font size="5">Suggestion</font>&nbsp; &nbsp;
                <br> 

                <p><strong><font size="5" color="#871DBC">Enter any comments here:</font></strong></p>

                <textarea name="Comentarios" placeholder="Comments" style="width: 50%; height: 100; font-size: 28px;"></textarea><br><br>

                <strong><font size="5" color="#871DBC">How would you like to be contacted:</font></strong><br><br>

                <table>
                  <tr><td>&nbsp;<font size="5">Name      &nbsp; &nbsp;&nbsp; &nbsp;</font> </td> <td><input type="text" maxlength="256" placeholder="Name" name="UserName" style="height:40px; width:300px; font-size:20px;"> </td></tr>

                  <tr><td>&nbsp;<font size="5">E-mail    &nbsp; &nbsp;&nbsp; &nbsp;</font> </td> <td><input type="text" maxlength="256" placeholder="E-mail" name="UserEmail" style="height:40px; width:300px; font-size:20px;"></td></tr>

                  <tr><td>&nbsp;<font size="5">Telephone&nbsp; &nbsp;&nbsp; &nbsp;</font> </td> <td><input type="text" maxlength="256" placeholder="Telephone" name="UserTel"style="height:40px; width:300px; font-size:20px;">  </td></tr>
                </table>

                <br><br> 
                <input type="submit" value="Submit" name="submit" style="height:40px; width:120px; font-size:20px;"> &nbsp;
                <input type="reset"  value="Clear Form" style="height:40px; width:120px; font-size:20px;">
                <br>

              </form>
            </td>
          </tr>
        </table>

        

    </td>
  </tr>
</table>
</center>

    <table>
    <tr>
      <td>

        &nbsp;

      </td>
    </tr>
 
  </table>



</body>
</html>

<?php include('../includes/mainMenu.php')?>