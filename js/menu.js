const menu = document.getElementById("menu");
let t = document.getElementsByClassName("t");
let obj = document.getElementsByClassName("obj");
let is_locked = 1;
console.log(t)

function unlock() {
    if (is_locked) {
        menu.setAttribute("style","height: 300px; width: 180px;")
        for (let i = 0; i < t.length; i++) {
            t[i].style.display = "none";
        }
        for (let i = 0; i < obj.length; i++) {
            obj[i].style.display = "block";
        }
        is_locked = 0;
    }
    else{
        menu.setAttribute("style","height: 40px; width: 40px;")
        for (let i = 0; i < t.length; i++) {
            t[i].style.display = "block";
        }
        for (let i = 0; i < obj.length; i++) {
            obj[i].style.display = "none";
        }
        is_locked = 1;
    }
}
function tab(num) {
    
}