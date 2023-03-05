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

            <h2>Post</h2>

            <div class="create_post_wrapper">
                <a href="/post-create" style="border:0;background-color: #ff7a57; color: white; padding: 8px 25px;border-radius: 10px; cursor: pointer; font-weight: 400; display: inline-block; margin-top: 25px;">Create Post</a>
                <form action="/destroy" method="POST" style="margin-top: 25px;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
                    <button style="border:0;background-color: maroon; color: white; padding: 8px 25px;border-radius: 10px; cursor: pointer; font-weight: 400; display: inline-block; margin-top: 25px;">Delete Post</button>
                </form>
            </div>
            
            <?php if(!empty($result)): ?>
                <div class="posts" style="margin-top: 30px;">
                    <ul style="margin-left: 0; padding-left: 10px;">
                        <?php echo '<li style="margin-bottom: 15px;">' . $result['body'] . '</li>'; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Page Footer -->
<?php view('partials/footer.php') ?>