<?php
namespace App\Api;

/**
 * 上传文件
 *
 * @author Meroc Chen
 */
class UploadFiles extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'upload' => [
      
        'upfile' => [
        
          'name' => 'upfile',
          'type' => 'file',
          'min' => 0,
          'max' => 1024 * 1024 * 1024,
          'range' => [ 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel' ],
          'ext' => [ 'xlsx', 'xls' ]
        
        ],

        'bank_id' => 'bank_id|int|true||银行id'
      
      ],

      'loanData' => [
      
        'upfile' => [
        
          'name' => 'upfile',
          'type' => 'file',
          'min' => 0,
          'max' => 1024 * 1024 * 1024,
          'range' => [ 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel' ],
          'ext' => [ 'xlsx', 'xls' ]
        
        ],
      
        'loan_id'  => 'loan_id|int|true||贷款'

      ]
    
    ]);
  
  }

  /**
   * 上传文件
   * @desc 上传文件
   *
   * @return array data
   */
  public function upload() {
  
    return $this->dm->upload($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 上传贷款数据
   * @desc 上传贷款数据
   *
   * @return array data
   */
  public function loanData() {
  
    return $this->dm->loanData($this->retriveRuleParams(__FUNCTION__));  
  
  }

}
