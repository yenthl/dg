const menu = document.getElementById("menu");
const tab = document.getElementById("tab");
let t = document.getElementsByClassName("t");
let obj = document.getElementsByClassName("obj");

let is_locked = 1;
let p = 0
let menu_elements = [document.getElementsByClassName("login_tab"),document.getElementsByClassName("signin_tab")]

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
function close_tab() {
    tab.style.top = "120%";
    a = document.getElementsByClassName("menu_el")
    for (let i = 0; i < a.length; i++) {
        a[i].style.display = "none"
    }
    // tab.style.display = "none";
}
function open_tab(n) {
    tab.style.top = "54%";
    if (n != p) {
        for (let i = 0; i < menu_elements[p].length; i++) {
            menu_elements[p][i].style.display = "none"
        }
    }
    for (let i = 0; i < menu_elements[n].length; i++) {
        menu_elements[n][i].style.display = "grid"
    }
    p = n;
}
