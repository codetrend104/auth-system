<?php
/* check data sent as POST */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
        getData();
}

/*delete data with catch id  */
function getData()
{
        try {
                require "/Users/ghorb/Desktop/flatlab/connection.php";
                $id = (int) $_POST["id"];
                $query = "DELETE FROM users WHERE id = ? ";
                $stmt = $connection->prepare($query);
                $stmt->bindValue(1, $id);
                $stmt->execute();
                $data = [
                        'message' => 'Success',
                        'request' => $_POST["id"]
                ];
                var_dump(json_encode($data));
        } catch (\Throwable $th) {
                $data = [
                        'message' => $th->getMessage(),
                        'request' => $_POST["id"]
                ];

                var_dump(json_encode($data));
        }
}
