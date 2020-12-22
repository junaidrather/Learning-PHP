<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Forms</title>
    <link href='form.css' rel='stylesheet'>
</head>
<body>
    <div id="header">
        <img class="banner" src="uoknc.jpg" alt="Image not available" />
        <ul id="topnav">
            <li><a>Home</a></li>
            <li>About Us
                <ul>
                    <li><a>University Profile</a></li>
                    <li><a>Our Mission</a></li>
                    <li><a>Faculty</a></li>
                </ul>
            </li>
            <li><a>Departments</a></li>
            <li>Library
                <ul>
                    <li><a>Introduction</a></li>
                    <li><a>Services</a></li>
                    <li><a>Collection</a></li>
                </ul>
            </li>
        </ul>
    </div>
    </br>


    <form method="post" action="./form_submit.php">
        <pre></br></br>
        <label>First Name:</label>
        <input type="text" name="fname" size="20" maxlength="10" />
        <label>Last Name:</label>
        <input type="text" name="lname" size="20" maxlength="10" />
        <label>Address:</label>
        <input type="text" name="address" size="20" maxlength="30" />
        <label>Gender:</label>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <label>Course:</label>
        <select name="stream" size="1">
			<option>BTECH</option>
			<option>IMBA</option>
			<option>MCA</option>
		</select>
        <label>Subjects:</label>
        <input type="checkbox" name="subjects[]" value="Web Designing" />Web Designing
        <input type="checkbox" name="subjects[]" value="Data Communication"/>Data Communication
        <input type="checkbox" name="subjects[]" value="Database Management Systems"/>Database Management Systems
        <input type="checkbox" name="subjects[]" value="Artificial Intelligence"/>Artificial Intelligence
        </br>
        <label>Comments:</label>
        <textarea name="comments" rows="4" cols="20">Type here...</textarea>



        </pre>
        <div align="center" id="center">
            <input type="submit" name="send" value="Submit" />
            <input type="reset" name="reload" value="Reset" />
        </div>
        <footer>
            <div id="footer">
                <hr/>
                <img class="link" src="fb.jpg" alt="Image not available" usemap="#linkfb">
                <map name="linkfb">
				    <area shape="rect" coords="0,0,224,224" href="https://www.facebook.com/aar.jay.100/"/>
			    </map>

            </div>
        </footer>
    </form>

    
</body>
</html>