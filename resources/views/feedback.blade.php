<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Custom CSS */
    body {
      background: linear-gradient(135deg, #f6f9fc, #e9eff5);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .feedback-container {
      max-width: 600px;
      margin: 80px auto;
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.1);
    }
    .feedback-container h2 {
      text-align: center;
      margin-bottom: 25px;
      font-weight: bold;
      color: #333;
    }
    .form-control:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 5px rgba(13, 110, 253, 0.3);
    }
    .btn-custom {
      width: 100%;
      background: #0d6efd;
      border: none;
      padding: 12px;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      transition: 0.3s;
    }
    .btn-custom:hover {
      background: #084298;
      transform: translateY(-2px);
    }
    .success-message {
      display: none;
      text-align: center;
      color: green;
      font-weight: bold;
      margin-top: 15px;
    }
  </style>
</head>
<body>

  <div class="feedback-container">
    <h2>We Value Your Feedback</h2>
    <form id="feedbackForm">
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
      </div>
      <div class="mb-3">
        <label for="rating" class="form-label">Rate Us</label>
        <select class="form-select" id="rating" required>
          <option value="">Choose...</option>
          <option value="5">⭐⭐⭐⭐⭐ - Excellent</option>
          <option value="4">⭐⭐⭐⭐ - Very Good</option>
          <option value="3">⭐⭐⭐ - Good</option>
          <option value="2">⭐⭐ - Fair</option>
          <option value="1">⭐ - Poor</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="feedback" class="form-label">Your Feedback</label>
        <textarea class="form-control" id="feedback" rows="4" placeholder="Write your feedback here..." required></textarea>
      </div>
      <button type="submit" class="btn btn-custom">Submit Feedback</button>
    </form>
    <div class="success-message" id="successMessage">✅ Thank you! Your feedback has been submitted.</div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Custom JS for form submission
    document.getElementById("feedbackForm").addEventListener("submit", function(e) {
      e.preventDefault();

      // Simple form validation
      const name = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      const rating = document.getElementById("rating").value;
      const feedback = document.getElementById("feedback").value.trim();
      const successMessage = document.getElementById("successMessage");

      if (name && email && rating && feedback) {
        successMessage.style.display = "block";
        this.reset();
        setTimeout(() => {
          successMessage.style.display = "none";
        }, 3000);
      }
    });
  </script>

</body>
</html>
