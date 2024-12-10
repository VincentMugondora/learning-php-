<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background: #01111f7f">
    <?php 
    // Scalar types
    $int = 10;
    $float = 3.14;
    $string = "Vincent Mugondora";
    $boolean = true;

    // Array types
    $numbers = array(1, 2, 3, 4, 5);
    $mixed = ["apple", 1, true];
    $array = [1, 2, 3];

    // Print array examples
    echo "Array as string: " . implode(", ", $array) . "<br>";
    echo "Array with print_r: ";
    print_r($array);
    echo "<br>";

    // Object types
    class Car {
        // Example class definition
    }

    // Create an instance of the Car class
    $object = new Car();

    // Check if object is instance of Car
    if ($object instanceof Car) {
        echo "<p>This is an instance of the Car class</p>";
    } else {
        echo "<p>This is not an instance of the Car class</p>";
    }

    // Sum numbers in the array
    echo "<p>The sum of numbers in the array is: " . array_sum($numbers) . "</p>";

    // Superglobals
    echo "Document Root: " . $_SERVER["DOCUMENT_ROOT"] . "<br>";
    echo "PHP Self: " . $_SERVER["PHP_SELF"] . "<br>";
    echo "Server Name: " . $_SERVER["SERVER_NAME"] . "<br>";
    echo "Request Method: " . $_SERVER["REQUEST_METHOD"] . "<br>";

    // Validate and access `$_GET["name"]`
    echo "GET Name: " . (isset($_GET["name"]) ? $_GET["name"] : "No name provided.") . "<br>";

    // Validate and access `$_REQUEST["name"]`
    echo "REQUEST Name: " . (isset($_REQUEST["name"]) ? $_REQUEST["name"] : "No name provided.") . "<br>";

    // Files superglobal
    if (isset($_FILES["name"])) {
        echo "File Name: " . $_FILES["name"] . "<br>";
    } else {
        echo "No file uploaded.<br>";
    }

    // Cookies superglobal
    setcookie("name", "Vincent", time() + 3600);

    if (isset($_COOKIE["name"])) {
        echo "Cookie Name: " . $_COOKIE["name"] . "<br>";
    } else {
        echo "No cookie set.<br>";
    }

    // session
    $_SESSION["username"] = "Mugondora";
    echo "Session Username: ". $_SESSION["username"]. "<br>";
    ?>
</body>
</html>
