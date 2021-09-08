<div class="container text-dark">
    <div class="row d-flex flex-column">
        <div class="card col-lg-5 col-12 m-auto bg-light p-4 rounded">
            <div class="card-header bg-light">
                <h3 class="mb-0 my-2 text-center"><?php echo str_replace("-", " ", basename($_SERVER['REQUEST_URI']));; ?></h3>
            </div>
            <form>
              <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="Your Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Your Email id">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <textarea class="form-control" required="" rows="7" id="messageNine" placeholder="Write message"></textarea>  
            </div>

            <button type="submit" class="btn btn-type1-reverse pulse animated go float-right">Submit</button>
        </form>
    </div>
    <div class="col-lg-5 col-12 m-auto text-center p-3">
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
    </div>

</div>
</div>

<hr class="mt-5 border-0">   