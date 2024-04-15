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

            <div class="d-flex flex-wrap gap-2">
                <?php foreach ($notes as $note) : ?>
                    <div class="card h-15 overflow-hidden" style="max-width: 20rem">
                        <div class="card-body">
                            <h5 class="card-title"><?= $note['title']; ?></h5>
                            <p class="card-text"><?= $note['content']; ?></p>
                            <a href="/notes/view/<?= $note['id'] ?>" class="btn btn-primary">View</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

        </div>

    </main>
</head>

<body>