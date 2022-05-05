$(document).on("click", "#delete", function() { 
    $.ajax({
        url: "backend/admin.php",
        type: "POST",
        cache: false,
        data:{
            type:3,
            user_id: $("#id_d").val()
        },
        success: function(dataResult){
                $('#deleteUserModal').modal('hide');
                $("#"+dataResult).remove();
                location.reload();	
        }
    });
});