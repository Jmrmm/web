$(function(){ 
	$("#b1").click(function() {

    var nome = $('#nome').val();
    var email = $('#email').val();
    var msg = $('#msg').val();

    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    var proceed = true;
    if (nome=="") {
        $('input[name=nome').css({'border':'2px solid red'});
        proceed = false;
    }
    else {
    	$('input[name=nome').css({'border':'1px solid'});
    }
    if (!filter.test(email)) {
        $('input[name=email]').css({'border':'2px solid red'});
        proceed = false;
    }
    else {
    	$('input[name=email]').css({'border':'1px solid'});
    }
    if (proceed == false) {
        $("#contactos_box").load("err.txt");    
        return false;
    }

    if (proceed == true) {

		var dataString = 'nome='+nome+'&email='+email+'&msg='+msg;
		if (dataString != '')
		{
			$.ajax({
			type: "POST",
			url: "savcontactos.php",
			data: dataString,
			cache: false,
			success: function(html){
				$("#nome").val('');
				$("#email").val('');
				$("#msg").val('');
				$("#content").prepend(html);
			}
			});
		}
		$("#contactos_box").load("contactos.txt");
		return false;
	}

	});

	$("#b2").click(function() {

    var emailreg = $('input[name=emailreg]').val();
    var passreg = $('input[name=passreg]').val();

    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    var proceed = true;
    if (!filter.test(emailreg)) {
        $('input[name=emailreg]').css({'border':'2px solid red'});
        proceed = false;
    }
    else {
    	$('input[name=emailreg]').css({'border':'1px solid'});
    }
    if (passreg=="") {
        $('input[name=passreg').css({'border':'2px solid red'});
        proceed = false;
    }
    else {
    	$('input[name=passreg').css({'border':'1px solid'});
    }
    if (proceed == false) {
        $("#registo_box").load("err.txt");    
        return false;
    }

    if (proceed == true) {
		var dataString = 'emailreg='+emailreg+'&passreg='+passreg;
		if (dataString != '')
		{
			$.ajax({
			type: "POST",
			url: "savregisto.php",
			data: dataString,
			cache: false,
			success: function(html){
				$("#emailreg").val('');
				$("#passreg").val('');
				$("#content").prepend(html);
			}
			});
		}
		$("#registo_box").load("registo.php");
		$(".blog-section").load("auth.php");
		return false;
	}

	});

	$("#b3").click(function() {

    var emaillog = $('input[name=emaillog]').val();
    var passlog = $('input[name=passlog]').val();

    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    var proceed = true;
    if (!filter.test(emaillog)) {
        $('input[name=emaillog]').css({'border':'2px solid red'});
        proceed = false;
    }
    else {
    	$('input[name=emaillog]').css({'border':'1px solid'});
    }
    if (passlog=="") {
        $('input[name=passlog').css({'border':'2px solid red'});
        proceed = false;
    }
    else {
    	$('input[name=passlog').css({'border':'1px solid'});
    }
    if (proceed == false) {
        $("#login_box").load("err.txt");    
        return false;
    }

    if (proceed == true) {
		var dataString = 'emaillog='+emaillog+'&passlog='+passlog;
		if (dataString != '')
		{
			$.ajax({
			type: "POST",
			url: "accesslogin.php",
			data: dataString,
			cache: false,
			success: function(html){
				$("#emaillog").val('');
				$("#passlog").val('');
				$("#content").prepend(html);
			}
			});
		}
		$("#login_box").load("login.php");
		$(".blog-section").load("auth.php");
		return false;
	}

	});

});
