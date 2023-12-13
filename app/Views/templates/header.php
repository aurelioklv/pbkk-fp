<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="<?= base_url() ?>assets/images/logo.png" alt="SnapX Photography Template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/" class="active">Home</a></li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Wisata</a>
                            <ul class="sub-menu">
                                <li><a href="/wisata">Perorangan</a></li>
                                <li><a href="/paket-wisata">Paket</a></li>
                            </ul>
                        </li>
                        <li><a href="/kategori">Kategori</a></li>
                        <li><a href="/user">User</a></li>
                    </ul>
                    <?php if (user() == null) : ?>
                        <div class="border-button">
                            <a id="modal_trigger" href="#modal" class="sign-in-up"><i class="fa fa-user"></i> Sign In/Up</a>
                        </div>
                    <?php else : ?>
                        <div class="border-button">
                            <a href="<?= base_url('logout') ?>" class="sign-in-up"><i class="fa fa-user"></i> Logout <?= (user() !== null) ? user()->username : '' ?></a>
                        </div>
                    <?php endif; ?>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

<div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <?= $this->include('auth/login'); ?>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <?= $this->include('auth/register'); ?>
        </div>

    </section>
</div>
<!-- ***** Header Area End ***** -->