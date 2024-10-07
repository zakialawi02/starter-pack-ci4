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

                                    <?php if (session()->has('success')) : ?>
                                        <div class="alert alert-dismissible alert-success" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><?= session('success') ?>
                                        </div>
                                    <?php endif ?>
                                    <?php if (session()->has('error')) : ?>
                                        <div class="alert alert-dismissible alert-error" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> <?= session('error') ?>
                                        </div>
                                    <?php endif ?>

                                    <a href="/dashboard/notes/create" class="btn btn-primary mb-3">Create</a>

                                    <table class="table table-bordered table-responsive table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Content</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (empty($notes)) : ?>
                                                <tr class="text-center">
                                                    <td colspan="4">No data</td>
                                                </tr>
                                            <?php else : ?>
                                                <?php foreach ($notes as $key => $note) : ?>
                                                    <tr>
                                                        <th scope="row"><?= $key + 1 ?></th>
                                                        <td><?= $note['title'] ?></td>
                                                        <td><?= $note['content'] ?></td>
                                                        <td>
                                                            <a href="/dashboard/notes/view/<?= $note['id'] ?>" class="btn btn-secondary">View</a>
                                                            <a href="/dashboard/notes/edit/<?= $note['id'] ?>" class="btn btn-warning">Edit</a>
                                                            <form action="/dashboard/notes/delete/<?= $note['id'] ?>" method="post" class="d-inline">
                                                                <?= csrf_field(); ?>
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                        </tbody>
                                    </table>

                                </div>
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