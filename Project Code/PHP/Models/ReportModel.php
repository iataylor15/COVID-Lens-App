<?php

require_once '../includes/autoload.php';

/**
 * Description of ReportModel
 *
 * @author isaactaylor
 */
class ReportModel {
    
    private $connection;

    /**
     * Constructor that starts a database connection for model to interact with
     */
    public function __construct() {
        $this->connection = new DatabaseAdapter(new MysqlConnector());
    }

     /**
     * Terminates the connection started by the Constructor
     */
    function __destruct() {
        $this->connection = null;
    }

<<<<<<< HEAD

    public function createReport(Report $report) {
        $preparedStmt = "INSERT INTO " . $report->getTableName() . " (timeSubmitted, residenceHall, age, phoneNumber, affiliation, locationID, reportStatus, reportInfo, situationDesc, submitterID, confirmerID) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
=======
    /**
     * This function creates a report in the database
     *
     * @param Report $report - A DataObject that represents a report
     * @return array
     */
    public function createReport(Report $report) {
        $preparedStmt = "INSERT INTO " . $report->getTableName() . " (reportID, locationID,"
                . " residenceHall, reportStatus, age, reportInfo, phoneNumber, "
                . "situationDesc, affiliation, confirmerID)"
                . " VALUES (?,?,?,?,?,?,?,?,?,?)";
>>>>>>> 03dd47a3c4cf84b93ad4a57ee80f74e158388523
        $report->setSql($preparedStmt);
        $response = $this->connection->create($report);
        return $response;
    }

     /**
     * This function retrieves a reports info from the database
     *
     * @param Report $report - A DataObject that represents a report
     * @return array
     */
    public function readReport(Report $report) {
<<<<<<< HEAD
        $preparedStmt = "SELECT * FROM " . $report->getTableName() . " WHERE submitterID=?";
        $report->setSql($preparedStmt);
=======
        $preparedStmt = "SELECT * FROM " . $report->getTableName() . " WHERE reportID=?";
>>>>>>> 03dd47a3c4cf84b93ad4a57ee80f74e158388523
        $response = $this->connection->read($report);
        return $response;
    }

     /**
     * This function retrieves a reports info from the database
     *
     * @param Report $report - A DataObject that represents a report
     * @return array
     */
    public function updateReport(Report $report) {
        $preparedStmt = "UPDATE" . $report->getTableName() . " SET confirmerID=?, "
<<<<<<< HEAD
                . "WHERE submitterID=?";
        $report->setSql($preparedStmt);
=======
                . "WHERE reportID=?";
>>>>>>> 03dd47a3c4cf84b93ad4a57ee80f74e158388523
        $response = $this->connection->delete($report);
        return $response;
    }

     /**
     * This function removes a reports info from the database
     *
     * @param Report $report - A DataObject that represents a report
     * @return array
     */
    public function deleteReport(Report $report) {
<<<<<<< HEAD
        $preparedStmt = "DELETE FROM " . $report->getTableName() . " WHERE submitterID=?";
        $report->setSql($preparedStmt);
=======
        $preparedStmt = "DELETE FROM " . $report->getTableName() . " WHERE reportID=?";
>>>>>>> 03dd47a3c4cf84b93ad4a57ee80f74e158388523
        $response = $this->connection->delete($report);
        return $response;
    }

     /**
     * This function retrieves all reports from the database
     *
     * @param Report $report - A DataObject that represents a report
     * @return array
     */
    public function getAllReport(Report $report) {
        $preparedStmt = "SELECT * FROM " . $report->getTableName();
        $report->setSql($preparedStmt);
        $response = $this->connection->read($report);
        return $response;
    }

}
