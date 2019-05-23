<?php
require_once(dirname(__FILE__).'/../setting.php');
require_once(PATH_PHP.'functions.php');

//データベースとの通信をする
class DataBase
{
  //プライベートプロパティ
  private $dblink = null;

  //パブリックプロパティ
  public $previousQuery = "";
  public $result = null;

  //コンストラクタ
  public function __construct()
  {
    $this->connect();
  }

  //デストラクタ
  public function __destruct()
  {
    $this->disconnect();
  }

  //メソッド
  public function Show()
  {
    //echo 'database : '.$this->dblink.'<br>';
    if($this->dblink != null)
    {
      echo 'connecting is successful!<br>';
    }
    else
    {
      echo 'connecting is false...<br>';
    }
  }

  /*
   * SQLを実行する
   * 実行結果は$this->resultに格納される．
   */
  public function ExecuteSQL($query)
  {
    //sqlの実行
    echo $query;
    $result = $this->dblink->query($query);
    if(!$result)
    {
      error('SELECTクエリに失敗しました:'.$query.mysql_error());
    }

    //取得したデータの格納
    $this->result = fetch_array($result);
  }

  /*
   * データベースに接続する
   */
  private function connect()
  {
    $this->dblink = connectingMySQL();
  }

  /*
   * データベースから切断する
   */
  private function disconnect()
  {
    closingMySQL($this->dblink);
    $this->dblink = null;
  }
}

//ユーザ情報を格納するテーブル
class UserTable extends DataBase
{
  //プロパティ
  public $id = -1;          //ユーザID
  public $nicname = '';     //ユーザ名（ニックネーム）
  public $firstname = '';   //名
  public $lastname = '';    //姓
  public $age = -1;         //年齢
  public $departmentId = "";//学科
  public $grade = -1;       //学年

  //コンストラクタ
  public function __construct()
  {
    parent::__construct();
    $this->id = 0;
    $this->nicname = 'iikyara';
  }

  //デストラクタ
  public function __destruct()
  {
    parent::__destruct();
  }

  //メソッド
  public function Show2()
  {
    echo $this->id.'<br>';
    echo $this->nicname.'<br>';
    echo $this->firstname.'<br>';
    echo $this->lastname.'<br>';
    echo $this->age.'<br>';
    echo $this->departmentId.'<br>';
    echo $this->grade.'<br>';
    $this->Show();
  }
}

?>
