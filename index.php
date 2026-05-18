<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USS</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<header>
    <div id="logo">
        <h1>Umuganda Smart Service</h1>
    </div>

 <nav>
    <a href="index.php">Home</a>
    <a href="#track_section">Track</a>
    <a href="#registration_section">Registration</a>
    <a href="../app/views/dashboard.php">Admin</a>
</nav>
</header>

<main id="main_container">

    <div class="main_item" id="problem">
        <h2>Problem</h2>
        <hr>
        <p>
            In many Rwandan communities, local service issues are still reported informally
            through phone calls, verbal communication, or WhatsApp groups.
        </p>
    </div>

    <div class="main_item" id="answer">
        <h2>Answer</h2>
        <hr>
        <p>
            Umuganda Smart Service helps citizens report and track community problems digitally.
        </p>
    </div>

    <div class="main_item">
        <h2>Submit Request</h2>
        <hr>

        <form action="../app/controllers/submit.php" method="post">
            <div class="main_item" id="track_section">

    <h2>Track Requests</h2>
    <hr>

    <p>
        Citizens can monitor submitted community service requests and follow progress updates.
    </p>

    <div class="track_box">

        <h3>Total Requests</h3>
        <p>Monitor all submitted problems in the system.</p>

    </div>

    <div class="track_box">

        <h3>Priority Levels</h3>
        <p>Low, Medium, and High priority requests are categorized for fast response.</p>

    </div>

    <div class="track_box">

        <h3>Status Tracking</h3>
        <p>Users can follow whether a request is pending, processing, or solved.</p>

    </div>

</div>
<div class="main_item" id="registration_section">

    <h2>Why Register With USS?</h2>
    <hr>

    <div class="register_card">

        <h3>Fast Reporting</h3>
        <p>
            Report community problems quickly using an online platform.
        </p>

    </div>

    <div class="register_card">

        <h3>Better Accountability</h3>
        <p>
            Every request is stored in the database for monitoring and transparency.
        </p>

    </div>

    <div class="register_card">

        <h3>Community Improvement</h3>
        <p>
            USS helps improve public services in local communities.
        </p>

    </div>

</div>
    
            <label>Name</label>
            <input class="text" type="text" name="name" placeholder="Enter your name" required>

            <label>Telephone</label>
            <input class="text" type="tel" name="telephone" placeholder="+2507xxxxxxxx" required>

            <label>Problem</label>
            <select name="problem" id="Select_problem">
                <option value="select problem">Select problem</option>
                <option value="broken water point">broken water point</option>
                <option value="street light issue">street light issue</option>
                <option value="cleaning request">cleaning request</option>
                <option value="ICT lab support">ICT lab support</option>
                <option value="student accommodation issue">student accommodation issue</option>
                <option value="event support request">event support request</option>
            </select>

            <label>Level</label>
            <select name="level" id="select_level">
                <option value="select level">Select level</option>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>

            <label>Description</label>
            <textarea rows="8" class="text" name="description" placeholder="Describe the problem briefly"></textarea>

            <input type="submit" value="Submit Request">

        </form>
    </div>

    <div id="preview_section">
        <div id="live_preview"></div>
    </div>

</main>

<footer>
    <h1>&copy; Umuganda Smart Service</h1>
</footer>

<script src="../assets/js/script.js"></script>

</body>
</html>
