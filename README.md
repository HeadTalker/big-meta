
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
