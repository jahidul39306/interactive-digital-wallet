<?php
    $category;
    $to = "";
    $amount;
    $categoryErr = $toErr = $amountErr = "";
    $hasErr = false;
    $msg = "";

    if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        if($_POST["category"] === "select a value")
        {
            $categoryErr = "Select a category";
            $hasErr = true;
        }

        if(empty($_POST["amount"]) || $_POST["amount"] < 1)
        {
            $amountErr = "Invalid Amount";
            $hasErr = true;
        }
        if(empty($_POST["to"]))
        {
            $toErr = "Invalid phone number";
            $hasErr = true;
        }

        if(!$hasErr)
        {
            $category = $_POST["category"];
            $amount = $_POST["amount"];
            $to = $_POST["to"];
            echo "<script></script>";
            $msg = "Transaction Successful";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="homeValidation.js"></script>

</head>
<body>
<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" name = "homeForm" onsubmit = " isValid(); return false;">
        <h1>Page 1 [Home]</h1>
        <h3>Digital Wallet</h3>
        <P>
        1. <a href="home.php">Home</a>&nbsp;
        2. <a href="history.php">Transaction History</a>&nbsp;
        </P>
        <h3>Fund Transfer:</h3>

        
        <label for = "category">Category: </label>
        <select id = "category" name = "category">
            <option value = "select a value">Select a value</option>
            <option value = "mobile_recharge">Mobile Recharge</option>
            <option value = "send_money">Send Money</option>
            <option value = "merchant_pay">Merchant Pay</option>
        </select>
        <span class = "error" id = "categoryErr" style="color:red"><?php echo "*" . $categoryErr; ?></span>
        <br><br>

        <label for = "to">To: </label>
        <input type = "tel" id = "to" name = "to" value = "<?php echo $to; ?>" pattern = "[0-9]{11}">
        <span class = "error" id = "toErr" style="color:red"><?php echo "*" . $toErr; ?></span>
        <br><br>

        <label for = "amount">Amount: </label>
        <input type = "number" id = "amount" name = "amount" value = "<?php echo $amount; ?>">
        <span class = "error" id = "amountErr" style="color:red"><?php echo "*" . $amountErr; ?></span>
        <br><br>

        <button type="submit" name="submitButton">Submit</button>
        <br><br>
        <div id = "result" style="color:green"></div>
        <p><?php echo $msg; ?></p>
    </form>

</body>
</html>