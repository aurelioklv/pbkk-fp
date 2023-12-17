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
                        <li><a href="/" class="navbar active ">Home</a></li>
                        <li><a href="/wisata" class="navbar">Wisata</a></li>
                        <li><a href="/kategori" class="navbar">Kategori</a></li>
                        <li><a href="/user" class="navbar">User</a></li>
                    </ul>
                    <?php if (user() == null): ?>
                        <div class="border-button">
                            <a id="modal_trigger" href="#modal" class="sign-in-up"><i class="fa fa-user"></i> Sign In/Up</a>
                        </div>
                    <?php else: ?>
                        <div class="border-button">
                            <a href="<?= base_url('logout') ?>" class="sign-in-up"><i class="fa fa-user"></i> Logout
                                <?= (user() !== null) ? user()->username : '' ?>
                            </a>
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

<style>
    .btn:hover {
        background: #666;
    }

    /* User Login and Register Styles */
    .user_login,
    .user_register {
        display: none;
    }

    /* Responsive Styles */
    @media (max-width: 600px) {
        .popupBody {
            width: 90%;
        }
    }
</style>