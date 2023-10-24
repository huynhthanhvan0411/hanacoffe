<?php view('shared.admin.header', [
    'title' => 'Contact List'
]); ?>

<form action="./?module=admin&controller=contact&action=searchContactFull" class="form-inline" method="post">

    <div class="form-group">
        <input class="form-control search-input" name="contactSearch" placeholder="Search By Name..">
    </div>

    <button type="submit" class="btn btn-root search-btn">
        <i class="fas fa-search"></i>
    </button>
</form>
<hr>
<table class="table table-hover">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th class="text-center">Message</th>
            <th class="text-center">Created At</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter = 1;
        foreach ($data as $model) : ?>
        <tr>
            <td><?= $counter ?></td>
            <td><?= $model['name'] ?></td>

            <td><?= $model['email'] ?></td>

            <td><?= $model['phone'] ?></td>

            <td class="text-center"><?= $model['message'] ?></td>

            <td class="text-center"><?= $model['created_at'] ?></td>

        </tr>
        <?php $counter++;
        endforeach; ?>
    </tbody>
</table>

<hr>
<?= $pagination ?>
<!-- Pagination -->

<?php view('shared.admin.footer'); ?>