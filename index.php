<?php include "inc/header.php";
    $tasks = get_all_posts();
?>

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
                        <?php foreach ($tasks as $task): ?>
                            <tr>
                                <td><?php echo $task['id']; ?></td>
                                <td><a href="/todo/?p=<?php echo intval($task['id']) ?>"><?php echo $task['title']; ?></a></td>
                                <td><a class="btn btn-danger" href="todo/?delete=<?php echo intval($task['id'])?>">Delete</a></td>
                                <?php

                                ?>
                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>

<?php include "inc/footer.php";
