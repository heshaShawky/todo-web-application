<!-- Container -->
<div class="container">
    <!-- Raw -->
    <div class="row">
        <!-- Table -->
        <table class="table table-bordered table-hover">
            <!-- Thead -->
            <thead>
                <th>id</th>
                <th>tile</th>
            </thead>

            <!-- Tbody -->
            <tbody>
                <?php
                try {
                    $results = $connection->query(
                        "SELECT *
                        FROM tasks
                        ORDER BY id ASC
                    ");

                } catch (Exception $e) {
                    echo "ERORR!: " . $e->getMessage() . "<br />";
                    die();
                }
                while ($row = $results->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><a href="?p=<?php echo $row['id']; ?>"></a><?php echo $row['title']; ?></td>
                    </tr>
                <?php endwhile; ?>


            </tbody>
        </table>
    </div>
</div>
