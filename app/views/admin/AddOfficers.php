<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Officers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
        body {
            font-family: 'Playfair Display', serif;
            background-color: #fdf6f0;
        }
        header {
            background-color: #f4c7c3;
        }
        .btn-primary {
            background-color: #e4a6a1;
        }
        .btn-primary:hover {
            background-color: #d88b86;
        }
        .form-input:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(228, 166, 161, 0.7);
        }
        .slide-up {
            display: none;
        }
        .slide-up.active {
            display: block;
            animation: slide-up 0.5s ease-in-out;
        }
        @keyframes slide-up {
            from {
                transform: translateY(100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <header class="py-6 px-8 shadow-lg text-white">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold text-center">Add New User</h1>
        </div>
    </header>

    <main class="container mx-auto px-8 py-12">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-2xl mx-auto">
            <form id="addUserForm" class="space-y-6">
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
            <p>&copy; 2024 Add User. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#addUserForm').on('submit', function(e) {
            e.preventDefault();

            var formData = {
                image: $('#image').val(),
                name: $('#name').val(),
                age: $('#age').val(),
                address: $('#address').val(),
                contact_number: $('#contact_number').val(),
               position: $('#position').val(),
            };

            $.ajax({
                url: '/user/create',
                type: 'POST',
                data: formData,
                success: function(response) {
                    $('#responseMessage')
                        .text('User added successfully!')
                        .addClass('active');
                    setTimeout(function() {
                        window.location.href = '/users';
                    }, 1500);
                },
                error: function(xhr, status, error) {
                    $('#responseMessage')
                        .text('An error occurred: ' + error)
                        .addClass('active bg-red-100 text-red-800');
                }
            });
        });
    });
    </script>
</body>
</html>
