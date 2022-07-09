<?php

class ExportUserContr extends ExportUser
{

    private $file;
    private $headers;

    public function __construct($file, $headers)
    {
        $this->file = $file;
        $this->headers = $headers;
    }


    public function export()
    {
        fputcsv($this->file, $this->headers);
        $data = $this->getInfo();

        foreach ($data as $rows) {
            $linedata = array($rows['user_id'], $rows['first_name'], $rows['middle_name'], $rows['last_name'], $rows['address'], $rows['email'], $rows['password'], $rows['contact_number'], $rows['department'], $rows['division'], $rows['status'], $rows['type'], $rows['date_created'], $rows['date_updated']);
            fputcsv($this->file, $linedata);
        }

        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=user.csv');
    }
}
