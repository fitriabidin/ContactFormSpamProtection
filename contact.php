<?php
session_start();

// generate token with hex
$token = bin2hex(random_bytes(32));
// Generate Current timestamp
$number = date('H:i:s');
// Store the token into a session variable!
$_SESSION['token'] = $token;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

    <style>
        .primary { display:none;}
    </style>


</head>
<body>
    <section id="contact-page" class="container">
        <div class="row justify-content-center align-item-center">
            <div class="col">
                <div class="highlighted-text">
                                </div>
                <h3>How can we help you today?</h3>
                <p>We will get back to you within one working day.</p>
                <form method="post" action="action.php">
                    <input type="hidden" name="page" value="contact-us">
                    <div class="row align-item-center justify-content-center">
                        <div class="col-sm-5">

                        <!-- This Is Timestamp -->
                        <input type="text" class="form-control primary" name="number" value="<?php echo $number; ?>">
                        <!-- This is end of Timestamp -->
                       
                          <!-- This Is CSRF -->
                          <input type="text" class="form-control primary" name="token" value="<?php echo $token; ?>">
                           <!-- End of CSRF  -->

                          <!-- This Is a Honey Pot -->
                            <div class="form-group mb-3">
                                <input type="text" class="form-control primary" name="first_name" >
                            </div>
                            <!-- End Of Honey Pot -->

                            <div class="form-group mb-3">
                                <input type="text" class="form-control" required="required" name="name" placeholder="Name">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" required="required" name="phone_num" placeholder="Phone Number">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" required="required" name="email" placeholder="Email address">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name ="submit" class="btn btn-primary btn-lg">Send Message</button>
                            </div>
                        </div>

                         <input id="full_name" style="width: 0px; height: 0px; position: fixed; top: -1000px; left: -1000px;" name="full_name" value="">
                        <div class="col-sm-7">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                        </div>
                    </div>
                </form>
            </div><!--/.col-sm-8-->

        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      document.querySelector('.primary').style.display = 'none';
    </script>
</body>
</html>

