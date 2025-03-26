<!-- Main form page -->
 <!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UFT-8">
        <meta  name="viewport" content="width=device-width, initial-scale=1.0" >
        <title>PHP First website</title>
        <link rel="stylesheet" href="styles.css" >
    </head>
    <body>
        <h2>
            Submit your name
        </h2>
        <form method="POST" action="process.php" >
            <label for="name" >Enter your name</label>
            <input type="text" name="name" required >
            <input type="submit" value="Submit">
        </form>
    </body>
 </html>