<?php
function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_number, team_description FROM `team`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertTeams($tNumber, $tDesc) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `team` (`team_number`, `team_description`) VALUES (?, ?)");
        $stmt->bind_param("ss", $tNumber, $tDesc);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateTeams($tNumber, $tDesc, $tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `team` set `team_number` = ?, `team_description` = ? where team_id = ?");
        $stmt->bind_param("ssi", $tNumber, $tDesc, $tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteTeams($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from team where team_id = ?");
        $stmt->bind_param("i", $tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
