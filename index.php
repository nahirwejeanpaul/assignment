<!DOCTYPE html>
<html>

<head>
    <title>Jean-Paul Nahirwe PHP</title>
</head>

<body>

    <h1>Jean-Paul Nahirwe PHP</h1>

    <?php
    print "The SHA256 hash of \"Jean-Paul Nahirwe\" is ";
    print hash('sha256', 'Jean-Paul Nahirwe');
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

    <p>
        <a href="check.php">Click here to check the error setting</a>
    </p>

    <p>
        <a href="fail.php">Click here to cause a traceback</a>
    </p>

</body>

</html>