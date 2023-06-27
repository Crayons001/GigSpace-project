
<!DOCTYPE html>
<html>
    <head>
        <title>Jobs</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="alt_style.css">
        <link rel="stylesheet" href="templates/header.css">
        <link rel="stylesheet" href="templates/jobs.css">
        <link rel="stylesheet" type="text/css" href="templates/portfolio_styles.css">
    </head>
    <body>
        <div class="sidebar">
            <?php include('templates/client_sidebar.html'); ?>
        </div>

        <div class="main-content">
            <?php include("templates/header.html"); ?>
            <div class="container">
                <?php include("templates/client_jobs.html"); ?>
            </div>
            
        </div>

    </body>
    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');
        let applyBtn =document.querySelector('.apply-button');

        btn.onclick = function() {
            sidebar.classList.toggle('active');
        }

        function openApplication(){
            window.location.href = "application.php";
        }
    </script>
</html>