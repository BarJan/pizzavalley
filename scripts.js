window.addEventListener('load', function validateRequired() {
        if(document.getElementById("fname").value == ""){
            document.getElementById("fname").focus();
            document.getElementById("fname").select();  
        }
        else if(document.getElementById("phone").value == ""){
            document.getElementById("phone").focus();
            document.getElementById("phone").select();
        }
})


function validateName(){
    
    var nreg = /^[a-zא-תA-Z]+$/;
    var treg = /[0][5]\d{1}[-]{0,1}[0-9]{7}$/;
    
    if(!document.getElementById("fname").value.match(nreg)){
        document.getElementById("fname").value="";
        document.getElementById("fname").focus();
        document.getElementById("fname").select();
        document.getElementById("nameReq").style.visibility = "visible";
    }
    else{
        document.getElementById("nameReq").style.visibility = "hidden";
    }
    
    if(!document.getElementById("phone").value.match(treg)){
        document.getElementById("phone").value="";
        document.getElementById("phone").focus();
        document.getElementById("phone").select();
        document.getElementById("telReq").style.visibility = "visible";
    }
    else{
        document.getElementById("telReq").style.visibility = "hidden";
    }
   
}


window.onload = function clickTocall(){
    document.getElementById("call").style.visibility = "hidden";
    if(!window.outerWidth > '770px'){
        var date = new Date();
        var h = date.getHours();
        var m = date.getMinutes();
        var d = date.getDay() + 1;
        
        if(d<6)
            if((8 < h || 8 == h && 0 <= m) && (h < 17 || h == 17 && m <= 0))
                document.getElementById("call").style.visibility = "visible";
            
        else if(d==6)
            if((8 < h || 8 == h && 0 <= m) && (h < 17 || h == 13 && m <= 0))
                document.getElementById("call").style.visibility = "visible";
    }
}