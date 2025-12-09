<?php require "views/partials/head.php"; ?>

<?php require "partials/nav.php"; ?>

<section>
    <div class="container">
        <p class="p">Note create</p>

        <form action="/note-create" method="POST">
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input type="text" class="form-control" id="body" name="body">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>
</section>


<?php require "views/partials/footer.php"; ?>