<html>

<head>
    <title>Student Portal</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <p>
        <a href="index.html" style="color:white">HOME</a> | <a href="info.html" style="color:white">INFO</a> | <a href="http://ecs.fullerton.edu/cs332a20/studentInterface.php" style="color:white">STUDENT INTERFACE</a> | <a href="http://ecs.fullerton.edu/cs332a20/professorInterface.php" style="color:white">PROFESSOR INTERFACE</a>
    </p>

    <form action="studentInterface.php" method="post">
        Student CWID: <input type="text" name="cwid">
        <input type="submit" value="SUBMIT">
    </form>

    <?php
            $servername = "ecsmysql";
            $username = "cs332a20"; 
            $password = "hievoosi"; //change to server pass

            // Create connection
            $conn = new mysqli($servername, $username, $password, "cs332a20");

            // Check connection

            echo "Connected successfully, currently displays PROFESSORS Table"; 
            
            
            //sql_to_html_table converts sql results to html table
            function sql_to_html_table($conn, $delim="\n") {
                  // starting table
                  $htmltable =  "<table style='border: 1px solid white'>" . $delim ;   
                  $counter   = 0 ;
                  // putting in lines
                  while( $row = $conn->fetch_assoc() ) {
                    if ( $counter===0 ) {
                  // table header
                  $htmltable .=   "<tr style='border: 1px solid white'>"  . $delim;
                  foreach ($row as $key => $value ) {
                      $htmltable .=   "<th style='border: 1px solid white'>" . $key . "</th>"  . $delim ;
                  }
                  $htmltable .=   "</tr>"  . $delim ; 
                  $counter = 22;
                } 
                  // table body
                  $htmltable .=   "<tr style='border: 1px solid white'>"  . $delim ;
                  foreach ($row as $key => $value ) {
                      $htmltable .=   "<td style='border: 1px solid yellow'>" . $value . "</td>"  . $delim ;
                  }
                  $htmltable .=   "</tr>"   . $delim ;
              }
              // closing table
              $htmltable .=   "</table>"   . $delim ; 
              // return
              return( $htmltable ) ; 
            }//END FUNCTION
            
            //QUERY
            $sqlresult = $conn->query( "SELECT * FROM PROFESSORS;" ) ; 
    
    
            mysqli_close();
            //connect and enter mainform div ie yellow console 

            echo "<div style='text-align:left' class='table'>"; 
            echo "CURRENT CWID:"; 
            echo $_POST["cwid"]; 
            echo "<br> <div style='width: 1000px' class='cell mainform'>"; 
            echo sql_to_html_table( $sqlresult, $delim="\n" ) ;
            echo "</div>"; 
            echo "</div>"; 
            ?>

        <br>
        <div style="text-align:left" class='table'>
            CURRENT CWID:
            <?php echo $_POST["cwid"]; ?>
            <div style='padding-top: 100px' class='cell mainform'>
                Hello
                <?php echo $_POST["cwid"]; ?>


            </div>
        </div>

</body>

</html>