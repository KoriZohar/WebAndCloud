<?php
    include 'db.php';
    
    $query = "SELECT * FROM tbl_82_test";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("DB query failed.");
    }
?>
<!DOCTYPE html>
<html>
	<head>
        <title>Book Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
        <div id="wrapper">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">The Book Club</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                            <ul class="dropdown-menu" id="categ_list">
                            </ul>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <main id="cards">
            <?php
                if (mysqli_num_rows($result) > 0) 
                {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="card" data-category="' . $row['category'] . '">';
                            echo '<img src="' . $row['frontCover'] . '" class="card-img-top" alt="Front Cover">';
                            echo '<div class="card-body">';
                                echo '<h5 class="card-title">' . $row['bookname'] . '</h5>';
                                echo '<p class="card-text">' . $row['bookauthor'] . '</p>';
                                echo '<a href="book.php?id=' . $row['id'] . '" class="btn btn-primary">View Details</a>';
                            echo '</div>';
                        echo '</div>';
                    }
                     
                } 
                else {
                    echo 'No books found at the store.';
                }

                mysqli_free_result($result);
            ?>
            </main>
        </div>
        <script src="includes/getBooksList.js"></script>
	</body>
</html>
<?php
    mysqli_close($connection);
?>