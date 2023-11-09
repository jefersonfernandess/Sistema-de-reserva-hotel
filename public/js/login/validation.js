$(document).ready(function () {
    $("#form-login").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minleght: 3
            }
        },
        messages: {
            email: {
                required: "O email é obrigatório!",
                email: "O email precisa um email válido."
            },
            password: {
                required: "A senha é obrigatória!",
                minleght: "A senha precisa ter mais de 3 caracteres."
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