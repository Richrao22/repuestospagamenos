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
<?php 

if(isset($_POST['submit'])) 
{ 
    $to          = "mariopenta2@gmail.com"; 
    $name_field  = $_POST['UserName'];
    $subject     = "Orfao's Autoparts"." - ".$name_field;
    $email_field = $_POST['UserEmail'];
    $UserTel     = $_POST['UserTel'];
    $option      = $_POST['MessageType'];
    $Comentarios = $_POST['Comentarios'];


    $body = "PRUEBA PARA MARIO 
             From:         $name_field\n
             E-Mail:       $email_field\n 
             Tel:          $UserTel\n 
             Option:       $option\n 
             Message:      $Comentarios\n\n 
            ";

    mail($to, $subject, $body); 

} 
else 
{ 
   
}

include('program4.php');
 
?> 

