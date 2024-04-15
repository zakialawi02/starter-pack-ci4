<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title><?= $title ?? 'Nama' ?> | Starter Pack CI4</title>

    <link href="<?= base_url('/assets/css/app.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">

        <!-- SIDEBAR -->
        <?= $this->include('components/sidemenubar_admin'); ?>

        <div class="main">

            <!-- HEADER NAV -->
            <?= $this->include('components/header_admin'); ?>


            <main class="content">
                <div class="container-fluid p-0">

                    <h2 class="h3 mb-3">Notes</h2>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">



                                    <form action="/admin/notes/store" method="post">
                                        <?= csrf_field() ?>

                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?= old('title') ?>">
                                            <?php if (session()->has('errors')) : ?>
                                                <p class="text-danger"><?= session('errors.title') ?></p>
                                            <?php endif ?>
                                        </div>
                                        <div class="mb-3">
                                            <label for="content" class="form-label">Content</label>
                                            <textarea class="form-control" id="content" name="content" rows="3"><?= old('content') ?></textarea>
                                            <?php if (session()->has('errors')) : ?>
                                                <div class="text-danger"><?= session('errors.content') ?></div>
                                            <?php endif ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>

                        </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin Template</strong></a> &copy;
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="<?= base_url('/assets/js/app.js') ?>"></script>

</body>

</html>