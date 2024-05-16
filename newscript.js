function toggleHeightInputs() {
    var heightUnit = document.getElementById('heightUnit').value;
    if (heightUnit === "cm") {
      document.getElementById('heightFeetInches').style.display = "none";
      document.getElementById('heightCm').style.display = "block";
    } else {
      document.getElementById('heightFeetInches').style.display = "block";
      document.getElementById('heightCm').style.display = "none";
    }
  }
  //
  function toggleWeightInputs() {
    var weightUnit = document.getElementById('weightUnit').value;
    if (weightUnit === "pounds") {
      document.getElementById('weightKgPounds').style.display = "none";
      document.getElementById('weightPounds').style.display = "block";
    } else {
      document.getElementById('weightKgPounds').style.display = "block";
      document.getElementById('weightPounds').style.display = "none";
    }
  }
  
  function calculateBMI() {
    var name = document.getElementById('Name').value;
    var age = document.getElementById('Age').value;
    var gender = document.querySelector('input[name="gender"]:checked').value;
    var heightUnit = document.getElementById('heightUnit').value;
    var weightUnit = document.getElementById('weightUnit').value;
  
    var height, weight;
  
    if (heightUnit === "cm") {
      height = parseFloat(document.getElementById('heightCmValue').value);
    } else {
      var heightInInches = (parseInt(document.getElementById('heightFeet').value) * 12) + parseInt(document.getElementById('heightInches').value);
      height = heightInInches * 0.0254; // Convert inches to meters
    }
  
    if (weightUnit === "pounds") {
      weight = parseFloat(document.getElementById('weightPoundsValue').value);
    } else {
      weight = parseFloat(document.getElementById('weight').value);
    }
  
    if (isNaN(height) || isNaN(weight)) {
      alert("Please enter valid numbers for height and weight.");
      return;
    }
  
    var heightMeters;
    if (heightUnit === "cm") {
      heightMeters = height / 100; // Convert cm to meters
    } else {
      heightMeters = height;
    }
  
    var weightKg;
    if (weightUnit === "pounds") {
      weightKg = weight * 0.453592; // Convert pounds to kilograms
    } else {
      weightKg = weight;
    }
  
    var bmi = weightKg / (heightMeters * heightMeters);
  
    var interpretation;
    if (bmi < 18.5) {
      interpretation = "Underweight";
    } else if (bmi < 25) {
      interpretation = "Normal weight";
    } else if (bmi < 30) {
      interpretation = "Overweight";
    } else {
      interpretation = "Obese";
    }
  
    var result = "<b>BMI:</b> " + bmi.toFixed(2) + "<br>";
    result += "<b>Interpretation:</b> " + interpretation;
  
    document.getElementById('result').innerHTML = result;
  }
  
