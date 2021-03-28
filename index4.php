<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap(4.4.1) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>La Vendetta di chrome</title>
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
        <h2>LA vendetta di Chrome</h2>
        <hr>
 <img src="https://i.gifer.com/7iJx.gif" style="float:left;margin:0px 20px" alt="Carlino" width="300" height="222">
        <u><b>Regole</b></u>
        <ul>
            <li>difficolta <b>Easy/Medium</b>.</li>
            <li>No user interaction.</li>
            <li>Testato su <b>Chrome</b>.</li>
        </ul>
        <hr />
    </div>

    <div id="pwnme"></div>

    <script>
        var input = (new URL(location).searchParams.get('debug') || '').replace(/[\!\-\/\#\&\;\%]/g, '_');
        var template = document.createElement('template');
        template.innerHTML = input;
        pwnme.innerHTML = "<!-- <p> DEBUG: " + template.outerHTML + " </p> -->";
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>


