Big Meta is a meta tag visualization dashboard.  Analyze meta tag results from as many sites as you want.

<h3>Installation:</h3>

1.  Clone the repository
  ```
  git clone https://github.com/HeadTalker/uptime-robot.git
  ```

2. Create a MYSQL database and table

  ```
  CREATE DATABASE big_meta;
  ```

  ```
  CREATE TABLE `sites` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `site` varchar(255) COLLATE utf8_bin NOT NULL,
    `meta_key` varchar(255) COLLATE utf8_bin NOT NULL,
    `meta_value` varchar(255) COLLATE utf8_bin NOT NULL,
    `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `unique_index` (`site`,`meta_key`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
  ```

3.  Copy config-sample.php name it config.php

  ```
  cd big-meta && cp config-sample.php config.php
  ```

4.  Edit config.php and put your credentials

5.  Scrape some meta tags

  ```
  php main/big-meta.php
  ```


6.  Launch the app

  ```
  # This may vary depending where you installed the app and/or your environment
  http://localhost/big-meta/main/
  ```
