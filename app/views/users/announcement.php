<?php include APP_DIR . 'views/templates/header.php'; ?>
<body>
    <div id="app">
        <?php include APP_DIR . 'views/templates/nav.php'; ?>

        <div class="container mt-5">
            <h2 class="text-center">ANNOUNCEMENTS</h2>
            
            <!-- Display the list of accomplished tasks -->
            <?php if (!empty($tasks)): ?>
                <div class="row">
                    <?php foreach ($tasks as $task): ?>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="<?php echo $task['image']; ?>" class="card-img-top" alt="Accomplished Task Image">
                                <div class="card-body">
                                    <h5 class="card-title text-center">WAIT FOR THE UPCOMING ANNOUNCEMENTS <?php echo htmlspecialchars($task['task_date']); ?></h5>
                                    <p class="card-text text-center"><?php echo htmlspecialchars($task['description']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-center">WAIT FOR THE UPCOMING ANNOUNCEMENTS.</p>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>
