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

// Insert new experience
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['experienceTitle'])) {
    $experienceTitle = $_POST['experienceTitle'];
    $experienceDescription = $_POST['experienceDescription'];
    $experienceDate = $_POST['experienceDate'];

    if (isset($_POST['experienceId'])) {
        $experienceId = $_POST['experienceId'];
        $sql = "UPDATE experiences SET title='$experienceTitle', description='$experienceDescription', date='$experienceDate' WHERE id='$experienceId'";
    } else {
        $sql = "INSERT INTO experiences (title, description, date) VALUES ('$experienceTitle', '$experienceDescription', '$experienceDate')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Data pengalaman berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Delete experience
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['deleteId'])) {
    $experienceId = $_GET['deleteId'];
    $sql = "DELETE FROM experiences WHERE id='$experienceId'";
    if ($conn->query($sql) === TRUE) {
        echo "Data pengalaman berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch experiences
$experiences = [];
$sql = "SELECT * FROM experiences";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $experiences[] = $row;
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
    <title>Manage Experiences</title>
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
        <h1>Manage Experiences</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="experienceTitle">Title</label>
                <input type="text" id="experienceTitle" name="experienceTitle" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="experienceDescription">Description</label>
                <textarea id="experienceDescription" name="experienceDescription" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="experienceDate">Date</label>
                <input type="text" id="experienceDate" name="experienceDate" class="form-control" required>
            </div>
            <input type="hidden" id="experienceId" name="experienceId" value="">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" onclick="window.location.href='admin_dashboard.php';">Kembali</button>
        </form>

        <hr>

        <h2>Existing Experiences</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($experiences as $experience): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($experience['title']); ?></td>
                        <td><?php echo htmlspecialchars($experience['description']); ?></td>
                        <td><?php echo htmlspecialchars($experience['date']); ?></td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" onclick="editExperience(<?php echo $experience['id']; ?>, '<?php echo $experience['title']; ?>', '<?php echo $experience['description']; ?>', '<?php echo $experience['date']; ?>')">Edit</button>
                            <a href="?deleteId=<?php echo $experience['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        function editExperience(id, title, description, date) {
            document.getElementById('experienceId').value = id;
            document.getElementById('experienceTitle').value = title;
            document.getElementById('experienceDescription').value = description;
            document.getElementById('experienceDate').value = date;
        }
    </script>
</body>
</html>