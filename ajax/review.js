$(document).on("click", "#btn-add", function (e) {
  var data = $("#user_form").serialize();
  $.ajax({
    data: data,
    type: "post",
    url: "backend/review.php",
    success: function (dataResult) {
      var dataResult = JSON.parse(dataResult);
      if (dataResult.statusCode == 200) {
        $("#addEmployeeModal").modal("hide");
        alert("Data added successfully !");
        location.reload();
      } else if (dataResult.statusCode == 201) {
        alert(dataResult);
      }
    },
  });
});
$(document).on("click", ".delete", function () {
  var review_id = $(this).attr("data-id");
  $("#id_d").val(review_id);
});
$(document).on("click", "#delete", function () {
  $.ajax({
    url: "backend/review.php",
    type: "POST",
    cache: false,
    data: {
      type: 3,
      review_id: $("#id_d").val(),
    },
    success: function (dataResult) {
      $("#deleteEmployeeModal").modal("hide");
      $("#" + dataResult).remove();
      location.reload();
    },
  });
});
$(document).on("click", "#delete_multiple", function () {
  var user = [];
  $(".user_checkbox:checked").each(function () {
    user.push($(this).data("user-id"));
  });
  if (user.length <= 0) {
    alert("Please select records.");
  } else {
    WRN_PROFILE_DELETE =
      "Are you sure you want to delete " +
      (user.length > 1 ? "these" : "this") +
      " row?";
    var checked = confirm(WRN_PROFILE_DELETE);
    if (checked == true) {
      var selected_values = user.join(",");
      console.log(selected_values);
      $.ajax({
        type: "POST",
        url: "backend/review.php",
        cache: false,
        data: {
          type: 4,
          review_id: selected_values,
        },
        success: function (response) {
          var ids = response.split(",");
          for (var i = 0; i < ids.length; i++) {
            $("#" + ids[i]).remove();
          }
        },
      });
    }
  }
});
$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
  var checkbox = $('table tbody input[type="checkbox"]');
  $("#selectAll").click(function () {
    if (this.checked) {
      checkbox.each(function () {
        this.checked = true;
      });
    } else {
      checkbox.each(function () {
        this.checked = false;
      });
    }
  });
  checkbox.click(function () {
    if (!this.checked) {
      $("#selectAll").prop("checked", false);
    }
  });
});
