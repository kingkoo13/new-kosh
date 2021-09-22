<hr class="mt-5 border-0">
<div class="container gradient-custom text-dark">
    <div class="row d-flex flex-column m-2">
        <div class="col-lg-5 col-12 m-auto bg-light rounded p-0">
        <div class="card">
            <div class="card-header bg-light mb-4">
                <h3 class="mb-0 my-2 text-center"><?php echo str_replace("-", " ", basename($_SERVER['REQUEST_URI']));; ?></h3>
            </div>
            <?php 
                    
                    if($this->session->flashdata('error_message'))
                    {
            ?>
                    <p class="alert alert-danger alert-dismissable fade in text-center top-height">
                    <?= $this->session->flashdata('error_message');  ?>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        </p>
                    <?php
                        }
            ?>
            <div class="card-body col-10 m-auto">
            <?= form_open('f/login/login_lookup','role="form"'); ?>    
                <?= form_fieldset(); ?> 
                <div class="form-group">
                    <?php 
                    $data_name = array(
                        'name'          => 'email',
                        'id'            => 'email',
                        'placeholder'   => 'E-mail or Phone Number',
                        'class'         => 'form-control',
                        'value'         => set_value('email'),
                        'autofocus'     => 'autofocus',
                        'autocomplete'  => 'off'
                    );
                    $attributes = array(
                            'class' => 'text-dark',
                            'style' => 'font-weight: bold;'
                    );
                
                ?>

                <?= form_label('E-mail or Phone', 'email', $attributes); ?>
                <?= form_input($data_name); ?>
                </div>

                <div class="form-group">
                    <?php 
                    $data = array(
                        'name'          => 'password',
                        'id'            => 'password',
                        'placeholder'   => 'Enter your password',
                        'class'         => 'form-control',
                        'value'         => set_value('email'),
                        'autofocus'     => 'autofocus',
                        'autocomplete'  => 'off',
                    );
                    $attributes = array(
                            'class' => 'text-dark',
                            'style' => 'font-weight: bold;'
                    );
                
                ?>
                
                <?= form_label('Password', 'password', $attributes); ?>
                <?= form_input($data); ?>
                </div>

                
                <?php 
                $data = array(
                    'name'          => 'login',
                    'class'          => 'btn btn-lg btn-type1-reverse pulse animated go btn-block',
                    'value'          => 'Login',
                );
                ?>
                <?= form_submit($data); ?>
                <div class="text-right my-2">
                    <a href="<?= site_url('f/forgot_password') ?>">Forgot Password?</a>
                </div>
            
            <?= form_fieldset_close(); ?>
        <?= form_close(); ?>
        </div>
    </div>
    </div>
    <div class="col-lg-5 col-12 m-auto text-center p-3">
        <span class="text-center">Don't have an account</span>
        <a class="text-center h6" href="<?= site_url('user-signup') ?>">Sign Up</a>
        <span class="text-center">here</span>
    </div>    
</div>
</div>

<hr class="mt-5 border-0">   