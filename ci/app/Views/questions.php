<!-- Content body -->
<div class="content-body">
    <!-- Content -->
    <div class="content ">

        <div class="page-header">
            <div>
                <h3>Alumni</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Member</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body container">
                        <form method="post" action="questions"  enctype="multipart/form-data">
                            <p class="h3 text-center mb-4">Add New Alumni</p>
                            <label for="">Class:</label>
                            <input type="text" class="form-control" name="Class" placeholder="16/22">
                            <hr>
                            <label for="">Picture:</label>
                            <input type="file" class="form-control" name="Pix" >
                            <hr>
                            <?php foreach ($flds as $key => $fld):?>
                            <label for=""><?=$fld?>:</label>
                            <input type="text" class="form-control" name="<?=$fld?>">
                            <hr>
                            <?php endforeach; ?>
                            

                            <input class="btn btn-primary" type="submit" value="Upload">
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-title pt-3 pl-3">Alumni List</h3>
                    <div class="card-body">
                        <ul class="list-group">
                            <?php foreach ($alumni as $key => $qu) : ?>
                                <li class="list-group-item"> <a href="editque?id=<?=$qu['id']?>"><?=$qu['Name']?></a> </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ./ Content -->

    <!-- Footer -->
    <footer class="content-footer">
        <div>© 2022 Alumni - <a href="" target="_blank">RayyanTech</a></div>
        <div>
            <!-- <nav class="nav">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
                    </nav> -->
        </div>
    </footer>
    <!-- ./ Footer -->
</div>
<!-- ./ Content body -->
</div>
<!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Plugin scripts -->
<script src="vendors/bundle.js"></script>

<!-- App scripts -->
<script src="assets/js/app.min.js"></script>
</body>

</html>