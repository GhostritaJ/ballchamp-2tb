<?php

    include("tb1.php");
    include("tb2.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>

<!-- <script>
    var currentTab = 1;

    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        document.getElementById(tabName).style.display = "flex";

        // Update currentTab variable
        currentTab = parseInt(tabName.charAt(tabName.length - 1));
    }

    // Function to switch to the next tab
    function nextTab() {
        currentTab = (currentTab % 3) + 1;
        openTab(null, 'tab' + currentTab);
    }

    // Function to switch to the previous tab
    function prevTab() {
        currentTab = (currentTab - 2 + 3) % 3 + 1;
        openTab(null, 'tab' + currentTab);
    }
</script> -->

<button onclick="prevTab()">Previous Tab</button>
<button onclick="nextTab()">Next Tab</button>

</body>
</html>