<?php base_location('views/partials/header.php') ?>
    <!-- Page navigation -->
<?php base_location('views/partials/navigation.php') ?>
    <!-- End of page navibation -->
    <section>
        <div class="container">
            <div class="">
                <h2>Sorry No Results Found.</h2>
                <?php $request_uri = parse_url($_SERVER['REQUEST_URI'])['path']; 
                echo "<pre>"; 
                    var_dump($request_uri);
                echo "</pre>";
                ?>
                
                <p>
                    <a href="<?php echo $request_uri; ?>">Go Back</a>
                </p>
            </div>
        </div>
    </section>

    <!-- Page Footer -->
<?php base_location('views/partials/footer.php') ?>