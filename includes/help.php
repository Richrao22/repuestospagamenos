<!-- ***************************************************************************************
    Author     : Richard Orfao 
    Course     :  CGS 4854-U01 (82024) Websiteconmgmt Class Lecture MoWe    5:00PM  -  6:15PM @ECS 136
    URL        : ocelot.aul.fiu.edu/~rorfa001
    Professor  : Michael Robinson 
    Program #  : Program 4 
                 {  } 

    Due Date   : 10/15/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Richard Orfao }..........

  ***************************************************************************************** -->
<html>

<head>

<style type="text/css">

</style>
   
</head>

<body>

<script>

help();

function help()
{
   // Open a new window at a specific location
   var myWindow = window.open("","Help","width=700, height=400, scrollbars=yes, resizable=yes, left=870, top=50");

   // Display the purpose of each button on the form in the newly opened window
   myWindow.document.write("<h2>Buttons Purpose:\n</h2>");
     
   myWindow.document.write("<p style='color:blue;' >\n- <b>Find.</b> ");

   myWindow.document.write("<p style='color:Black' >\nLooks a specific Customer inside of the Database.");

   

   myWindow.document.write("<p style='color:Purple' >\n- <b>Save.</b>  </p>");

   myWindow.document.write("<p style='color:Black' >\nSaves information of a specific Customer inside of the Database.");


   
   myWindow.document.write("<p style='color:Green' >\n- <b>Modify.</b> </p>");

   myWindow.document.write("<p style='color:Black' >\nModifies the information of a specific Customer inside of the Database.");


   
   myWindow.document.write("<p style='color:Gray' >\n- <b>Delete.</b> </p>");

   myWindow.document.write("<p style='color:Black' >\nDeletes all the information of a specific Customer inside of the Database.");


   
   myWindow.document.write("<p style='color:Brown' >\n- <b>Clear.</b> </p>");

   myWindow.document.write("<p style='color:Black' >\nThis button will delete all the information on the form.");



   myWindow.document.write("<p style='color:Red' >\n- <b>About.</b> </p>");

   myWindow.document.write("<p style='color:Black' >\nThis button will take you to the about page.");



   myWindow.document.write("<p style='color:Pink' >\n- <b>Email_Me.</b> </p>");

   myWindow.document.write("<p style='color:Black' >\nThis button will take the user to the Email_Me page in which can contact us by E-MAIL.");


   myWindow.document.write("<p style='color:Fuchsia' >\n- <b>Contact_us.</b> </p>");

   myWindow.document.write("<p style='color:Black' >\nThis button will take the user to the contact us page in which The user will enter information to be contacted.");


   myWindow.document.write("<p style='color:Teal' >\n- <b>Leads.</b> </p>");

   myWindow.document.write("<p style='color:Black' >\nThis button will take the user to the Leads page in which the user can check different customers in the Database.");

}

</script>

</body>

</html>