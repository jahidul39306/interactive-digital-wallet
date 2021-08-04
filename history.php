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
     
    <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name = "historyForm">
        <h1>Page 2 [Transaction History]</h1>
        <h3>Digital Wallet</h3>
        <P>
        1. <a href="home.php">Home</a>&nbsp;
        2. <a href="history.php">Transaction History</a>&nbsp;
        </P>

        <label for = "search">Search: </label>
        <input type = "text" id = "search" name = "search">
        <span class = "error" id = "searchErr" style="color:red"></span>
        &nbsp;&nbsp;
        <button type="button" name="searchButton" onclick = "searchHistory();">Search</button>
        &nbsp;&nbsp;
        <button type="button" name="showAll" onclick = "getHistory();">Show all history</button>

        <br><br>

        
        <div id = historyTable>
            <script>getHistory();</script>
        </div>
        
        <br>


    </form>
    
</body>
</html>