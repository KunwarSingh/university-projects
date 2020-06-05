 $(document).ready(function() {
    $('#registerForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 20,
                        message: 'The username length must be 6-20 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }, 
                    stringLength: {
                        min: 6,
                        max: 20,
                        message: 'Min length 6 required'
                    },
                     identical: {
                    field: 'password_confirmation',
                    message: 'The password and its confirm are not the same'
                }
                }
            },
              password_confirmation: {
                validators: {
                  
                     identical: {
                    field: 'password',
                    message: 'The password and its confirm are not the same'
                }
                }
            },
              email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    },
                   
                    remote: {
                    url: '/verifyRegEmail',
                    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
                    type: 'POST',
                    delay: 3000     // Send Ajax request every 2 seconds
                   }
                }
            },
             agree: {
                validators: {
                    notEmpty: {
                        message: 'You Must Agree to Terms and Conditions'
                    }
                   
                }
            }
        }
    });
});


$(document).ready(function() {
    $('#loginForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
                    remote: {
                    url: '/validateUser',
                    type: 'POST',
                    data: function(validator, $field, value) {
                            return {
                                email: validator.getFieldElements('email').val()
                            };
                        },
                    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
                    delay: 3000     // Send Ajax request every 2 seconds
                   }
                    
                
                }
            },
          
              email: {
                  verbose: false,
                validators: {
                     notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    },
                   
                    remote: {
                    url: '/verifyEmail',
                    type: 'POST',
                     headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
                    delay: 3000     // Send Ajax request every 2 seconds
                   }
                }
            }
           
        }
    }) .on('status.field.fv', function(e, data) {
        if (data.field === 'email') {        // Change “username” to your field name
            (data.status === 'VALIDATING')
                ? $('#progressBar').show()      // Show the progress bar while we are validating
                : $('#progressBar').hide();     // Otherwise, hide it
        }
    })
     .on('success.validator.fv', function(e, data) {
        // data.field     --> The field name
        // data.element   --> The field element
        // data.result    --> The result returned by the validator
        // data.validator --> The validator name

        if (data.field === 'email'
            && data.validator === 'remote'
            && (data.result.available === false || data.result.available === 'false'))
        {
            // The userName field passes the remote validator
            data.element                    // Get the field element
                .closest('.form-group')     // Get the field parent

                // Add has-warning class
                .removeClass('has-success')
                .addClass('has-warning')

                // Show message
                .find('small[data-fv-validator="remote"][data-fv-for="email"]')
                    .show();
        }
    })
    // This event will be triggered when the field doesn't pass given validator
    .on('err.validator.fv', function(e, data) {
        // We need to remove has-warning class
        // when the field doesn't pass any validator
        if (data.field === 'email') {
            data.element
                .closest('.form-group')
                .removeClass('has-warning');
        }
    });
});






/*   */

    