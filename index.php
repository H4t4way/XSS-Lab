<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.0.7/purify.min.js"></script>
    <title>Base Carlino</title>
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
        <h2 id="boomer">Carlino Base</h2>
        <hr>
        <img src="https://i.pinimg.com/originals/c5/7a/55/c57a55f7a9ca8ee3e3f291b0854a6658.gif" style="float:left;margin:0px 20px" alt="Carlino" width="150" height="222">
        <u><b>Regole</b></u>
        <ul>
            <li>Difficolta <b>Easy</b>.</li>
            <li>triggerare un <code>alert(1).</li>
            <li>Senza user interaction</li>
            <li>Testato su <b>Tutti i browser</b>.</li>
        </ul>
        <hr>
    </div>

  <div class="well">
    <div class="col-lg-6"> 
        <p>  
            <form method='get' action=''>
                <div class="form-group"> 
                    <label></label>
                    <input class="form-control" width="50%" placeholder="inserisci il nome del carlino" name="item"></input> <br>
                    <div align="right"> <button class="btn btn-default" type="submit" style="background-color: #4CAF50;">Submit Button</button></div>
               </div> 
            </form>
            <?php
                if (isset($_GET['item'])) {
                    echo $_GET['item'];
                }
                
            ?>
        </p>
    </div> 


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>


