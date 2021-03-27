<?php namespace App\Models;

use CodeIgniter\Model;

class WordContentModel extends Model
{
	protected $table = 'word_content';
	protected $primaryKey = 'idx';	// find() �Լ����� ���

	protected $useAutoIncrement = true;	// �⺻Ű �ڵ� ���� ��뿩��

	protected $returnType = 'array';

	protected $useSoftDeletes = true;	// delete ȣ�� �� deleted_at �ʵ带 ����
	protected $deletedField = 'status';

	// // save, insert, update ��� �ʵ�
	protected $allowedFields = [
		'word_idx','content','status','stime','dtime'
	];

	protected $useTimestamps = false;
	protected $createdField = '';
	protected $updatedField = '';

	protected $skipValidation = false;
}
?>