
<!DOCTYPE html>
<html>
    <head>
        <title>Test Page</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="alt_style.css">
        <link rel="stylesheet" href="templates/twitter_style.css">
        <link rel="stylesheet" href="templates/upwork_styles.css">
        <link rel="stylesheet" href="form_styles.css">
        <link rel="stylesheet" href="templates/tags.css">
    </head>
    <body>
        
        <div class="sidebar">
            <?php include('templates/client_sidebar.html'); ?>
        </div>

        <div class="main-content">
            <div class="container">
                <?php include("templates/post_jobs.html"); ?>
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