<?php include APP_DIR . 'views/templates/header.php'; ?>
<body>
    <div id="app">
        <?php include APP_DIR . 'views/templates/nav.php'; ?>

        <div class="container mt-5">
            <h2 class="text-center">Accomplished Tasks</h2>
            
            <!-- Display the list of accomplished tasks -->
            <?php if (!empty($tasks)): ?>
                <div class="row">
                    <?php foreach ($tasks as $task): ?>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="<?php echo $task['image']; ?>" class="card-img-top" alt="Accomplished Task Image">
                                <div class="card-body">
                                    <h5 class="card-title">Task Completed on: <?php echo htmlspecialchars($task['task_date']); ?></h5>
                                    <p class="card-text"><?php echo htmlspecialchars($task['description']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-center my-5">No accomplished tasks to show.</p>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>
