var registrationForm = $('#registerform');
$(function() {
    /* check username and password length */
    $.validator.addMethod('strongName', function(value, element) {
        return this.optional(element) ||
            value.length >= 6
    }, 'نام کاربری باید 6 کاراکتر بیشتر باشد')
    $.validator.addMethod('strongPassword', function(value, element) {
        return this.optional(element) ||
            value.length >= 8
    }, 'نام کاربری باید 8 کاراکتر بیشتر باشد')

    /*start validation and set required and show messages */
    if (registrationForm.length) {
        registrationForm.validate({
            rules: {
                username: {
                    required: true,
                    strongName: true,

                },
                userpassword: {
                    required: true,
                    strongPassword: true

                },
                firstname: {
                    required: true,
                },
                lastname: {
                    required: true,
                },
            },
            messages: {
                username: {
                    required: 'لطفا نام کاربری را وارد نمایید',
                },
                userpassword: {
                    required: 'لطفا رمز عبور را وارد نمایید',
                },

                firstname: {
                    required: 'لطفا نام خود را وارد نمایید',
                },
                lastname: {
                    required: 'لطفا نام خانوادگی خود را وارد نمایید'
                },

            },
        });
    }


})