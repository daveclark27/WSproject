var x = [ 
"admin","user"
]
function add() {
var username = document.getElementById('in1').value
var password = document.getElementById('in2').value


if(username == x[0] && password ==x[0])
{
    alert("welcome "+ username)
}else if(username == x[1] && password ==x[1])
{
    alert("welcome "+ username)
}else 
{
    alert("Unathourized Access!")
    
}
}



