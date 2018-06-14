<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        *{
            padding:0;
            margin:0;
        }
        #container{
            padding:5%;
        }
        fieldset{
            text-align:center;
            border-style:hidden;
        }
        header{
            text-align:center;
        }
        input,fieldset{
            padding:5px;
        }
        #alert{
            text-align:center;
            padding:10px;
            font-size:1.2em;
            font-weight: bold;
            display:none;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="alert"></div>
        <header>
            <h1>Register Form</h1>
        </header>
        <section id="form">
            <form action="" method="post">
                    <fieldset>
                        <label for="">Name:</label>
                        <input type="text" name="name" id="name">
                    </fieldset>
                    <fieldset>
                        <label for="">E-mail</label>
                        <input type="email" name="email" id="email">
                    </fieldset>
                    <fieldset>
                        <label for="">Mobile</label>
                        <input type="tel" name="mobile" id="mobile">
                    </fieldset> 
                    <fieldset>
                        <input type="button" id="btn" value="Register">
                    </fieldset>
            
            </form>
        </section>
    </div>
    <script src="app.js"> </script>
</body>
</html>