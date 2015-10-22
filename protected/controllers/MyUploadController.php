<?php
class MyUploadController extends Controller{
	public function actionIndex() {
		$this->render("index");
	}
	
	public function actionUpload(){
		$this->redirect($this->createUrl("myupload/index"));
	}
	
	public function actionRepairUpload(){
		$index  = $this->request->getParam("selectedIndex");
		$pre_id = $this->request->getParam("upload_save_to_db_id");
	
		$inputFileName = "repair_attached_file".$index;
		$attach = CUploadedFile::getInstanceByName($inputFileName);
	
		$retValue = "";
		if($attach == null){
			$retValue = "提示：不能上传空文件。";
		}else if($attach->size > 2000000){
			$retValue = "提示：文件大小不能超过2M。";
		}else {
			$retValue = '恭喜，上传成功！';
			if($pre_id == 0){
				$f = file_get_contents($attach->tempName);
				$a = new Attachment();
				$a->ref_type = "failParts";
				$a->data = $f;
				$a->file_path = $attach->name;
				$a->save();
				$cur_id = $a->id;
			}else{
				$trans = Yii::app()->db->beginTransaction();
				try{
					$f = file_get_contents($attach->tempName);
					$a = new Attachment();
					$a->ref_type = "failParts";
					$a->data = $f;
					$a->file_path = $attach->name;
					$a->save();
					$cur_id = $a->id;
	
					$pre = Attachment::model()->findByPk($pre_id);
					$pre->delete();
					$trans->commit();
					}catch(Exception $e){
						$retValue = $e->getMessage();
						$cur_id = 0;
						$trans->rollback();
					}
					}
					echo "<script type='text/javascript'>window.top.window.successUpload('{$retValue}',$cur_id,$index)</script>";exit();
					}
					echo "<script type='text/javascript'>window.top.window.stopUpload('{$retValue}',$index)</script>";
					}
}