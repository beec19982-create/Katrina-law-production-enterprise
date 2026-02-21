
<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Katrina Law | Ultra Premium</title>
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
</head>
<body>

<header>
    <h1>KATRINA LAW</h1>
    <div>
        <a href="subscribe.php" class="btn">Subscribe</a>
        <a href="admin/login.php" class="btn red">Admin</a>
    </div>
</header>

<section class="hero">
    <div class="overlay">
        <h2>Official Celebrity Portfolio</h2>
        <p>Exclusive Content • Premium Access</p>
    </div>
</section>

<section class="movies">
    <h2>Filmography</h2>
    <div class="row">
    <?php
        $result = $conn->query("SELECT * FROM movies");
        while($movie = $result->fetch_assoc()):
    ?>
        <div class="card" 
             onmouseover="showPreview('<?php echo $movie['title']; ?>','<?php echo $movie['description']; ?>')" 
             onclick="openModal()">
            <img src="uploads/<?php echo $movie['image']; ?>">
            <div class="info">
                <h3><?php echo $movie['title']; ?></h3>
                <p><?php echo $movie['release_year']; ?></p>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
</section>

<div id="previewBox" class="preview"></div>

<div id="trailerModal" class="modal">
    <div class="modal-content">
        <span onclick="closeModal()" class="close">&times;</span>
        <iframe width="100%" height="400"
        src="https://www.youtube.com/embed/0M8g7vQGqK8"
        allowfullscreen></iframe>
    </div>
</div>

</body>
</html>
