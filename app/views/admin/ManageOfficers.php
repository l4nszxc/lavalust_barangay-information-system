<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - GovAssist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            background-color: #343a40;
            color: #fff;
            height: 100vh;
            padding-top: 20px;
            width: 250px; /* Set fixed width */
            position: fixed; /* Fix sidebar in place */
            top: 0; /* Align with the top */
            left: 0; /* Align with the left */
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 15px;
            display: block;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #007bff;
            color: #fff;
        }
        .main-content {
            margin-left: 270px; /* Add margin to leave space for the sidebar */
            padding: 20px;
        }

        /* Optional: Table styling */
        table {
            width: 100%;
            text-align: left;
            border-collapse: collapse;
        }
        thead {
            background-color: #343a40;
            color: white;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tbody tr:hover {
            background-color: #e0f7fa;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center text-white">Admin Menu</h4>
        <a href="dashboard">Dashboard</a>
        <a href="manage-users">Manage Users</a>
        <a href="manage-announcement">Announcements</a>
      
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h4>Manage Users</h4>
    
        <!-- User Management Table -->
        <table id="userTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="hidden">Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td class="hidden"><?php echo $user['id']; ?></td>
                            <td><?php echo htmlspecialchars($user['image']); ?></td>
                            <td><?php echo htmlspecialchars($user['name']); ?></td>
                            <td><?php echo htmlspecialchars($user['age']); ?></td>
                            <td><?php echo htmlspecialchars($user['address']); ?></td>
                            <td><?php echo htmlspecialchars($user['contact_number']); ?></td>
                            <td><?php echo htmlspecialchars($user['position']); ?></td>
                            
                                <a href="<?=site_url('admin/delete/' .$user['id']);?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9">No users found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap and DataTables JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cjssz5mcQ8d+G+vv6C9EhdB1+3C9DoFI6R2axDSJ13LlZJGTQUtvk7u35B3XPE4G" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTables
            $('#userTable').DataTable({
                "pageLength": 5,  // Number of rows per page
                "lengthMenu": [5, 10, 25, 50], // Options for number of rows per page
                "order": [[0, 'asc']],  // Order by the first column (ID)
                "searching": true,  // Enables the search functionality
                "paging": true,  // Enables pagination
                "info": true,  // Shows page information (like "Showing 1 to 5 of 20 entries")
                "responsive": true // Makes the table responsive to different screen sizes
            });
        });
    </script>
</body>
</html>