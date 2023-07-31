
<html>
<head>
  <title>Circle Area Calculator</title>
</head>
<body>
  <h1>Circle Area Calculator</h1>
  <button onclick="calculateArea()">Calculate Area</button>

  <script>
    function calculateArea() {
      const radius = parseFloat(prompt("Enter the radius of the circle:"));
      const pi = 22 / 7;

      if (isNaN(radius)) {
        alert("Invalid input. Please enter a valid number.");
      } else {
        const area = pi * radius * radius;
        alert("The area of the circle is: " + area.toFixed(2));
      }
    }
  </script>
</body>
</html>