<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA QUIZ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">  
    <style>
        .domanda {
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            font-weight: 600;
            color: #FFFFFF; /* testo bianco */
        }

        .risposte {
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            font-weight: 650;
            color: #FFFFFF; /* testo delle risposte */
        }

        body {
            background-color: #1E1B4B; /* blu scurissimo */
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            margin-bottom: 20px;
            padding: 20px;
        }   

        .sfondoDomanda {
            background-color: #8451d8ff; /* viola scuro */
            border-radius: 16px;
            padding: 15px;
            margin-bottom: 20px;
            color: white;
        }

    </style>
</head>
<body>
    <div class = "sfondoDomanda"> <!-- divisore per tutte le domande -->
        <h2 class="domanda"> come stai? </h2>
            
        <label class="risposte">
            <input type="checkbox" name="risposta">
            bo
        </label>
    </div>
</body>
</html>