<?php
// Simple backend to simulate form submission and handle errors/success
session_start();
$application_status = "";
$form_data = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Basic validation
    $required_fields = ['full_name', 'email', 'phone', 'dob', 'gender', 'current_status', 'desired_program', 'manifesto'];
    $all_fields_filled = true;
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $all_fields_filled = false;
            break;
        }
        $form_data[$field] = htmlspecialchars($_POST[$field]);
    }

    if (!$all_fields_filled) {
        $application_status = "Your application lacked true Alpha energy. Please fill in all required fields. Weakness is a choice.";
    } else {
        // Simulate saving application (e.g., to a database)
        // In a real application, you would sanitize and insert into a database here.
        // For now, we'll just acknowledge the submission.
        $application_status = "Application received, future Hustler! We'll review your raw ambition shortly. Trust the process.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hustler's Unversity | Application Form</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <style>
        body {
            background-color: #1a1a1a;
            color: #fff;
            font-family: 'Quicksand', sans-serif;
        }
        .form-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #222;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(220, 53, 69, 0.5);
            border: 1px solid #dc3545;
        }
        .form-container h1 {
            color: #dc3545;
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 2px 2px 5px rgba(255,0,0,0.5);
        }
        .form-group label {
            font-weight: bold;
            color: #ccc;
        }
        .form-control, .custom-select {
            background-color: #333;
            color: #fff;
            border: 1px solid #555;
        }
        .form-control:focus, .custom-select:focus {
            background-color: #444;
            color: #fff;
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            box-shadow: 0 4px 15px rgba(220, 53, 69, 0.4);
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .status-message {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            text-align: center;
        }
        .status-message.success {
            background-color: rgba(40, 167, 69, 0.1);
            border: 1px solid #28a745;
            color: #28a745;
        }
        .status-message.error {
            background-color: rgba(220, 53, 69, 0.1);
            border: 1px solid #dc3545;
            color: #dc3545;
        }
    </style>
</head>

<body>
    <div class="container form-container">
        <h1>🚀 Initiate Ascension Protocol - Application Form</h1>

        <?php if ($application_status): ?>
            <div class="status-message <?php echo strpos($application_status, 'received') !== false ? 'success' : 'error'; ?>">
                <i class="fas <?php echo strpos($application_status, 'received') !== false ? 'fa-check-circle' : 'fa-exclamation-triangle'; ?> mr-2"></i>
                <?php echo $application_status; ?>
            </div>
        <?php endif; ?>

        <form method="post" action="apply.php">
            <h3 class="text-danger mb-3">Your Foundation of Alpha</h3>
            <div class="form-group">
                <label for="full_name">Full Legal Name (as recognized by the Matrix):</label>
                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Chad Thundercock" required>
            </div>
            <div class="form-group">
                <label for="email">Email (your primary hustle channel):</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="alpha@hustlers.edu" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number (for urgent deal closures):</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="+1 (555) HUSTLEZ" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth (when you began your ascent):</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender (choose your current power level):</label>
                <select class="custom-select" id="gender" name="gender" required>
                    <option value="">Select your status...</option>
                    <option value="Alpha Male">Alpha Male</option>
                    <option value="Alpha Female">Alpha Female</option>
                    <option value="Sigma">Sigma (lone wolf, but still thriving)</option>
                    <option value="Gamma">Gamma (working towards potential)</option>
                    <option value="Beta">Beta (seeking guidance)</option>
                </select>
            </div>

            <h3 class="text-danger mt-5 mb-3">Your Path to Domination</h3>
            <div class="form-group">
                <label for="current_status">Current Status (are you grinding or just existing?):</label>
                <select class="custom-select" id="current_status" name="current_status" required>
                    <option value="">Select your current grind level...</option>
                    <option value="High School Hustler">High School Hustler</option>
                    <option value="College Conqueror">College Conqueror (at a lesser institution)</option>
                    <option value="University Underlord">University Underlord (ready for the true teachings)</option>
                    <option value="Already an Empire">Already an Empire (but seeking more wisdom)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="desired_program">Desired Degree Program (your chosen path to domination):</label>
                <select class="custom-select" id="desired_program" name="desired_program" required>
                    <option value="">Choose your specialization...</option>
                    <option value="BSCN">B.S. in Crypto & NFTs</option>
                    <option value="BSSO">B.S. in Dropshipping</option>
                    <option value="BSB">B.A. in Motivational Speaking</option>
                    <option value="MBA">B.S. in Podcasting</option>
                </select>
            </div>
            <div class="form-group">
                <label for="manifesto">Why Hustler's Unversity? (Your manifesto. Max 500 characters of raw ambition. Show us your mindset.):</label>
                <textarea class="form-control" id="manifesto" name="manifesto" rows="5" maxlength="500" required placeholder="I'm here to dominate, not just participate. My current environment lacks the unfiltered truth and sigma energy I need to truly ascend. I seek the knowledge to build my empire, escape the matrix, and never be a brokeboy again."></textarea>
            </div>

            <button type="submit" class="btn btn-danger btn-block btn-lg mt-4">INITIATE ASCENSION PROTOCOL</button>
        </form>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Additional scripts if needed, similar to login.js if there are specific interactions -->
</body>

</html>