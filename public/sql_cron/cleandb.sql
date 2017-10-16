DELETE FROM terms WHERE term REGEXP '^[^ ]+[ ]+[^ ]+$';
DELETE FROM terms WHERE term NOT LIKE '% %';
