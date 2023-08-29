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

        <span class="obj" id="n1" onclick="tab()"><p>search</p></span>
        <span class="obj" id="n2" onclick="tab_1()"><p>cart</p></span>
        <span class="obj" id="n3" onclick="tab_2()"><p>receipts</p></span>

    </nav>
    <div class="tab">
        <span class="close"></span>
        <input type="text" name="search" id="" class="srch">
    </div>
    <script src="../js/menu.js"></script>
</body>
</html>