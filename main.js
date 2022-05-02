$(document).ready(function() {


	$("#searchbox").on("keyup", function() {

		var $str = $(this).val();

		if($str == "") {
			$(".search-results").addClass("hide");
			$(".search-results").html("");

		} else {

			var xhttp;

			if (window.XMLHttpRequest) {
			    xhttp = new XMLHttpRequest();
			    } else {
			    // code for IE6, IE5
			    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			xhttp.onreadystatechange = function() {
				if(this.readyState == 4) {
					$(".search-results").removeClass("hide");
					$(".search-results").html(this.responseText);
				}

				$(".search-results li:not(.none)").on("click", function(e) {
						
					$val = $(this).find(".name").html();
					$("#searchbox").val($val);

					$(".search-results").addClass("hide");
					$(".search-results").html("");
					
					$("#search-btn").focus();


				})
			}

			xhttp.open("GET", "searchquery.php?s="+$str, true);
			xhttp.send();

		}

		

	})


})