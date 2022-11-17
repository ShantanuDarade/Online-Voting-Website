<html>
    <head>
        <title>Voting Website - Home</title>
        <link rel="stylesheet" href="css/stylesheet1.css">
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <h1>Voting Website</h1>  
            </div>
            
            </center>


            <div id="loginSection">
               <h2>Login</h2>  
                <form action="database/login.php" method="POST">

                    
                    <input type="number" name="aadhaar" placeholder="Aadhaar Number" required><br><br><br>
                    <input type="password" name="pass" placeholder="Password" required><br><br><br>
                    <select name="role"  border: 2px solid black>
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>    <br>              
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br><br>

                    <div id="reg_link">
                    Not a member? <a href="sfolder/register.php">Register here</a>
                    </div>
                
                </form>   
            </div>

            
    </body>
</html>