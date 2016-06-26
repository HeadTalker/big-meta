<h2>Big Meta is a meta tag visualization dashboard.  Analyze meta tag results from as many sites as you want.</h2>

![Big Meta Dashboard photo](http://i.imgur.com/7rFgMLr.png)

<h3>Installation:</h3>

1.  Clone the repository
  ```
  git clone https://github.com/HeadTalker/big-meta.git
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
  php main/php/big-meta.php
  ```


6.  Launch the app

  ```
  # This may vary depending where you installed the app and/or your environment
  http://localhost/big-meta/main/
  ```


<h3>Building/Making Edits</h3>

We use <a href="https://www.npmjs.com/">NPM</a>, <a href="http://bower.io/">Bower</a>, and <a href="http://gruntjs.com/">Grunt</a>.  We recommend you use these tools to make changes to the app.

<h5>Node Modules Install:</h5>

```
npm install
```

<h5>Bower Components Install:</h5>

```
bower install
```

<h5>Running Grunt Tasks Continuously:</h5>

```
grunt
```
<h5>Running Grunt Tasks Once:</h5>

```
grunt build
```

<h3>Bugs and issues</h3>

You can report them <a href="https://github.com/HeadTalker/big-meta/issues">here</a>

<h3>Contributing</h3>

Anyone is welcome to contribute.   You can contribute in a few ways.

1.  Submitting a pull request with fixes, improvements, or new features
2.  Reporting bugs or issues <a href="https://github.com/HeadTalker/big-meta/issues">here</a>
3.  Providing feedback or suggestions
