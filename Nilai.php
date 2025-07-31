<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cek Kelulusan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            max-width: 400px;
            margin: auto;
            background-color: #f0f0f0;
        }
        input, button {
            padding: 10px;
            font-size: 16px;
            margin-top: 10px;
            width: 100%;
        }
        #result {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Cek Kelulusan</h2>
    <label for="scoreInput">Masukkan Nilai (0 - 100):</label>
    <input type="number" id="scoreInput" min="0" max="100" required>
    <button onclick="cekKelulusan()">Cek</button>
    
    <div id="result"></div>

    <script>
        function cekKelulusan() {
            const score = parseFloat(document.getElementById("scoreInput").value);
            const resultDiv = document.getElementById("result");
            let hasil = "";

            if (isNaN(score) || score < 0 || score > 100) {
                hasil = "Silakan masukkan nilai antara 0 hingga 100.";
                resultDiv.style.color = "black";
            } else if (score >= 80) {
                hasil = "Lulus";
                resultDiv.style.color = "green";
            } else {
                hasil = "Tidak Lulus";
                resultDiv.style.color = "red";
            }

            resultDiv.innerText = hasil;
        }
    </script>

</body>
</html>

