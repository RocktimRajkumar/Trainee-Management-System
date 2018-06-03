function myFunction() {
    var x = document.getElementById("select");
    var i = x.selectedIndex;
    var durationf=document.getElementById("durationfrom");
    var durationt=document.getElementById("durationto");
    var venue=document.getElementById("venue");
    var conduct_by=document.getElementById("conduct_by");
    var issue_by=document.getElementById("issue_by");
    switch(x.options[i].value){
        
        case "1":
        case "2":durationf.style.display="table-row";
                durationt.style.display="table-row";
                venue.style.display="table-row";
                conduct_by.style.display="none";
                issue_by.style.display="none";
//               durationf.children[1].children[0].required=true;
//               durationt.children[1].children[0].required=true;
               venue.children[1].children[0].required=true;
            break;
            
        case "3":
                durationf.style.display="none";
                durationt.style.display="none";
                venue.style.display="none";
                conduct_by.style.display="table-row";
                issue_by.style.display="table-row";
//                conduct_by.children[1].children[0].required=true;
//                issue_by.children[1].children[0].required=true;
            break;
        
        case "4":durationf.style.display="table-row";
                durationt.style.display="table-row";
                venue.style.display="none";
                conduct_by.style.display="none";
                issue_by.style.display="none";
//                durationf.children[1].children[0].required=true;
//                durationt.children[1].children[0].required=true;
            break;
    }
}

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