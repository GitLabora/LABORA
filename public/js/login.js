if(sessionStorage.getItem('flag')==undefined){
    sessionStorage.setItem('flag' , '0');
}
function employee(){  
    document.getElementById("employee").style.display = "block";
    document.getElementById("patient").style.display = "none";
    document.getElementById("employee-button").style.background = "gold";
    document.getElementById("employee-button").style.color = "black";

    document.getElementById("patient-button").style.background = "none";
    document.getElementById("patient-button").style.color = "white";

    sessionStorage.setItem('flag' , '1');
}
function patient(){ 
    document.getElementById("employee").style.display = "none";
    document.getElementById("patient").style.display = "block"; 
    document.getElementById("patient-button").style.background = "gold";
    document.getElementById("patient-button").style.color = "black";

    document.getElementById("employee-button").style.background = "none";
    document.getElementById("employee-button").style.color = "white";

    sessionStorage.setItem('flag' , '0');
}

function select(){
    if(sessionStorage.getItem('flag')=='0'){
        sessionStorage.setItem('flag' , '3');
        patient();
    }else{
        employee();
    }
}