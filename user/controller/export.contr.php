<?php

class ExportContr extends Export
{
  private $file;
  private $header;
  private $id;

  public function __construct($file, $header, $id)
  {
    $this->file = $file;
    $this->header = $header;
    $this->id = $id;
  }


  public function export()
  {

    fputcsv($this->file, $this->header);

    $data = $this->exportinfo($this->id);


    foreach ($data as $rows) {
      $linedata = array($rows['title'], $rows['type'], $rows['date_requested'], $rows['rendered_hours'], $rows['ci_points'], $rows['request_status']);

      fputcsv($this->file, $linedata);
    }
  }
}
