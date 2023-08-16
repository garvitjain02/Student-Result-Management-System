<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
    function func()
    {
        alert ("Button Clicked");
    }
</script>
</head>
<body>
    <table border='1px solid black' cellspacing='0' style='text-align: center; width: 67%; font-size: 17px;'>
    <tr>
        <td><input type='text' name='eid' id='eid' value='$eid' style='border:0; text-align:center;' readonly></td>
        <td><input type='text' name='marks' id='marks'></td>
        <td><button onclick='func()' name='submit'>Update</button></td>
        
        </tr>
    </table>
    <?php
if (isset($_GET['submit']))
    echo "<h1>Button Clicked</h1>";
?>
</body>
</html>