<div class="container text-dark">
    <div class="row align-items-start">
    <div class="col-12 my-3">
        <h1 class="text-center text-dark text-capitalize"><?php echo str_replace("-", " & ", basename($_SERVER['REQUEST_URI']));; ?></h1>   
    </div>
    </div>
</div>
   
<div class="container text-dark">
    <div class="row mb-3 m-2 align-items-start">
    <div class="col-12 m-0 p-0 d-flex flex-lg-row flex-md-row flex-column px-lg-4">
        <div class="box_shadow col-lg-6 col-md-6 col-12 border-1 m-lg-3 m-auto p-lg-3 p-3 rounded d-flex flex-lg-row flex-md-row flex-column">
        <div class="align-self-center">
            <div class="h3 col-12 text-left text-uppercase p-0 m-0 mb-4">
                <span class="text_pink">Vision</span>
            </div>      
            <div class="p">
                KOSH envisages creating a happy and mindful future generation by enabling stronger parent-child bonds. 
            </div>
            <div class="row">
                <div class="col text-center my-3">
                    <a class="btn btn-type1-reverse pulse animated go flex-align-self" href="<?= site_url('about-us') ?>">Know More about Kosh</a>
                </div>
            </div>
                               
            
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 p-3 align-self-center">
            <img class="box_shadow img-responsive rounded" src="<?= FRONT_END_ASSETS ?>images/about_us_001.png" alt="" width="100%" height="auto" />
        </div>    
    </div>
    </div>

    <div class="row mt-lg-5 mt-3 m-2 align-items-start px-lg-4">
    <div class="col-12 m-0 p-0 d-flex flex-lg-row flex-md-row flex-column">
        
        <div class="col-lg-6 col-md-6 col-12 p-3 align-self-center">
            <img class="box_shadow img-responsive rounded" src="<?= FRONT_END_ASSETS ?>images/about_us_001.png" alt="" width="100%" height="auto" />
        </div>

        <div class="col-lg-6 col-md-6 col-12 p-3 border-1 rounded border-dotted d-flex flex-lg-row flex-md-row flex-column ">
        <div class="align-self-center">
            <div class="h3 col-12 text-left text-uppercase p-0 m-0 mb-4">
                <a class="text_pink">Mission</a>
            </div>      
            <div class="p">
                Our mission is to support families world-wide in strengthening the parent-child connection by empowering the parents with the tools, short-and-long-term guidance and the required support. Well-equipped parents raise happy and mindful children.
            </div>
        </div>
        </div>
    </div>
    </div>

</div>
