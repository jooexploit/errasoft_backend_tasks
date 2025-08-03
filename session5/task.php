<?php
// Simple array to store services (in real applications, you'd use a database)
session_start();

// Initialize services array if it doesn't exist
if (!isset($_SESSION['services'])) {
    $_SESSION['services'] = [
        ['id' => 1, 'name' => 'Web Design', 'price' => 500],
        ['id' => 2, 'name' => 'SEO Service', 'price' => 300]
    ];
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'add':
                $new_id = count($_SESSION['services']) + 1;
                $_SESSION['services'][] = [
                    'id' => $new_id,
                    'name' => $_POST['service_name'],
                    'price' => $_POST['service_price']
                ];
                break;
                
            case 'delete':
                $delete_id = $_POST['service_id'];
                foreach ($_SESSION['services'] as $key => $service) {
                    if ($service['id'] == $delete_id) {
                        unset($_SESSION['services'][$key]);
                        break;
                    }
                }
                // Re-index array
                $_SESSION['services'] = array_values($_SESSION['services']);
                break;
                
            case 'edit':
                $edit_id = $_POST['service_id'];
                foreach ($_SESSION['services'] as $key => $service) {
                    if ($service['id'] == $edit_id) {
                        $_SESSION['services'][$key]['name'] = $_POST['service_name'];
                        $_SESSION['services'][$key]['price'] = $_POST['service_price'];
                        break;
                    }
                }
                break;
        }
    }
}

// Get service for editing if edit_id is provided
$editing_service = null;
if (isset($_GET['edit_id'])) {
    foreach ($_SESSION['services'] as $service) {
        if ($service['id'] == $_GET['edit_id']) {
            $editing_service = $service;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Manager</title>

</head>

<body>
    <h1><?php echo $editing_service ? 'Edit Service' : 'Add Service'; ?></h1>
    
    <form method="POST">
        <input type="hidden" name="action" value="<?php echo $editing_service ? 'edit' : 'add'; ?>">
        <?php if ($editing_service): ?>
            <input type="hidden" name="service_id" value="<?php echo $editing_service['id']; ?>">
        <?php endif; ?>
        
        <label for="service_name">Service Name:</label>
        <input type="text" name="service_name" 
               value="<?php echo $editing_service ? htmlspecialchars($editing_service['name']) : ''; ?>" 
               placeholder="Service Name" required>
        
        <label for="service_price">Service Price:</label>
        <input type="number" name="service_price" 
               value="<?php echo $editing_service ? $editing_service['price'] : ''; ?>" 
               placeholder="Service Price" required>
        
        <button type="submit">
            <?php echo $editing_service ? 'Update Service' : 'Add Service'; ?>
        </button>
        
        <?php if ($editing_service): ?>
            <a href="test.php"><button type="button">Cancel</button></a>
        <?php endif; ?>
    </form>

    <hr>
    <h1>List of Services</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Service Name</th>
                <th>Price ($)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($_SESSION['services'])): ?>
                <tr>
                    <td colspan="4">No services found. Add some services above!</td>
                </tr>
            <?php else: ?>
                <?php foreach ($_SESSION['services'] as $service): ?>
                    <tr>
                        <td><?php echo $service['id']; ?></td>
                        <td><?php echo htmlspecialchars($service['name']); ?></td>
                        <td>$<?php echo number_format($service['price'], 2); ?></td>
                        <td>
                            <!-- Edit button -->
                            <a href="test.php?edit_id=<?php echo $service['id']; ?>">
                                <button type="button" class="edit-btn">Edit</button>
                            </a>
                            
                            <!-- Delete button with confirmation -->
                            <form method="POST" style="display: inline;" 
                                  onsubmit="return confirm('Are you sure you want to delete this service?')">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="service_id" value="<?php echo $service['id']; ?>">
                                <button type="submit" class="delete-btn">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
