<?php include APP_DIR . 'views/templates/header.php'; ?>
<body>
    <div id="app">
        <?php include APP_DIR . 'views/templates/nav.php'; ?>

        <div class="container mt-5">
            <h2 class="text-center">Announcements</h2>
            
            <!-- Display the list of announcements -->
            <?php if (!empty($announcements)): ?>
                <div class="row">
                    <?php foreach ($announcements as $announcement): ?>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <?php if (!empty($announcement['image'])): ?>
                                    <img src="<?php echo $announcement['image']; ?>" class="card-img-top" alt="Announcement Image">
                                <?php endif; ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($announcement['title']); ?></h5>
                                    <p class="card-text"><?php echo htmlspecialchars($announcement['description']); ?></p>
                                    <p class="text-muted"><?php echo htmlspecialchars($announcement['announcement_date']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p>No announcements to show.</p>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>
