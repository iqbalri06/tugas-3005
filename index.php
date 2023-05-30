<!DOCTYPE html>
<html>
<head>
    <title>Aritmatika</title>
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

        input[type="text"] {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
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

        .result {
            margin-top: 20px;
            color: #333;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>OOP - Aritmatika</h2>
    <form method="post" action="">
        <label for="num1">Angka 1:</label>
        <input type="text" id="num1" name="num1" >

        <label for="num2">Angka 2:</label>
        <input type="text" id="num2" name="num2" >

        <label for="num3">Angka 3:</label>
        <input type="text" id="num3" name="num3" >

        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <button type="submit" name="calculate">Hitung</button>
    </form>

    <?php
    class Aritmatika {
        public $num1;
        private $num2;
        protected $num3;
        public $operator;

        public function __construct($num1, $num2, $num3, $operator) {
            $this->num1 = $num1;
            $this->num2 = $num2;
            $this->num3 = $num3;
            $this->operator = $operator;
        }

        public function calculate() {
            switch ($this->operator) {
                case 'add':
                    return $this->num1 + $this->num2 + $this->num3;
                    break;
                case 'subtract':
                    return $this->num1 - $this->num2 - $this->num3;
                    break;
                case 'multiply':
                    return $this->num1 * $this->num2 * $this->num3;
                    break;
                case 'divide':
                    if ($this->num2 != 0 && $this->num3 != 0) {
                        return $this->num1 / $this->num2 / $this->num3;
                    } else {
                        return "Error: Division by zero is not allowed.";
                    }
                    break;
                default:
                    return "Error: Invalid operator.";
                    break;
            }
        }
    }

    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $operator = $_POST['operator'];

        // Validasi ketika angka belum diinput
        if (empty($num1) || empty($num2) || empty($num3)) {
            echo "<div class=\"result\">Mohon lengkapi input angka terlebih dahulu!</div>";
        } else {
            // Membuat objek Aritmatika
            $calculator = new Aritmatika($num1, $num2, $num3, $operator);

            // Menghitung hasil perhitungan
            $result = $calculator->calculate();

            // Menampilkan hasil inputan
            echo "<div class=\"result\">Hasil Inputan kamu: " . $result . "</div>";
        }
    } else {
        $result = "";
    }
    ?>
</body>
</html>
