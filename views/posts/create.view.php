<?php view('partials/header.php') ?>
<!-- Page navigation -->
<?php view('partials/navigation.php') ?>
<!-- End of page navibation -->
<section>
    <div class="container">
        <div class="">
            <?php if(!empty($errors)): ?>
                <div class="errors">
                    <ul>
                        <?php foreach($errors as $error): ?>
                        <?php echo '<li>' . $error . '</li>'; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <h2>Create Post</h2>

            <div class="create_post_wrapper">
                
                <form action="/store" method="POST" style="margin-top: 25px;">
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Please enter post title here.">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="body" name="body" rows="3" placeholder="Please enter post body here."></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Create Post</button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- Page Footer -->
<?php view('partials/footer.php') ?>