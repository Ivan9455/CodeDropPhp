$(document).ready(function () {
    User.event();
});
let userObj = function (name, email, status) {
    this.name = name;
    this.email = email;
    this.satus = status;
};
let User = {
    event: function () {
        $(".add").on('click', ".add", function () {
            let name = $(".name").val();
            let email = $(".email").val();
            let status = $(".status").val();

        })
    },
    /*
    nameValid: function (name, block_error) {

    },
    emailValid: function (email, block_error) {

    },
    statusValid: function (status, block_error) {

    },
    */
};