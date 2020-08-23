<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

    <div style="background-color: #d9e7ff">
        <img src="https://pbs.twimg.com/profile_images/1164420244917514241/wfp3Trh4_400x400.jpg" height="50px" width="50px" alt="User Image" />

    <table width="90%" border="0" cellspacing="0" cellpadding="0" >
        <tr><td align="center">
            <!-- padding --><div style="height: 60px; line-height: 60px; font-size: 10px;"> </div>
            <div style="line-height: 44px;">
                <font face="Arial, Helvetica, sans-serif" size="5" color="#57697e" style="font-size: 34px;">
                <span style="font-family: Arial, Helvetica, sans-serif; font-size: 34px; color: #57697e;">
                    Enquiry details
                </span></font>
            </div>
            <!-- padding --><div style="height: 40px; line-height: 40px; font-size: 10px;"> </div>
        </td></tr>
        <tr><td align="center">
            <div style="line-height: 24px;">
                <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                    <p>You received an email from :  <?php echo $token['email']; ?> </p>
                </span></font>
            </div>
            <div style="line-height: 24px;">
                <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                    <p>Name: <?php echo $token['name']; ?></p>
                    <p> Contact Number<?php echo $token['mobile']; ?></p>
                </span></font>
            </div>
             <div style="line-height: 24px;">


            </div>
            <div style="line-height: 24px;">
            </div>

           </tr>

    </table>
    </div>
</body>
</html>


