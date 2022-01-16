<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNITED ENGINEERING</title>
    <style>
        @media only screen and (max-width: 768px) {
            .intro .intro-button-group a {
                font-family: Roboto;
                font-size: 2.3rem;
                color: #fff;
                font-weight: 700;
                text-decoration: none;
            }

            .intro {
                position: fixed;
                top: 50%;
                width: 100%;
            }

            .intro .intro-button-group .right {
                background-color: rgba(0, 164, 82, 0.5);
                width: 100%;
                padding-top: 3rem;
                padding-bottom: 3rem;
                padding-left: 2rem;
                text-align: center;
                display: inherit;
            }

            .intro .intro-button-group .left {
                background-color: rgba(71, 71, 71, 0.5);
                width: 100%;
                padding-top: 3rem;
                padding-right: 0;
                padding-bottom: 3rem;
                padding-left: 2rem;
                text-align: center;
            }
        }


        @media only screen and (min-width: 800px) {

            .intro .intro-button-group {
                display: flex;
                width: 98%;
                position: absolute;
                bottom: 10rem;
            }

            .intro .intro-button-group .left {
                background-color: rgba(71, 71, 71, 0.5);
                width: 50%;
                padding-top: 2rem;
                padding-bottom: 2rem;
                padding-right: 9rem;
                text-align: right;
                display: flex;
                justify-content: flex-end;
            }

            .intro .intro-button-group .right {
                background-color: rgba(0, 164, 82, 0.5);
                width: 50%;
                padding-top: 2rem;
                padding-bottom: 2rem;
                padding-left: 9rem;
                text-align: left;
            }

            .intro .intro-button-group a {
                font-family: Roboto;
                font-size: 2.5rem;
                color: #fff;
                font-weight: 700;
                display: block;
                text-decoration: none;
            }

            .intro .intro-button-group span {
                display: block;
                font-weight: 700;
                font-size: 1.1rem;
                color: #fff;
            }

        }

        html {
            background: url(bg.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .logo{
            padding: 10px 10px;
        }
    </style>
</head>

<body>
    <div class="logo">
        <img src="logo.png" alt="counter" width="150" height="50">
    </div>
    <div class="intro">
        <div class="intro-button-group">
            <div class="left" onclick="#'" style="cursor:pointer;">
                <div>
                    <a href="fms/index.php">UNITED FMS</a>
                </div>
            </div>
            <div class="right" onclick="#" style="cursor:pointer;">
                <a href="ue/index.php">UNITED ENGINEERING</a>
            </div>
        </div>
    </div>

</body>

</html>