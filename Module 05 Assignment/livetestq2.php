<?php
class UserSaver {
    private $username;
    private $email;
    
    public function __construct(string $username, string $email) {
        $this->username = $username;
        $this->email = $email;
    }
    
    public function save(): void {
        try {
            $file = fopen("users.txt", "a");
            if ($file === false) {
                throw new Exception("File not accessible");
            }
            
            $line = $this->username . " - " . $this->email;
            fwrite($file, $line);
            fclose($file);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}


$user2 = new UserSaver("sara", "sara@example.com");
$user2->save();

print_r($user2);  
?>