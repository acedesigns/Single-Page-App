<?php

require_once '/includes/constance.php';
// http://www.sitepoint.com/role-based-access-control-in-php/

Class Database {

	private $conn;

/////////////////////////////////////////////////////////////////////////////////////////////////
	function __construct() {

		try {
			$this->conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASS);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $error) {
			echo 'Connection failed: ' . $error->getMessage();
		}
	}

////////////////////////////////////////////////////////////////////////////////////////////////
    function getJsonData() {

		$query = "SELECT
			City.`Name`,
			Country.Region,
			Country.Continent,
			CountryLanguage.`Language`,
			City.Population AS City_Population,
			Country.Population AS Country_Population,
			Country.IndepYear,
			City.District,
			Country.GovernmentForm,
			Country.HeadOfState,
			Country.`Name` AS Country
			FROM
			 Country
			 LEFT JOIN City ON Country.`Code` = City.CountryCode
			 INNER JOIN CountryLanguage ON City.CountryCode = CountryLanguage.CountryCode
			WHERE City.CountryCode = Country.Code
			ORDER BY RAND()";

		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		$result = $stmt->fetchAll( PDO::FETCH_ASSOC );
		$json = json_encode( $result );

		$fp = fopen('/json/results.json', 'w+');
		fwrite($fp, $json);
		fclose($fp);
	}


}


// Instantiate the class
$database = new Database();
