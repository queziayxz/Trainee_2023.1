function abreNav()
{
    var nav = document.getElementById("navegacao")
    if(nav.className === "navegacao" )
    {
        nav.className += "menujs"
    }else{
        nav.className = "navegacao"
    }
}