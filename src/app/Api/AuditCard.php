<?php
namespace App\Api;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/**
 * 脱敏数据
 *
 * @author 
 */
class AuditCard extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getList' => [
      
        'channel_id' => 'channel_id|string|false||流水号',
        'source' => 'source|string|false||渠道',
        'bank_id' => 'bank_id|int|false||银行id',
        'order' => 'order|string|false||排序',
        'fields' => 'fields|string|false||字段',
        'begin_date' => 'begin_date|string|false||开始时间',
        'end_date' => 'end_date|string|false||结束时间',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false|50|每页条数'
      
      ],

      'download' => [

        'channel_id' => 'channel_id|string|false||渠道id',
        'source' => 'source|string|false||渠道编码',
        'begin_date' => 'begin_date|string|false||开始时间',
        'end_date' => 'end_date|string|false||结束时间',
        'bank_id' => 'bank_id|int|false||银行id',
        'fields' => 'fields|string|false||字段'

      ]
    
    
    ]);
  
  }

  
  /**
   * 查询列表
   * @desc 查询列表
   *
   * @return array list
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 下载脱敏数据
   * @desc 下载脱敏数据
   *
   * @return array list
   */
  public function download() {

    $data = $this->retriveRuleParams(__FUNCTION__);

    $result = $this->dm->download($data);

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Type:application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="脱敏数据.xlsx"');
    header('Cache-Control: max-age=0');
      
    $spreadsheet = new Spreadsheet();

    $titles = array(
    
      'source' => '渠道码', 
      'mname' => '银行', 
      'state' => '状态', 
      'name' => '姓名', 
      'phone' => '手机号', 
      'in_date' => '进卡时间', 
      'audit_date' => '审核时间', 
      'created_at' => '导入时间'
    );

    $fields = explode(',', $data['fields']);

    $sheet = $spreadsheet->getActiveSheet();

    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    foreach($fields as $key => $field) {

      foreach($titles as  $title) {

        $sheet->setCellValue("{$characters[$key]}1", $titles[$field]);
      
      }

    }

    $sheet->getColumnDimension('A')->setWidth(30);

    $row = 2;

    foreach($result as $index => $order) {

      $column = 0;

      $valueOrder = [];

      foreach($fields as $field) {

        if ($field == 'state') {

          $valueOrder[$field] = $order[$field] == 1 ? '核卡' : '拒绝';

        } else {

            $valueOrder[$field] = $order[$field];

        }


      }

      foreach($valueOrder as $value) {

        $cell = "{$characters[$column]}{$row}";

        $sheet->setCellValue($cell, $value);

        $column++;

      }

      $row++;

    }

    $writer = new Xlsx($spreadsheet);

    $writer->save("php://output");

    exit;

  }


}
