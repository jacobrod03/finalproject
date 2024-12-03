<?php
function selectEmployees() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT employee_id, employee_name, phone_number FROM `employee`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertEmployees($eName, $ePhone) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `employee` (`employee_name`, `phone_number`) VALUES (?, ?)");
        $stmt->bind_param("ss", $eName, $ePhone);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateEmployees($eName, $ePhone, $eid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `employee` set `employee_name` = ?, `phone_number` = ? where employee_id = ?");
        $stmt->bind_param("ssi", $eName, $ePhone, $eid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteEmployees($eid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from employee where employee_id = ?");
        $stmt->bind_param("i", $eid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
