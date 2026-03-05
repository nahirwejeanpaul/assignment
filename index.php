<!DOCTYPE html>
<html>

<head>
    <title>Jean-Paul and Arlequine PHP</title>
</head>

<body>

    <h1><b>Jean-Paul and Arlequine PHP</b></h1>

    <?php
    print "The SHA256 hash of \"Jean-Paul Nahirwe\" is ";
    print "The SHA256 hash of \"MAGANZA Arlequine\" is ";
    print hash('sha256', 'Jean-Paul Nahirwe');
    print hash('sha256', 'MAGANZA Arlequine');
    ?>

    <pre>
    JJJJJJJJJJ
        JJ
        JJ
        JJ
        JJ
  JJ    JJ
   JJJJJJ
</pre>
<pre>
    M         M
    MM       MM
    M M     M M
    M  M   M  M
    M   M M   M
    M    M    M
    M         M
    M         M
    </pre

    <p>
        <a href="check.php">Click here to check the error setting</a>
    </p>

    <p>
        <a href="fail.php">Click here to cause a traceback</a>
    </p>

</body>

</html>