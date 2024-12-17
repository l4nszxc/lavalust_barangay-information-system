<?php include APP_DIR . 'views/templates/header.php'; ?>
<body>
    <div id="app">
        <?php include APP_DIR . 'views/templates/nav.php'; ?>

        <div class="container mt-5">
            <h2 class="text-center">Upload Accomplished Task</h2>

            <form method="POST" action="/accomplished/store" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="task_date" class="form-label">Date</label>
                    <input type="date" name="date" id="date" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload Task</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>
