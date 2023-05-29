<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boac Travels</title>
    <link rel="stylesheet" href="contact.css">
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="destination.php">Destination</a></li>
                <li><a href="about.php">About</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1>Contact Us</h1>
        <p>We would love to respond to your queries and help you.
            Feel free to get in touch</p>
            <div class="contact-box">
                <div class="contact-left">
                    <h3>Sent your request</h3>
                    <form action="contact.php" method="post">
                        <div class="input-row">
                            <div class="input-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="">
                            </div>
                            <div class="input-group">
                                <label>Phone</label>
                                <input type="text" name="phone" placeholder="">
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-group">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="">
                            </div>
                            <div class="input-group">
                                <label>Subject</label>
                                <input type="text" name="subject" placeholder="">
                            </div>
                        </div>
                        <label>Message</label>
                        <textarea name="message" rows="5" placeholder="Your Message"></textarea>
                        <button type="submit">Send</button>
                    </form>
            </div>
            <div class="contact-right">
                <h3>Reach Us</h3>

                <table>
                    <tr>
                        <td>Email</td>
                        <td>pinedarheabel@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>+6392086299678</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>Tanza Boac Marinduque</td>
                    </tr>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15520.841589929936!2d121.8353318278883!3d13.46112419857582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a3264d4e9793ef%3A0x9c452951e74697d6!2sTanza%2C%20Boac%2C%20Marinduque!5e0!3m2!1sen!2sph!4v1685084596175!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </table>


            
            </div>
         </div>
    </div>


</body>
</html>

<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the required fields are present
    if (isset($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
        // Get the form data
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Create the XML content
        $xml = "<?xml version='1.0' encoding='UTF-8'?>\n";
        $xml .= "<contact>\n";
        $xml .= "  <name>$name</name>\n";
        $xml .= "  <phone>$phone</phone>\n";
        $xml .= "  <email>$email</email>\n";
        $xml .= "  <subject>$subject</subject>\n";
        $xml .= "  <message>$message</message>\n";
        $xml .= "</contact>";

        // Save the XML content to the file
        $file = 'contact.xml';
        file_put_contents($file, $xml);

        // Display a success message
        echo "Data has been saved to $file.";
    }
     else {
        // Required fields are missing
        echo "Please fill in all the required fields.";
    }
}
?>
