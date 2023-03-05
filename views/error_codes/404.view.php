<?php base_location('views/partials/header.php') ?>
    <!-- Page navigation -->
<?php base_location('views/partials/navigation.php') ?>
    <!-- End of page navibation -->
    <section>
        <div class="container">
            <div class="">
                <h2>Error 404 - Page Not Found</h2>
                <p>
                    <a href="<?php echo $request_uri; ?>">Go Back To Home</a>
                </p>
            </div>
        </div>
    </section>

    <!-- Page Footer -->
<?php base_location('views/partials/footer.php') ?>