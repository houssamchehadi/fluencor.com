<!DOCTYPE html>
<html>

<head>
    <title>Signup - Fluencor</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="signup-container">
        <form action="process_signup.php" method="POST" enctype="multipart/form-data">
            <h2>Create Your Account</h2>

            <label for="role">Select Account Type:</label>
            <select id="role" name="role" required>
                <option value="">Choose Type</option>
                <option value="influencer">Influencer</option>
                <option value="subscriber">Subscriber</option>
                <option value="agency">Agency</option>
            </select>

            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <div id="influencer-fields" class="conditional-field">
                <textarea name="bio" placeholder="Short Bio"></textarea>
                <input type="text" name="category" placeholder="Content Category (e.g., fitness)">
                <label>Profile Image:</label>
                <input type="file" name="profile_image">
            </div>

            <div id="subscriber-fields" class="conditional-field">
                <label>Date of Birth:</label>
                <input type="date" name="date_of_birth">
            </div>

            <div id="agency-fields" class="conditional-field">
                <input type="text" name="agency_name" placeholder="Agency Name">
                <input type="url" name="agency_website" placeholder="Agency Website">
                <label>Agency Logo:</label>
                <input type="file" name="agency_logo">
            </div>

            <button type="submit">Sign Up</button>
        </form>
    </div>

    <script src="assets/js/signup.js"></script>
</body>

</html>