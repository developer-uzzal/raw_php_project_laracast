<?php require "views/partials/head.php"; ?>

<?php require "views/partials/nav.php"; ?>

<section>
    <div class="container">
        <p class="p">Note page</p>

        <div class="card">
            <div class="card-body">
                <p class="card-text"><?= $note['body']; ?></p>
            </div>
            
        </div>

        <p class="mt-3">
            <a href="/notes" class="btn btn-primary">Go back to Notes</a>
        </p>

    </div>
</section>


<?php require "views/partials/footer.php"; ?>