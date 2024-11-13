<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tour Booking Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      margin-top: 0;
    }
    label {
      font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    select {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type="date"] {
      width: calc(100% - 22px);
    }
    input[type="submit"] {
      background-color: #4caf50;
      color: white;
      padding: 15px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Tour Booking Form</h2>
    <form action="#" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone:</label>
      <input type="text" id="phone" name="phone" required>

      <label for="tour">Tour:</label>
      <select id="tour" name="tour" required>
        <option value="">Select Tour</option>
        <option value="Tour A">Solo</option>
        <option value="Tour B">Group</option>
        <option value="Tour C">Couple</option>
      </select>

      <label for="date">Tour Date:</label>
      <input type="date" id="date" name="tourdate" required>

      <label for="participants">Number of Participants:</label>
      <input type="number" id="participants" name="no_participants" min="1" required>

      <input type="submit" value="Book Now">
    </form>
  </div>
</body>
</html>
