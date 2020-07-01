<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
    </head>

    <body>
        <h2>Buat Account Baru!</h2>
        <h4>Sign Up Form</h4>
        <form action="/welcome" method="POST">
            @csrf
            
            <!--User Name-->
            <p for="firstName">First Name:</p>
            <input type="text" id="firstName" name="firstName">
            <br>
            <p for="lastName">Last Name:</p>
            <input type="text" id="lastName" name="lastName">

            <!--User Gender-->
            <p>Gender:</p>
            <input type="radio" name="gender">Male
            <br>
            <input type="radio" name="gender">Female
            <br>
            <input type="radio" name="gender">Other

            <!--User Nationality-->
            <p>Nationality:</p>
            <select>
                <option value="Indonesian">Indonesian</option>
                <option value="Malaysian">Malaysian</option>
                <option value="American">American</option>
                <option value="Russian">Russian</option>
            </select>

            <!--User Language Spoken-->
            <p>Language Spoken:</p>
            <input type="checkbox" name="language">Bahasa Indonesia
            <br>
            <input type="checkbox" name="language">English
            <br>
            <input type="checkbox" name="language">Other

            <!--Bio-->
            <p>Bio:</p>
            <textarea cols="30" rows="7"></textarea>
            <br>
            <input type="submit" value="Sign Up">
        </form>

    </body>
</html>