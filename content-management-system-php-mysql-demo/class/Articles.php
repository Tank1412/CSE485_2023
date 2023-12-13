<?php
class Articles {
    private $postTable;
    private $categoryTable;
    private $userTable;
    private $conn;

    public function __construct($postTable, $categoryTable, $userTable, $conn) {
        $this->postTable = $postTable;
        $this->categoryTable = $categoryTable;
        $this->userTable = $userTable;
        $this->conn = $conn;
    }

    public function getArticles() {
        $query = '';
        if ($this->id) {		
            $query = " AND p.id ='" . $this->id . "'";
        }
        $sqlQuery = "
            SELECT p.id, p.title, p.message, p.category_id, u.first_name, 
            u.last_name, p.status, p.created, p.updated, c.name as category
            FROM " . $this->postTable . " p
            LEFT JOIN " . $this->categoryTable . " c ON c.id = p.category_id
            LEFT JOIN " . $this->userTable . " u ON u.id = p.userid
            WHERE p.status ='published' $query ORDER BY p.id DESC";
        
        $stmt = $this->conn->prepare($sqlQuery);		
        $stmt->execute();
        $result = $stmt->get_result();	
        return $result;	
    }
}

// Example usage:
$postTable = 'posts';
$categoryTable = 'categories';
$userTable = 'users';
$conn = new PDO("mysql:host=localhost;dbname=your_database_name", "your_username", "your_password");

$articles = new Articles($postTable, $categoryTable, $userTable, $conn);
$results = $articles->getArticles();