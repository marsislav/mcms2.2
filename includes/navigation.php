<header>
    <div class="container">
        <div class="logo">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" alt="Web Company! - mCMS 2.2" class="logoImg" />
            </a>
        </div>
        <nav class="main-navigation navbar navbar-expand-lg">
     
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php 
                            $query = "SELECT * FROM pages WHERE page_position != '0' ORDER BY page_position ASC";
                            $select_all_pages_query = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($select_all_pages_query)) {
                                $page_title = $row['page_title'];
                                $page_id = $row['page_id'];
                                echo "<li class='nav-item'>
                                <a href='page.php?page_id=$page_id' class='nav-link'>{$page_title} </a>
                                </li>";
                            }          
                ?>
            </ul>
            </div>

            </nav>

    </div>
    <!-- /.container -->

</header>