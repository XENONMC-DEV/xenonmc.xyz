<?php
$output = shell_exec("./add-modules.sh");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/logo.webp" type="image/x-icon">
    <!-- load sheet then javascript -->
    <link rel="stylesheet/less" type="text/css" href="styles.less" />
    <script src="//cdn.jsdelivr.net/npm/less@3.13"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>XenonMC Development: Github Pull</title>
</head>

<body class="bg-dark">
    <div class="jumbotron bg-dark">
        <h4 class="text-success font-monospace">Terminal Output:</h4>
        <hr>
        <pre class="text-light">
BASH:
            <?php
            if (isset($output)) {
                echo $output;
            } else {
                echo "<h6> ERROR: NO DATA RETURNED!<h6>";
            }
            ?>
        </pre>
    </div>
    <hr>
    <a class="btn btn-success centered" href="/index.html">Back to Home</a>
    <script src="/upup.js"></script>
    <script>
        UpUp.start({
            'content-url': 'index.html',
            'assets': ['https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css',
                'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css',
                '/styles.less', '/logo.webp',
                'https://cdn.jsdelivr.net/npm/less@3.13',
                'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js',
                'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js',
                'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js'
            ],
            'scope': '/'
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>