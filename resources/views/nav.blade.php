<html>
    <head>
        <title>SJP</title>
    </head>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro&family=League+Spartan:wght@500&display=swap');
        body {
            display: block;
            justify-content: center;
            align-items: center;
        }

        .inset{
            height: 10%;
            border-style: outset;

        }

        .home {
            position: relative;
            width: 105px;
            height: 30px;
            left: 7%;
            top: 1%;
            text-align: center;
            flex-shrink: 0;
            color: #0D1282;
            font-family: "Be Vietnam";
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .outset {
            border-style: outset;
            text-align: center;
            border-radius: 10%;
            width: 110px;
            height: 30px;
        }
        .tanda {
            position: relative;
            width: 105px;
            height: 400px;
            left: 150%;
            top: -0%;
            text-align: center;
            flex-shrink: 0;
            color: #0D1282;
            font-family: "Be Vietnam";
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            justify-content: center;
        }

        .hidden {
            border-style: outset;
            border-radius: 10%;
            width: 110px;
            height: 30px;
        }
        .manifes {
            position: relative;
            width: 105px;
            height: 30px;
            left: 150;
            top: -0%;
            text-align: center;
            flex-shrink: 0;
            color: #0D1282;
            font-family: "League Spartan";
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .none {
            border-style: outset;
            border-radius: 10%;
            width: 110px;
            height: 30px;
        }
    </style>
    <body>
        <div class="inset"></div>
        <div class="home">
            <p class="outset">Home</p>
            <div class="tanda">
                <p class="hidden">Tanda Terima</p>
                <div class="manifes">
                    <p class="none">Manifest</p>
                </div>
            </div>
        </div>
    </body>
</html>
