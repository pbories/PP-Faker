<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Fake profile pic generator
    </title>
    <style>
        .loading {
            background: transparent url('http://thinkfuture.com/wp-content/uploads/2013/10/loading_spinner.gif') center no-repeat;
        }
        button {
            background-color: #2fafaf;
            border: none;
            border-radius: 5px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        button:hover {
            color: darkslategray;
            cursor: pointer;
        }
    </style>
</head>

<body style="color: darkslateblue; width: 100%; margin: auto; text-align: center;">

<h1>AI generated fake profile pic</h1>

    <div class="loading" id="image" style="width: 400px; height: 400px; margin: auto;">
        <!-- Displays generated image -->
    </div>

    <div style="margin-top: 30px;">
        <a href="#" id="save"><button>OK, let's save it !</button></a>
        <button id="next" style="margin-left: 20px">Next one, please</button>
    </div>

    <div style="margin-top: 100px">
        Based on <a href="https://thispersondoesnotexist.com" target="_blank">thispersondoesnotexist.com</a>
    </div>

    <script type="text/javascript" src="faker.js"></script>

</body>
</html>
