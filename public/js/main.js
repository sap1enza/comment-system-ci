$(document).ready(function () {


    var ajax = $.ajax({
        method: "POST",
        url: "Comments/pullAll",
        dataType: "json",
        success: function(e) {
            var table = "";
            console.log(e);
            for(var k in e) {
                table += "<div class='comment-container'>";
                table += "<div class='media comment-box'>";
                table += "<div class='media-left'>";
                table += "<img class='img-responsive user-photo' src='https://ssl.gstatic.com/accounts/ui/avatar_2x.png'>";
                table += "</div>";
                table += "<div class='media-body'>";
                table += "<h5 class='media-heading'>" + e[k]['id_autor'] + "</h5>";
                table += "<p>" + e[k]['comentario'] + "</p>";
                table += "</div> </div> </div>";
                $('#comments').html(table);
            }
        }
    })

	$("#signForm").submit(function (e) {
        e.preventDefault();
    	var form = $(this).serialize();
    	var ajax = $.ajax({
    		method: "POST",
    		data: form,
    		url: "Users/newUser/",
    		dataType: "json",
    		success: function(e){
    			if(e['status'] == false){
    				var error = "<span style='color: red'>"+ e['validation'] + "</span>"
    				$('#signErrors').html(error);
    			} else {
    				var success = "<p><span class='alert alert-success'>Cadastro realizado com sucesso!</span></p>";
    				$('#signErrors').html(success);
					setTimeout(function(){$('#closeModal').click()}, 1200);    				
    			}    			
    		}
    	});
        return false;
    });
});