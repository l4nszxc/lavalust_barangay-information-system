<?php
include APP_DIR . 'views/templates/header.php';
?>
<body>
    <div id="app">
    <?php
    include APP_DIR . 'views/templates/nav.php';
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 class="mt-2">Barangay Officers</h5>
                        <p>Meet the dedicated team of Barangay Batino who work tirelessly for the welfare of the community.</p>
                    </div>
                    <div class="card-body">
                        <?php
                        // Example Data for Barangay Officers
                        $officers = [
                            [
                                'image' => '/public/dashboard/kap.jpg',
                                'name' => 'Juan Dela Cruz',
                                'age' => 45,
                                'address' => 'Purok 1, Barangay Batino',
                                'contact' => '09123456789',
                                'position' => 'Barangay Chairman'
                            ],
                            [
                                'image' => '/public/dashboard/sk.jpg',
                                'name' => 'Maria Santos',
                                'age' => 38,
                                'address' => 'Purok 2, Barangay Batino',
                                'contact' => '09187654321',
                                'position' => 'Barangay Secretary'
                            ]
                        ];

                        // Loop through the officers and display details
                        foreach ($officers as $officer) {
                        ?>
                        <div class="row mb-4">
                            <!-- Left side: Picture -->
                            <div class="col-md-4">
                                <img src="<?php echo $officer['image']; ?>" alt="<?php echo $officer['name']; ?>" class="img-fluid rounded" style="width: 100%; height: auto;">
                            </div>

                            <!-- Right side: Details -->
                            <div class="col-md-8">
                                <div class="border p-3">
                                    <h6 class="fw-bold">Name:</h6>
                                    <p><?php echo $officer['name']; ?></p>
                                    <h6 class="fw-bold">Age:</h6>
                                    <p><?php echo $officer['age']; ?></p>
                                    <h6 class="fw-bold">Address:</h6>
                                    <p><?php echo $officer['address']; ?></p>
                                    <h6 class="fw-bold">Contact Number:</h6>
                                    <p><?php echo $officer['contact']; ?></p>
                                    <h6 class="fw-bold">Position:</h6>
                                    <p><?php echo $officer['position']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>
