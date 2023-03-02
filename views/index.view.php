<?php require('partials/header.php') ?>
<!-- Page navigation -->
<?php require('partials/navigation.php') ?>
<!-- End of page navibation -->
<section>
    <div class="container">
        <div class="">
            <div class="errors">
                <?php if(!empty($errors)): ?>
                <ul>
                    <?php foreach($errors as $error): ?>
                     <?php echo '<li>' . $error . '</li>'; ?>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
            <h2>Homepage</h2>

            <div class="posts">
                <?php if(!empty($results)): ?>
                    <ul>
                        <?php foreach($results as $result): ?>
                            <?php echo '<li>' . $result['body'] . '</li>'; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Page Footer -->
<?php require('partials/footer.php') ?>