$(document).ready(function () {

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