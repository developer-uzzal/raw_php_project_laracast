<?php require "views/partials/head.php"; ?>

<?php require "views/partials/nav.php"; ?>

<section>
    <div class="container">
        <p class="p">Notes page</p>

        <?php foreach ($notes as $note) : ?>
            <div class="">
                <ul>
                    <li><a class="nav-link" href="/note?id=<?= $note['id']; ?>"><?= $note['body']; ?></a></li>
                </ul>
            </div>
        <?php endforeach; ?>

        <div>
            <a href="/note/create" class="btn btn-success">Add Note</a>
        </div>

    </div>
</section>


<?php require "views/partials/footer.php"; ?>