<!DOCTYPE html>
<html lang="en">
<body>
    <header class="main-header navbar">
        <div class="col-search">
            <form class="searchform">
                <!-- <div class="input-group">
                    <input list="search_terms" type="text" class="form-control" placeholder="Search term">
                    <button class="btn btn-light bg" type="button"> <i class="material-icons md-search"></i> </button>
                </div> -->
                <div class="search-section">
                <form action="index.php" method="POST">
                    <!-- <input type="search" class="search-option" placeholder="Search by product name" value=""> -->
                    <!-- <a href="#" class="go-to-search-page" value="Search">Search</a> -->
                    <input type="search" class="search-option" placeholder="Search by product name" name="product">
                    <button class="go-to-search-page" name="Search" type="submit">Search</button>
                    </form>
                    <?php
                    if(isset($_POST['Search'])){
                        $search = $_POST['product'];
                        // search($search);
                        if(!empty($search)){
                            echo "
                                <script>
                                    window.location.href='product_search.php?id=$search';
                                </script>
                            ";
                        }
                    }
                ?>
                </div>
            </form>
        </div>

    </header>
</body>
</html>