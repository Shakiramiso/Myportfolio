<!DOCTYPE html>
<html>
    <head>
        <title>Shakira misomali| Welcome!</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <header>
            <div class="container" >
                <div id="branding" >
                    <h1><span class="highlight">Shakira</span> misomali</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="about.html">CONTACT</a></li>
                        <li><a href="project.html">PROJECTS</a></li>
                    </ul>
                </nav>
            </div>
        </header>
       
        <?php
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "my_skills";
    
        //create connection
        $conn = mysqli_connect($serverName, $userName, $password, $dbName);
        if (!$conn) {
            die("connection failed:" .mysqli_connect_error());
        }
    
        echo "CLIENTS DETAILS" ."<br>";
        
        //Retrieve data from database
    
        $sql = "SELECT*FROM `skills_details`;";
        $result = $conn->query( $sql);
        if ($result->num_rows>0){
            while ($row = $result->fetch_assoc()) {
                echo "ID: " .$row["ID"], " -SKILLS:" .$row["SKILLS"] ."<br>";
                ?>
        <footer>
          <p> Shakira misomali, copyright &copy; 2023.</p>  
        </footer>
    </body>
</html>