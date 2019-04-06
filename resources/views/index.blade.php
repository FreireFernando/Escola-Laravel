<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Média Anual</title>
</head>
<body>
<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>s
    <h1>MÉDIA</h1>
    <form action="/calcular-media" method="post">
        @csrf
        Nome:  <input type="text" name="nome" id="nome" required> <br>
        Nota 1 <input type="text" name="nota1" id="nota1" required> <br>
        Nota 2 <input type="text" name="nota2" id="nota2" required> <br>
        Nota 3 <input type="text" name="nota3" id="nota3" required> <br>
        Nota 4 <input type="text" name="nota4" id="nota4" required> <br>
        <button type="submit">Enviar</button>
        <button type="reset">Resetar</button>
    </form>
</body>
</html>