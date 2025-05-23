<?php

use App\Helpers\Navigate;

?>
<main>
    <div class="container">
        <h1 class="fs40 mb32"><?php echo $data['text']['sign_up'] ?></h1>
        <form class="form-1 mb60" method="post" action="<?php Navigate::middleware("public/registration") ?>">
            <input required class="mb8" minlength="3" maxlength="70" type="text" name="name" placeholder="<?php echo $data['text']['nickname'] ?>" />
            <input required class="mb8" type="email" name="email" placeholder="<?php echo $data['text']['email'] ?>" /> 
            <input required 
                class="mb8"
                pattern="[a-z0-9]{8,}"
                type="password"
                name="password"
                placeholder="<?php echo $data['text']['pass_instructions'] ?>"
              />
            <input required
                class="mb8"
                pattern="[0-9]{10,12}"
                type="text"
                name="phone"
                placeholder="<?php echo $data['text']['phone'] ?>"
              />
            <button class="btn-1 fs24"><?php echo $data['text']['submit'] ?></button>
        </form>
    </div>
</main>