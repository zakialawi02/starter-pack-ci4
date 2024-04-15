<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Notes</title>

    <main>

        <div class="container p-3 m-2 mx-auto">
            <h2 class="text-center">Notes</h2>


            <?php if (isset($note)) : ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $note['title'] ?></h5>
                        <p class="card-text"><?= $note['content'] ?></p>
                        <small>Created at: <?= date('F jS, Y \a\t g:ia', strtotime($note['created_at'])) ?></small><br>
                        <small>Updated at: <?= date('F jS, Y \a\t g:ia', strtotime($note['updated_at'])) ?></small><br><br>
                    </div>
                </div>
            <?php endif; ?>
            <div class="text-start">
                <a href="<?= base_url('notes') ?>" class="btn btn-primary">Back</a>
            </div>


        </div>

    </main>
</head>

<body>