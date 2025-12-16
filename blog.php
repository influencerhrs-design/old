<!DOCTYPE html>
<html lang="en">
<head>
<title>Career Blog | JobsPortal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
    body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
    body {font-size:16px; background-color: #121212; color: white;}
    .theme-yellow { color: #FFD833 !important; }
    .bg-yellow { background-color: #FFD833 !important; color: black !important; }
    .w3-sidebar { background-color: #FFD833 !important; color: black !important; font-weight:bold; }
    .blog-card { background-color: #1e1e1e; border: 1px solid #333; margin-bottom: 30px; border-radius: 12px; overflow: hidden; }
    .blog-content { padding: 20px; }
    .read-more { color: #FFD833; text-decoration: none; font-weight: bold; }
</style>
</head>
<body>

<nav class="w3-sidebar w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close</a>
  <div class="w3-container"><h3 class="w3-padding-64"><b>Jobs<br>Portal</b></h3></div>
  <div class="w3-bar-block">
    <a href="index.html" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#" class="w3-bar-item w3-button w3-hover-white theme-yellow">Career Blog</a> 
    <a href="post-job.html" class="w3-bar-item w3-button w3-hover-white">Post a Job</a> 
  </div>
</nav>

<div class="w3-main" style="margin-left:340px;margin-right:40px">
  <div class="w3-container" style="margin-top:80px">
    <h1 class="w3-jumbo"><b>Career</b></h1>
    <h1 class="w3-xxxlarge theme-yellow"><b>Insights & Tips.</b></h1>
    <hr style="width:50px;border:5px solid #FFD833" class="w3-round">
  </div>

  <div class="w3-container">
    <?php
    $blogData = json_decode(file_get_contents('blog.json'), true);
    if ($blogData) {
        foreach ($blogData as $post) {
            echo '
            <div class="blog-card w3-animate-opacity">
                <div class="blog-content">
                    <span class="w3-opacity w3-small">' . $post['date'] . ' | By ' . $post['author'] . '</span>
                    <h2 class="theme-yellow"><b>' . $post['title'] . '</b></h2>
                    <p>' . $post['excerpt'] . '</p>
                    <a href="#" class="read-more">Read Full Article →</a>
                </div>
            </div>';
        }
    } else {
        echo '<p>No blog posts found.</p>';
    }
    ?>
  </div>
</div>

<script>
function w3_open() { document.getElementById("mySidebar").style.display = "block"; }
function w3_close() { document.getElementById("mySidebar").style.display = "none"; }
</script>

</body>
</html>
