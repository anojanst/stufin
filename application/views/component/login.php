<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
               
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="contact__form text-center">
                    <h4>Login</h4>
                    <?php if($message): ?>
                        <h5 class="mb-4 dark"><?php echo $message ?></h5>
                    <?php endif; ?>
                    <form action="<?php echo base_url('login/user/check') ?>" method="POST">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" placeholder="Email" name="email" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="password" placeholder="Password" name="password" required>
                            </div>
                        </div>
                        <button type="submit" class="site-btn mb-3">Login</button>
                    </form>
                    <a href="<?php echo base_url('forgot') ?>" class="new_a">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->