<?php

/**
* Require Config
*/

require_once( __DIR__ . '/../../config.php' );

/**
* Big Meta Visuals Class
*/

class big_meta_visuals {

  /**
  * Constructor
  */

  public function __construct() {
    $this->config = config();

    try {

      $db = new PDO( "mysql:host={$this->config['host']};dbname={$this->config['db']}", $this->config['user'], $this->config['pw'] );

    } catch ( PDOException $e ) {

      echo _( 'Failed Connecting To Database' ) . PHP_EOL;

    }

    $this->db = $db;
  }

  /**
  * Returns the amount of rows in the database
  *
  * @return int $total The total row count
  */

  public function total_rows() {
    $total = (int) $this->db->query("SELECT COUNT(id) FROM {$this->config['table']}")->fetchColumn();
    return $total;
  }

  /**
  * Returns the amount of sites in the database
  *
  * @return int $total The total sites count
  */

  public function total_sites() {
    $total = (int) $this->db->query("SELECT COUNT(DISTINCT site) FROM {$this->config['table']}")->fetchColumn();
    return $total;
  }

  /**
  * Returns the amount of unique meta tags in the database
  *
  * @return int $total The total unique meta tags count
  */

  public function total_unique_tags() {
    $total = (int) $this->db->query("SELECT COUNT(DISTINCT meta_key) FROM {$this->config['table']}")->fetchColumn();
    return $total;
  }

  /**
  * Returns Most popular meta tags
  *
  * @return array $popular The most popular meta tags  and counts
  */

  public function most_popular_tags() {
    $popular = $this->db->query("SELECT COUNT(meta_key), meta_key FROM {$this->config['table']} GROUP BY meta_key ORDER BY COUNT(meta_key) DESC LIMIT 100;")->fetchAll();
    return $popular;
  }

  /**
  * Most popular meta tags table
  */

  public function most_popular_tags_table() {

    $popular = $this->most_popular_tags();

    $i = 1;

    foreach( $popular as $row ) {
      echo "<tr>";
      echo "<th>" . $i      . "</th>";
      echo "<th>" . $row[1] . "</th>";
      echo "<th>" . $row[0] . "</th>";
      echo "</tr>";
      $i++;
    }
  }

  /**
  * Returns Most popular meta values
  *
  * @return array $popular The most popular meta values and counts
  */

  public function most_popular_values() {
    $popular = $this->db->query("SELECT COUNT(meta_value), meta_value FROM {$this->config['table']} GROUP BY meta_value ORDER BY COUNT(meta_value) DESC LIMIT 100;")->fetchAll();
    return $popular;
  }

  /**
  * Most popular meta values table
  */

  public function most_popular_values_table() {

    $popular = $this->most_popular_values();

    $i = 1;

    foreach( $popular as $row ) {
      echo "<tr>";
      echo "<th>" . $i      . "</th>";
      echo "<th>" . $row[1] . "</th>";
      echo "<th>" . $row[0] . "</th>";
      echo "</tr>";
      $i++;
    }
  }

  /**
  * Returns Most popular viewports
  *
  * @return array $popular The most popular viewports and counts
  */

  public function most_popular_viewports() {
    $popular = $this->db->query("SELECT COUNT(id) as count, meta_value FROM {$this->config['table']} WHERE meta_key = 'viewport' GROUP BY meta_value ORDER BY count DESC LIMIT 100;")->fetchAll();
    return $popular;
  }

  /**
  * Most popular viewports table
  */

  public function most_popular_viewports_table() {

    $popular = $this->most_popular_viewports();

    $i = 1;

    foreach( $popular as $row ) {
      echo "<tr>";
      echo "<th>" . $i      . "</th>";
      echo "<th>" . $row[1] . "</th>";
      echo "<th>" . $row[0] . "</th>";
      echo "</tr>";
      $i++;

    }
  }

  /**
  * Returns Most popular generators
  *
  * @return array $popular The most popular generators and counts
  */

  public function most_popular_generators() {
    $popular = $this->db->query("SELECT COUNT(id) as count, meta_value FROM {$this->config['table']} WHERE meta_key = 'generator' GROUP BY meta_value ORDER BY count DESC LIMIT 100;")->fetchAll();
    return $popular;
  }

  /**
  * Most popular generators table
  */

  public function most_popular_generators_table() {

    $popular = $this->most_popular_generators();

    $i = 1;

    foreach( $popular as $row ) {
      echo "<tr>";
      echo "<th>" . $i      . "</th>";
      echo "<th>" . $row[1] . "</th>";
      echo "<th>" . $row[0] . "</th>";
      echo "</tr>";
      $i++;

    }
  }

}
