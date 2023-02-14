<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="get.php">
        <p><label for="fname">First Name:</label>
        <input type="text" name="fname" size="40" id="fname" /></p>
        <p><label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname" size="40" /></p>

        <br><br>

        State:
        <input list="State" name="State">
        <datalist id="State">
            <option value="Bihar">
            <option value="Jharkhand">
            <option value="Madhya Pradesh">
            <option value="Uttar Pradesh">
        </datalist>

        <br><br>
        <label for="birthday">BirthDay</label>
        <input type="datetime-local" id="birthday" name="birthday">

        <br><br>

        <label for="phone">Phone</label>
        <input type="number" id="phone" name="phone" size="40" value="+91" />

        <br><br>

        <label for="ypr">Year Of Passing</label>
        <input type="text" id="ypr" name="ypr" min="2015" max="2019" step="1" value="2015" />

        <br><br>

        Language:
        <input type="checkbox" id="English" name="fav_language" value="English">
        <label for="English">English</label>
        
        <input type="checkbox" id="Hindi" name="fav_language" value="English">
        <label for="Hindi">Hindi</label>

        <input type="checkbox" id="Bengali" name="fav_language" value="English">
        <label for="Bengali">Bengali</label>

        <input type="checkbox" id="Other" name="fav_language" value="English">
        <label for="Other">Other</label>

        <br><br>

        Gender:
        <input type="radio" id="male" name="gender">
        <label for="male">Male</label>

        <input type="radio" id="female" name="gender">
        <label for="female">Female</label>

        <input type="radio" id="other" name="gender">
        <label for="other">Other</label>

        <br><br>

        <label for="subject">Choose a Subject</label>
        <select name="sub" id="subject" size="3" multiple>
            <option value="machine learning">ML</option>
            <option value="artificial intelligence">AI</option>
            <option value="big data">BD</option>
        </select>
        <br><br>

        <fieldset>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <br><br>

        <label for="pwd">Password</label>
        <input type="password" id="pwd" name="pwd" required>

        <br><br>

        <input type="reset">

        </fieldset>

        <br><br>

        <label for="myfile">Select File</label>
        <input type="file" id="myfile" name="myfile">
        <br><br>
        <input type="submit"/>
    </form>

    <hr>

    
</body>
</html>