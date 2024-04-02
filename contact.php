<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Form</title>
</head>
<body>

<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-center mb-4 page-title">
                <h1 class="text-white">Contact Us</h1>
                <hr class="divider my-4 bg-dark" />
            </div>
        </div>
    </div>
</header>

<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <form id="contactForm" action="send_message.php" method="post">
                    <div class="form-group">
                        <label for="inputEmail">Email address</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea class="form-control" id="inputMessage" name="message" rows="3" required></textarea>
					  <small id="emailHelp" class="form-text text-muted">just let us know you wanna talk we'll contact you.</small>

                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var formData = new FormData(this);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'send_message.php', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            alert(xhr.responseText); 
        }
    };
    xhr.send(formData);
});
</script>
</body>
</html>
