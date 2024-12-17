<?php
include APP_DIR.'views/templates/header.php';
?>
<body>
    <div id="app">
    <?php
    include APP_DIR.'views/templates/nav.php';
    ?>  

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 class="mt-2">Welcome to Barangay Batino</h5>
                        <p>Barangay Batino is a harmonious and thriving community known for its friendly residents, lush greenery, and collective spirit of unity and progress.</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Left side: Description and additional image -->
                            <div class="col-md-6">
                                <div class="border p-3 box-outline">
                                    <h6>Description:</h6>
                                    <p class="text-justify">Barangay Batino is a vibrant community located in the municipality of Calapan, Oriental Mindoro, Philippines. Known for its rich agricultural landscape, the area thrives with a combination of farming and residential spaces. The barangay's economy is primarily driven by crops such as rice, corn, and coconut, with local markets often bustling with fresh produce. The serene rural environment and friendly locals make it an ideal place for those looking for a peaceful yet productive lifestyle. Despite its rural nature, Barangay Batino has seen gradual urban development, contributing to improvements in infrastructure and public services.</p>
                                    <p class="text-justify">Over the years, Barangay Batino has developed a strong sense of community, with various social and cultural events bringing residents together. Local festivals, celebrations, and activities often showcase the barangay's rich cultural heritage and sense of pride. As it continues to grow, the barangay is focused on improving its public services, education, and healthcare systems to meet the needs of its growing population. With its beautiful natural surroundings and a blend of modern and traditional life, Barangay Batino offers a unique and welcoming environment for its residents and visitors alike.</p>
                                </div>
                                <!-- Image below description -->
                                <div class="border p-3 mt-3 img-outline">
                                    <img src="/public/dashboard/kap.jpg" alt="Barangay Leader" class="img-fluid rounded" style="max-width: 100%; height: auto;">
                                </div>
                                <div class="border p-3 mt-3 img-outline">
                                    <img src="/public/dashboard/sk.jpg" alt="Barangay Leader" class="img-fluid rounded" style="max-width: 100%; height: auto;">
                                </div>
                                <div class="border p-3 mt-3 img-outline">
                                    <img src="/public/dashboard/officers.png" alt="Barangay Leader" class="img-fluid rounded" style="max-width: 100%; height: auto;">
                                </div>
                            </div>

                            <!-- Right side: Images -->
                            <div class="col-md-6">
                                <div class="border p-3 img-outline">
                                    <img src="/public/dashboard/barangayhall.jpg" alt="Barangay Hall" class="img-fluid rounded" style="max-width: 100%; height: auto;">
                                </div>
                                <div class="border p-3 img-outline">
                                    <img src="/public/dashboard/side.jpg" alt="Side View" class="img-fluid rounded" style="max-width: 100%; height: auto;">
                                </div>
                                <div class="border p-3 img-outline">
                                    <img src="/public/dashboard/walk.jpg" alt="Walkway" class="img-fluid rounded" style="max-width: 100%; height: auto;">
                                </div>
                                   <div class="border p-3 img-outline">
                                    <img src="/public/dashboard/design.jpg" alt="Walkway" class="img-fluid rounded" style="max-width: 100%; height: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style>
        .box-outline {
            border: 3px solid black !important;
        }
        .img-outline img {
            border: 3px solid black !important;
        }
    </style>
</body>
</html>
