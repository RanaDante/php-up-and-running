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

            <h2>All Posts</h2>

            <div class="create_post_wrapper">
                <a href="/post-create" style="border:0;background-color: #ff7a57; color: white; padding: 8px 25px;border-radius: 10px; cursor: pointer; font-weight: 400; display: inline-block; margin-top: 25px;">Create Post</a>
                <!-- <form action="" style="margin-top: 25px;">
                    <button style="">Create Post</button>
                </form> -->
            </div>

            <?php if(!empty($results)): ?>
                <div class="posts" style="margin-top: 30px;">
                    <ul style="margin-left: 0; padding-left: 10px;">
                        <?php foreach($results as $result): ?>
                            <a href="<?php echo '/post?id=' . $result['id']; ?>">
                                <?php echo '<li style="margin-bottom: 15px;">' . $result['title'] . '</li>'; ?>
                            </a>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Page Footer -->
<?php view('partials/footer.php') ?>