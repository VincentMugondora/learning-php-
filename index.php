<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Pet Form</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="form-container">
        <h1>Favorite Pet Form</h1>
        <form action="includes/formhandler.php" method="post">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <div class="form-group">
                <label for="pet">Favorite Pet:</label>
                <select id="pet" name="pet" required>
                    <option value="">Select your favorite pet</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="hamster">Hamster</option>
                    <option value="parrot">Parrot</option>
                    <option value="rabbit">Rabbit</option>
                    <option value="turtle">Turtle</option>
                </select>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>