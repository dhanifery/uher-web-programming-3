<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="text-center mb-3" style="width: 400px;">
            <h3>FORM LOGIN</h3>
        </div>
                <?php 

                         if ($this->session->flashdata('error')) {
                              echo '<div class="alert alert-danger" style="width: 400px";>';
                              echo $this->session->flashdata('error');
                              echo '</div>';
                }?>
        <div class="card p-4 shadow-lg" style="width: 400px;">
            <form action="<?= base_url('login/login_user')?>" method="post" class="mt-4 mb-4">
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
               <button type="reset" class="btn btn-outline-primary">Cancel</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
