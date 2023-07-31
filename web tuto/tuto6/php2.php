<!DOCTYPE html>
<html>
<head>
  <title>Mark Calculator</title>
</head>
<body>
  <h1>Mark Calculator</h1>
  <label for="mark1">Enter mark 1:</label>
  <input type="number" id="mark1" /><br>
  <label for="mark2">Enter mark 2:</label>
  <input type="number" id="mark2" /><br>
  <label for="mark3">Enter mark 3:</label>
  <input type="number" id="mark3" /><br>
  <label for="mark4">Enter mark 4:</label>
  <input type="number" id="mark4" /><br>
  <label for="mark5">Enter mark 5:</label>
  <input type="number" id="mark5" /><br>
  <button onclick="calculateMarks()">Calculate Grades</button>

  <script>
    function calculateMarks() {
      const mark1 = parseFloat(document.getElementById("mark1").value);
      const mark2 = parseFloat(document.getElementById("mark2").value);
      const mark3 = parseFloat(document.getElementById("mark3").value);
      const mark4 = parseFloat(document.getElementById("mark4").value);
      const mark5 = parseFloat(document.getElementById("mark5").value);

      const total = mark1 + mark2 + mark3 + mark4 + mark5;
      const average = total / 5;

      alert("Total marks: " + total + "\nAverage marks: " + average);

      if (average > 30) {
        alert("Congrats! You passed");
      } else {
        alert("Better luck next time");
      }
    }
  </script>
</body>
</html>