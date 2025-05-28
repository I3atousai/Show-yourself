<?php
use App\Helpers\Navigate;


?>
<section>
    <div class="fs20 bold high">
        <p class="fs32"><?php echo $data['user']['name'] ?: "Не установлено/Undefined" ?></p>
        <div class="avatar_block">
            <input type="file" id="avatar_input">
            <img id="img" src="<?php Navigate::image("users/" . ($data['user']['avatar'] ?: "defolt.png")) ?>"
                alt=""></input>

        </div>
    </div>
</section>
<main>
    <?php
    if ($data['resumes']) { ?>
        <div class="resumes_wrapper">
            <h2 class="mb8"><?php echo $data['text']['your_resumes'] ?></h2>
            <div class="resumes">

                <?php foreach ($data['resumes'] as $resumes) {
                    echo "<p id='" . $resumes['id'] . "' class='res fs16 mb8' >" .
                        date("Y-m-d", strtotime($resumes['created_at'])) .
                        "<a id='link" . $resumes["id"] . "' href='" . Navigate::middleware('resume/make_pdf?id=' . $resumes['id'], mode: 'return') . "' class='download border fs16' >PDF</a> ";
                    echo "<button onclick='delete_res(" . $resumes["id"] . ")' class='download border fs16'>". $data['text']['delete'] . "</button>";
                    echo "<select id='style" . $resumes["id"] . "' class='border style_select'>
                    <option ". ($resumes['style'] == 'default' ? 'selected' : "") ." value='default'>default</option>
                    <option ". ($resumes['style'] == 'creative' ? 'selected' : "") ." value='creative'>creative</option>
                    <option ". ($resumes['style'] == 'minimalist' ? 'selected' : "") ." value='minimalist'>minimalist</option>
                    <option ". ($resumes['style'] == 'seo' ? 'selected' : "") ." value='seo'>seo</option>
                    <option ". ($resumes['style'] == 'tech' ? 'selected' : "") ." value='tech'>tech</option>
                    </select></p>";
                } ?>

            </div>
        </div>
    <?php } ?>
</main>
<form action="" method="post">

</form>
<a id="exit" class="fs24 border" href="<?php Navigate::middleware("users/logout") ?>"><?php echo $data['text']['exit'] ?></a>