CREATE VIEW discharge_view
AS 
SELECT alasan_pemecatan, employees_id , employees.name FROM pemecatans LEFT JOIN employees on pemecatans.employees_id = employees.id