$(document).ready(function () {
    $("#form-login").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            email: {
                required: "O email é obrigatório!",
                email: "O email precisa um email válido."
            },
            password: {
                required: "A senha é obrigatória!",
                minlength: "A senha precisa ter mais de 5 caracteres."
            },
        }
    })

    $.ajax({
        type: "get",
        url: "url",
        data: "data",
        dataType: "dataType",
        success: function (response) {
            
        }
    });
});