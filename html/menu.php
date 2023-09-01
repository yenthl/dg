<!DOCTYPE html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Wavefont:wght@300&display=swap');
</style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P-FIND</title>
    <link rel="icon" href="../resource/pf.png">
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body>
        <nav id="menu" class="menu" onclick="unlock()" >
            <span class="t"></span>
            <span class="t"></span>
            <span class="t"></span>

            <span class="obj" id="n1" onclick="open_tab(0)"><p>search</p></span>
            <span class="obj" id="n2" onclick="open_tab(1)"><p>cart</p></span>
            <span class="obj" id="n3" onclick="open_tab(2)"><p>me</p></span>
            <span class="obj" id="n4" onclick="alert('leave')"><p>leave</p></span>
        </nav>
        <div class="profil"></div>
    <div class="tab" id="tab" >
        <div class="close" onclick="close_tab()">
            <span class="x" ></span>
        </div>
        <div class="search_tab results_container menu_el" id="results_container">
            <span class="result" onclick="alert('pay nigga')">
                <p class="name">nigga</p>
                <p class="level">3</p>
                <p class="state">HS</p>
                <p class="age">15</p>
            </span>
        </div>
        <input type="text" name="search" id="srch" class="search_tab srch menu_el">
    </div>
    <script src="../js/menu.js"></script>
</body>
</html>