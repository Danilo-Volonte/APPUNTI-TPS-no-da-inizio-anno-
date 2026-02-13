<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA QUIZ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto+Slab:wght@100..900&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #1E1B4B;
            padding: 40px 20px;
            font-family: "Inter", sans-serif;
            min-height: 100vh;
        }

        .sfondoDomanda {
            background: linear-gradient(135deg, #8451d8ff 0%, #6d3fa0 100%);
            border-radius: 16px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 8px 24px rgba(132, 81, 216, 0.2);
            transition: all 0.3s ease;
        }

        .sfondoDomanda:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(132, 81, 216, 0.3);
        }

        .domanda {
            font-weight: 600;
            color: #FFFFFF;
            margin-bottom: 16px;
            font-size: 18px;
            line-height: 1.4;
        }

        .risposte-gruppo {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .risposte {
            display: flex;
            align-items: center;
            font-weight: 600;
            color: #FFFFFF;
            cursor: pointer;
            font-size: 16px;
        }

        .risposte input[type="checkbox"] {
            width: 20px;
            height: 20px;
            margin-right: 12px;
            cursor: pointer;
            accent-color: #fbbf24;
            flex-shrink: 0;
        }

        .risposte:hover {
            color: #fbbf24;
        }
    </style>
</head>

<body>
    <div class="sfondoDomanda">
        <h2 class="domanda">Come stai?</h2>
        <div class="risposte-gruppo">
            <label class="risposte">
                <input type="checkbox" name="risposta">
                Bo
            </label>
        </div>
    </div>

    <div class="sfondoDomanda">
        <h2 class="domanda">Hai cagato nel puzzo?</h2>
        <div class="risposte-gruppo">
            <label class="risposte">
                <input type="checkbox" name="risposta">
                Biagit 
            </label>
        </div>
    </div>
</body>

</html>