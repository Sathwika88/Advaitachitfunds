function myfun()
{
    var a=document.getElementById("mobile").vallue;
    if(a==""){
        document.getElementById("messages").innerHTML="please fill mobile number";
        return false;
    }
    if(isNaN(a)){
        document.getElementById("messages").innerHTML="enter only numeric value";
        return false;
    }
    if(a.length<10 && a.length>10){
        document.getElementById("messages").innerHTML="mobile number must be 10 digits";
        return false;
    }
}