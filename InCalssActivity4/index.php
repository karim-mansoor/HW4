<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf_8" />
        <title> </title>
        <style>
            input[type="text"], textarea, select 
            {
                display: inline-block;
                width: 200px;
            }
        </style>
    </head>
    <body>
        <div>
            <h1 class="title">Registration Form</h1>
            <form action="preview.php" method="post">
                name: <input type="text" name="name">
                <br><br>
                username: <input type="text" name="username">
                <br><br>
                password: <input type="text" name="password">
                <br><br>
                Address: <input type="text" name="Address">  
                <br><br>
                country:
                <select name="country">
                    <option value="Turkey">Turkey</option>
                    <option value="USA">USA</option>
                    <option value="YEMEN">YEMEN</option>
                    <option value="Franch">Franch</option>
                </select>
                <br><br>
                ZIP Code: <input type="text" name="ZIPCODE">
                <br><br>
                Email: <input type="text" name="Email">
                <br><br>
                Gender:
                <input type="radio" name="gender" value="Male"/>Male
                <input type="radio" name="gender" value="Female"/>Female
                <br><br>

                Language:
                <input type="radio" name="lang" value="English"/>English   
                <input type="radio" name="lang" value="Franch"/>Franch
                <input type="radio" name="lang" value="Germany"/>Germany
                <br><br>
                Comment: <textarea name="comment" rows="5" cols="40"></textarea>
                <br><br>
                <input type="submit" value="submit">
            </form>
        </div>
    </body>
</html>
