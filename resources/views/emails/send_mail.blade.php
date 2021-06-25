<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Send Email</title>
    <style type="text/css">
        input{
            height: 35px;
            width: 380px;
        }
        textarea{
            width: 380px;
            height: 90px;
        }
        button{
            width: 130px;
            height: 40px;
            background-color: blue;
            color: white;
            border: 1px solid blue;
        }
    </style>
</head>
<body>
    <center>
    <form action="{{URL::to('send-email')}}" method="POST">
        @csrf
        <h2>Send Email</h2>
        <input type="text" name="subject" placeholder="Subject" required="">
        <br><br>

        <input type="email" name="to_email" placeholder="To Email" required="">

        <br><br>
        <textarea placeholder="Message" name="message" required=""></textarea>
        <br><br>
        <button type="submit">Send Mail</button>

    </form>
</center>
</body>
</html>