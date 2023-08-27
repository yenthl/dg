const menu = document.getElementById("menu");
const t = document.getElementsByClassName("t");
let is_locked = 1;
console.log(menu)

function unlock() {
    if (is_locked) {
        menu.setAttribute("style","height: 450px; width: 180px;")
        
        is_locked = 0;
    }
    else{
        menu.setAttribute("style","height: 40px; width: 40px;")
        is_locked = 1;
    }
}