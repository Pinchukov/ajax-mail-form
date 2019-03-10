
//mail sender
$(document).ready(function () {
//Ajax form submission
	//Documentation: http://api.jquery.com/jquery.ajax/

	$(".form-1").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Thanks for applying! We will contact you soon.");
			$(".form-1").trigger("reset");
		});
		return false;
	});

	$(".form-2").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail2.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Thanks for applying! We will contact you soon.");
			$(".form-2").trigger("reset");
		});
		return false;
	});

	$(".form-3").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail3.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Thanks for the message! We will contact you soon.");
			$(".form-3").trigger("reset");
		});
		return false;
	});


}); //end document.ready function