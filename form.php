<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        
    body {
    font-family: Arial, sans-serif;
    background-color: #ffffff;
    color: #101111;
    padding: 140px;
}

h1 {
  text-align: center;
  margin-top: 20px;
}

form {
  width: 75%;
  max-width: 550px;
  margin: 20px auto;
  padding: 15px;
  background-color: #287FB3;
  border-radius: 15px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  
}

label {
  display: block;
  font-weight: bold;
  margin-top: 5px;
}

select {
  width: 70%;
  padding: 10px;
  margin-top: 5px;
  border: 1px solid #080808;
  border-radius: 3px;
}

input[type="radio"],
input[type="checkbox"] {
  margin-top: 5px;
}

button {
  background-color: #cb851c;
  color: #ffffff;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
  cursor: pointer;
  margin-top: 15px;
  display: inline-block;
}

 a button {
  background-color: #cb851c;
}

button:hover {
  background-color: #cb851c;
}
    </style>
</head>
<body>
    <h1>Buat Account Baru</h1>

    <form method="POST" action="welcome.php">
        <label for="FirstName">First Name:</label><br>
        <input type="text" name="first" id="first" required>
        <br><br>
        <label for="FirstName">Last Name:</label><br>
        <input type="text" name="last" id="first"required>
        <br><br>

        <label for="gender">Gender</label><br><br>
        <input type="radio" name="gender" id="male" value = "Laki-Laki">Male <br>
        <input type="radio" name="gender" id="female" value = "Perempuan">Female <br><br>

        <label for="nationality">Nationality</label><br><br>
        <select name="country" id="country">
            <option value="Indonesia">Indonesia</option>
            <option value="inggris">English</option>
            <option value="inggris">Germany</option>
        </select>
        <br><br>

        <label for="language">Language Spoken</label><br><br>
        <input type="checkbox" name="bahasa[]" value="Indonesia" id="indo">Bahasa Indonesia <br>
        <input type="checkbox" name="bahasa[]" value="English" id="english">English <br>
        <input type="checkbox" name="bahasa[]" value="Other" id="other">Other <br>
        <br><br>

        <label for="bio">Bio</label>
        <br><br>
        <textarea name="bio" id="" cols="30" rows="10" required></textarea>
        <br>
        <button>Sign Up</button><br><br>
    </form>
</body>
</html>