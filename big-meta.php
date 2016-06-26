<?php

/**
* Require Config
*/

require_once __DIR__ . '/config.php';


/**
* Big Meta Class
*/

class big_meta {


  /**
  * Constructor
  */

  public function __construct() {
    $this->config = config();
  }
  
  /**
  * Get Sites
  *
  * @return array $sites List of website domains 
  *
  * @link http://stackoverflow.com/questions/6159683/read-each-line-of-txt-file-to-new-array-element/6159705#6159705
  */

  public function get_sites() {
    $sites = file( $this->config['file'], FILE_IGNORE_NEW_LINES );
    return $sites; 
  }

  /**
  * Go to sites and get meta tags 
  * Update the database with them
  *
  * @link http://php.net/manual/en/function.get-meta-tags.php
  * @link http://stackoverflow.com/questions/6183927/exception-handling-with-get-meta-tags-get-headers/6184127
  */
  
  public function go() {
    $sites  = $this->get_sites();
    try {

      $dbh = new PDO( "mysql:host={$this->config['host']};dbname={$this->config['db']}", $this->config['user'], $this->config['pw'] );

      foreach( $sites as $site ) {

        $site      = 'http://' . $site;
        $headers   = array();
        $metatags  = array();
        $validhost = filter_var( gethostbyname( parse_url( $site, PHP_URL_HOST ) ), FILTER_VALIDATE_IP );

        if ( $validhost ) {
          
          $headers = get_headers( $site, 1 );

          if ( substr( $headers[0], 9, 3 ) == '200' || substr( $headers[0], 9, 3 ) == '301' ) {

            $meta_tags = get_meta_tags( $site );
            
            if ( is_array( $meta_tags ) ) {
              foreach( $meta_tags as $meta_key => $meta_value ) {
                $sql       = "INSERT INTO `{$this->config['db']}`.`{$this->config['table']}` (`id`, `site`, `meta_key`, `meta_value`, `timestamp`) VALUES (NULL, '$site', '$meta_key', '$meta_value', CURRENT_TIMESTAMP);";
                $statement = $dbh->prepare( $sql );
                $count     = $statement->execute();
              }
            }

            echo _( 'Meta tags have been scraped from' ) . ' ' . $site . PHP_EOL;
            
          } else {
            echo _( 'Failed to get meta tags from' ) . ' ' . $site . PHP_EOL;
          }
        }

      }

    } catch ( PDOException $e ) {

      echo _( 'Failed Connecting To Database' ) . PHP_EOL;

    }

  }


}

$big_meta = new big_meta();

$big_meta->go();
