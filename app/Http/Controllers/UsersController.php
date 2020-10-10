<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\IRepository\IModelRepository;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Exception;

class UsersController  extends Controller
{
    private IModelRepository $IModelRepository;

    public function __construct(IModelRepository $IModelRepository)
    {
        $this->IModelRepository = $IModelRepository;
    }
    public function List()
    {
        try {
            $data = [];
            $data['Model'] = new User();
            $response = $this->IModelRepository->List($data);
            if (isset($response['Error'])) {
                throw new Exception($response['Error']->getMessage());
            }
            return view('name')->with('response', $response);
        } catch (Exception $ex) {
            return view('error');
        }
    }
}
