# Drupal-10-CWV
Proof of concept Drupal 10+ project optimized for CWV scores.

## How to use this project
To run this project, please use [DDEV](https://ddev.readthedocs.io/en/latest/).

### Provided ddev snapshot
Copy the snapshot from the `ddev-snapshots` directory into the ddev folder, and then run `ddev snapshot restore`.

```
cp ddev-snapshots/mindsing-cwv-drupal_20241012112907-mariadb_10.11.gz .ddev/db_snapshots/ && ddev snapshot restore
```
