
function mise_en_page()
{
    $("#footer").css("position","absolute");
    $("#footer").css("width","100%");
    $("#footer").css("top","0px");   
    $("#footer").css("top",$(document).height() - $("#footer").height());
    
    $("#header_content").css("left", (($(document).width()-980)/2));
}



