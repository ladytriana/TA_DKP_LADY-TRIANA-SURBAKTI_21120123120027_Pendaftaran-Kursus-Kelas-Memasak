<?php
class ContactPage {
    private $errors = [];
    private $message = "";

    // Setters
    public function setMessage($message) {
        if (empty($message)) {
            $this->errors[] = "Pesan tidak boleh kosong.";
        } else {
            $this->message = $message;
        }
    }

    // Getters
    public function getErrors() {
        return $this->errors;
    }

    public function getMessage() {
        return $this->message;
    }

    // Validate and save contact
    public function save() {
        if (empty($this->errors)) {
            // Simulate saving to a database
            // Here you would typically run a database insert query
            return "Pesan Anda telah berhasil dikirim.";
        } else {
            return "Terdapat kesalahan dalam pengisian formulir.";
        }
    }

    // Method to handle index page display
    public function index() {
        include 'contact_form.php';
    }
}

// Function to handle form submission
function handleFormSubmission() {
    $contact = new ContactPage();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $contact->setMessage($_POST["message"]);

        $result = $contact->save();

        if (empty($contact->getErrors())) {
            echo "<p>$result</p>";
        } else {
            foreach ($contact->getErrors() as $error) {
                echo "<p>$error</p>";
            }
        }
    }
    $contact->index();
}

handleFormSubmission();
?>
