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

window.setTimeout(function()
{
	$(".alert").fadeTo(500, 0).slideUp(500, function(){
		$(this).remove();
	});
}, 5000);

/* 
$('a.external').on('click', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        $(".modal-body").html('<iframe width="100%" height="100%" frameborder="0" scrolling="yes" allowtransparency="true" src="'+url+'"></iframe>');
 
      });*/

$('#myModal').on('show.bs.modal', function() { 
  $(this).find('.modal-dialog').css({
                  width:'40%x', //choose your width
                  height:'100%', 
                  'padding':'0'
                });
  $(this).find('.modal-content').css({
    height:'100%', 
    'border-radius':'0',
    'padding':'0'
  });
  $(this).find('.modal-body').css({
    width:'auto',
    height:'100%', 
    'padding':'0'
  });
});