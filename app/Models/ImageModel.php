<?php
 namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ImageModel extends Model
{
    protected $table = 'images1';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'image'];
}