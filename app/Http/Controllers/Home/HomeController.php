<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CustomerRepository;

class HomeController extends Controller
{
    private $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;

    }
    public function index()
    {
        echo date("Y-m-d H:i:s");exit;
        $all=$this->customerRepository->all();
        return view('/home/index',compact('all'));



    }
}
