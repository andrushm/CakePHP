<div id="registration">

    <div class="left">
            <div name="social_button_auth_popup" type="facebook" class="auth-f-social-i">
                <span class="btn-link btn-auth-fb sprite-side">
                    <?php
                    if (isset($fb_url)) {
                        echo $this->Html->link(__('fe_register_import_Facebook'), $fb_url);
                    }
                    ?>
                </span>
            </div>
    </div>

</div>