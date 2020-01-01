<div class="container">
    <h2 class="text-left">Contac Form</h2>
    <div class="row justify-left-left">
        <div class="col-12 col-md-8 col-lg-6 pb-5">


            <!--Form with header-->

            <form action="/authentication" method="post">
                <div class="card border-primary rounded-0">
                    <div class="card-header p-0">
                        <div class="bg-info text-white text-center py-2">
                            <h3><i class="fa fa-envelope"></i> Войти</h3>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <!--Body-->
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                </div>
                                <input type="text" class="form-control" id="nombre" name="email" placeholder="e-mail"
                                       required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                </div>
                                <input type="text" class="form-control" id="nombre" name="password"
                                       placeholder="Пароль" required>
                            </div>
                        </div>

                        <div class="text-center">
                            <input type="submit" value="Отправить" class="btn btn-info btn-block rounded-0 py-2">
                        </div>
                    </div>

                </div>
            </form>
            <!--Form with header-->
        </div>
    </div>
</div>

