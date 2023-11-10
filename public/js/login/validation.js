$(document).ready(function () {
    $("#form").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
            },
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
            name: {
                required: "O nome é obrigatório!",
                minlength: "A senha precisa ter mais de 2 caracteres."
            },
            email: {
                required: "O email é obrigatório!",
                email: "O email precisa um email válido."
            },
            password: {
                required: "A senha é obrigatória!",
                minlength: "A senha precisa ter mais de 4 caracteres."
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