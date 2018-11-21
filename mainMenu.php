<!-- ***************************************************************************************
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

  **************************************************************************************** -->
<html>

<head> <!-- here goes browser information, keywords for web searching -->

  <title>Orfao Richard Dropdown Menu</title>
        
            
    <style type="text/css">
        nav ul ul 
        {
            display: none;
        }
        
        
        nav ul li:hover > ul 
        {
            display: block;
        }
        
          
        nav ul 
        {
            background: #289AFF; 
            background: linear-gradient(top, #289AFF 0%, #D6F3F7 100%);  
            background: -moz-linear-gradient(top, #289AFF 0%, #D6F3F7 100%); 
            background: -webkit-linear-gradient(top, #289AFF 0%,#D6F3F7 100%); 
            box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
            padding: 0 20px;
            border-radius: 10px;  
            list-style: none;
            position: relative;
            display: inline-table;
        }
        
            
        nav ul:after 
        {
                content: ""; clear: both; display: block;
        }
                
                
        nav ul li 
        {
                float: left;
        }
        
        
	nav ul li:hover 
        {
                background: #27C9F9; 
                background: linear-gradient(top, #33C5F0 0%, #CFFFFD 40%);
                background: -moz-linear-gradient(top, #33C5F0 0%, #CFFFFD 40%);
                background: -webkit-linear-gradient(top, #33C5F0 0%,#CFFFFD 40%);
        }
                
                
        nav ul li:hover a 
        {
                color: #871DBC; /*=white#ff00ff; /*#fff; */ /*menu name color */
        }
                
                
        nav ul li a 
        {
                display: block; padding: 25px 40px;
                color: #871DBC; /* main menu name #757575;*/ text-decoration: none;
	}
                
                
        nav ul ul 
        {
                background: #E0F6FA; /*#5f6975;*/ border-radius: 0px; padding: 0; /*sub menues */
                position: absolute; top: 100%;
        }
        
        
	nav ul ul li 
        {
		float: none; 
		border-top: 1px solid white; /*#6b727c; */ /*border top */
		border-bottom: 1px solid #575f6a; /*border down */
		position: relative;
	}
	
	
        nav ul ul li a 
        {
                padding: 10px 40px;
                color: #BFDAF9;
        }	
                
                
        nav ul ul li a:hover 
        {
                background: #68BCF0; /* #4b545f; */ /*submenu background color*/
        }
                
                
        nav ul ul ul 
        {
                position: absolute; left: 100%; top:0;
        }


    </style>
  
</head>
 
<body> <!-- most web commands go here -->

    <nav align="center">
      <ul>
        <li><font size="5"><a href="http://ocelot.aul.fiu.edu/~rorfa001/includes/program1.html">Program 1</font></a>
          <ul>
            <li><a href="http://ocelot.aul.fiu.edu/~rorfa001/includes/page1.html">Page 1</a></li>
            <li><a href="http://ocelot.aul.fiu.edu/~rorfa001/includes/page2.html">Page 2</a></li>
            <li><a href="http://ocelot.aul.fiu.edu/~rorfa001/includes/page3.html">Page 3</a></li>
            <li><a href="http://ocelot.aul.fiu.edu/~rorfa001/includes/page4.html">Page 4</a></li>
            <li><a href="http://ocelot.aul.fiu.edu/~rorfa001/index.php">Home</a></li>
          </ul>
        </li>

         <li><font size="5"><a href="http://ocelot.aul.fiu.edu/~rorfa001/includes/program2.php">Program 2</font></a></li>

         <li><font size="5"><a href="http://ocelot.aul.fiu.edu/~rorfa001/includes/program3.php">Program 3</font></a></li>

	     <li><font size="5"><a href="http://ocelot.aul.fiu.edu/~rorfa001/includes/program4.php">Program 4</font></a></li>

         <li><font size="5"><a href="http://ocelot.aul.fiu.edu/~rorfa001/includes/program5.php">Program 5</font></a></li>


        <li><font size="5"><a href="http://ocelot.aul.fiu.edu/~rorfa001/index.php">Home</font></a></li>
      </ul>

    </nav>

</body> 

</html>


