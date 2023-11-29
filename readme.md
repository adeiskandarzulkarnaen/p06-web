## Praktikum Pemrograman Web

Membuat Database `db_tamu`

```SQL
CREATE DATABASE db_tamu;
```

Membuat table `tamu`

```SQL
CREATE TABLE tamu(
    idtamu INT NOT NULL AUTO_INCREMENT,
    nmtamu VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    PRIMARY KEY(idtamu)
);
```
