<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details Form</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
        }

        .container{
            width:500px;
            margin:50px auto;
            background:#fff;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
        }

        h2{
            text-align:center;
            color:#333;
        }

        label{
            display:block;
            margin-top:10px;
            font-weight:bold;
        }

        input, textarea{
            width:100%;
            padding:10px;
            margin-top:5px;
            border:1px solid #ccc;
            border-radius:5px;
        }

        button{
            width:100%;
            background:#007bff;
            color:white;
            border:none;
            padding:12px;
            margin-top:15px;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student Registration Form</h2>

    <form action="/submit" method="POST">
        @csrf

        <label>Full Name</label>
        <input type="text" name="name" placeholder="Enter Full Name" required>

        <label>Email Address</label>
        <input type="email" name="email" placeholder="Enter Email" required>

        <label>Phone Number</label>
        <input type="text" name="phone" placeholder="Enter Phone Number" required>

        <label>Address</label>
        <textarea name="address" rows="4" placeholder="Enter Address"></textarea>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>