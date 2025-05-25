<?php
use App\Helpers\Navigate;

// echo "<pre>";
// print_r($data['user']);
// echo "</pre>";

?>
<section>
    <div class="fs20 bold high">  
        <p><?php echo $data['user']['name'] ?: "Не установлено" ?></p>
        <img class="border" id="img" src="<?php  Navigate::image("users/" . ($data['user']['avatar'] ?: "defolt.png")) ?>" alt="">
    </div>
    <label for="avatar_input" class="input_label fs20">
        <input onchange="change_avatar()" type="file" id="avatar_input" style="visibility: hidden;" />
        <!-- <span><?php // echo $data['text']['file_choice'] ?></span> -->скачатб
    </label>
</section>
<main>
    <div class="links_wrapper">
        <h2 class="mb8">Ваши резюме</h2>
        <div class="links">
        <?php
            
            foreach ($data['resumes'] as $resumes) {
                
               echo "<p id='" . $resumes['id']. "' class='link fs16 mb8' >" .
                  $resumes['created_at'] .
                "<button onclick='download(". $resumes['id'] . ")' class='download' >PDF</button> </p>";
              
           } 
           
           ?>
            </div>
    </div>
</main>
<form action="" method="post">

</form>
    <a id="exit" class="fs24 border" href="<?php Navigate::middleware("users/logout") ?>">Выход</a>