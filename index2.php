<!DOCTYPE html>
<html>
<head>
    <title>Input Biodata</title>
    <style>
        body {
            background-color: #99A98F;
            font-family: Arial, sans-serif;
            margin: 10px;
            padding: 25px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"], input[type="number"] {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="radio"] {
            margin-top: 10px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #F2CD5C;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        function validateForm() {
            var nameInput = document.getElementById("name");
            var genderInput = document.getElementById("gender");
            
            var name = nameInput.value;
            var gender = genderInput.value;
            
            var nameRegex = /^[a-zA-Z\s]*$/; // Regex untuk hanya huruf dan spasi
            
            if (!nameRegex.test(name)) {
                alert("Nama hanya boleh berisi huruf dan spasi!");
                return false;
            }
            
            if (!name || !gender) {
                alert("Harap mengisi semua kolom!");
                return false;
            }
        }
    </script>
</head>
<body>
    <h2>Input Biodata</h2>
    <form method="post" action="" onsubmit="return validateForm()">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name">

        <label for="age">Umur:</label>
        <input type="number" id="age" name="age">

        <label for="name">Jenis Kelamin:</label>
        <input type="text" id="gender" name="gender">

        <button type="submit" name="submit">Simpan</button>
    </form>

    <?php
    class Biodata {
        private $name;
        private $age;
        private $gender;

        public function __construct($name, $age, $gender) {
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }

        public function displayBiodata() {
            echo "<div style=\"margin-top: 20px; color: #333; font-weight: bold; text-align: center;\">Biodata:</div>";
            echo "<div style=\"text-align: center;\"><strong>Nama:</strong> " . $this->name . "</div>";
            echo "<div style=\"text-align: center;\"><strong>Umur:</strong> " . $this->age . "</div>";
            echo "<div style=\"text-align: center;\"><strong>Jenis Kelamin:</strong> " . $this->gender . "</div>";
        }
    }

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        if (!empty($name) && !empty($age) && !empty($gender)) {
            // Membuat objek Biodata
            $biodata = new Biodata($name, $age, $gender);

            // Menampilkan biodata
            $biodata->displayBiodata();
        } else {
            echo "<div style=\"margin-top: 20px; color: red; font-weight: bold; text-align: center;\">Harap mengisi semua kolom</div>";
        }
    }
    ?>
</body>
</html>
