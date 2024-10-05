<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Add Client</title>
</head>
<body>
    <h1>Test Add Client</h1>
    <form action="add_client.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="client_contact">Contact Information:</label>
        <input type="text" name="client_contact" id="client_contact" required><br>

        <label for="client_type">Client Type:</label>
        <select name="client_type" id="client_type" required>
            <option value="child">Child</option>
            <option value="adult">Adult</option>
        </select><br>

        <button type="submit">Add Client</button>
    </form>

    <h1>Test: Update Client</h1> 
    <form action="update_client.php" method="post">
        <label for="client_id">Client ID</label>
        <input type="number" name="client_id" id="client_id"><br> 

        <label for="name">Client Name</label>
        <input type="text" name="name" id="name"><br>
       
        <label for="client_contact">Client Contact</label>
        <input type="text" name="client_contact" id="client_contact"><br>
                
        <label for="client_type">Client Type</label>
        <select name="client_type" id="client_type">
            <option value="child">Child</option>
            <option value="adult">Adult</option>
        </select>
        
        <button type="submit">Update Client</button>
    </form>

    <h1>Delete Client</h1>
    <form action="delete_client.php" method="post">
    <label for="client_id">Client ID</label>
    <input type="number" name="client_id" id="client_id">
    <button type="submit">Delete Client</button></form>
</body>
</html>