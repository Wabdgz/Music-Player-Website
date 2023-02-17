// Music player example used from class, Created by professor Wergeles, as said we are allowed to.
$(function() {
                $(".record").draggable();
            
                $("#Player").droppable({
                    drop: function(event, ui) {
                        console.dir(event);
                        console.dir(ui);
                        
                        var record = ui.draggable;
                        var artist = record.prop("alt");
                
                        $("#message").html("Now playing: " + artist);
                        
                        $(".songs").trigger("pause");
                    
                        var index = $(".record").index(record) + 1;
                        
                        console.log(index);
                        
                        $("#audio" + index).trigger("play");
                        
                        record.fadeOut();
                        
					}
               	});
            });
//End Reference         
function stopmusic(){
     $(".songs").trigger("pause");
    $("#message").html("Music Stopped");
    $(".record").fadeIn();
    
}       

function loadInfo(){

var info = new XMLHttpRequest();
info.onreadystatechange = function()
{
    if(info.readyState == 4 && info.status == 200){
    document.getElementById("instructions").innerHTML = info.responseText;
        }   
};
    info.open("GET", 'http://ec2-34-203-205-68.compute-1.amazonaws.com/FinalProject/ajax.txt?content=info',true);
    info.send();
}
