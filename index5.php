<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap(4.4.1) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- DOMPurify(2.0.7) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.0.7/purify.min.js"
        integrity="sha256-iO9yO1Iy0P2hJNUeAvUQR2ielSsGJ4rOvK+EQUXxb6E=" crossorigin="anonymous"></script>
    <title>Jason Bourne e' arrivato</title>
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
 h2 {
   text-align: center;
  }
</style>
<body>
    <br><br>
    <div class="container">
        <h2>Jason Bourne</h2>
        <hr>
         <img src="https://media3.giphy.com/media/xT0GqD5vPp1e0hkGZy/giphy.gif" style="float:left;margin:0px 20px" alt="" width="300" height="222">
        <u><b>Regole</b></u>
        <ul>
            <li>Difficolta <b>HARD</b>.</li>
            <li>Triggerare un <code>alert(1)</code></li>
            <li>No user interaction.</li>
            <li>Testato su  <b>Chrome</b>.</li>
        </ul>
        <hr />
        </div>
        <hr />
        <script>
            /* Helpers */
            const bootstrapAlert = (msg, type) => {
                return (`<div class="alert alert-${type}" role="alert">${DOMPurify.sanitize(msg)}</div>`)
            }

            document.getAlert = () => document.getElementById('alerts');
        </script>

        <script>
            /* Welcome */
            let name = (new URL(location).searchParams.get('name')) || "Pamela Landy";
            document.write(
                bootstrapAlert(`<b>Operation Treadstone</b>: Welcome <u>${name}</u>.`, 'info')
            )
        </script>

        <!-- alerts -->
        <div id="alerts"></div>
    </div>

    <!-- Jquery(3.4.1), Popper(1.16.0), Bootstrap(4.4.1) -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script>
        /* Handle to `#alert` */
        let alerts = document.getAlert();

        /* Treadstone Credentials */
        let identification = Math.random().toString(36).slice(2);
        let code = Math.floor(Math.random() * 89999 + 10000);

        /* Default Credentials */
        DEFAULTS = {};
        DEFAULTS[identification] = code;
    </script>

    <script>
        /* Optional Comment */
        if (location.hash) {
            let comment = document.createComment(decodeURI(location.hash).slice(1));
            document.querySelector('#alerts').appendChild(comment);
        }
    </script>

    <script>
        /* Use `DEFAULTS` to init `SECRETS` */
        SECRETS = DEFAULTS

        /* Increment the `code` before the check */
        let secretKey = new URL(location).searchParams.get('key') || "TREADSTONE_WEBB";
        SECRETS[secretKey] += 1;

        /* Authorization Check */
        if (SECRETS[secretKey] === SECRETS[identification]) {
            confirm(`Jesus Christ, it's Jason Bourne!`)
        } else {
            confirm(`You ain't David Webb!`)
        }
    </script>
</body>

</html>


