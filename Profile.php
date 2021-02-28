<?php
    include_once 'header.php'
?>

    <!-- main element -->
    <main>
        <h2>Your player profile:</h2>
        <p>To be done</p>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit" name="submit">Upload</button>

        </form>
    </main>

    <?php
    include_once 'footer.php'
?>