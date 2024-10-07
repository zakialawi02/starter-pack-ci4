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

                    <h1 class="h3 mb-3">Blank Page</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Empty card</h5>
                                    <p>Helloo, <?= user()->username; ?>, <?= user()->email; ?></p>
                                </div>
                                <div class="card-body">
                                </div>

                            </div>
                        </div>
                    </div>

                    <?php if (in_groups('Admin')) : ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Empty card</h5>
                                        <p>Hanya di lihat Admin</p>
                                    </div>
                                    <div class="card-body">
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endif ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Available Routes in This Application</h3>
                                    <p>This web application has the following routes/URLs:</p>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Method</th>
                                                <th>URL</th>
                                                <th>Controller Method</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>GET</td>
                                                <td>/</td>
                                                <td>Home::index</td>
                                                <td>Displays the homepage.</td>
                                            </tr>
                                            <tr>
                                                <td>GET</td>
                                                <td>/dashboard</td>
                                                <td>DashboardController::index</td>
                                                <td>Displays the user/dashboard dashboard (requires role: Admin or User).</td>
                                            </tr>
                                            <tr>
                                                <td>GET</td>
                                                <td>/dashboard/notes</td>
                                                <td>AdminNoteController::index</td>
                                                <td>Displays the list of admin notes (requires role: Admin).</td>
                                            </tr>
                                            <tr>
                                                <td>GET</td>
                                                <td>/dashboard/notes/create</td>
                                                <td>AdminNoteController::create</td>
                                                <td>Displays the form to create a new note (requires role: Admin).</td>
                                            </tr>
                                            <tr>
                                                <td>POST</td>
                                                <td>/dashboard/notes/store</td>
                                                <td>AdminNoteController::store</td>
                                                <td>Saves the newly created note (requires role: Admin).</td>
                                            </tr>
                                            <tr>
                                                <td>GET</td>
                                                <td>/dashboard/notes/view/(:any)</td>
                                                <td>AdminNoteController::show/$1</td>
                                                <td>Displays a specific note based on ID (requires role: Admin).</td>
                                            </tr>
                                            <tr>
                                                <td>GET</td>
                                                <td>/dashboard/notes/edit/(:any)</td>
                                                <td>AdminNoteController::edit/$1</td>
                                                <td>Displays the form to edit a specific note (requires role: Admin).</td>
                                            </tr>
                                            <tr>
                                                <td>POST</td>
                                                <td>/dashboard/notes/update/(:any)</td>
                                                <td>AdminNoteController::update/$1</td>
                                                <td>Updates a specific note (requires role: Admin).</td>
                                            </tr>
                                            <tr>
                                                <td>DELETE</td>
                                                <td>/dashboard/notes/delete/(:any)</td>
                                                <td>AdminNoteController::delete/$1</td>
                                                <td>Deletes a specific note (requires role: Admin).</td>
                                            </tr>
                                            <tr>
                                                <td>GET</td>
                                                <td>/notes</td>
                                                <td>NoteController::index</td>
                                                <td>Displays the list of user notes.</td>
                                            </tr>
                                            <tr>
                                                <td>GET</td>
                                                <td>/notes/view/(:any)</td>
                                                <td>NoteController::show/$1</td>
                                                <td>Displays a specific user note based on ID.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-body">
                                </div>

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