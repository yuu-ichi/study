<?php
    $this->disableAutoLayout();
?>
<!DOCTYPE html>
<html lang="ja">
<?php echo $this->element('head', ["title" => "トップ"]); ?>
<body>
<?php echo $this->element('header'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
            <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                    </div>
                <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/">
                                <button type="button" class="btn btn-outline-primary item-button">
                                    <i class="bi bi-house"></i>
                                    Home
                                </button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="/articles">
                                <button type="button" class="btn btn-outline-primary item-button">
                                    <i class="bi bi-pencil-square"></i>
                                    Articles
                                </button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="/tags">
                                <button type="button" class="btn btn-outline-primary item-button">
                                    <i class="bi bi-tag"></i>
                                    Tags
                                </button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="/users/login">
                                <button type="button" class="btn btn-outline-primary item-button">
                                    <i class="bi bi-box-arrow-left"></i>
                                    Login
                                </button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="/users/logout">
                                <button type="button" class="btn btn-outline-primary item-button">
                                    <i class="bi bi-box-arrow-right"></i>
                                    Logout
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <?php echo $this->fetch('content'); ?>
        </main>
    </div>
</div>
</body>
</html>
