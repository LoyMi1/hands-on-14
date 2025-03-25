<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output 1</title>
    <style>
        body {
            font-family: "Arial";
        }
    </style>
</head>
<body>
    <h1>PHP Output No. 1</h1>
    
    <fieldset>
        <legend>Enter your Data Here</legend>
        <form action="redirect.php" method="GET">
        <table>
            <tr>
                <td>Age</td>
                <td>
                    <input type="text" name="Age" placeholder="Enter Age" required />
                </td>
            </tr>

            <tr>
                <td>Gender</td>
                <td>
                    <input type="text" name="Gender" placeholder="Enter Gender" required />
                </td>
            </tr>

            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="Email" placeholder="Enter Email" required />
                </td>
            </tr>

            <tr>
                <td>Address</td>
                <td>
                    <input type="text" name="Address" placeholder="Enter Address" required />
                </td>
            </tr>

            <tr>
                <td>Contact Number</td>
                <td>
                    <input type="text" name="Contact" placeholder="Enter Contact Number" required />
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit Data">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
       
    </fieldset>

</body>
</html>