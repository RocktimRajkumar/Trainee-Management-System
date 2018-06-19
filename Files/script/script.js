
function myProgram(){
    var x = document.getElementById("select");
    var i = x.selectedIndex;
    var oncampus=document.getElementById("oncampus");
    var offcampus=document.getElementById("offcampus");
    var research=document.getElementById("research");
    var pgdaem=document.getElementById("pgdaem");
    document.getElementById("programtype").innerHTML = "";
    
    switch(x.options[i].value){
        
        case "1":oncampus.style.display="table-row";
                 offcampus.style.display="none";
                 research.style.display="none";
                 pgdaem.style.display="none";
            break;
        case "2":oncampus.style.display="none";
                 offcampus.style.display="table-row";
                 research.style.display="none";
                 pgdaem.style.display="none";
            break;
            
        case "3":
                oncampus.style.display="none";
                 offcampus.style.display="none";
                 research.style.display="table-row";
                 pgdaem.style.display="none";
            break;
        
        case "4":oncampus.style.display="none";
                 offcampus.style.display="none";
                 research.style.display="none";
                 pgdaem.style.display="table-row";
            break;
    }
}