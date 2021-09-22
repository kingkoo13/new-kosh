<hr class="mt-5 border-0">
<div class="container text-dark">
    <div class="row d-flex justify-content-center">
        <!-- left -->
        <div class=" col-lg-5 col-12 rounded my-lg-0 mb-2">
            <div class="card p-3">
            <div class="card-header bg-white mb-3">
                <h3 class="mb-0 my-2 text-center"><?php echo str_replace("-", " ", basename($_SERVER['REQUEST_URI']));; ?></h3>
            </div>
            <?= form_open('f/contact','role="form"'); ?>
                <?= form_fieldset(); ?>

                <div class="form-group col-lg-6 col-12 float-left">
                <?php 
                    $data_name = array(
                        'name'          => 'name',
                        'id'            => 'name',
                        'placeholder'   => '',
                        'class'         => 'form-control col-12 m-0',
                        'value'         => set_value('name'),
                    );
                    $attributes = array(
                            'class' => 'col-12 text-dark text-left p-0',
                            'style' => 'font-weight: normal;'
                    );
                
                ?>
                <?= form_label('Name', 'name', $attributes); ?>
                <?= form_input($data_name); ?>
                 </div>
                
                <div class="form-group col-lg-6 col-12 float-left">
                <?php 
                    $data_name = array(
                        'name'          => 'email',
                        'id'            => 'email',
                        'placeholder'   => '',
                        'class'         => 'form-control',
                        'value'         => set_value('email'),
                    );
                    $attributes = array(
                            'class' => 'text-dark',
                            'style' => 'font-weight: normal;'
                    );
                
                ?>

                <?= form_label('E-mail', 'email', $attributes); ?>
                <?= form_input($data_name); ?>
                </div>
                
                <div class="form-group col-lg-6 col-12 float-left">
                    <?php 
                    $data_name = array(
                        'name'          => 'phone',
                        'id'            => 'phone',
                        'placeholder'   => '',
                        'class'         => 'form-control',
                        'value'         => set_value('phone'),
                    );
                    $attributes = array(
                            'class' => 'text-dark',
                            'style' => 'font-weight: normal;'
                    );
                
                ?>
                <?= form_label('Phone Number', 'phone', $attributes); ?>
                <?= form_input($data_name); ?>
                </div>

                <div class="form-group col-lg-6 col-12 float-left">
                    <?php 
                            $options  = array(
                                                'Choose Options'  => 'Choose Option',
                                                'Parenting coach' => 'Parenting coach',
                                                'School'          => 'School',
                                                'Corporate'       => 'Corporate',
                                                'Hospital'        => 'Hospital',
                                                'Others'          => 'Others'
                                            );
                    ?>
                    <?= form_label('Reason of contacting', 'reason', $attributes); ?>
                    <?= form_dropdown('reason', $options, 'Choose Option'); ?>
                </div>

                <div class="form-group col-12 float-left">
                    <?php 
                    $data_name = array(
                        'name'          => 'message',
                        'id'            => 'message',
                        'placeholder'   => 'Write Message',
                        'class'         => 'form-control',
                        'rows'          => '4',
                        'value'         => set_value('message'),
                    );
                    $attributes = array(
                            'class' => 'text-dark',
                            'style' => 'font-weight: normal;'
                    );
                
                ?>
                <?= form_textarea($data_name); ?>
                </div>
                <div class="d-flex col-lg-6 col-12 float-lg-none float-left m-auto">
                    <?php 
                    $data = array(
                        'name'          => 'submit',
                        'class'          => 'btn btn-lg btn-type1-reverse pulse animated go btn-block',
                        'value'          => 'submit',
                    );
                    ?>
                    <?= form_submit($data); ?>
                </div>
        </div>
  </form>
    <?= form_fieldset_close(); ?>
<?= form_close(); ?>
</div>
<!-- right -->
<div class="col-lg-5 col-12 rounded">
    <div class="col-12 mb-4 shadow-bg p-0">
        <img class="col-12 mx-auto d-block p-0" alt="" src="<?= FRONT_END_ASSETS ?>images/contacts-us.jpg"width="auto" height="auto" />
    </div>
    <div class="col-12 p-0 mapouter shadow-bg">
        <div class="gmap_canvas mt-2">
            <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Vatika City Block W, Uppal Southend, Sector 49 Gurugram, Haryana 122018&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <a href="#">Google Map</a>
        </div>
        <style>.mapouter{position:relative;text-align:right;width:auto;height:215px;}.gmap_canvas {overflow:hidden;background:none!important;width:auto;height:215px;}.gmap_iframe {width:100%!important;height:215px!important;}</style>
    </div>    
</div>
    <!-- <div class="col-lg-5 col-12 m-auto text-center p-3">
        <div class="d-flex d-flex justify-content-center  social-icons p-0 mx-3 mb-2 mt-2">
            <a class="mx-2 px-2 h5 text-dark" href="#!" role="button">
                <i class="fa fa-facebook-f"></i>
            </a>
            <a class="mx-2 px-2 h5 text-dark" href="#!" role="button">
                <i class="fa fa-linkedin"></i>
            </a>
            <a class="mx-2 px-2 h5 text-dark" href="#!" role="button">
                <i class="fa fa-instagram"></i>
            </a>
            <a class="mx-2 px-2 h5 text-dark" href="mailto:care@globalkosh.com" role="button">
                <i class="fa fa-envelope"></i>
            </a>
        </div>
    </div> -->

</div>
</div>

<hr class="mt-5 border-0">   