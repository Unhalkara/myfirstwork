
<!----@1 Checking for form submition---->
<?php
if(isset($_POST['submit'])){
echo "success";
}
?>

<html>
    <head>
        <title> SECTION 6 </title>
    </head>
    <body>
        <form action="section6.php" method="post">
        <input type="text" placeholder="Enter Username"><br>
        <input type="passwd" placeholder="Enter Password">
        </br>
        </br>
        <input type="submit" name="submit">
    </body>
</html>

