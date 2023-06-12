<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="/helo/store">
            @csrf
            <div class="contact-content">

                <div class="form">
                    <div class="form-item">

                        Name:<br> <input type="text" name="name"> <br>
                        Email: <br> <input type="text" name="email"> <br>
                        Phone Number: <br> <input type="text" name="phone"> <br>


                        Message: </span><br><textarea name="message" row="50" placeholder="Enter Message"></textarea>
                        <br>
                        <input type="submit" value="Send" style="background: #335791">

                    </div>
                </div>
            </div>

        </form>
</body>
</html>