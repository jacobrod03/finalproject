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

function selectTeamsbyEmployee($eid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT t.team_id, team_number, team_description, location, email FROM `team` t join company c on c.team_id = t.team_id where c.employee_id =?");
        $stmt->bind_param("i", $eid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
