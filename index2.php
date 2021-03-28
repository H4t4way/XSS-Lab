<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>La rivolta dei carlini</title>
</head>
<style>
body {
 margin:0;
 font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
 font-size:1rem;
 font-weight:400;
 line-height:1.5;
 color:#fff;
 text-align:left;
 background-color:#1c1e29
}
</style>

<body>
    <br><br>
    <div class="container">
        <h2>Supera il carlino</h2>
        <hr>
         <img src="http://forgifs.com/gallery/d/223266-2/Baby-pugs-running.gif" style="float:left;margin:0px 20px" alt="Carlino" width="500" height="333"> 
        <u><b>Regole</b></u>
        <ul>
            <li>Difficolta'<b>Easy/Medium</b>.</li>
            <li>Esegui un <code>alert(1)</code> sulla pagina</li>
            <li>Senza user Interaction</li>
            <li>Testato su <b>Tutti i Browser</b>.</li>
        </ul>
        <hr>
    </div>

    <script>
        carlino = (new URL(location).searchParams.get('carlino') || '1+1')
        carlino = carlino.slice(0, 50)
        carlino = carlino.replace(/[\`\'\"\+\-\!\\\[\]]/gi, '_')
        carlino = carlino.replace(/alert/g, '_')
        eval(carlino)
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
