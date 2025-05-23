<?php 

use App\Helpers\Navigate;

?>
<footer>
    <div class="sub_footer">
        <h2 class="fs32">Show Youself</h2>
        <nav>
            <?php if (isset($_SESSION['auth']) && $_SESSION['auth']['role'] != 'admin') { ?>
                <a class="fs20" href="<?php Navigate::view('user/profile') ?>"><?php echo $data['public_text']['my_profile'] ?></a>
           <?php } ?>
            <a class="fs20" href="<?php Navigate::view('public/instruction') ?>"><?php echo $data['public_text']['instructions'] ?></a>
        </nav>

    </div>
    <div class="sub_footer">
        <div class="icons fs24">
            <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>

            

        </div>
        <form id="language_form" action="" method="POST">
        <label class="fs16" for="language"><?php echo $data['public_text']['language'] ?></label>
        <select onchange="change_by_id('language_form')" class="fs16" id="language" name="language">
            <option value="ru">ru</option>
            <option <?php echo (isset($_SESSION['language']) &&( $_SESSION['language'] == 'en')) ?  'selected' : "" ?> value="en">en</option>
        </select>
        </form>
         <form id="mode_form" action="" method="POST">
        <label class="fs16" for="mode"><?php echo $data['public_text']['mode'] ?></label>
        <select onchange="change_by_id('mode_form')" class="fs16" id="mode" value ="asdasd" name="mode">
            <option   value="light"><?php echo $data['public_text']['light'] ?></option>
            <option <?php echo (isset($_SESSION['mode']) &&( $_SESSION['mode'] == 'dark')) ?  'selected' : "" ?> value="dark"><?php echo $data['public_text']['dark'] ?></option>
        </select>
        </form>
        <p>© 2025-2025 Show Youself</p>
    </div>
</footer>
<?php
foreach ($data['foot']['css'] as $file) { ?>
    <link rel="stylesheet" href="<?php Navigate::css($file) ?>">
<?php } ?>

<?php
foreach ($data['foot']['service'] as $file) { ?>
    <script src="<?php Navigate::service($file) ?>"></script>
<?php } ?>
<?php
foreach ($data['foot']['js'] as $file) { ?>
    <script src="<?php Navigate::js($file) ?>"></script>
<?php } ?>

</body>

</html>