<!DOCTYPE HTML>
<html>
    <title>CodeRacer</title>
    <link rel="icon" type="image/png" href="CodeRacer.png" />
    <body>
        <div class="diagonal"></div>
        <div class="diagonalshadow"></div>
        <div class="textlogo">CodeRacer</div>
        <div class="imglogo">
            <img src="CodeRacer.png" alt="CodeRacer Logo" width=85 height=auto>
        </div>
        <div class="carborder"></div>
        <div class="car">
            <svg width="200" height="150" version="1.1" viewBox="0 0 640 640" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                    <path id="b" d="m565.17 177.31c32.5 0 58.85 26.35 58.85 58.85v139.01c0 32.5-26.35 58.85-58.85 58.85h-461.65c-32.5 0-58.84-26.35-58.84-58.85v-139.01c0-32.5 26.34-58.85 58.84-58.85h461.65z"/>
                    <path id="a" d="m96.24 177.31h-69.76v256.71h69.76v-256.71z"/>
                    <path id="j" d="m178.92 348.56-68.24 39.82-0.39-80-0.4-80 68.63 40.18 68.64 40.19-68.24 39.81z"/>
                    <path id="f" d="m26.48 182.7h83.41v245.93h-83.41v-245.93z"/>
                    <path id="n" d="m50.14 190.62c6.19 0 11.22 5.03 11.22 11.23v39.67c0 6.19-5.03 11.22-11.22 11.22h-22.45c-6.2 0-11.22-5.03-11.22-11.22v-39.67c0-6.2 5.02-11.23 11.22-11.23h22.45z"/>
                    <path id="k" d="m50.14 359.86c6.19 0 11.22 5.02 11.22 11.22v39.67c0 6.2-5.03 11.22-11.22 11.22h-22.45c-6.2 0-11.22-5.02-11.22-11.22v-39.67c0-6.2 5.02-11.22 11.22-11.22h22.45z"/>
                    <path id="d" d="m222.22 275.72-85.53-64.8 172.64 0.89 172.63 0.9-87.09 63.9-87.11 63.9-85.54-64.79z"/>
                    <path id="m" d="m395.92 339.91 86.04 64.06-172.64 0.59-172.63 0.58 86.59-64.65 86.6-64.64 86.04 64.06z"/>
                    <path id="h" d="m488.48 141.18c3.6 0 6.52 2.92 6.52 6.52v36.4c0 3.6-2.92 6.52-6.52 6.52h-13.05c-3.6 0-6.52-2.92-6.52-6.52v-36.4c0-3.6 2.92-6.52 6.52-6.52h13.05z"/>
                    <path id="l" d="m488.48 421.97c3.6 0 6.52 2.92 6.52 6.52v36.4c0 3.6-2.92 6.52-6.52 6.52h-13.05c-3.6 0-6.52-2.92-6.52-6.52v-36.4c0-3.6 2.92-6.52 6.52-6.52h13.05z"/>
                    <path id="c" d="m451.28 258.26 67.85-50.75 1.18 100.87 1.17 100.86-69.02-50.11-69.02-50.13 67.84-50.74z"/>
                    <path id="g" d="m178.52 358.44 0.66-107.21 249.87 1.66-0.65 107.2-249.88-1.65z"/>
                    <path id="e" d="m617.5 213.69c3.6 0 6.52 2.92 6.52 6.53v49.07c0 3.6-2.92 6.52-6.52 6.52h-13.05c-3.6 0-6.52-2.92-6.52-6.52v-49.07c0-3.61 2.92-6.53 6.52-6.53h13.05z"/>
                    <path id="i" d="m617.5 347.12c3.6 0 6.52 2.92 6.52 6.53v49.07c0 3.6-2.92 6.52-6.52 6.52h-13.05c-3.6 0-6.52-2.92-6.52-6.52v-49.07c0-3.61 2.92-6.53 6.52-6.53h13.05z"/>
                </defs>
                <use fill="#F69A5B" xlink:href="#b"/>
                <use fill-opacity="0" stroke="#99d396" stroke-width="0" xlink:href="#b"/>
                <use fill="#F69A5B" xlink:href="#a"/>
                <use fill-opacity="0" stroke="#d585dc" stroke-width="0" xlink:href="#a"/>
                <use fill="#4b4b4b" xlink:href="#j"/>
                <use fill="#F69A5B" xlink:href="#f"/>
                <use fill="#e1473d" xlink:href="#n"/>
                <use fill="#e1473d" xlink:href="#k"/>
                <use fill="#4b4b4b" xlink:href="#d"/>
                <use fill="#4b4b4b" xlink:href="#m"/>
                <use fill="#F69A5B" xlink:href="#h"/>
                <use fill="#F69A5B" xlink:href="#l"/>
                <use fill="#4b4b4b" xlink:href="#c"/>
                <use fill="#F69A5B" xlink:href="#g"/>
                <use fill="#edd451" xlink:href="#e"/>
                <use fill="#edd451" xlink:href="#i"/>
            </svg>
        </div>
        <div class="select">
            <form action="ready.php">
                <input type="submit" name="select" id="select" value="SELECT">
            </form>
        </div>
        
        <style>
            html {
                height: 100%;
                width: 100%;
            }
        
            body {
                display: grid;
                grid-template-columns: 578px auto 578px;
                grid-template-rows: 139px 215px 215px auto;
                background-color: #00B597;
                animation-name: ominous;
                animation-iteration-count: infinite;
                animation-duration: 10s;
                margin: 0 0 0 0;
                padding: 0 0 0 0;
                position: absolute;
                min-height: 100%;
                min-width: 100%;
            }
            
            .diagonal {
                grid-column-start: 1;
	            width: 0;
	            height: 0;
	            border-left: 400px solid white;
	            border-bottom: 350px solid transparent;
	            position: absolute;
            }
            
            .diagonalshadow {
                grid-column-start: 1;
	            width: 0;
	            height: 0;
	            border-left: 415px solid #3F3F3F;
	            border-bottom: 350px solid transparent;
	            position: absolute;
                margin: 0 0 0 0px;
                z-index: -1;
            }
            
            .textlogo {
                grid-column-start: 1;
                grid-row-start: 1;
                color: #3F3F3F;
                font-size: 35px;
                font-family: 'Source Sans Pro', sans-serif;
                font-weight: 700;
                position: absolute;
                margin: 30px 0 0 35px;
            }
            
            @keyframes rotating {
                from {transform: rotate(0deg);}
                to {transform: rotate(360deg);}
            }
            
            @keyframes buttonpulse {
                0% {background-color: lightgray;}
                50% {background-color: #F69A5B; opacity: 2;}
                100% {background-color: lightgray;}
            }
            
            @keyframes borderpulse {
                0% {background-color: black;}
                50% {background-color: #F69A5B; opacity: 2;} /*original = #ab76a7*/
                100% {background-color: black;}
            }
            
            .imglogo {
                grid-column-start: 1;
                grid-row-start: 1;
                position: absolute;
                margin: 95px 0 0 30px;
            }
            
            @keyframes ominous {
                0% {background-color: #00B597;}
                50% {background-color: #00C38D;}
                100% {background-color: #00B597;}
            }
            
            .car {
                height: 150px;
                width: 200px;
                display: grid;
                grid-column-start: 2;
                grid-row-start: 2;
                margin-left: auto;
                margin-right: auto;
                animation: rotating 20s infinite linear;
                z-index: 2;
            }

            .carborder {
                height: 200px;
                width: 200px;
                display: grid;
                grid-column-start: 2;
                grid-row-start: 2;
                margin-left: auto;
                margin-right: auto;
                margin-top: -30px;
                margin-bottom: 40px;
                border: 5px solid black;
                border-radius: 200px;
                background-color: darkslategray;
                z-index: 1;
            }

            .select {
                display: grid;
                grid-column-start: 2;
                grid-row-start: 2;
                margin-left: auto;
                margin-right: auto;
                margin-top: 95%;
            }
            
            #select {
                font-family: 'Source Sans Pro', sans-serif;
                font-size: 13px;
                font-weight: 700;
                height: 42px;
                width: 102px;
                color: black;
                background-color: lightgray;
                border: 3px solid black;
                border-radius: 50px;
            }
            
            #select:hover {
                cursor: pointer;
                height: 40px;
                width: 100px;
                color: white;
                background-color: lightgray;
                animation-name: buttonpulse;
                animation-iteration-count: infinite;
                animation-duration: 1s;
            }
        </style>
    </body>
</html>