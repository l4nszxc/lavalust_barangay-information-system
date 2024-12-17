<?php include APP_DIR . 'views/templates/header.php'; ?>
<body>
    <div id="app">
        <?php include APP_DIR . 'views/templates/nav.php'; ?>

        <div class="container mt-5">
            <h2 class="text-center">Upload New Announcement</h2>

            <form method="POST" enctype="multipart/form-data" action="/announcements/store">
                <div class="mb-3">
                    <label for="title" class="form-label">Announcement Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Announcement Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="announcement_date" class="form-label">Announcement Date</label>
                    <input type="date" name="announcement_date" id="announcement_date" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image (Optional)</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Upload Announcement</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>
