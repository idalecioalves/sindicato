var url=window.location.href.replace("/cadastro","");

$.getJSON(url+'/delegacia/listajson',function(data){
	var options = "";
	$.each(data, function(key, value){              
             //console.log(value.id);
             options += '<option value="' + value.id + '">' + value.delegaciaNome + '</option>';
         });
	$("select#delegacia").html(options); 
});

$.getJSON(url+'/comunidade/listajson',function(data){
	var options = "";
	$.each(data, function(key, value){              
             //console.log(value.id);
             options += '<option value="' + value.id + '">' + value.nome + '</option>';
         });
	$("select#comunidade").html(options); 
});

$(document).ready(function(){	
	$("#loading").hide();
	$("button#atualiza").click(function(){
		$.getJSON(url+'/comunidade/listajson',function(data){
			var options = "";
			$.each(data, function(key, value){              
				$("select#comunidade").html(options);   
			});
		});
	});
	$(document).ajaxStart(function() {
		$("#loading").show();
	}).ajaxStop(function() {
		$("#loading").hide();
	});
});
