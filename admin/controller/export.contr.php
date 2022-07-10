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
    }
}


class ExportActivityContr extends ExportActivity
{

    private $file;
    private $headers;
    public function __construct($file, $headers)
    {
        $this->file = $file;
        $this->headers = $headers;
    }

    public function exportAct()
    {
        fputcsv($this->file, $this->headers);
        $data = $this->getActivity();

        foreach ($data as $rows) {
            $ActData = array($rows['title'], $rows['type'], $rows['date'], $rows['venue'], $rows['department'], $rows['division'], $rows['user_id'], $rows['duration'], $rows['ci_points'], $rows['year'], $rows['semester'], $rows['description']);
            fputcsv($this->file, $ActData);
        }
    }
}
