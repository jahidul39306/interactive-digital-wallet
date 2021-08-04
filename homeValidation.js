function isValid()
{
   var valid = true;
   var categoryType = document.forms["homeForm"]["category"].value;
   var to = document.forms["homeForm"]["to"].value;  
   var amount = document.forms["homeForm"]["amount"].value;  

   document.getElementById("categoryErr").innerHTML = "";
   document.getElementById("toErr").innerHTML = "";
   document.getElementById("amountErr").innerHTML = "";


    if(categoryType === "select a value")
    {
        valid = false;
        document.getElementById("categoryErr").innerHTML = " Select a caategory"; 
        return;
    }

    if(to === "")
    {
        valid = false;
        document.getElementById("toErr").innerHTML = " Select a number to send money"; 
        return;
    }


    if(amount === null || amount < 1)
    {
        valid = false;
        document.getElementById("amountErr").innerHTML = " Input a valid amount"; 
        return;
    }
    if(valid) {
        console.log(amount);

        addHistoryJS(categoryType, to, amount);
    }
}

function addHistoryJS(categoryType, to, amount)
{
    console.log("kelllo");
    console.log(amount);
    console.log(categoryType);
    console.log(to);


    var XML = new XMLHttpRequest();
    XML.onload = function()
    {
        if(XML.status === 200)
        {
            console.log(to);

            document.getElementById("result").innerHTML = XML.responseText;
        }
    }
    XML.open("POST", "addHistory.php", true);
    XML.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    XML.send("categoryType=" +categoryType + "&to=" +to + "&amount=" +amount);
}

function getHistory()
{
    var XML = new XMLHttpRequest();
    console.log("jillllo");
    XML.onload = function()
    {
        if(XML.status === 200)
        {
            document.getElementById("historyTable").innerHTML = XML.responseText;
        }
    }
    XML.open("POST", "showHistory.php", true);
    XML.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    XML.send();
}

function searchHistory()
{
    var search = document.forms["historyForm"]["search"].value;
    var XML = new XMLHttpRequest();
    XML.onload = function()
    {
        if(XML.status === 200)
        {
            document.getElementById("historyTable").innerHTML = XML.responseText;
        }
    }
    XML.open("POST", "searchHistory.php", true);
    XML.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    XML.send("search=" +search);
}