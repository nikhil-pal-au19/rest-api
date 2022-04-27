$app->get('/books', function() {

require_once('db.php');

$query = "select * from library order by book_id";

$result = $connection->query($query);

// var_dump($result);

while ($row = $result->fetch_assoc()){

$data[] = $row;

}

echo json_encode($data);

});
qwkdf sdfijfi 
jdopfkxj
json_decode