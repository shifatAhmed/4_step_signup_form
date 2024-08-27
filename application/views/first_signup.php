<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style type="text/css">
        body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 400px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
}

h2 {
    margin-bottom: 10px;
    color: #5a2a82;
}

p {
    color: #666;
    font-size: 14px;
}

.progress-bar {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.step {
    width: 25%;
    height: 5px;
    background-color: #ccc;
}

.step.active {
    background-color: #5a2a82;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    display: block;
    font-size: 14px;
    margin-bottom: 5px;
    color: #333;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 14px;
}

input:focus {
    border-color: #5a2a82;
}

button {
    background-color: #5a2a82;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

button:focus {
    outline: none;
}

button:disabled {
    background-color: #ccc;
}

.next-btn {
    width: 100%;
    margin-top: 10px;
}

.form-step {
    display: none;
}

.form-step.active {
    display: block;
}
.text-red{
    color: red;
}
.hide{
     display: none;
}

    </style>
    <div class="container">
        <?php echo form_open_multipart('/signup/submit', array('role' => 'form', 'id' => 'singup_form')); ?>
            <h2>SIGN UP YOUR USER ACCOUNT</h2>
            <p>Fill all form fields to go to the next step</p>
            <div class="progress-bar">
                <div class="step step_bar1 active"></div>
                <div class="step step_bar2 "></div>
                <div class="step step_bar3"></div>
                <div class="step step_bar4"></div>
            </div>

            <div class="form-step active"  id="step1">
                <h3>Account Information:</h3>
                <div class="form-group">
                    <label for="email">Email: *</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    <span class="email_field_error text-red hide">*Email is required</span>
                </div>
                <div class="form-group">
                    <label for="username">Username: *</label>
                    <input type="text" id="username" name="username" placeholder="UserName" required>
                    <span class="username_field_error text-red hide">*Username is required</span>
                </div>
                <div class="form-group">
                    <label for="password">Password: *</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <span class="password_field_error text-red hide">*Password is required</span>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password: *</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
                    <span class="confirm_password_field_error text-red hide">*Confirm Password is required</span>
                    <span class="match_error text-red hide">*Password didn't match</span>
                </div>
                <button type="button" id="next-step1" class="next-btn">Next</button>
            </div>

            <div class="form-step"  id="step2">
                <h3>Personal Information:</h3>
                <div class="form-group">
                    <label for="first-name">First Name: *</label>
                    <input type="text" id="first-name" name="first-name" placeholder="First Name" required>
                    <span class="first_name_field_error text-red hide">*First Name is required</span>
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name: *</label>
                    <input type="text" id="last-name" name="last-name" placeholder="Last Name" required>
                    <span class="last_name_field_error text-red hide">*Last Name is required</span>
                </div>
                <div class="form-group">
                    <label for="contact-no">Contact No.: *</label>
                    <input type="text" id="contact-no" name="contact-no" placeholder="Contact No." required>
                    <span class="contact_no_field_error text-red hide">*Contact No is required</span>
                </div>
                <div class="form-group">
                    <label for="alt-contact-no">Alternate Contact No.: *</label>
                    <input type="text" id="alt-contact-no" name="alt-contact-no" placeholder="Alternate Contact No." required>
                    <span class="alt_contact_no_field_error text-red hide">*Alt Contact No is required</span>
                </div>
                <div class="button-group">
                    <button type="button" id="prev-step2" class="prev-btn">Previous</button>
                    <button type="button" id="next-step2" class="next-btn">Next</button>
                </div>
            </div>

            <div class="form-step"  id="step3">
                <h3>Image Upload:</h3>
                <div class="form-group">
                    <label for="photo">Upload Your Photo:</label>
                    <input type="file" id="photo" name="photo" required>
                </div>
                <div class="form-group">
                    <label for="signature">Upload Signature Photo:</label>
                    <input type="file" id="signature" name="signature" required>
                </div>
                <div class="button-group">
                    <button type="button" id="prev-step3" class="prev-btn">Previous</button>
                    <button type="submit" id="next-step3" class="submit-btn">Submit</button>
                </div>
            </div>

            <div class="form-step"  id="step4">
                <h3>Finish:</h3>
                <div class="form-group">
                   <h2>Success</h2>
                   <p>You have successfully singed up</p>
                </div>
            </div>

        <?php echo form_close(); ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Navigation between steps
            $('#next-step1').click(function() {
                let is_error = false;
                if ($('#email').val().trim() === "") {
                    $('.email_field_error').removeClass('hide');
                    is_error = true;
                }
                else{
                    $('.email_field_error').addClass('hide');
                }
                if ($('#username').val().trim() === "") {
                    $('.username_field_error').removeClass('hide');
                    is_error = true;
                }
                else{
                    $('.username_field_error').addClass('hide');
                }
                if ($('#password').val().trim() === "") {
                    $('.password_field_error').removeClass('hide');
                    is_error = true;
                }
                else{
                    $('.password_field_error').addClass('hide');
                }
                if ($('#confirm-password').val().trim() === "") {
                    $('.confirm_password_field_error').removeClass('hide');
                    is_error = true;
                }
                else{
                    $('.confirm_password_field_error').addClass('hide');
                }
                if ($('#password').val() && $('#confirm-password').val() && $('#password').val().trim() != $('#confirm-password').val().trim()) {
                    $('.match_error').removeClass('hide');
                    is_error = true;
                }
                else{
                    $('.match_error').addClass('hide');
                }


                if(is_error === false){
                    $('#step2').addClass('active');
                    $('#step1').removeClass('active');
                    $('.step_bar2').addClass('active');
                }

            });

            $('#prev-step2').click(function() {
                $('#step1').addClass('active');
                $('#step2').removeClass('active');
                $('.step_bar2').removeClass('active');

            });

            $('#next-step2').click(function() {

                let is_error = false;
                if ($('#first-name').val().trim() === "") {
                    $('.first_name_field_error').removeClass('hide');
                    is_error = true;
                }
                else{
                    $('.first_name_field_error').addClass('hide');
                }
                if ($('#last-name').val().trim() === "") {
                    $('.last_name_field_error').removeClass('hide');
                    is_error = true;
                }
                else{
                    $('.last_name_field_error').addClass('hide');
                }
                if ($('#last-name').val().trim() === "") {
                    $('.last_name_field_error').removeClass('hide');
                    is_error = true;
                }
                else{
                    $('.last_name_field_error').addClass('hide');
                }

                if ($('#contact-no').val().trim() === "") {
                    $('.contact_no_field_error').removeClass('hide');
                    is_error = true;
                }
                else{
                    $('.contact_no_field_error').addClass('hide');
                }
                if ($('#alt-contact-no').val().trim() === "") {
                    $('.alt_contact_no_field_error').removeClass('hide');
                    is_error = true;
                }
                else{
                    $('.alt_contact_no_field_error').addClass('hide');
                }

                if(is_error === false){
                    $('#step3').addClass('active');
                    $('#step2').removeClass('active');
                    $('.step_bar3').addClass('active');
                }
            });

            $('#prev-step3').click(function() {
                $('#step2').addClass('active');
                $('#step3').removeClass('active');
                $('.step_bar3').removeClass('active');
            });

            $('#next-step3').click(function() {
                $('#singup_form').submit();
                $('#step4').addClass('active');
                $('#step3').removeClass('active');
                $('.step_bar4').addClass('active');
            });

        });
    </script>

</body>
</html>
