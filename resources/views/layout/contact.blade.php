
@extends('layout.main')

@section('content')

<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center">
            <h1 class="display-4 mb-5">Contact Us</h1>
        </div>
        <div class="row">
            <div class="col-md-7 mb-5">
                <div class="contact-form">

                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="required" />
                            <p class="help-block text-danger" id="nameError"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required="required" />
                            <p class="help-block text-danger" id="emailError"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" id="message" name="message" placeholder="Your Message" required="required"></textarea>
                            <p class="help-block text-danger" id="messageError"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="button" id="sendMessageButton" onclick="validateForm()">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 mb-5">

            </div>
        </div>
    </div>
</div>


<script>
function validateForm() {
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var message = document.getElementById('message').value.trim();
    var nameError = document.getElementById('nameError');
    var emailError = document.getElementById('emailError');
    var messageError = document.getElementById('messageError');
    var valid = true;

    nameError.innerHTML = '';
    emailError.innerHTML = '';
    messageError.innerHTML = '';

    if (!name) {

        nameError.innerHTML = 'Please fill in your name.';

        valid = false;
    }

    if (!email) {

        emailError.innerHTML = 'Please fill in your email.';

        valid = false;

    } else if (!email.includes('@')) {

        emailError.innerHTML = 'Please use a valid email address.';

        valid = false;
    }

    if (!message) {

        messageError.innerHTML = 'Please leave us a message.';

        valid = false;
    }

    if (valid) {

        document.getElementById('contactForm').submit();

    }
}
</script>
@endsection
