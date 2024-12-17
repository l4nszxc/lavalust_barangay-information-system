<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Officers</title>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#4F46E5',
            secondary: '#10B981',
          }
        }
      }
    }
  </script>
</head>

<body class="bg-gray-100 min-h-screen">
  <header class="bg-primary text-white shadow-lg py-6 px-8">
    <div class="container mx-auto">
      <h1 class="text-3xl font-bold">Edit Officers</h1>
    </div>
  </header>

  <main class="container mx-auto px-8 py-12">
    <div class="bg-white shadow-2xl rounded-2xl p-10 max-w-2xl mx-auto">
      <form id="editUserForm" class="space-y-8">
      <div>
                    <label for="image" class="block text-lg font-medium text-gray-800 mb-2">Image</label>
                    <input type="text" id="image" image="image" required class="form-input w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary">
                </div>

                <div>
                    <label for="name" class="block text-lg font-medium text-gray-800 mb-2">Name</label>
                    <input type="text" id="name" name="name" required class="form-input w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary">
                </div>

                <div>
                    <label for="age" class="block text-lg font-medium text-gray-800 mb-2">Age</label>
                    <input type="age" id="age" name="age" required class="form-input w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary">
                </div>

                <div>
                    <label for="address" class="block text-lg font-medium text-gray-800 mb-2">Address</label>
                    <input type="address" id="address" name="address" required class="form-input w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary">
                </div>

                <div>
                    <label for="contact_number" class="block text-lg font-medium text-gray-800 mb-2">Contact Number</label>
                    <textarea id="contact_number" name="contact_number" rows="4" required class="form-input w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary"></textarea>
                </div>

                <div class="flex justify-between items-center pt-4">
                    <button type="submit" class="btn-primary px-6 py-3 text-lg font-semibold rounded-lg shadow-md text-white hover:bg-primary">
                        Add User
                    </button>
                    <a href="/users" class="px-6 py-3 text-lg font-semibold rounded-lg shadow-md text-gray-800 bg-gray-200 hover:bg-gray-300">
                        Cancel
                    </a>
                </div>
            </form>
            <div id="responseMessage" class="slide-up mt-4 bg-green-100 text-green-800 px-4 py-3 rounded-lg"></div>
        </div>
    </main>

  <footer class="bg-gray-800 text-white py-8 mt-12">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 Edit User. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#editUserForm').on('submit', function(e) {
        e.preventDefault();

        var formData = {
                image: $('#image').val(),
                name: $('#name').val(),
                age: $('#age').val(),
                address: $('#address').val(),
                contact_number: $('#contact_number').val(),
               position: $('#position').val(),
            };

        var userId = "<?php echo htmlspecialchars($user['id']); ?>";

        $.ajax({
          url: '/user/update/' + userId,
          type: 'POST',
          data: formData,
          success: function(response) {
            // alert('User updated successfully!');
            window.location.href = '/users';
          },
          error: function(xhr, status, error) {
            alert('An error occurred: ' + error);
          }
        });
      });
    });
  </script>
</body>

</html>