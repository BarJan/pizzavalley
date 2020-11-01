function validateTel() {
        if(document.getElementById('fname').value == ""){
            document.getElementById('nameReq').style.visibility = "visible";
        }
        
        if(document.getElementById('fname').value != ""){
            document.getElementById('nameReq').style.visibility = "hidden";
        }
    
        if(document.getElementById('phone').value == ""){
            document.getElementById('telReq').style.visibility = "visible";
        }
        
        if(document.getElementById('phone').value != ""){
            document.getElementById('telReq').style.visibility = "hidden";
        }
        
}