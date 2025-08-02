<?php
require_once '../../app/classes/VehicleManager.php';
$id = $_GET['id'];
include './header.php';

$vehicleManager = new VehicleManager("", "", "", "");
$vehicle = $vehicleManager->getVehicleById($id);

if ($id === null) {
    header("Location: ../index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vehicleManager->deleteVehicle($id);
    header("Location: ../index.php");
    exit;
}
?>

<div class="container my-4">
    <h1>Delete Vehicle</h1>
    <p>Are you sure you want to delete <strong><?php echo $vehicle['name']; ?></strong>?</p>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?id=<?php echo $id; ?>">
        <button type="submit" name="confirm" value="yes" class="btn btn-danger">Yes, Delete</button>
        <a href="../index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>