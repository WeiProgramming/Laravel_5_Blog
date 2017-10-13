<html>
<head>
    <title>Input Your Email</title>
</head>
<body>
    <form method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for = "firstname">First Name</label>
        <input type="text" id = "firstname" name="firstname"/>
        <label for = "lastname">Last Name</label>
        <input type="text" id = "lastname" name="lasttname"/>
        <label for = "email">Email</label>
        <input type="text" id = "email" name="email"/>
        <input type = "submit" value = "Submit" name = "submit"></button>
    </form>

        <?php
        if(isset($submit)){
        $first = $_POST['firstname'];
        $last = $_POST['lastname'];
        $email = $_POST["email"];
        $submit = $_POST['submit'];


        echo $first;
        echo $last;
        echo $email;
    }
    ?>
        
</body>
</html>