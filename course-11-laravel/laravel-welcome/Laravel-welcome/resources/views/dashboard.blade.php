<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to our Store</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/app.css">
    <style>
        .content {
            height: 100%;
        }

        .content::before {
            content: "";
            position: fixed;
            width: 300%;
            height: 100%;
            background-color: #0075ff;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) skew(0, -10deg);
            border-radius: 50%;
            z-index: -1;
            animation: waving 5s ease-in-out infinite alternate;
            /* width: 50px;
    height: 50px;
    border-radius: 50%; */
        }

        @keyframes waving {
            from {
                transform: translateX(-50%) skew(0, -10deg);
            }

            to {
                transform: translateX(-30%) skew(10deg, 0);
            }
        }

        .card {
            width: 300px;
            padding: 20px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px #ddd inset;
        }

        button,
        input[type="search"] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 75%;
            background: #f1f1f1;
        }

        button {
            float: left;
            width: 25%;
            padding: 10px;
            background: #0075ff;
            color: #fff;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
        }

        input[type="search"]:focus,
        button:focus {
            outline: none;
            /* box-shadow: none; */
        }

        .sr-only {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }
    </style>
</head>

<body>

    <div class=content>
        <div class="card">
            <h1>Welcome to our Store</h1>
            <form id="form_search" action="">
                @csrf
                <label for="in_search" class="sr-only">Search</label>
                <input type="search" id="input_search" name="in_search" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
            <p id="erorr"></p>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>