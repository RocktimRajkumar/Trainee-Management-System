
function myProgram(){
    var x = document.getElementById("select");
    var i = x.selectedIndex;
    var oncampus=document.getElementById("oncampus");
    var offcampus=document.getElementById("offcampus");
    var regional=document.getElementById("regional");

    document.getElementById("programtype").innerHTML = "";
    
    switch(x.options[i].value){
        
        case "1":oncampus.style.display="table-row";
                 offcampus.style.display="none";
                 regional.style.display="none";
            break;
        case "2":oncampus.style.display="none";
                 offcampus.style.display="table-row";
                 regional.style.display="none";
            break;
            
        case "3":
                oncampus.style.display="none";
                 offcampus.style.display="none";
                 regional.style.display="table-row";
            break;
    }
}