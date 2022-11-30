<div class="container main">
    <h1>Data User</h1>
    <div class="tabel-wrap">
        <table>
            <tr>
                <td>No</td>
                <td>Name</td>
                <td>Email</td>
                <td>Gender</td>
                <td>Phone</td>
            </tr>
            <?php
            $no = 1;

            foreach ($data as $dt) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $dt->name ?></td>
                    <td><?= $dt->email ?></td>
                    <td><?= $dt->gender ?></td>
                    <td><?= $dt->phone ?></td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</div>