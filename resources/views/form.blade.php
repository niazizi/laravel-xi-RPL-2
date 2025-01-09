<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Buat Account Baru</h1>

    <h2>Sign Up Form</h2>
    <form>
        <label for="FName">First name:</label><br>
        <input type="text" id="FName" name="Firstname"><br>
        <label for="LName">Last name:</label><br>
        <input type="text" id="LName" name="Lastname">

        <p>Gender</p>
        <input type="Radio" id="Laki-laki" name="Gender"value="Male">
        <label for="Laki-laki">Male</label><br>
        <input type="Radio" id="Perempuan" name="Gender"value="Female">
        <label for="Perempuan">Female</label><br><br>

        <label for="Nationality">Nationality</label><br><br>
        <select id="Nationality" name="Nationality">
        <option value="Indonesia">Indonesia</option>
        <option value="english">English</option>    
        <option value="Java">java</option>
        </select><br><br>

        <p>Language Spoken</p>
        <input type="checkbox" id="Indonesia" name="Indonesia" value="indonesia">
        <label for="Indonesia">Indonesia</label><br>
        <input type="checkbox" id="english" name="English" value="English">
        <label for="English"> English</label><br>
        <input type="checkbox" id="Other" name="Other" value="Other">
        <label for="Other">Other</label><br>
        
        <p>Bio</p>
        <textarea name="Bio" id="bio"></textarea><br>

        <a href="/welcome">
            <input type="button" name="Sign up" value="Sign up"> 
        </a>

    </form>
</body>
</html>