<?php
namespace App\Repositories;
use App\Models\User;

Class CustomerRepository{

    use BaseRepository;
    protected $model;

    public function __construct()
    {
        $this->model = new User();
    }


}
?>
