<?php namespace App\Models;

use CodeIgniter\Model;

class Alumni extends Model
{
    protected $table      = 'alumni';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id','Class','Pix','Name','Date_of_Birth','State_of_Origin','Phone_Number','Email_Address','Favourite_Food','Hobbies','Likes','Dislikes','Future_Ambition','Role_Model','Mentor','Post_Held','Parting_Shot'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}