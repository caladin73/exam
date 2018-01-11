<?php

function call_sp($customerNumber)
{
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=classicmodels", 'root', '');

        // execute the stored procedure
        $sql = 'CALL get_order_by_cust(:no,@shipped,@canceled,@resolved,@disputed)';
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':no', $customerNumber, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();

        // execute the second query to get values from OUT parameter
        $r = $pdo->query("SELECT @shipped,@canceled,@resolved,@disputed")
            ->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            printf('Shipped: %d, Canceled: %d, Resolved: %d, Disputed: %d',
                $r['@shipped'],
                $r['@canceled'],
                $r['@resolved'],
                $r['@disputed']);
        }
    } catch (PDOException $pe) {
        die("Error occurred:" . $pe->getMessage());
    }
}

call_sp(141);