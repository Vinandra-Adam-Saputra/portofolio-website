<?php
// Database connection (modify with your database details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portofolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert new skill
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['skillName'])) {
    $skillName = $_POST['skillName'];
    $skillLevel = $_POST['skillLevel'];

    if (isset($_POST['skillId'])) {
        $skillId = $_POST['skillId'];
        $sql = "UPDATE skills SET name='$skillName', level='$skillLevel' WHERE id='$skillId'";
    } else {
        $sql = "INSERT INTO skills (name, level) VALUES ('$skillName', '$skillLevel')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Data skill berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Delete skill
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['deleteId'])) {
    $skillId = $_GET['deleteId'];
    $sql = "DELETE FROM skills WHERE id='$skillId'";
    if ($conn->query($sql) === TRUE) {
        echo "Data skill berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch skills
$skills = [];
$sql = "SELECT * FROM skills";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $skills[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Skills</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Manage Skills</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="skillName">Skill Name</label>
                <input type="text" id="skillName" name="skillName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="skillLevel">Skill Level</label>
                <input type="text" id="skillLevel" name="skillLevel" class="form-control" required>
            </div>
            <input type="hidden" id="skillId" name="skillId" value="">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" onclick="window.location.href='admin_dashboard.php';">Kembali</button>
        </form>

        <hr>

        <h2>Existing Skills</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($skills as $skill): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($skill['name']); ?></td>
                        <td><?php echo htmlspecialchars($skill['level']); ?></td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" onclick="editSkill(<?php echo $skill['id']; ?>, '<?php echo $skill['name']; ?>', '<?php echo $skill['level']; ?>')">Edit</button>
                            <a href="?deleteId=<?php echo $skill['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        function editSkill(id, name, level) {
            document.getElementById('skillId').value = id;
            document.getElementById('skillName').value = name;
            document.getElementById('skillLevel').value = level;
        }
    </script>
</body>
</html>