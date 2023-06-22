<?php
    include 'db.php';

    if (isset($_GET['id'])) {
        $bookId = $_GET['id'];

        $query = "SELECT * FROM tbl_82_test WHERE id = $bookId";
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("DB query failed.");
        }
    }
    else {
        echo 'Book not found.';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>About Book</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">   
            <a class="navbar-brand" href="index.php">The Book Club</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                    </ul>
                </div>
            </div>
        </nav>
        <section style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Book</li>
            </ol>
        </section>
        <section id="book_wrap">
            <?php
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    echo '<h1>' . $row['bookname'] . '</h1>';
                    echo '<h4>' . $row['bookauthor'] . '</h4>';
                    echo '<section id="pic_box">';
                        echo '<img class="maxSize" src="' . $row['frontCover'] . '" alt="front cover">';
                        echo '<img class="maxSize" src="' . $row['backCover'] . '" alt="back cover">';
                    echo '</section>';
                    echo '<p><b>Price:</b> $' . $row['price'] . '</p>';
                    echo '<p><b>Category:</b> ' . $row['category'] . '</p>';
                } 

                mysqli_free_result($result);
            ?>
            <div class="d-grid gap-2 col-4 mx-auto">
                <button class="btn btn-primary" type="button">Add To Cart</button>
            </div>
        </section>
    </body>
</html>
<?php
    mysqli_close($connection);
?>