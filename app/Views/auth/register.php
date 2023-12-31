<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg">
            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">
                                    <?= lang('Auth.register') ?>
                                </h1>
                            </div>

                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <form action="<?= url_to('register') ?>" method="post" class="user">
                                <?= csrf_field() ?>

                                <div class="form-group">
                                    <input type="text"
                                        class="form-control form-control-user <?php if (session('errors.username')): ?>is-invalid<?php endif ?>"
                                        id="exampleInputUsername" placeholder="<?= lang('Auth.username') ?>"
                                        value="<?= old('username') ?>" name="username" value="<?= old('username') ?>">
                                </div>
                                <div class="form-group">
                                    <input type="email"
                                        class="form-control form-control-user <?php if (session('errors.email')): ?>is-invalid<?php endif ?>"
                                        id="exampleInputEmail" placeholder="<?= lang('Auth.email') ?>"
                                        value="<?= old('email') ?>" name="email" value="<?= old('email') ?>">
                                    <small id="emailHelp" class="form-text text-muted">
                                        <?= lang('Auth.weNeverShare') ?>
                                    </small>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password"
                                            class="form-control form-control-user <?php if (session('errors.password')): ?>is-invalid<?php endif ?>"
                                            placeholder="<?= lang('Auth.password') ?>" id="exampleInputPassword"
                                            name="password" autocomplete="off">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password"
                                            class="form-control form-control-user <?php if (session('errors.pass_confirm')): ?>is-invalid<?php endif ?>"
                                            placeholder="<?= lang('Auth.repeatPassword') ?>" id="exampleRepeatPassword"
                                            name="pass_confirm" autocomplete="off">
                                    </div>
                                </div>
                                <button type="submit" class="login btn  btn-user btn-block">
                                    <?= lang('Auth.register') ?>
                                </button>
                                <button class="login btn  btn-user btn-block back_btn">
                                    Back
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <p>
                                    <?= lang('Auth.alreadyRegistered') ?>
                                    <a class="signup small" href="<?= url_to('login') ?>">
                                        <?= lang('Auth.signIn') ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>