var open = false

function toggleNav(){
    if(open == false){
        document.getElementById("OpenNav").style.display = "block";
        open = true
    }
    else{
        document.getElementById("OpenNav").style.display = "none";
        open = false
    }
}

setInterval(() => {
    var height = document.getElementById("locomotiefimg").offsetHeight
    console.log(height)
    document.getElementById("locobg").style.height = height + "px"
}, 100);