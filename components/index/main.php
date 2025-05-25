<?php 

use App\Helpers\Navigate;
require_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";

?>

<div class="container">
    
    <fieldset class="border">
    <legend class="fs20"><?php echo $data['text']['my_name'] ?></legend>
    <section>
        <?php if (isset($_SESSION['auth'])) { ?>
            <img class="border" id="img" src="<?php  Navigate::image("users/" . ($data['user']['avatar'] ?: "defolt.png")) ?>" alt="">
            <?php } else { ?>
                <img  class="border" id="img" src="<?php  Navigate::image("users/" . "defolt.png") ?>" alt="">
                <?php } ?>
                <label for="avatar_input" class="input_label fs20">
                    <input onchange="change_avatar(this)" type="file" id="avatar_input" style="visibility: hidden;" />
                    <span><?php echo $data['text']['file_choice'] ?></span>
                </label>
    </section>
            <section>
                <input type="text" required class="resume_text_inp fs16 border" id="firstname" placeholder="<?php echo $data['text']['first_name'] ?>"/>
                <input type="text"  class="resume_text_inp fs16 border" id="middlename" placeholder="<?php echo $data['text']['middle_name'] ?>"/>
                <input type="text" required class="resume_text_inp fs16 border" id="secondname" placeholder="<?php echo $data['text']['second_name'] ?>"/>
            </section>
    </fieldset>
    <fieldset class="border">
    <legend class="fs20"><?php echo $data['text']['looking_for'] ?></legend>
        <section>
                <input type="text" required class="resume_text_inp fs16 border" id="position" placeholder="<?php echo $data['text']['des_position'] ?>"/>
                <input type="text" required class="resume_text_inp fs16 border" id="salary" placeholder="<?php echo $data['text']['des_salary'] ?>" />
        </section>
        <section>
            <select type="text" class="resume_text_inp fs16 border" id="occupation_type" >
                <option selected value="full_time"><?php echo $data['text']['full_time'] ?></option>
                <option value="part_time"><?php echo $data['text']['part_time_j'] ?></option>
                <option value="seasonal"><?php echo $data['text']['seasonal'] ?></option>
                <option value="projects"><?php echo $data['text']['projects'] ?></option>
                <option value="internship"><?php echo $data['text']['internship'] ?></option>
                <option value="remote"><?php echo $data['text']['remote'] ?></option>
                <option value="volunteer"><?php echo $data['text']['volunteer'] ?></option>
                <option value="side_job"><?php echo $data['text']['side_job'] ?></option>
            </select>
            <select type="text" class="resume_text_inp fs16 border" id="shifts" >
                <option selected value="full_time"><?php echo $data['text']['full_day'] ?></option>
                <option value="part_time"><?php echo $data['text']['part_time'] ?></option>
                <option value="rotating_shifts"><?php echo $data['text']['rotating_shifts'] ?></option>
                <option value="flexible_schedule"><?php echo $data['text']['flexible_schedule'] ?></option>
                <option value="non_standard_schedule"><?php echo $data['text']['non_standard_schedule'] ?></option>
                <option value="fly_in_fly_out"><?php echo $data['text']['fly_in_fly_out'] ?></option>
            </select>
        </section>
    </fieldset>
    
    <fieldset class="border">
        <legend class="fs20"><?php echo $data['text']['contact_info'] ?></legend>
        <section>
            <input type="text"  class="resume_text_inp fs16 border" id="phone" placeholder="<?php echo $data['text']['phone'] ?>"/>
            <input type="email" required  class="resume_text_inp fs16 border" id="email" placeholder="<?php echo $data['text']['email'] ?>"/>  
        </section>
    </fieldset>
    <fieldset class="border">
        <legend class="fs20"><?php echo $data['text']['personal_info'] ?></legend>
        <section>
            <input type="text" required class="resume_text_inp fs16 border" id="city" placeholder="<?php echo $data['text']['city_of_residence'] ?>"/>
            <input type="date"  class="resume_text_inp fs16 border" id="date" />  
            <select class="resume_text_inp fs16 border" id="is_married">
                <option selected value="not_married"><?php echo $data['text']['not_married'] ?></option>
                <option value="married"><?php echo $data['text']['married'] ?></option>
            </select>  
            <label class="input_label" for="has_kids"><?php echo $data['text']['has_kids'] ?>
                <input type="checkbox" id="has_kids">
            </label>
        </section>
        <section>
            <input type="text" required class="resume_text_inp fs16 border" id="citizenship" placeholder="<?php echo $data['text']['citizenship'] ?>"/>
           <select class="resume_text_inp fs16 border" id="gender">
                <option selected value="male"><?php echo $data['text']['male'] ?></option>
                <option value="female"><?php echo $data['text']['female'] ?></option>
                <option value="hidden"><?php echo $data['text']['hidden'] ?></option>
            </select>  
           <select class="resume_text_inp fs16 border" id="degree">
                <option selected value="high_school"><?php echo $data['text']['high_school'] ?></option>
                <option value="college"><?php echo $data['text']['college'] ?></option>
                <option value="bachelour"><?php echo $data['text']['bachelour'] ?></option>
                <option value="master"><?php echo $data['text']['master'] ?></option>
                <option value="phd"><?php echo $data['text']['phd'] ?></option>
                <option value="dr"><?php echo $data['text']['dr'] ?></option>
            </select>  
        </section>
    </fieldset>


    <fieldset class="border expirience">
        <legend class="fs20"><?php echo $data['text']['experience'] ?></legend>
        <button onclick="addBlock('.job_exp')" class="resume_button_add"><?php echo $data['text']['add'] ?></button>
        <section class="job_exp">
            <div>
                <?php echo $data['text']['from:'] ?> <input type="date" class="resume_text_inp fs16 border exp_start"/>
                <?php echo $data['text']['to:'] ?> <input type="date" class="resume_text_inp fs16 border exp_end"/>
            </div>
            <input type="text" class="resume_text_inp fs16 border position" placeholder="<?php echo $data['text']['pos_you had'] ?>"/>
            <input type="text"  class="resume_text_inp fs16 border org"  placeholder="<?php echo $data['text']['org'] ?>"/>  
            <textarea class="fs16 border job_desc" placeholder="<?php echo $data['text']['resp_and_ach'] ?>"></textarea>
            <div><button onclick="removeBlock(this)" class="resume_button"><?php echo $data['text']['delete'] ?></button></div>
            </section>
    </fieldset>




    <fieldset class="border expirience">
        <legend class="fs20"><?php echo $data['text']['certifications'] ?></legend>
        <button onclick="addBlock('.certification')" class="resume_button_add"><?php echo $data['text']['add'] ?></button>
        <section class="certification">
            <input type="text"  class="resume_text_inp fs16 border studied" placeholder="<?php echo $data['text']['studied'] ?>"/>
            <input type="text"  class="resume_text_inp fs16 border for_what"  placeholder="<?php echo $data['text']['for_what'] ?>"/>  
            <div>
                <input type="text"  class="resume_text_inp fs16 border for_how_long" placeholder="<?php echo $data['text']['for_how_long'] ?>"/>  
                <?php echo $data['text']['finished'] ?> <input type="number" class="resume_text_inp fs16 border ended" min="1900" max="2099" step="1" value="2016" />
            </div>
            <div><button onclick="removeBlock(this)" class="resume_button"><?php echo $data['text']['delete'] ?></button></div>
            </section>
    </fieldset>


    <fieldset class="border expirience">
        <legend class="fs20"><?php echo $data['text']['education'] ?></legend>
        <button onclick="addBlock('.education')" class="resume_button_add"><?php echo $data['text']['add'] ?></button>
        <section class="education">
            <div>
                <label><select class="border form_of_edu">
                    <option value="full_time_education"><?php echo $data['text']['full_time_education'] ?></option>
                    <option value="part_time_education"><?php echo $data['text']['part_time_education'] ?></option>
                    <option value="distance1"><?php echo $data['text']['distance1'] ?></option>
                    <option value="distance2"><?php echo $data['text']['distance2'] ?></option>
                </select>
            </label>
                <?php echo $data['text']['finished'] ?> <input type="number" class="resume_text_inp fs16 border finished" min="1900" max="2099" step="1" value="2016" />
            </div>
            <input type="text"  class="resume_text_inp fs16 border where" placeholder="<?php echo $data['text']['studied'] ?>"/>
            <input type="text"  class="resume_text_inp fs16 border faculty" placeholder="<?php echo $data['text']['faculty'] ?>"/>  
            <input type="text"  class="resume_text_inp fs16 border specialty"  placeholder="<?php echo $data['text']['for_what'] ?>"/>  
            <div><button  onclick="removeBlock(this)" class="resume_button"><?php echo $data['text']['delete'] ?></button></div>
            </section>
    </fieldset>

     <fieldset class="border expirience">
         <legend class="fs20"><?php echo $data['text']['languages'] ?></legend>
         <button onclick="addBlock('.languages')" class="resume_button_add"><?php echo $data['text']['add'] ?></button>
        <section class="languages">
            <div>
                <input type="text"  class="resume_text_inp fs16 border language" placeholder="<?php echo $data['text']['language'] ?>"/>  
                <select class="border level">
                    <option selected value="a1"><?php echo $data['text']['a1'] ?></option>
                    <option  value="a2"><?php echo $data['text']['a2'] ?></option>
                    <option  value="b1"><?php echo $data['text']['b1'] ?></option>
                    <option  value="b2"><?php echo $data['text']['b2'] ?></option>
                    <option  value="c1"><?php echo $data['text']['c1'] ?></option>
                    <option  value="c2"><?php echo $data['text']['c2'] ?></option>
                </select>
            </div>
            <div><button  onclick="removeBlock(this)" class="resume_button"><?php echo $data['text']['delete'] ?></button></div>
            </section>
    </fieldset>



     <fieldset class="border expirience">
        <legend class="fs20"><?php echo $data['text']['pc_skills'] ?></legend>
        <button onclick="addBlock('.pc_skill')" class="resume_button_add"><?php echo $data['text']['add'] ?></button>
        <section class="pc_skill">
            <div>
                <input type="text"  class="resume_text_inp fs16 border language skill" placeholder="c#/Microsoft Excel"/>  
                <select class="border level">
                    <option selected value="a1s"><?php echo $data['text']['a1s'] ?></option>
                    <option  value="<?php echo $data['text']['a2s'] ?>"><?php echo $data['text']['a2s'] ?></option>
                    <option  value="<?php echo $data['text']['b1s'] ?>"><?php echo $data['text']['b1s'] ?></option>
                    <option  value="<?php echo $data['text']['b2s'] ?>"><?php echo $data['text']['b2s'] ?></option>
                    <option  value="<?php echo $data['text']['c1s'] ?>"><?php echo $data['text']['c1s'] ?></option>
                    <option  value="<?php echo $data['text']['c2s'] ?>"><?php echo $data['text']['c2s'] ?></option>
                </select>
            </div>
            <div><button  onclick="removeBlock(this)" class="resume_button"><?php echo $data['text']['delete'] ?></button></div>
            </section>
    </fieldset>


     <fieldset class="border expirience">
        <legend class="fs20"><?php echo $data['text']['extra'] ?></legend>
        <section>
            <div>
                <input type="checkbox" class="skill" id="military"> <label class="skill_label" for="military"><?php echo $data['text']['military'] ?></label>
            </div>
            <div>
                <input type="checkbox" class="skill" id="med"> <label class="skill_label" for="med_knizka"><?php echo $data['text']['med'] ?></label>
            </div>
            <span class="fs20"><?php echo $data['text']['driver_license'] ?></span>
            <div>
                <input type="checkbox" class="skill" id="A"> <label class="skill_label" for="A"><?php echo $data['text']['A'] ?></label>
            </div>
            <div>
                <input type="checkbox" class="skill" id="B"> <label class="skill_label" for="B"><?php echo $data['text']['B'] ?></label>
            </div>
            <div>
                <input type="checkbox" class="skill" id="C"> <label class="skill_label" for="C"><?php echo $data['text']['C'] ?></label>
            </div>
            <div>
                <input type="checkbox" class="skill" id="D"> <label class="skill_label" for="D"><?php echo $data['text']['D'] ?></label>
            </div>
            <div>
                <input type="checkbox" class="skill" id="E"> <label class="skill_label" for="E"><?php echo $data['text']['E'] ?> </label>
            </div>
        </section>
    </fieldset>

    <fieldset class="border more_space">
        <legend class="fs20 more_space"><?php echo $data['text']['personal_char'] ?></legend>
        <textarea id="personal" placeholder="<?php echo $data['text']['im_social'] ?>"></textarea>
    </fieldset>
    <fieldset class="border more_space">
        <legend class="fs20"><?php echo $data['text']['professional_char'] ?></legend>
        <textarea id="professional" placeholder="<?php echo $data['text']['im_precise'] ?>"></textarea>
    </fieldset>

    <fieldset class="border socials">
        <legend class="fs20"><?php echo $data['text']['social_links'] ?></legend>
        <button onclick="addBlock('.social')" class="resume_button_add"><?php echo $data['text']['add'] ?></button>
        <section class="social">
            <div>
                <input type="text"  class="resume_text_inp fs16 border link_to_social" placeholder="https://vk.com/..."/>  
                <select class="border which_social">
                    <option value="Vk">Vk</option>
                    <option value="LinkedIn">LinkedIn</option>
                    <option value="Facebook">Facebook</option>
                    <option value="Twitter">Twitter</option>
                    <option value="GitHub">GitHub</option>
                    <option value="Instagramm">Instagramm</option>
                    <option value="Pinterest">Pinterest</option>
                    <option value="Patreon">Patreon</option>
                    <option value="Youtube">Youtube</option>
                    <option value="Tiktok">Tiktok</option>
                </select>
            </div>
            <div><button  onclick="removeBlock(this)" class="resume_button"><?php echo $data['text']['delete'] ?></button></div>
            </section>
    </fieldset>
    <!-- <button onclick="makeResume()" class="resume_button_add"><?php // echo $data['text']['make'] ?></button> -->
    <button onclick="send_resume()" class="resume_button_add fs40"><?php echo $data['text']['make'] ?></button>
</div>
<script>
    let usr_logged = false
    <?php if (isset($_SESSION['auth'])) { ?>
        usr_logged = true;
   <?php }?>
</script>