<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Title as Title;
use App\Client as Client;

class ClientController extends Controller
{

    public function __construct(Title $title, Client $client)
    {
      $this->titles = $title->all();
      $this->client = $client;
    }

    public function index()
    {
      // $data =[];
      // $obj = new \stdClass;
      // $obj->id = 1;
      // $obj->title = 'mr';
      // $obj->name = 'john';
      // $obj->last_name = 'doe';
      // $obj->email = 'john@domain.com';
      // $data['clients'][] = $obj;
      //
      // $obj = new \stdClass;
      // $obj->id = 2;
      // $obj->title = 'ms';
      // $obj->name = 'jane';
      // $obj->last_name = 'doe';
      // $obj->email = 'jane@another-domain.com';
      // $data['clients'][] = $obj;
      //isso e data no banco de dados

      //e isso substitui o treco de cima
      $data = [];
      $data['clients'] = $this->client->all();

      return view('client/index',$data);
    }


    public function newClient(Request $request)
    {
        $data=[];
        $data['title'] = $request->input('title');
        $data['name'] = $request->input('name');
        $data['lastName'] = $request->input('lastName');
        $data['address'] = $request->input('address');
        $data['zipCode'] = $request->input('zipCode');
        $data['city'] = $request->input('city');
        $data['state'] = $request->input('state');
        $data['email'] = $request->input('email');
          // dd($request);


        if ($request->isMethod('post')){
            $this->validate(
              $request,[
                  'name' =>'required|min:5',
                  'lastName' =>'required',
                  'address' =>'required',
                  'zipCode' =>'required',
                  'city' =>'required',
                  'state' =>'required',
                  'email' =>'required'
                  ]

              );
                // $client = new Client();
                // $client->insert($data);

                $this->client->insert($data);

                //shows the data
                //dd($data);
                return redirect('clients');
        }


        $data['titles']=$this->titles;
        $data['modify'] = 0;
        return view('client/form',$data);
    }


    public function create()
    {
          $data=[];
          $data['titles']=$this->titles;
          $data['modify'] = 1;
          // dd($data);

          return view('client/form',$data);
    }

    public function show($client_id)
    {
        $data = [];
        $data['titles'] = $this->titles;
        $data['modify'] = 1;
        $client_data = $this->client->find($client_id);
        $data['name'] = $client_data->name;
        $data['lastname'] = $client_data->lastname;
        $data['address'] = $client_data->address;
        $data['zipcode'] = $client_data->zipcode;
        $data['city'] = $client_data->city;
        $data['state'] = $client_data->state;
        $data['email'] = $client_data->email;
        $data['client_id'] = $client_id;

        return view('client/form', $data);
    }


    public function modify(Request $request, $client_id)
      {
          $data = [];
          $data['title'] = $request->input('title');
          $data['name'] = $request->input('name');
          $data['lastname'] = $request->input('lastname');
          $data['address'] = $request->input('address');
          $data['zipcode'] = $request->input('zipcode');
          $data['city'] = $request->input('city');
          $data['state'] = $request->input('state');
          $data['email'] = $request->input('email');

          if ($request->isMethod('post')){

              $this->validate(
                  $request,[
                      'name' =>'required|min:5',
                      'lastname' =>'required',
                      'address' =>'required',
                      'zipcode' =>'required',
                      'city' =>'required',
                      'state' =>'required',
                      'email' =>'required'
                  ]
              );

              $client_data = $this->client->find($client_id);


              $client_data->title = $request->input('title');
              $client_data->name = $request->input('name');
              $client_data->lastname = $request->input('lastname');
              $client_data->address = $request->input('address');
              $client_data->zipcode = $request->input('zipcode');
              $client_data->city = $request->input('city');
              $client_data->state = $request->input('state');
              $client_data->email = $request->input('email');

              $client_data->save();

              return redirect('clients');
          }


          $data['titles'] = $this->titles;
          $data['modify'] = $client_id;
          return view('client/form', $data);
      }

}
