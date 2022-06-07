<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" />

<div class="container">
    <div class="row mt-5">
    	<aside class="col-sm-4"></aside>
        <aside class="col-sm-4">
            <div class="card">
                <article class="card-body">
                    <a href="register.php" class="float-right btn btn-outline-primary">Đăng ký</a>
                    <h4 class="card-title mb-4 mt-1">Đăng nhập</h4>
                    <form method="post" action="xuly/login.php">
                        <div class="form-group">
                            <label>Tên đăng nhập</label>
                            <input name="username" class="form-control" placeholder="Nhập tên đăng nhập" type="text" />
                        </div>
                        <!-- form-group// -->
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input class="form-control" name="password" placeholder="******" type="password" />
                        </div>
                        <!-- form-group// -->
                        <div class="form-group">
                            <!-- <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button> -->
                            <input type="submit" name="dangnhap" value="Đăng Nhập" class="btn btn-primary btn-block"/>
                        </div>
                        <!-- form-group// -->
                    </form>
                </article>
            </div>
            <!-- card.// -->
        </aside>
    </div>
    <!-- row.// -->
</div>
<!--container end.//-->
