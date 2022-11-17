<html>
    <head>
        <title>Voting Website - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet2.css">
    </head>
    <body>
        <center>
            <div id="regheaderSection">
            <h1>Voting Website</h1>  
            </div>
            

            <h2>Registration</h2><br><br>
            <div id="regsection">
                <form action="../database/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    <input type="number" name="aadhaar" placeholder="Aadhaar Number" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 30%">
                         Aadhaar Photo: <input type="file" style="width: 40%" id="profile" name="image" required>
                    </div>
                    <b style="color: rgb(199, 24, 24)">
                    Note : Upload photo of your AADHAR CARD if you are voter and if you are registering as a group then upload logo of your group.
                    </b>
                    <br><br>
                    <div id="upload" style="width: 20%">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>                   
                    </div><br>
                    <button id="regbtn" type="submit" name="registerbtn">Register</button><br><br>
                    Have an account? <a href="../">Login here</a>
                </form>
                </div>
            </center>
    </body>
</html>