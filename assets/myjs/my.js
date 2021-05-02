const base_url = "https://museumtengger.xyz/";
$(".btnlogin").on("click", function () {
    const username = $('.username').val();
    const password = $('.password').val();
    // console.log(username,password);
    $.ajax({
        method: "post",
        url: base_url + "API/login",
        data: {
            username: username,
            password: password
        },
        dataType: "json",
        success: function(response) {
            const status = response.status;
            const role = response.role;
            console.log(response);
            if (status == "success") {
                if (role == "super admin") {
                    window.location.href = base_url + "Admin";
                } else if (role == "administrator") {
                    window.location.href = base_url + "Admin";
                }
            } else if (status == "wrong_password") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Wrong Password!'
                })
                $('.password').val('')
            } else if (status == "not_active") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Unconfirmed account!'
                })
            } else if (status == "empty") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Unregistered user!'
                })
            }
            if (username == "" || password == "") {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Enter your Username and Password!'
                })
            }
        }
    });
})