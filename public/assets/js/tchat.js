let url="tchatAjax.php";


$(function(){
    $("#Tchatform").submit(function(){
        showLoader("#Tchatform")
        var message= $("#Tchatform from textarea").val();
        $.post(url,{action:"addMessage",message:message},function(data){
            if(data.erreur=="ok"){  
                alert("ok");
            }
            else{
                alert(data.erreur);
            }
        },"json");
        return false;

    })
});


function showLoader (textarea){
$(textarea).append("<textarea id='loader'></textarea>");
$("#loader").fadeTo(500,0.6);

}