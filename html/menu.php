<!DOCTYPE html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Wavefont:wght@300&display=swap');
</style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body>
    <nav id="menu" class="menu" onclick="unlock()" >
        <span class="t"></span>
        <span class="t"></span>
        <span class="t"></span>

        <span class="obj" id="n1" onclick="open_tab(0)"><p>search</p></span>
        <span class="obj" id="n2" onclick="open_tab(1)"><p>cart</p></span>
        <span class="obj" id="n3" onclick="open_tab(2)"><p>receipts</p></span>
        <a class="obj" id="n4" href="http://nigga.com/"><p>leave</p></a>

    </nav>
    <div class="tab" id="tab" >
        <div class="close" onclick="close_tab()">
            <span class="x" ></span>
        </div>
        <div class="search_tab results_container menu_el" id="results_container">
            <span class="result"></span>
        </div>
        <input type="text" name="search" id="srch" class="search_tab srch menu_el">
    </div>
    <script src="../js/menu.js"></script>
</body>
</html>