<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getEmployee(Request $request) {
        $url = 'https://dummy.restapiexample.com/api/v1/employees';

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        curl_close($ch);

        $response= json_decode($result, true);

        return view('employee/index', ['response' => $response]);
    }

    public function getEmployeeById(Request $request, $id) {
        $url = 'https://dummy.restapiexample.com/api/v1/employee/'.$id;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        curl_close($ch);

        $response= json_decode($result, true);

        return view('employee/getEmployeeById', ['response' => $response]);
    }

    public function viewCreateEmployee()
    {
        $url = 'https://dummy.restapiexample.com/api/v1/employee/';

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        curl_close($ch);

        $response = json_decode($result, true);

        return view('employee/create', ['response' => $response]);
    }

    public function editSuccess()
    {
        return view('employee/success');
    }


    public function createEmployee(Request $request)
    {
        $url = 'https://dummy.restapiexample.com/api/v1/create';

        // Mendapatkan data dari formulir
        $data = [
            'name' => $request->input('name'),
            'salary' => $request->input('salary'),
            'age' => $request->input('age')
        ];

        $payload = json_encode($data);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        curl_close($ch);

        $response = json_decode($result, true);

        // Return JSON response
        //return response()->json($response);

        return redirect('/employee/success');

    }

    public function updateEmployee(Request $request, $id) {
        $url = 'https://dummy.restapiexample.com/api/v1/update/'.$id;

        $data = array(
            'name' => 'test',
            'salary' => '123',
            'age' => '23'
        );

        $payload = json_encode($data);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        curl_close($ch);

        $response= json_decode($result, true);

        // Return JSON response
        //return response()->json($response);

        // Redirect to success page
        return redirect('/employee/success');
    }

    public function editEmployee(Request $request, $id) {
        $url = 'https://dummy.restapiexample.com/api/v1/employee/'.$id;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        curl_close($ch);

        $response= json_decode($result, true);
        

        return view('employee/editEmployee', ['response' => $response]);
    }

    public function deleteEmployee(Request $request, $id) {
        $url = 'https://dummy.restapiexample.com/api/v1/delete/'.$id;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'DELETE');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        curl_close($ch);

        $response= json_decode($result, true);

        // Return JSON response
        // return response()->json($response);

        // Redirect to success page
        return redirect('/employee/success');
    }


}
