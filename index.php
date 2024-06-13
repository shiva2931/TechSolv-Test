<html>
    <head>
        <title>Contact Form</title>
    </head>
    <style>
        .txt{
            margin-top: 10px;
            margin-left: 10px;
        }
    </style>
    <body>
        <h3>Contact Form</h3>
        <form action="operation.php" method="post" autocomplete="off">
            <label>Full Name</label><input type="text" id="fname" name="fname" class="txt" required> <br>
            <label>Phone Number</label><input type="number" id="phone" name="phone" class="txt"> <br>
            <label>Email</label><input type="email" id="email" name="email" class="txt"> <br>
            <label>Subject</label><input type="text" id="subject" name="subject" class="txt" required> <br>
            <label>Message</label> <br><textarea style="resize:none;" rows="2" cols="50" id="message" name="message" class="txt" required></textarea>
            <br><input type="submit" id="btn_submit" name="btn_submit" value="Submit">
        </form>
    </body>
</html>