<<<<<<< HEAD
<?php

    session_start();
    if ($_SESSION['login'] == true)
    {
      header("location: payment.php");
    }
    else if ($_SESSION['login'] != true)
    {
      header("location: login.php");
    }
=======
<?php

    session_start();
    if ($_SESSION['login'] == true)
    {
      header("location: payment.php");
    }
    else if ($_SESSION['login'] != true)
    {
      header("location: login.php");
    }
>>>>>>> 45c941a021726bf05ba6542c3aedec9e7f1a4f86
?>