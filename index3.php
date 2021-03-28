<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>SSSSSITH</title>
</head>
<style>
body {
 background-image: linear-gradient(red, yellow);
}
input{
  background-color: #3CBC8D;
  color: white;
}
</style>
<body>
    <br><br>
    <div class="container">
        <h2>Revenge of the Sith</h2>
        <hr>
         <img src="https://data.whicdn.com/images/214002587/original.gif" style="float:left;margin:0px 20px" alt="Carlino" width="500" height="333"> 
        <u><b>Regole</b></u>
        <ul>
            <li>Difficolta'<b>Easy/Medium</b>.</li>
            <li>Esegui un <code style="color:green;">alert(1)</code> sulla pagina</li>
            <li>Senza user Interaction</li>
            <li>Testato su <b>Tutti i Browser</b>.</li>
        </ul>
        <hr>
    </div>
     <div id="sith"></div>
    <script>
        let gino = (new URL(location).searchParams.get('gino'));
        gino = gino.replace(/[<>]/g, '')
        sith.innerHTML = `<input type="text" placeholder="${gino}" class="form-control">`
    </script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
