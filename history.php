<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <script src="homeValidation.js"></script>
</head>
<body>
     
    <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
        <h1>Page 2 [Transaction History]</h1>
        <h3>Digital Wallet</h3>
        <P>
        1. <a href="home.php">Home</a>&nbsp;
        2. <a href="history.php">Transaction History</a>&nbsp;
        </P>
        
        <div id = historyTable>
            <script>getHistory();</script>
        </div>
        
        <br>


    </form>
    
</body>
</html>