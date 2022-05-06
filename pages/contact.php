<div class="container p-3">
    <div class="col-lg-6 col-md-8 col-sm-10 col-12 m-auto border" style="border-radius: 3px;"><br><br>
        <div class="logo text-center mb-3">
            <h2><span class="text-danger"><i class="fa fa-book"></i> </span>Digital Library</h2>
        </div>
        <form action="thanks.php" class="p-4">
            <div class="form-group">
                <label for="text" class="font-weight-bold text-dark">Name</label>
                <input type="text" class="form-control" id="text" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="email" class="font-weight-bold text-dark">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="description" class="font-weight-bold text-dark">Description</label>
                <textarea class="form-control" id="description" placeholder="Description" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success mb-4 mt-4 form-control">Submit</button>
            </div>
        </form>
    </div>
</div>