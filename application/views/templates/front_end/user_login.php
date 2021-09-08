<hr class="mt-5 border-0">
<div class="container gradient-custom text-dark">
    <div class="row d-flex flex-column m-2">
        <div class="col-lg-5 col-12 m-auto bg-light rounded p-0">
        <div class="card">
            <div class="card-header bg-light mb-4">
                <h3 class="mb-0 my-2 text-center"><?php echo str_replace("-", " ", basename($_SERVER['REQUEST_URI']));; ?></h3>
            </div>
            <div class="card-body col-10 m-auto">
            <form>
              <div class="form-group">
                <label for="InputEmail1">Email address</label>
                <input type="email" class="form-control" id="user_email" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="InputPassword1">Password</label>
                <input type="password" class="form-control" id="pass_01" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-type1-reverse pulse animated go float-right">Submit</button>
        </form>
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