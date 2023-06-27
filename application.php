
<!DOCTYPE html>
<html>
    <head>
        <title>Applications</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="alt_style.css">
        <link rel="stylesheet" type="text/css" href="templates/application.css">
    </head>
    <body>
        
        <div class="sidebar">
            <?php include('templates/sidebar.html'); ?>
        </div>

        <div class="main-content">
            <div class="container">
                <h1>GigSpace</h1>
                <?php include("templates/application.html");?>
            </div>
            
        </div>

    </body>
    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');

        btn.onclick = function() {
            sidebar.classList.toggle('active');
        }
    </script>
</html>