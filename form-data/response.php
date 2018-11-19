<?php

/*
    $email = $_GET['email'];
    $name = $_GET['name'];

    echo <<<EOD
    <p>My Name is : {$name}</p>
    </p>Email : {$email}</p>
EOD;

    print_r( $_GET['osp']);

*/

    $projectName = $_POST['project-name'];

    echo "Project name is $projectName";

?>

<form action="" method="post">
    Project Name <input type="text" name="project-name">

    <input type="submit">
</form>



