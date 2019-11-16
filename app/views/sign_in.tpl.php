<div class="container">
    <h1>Le formulaire</h1>
    <form method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="confirm_password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="exampleDate">Birthdate</label>
            <input type="date" class="form-control" id="exampleDate" name="birthdate">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>