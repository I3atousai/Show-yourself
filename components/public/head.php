<?php

use App\Helpers\Navigate;

?>
<!DOCTYPE html>
<html lang="en" <?php  
if (isset($_SESSION['mode']) && ($_SESSION['mode'] == 'dark')) { ?>
style="
  --back:rgba(28, 26, 51, 0.95);
  --input_back:rgba(28, 26, 51, 0.95);
  --main:rgba(230, 236, 241, 0.61);
  --text1: #1c1a33d7; 
  --add1: #35B0AB;
  --add2: #BE3144;
  --add3: #E17564;
  --button:#1c1a33d7 ;
   scrollbar-color: var(--add) var(--main);"
<?php } else { ?>
    style="
    --back: #e6ecf1c9;
  --main: #1c1a33d7;
  --input_back:rgba(230, 236, 241, 0.57);
  --text1: #e6ecf1c9;
  --add1: #35B0AB;
  --add2: #BE3144;
  --add3: #E17564;
  --button: #e6ecf1c9 ;
   scrollbar-color: var(--add) var(--main);"
<?php } ?> >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <?php
    foreach ($data['head']['css'] as $file) { ?>
        <link rel="stylesheet" href="<?php Navigate::css($file) ?>">
    <?php } ?>

    <?php
    foreach ($data['head']['service'] as $file) { ?>
        <script src="<?php Navigate::service($file) ?>"></script>
    <?php } ?>

    <?php
    foreach ($data['head']['js'] as $file) { ?>
        <script src="<?php Navigate::js($file) ?>"></script>
    <?php } ?> 

    <title>Show Youself</title>
</head>

<body>
    <header>
        
        <img class="logo_head" src="<?php Navigate::image("logo/png/logo-no-background.png") ?>" alt="" />
        <a class="bold fs24" href="<?php Navigate::link('index') ?>"><?php echo $data['public_text']['main_page'] ?></a>
        <?php if (!isset($_SESSION['auth'])) {?>
            <a class="bold fs24" href="<? Navigate::view('public/choice') ?>"><?php echo $data['public_text']['log/reg'] ?></a>
            <?php } else {
                 if ($_SESSION['auth']['role']=='admin') { ?>
                    <a class="bold fs24" href="<? Navigate::view('admin/panel')?>"><?php echo $data['public_text']['panel'] ?></a>
                    <?php } else { ?>
                <a class="bold fs24" href="<? Navigate::view('user/profile?id=' . $_SESSION['auth']['id']) ?>"><?php echo $data['public_text']['my_profile'] ?></a>
            <?php } ?>
        <?php }?>
    </header>