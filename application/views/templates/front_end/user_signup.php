<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h3 class="mb-0 my-2 text-center"><?php echo str_replace("-", " ", basename($_SERVER['REQUEST_URI']));; ?></h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group col-12 p-lg-0 pr-lg-1">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="full name">
                                </div>
                                <div class="form-group col-lg-6 float-left p-lg-0 pr-lg-1">
                                    <label for="inputEmail3">Email *</label>
                                    <input type="email" class="form-control" id="email"  required="yes">
                                </div>
                                <div class="form-group col-lg-6 float-left p-lg-0 pl-lg-1">
                                    <label for="inputEmail3">Mobile</label>
                                    <input name="phone" type="phone" class="form-control" id="phone" placeholder="99999-88888" required="">
                                </div>
                                <div class="form-group col-lg-6 float-left p-lg-0 pr-lg-1">
                                    <label for="inputPassword3">Password</label>
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="password" title="At least 6 characters with letters and numbers" required="">
                                </div>
                                <div class="form-group col-lg-6 float-left p-lg-0 pl-lg-1">
                                    <label for="inputVerify3">Verify</label>
                                    <input type="password" class="form-control" id="inputVerify3" placeholder="password (again)" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-type1-reverse pulse animated go float-right">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
        
    </div>

    <div class="col-lg-5 col-12 m-auto text-center p-3">
        <span class="text-center">Already have an account</span>
        <a class="text-center h6" href="<?= site_url('user-login') ?>">Login</a>
        <span class="text-center">here</span>
    </div>    
</div>

<hr class="mt-5 border-0">   