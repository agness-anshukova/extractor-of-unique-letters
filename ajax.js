$( document ).ready(function() {
    $("#btn").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', 'ajax_form_handler.php');
			return false; 
		}
	);
});
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, 
        type:     "POST", 
        dataType: "html", 
        data: $("#"+ajax_form).serialize(),  
        success: function(response) { 
        	result = $.parseJSON(response);
        	$('#result_form').html('Entered sentence is: "'+result.sentence+'"<br>'+
        		'The unique first letters are: '+result.uniqueLettersString);
    	},
    	error: function(response) { 
            $('#result_form').html('Error. No data has been sent.');
    	}
 	});
}